<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <title>063商城</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="renderer" content="webkit">
    <meta property="wb:webmaster" content="82757f177989599b">
    <meta name="renderer" content="webkit">

    <link rel="stylesheet" href="/Public/css/home/bootstrap.min.css">
    <link rel="shortcut icon" href="/Public/uploads/public/home/favicon.ico">
    <link rel="stylesheet" href="/Public/css/home/unknown.css">
    <link rel="stylesheet" href="/Public/css/home/simplepop.css">
    <link rel="stylesheet" href="/Public/css/home/main.css">
    <link rel="stylesheet" href="/Public/css/home/index.css">
    <link rel="stylesheet" href="/Public/css/home/qikoo-v-index.css">
    <link rel="stylesheet" href="/Public/css/home/index-style.css">
    <script>
        var _isindex = 1;
    </script>

    <!--[if lt IE 9]>
    <script src="/Public/js/home/htmlshiv.min.js">
    </script>
    <![endif]-->
    <script src="/Public/js/home/simplepop.js"></script>
    <script src="/Public/js/home/jQuery-2.1.4.min.js"></script>
    <script async="" src="/Public/js/home/analytics.js"></script>
    <script type="text/javascript" async="" src="/Public/js/home/mv.js"></script>
    <script type="text/javascript" async="" src="/Public/js/home/mba.js"></script>
    <script type="text/javascript" async="" src="/Public/js/home/mvl.js"></script>
    <script type="preload-script" src="/Public/js/home/utils.js"></script>
    <script type="preload-script" src="/Public/js/home/jq-suggest.js"></script>
    <script type="preload-script" src="/Public/js/home/jq-suggest-client.js"></script>
    <script type="text/javascript" async="async" charset="utf-8" src="/Public/js/home/zh_cn.js" data-requiremodule="lang"></script>

    <style type="text/css">
        .rtype{
            font-size:16px;
            background-color:#E8EDD3;
            margin-left:-14px;
            padding:16px 30px;
            border-top:1px solid #DEE8B9;
            border-bottom:1px solid #DEE8B9;
            border-right:2px solid #DEE8B9;
            cursor:pointer;
        }
    </style>

</head>
<body id="body">

