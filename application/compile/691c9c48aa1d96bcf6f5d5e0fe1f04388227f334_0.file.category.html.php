<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-11 12:22:03
  from 'D:\WampServer\www\2006\MVC\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5b6bebec4ac2_78806944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691c9c48aa1d96bcf6f5d5e0fe1f04388227f334' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\category.html',
      1 => 1599826921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5b6bebec4ac2_78806944 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/category/add" method="post" class="form-horizontal" style="margin: 10px 30px">
        <div class="form-group">
            <label class=" control-label">栏目名称：</label>
        <input type="text" name="cname" class="form-control" placeholder="请输入栏目名称">
        </div>
        <input type="hidden" name="cid">
        <div class="form-group">
            <label class=" control-label">是否在导航可见：</label>
        <select name="isshow" class="form-control">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select>
        </div>
        <div class="form-group">
            <label class=" control-label">模板名称：</label>
        <input type="text" name="tpl_name" placeholder="请输入对应的模板" class="form-control">
        </div>
        <div class="form-group">
            <label class=" control-label">栏目描述：</label>
        <textarea name="info" cols="30" rows="5" style="margin-top: 10px" class="form-control"></textarea>
        </div>
        <div class="form-group">
        <input type="submit" value="提交" class="btn btn-info" style="float: right">
        </div>
    </form>
</div>
<div class="pannel editpannel">
    <div class="close">X</div>
    <form action="<?php echo ENTRY_ADD;?>
/admin/category/add" method="post" style="margin: 10px 30px" class="form-horizontal">
        <div class="form-group">
            <label class=" control-label">栏目名称：</label>
        <input type="text" name="cname" class="form-control">
        </div>
        <div class="form-group">
            <label class=" control-label">所属栏目：</label>
        <select name="pid" id="opts" class="form-control">

        </select>
        </div>
        <div class="form-group">
            <label class=" control-label">是否在导航可见：</label>
        <select name="isshow" id="isshow" class="form-control">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select>
        </div>
        <div class="form-group">
            <label class=" control-label">模板名称：</label>
        <input type="text" name="tpl_name" placeholder="请输入对应的模板" class="form-control">
        </div>
        <label class=" control-label">栏目描述：</label>
        <textarea name="info" cols="30" rows="5" class="form-control"></textarea>
        <br>
        <input type="button" value="修改" class="btn btn-info" style="float: right">
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
