<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 12:18:01
  from 'D:\WampServer\www\2006\MVC\application\template\admin\addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c8e796ebf29_74715352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc49a6c58589aab2234809e793c5f96bb95d1cf0' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\addpage.html',
      1 => 1600949879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c8e796ebf29_74715352 (Smarty_Internal_Template $_smarty_tpl) {
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
/admin/category/add" method="post" class="add1" class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label">添加一级栏目：</label>
            <input type="text" placeholder="添加一级栏目" class="form-control" name="cname" autocomplete="off">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">是否在导航可见：</label>
            <select name="isshow" class="form-control">
                <option value="1">在导航可见</option>
                <option value="0">在导航不可见</option>
            </select>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">模板名称：</label>
            <input type="text" name="tpl_name" class="form-control" placeholder="请输入对应的模板">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">栏目描述：</label>
            <textarea name="info" cols="30" rows="10" class="form-control"></textarea>
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