<!-- modal静态框 -->
<div class="modal" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:0px;background-color:#F0F5DE;margin-top:100px;">
            <div class="modal-header">
                <h4 class="modal-title" id="gridSystemModalLabel" style="color:green;font-weight:bold;font-family:Arail;"></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row login-block">
                        <div class="col-md-12">
                            <p style="text-align:center;line-height:30px;color:red;"></p>
                            <form class="form-horizontal" action="<?php echo U('Home/user/login');?>" method="post" name="login" onsubmit="return doLogin()">
                                <input type="hidden" name="_token" value="SZm2ZKDrZHmJmsxQYahJqj6XYUVqFLSQsAjpJWUJ" />
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">账号：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" id="inputName" placeholder="用户名" style="border-radius:0px;">
                                        <span id="name" style="display:none;color:red;">&nbsp;&nbsp;&nbsp;用户名不能为空！</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">密码：</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="pass" id="inputPass" placeholder="请输入您的密码" style="border-radius:0px;">
                                        <span id="pass" style="display:none;color:red;">&nbsp;&nbsp;&nbsp;密码不能为空！</span>
                                    </div>
                                    <a href="http://27.app/home/losePass" style='color:#0082CB;line-height:34px;cursor:pointer;' id="losePass">忘记密码? 点击找回</a>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">验证码：</label>
                                    <div class="col-sm-7" width="330">
                                        <input type="text" class="form-control" name="code" id="inputCode" placeholder="请输入验证码" style="border-radius:0px;">
                                        <img src="http://27.app/home/getcode" onclick="this.src='http://27.app/home/getcode?id='+Math.random();" width="100" height="34" style="position:relative;left:320px;top:-34px;"/>
                                        <span id="code" style="display:none;color:red;margin-top:-34px;">&nbsp;&nbsp;&nbsp;请输入验证码！</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href='#' style='color:#0082CB;margin-right:240px;' onclick='return outerRegister()'>没有帐号?注册一个</a>
                                    <button type="button" id="login-close" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="submit" class="btn btn-primary" style="background-color:#36AA3F;">登录</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row register-block" style="display:none;">
                        <div class="col-md-12" id="email-reg" style="float:left;">
                            <p style="text-align:center;line-height:30px;color:red;"></p>
                            <form class="form-horizontal ERform" action="<?php echo U('Home/user/reg');?>" method="post" name="" onsubmit="return doCheckER()">
                                <input type="hidden" name="_token" value="SZm2ZKDrZHmJmsxQYahJqj6XYUVqFLSQsAjpJWUJ">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">邮箱：</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control checkEmailRegister" name="email" id="eEmail" placeholder="请输入您的常用邮箱" style="border-radius:0px;" onblur="return IsEmail()"/>
                                        <span id="errEmail" class="errInfo" style="display:none;color:red;">&nbsp;&nbsp;&nbsp;邮箱不能为空！ <a href="http://email.163.com/" target="_blank" style='color:#0082CB;'>没有邮箱?</a></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">用户名：</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control checkEmailRegister" name="name" id="eName" placeholder="字母开头，4-16位：字母、数字或下划线" style="border-radius:0px;">
                                        <span id="errName" class="errInfo" style="display:none;color:red;">&nbsp;&nbsp;&nbsp;用户名不能为空！</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">密码：</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control checkEmailRegister" name="pass" id="ePass" placeholder="6-20个字符(区分大小写)" style="border-radius:0px;">
                                        <span id="errPass" class="errInfo" style="display:none;color:red;">&nbsp;&nbsp;&nbsp;密码不能为空！</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">确认密码：</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control checkEmailRegister" name="surePass" id="eSurePass" placeholder="请再次输入密码" style="border-radius:0px;">
                                        <span id="errSurePass" class="errInfo" style="display:none;color:red;">&nbsp;&nbsp;&nbsp;请确认密码！</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">验证码：</label>
                                    <div class="col-sm-6" width="330">
                                        <input type="text" class="form-control" name="code" id="eCode" placeholder="请输入验证码，不区分大小写" style="border-radius:0px;">
                                        <img src="http://27.app/home/getcode" onclick="this.src='http://27.app/home/getcode?id='+Math.random();" width="100" height="34" style="position:relative;left:288px;top:-34px;"/>
                                        <span class="errInfo" id="errCode" style="display:none;color:red;margin-top:-34px;">&nbsp;&nbsp;&nbsp;请输入验证码！</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href='#' style='color:#0082CB;margin-right:140px;' onclick='return outerLogin()'>已有帐号?前去登录</a>
                                    <button type="button" id="register-close" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    <button type="submit" class="btn btn-primary ERbutton" style="background-color:#36AA3F;">注册</button>
                                </div>
                            </form>
                        </div>

                        <label class="col-sm-12" style="text-align:right;">
                            <span ><input class="quc-checkbox" type="checkbox" name="is_agree" checked id="is_agree" data-name="agreeLicence" style="margin-top:-3px;"></span>
		                            <span style="color:#959393;">
		                                我已经阅读并同意
		                                <a class="quc-link" href="http://i.360.cn/pub/protocol.html" target="_blank">《063用户服务条款》</a>
		                            </span>
                        </label>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="mod-header">
    <div class="topbox" id="gotop">
        <div class="top-container">
            <ul>
                <li class="topbox-item leftitem" style="margin-left:-10px">
                    <a data-monitor="home_top_buy" target="_blank" href="http://mall.360.com/help/show?id=helpcontent_14f1b541d8b87874021d0f6185fe7376">企业采购</a>
                </li>
                <li class="topbox-item leftitem">
                    <a data-monitor="home_top_help" target="_blank" href="http://mall.360.com/help">帮助中心</a>
                </li>
                <li class="topbox-item leftitem">
                    <a data-monitor="home_top_collect" class="js-connect" href="">收藏本站</a>
                </li>
                <li class="topbox-item leftitem">
                    <a data-monitor="home_top_in" href="http://mall.360.com/help/product" target="_blank">商品入驻</a>
                </li>
                <li class="topbox-item leftitem">
                    <a data-monitor="home_top_old" href="http://watch.mall.360.com/apply" target="_blank">老人手环申请</a>
                </li>
                <li class="topbox-item leftitem">
                    <a data-monitor="home_top_app" target="_blank" href="http://mall.360.com/xia/zai" class="telshop"><i></i>手机360商城</a>
                </li>
                <li class="topbox-item rightitem" style="margin-right:-10px">

                    <a data-monitor="home_top_order" href="http://27.app/home/myorder" target="_blank">我的订单</a>

                </li>
                <li class="topbox-item rightitem hassx">
                    <a href="http://mall.360.com/f" target="_blank" data-monitor="home_top_fcode">F码购买</a>
                </li>
                <li class="topbox-item rightitem navloginbox">
                    <?php if($_COOKIE['name']== null): ?><div class="loginbefore nloginWrap" style="display: block;">
                        <span id="login" style="cursor:pointer;line-height:36px;color:#23AC38;">登录&nbsp;&nbsp;&nbsp;</span>
                        <span id="register" style="cursor:pointer;line-height:36px;color:#23AC38;">注册&nbsp;&nbsp;&nbsp;</span>
                    </div>
                        <?php else: ?>
                        <div class="loginbefore nloginWrap" style="display: block;">
                    <span class="top-uname popUsername">
									<img src="/Public/uploads/photos/home/default.png" class="img-circle" style="width:30px;margin-right:8px;">
                        用户:<?php echo (cookie('name')); ?>
                    </span>
                        </div><?php endif; ?>
                </li>
                <li class="topbox-item rightitem navloginbox">
                    <div class="loginafter loginWrap" style="display: block;">
		                        <span class="top-uname popUsername">
									<img src="http://27.app/./uploads/photos/home/default.png" class="img-circle" style="width:30px;margin-right:8px;">063用户</span>
                        <div class="popbox" style="display: block;">
                            <a class="top-uname popUsername">063用户</a>
                            <ul class="topuserbox">
                                <span style="border:1px solid #7ABD2C;border-radius:50%;width:16px;height:16px;float:right;position:relative;top:145px;left:-26px;background:#82C92F"><span class="notice" style="margin-left:3px;margin-top:-4px;color:#fff;">3</span></span>
                                <li><a href="http://27.app/home/myorder" target="_blank">我的订单</a></li>
                                <li><a href="http://27.app/home/userInfo" target="_blank">账号设置</a></li>
                                <li><a href="http://27.app/home/myfavourite" target="_blank">我的喜欢</a></li>
                                <li><a href="http://27.app/home/address" target="_blank">收货地址</a></li>
                                <li><a href="http://27.app/home/message" target="_blank">站内消息</a></li>
                                <li><a href="http://27.app/home/dologout">退出登录</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="top-container">
        <div class="header-logo">
            <a class="sellogo" href="http://alalei.com" data-monitor="home_title_logo">
                <img src="/Public/uploads/public/home/logo.png">
            </a>
        </div>
        <div class="header-tools">
            <div class="suggest-box">
                <form action="http://27.app/home/good/list/0" method="get">
                    <input type="text" id="__mall_search_kw__" class="suggest" name="search" style="height:42px"><input type="submit" value="" class="search-btn" id="__mall_search_btn__" data-monitor="home_search_button">
                </form>
                <p class="searchkey">
                    <a href="http://mall.360.com/ac/jingxuandianjing0725" target="_blank">电竞配件低至5折</a>
                    <a href="http://mall.360.com/ac/jimiwupingdianshineigou" target="_blank">享受电影时光</a>
                    <a href="http://mall.360.com/ac/zhinengchuxing0713" target="_blank">智能出行伴侣</a>
                </p>
            </div>
            <div class="topshopcart carthas">
                <a href="http://27.app/home/order/shopcar" target="_blank" class="header-cart" data-monitor="home_title_shopcart">
                    <i class="icon">
                    </i>我的购物车<span class="cart-size">(1)</span>
                </a>
                <div class="header-cart-popup">
                    <div class="cart-tips">
                        正在加载购物车...
                    </div>
                    <div class="cart-info">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbox">
        <div class="top-container">
            <ul class="navbar column-list clearfix" id="typeBar">
                <li class="top-item topfirst">
                    <a data-monitor="home_fenlei_allgoods" href="http://alalei.com/home/good/list/0?search=" target="_blank">全部智能酷品</a>
                </li>
            </ul>
            <div class="navad">
                <script charset="Shift_JIS" src="http://chabudai.sakura.ne.jp/blogparts/honehoneclock/honehone_clock_tr.js"></script>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $.ajax({
        url:'http://27.app/home/typeBar/ajax',
        type:'get',
        dataType:'json',
        success:function(msg){
            for(var i=1; i<=msg.length; i++){
                var item = '<li class="top-item" data-type="'+i+'"><a href="http://alalei.com/home/good/list/'+msg[i-1].id+'" data-monitor="home_title_goods'+i+'" target="_blank">'+msg[i-1].type+'</a></li>';
                $('#typeBar').append(item);
            }
        }
    })
