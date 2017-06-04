<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id = "a">
    <h4>由于长时间未验证，此链接已过期，请重新发送邮件,并登录邮箱执行验证</h4>
    <form action="<?php echo U('Home/user/sendEmail');?>" method="post">
        <input type="hidden" name = 'name' value="<?php echo ($users['name']); ?>">
        <input type="hidden" name = 'email' value="<?php echo ($users['email']); ?>">
        <input type="submit" value = "点击重新发送邮件">
    </form>
</div>
</body>
</html>