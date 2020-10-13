<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 11:40:03
  from 'D:\WampServer\www\2006\MVC\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c85934b6577_09333899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e560fd5a0daba10ef84915dbcb972e88d003368b' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\showList.html',
      1 => 1600947600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c85934b6577_09333899 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="container" style="margin-top: 20px">
    <form action="" class="form-inline" method="get">
        <div class="form-group">
        <lable for="cid">选择分类：</lable>
            <select name="cid" id="cid" class="form-control" cid="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"></select>
        </div>
        <div class="form-group">
            <lable for="ctitle">标题关键字：</lable>
            <input type="text" class="form-control" id="ctitle" name="ctitle" value="<?php echo $_smarty_tpl->tpl_vars['ctitle']->value;?>
">
        </div>
        <div class="form-group">
        <div class="checkbox">
            <label for="order">倒序</label>
            <input type="checkbox" id="order" name="order" value="desc" <?php if ($_smarty_tpl->tpl_vars['order']->value == "desc") {?> checked <?php }?>>
        </div>
        </div>
        <input type="submit" value="查询">
    </form>
    <table class="table table-bordered" style="margin-top: 20px">
        <tr>
            <th>所属分类</th>
            <th>标题</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

            </td>
            <td>
                <a href="/2006/MVC/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                <a href="/2006/MVC/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                <a href="/2006/MVC/index.php/admin/content/delete?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">删除</a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
