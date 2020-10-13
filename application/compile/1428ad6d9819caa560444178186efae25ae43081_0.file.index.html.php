<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-24 08:49:04
  from 'D:\WampServer\www\2006\MVC\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6c5d804cb0b9_62162951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1428ad6d9819caa560444178186efae25ae43081' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\admin\\index.html',
      1 => 1600937342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6c5d804cb0b9_62162951 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台首页</title>
    <style>
        html,body{
            width: 100%;height: 100%;
        }
        body{
            background-image: url("../../static/img/background.jpeg");
        }
        *{
            box-sizing: border-box;
        }
        body,h1{
            padding: 0;margin: 0;
        }
        ul,li{
            padding: 0;margin: 0;
            list-style: none;
        }
        a{
            color:#333;text-decoration: none;
        }
        .header{
            width: 100%;height: 15%;
            background-color: #D3DCE6;
        }
        .header h1{
            color: #fff;font-weight: 500;
            text-align: center;
            padding-top: 30px;
        }
        .logininfo{
            float: right;
            margin-right: 30px;
        }
        .main{
            width: 100%;height: 75%;
        }
        .left{
            width: 20%;height: 100%;
            border-right: 1px solid #1b6d85;
            float: left;
        }
        .father div{
            width: 100%;height: 50px;
            background: #eee;
            border-bottom: 1px solid #999;
            font-size: 25px;
            line-height: 50px;
            text-align: center;
        }
        .son li{
            width:100%;height: 50px;
            border-bottom: 1px solid #eee;
            font-size: 20px;
            padding-top: 10px;
            padding-left: 30px;
        }
        .right{
            width: 80%;height: 100%;
            float:left;
        }
        iframe{
            width: 100%;height: 100%;
        }
        .bottom{
            width: 100%;height: 10%;
            border-top: 1px solid #1b6d85;
            text-align: center;
            padding-top: 30px;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>欢迎来到企业门户网站管理系统</h1>
    <div class="logininfo">
        <a href="/2006/MVC/index.php" target="_blank">转到前台</a>
        <span>用户：<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
        <span>
            <a href="/2006/MVC/index.php/admin/index/loginout" style="color:#fff;">退出登录</a>
        </span>
    </div>
</div>
<div class="main">
    <div class="left">
        <ul class="father">
            <li>
                <div>用户管理</div>
                <ul class="son">
                    <li>
                        <a href="/2006/MVC/index.php/admin/user/addusers" target="main" >添加用户</a>
                    </li>
                    <li>
                        <a href="/2006/MVC/index.php/admin/user/showusers" target="main">查看用户</a>
                    </li>
                </ul>
            </li>
            <li>
                <div>栏目管理</div>
                <ul class="son">
                    <li>
                        <a href="/2006/MVC/index.php/admin/category/addpage" target="main">添加栏目</a>
                    </li>
                    <li>
                        <a href="/2006/MVC/index.php/admin/category" target="main">查看栏目</a>
                    </li>
                </ul>
            </li>
            <li>
                <div>内容管理</div>
                <ul class="son">
                    <li>
                        <a href="/2006/MVC/index.php/admin/content/add" target="main">添加内容</a>
                    </li>
                    <li>
                        <a href="/2006/MVC/index.php/admin/content/showList" target="main">查看内容</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">
    XXX版权信息，XXX制作，联系方式
</div>
</body>
</html><?php }
}