</script>
<script>	page_type="index";		</script>
<div class="mod-index">
    <div class="mod-banner">
        <div class="banner-slide">
            <div class="slideBox">
                <a class="slider-film " data-monitor="home_lunbo_lb1" style="display:block; background-image:url(http://27.app/uploads/banner/14729947644109.jpg); background-position:center;background-repeat:no-repeat;" href="#" target="_blank"></a>
                <a class="slider-film js-lazyload" data-monitor="home_lunbo_lb2" style=" background-image:url(http://27.app/uploads/banner/14729947788415.jpg); background-position:center;background-repeat:no-repeat;" href="#" target="_blank" data-original="http://27.app/uploads/banner/14729947788415.jpg"></a>
                <a class="slider-film js-lazyload" data-monitor="home_lunbo_lb3" style=" background-image:url(http://27.app/uploads/banner/14729947841806.jpg); background-position:center;background-repeat:no-repeat;" href="#" target="_blank" data-original="http://27.app/uploads/banner/14729947841806.jpg"></a>
                <a class="slider-film js-lazyload" data-monitor="home_lunbo_lb4" style=" background-image:url(http://27.app/uploads/banner/14729947896898.jpg); background-position:center;background-repeat:no-repeat;" href="#" target="_blank" data-original="http://27.app/uploads/banner/14729947896898.jpg"></a>
                <a class="slider-film js-lazyload" data-monitor="home_lunbo_lb5" style=" background-image:url(http://27.app/uploads/banner/14729947957771.png); background-position:center;background-repeat:no-repeat;" href="#" target="_blank" data-original="http://27.app/uploads/banner/14729947957771.png"></a>
                <a class="slider-film js-lazyload" data-monitor="home_lunbo_lb6" style=" background-image:url(http://27.app/uploads/banner/14729948003742.jpg); background-position:center;background-repeat:no-repeat;" href="#" target="_blank" data-original="http://27.app/uploads/banner/14729948003742.jpg"></a>
                <a class="slider-film js-lazyload" data-monitor="home_lunbo_lb7" style=" background-image:url(http://27.app/uploads/banner/14729948154676.jpg); background-position:center;background-repeat:no-repeat;" href="#" target="_blank" data-original="http://27.app/uploads/banner/14729948154676.jpg"></a>
            </div>
            <a href="#" onclick="return false" class="slide-prev" data-monitor="home_lunbo_prev" style="display: inline;"></a>
            <a href="#" onclick="return false" class="slide-next" data-monitor="home_lunbo_next" style="display: inline;"></a>
            <div class="slide-point" data-monitor="home_lunbo_change" style="display: block; margin-left: -82.5px;">
                <a href="javascript:;" onclick="return false;" class="curr-point"></a>
                <a href="javascript:;" onclick="return false;"></a>
                <a href="javascript:;" onclick="return false;"></a>
                <a href="javascript:;" onclick="return false;"></a>
                <a href="javascript:;" onclick="return false;"></a>
                <a href="javascript:;" onclick="return false;"></a>
                <a href="javascript:;" onclick="return false;"></a>
            </div>
        </div>
    </div>
    <div class="side-category">
        <ul class="categorylist" data-asort="1">
            <li class="sub-item menu1 odd" data-monitor="home_fenlei_tab1">
                <a target="_blank" style="text-decoration:none" href="http://27.app/home/good/list/1" class="category-a">手机/配件1</a>
                <div class="left-sub-list" style="display:none">
                    <div class="second-level-box">
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/6" target="_blank">360手机</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/26" target="_blank">360手机Q5</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/27" target="_blank">360手机N4</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/7" target="_blank">便携耳机</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/28" target="_blank">纽曼耳机</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/29" target="_blank">爱易思</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/8" target="_blank">手机拍照</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/9" target="_blank">移动电源</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/48" target="_blank">qq</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                    </div>
                    <div class="single-item">
                        <a href="#">
                            <img data-size="240_400_" src="https:p.ssl.qhmsg.com/t0169d9f4b681742514.jpg">
                        </a>
                    </div>
                </div>
            </li>
            <li class="sub-item menu1 odd" data-monitor="home_fenlei_tab1">
                <a target="_blank" style="text-decoration:none" href="http://27.app/home/good/list/2" class="category-a">智能穿戴</a>
                <div class="left-sub-list" style="display:none">
                    <div class="second-level-box">
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/10" target="_blank">智能手环</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/30" target="_blank">乐心手环</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/31" target="_blank">唯乐手环</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/11" target="_blank">智能手表</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/32" target="_blank">果壳智能手表</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/33" target="_blank">inWatch手表</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/12" target="_blank">智能配饰</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/13" target="_blank">儿童手表</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                    </div>
                    <div class="single-item">
                        <a href="#">
                            <img data-size="240_400_" src="https:p.ssl.qhmsg.com/t0169d9f4b681742514.jpg">
                        </a>
                    </div>
                </div>
            </li>
            <li class="sub-item menu1 odd" data-monitor="home_fenlei_tab1">
                <a target="_blank" style="text-decoration:none" href="http://27.app/home/good/list/3" class="category-a">智能家居</a>
                <div class="left-sub-list" style="display:none">
                    <div class="second-level-box">
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/14" target="_blank">家居办公</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/34" target="_blank">智能安防</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/35" target="_blank">水杯</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/15" target="_blank">智能网络</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/36" target="_blank">安全路由</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/37" target="_blank">随身WIFI</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/16" target="_blank">智能厨电</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/17" target="_blank">生活电器</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                    </div>
                    <div class="single-item">
                        <a href="#">
                            <img data-size="240_400_" src="https:p.ssl.qhmsg.com/t0169d9f4b681742514.jpg">
                        </a>
                    </div>
                </div>
            </li>
            <li class="sub-item menu1 odd" data-monitor="home_fenlei_tab1">
                <a target="_blank" style="text-decoration:none" href="http://27.app/home/good/list/4" class="category-a">智能车品</a>
                <div class="left-sub-list" style="display:none">
                    <div class="second-level-box">
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/18" target="_blank">行车记录仪</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/41" target="_blank">行车记录仪二代</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/42" target="_blank">行车记录仪套装</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/19" target="_blank">车载电器</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/38" target="_blank">车载电源</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/39" target="_blank">车载影音</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/20" target="_blank">安全驾驶</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/21" target="_blank">汽车装饰</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                    </div>
                    <div class="single-item">
                        <a href="#">
                            <img data-size="240_400_" src="https:p.ssl.qhmsg.com/t0169d9f4b681742514.jpg">
                        </a>
                    </div>
                </div>
            </li>
            <li class="sub-item menu1 odd" data-monitor="home_fenlei_tab1">
                <a target="_blank" style="text-decoration:none" href="http://27.app/home/good/list/5" class="category-a">影音娱乐</a>
                <div class="left-sub-list" style="display:none">
                    <div class="second-level-box">
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/22" target="_blank">音响</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/43" target="_blank">雅马哈音响</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/44" target="_blank">JBL音响</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/23" target="_blank">投影仪</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/45" target="_blank">极米无屏电视</a>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/46" target="_blank">坚果家庭影院</a>
                            </dd>
                        </dl>
                        <dl class="second-level">
                            <dt>
                                <a style="text-decoration:none" href="http://27.app/home/good/list/24" target="_blank">耳机</a>
                                <i>&gt;</i>
                            </dt>
                            <dd>
                            </dd>
                        </dl>
                    </div>
                    <div class="single-item">
                        <a href="#">
                            <img data-size="240_400_" src="https:p.ssl.qhmsg.com/t0169d9f4b681742514.jpg">
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="topad">
        <ul>
            <li>
                <a href="#" target="_blank" data-monitor="home_lunbo_resource01">
                    <img src="/Public/uploads/public/home/t013ae6c1a7578e50a7.png">
                </a>
            </li>
            <li>
                <a href="#" target="_blank" data-monitor="home_lunbo_resource02">
                    <img src="/Public/uploads/public/home/t01546cd48526130ba5.png">
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="part-myproducts" id="part-360ziyouitems">
    <ul class="part-container">  <li>
        <a href="http://mall.360.com/shouji/q5" target="_blank" data-monitor="home_own_goods1">
            <img class="js-lazyload" data-size="240_320_" src="https://p.ssl.qhmsg.com/t01fa4c52d2d1ec193b.jpg" style="display: block;">
        </a>  </li>
        <li>
            <a href="http://mall.360.com/ac/badilong" target="_blank" data-monitor="home_own_goods2">
                <img class="js-lazyload" data-size="240_320_" src="https://p.ssl.qhmsg.com/t014c63429ce7988185.png" style="display: block;">
            </a>  </li>
        <li>
            <a href="http://mall.360.com/ac/360luyou" target="_blank" data-monitor="home_own_goods3">
                <img class="js-lazyload" data-size="240_320_" src="https://p.ssl.qhmsg.com/t01ef53b6ccd38ee31b.png" style="display: block;">
            </a>  </li>
        <li>
            <a href="http://mall.360.com/ac/shexiangji" target="_blank" data-monitor="home_own_goods4">
                <img class="js-lazyload" data-size="240_320_" src="https://p.ssl.qhmsg.com/t01aec6573e4ffe90a4.png" style="display: block;">
            </a>  </li>
        <li>
            <a href="http://mall.360.com/ac/che2" target="_blank" data-monitor="home_own_goods5">
                <img class="js-lazyload" data-size="240_320_" src="https://p.ssl.qhmsg.com/t01ee71eaa144382dc0.png" style="display: block;">
            </a>  </li>
    </ul>
</div>


