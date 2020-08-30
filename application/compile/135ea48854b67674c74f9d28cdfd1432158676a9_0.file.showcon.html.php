<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 12:52:32
  from 'D:\WampServer\www\2006\MVC\application\template\admin\showcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a4f901ffb08_40393361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135ea48854b67674c74f9d28cdfd1432158676a9' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\showcon.html',
      1 => 1598705547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a4f901ffb08_40393361 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>
    <?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>

</h3>
<p>
    <?php echo $_smarty_tpl->tpl_vars['data']->value["content"];?>

</p>
</body>
</html><?php }
}
