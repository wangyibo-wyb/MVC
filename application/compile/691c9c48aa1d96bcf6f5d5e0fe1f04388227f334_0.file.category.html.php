<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 09:06:02
  from 'D:\WampServer\www\2006\MVC\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a1a7a6f7345_52029341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691c9c48aa1d96bcf6f5d5e0fe1f04388227f334' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\category.html',
      1 => 1598691960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a1a7a6f7345_52029341 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/category.css">
</head>
<body>
<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered">
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
    <?php } else { ?>
    <table class="table table-bordered">
        <tr>
            <td>暂无栏目！</td>
        </tr>
    </table>
    <?php }?>
</div>
<div class="pannel addpannel">
    <div class="close">X</div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/category/add" method="post">
        <input type="text" name="cname">
        <input type="hidden" name="cid">
        <select name="isshow">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select>
        <input type="text" name="tpl_name" placeholder="请输入对应的模板">
        <br>栏目描述：<textarea name="info" cols="30" rows="5" style="margin-top: 10px"></textarea>
        <input type="submit" value="提交">
    </form>
</div>
<div class="pannel editpannel">
    <div class="close">X</div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/category/add" method="post">
        <input type="text" name="cname">
        <select name="pid" id="opts">

        </select>
        <select name="isshow" id="isshow">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select>
        <input type="text" name="tpl_name" placeholder="请输入对应的模板">
        <br>栏目描述：<textarea name="info" cols="30" rows="5" style="margin-top: 10px"></textarea>
        <input type="button" value="修改">
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jQuery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