<div class="part-activitys" id="part-360activity">
    <div class="part-container">
        <span class="vline"></span>
        <span class="vicon"></span>
        <span class="part-title">特价商品</span>
        <span class="vicon"></span>
        <span class="vline"></span>
    </div>
    <ul class="part-container">
        <li class="ac0">
            <a href="#" target="_blank" data-monitor="home_activity_ziyuanwei01">
                <img class="js-lazyload" src="https:p.ssl.qhmsg.com/t01d7dece4c79fd65f4.jpg">
            </a>
        </li>
        <li class="ac1">
            <a href="#" target="_blank" data-monitor="home_activity_ziyuanwei02">
                <img class="js-lazyload" src="https:p.ssl.qhmsg.com/t011f3f740b0d2d42df.jpg">
            </a>
        </li>
        <li class="ac2">
            <a href="#" target="_blank" data-monitor="home_activity_ziyuanwei03">
                <img class="js-lazyload" src="https:p.ssl.qhmsg.com/t01aec37eff7d9c8d12.jpg">
            </a>
        </li>
        <li class="ac3">
            <a href="#" target="_blank" data-monitor="home_activity_ziyuanwei04">
                <img class="js-lazyload" src="https:p.ssl.qhmsg.com/t01f891f86e5c41f8d7.jpg">
            </a>
        </li>
        <li class="ac4">
            <a href="#" target="_blank" data-monitor="home_activity_ziyuanwei05">
                <img class="js-lazyload" src="https:p.ssl.qhmsg.com/t016c9a102f8bd0a01f.jpg">
            </a>
        </li>
        <li class="ac5">
            <a href="#" target="_blank" data-monitor="home_activity_ziyuanwei06">
                <img class="js-lazyload" src="https:p.ssl.qhmsg.com/t01fdd80c649c6addad.jpg">
            </a>
        </li>
    </ul>
</div>


