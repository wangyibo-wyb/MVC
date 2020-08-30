<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 08:41:00
  from 'D:\WampServer\www\2006\MVC\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a149c71ced6_98395057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc49a6c58589aab2234809e793c5f96bb95d1cf0' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\addpage.html',
      1 => 1598690456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a149c71ced6_98395057 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="<?php echo ENTRY_ADD;?>
/admin/category/add" method="post" class="add1">
    <input type="text" placeholder="添加一级栏目" name="cname"><br><br>
    <select name="isshow">
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
    </select>
    <br><br>
    <input type="text" name="tpl_name" placeholder="请输入对应的模板">
    <br><br>栏目描述：
    <textarea name="info" cols="30" rows="10"></textarea>
    <br><br>
    <input type="submit" value="添加">
</form>
</div>
</body>
</html><?php }
}
