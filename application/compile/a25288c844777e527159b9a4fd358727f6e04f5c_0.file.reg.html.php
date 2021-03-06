<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 12:09:55
  from 'D:\WampServer\www\2006\MVC\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c8c937aae96_70087983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25288c844777e527159b9a4fd358727f6e04f5c' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\reg.html',
      1 => 1600949247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c8c937aae96_70087983 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页面</title>
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
reg.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" action="<?php echo ENTRY_ADD;?>
/admin/reg/addUser" method="post">
    <h1><b>欢迎来到企业门户网后台管理中心</b></h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入用户名" name="uname" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="请输入密码" name="password">
        </div>
    </div>
    <div class="form-group">
        <label for="password1" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password1" placeholder="请再次输入密码" name="password1">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            &nbsp;&nbsp;已有账号？请
            <a href="<?php echo ENTRY_ADD;?>
/admin/index/int" class="btn btn-default">登录</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