<div class="part-smart" id="part-floor_cat_1">
    <div class="part-container">
        <div class="part-title">手机/配件1</div>
        <a href="http://27.app/home/good/list/1" target="_blank" class="indexmore" data-monitor="home_floor1_more">更多</a>
    </div>
    <div class="part-container">
        <div class="part-left">
            <a class="part-left1" href="http://27.app/home/good/list/1" target="_blank" data-monitor="home_floor1_ac01">
                <img class="js-lazyload" data-size="240_390_" src="http://27.app/uploads/section/14730000782834.jpg">
            </a>
            <a class="part-left2" href="#" target="_blank" data-monitor="home_floor1_ac02">
                <img class="js-lazyload" data-size="240_140_" src="https:p.ssl.qhmsg.com/t011d759c35aad52e17.jpg">
            </a>
        </div>
        <div class="part-center">
            <ul class="part-list">
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/1" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">360手机Q5 Plus</span>
						<span class="price">
							<i class="yen">￥</i>2599
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730021092672.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/2" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">360手机N4</span>
						<span class="price">
							<i class="yen">￥</i>999
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730028336451.png">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/3" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">纽曼 S106 耳挂式无线蓝牙耳机</span>
						<span class="price">
							<i class="yen">￥</i>15
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730035807562.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/4" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">纽曼（Newmine）L-03运动蓝牙耳机</span>
						<span class="price">
							<i class="yen">￥</i>99
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730046479873.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/5" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">爱易思ES6000HIFI立体声运动款蓝牙耳机</span>
						<span class="price">
							<i class="yen">￥</i>159
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730050619575.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/6" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">爱易思E5800音乐立体声智控蓝牙耳机</span>
						<span class="price">
							<i class="yen">￥</i>159
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730056788437.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <div class="part-right">
            <p class="part-suggest-title">热销排行</p>
            <div class="part-suggest">
                <div class="slideBox">
                    <div class="slider-film" style="display: none;" >
                        <span 0></span>
                        <span 0></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/3" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730035807562.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">纽曼 S106 耳挂式无线蓝牙耳机 </dd>
                                <dd class="info">HD降噪 智能控制 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>15
                                </dd>
                            </dl>
                        </a>
                        <span 1></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/1" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730021092672.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">360手机Q5 Plus </dd>
                                <dd class="info">高通骁龙820 智慧双摄2.0 6.0&#039;&#039;屏幕 全金属机身 4GB内存+128GB存储 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>2599
                                </dd>
                            </dl>
                        </a>
                        <span 2></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/4" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730046479873.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">纽曼（Newmine）L-03运动蓝牙耳机 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>99
                                </dd>
                            </dl>
                        </a>
                        <span 3></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/6" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730056788437.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">爱易思E5800音乐立体声智控蓝牙耳机 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>159
                                </dd>
                            </dl>
                        </a>
                    </div>
                    <div class="slider-film" style="display: none;">
                        <span 4></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/2" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730028336451.png" style="display: inline;">
                                </dt>
                                <dd class="title">360手机N4 </dd>
                                <dd class="info">HelioX20 10核3阶64位处理器 4GB大内存 索尼1300万 涡轮闪充 指纹智键 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>999
                                </dd>
                            </dl>
                        </a>
                        <span 5></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/5" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730050619575.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">爱易思ES6000HIFI立体声运动款蓝牙耳机 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>159
                                </dd>
                            </dl>
                        </a>
                        <span 6></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/27" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730419512190.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">360随身WiFi 3 </dd>
                                <dd class="info">300M定制芯片，双PIFA天线，轻松穿过两堵墙，信号更强！ </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>24.9
                                </dd>
                            </dl>
                        </a>
                        <span 7></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/28" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="" style="display: inline;">
                                </dt>
                                <dd class="title">电视机 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>
                                </dd>
                            </dl>
                        </a>
                    </div>
                </div>
                <div class="slide-point" data-monitor="home_floor1_tuijianchange" style="display: block;">
                    <a href="javascript:;" onclick="return false;" class="curr-point"></a>
                    <a href="javascript:;" onclick="return false;" class=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="part-smart" id="part-floor_cat_2">
    <div class="part-container">
        <div class="part-title">智能穿戴</div>
        <a href="http://27.app/home/good/list/2" target="_blank" class="indexmore" data-monitor="home_floor1_more">更多</a>
    </div>
    <div class="part-container">
        <div class="part-left">
            <a class="part-left1" href="http://27.app/home/good/list/2" target="_blank" data-monitor="home_floor1_ac01">
                <img class="js-lazyload" data-size="240_390_" src="http://27.app/uploads/section/14730001119971.jpg">
            </a>
            <a class="part-left2" href="#" target="_blank" data-monitor="home_floor1_ac02">
                <img class="js-lazyload" data-size="240_140_" src="https:p.ssl.qhmsg.com/t011d759c35aad52e17.jpg">
            </a>
        </div>
        <div class="part-center">
            <ul class="part-list">
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/7" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">乐心BonBonC智能手环</span>
						<span class="price">
							<i class="yen">￥</i>79
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730066927925.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/8" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">乐心 mambo watch 智能运动手环</span>
						<span class="price">
							<i class="yen">￥</i>399
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730071557014.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/9" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">weloop唯乐 小黑2智能手表</span>
						<span class="price">
							<i class="yen">￥</i>399
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730074893228.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/10" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">唯乐Weloop Now 智能手环</span>
						<span class="price">
							<i class="yen">￥</i>199
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730077903988.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/11" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">inWatch Color智能手表</span>
						<span class="price">
							<i class="yen">￥</i>149
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730082577975.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/12" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">GEAK WatchⅡ果壳智能圆手表Pro版</span>
						<span class="price">
							<i class="yen">￥</i>1799
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730087451082.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <div class="part-right">
            <p class="part-suggest-title">热销排行</p>
            <div class="part-suggest">
                <div class="slideBox">
                    <div class="slider-film" style="display: none;" >
                        <span 0></span>
                        <span 0></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/10" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730077903988.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">唯乐Weloop Now 智能手环 </dd>
                                <dd class="info">全触控 30米防水 仅重20克 蓝牙4.0手机防丢 睡眠监控 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>199
                                </dd>
                            </dl>
                        </a>
                        <span 1></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/12" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730087451082.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">GEAK WatchⅡ果壳智能圆手表Pro版 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>1799
                                </dd>
                            </dl>
                        </a>
                        <span 2></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/8" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730071557014.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">乐心 mambo watch 智能运动手环 </dd>
                                <dd class="info">心率检测 触控屏幕 来电提醒 来电显示 睡眠监测 运动计步防水 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>399
                                </dd>
                            </dl>
                        </a>
                        <span 3></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/9" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730074893228.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">weloop唯乐 小黑2智能手表 </dd>
                                <dd class="info">运动跑步支持双系统手表 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>399
                                </dd>
                            </dl>
                        </a>
                    </div>
                    <div class="slider-film" style="display: none;">
                        <span 4></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/7" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730066927925.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">乐心BonBonC智能手环 </dd>
                                <dd class="info">运动计步 微信朋友圈运动PK 微信互联 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>79
                                </dd>
                            </dl>
                        </a>
                        <span 5></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/11" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730082577975.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">inWatch Color智能手表 </dd>
                                <dd class="info">来电短信提醒功能 日常事务管理 运动健康管理 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>149
                                </dd>
                            </dl>
                        </a>
                        <span 6></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/32" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="" style="display: inline;">
                                </dt>
                                <dd class="title">123 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>
                                </dd>
                            </dl>
                        </a>
                    </div>
                </div>
                <div class="slide-point" data-monitor="home_floor1_tuijianchange" style="display: block;">
                    <a href="javascript:;" onclick="return false;" class="curr-point"></a>
                    <a href="javascript:;" onclick="return false;" class=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="part-smart" id="part-floor_cat_3">
    <div class="part-container">
        <div class="part-title">智能家居</div>
        <a href="http://27.app/home/good/list/3" target="_blank" class="indexmore" data-monitor="home_floor1_more">更多</a>
    </div>
    <div class="part-container">
        <div class="part-left">
            <a class="part-left1" href="http://27.app/home/good/list/3" target="_blank" data-monitor="home_floor1_ac01">
                <img class="js-lazyload" data-size="240_390_" src="http://27.app/uploads/section/14730001361387.jpg">
            </a>
            <a class="part-left2" href="#" target="_blank" data-monitor="home_floor1_ac02">
                <img class="js-lazyload" data-size="240_140_" src="https:p.ssl.qhmsg.com/t011d759c35aad52e17.jpg">
            </a>
        </div>
        <div class="part-center">
            <ul class="part-list">
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/13" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">360智能摄像机</span>
						<span class="price">
							<i class="yen">￥</i>249
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730092686391.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/14" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">云视通（CloudSEE）智能猫眼</span>
						<span class="price">
							<i class="yen">￥</i>899
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730096462086.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/15" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">爱拼图（ipinto）智能水杯 W011</span>
						<span class="price">
							<i class="yen">￥</i>399
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730099634222.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/16" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">红树林健康智能水杯</span>
						<span class="price">
							<i class="yen">￥</i>299
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730103775888.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <div class="part-right">
            <p class="part-suggest-title">热销排行</p>
            <div class="part-suggest">
                <div class="slideBox">
                    <div class="slider-film" style="display: none;" >
                        <span 0></span>
                        <span 0></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/14" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730096462086.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">云视通（CloudSEE）智能猫眼 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>899
                                </dd>
                            </dl>
                        </a>
                        <span 1></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/16" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730103775888.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">红树林健康智能水杯 </dd>
                                <dd class="info">总会为你提前感知冷暖，只为了把最适合的温度留给你。 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>299
                                </dd>
                            </dl>
                        </a>
                        <span 2></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/15" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730099634222.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">爱拼图（ipinto）智能水杯 W011 </dd>
                                <dd class="info">waterever 为您量身定制 健康饮水方案 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>399
                                </dd>
                            </dl>
                        </a>
                        <span 3></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/13" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730092686391.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">360智能摄像机 </dd>
                                <dd class="info">1080P </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>249
                                </dd>
                            </dl>
                        </a>
                    </div>
                </div>
                <div class="slide-point" data-monitor="home_floor1_tuijianchange" style="display: block;">
                    <a href="javascript:;" onclick="return false;" class="curr-point"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="part-smart" id="part-floor_cat_4">
    <div class="part-container">
        <div class="part-title">智能车品</div>
        <a href="http://27.app/home/good/list/4" target="_blank" class="indexmore" data-monitor="home_floor1_more">更多</a>
    </div>
    <div class="part-container">
        <div class="part-left">
            <a class="part-left1" href="http://27.app/home/good/list/4" target="_blank" data-monitor="home_floor1_ac01">
                <img class="js-lazyload" data-size="240_390_" src="http://27.app/uploads/section/14730001905600.jpg">
            </a>
            <a class="part-left2" href="#" target="_blank" data-monitor="home_floor1_ac02">
                <img class="js-lazyload" data-size="240_140_" src="https:p.ssl.qhmsg.com/t011d759c35aad52e17.jpg">
            </a>
        </div>
        <div class="part-center">
            <ul class="part-list">
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/17" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">360行车记录仪二代&middot;美猴王版</span>
						<span class="price">
							<i class="yen">￥</i>599
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730106781263.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/18" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">360行车记录仪</span>
						<span class="price">
							<i class="yen">￥</i>399
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730110069291.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/19" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">米其林 6511ML 车载手机充电器 </span>
						<span class="price">
							<i class="yen">￥</i>62
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730113974208.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/20" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">米其林 100W 车载逆变器</span>
						<span class="price">
							<i class="yen">￥</i>149
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730116945716.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/21" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">网易云音乐车载蓝牙播放器</span>
						<span class="price">
							<i class="yen">￥</i>119
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730119531855.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/22" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">飞利浦SHB1803车载蓝牙耳机</span>
						<span class="price">
							<i class="yen">￥</i>359
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730122388158.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <div class="part-right">
            <p class="part-suggest-title">热销排行</p>
            <div class="part-suggest">
                <div class="slideBox">
                    <div class="slider-film" style="display: none;" >
                        <span 0></span>
                        <span 0></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/20" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730116945716.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">米其林 100W 车载逆变器 </dd>
                                <dd class="info">汽车转换器 车载充电器 插排式多功能输出 72001 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>149
                                </dd>
                            </dl>
                        </a>
                        <span 1></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/21" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730119531855.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">网易云音乐车载蓝牙播放器 </dd>
                                <dd class="info">点烟器式双USB车充 车载充电器 蓝牙FM发射器 智能车充 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>119
                                </dd>
                            </dl>
                        </a>
                        <span 2></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/22" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730122388158.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">飞利浦SHB1803车载蓝牙耳机 </dd>
                                <dd class="info">可以香薰的车载蓝牙耳机 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>359
                                </dd>
                            </dl>
                        </a>
                        <span 3></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/18" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730110069291.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">360行车记录仪 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>399
                                </dd>
                            </dl>
                        </a>
                    </div>
                    <div class="slider-film" style="display: none;">
                        <span 4></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/17" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730106781263.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">360行车记录仪二代&middot;美猴王版 </dd>
                                <dd class="info"> </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>599
                                </dd>
                            </dl>
                        </a>
                        <span 5></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/19" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730113974208.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">米其林 6511ML 车载手机充电器  </dd>
                                <dd class="info">一拖二双USB公仔转接口 2A 米其林公仔充电器 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>62
                                </dd>
                            </dl>
                        </a>
                    </div>
                </div>
                <div class="slide-point" data-monitor="home_floor1_tuijianchange" style="display: block;">
                    <a href="javascript:;" onclick="return false;" class="curr-point"></a>
                    <a href="javascript:;" onclick="return false;" class=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="part-smart" id="part-floor_cat_5">
    <div class="part-container">
        <div class="part-title">影音娱乐</div>
        <a href="http://27.app/home/good/list/5" target="_blank" class="indexmore" data-monitor="home_floor1_more">更多</a>
    </div>
    <div class="part-container">
        <div class="part-left">
            <a class="part-left1" href="http://27.app/home/good/list/5" target="_blank" data-monitor="home_floor1_ac01">
                <img class="js-lazyload" data-size="240_390_" src="http://27.app/uploads/section/14730002185614.jpg">
            </a>
            <a class="part-left2" href="#" target="_blank" data-monitor="home_floor1_ac02">
                <img class="js-lazyload" data-size="240_140_" src="https:p.ssl.qhmsg.com/t011d759c35aad52e17.jpg">
            </a>
        </div>
        <div class="part-center">
            <ul class="part-list">
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/23" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">JBL Horizon 桌面迷你音箱</span>
						<span class="price">
							<i class="yen">￥</i>869
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730125651468.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/24" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">JBL Clip+便携蓝牙音箱</span>
						<span class="price">
							<i class="yen">￥</i>439
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730128772531.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/25" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">雅马哈 TSX-B15迷你蓝牙音箱</span>
						<span class="price">
							<i class="yen">￥</i>599
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730131663640.jpg">
                    </a>
                </li>
                <li class="part-list-item">
                    <a style="text-decoration:none" class="part-info" href="http://27.app/home/good/detail/26" target="_blank" data-monitor="home_floor1_goods01">
                        <span class="info">雅马哈EPH-100入耳式耳机</span>
						<span class="price">
							<i class="yen">￥</i>599
						</span>
                        <img class="js-lazyload pimg" data-size="164_164_" src="http://27.app/uploads/gdisplay/14730134489079.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <div class="part-right">
            <p class="part-suggest-title">热销排行</p>
            <div class="part-suggest">
                <div class="slideBox">
                    <div class="slider-film" style="display: none;" >
                        <span 0></span>
                        <span 0></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/26" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730134489079.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">雅马哈EPH-100入耳式耳机 </dd>
                                <dd class="info">活跃你的听觉细胞，将每一个音符激活！ </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>599
                                </dd>
                            </dl>
                        </a>
                        <span 1></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/25" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730131663640.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">雅马哈 TSX-B15迷你蓝牙音箱 </dd>
                                <dd class="info">色彩，品质，丰富你的生活 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>599
                                </dd>
                            </dl>
                        </a>
                        <span 2></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/24" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730128772531.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">JBL Clip+便携蓝牙音箱 </dd>
                                <dd class="info">创新防水溅 全天候陪伴 蓝牙高保真 无噪声通话 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>439
                                </dd>
                            </dl>
                        </a>
                        <span 3></span>
                        <a style="text-decoration:none" href="http://27.app/home/good/detail/23" target="_blank" data-monitor="home_floor1_tuijian1">
                            <dl style="height:110px">
                                <dt>
                                    <img class="js-lazyload" data-size="72_72_" src="uploads/gdisplay/14730125651468.jpg" style="display: inline;">
                                </dt>
                                <dd class="title">JBL Horizon 桌面迷你音箱 </dd>
                                <dd class="info">JBL新利器！多项功能结合，带闹钟和收音机 </dd>
                                <dd class="price">
                                    <i class="yen">￥</i>869
                                </dd>
                            </dl>
                        </a>
                    </div>
                </div>
                <div class="slide-point" data-monitor="home_floor1_tuijianchange" style="display: block;">
                    <a href="javascript:;" onclick="return false;" class="curr-point"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="part-newproducts" id="part-newproducts" style="padding-bottom:30px">
    <div class="part-container">
        <span class="part-title">新品速递</span>
    </div>
    <div class="part-container">
        <ul class="new-list"></ul>
        <div style="text-decoration:none;">
            <a class="showmore" href="javascript:;" data-url="http://27.app/home/ajax" data-monitor="home_new_more">查看更多</a>
            <div class="nomore" style="display:none">没有更多了</div>
        </div>
    </div>
