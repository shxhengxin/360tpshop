<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function reg(){

        //注册
        $user = D('User');

        if(IS_POST){
            if($user->create()){
                $user->name = I('post.name');
                $user->pass = md5(I('post.pass'));
                $user->email = I('post.email');
                $user->ctime = time();
                if ($user->add()) {
                    $this->sendEmail(I('post.name'),I('post.email'));

                }else{
                    $this->success("注册失败，请重新注册",'','3');

                }
            }else{
                $error= $user->getError();
                $this->success("$error",'','3');

            }
        }
    }


    public function login($user='')
    {
        if ($user !== '') {
            cookie('name', $user,120);
            $this->redirect('/Home/index/index');
        } else {
            $user = D('User');
            if (IS_POST) {
                if ($user->create()) {
                    $users = $user->where("name='" . I('post.username') . "'")->select();
                    if ($users['0']['pass'] === md5(I('post.pass'))) {
                        cookie('name', $users['0']['name'],120);
                        $this->redirect('Home/index/index');
                    } else {
                        $this->success("登陆失败,请重新输入", '', '3');
                    }
                } else {
                    $error = $user->getError();
                    $this->success("$error", U('Home/inde/index'), '3');
                }

            }

        }

    }

    public function checkEmail()
    {

        $user = D('user');
        $users = $user->where('name="'.$_GET['name'].'"')->select();

        if($_COOKIE['name'] == $_GET['name']){

            $users[0]['active']= 1;
            $user->where('name="'.$_GET['name'].'"')->save($users[0]);

            $this->login($_GET['name']);

        }else{

            $this->assign('users',$users[0]);
            $this->display();
        }

    }

    public function secondEmail(){
        $this->sendEmail($_POST['name'],$_POST['email']);
    }

    public function sendEmail($name,$email){
        $url = 'http://api.sendcloud.net/apiv2/mail/send';
        $API_USER = 'useramaya_test_vo1VGp';
        $API_KEY = '4zpoF4djku9BBz9h';

        $param = array(
            'apiUser' => $API_USER, # 使用api_user和api_key进行验证
            'apiKey' => $API_KEY,
            'from' => '578146119@qq.com', # 发信人，用正确邮件地址替代
            'fromName' => '测试',
            'to' => $email, # 收件人地址, 用正确邮件地址替代, 多个地址用';'分隔
            'subject' => '注册验证',
            'html' => "360shop1.com/index.php/Home/user/checkEmail/name/".$name,
            'respEmailId' => 'true'
        );


        $data = http_build_query($param);

        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $data
            ));
        $context  = stream_context_create($options);
        $result = file_get_contents($url, FILE_TEXT, $context);

        $this->login(I('post.name'));

        return $result;
    }

}