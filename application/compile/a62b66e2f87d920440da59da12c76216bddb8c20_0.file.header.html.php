<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-11 07:21:54
  from 'D:\WampServer\www\2006\MVC\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5b259294da76_99891398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a62b66e2f87d920440da59da12c76216bddb8c20' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\index\\header.html',
      1 => 1598802657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5b259294da76_99891398 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header">
    <div class="header-row">
        <div class="header-left">
            <a class="header-logo">
                <img src="<?php echo IMG_ADD;?>
logo.jpg" alt="" style="width: 82px;height: 40px;">
            </a>
            <span class="header-text">规范中小企业网站标准！</span>
        </div>
        <div class="header-right">
            <ul class="header-list">
                <li class="header-list-item1" style="border-bottom: 1px solid #5974a3;">
                    <a href="/2006/MVC/index.php/index/index">首页</a>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <li class="header-list-item2">
                    <a href="/2006/MVC/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div><?php }
}