</div>
<div class="elevator_box">
    <ul class="elevator_list">
        <li class="elevator1" data-id="part-360activity" data-monitor="left_1f_click">
            <a href="javascript:;">1F<br> 活动</a>
        </li>


        <li class="elevator2" data-id="part-floor_cat_1" data-monitor="left_2f_click">
            <a href="javascript:;">2F<br> 手机</a>
        </li>


        <li class="elevator3" data-id="part-floor_cat_2" data-monitor="left_3f_click">
            <a href="javascript:;">3F<br> 穿戴</a>
        </li>


        <li class="elevator4" data-id="part-floor_cat_3" data-monitor="left_4f_click">
            <a href="javascript:;">4F<br> 家居</a>
        </li>


        <li class="elevator5" data-id="part-floor_cat_4" data-monitor="left_5f_click">
            <a href="javascript:;">5F<br> 车品</a>
        </li>


        <li class="elevator6" data-id="part-floor_cat_5" data-monitor="left_6f_click">
            <a href="javascript:;">6F<br> 影音</a>
        </li>


        <li class="elevator7" data-id="part-newproducts" data-monitor="left_7f_click">
            <a href="javascript:;">7F<br>新品</a>
        </li>
    </ul>
</div>

<div class="mod-footer">
    <div class="foot-bannerw">
        <div class="foot-banner clearfix">
            <div class="banner-item">
                <i class="icon1">7</i>7天无理由退货
            </div>
            <div class="banner-item">
                <i class="icon2">15</i>15天免费换货
            </div>
            <div class="banner-item">
                <i class="icon3">包</i>满99元包邮<span style="font-size:12px"></span>
            </div>
        </div>
    </div>
    <div class="foot-containerw">
        <div class="foot-container clearfix">
            <dl class="foot-con">
                <dt data-monitor="home_foot_freshman">帮助中心 </dt>
                <dd data-monitor="home_help_freshman">
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_32c2c1641fce863c6644f3b0586b98ab" rel="nofollow">用户注册</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_76072e16da4630f693343cafeecb5ba7" rel="nofollow">用户登录与密码找回</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_5e06b37bfc5656aed67b5752f2d7277e" rel="nofollow">购买指南</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_5cee349b1e43e02edaf7000e7c48133c" rel="nofollow">支付方式</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_b9b28247bc968beae4fbfedea0a2351d" rel="nofollow">配送与说明</a>
                </dd>
            </dl>
            <dl class="foot-con">
                <dt data-monitor="home_foot_help">售后服务 </dt>
                <dd data-monitor="home_help_help">
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_52efb0302e80307378d75a52ad77dcfe" rel="nofollow">7 日无理由退货</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_39b7f4bf73e2cda4f61f7b446e9a4307" rel="nofollow">质量问题 15 日内换货</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_23c08f5b301ff1a516b9e3efab21b4c1" rel="nofollow">保修条款</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_cb7bcabc741d372350d7fcceefbba3bf" rel="nofollow">服务流程</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_cd2440c9bbb1d5ff8b5d7aefbeda45e0" rel="nofollow">安迷之家</a>
                </dd>
            </dl>
            <dl class="foot-con">
                <dt data-monitor="home_foot_guide">特色服务 </dt>
                <dd data-monitor="home_help_guide">
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_c8f1421544bce489096c17a24923e27c" rel="nofollow">F码通道</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_3376b002ed5680d84f8147660ed3638f" rel="nofollow">免费试用</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_073f7b9ffce194e182bd931873f787fe" rel="nofollow">360 生态</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_7c21f9ced3b7726504e2a05a2b92b1c8" rel="nofollow">一元夺宝</a>
                </dd>
            </dl>
            <dl class="foot-con">
                <dt data-monitor="home_foot_tuiguang">推广合作 </dt>
                <dd data-monitor="home_help_try">
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_ff0d456a829c36f2f0580431b69fe913" rel="nofollow">商品入驻</a>
                </dd>
                <dd>
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_3f81f1296dfcb9a034a0ca653864b9ae" rel="nofollow">大客户采购</a>
                </dd>
            </dl>
            <dl class="foot-con">
                <dt data-monitor="home_foot_try">关注360商城 </dt>
                <dd data-monitor="home_help_try">
                    <a target="_blank" href="http://mall.360.com/help/show?id=helpcontent_18959af0598dbe134c057f211ba0c583" rel="nofollow">360商城大事记</a>
                </dd>
            </dl>
            <dl class="foot-con contactus">
                <dt>联系我们  </dt>
                <dd class="servicebox">
                    <a href="" onclick="showServiceSelector(); return false" class="inline-kefu">
                        <img src="/Public/uploads/public/home/t019c3c42d7b0ea4f41.png">
                    </a>
                    <a href="" target="_blank" class="weixin">
                        <img src="/Public/uploads/public/home/t0113493aa732f72837.png">
								<span class="wxtips">
									<img src="/Public/uploads/public/home/t01d06b994b8798623c.jpg">
								</span>
                    </a>
                    <a class="weibo" data-monitor="home_foot_weibo" href="http://weibo.com/qikoo360" target="_blank">
                        <img src="/Public/uploads/public/home/t0128093bd494ffc7e9.png">
								<span class="wxtips">
									<img src="/Public/uploads/public/home/t013f6db48422a373d6.jpg">
								</span>
                    </a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="footer-copyright">
        063商城 2016-2016 阿拉蕾小组版权所有 京ICP备********号 京公网安备************号
    </div>
