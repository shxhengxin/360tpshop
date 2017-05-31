<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
//定义应用目录
define('APP_PATH','./');
//开启调试模式
define('APP_DEBUG',true);
//定义url,设置好站点


// 更名框架目录名称，并载入框架入口文件
require './ThinkPHP/ThinkPHP.php';
