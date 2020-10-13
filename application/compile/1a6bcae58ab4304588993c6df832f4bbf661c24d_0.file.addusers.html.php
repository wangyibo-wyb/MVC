<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 12:10:56
  from 'D:\WampServer\www\2006\MVC\application\template\admin\addusers.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c8cd09290e2_84101480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6bcae58ab4304588993c6df832f4bbf661c24d' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\addusers.html',
      1 => 1600949454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c8cd09290e2_84101480 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>
<div class="container" style="width: 1000px;padding-top: 50px">
    <form action="<?php echo ENTRY_ADD;?>
/admin/user/add" method="post" class="add1" class="form-horizontal">
        <div class="form-group">
            <label>用户名：</label>
            <input type="text" class="form-control" placeholder="请输入用户名" id="uname" name="uname" autocomplete="off">
        </div>
        <div class="form-group">
            <label>密码：</label>
            <input type="password" class="form-control" placeholder="请输入密码" id="password" name="password">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="添加" class="btn btn-info" style="float: right">
        </div>
    </form>
</div>
</body>
</html><?php }
}