</div>
<div class="slidebar" id="slidebar">
    <ul>
        <li class="rfeedback">
            <a target="_blank" href="http://mall.360.com/feedback" data-monitor="right_fankui_click">用户体验</a>
        </li>
        <li class="rtips rWeChat">
            <a href="">微信关注</a>
            <div class="rtipscont rWeChattips">
                <span class="arrowr-bg"></span>
                <span class="arrowr"></span>
                <img src="/Public/uploads/public/home/t01d06b994b8798623c.jpg">
                <p class="tiptext">
                    扫码关注官方微信<br>
                    先人一步知晓促销活动
                </p>
            </div>
        </li>
        <li class="rtips rstore">
            <a href="">手机商城</a>
            <div class="rtipscont rstoretips" style="opacity: 0; left: -210px;">
                <span class="arrowr-bg"></span>
                <span class="arrowr"></span>
                <img src="/Public/uploads/public/home/t013df41dbfac4d5924.jpg">
                <p class="tiptext">
                    客户端首次登录<span>送188元现金券礼包</span>
                </p>
            </div>
        </li>
        <li class="topback" style="visibility: hidden;">
            <a data-monitor="right_top_click" href="" class="gotop">返回顶部</a>
        </li>
    </ul>
</div>
<div id="serviceSelectorMask"></div>
<div class="fixed dialog" id="serviceSelector">
    <span class="icon close" onclick="hideServiceSelector()"></span>
    <p class="title">
        产品咨询
    </p>
    <p class="description">
        咨询时间 <em>8:00-22:00</em>
    </p>
    <ul class="flex">
        <li class="phone" onclick="openNtalker(true)">360手机&amp;配件 </li>
        <li class="watch" onclick="openNtalker()">360儿童手表 </li>
        <li class="recorder" onclick="openNtalker()">360行车记录仪 </li>
        <li class="camera" onclick="openNtalker()">360智能摄像头 </li>
        <li class="more" onclick="openNtalker()">其他产品</li>
    </ul>
    <div class="bg-shadow">
    </div>
</div>
<script>
    $(function(){indexPage.init()})
</script>
<script src="/Public/js/home/qikoo-v.js"></script>
<script src="/Public/js/home/index.js"></script>

<script src="/Public/js/home/jquery.lazyload.js"></script>
<script src="/Public/js/home/bootstrap.min.js"></script>
<script src="/Public/js/home/qikoo-v.js"></script>
<script src="/Public/js/home/jsstorage.js"></script>

<script>
    var qhPassIntv = setInterval(function () {
        if (window.QHPass == undefined) return;
        clearInterval(qhPassIntv);
        // 小能默认参数
        window.NTKF_PARAM = {
            siteid: 'kf_9758',
            settingid: 'kf_9758_1431680295244',
            uid: null,
            uname: null,
            itemid: '', // 商品ID，商品详情页用
            orderid: '', // 订单ID，支付页用
            orderprice: '', // 订单总价，支付页用
            isvip: '0',
            userlevel: ''
        };
        QHPass.getUserInfo(function (data) {
            NTKF_PARAM.uid = data.qid;
            NTKF_PARAM.uname = data.username;
            $.getScript("/Public/js/home/ntkfstat.js");
        }, function (err) {
            $.getScript("/Public/js/home/ntkfstat.js");
        });
    }, 50);
    function showServiceSelector() {
        $('#serviceSelectorMask').show();
        $('#serviceSelector').show();
    }
    function hideServiceSelector() {
        $('#serviceSelector').hide();
        $('#serviceSelectorMask').hide();
    }
    function openNtalker(isPhoneBusiness) {
        NTKF.im_openInPageChat(isPhoneBusiness ? 'kf_9758_1459242784970' : 'kf_9758_1431680295244');
        hideServiceSelector();
    }
</script>
<script>
    var _mvq=window._mvq||[];window._mvq=_mvq,_mvq.push(["$setAccount","m-251506-0"]),_mvq.push(["$logConversion"]),function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https:"==document.location.protocol?"/Public/js/home/mvl.js":"/Public/js/home/mvl.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}()</script>
<style>
    #page_mall360footer{overflow:visible}
</style>
<input type="hidden" class="qtoken" name="qtoken" value="">
<input type="hidden" class="real_qtoken" name="real_qtoken" value="">
<input type="hidden" class="qtokentimestamp" name="qtokentimestamp" value="">
<input type="hidden" class="sb_param" name="sb_param" value="41dd2715c7279267e03754dce17f8391">

<!--[if lte IE 6]>
<script src="http://27.app/DD_belatedPNG_0.0.8a.js">
</script>
<script>DD_belatedPNG.fix("div, ul, img, li, input, a, span, i")</script>
<![endif]-->

<script>
    $.getScript("/Public/js/home/monitor-8e133f74.js",function(){monitor.data.getTrack=function(){var e=document.cookie.match(/(^| )utm_source=([^;]*)(;|$)/),t=e?e[2]:"";return{b:monitor.util.getBrowser(),c:monitor.util.getCount(),r:monitor.util.getReferrer(),fl:monitor.util.getFlashVer(),utmsrc:t}},monitor.setProject("360_qikoo").getTrack().getClickAndKeydown(),$("body").on("click","[data-monitor]",function(){var e=$(this).data("monitor")+"",t=e.split("_");if(t.length!=3)return;$.each(t,function(e,n){t[e]=n});var n=location.protocol+"//s.360.cn/mall360/clk.htm?page="+t[0]+"&board="+t[1]+"&place="+t[2]+"&guid="+monitor.util.getGuid()+"&port=pc";$.ajax({dataType:"jsonp",url:n})})})
