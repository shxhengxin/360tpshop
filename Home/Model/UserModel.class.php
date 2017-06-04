<?php
namespace Home\Model;

use Think\Model;

class UserModel extends Model{
    protected $_validate = array(
        array('email','email',"请正确输入邮箱"),
        array('email','','邮箱已注册',0,'unique',1),
        array('name','','帐号名称已经存在！',0,'unique',1),
        array('name','4,16','请输入4-16位用户名',0,'length',1),
        array('name','require','用户名不能为空'),
        array('pass','6,20','密码为6-20位',1,'length'),
        array('pass','require','密码不能为空'),
        array('surePass','pass','两次输入密码不一致',0,'confirm',1),
        array('code','require','验证码不能为空'),

        array('username','require','用户名不能为空'),

    );
}




?>