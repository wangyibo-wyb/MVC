<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 12:00:05
  from 'D:\WampServer\www\2006\MVC\application\template\admin\showusers.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c8a45509f52_83574584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504630988159d2006889973be66c6be50813e70b' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\showusers.html',
      1 => 1600948803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c8a45509f52_83574584 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <table class="table table-bordered" style="margin-top: 20px">
        <tr>
            <th>ID</th>
            <th>用户名</th>
            <th>密码</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["password"];?>

            </td>
            <td>
                <a href="/2006/MVC/index.php/admin/user/delete?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
</body>
</html><?php }
}