</script>
<script src="/Public/js/home/mall_monitor.js">
</script>
<script type="text/javascript">
    //站内信提示图标ajax请求

    $(window).load(function(){
        (function(i,s,o,g,r,a,m){
                    i['GoogleAnalyticsObject']=r;
                    i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
                    a=s.createElement(o),m=s.getElementsByTagName(o)[0];
                    a.async='async';
                    a.src=g;
                    m.parentNode.insertBefore(a,m)}
        )
        (window,document,'script','//alalei.com/js/home/analytics.js','ga');
        ga('create', "UA-63895592-1", 'auto');
        ga('set', '&uid', '');
        ga('send', 'pageview');
    });
</script>

<script type="text/javascript">
    $(function(){
        //登录模态框调用
        $("#login").click(function(){
            $("div.login-block").css({display:'block'});
            $("#gridSystemModalLabel").html("用户登录");
            $("div.register-block").css({display:'none'});
            $("div.modal").modal({backdrop:'static'});

        });

        //加载邮箱注册模态框
        $("#register").click(function(){
            $("div.register-block").css({display:'block'});
            $("#gridSystemModalLabel").html("用户注册");
            $("div.login-block").css({display:'none'});
            $("div.modal").modal({backdrop:'static'});
        });
        //加载手机注册模态框


        //登录框信息不为空时验证
        $("#inputName").blur(function(){
            if($(this).val() != ''){
                $('#name').css({display:'none'});
            }
        });
        $("#inputPass").blur(function(){
            if($(this).val() != ''){
                $('#pass').css({display:'none'});
            }
        });
        $("#inputCode").blur(function(){
            if($(this).val() != ''){
                $('#code').css({display:'none'});
            }
        });

        //登录后鼠标移入事件
        $("#userinfo").mouseover(function(){
            $("div.popbox").slideDown("normal");
        });
        $("div.popbox").mouseleave(function(){
            $(this).slideUp("fast");
        });



    });

    //登录输入框内容为空时验证
    function doLogin(){
        if($('#inputName').val() == ''){
            $('#name').css({display:'block',fontFamily:'微软雅黑'});
            return false;
        }

        if($('#inputPass').val() == ''){
            $('#pass').css({display:'block',fontFamily:'微软雅黑'});
            return false;
        }

        if($('#inputCode').val() == ''){
            $('#code').css({display:'block',fontFamily:'微软雅黑'});
            return false;
        }
    }

    /* ========================= 邮箱注册表单提交验证 (输入框为空时)=============================*/
    function doCheckER(){
        //邮箱验证
        if($("#eEmail").val() == '' ){
            $("#errEmail").css({display:'block'});
            return false;
        }
        //用户名验证
        if($("#eName").val() == '' ){
            $("#errName").css({display:'block'});
            return false;
        }
        //密码验证
        if($("#ePass").val() == '' ){
            $("#errPass").css({display:'block'});
            return false;
        }
        //确认密码验证
        if($("#eSurePass").val() == '' ){
            $("#errSurePass").css({display:'block'});
            return false;
        }
        //验证码验证
        if($("#eCode").val() == '' ){
            $("#errCode").css({display:'block'});
            return false;
        }
    }

    //ajax判断邮箱是否已被注册
    $("#eEmail").blur(function(){
        if($("#eEmail").val() != '' ){
            //正则验证邮箱格式
            var email = document.getElementById('eEmail').value.trim();
            reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            if(!reg.test(email)){
                $("#errEmail").html("&nbsp;&nbsp;&nbsp;对不起，您输入的邮箱格式不正确!").css({display:'block'});
                $("form.ERform").attr({onsubmit:'return false'});
            }else{
                $("#errEmail").css({display:'none'});
                $("form.ERform").attr({onsubmit:'return doCheckER()'});
            }

            //ajax判断邮箱是否被使用
            $.ajax({
                url:"http://27.app/home/checkEmail/"+$('#eEmail').val(),
                type:"GET",
                //async:false,
                success:function(rel){
                    if(rel == 0){
                        $("#errEmail").html("&nbsp;&nbsp;&nbsp;该邮箱已注册， <a href='#' style='color:#0082CB;' onclick='return outerLogin()'>前去登录</a>").css({display:'block'});
                        $("form.ERform").attr({onsubmit:'return false'});
                    }else{
                        $("form.ERform").attr({onsubmit:'return doCheckER()'});
                    }
                },
                // error:function(err){
                // alert("Ajax请求失败!");
                // },
            });
        }
    });

    //ajax判断用户名是否已被使用
    $("#eName").blur(function(){
        if($("#eName").val() != '' ){
            //正则验证用户名格式
            var name = document.getElementById('eName').value.trim();
            reg=/^[a-zA-Z]\w{3,15}$/;
            if(!reg.test(name)){
                $("#errName").html("&nbsp;&nbsp;&nbsp;请以英文开头,4-16个字符!(英文、数字或下划线)").css({display:'block'});
                $("form.ERform").attr({onsubmit:'return false'});
            }else{
                $("#errName").css({display:'none'});
                $("form.ERform").attr({onsubmit:'return doCheckER()'});
            }

            //ajax判断用户名是否被使用
            $.ajax({
                url:"http://27.app/home/checkName/"+$('#eName').val(),
                type:"GET",
                //async:false,
                success:function(rel){
                    if(rel == 0){
                        $("#errName").html("&nbsp;&nbsp;&nbsp;该用户名已注册， <a href='#' style='color:#0082CB;' onclick='return outerLogin()'>前去登录</a>").css({display:'block'});
                        $("form.ERform").attr({onsubmit:'return false'});
                    }else{
                        $("form.ERform").attr({onsubmit:'return doCheckER()'});
                    }
                },
                // error:function(err){
                // alert("Ajax请求失败!");
                // },
            });
        }
    });

    //正则验证密码格式
    $("#ePass").blur(function(){
        if($("#ePass").val() != '' ){

            var pass = document.getElementById('ePass').value.trim();
            reg=/^\S{6,20}$/;
            if(!reg.test(pass)){
                $("#errPass").html("&nbsp;&nbsp;&nbsp;6-20个字符(区分大小写,不能带有空格)").css({display:'block'});
                $("form.ERform").attr({onsubmit:'return false'});
            }else{
                $("#errPass").css({display:'none'});
                $("form.ERform").attr({onsubmit:'return doCheckER()'});
            }
        }
    });

    //验证确认密码是否正确
    $("#eSurePass").blur(function(){
        if($("#eSurePass").val() != '' ){

            var pass = document.getElementById('ePass').value.trim();
            var surepass = document.getElementById('eSurePass').value.trim();

            if(pass != surepass){
                $("#errSurePass").html("&nbsp;&nbsp;&nbsp;两次密码输入不一致").css({display:'block'});
                $("form.ERform").attr({onsubmit:'return false'});
            }else{
                $("#errSurePass").css({display:'none'});
                $("form.ERform").attr({onsubmit:'return doCheckER()'});
            }
        }else{
            $("form.ERform").attr({onsubmit:'return false'});
        }
    });

    //外部调用登录模态框
    function outerLogin(){
        $("div.register-block").css({display:'none'});
        $("div.login-block").css({display:'block'});
        $("#gridSystemModalLabel").html("用户登录");
    }
    //外部调用注册模态框
    function outerRegister(){
        $("div.register-block").css({display:'block'});
        $("div.login-block").css({display:'none'});
        $("#gridSystemModalLabel").html("用户注册");
    }
</script>


</script>
</body>
</html>