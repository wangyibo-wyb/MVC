<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 11:01:53
  from 'D:\WampServer\www\2006\MVC\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f424ca12b45d1_03017776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de1eaaf19b99f481c538fa5b8be45d6a23f85d9b' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\login.html',
      1 => 1598066376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f424ca12b45d1_03017776 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xx后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" action="<?php echo ENTRY_ADD;?>
/admin/index/login" method="post">
    <h1>欢迎来到xx后台管理中心</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" name="password">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label for="code" class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="code" placeholder="请输入验证码" name="code" style="width: 150px;float: left">
            <img src="http://localhost/2006/MVC/index.php/admin/index/mycode" alt=""onclick="this.src='http://localhost/2006/MVC/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer;width:100px;height:30px;float: left;margin-left: 10px"> 看不清楚？点击切换
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号？请
            <a href="<?php echo ENTRY_ADD;?>
/admin/reg/add" class="btn btn-default">注册</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
