<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-11 09:58:05
  from 'D:\WampServer\www\2006\MVC\application\template\index\message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5b4a2d0b8b73_29698763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8648507fc8a79d2a62bacd8dbbdca364bd0f4c' => 
    array (
      0 => 'D:\\WampServer\\www\\2006\\MVC\\application\\template\\index\\message.html',
      1 => 1598802480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5b4a2d0b8b73_29698763 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板(仅供练习)</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/message.css">
</head>
<body>
<!-- 顶部导航开始 -->
<div class="header-start">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<!-- 消息通知栏 -->
<div class="notice">
    <marquee onmouseover="this.stop();" onmouseout="this.start();" style="margin: 0 15px;">
        创建企业网站并不是你想像的那样困难，来企业门户网注册账号并登录、编辑几段文字、上传几张产品图片，瞬间完成，你也可以像其他人一样拥有自己的企业网站。</marquee>
</div>
<!-- 标题栏开始 -->
<div class="title">
    <div class="title-con">
        <span>文章页</span>
    </div>
</div>
<!-- 主体内容开始 -->
<div class="container">
    <div class="con-left">
        <div class="message-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <div class="message-item">
                <div class="message-user">
                    <img src="<?php echo IMG_ADD;?>
user.png" alt="">
                </div>
                <div class="message-info">
                    <div class="message"><?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>
</div>
                    <div class="message-datetime">2020-06-24 11:59:52</div>
                    <div class="message-feedback">
                        <a href="" style="color: #5974a3;text-decoration: none;">回复</a>
                    </div>
                </div>
                <div class="message-item" style="margin-left: 100px">
                    <div class="message-user">
                        <img src="<?php echo IMG_ADD;?>
admin.png" alt="">
                    </div>
                    <div class="message-info">
                        <div class="message"><?php echo $_smarty_tpl->tpl_vars['v']->value["content"];?>
</div>
                        <div class="message-datetime">2020-06-24 11:59:52</div>
                        <div class="message-feedback">
                            <a href="" style="color: #5974a3;text-decoration: none;">回复</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="message-board">
            <form action="" method="POST">
                <div class="underline-title">
                        <span class="underline-title-con">
                            <label style="margin-bottom: 5px;display: inline-block;">提交留言信息</label>
                        </span>
                </div>
                <div class="message-con">
                    <div class="form-group">
                        <label style="margin-bottom: 5px;display: inline-block;">留言内容</label>
                        <textarea></textarea>
                    </div>
                </div>
                <div class="message-sub">
                    <button type="submit">提交留言</button>
                    <span class="form-tips">
                            <span>您可以在这里输入您想咨询的内容</span>
                        </span>
                </div>
            </form>
        </div>
    </div>
    <div class="con-right">
        <div class="con-right-title">导航列表</div>
        <ul class="con-right-list">
            <li>
                <a href="index.html" class="con-right-item">首页</a>
            </li>
            <li>
                <a href="news.html" class="con-right-item">最近新闻</a>
            </li>
            <li>
                <a href="experience.html" class="con-right-item">经验之谈</a>
            </li>
            <li>
                <a href="about.html" class="con-right-item">关于我们</a>
            </li>
            <li>
                <a href="" class="con-right-item" style="border-bottom: none;">业界新闻</a>
            </li>
        </ul>
        <div class="con-right-tab">
            <ul class="tab-title">
                <li>
                    <a href="javascript:;">
                        <img src="<?php echo IMG_ADD;?>
remen.png" alt="">
                        热门文章
                    </a>
                </li>
                <li>
                    <a href="javascript:;" style="border-top:3px solid #EEE;background-color: #EEE;">
                        <img src="<?php echo IMG_ADD;?>
zuixin.png" alt="">
                        最新文章
                    </a>
                </li>
            </ul>
            <div class="tab-con">
                <div class="tab-con1">
                    <ul>
                        <li>
                            <div class="post-info">
                                <a href="">关于企业门户网</a>
                                <div class="post-date">2016-06-28</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-img">
                                <img src="<?php echo IMG_ADD;?>
j3.png" alt="" style="float: left;width: 50px;height: 50px;;">
                            </div>
                            <div class="post-info">
                                <a href="">秀米：一款支持图文排版和H5秀的工具</a>
                                <div class="post-date">2018-04-22</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="">如何提高企业的品牌知名度</a>
                                <div class="post-date">2016-06-28</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="">如何免费、快速地建立自己的网站呢？</a>
                                <div class="post-date">2016-07-09</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-img">
                                <img src="<?php echo IMG_ADD;?>
z2.png" alt="" style="float: left;width: 50px;height: 50px;;">
                            </div>
                            <div class="post-info">
                                <a href="">什么是banner</a>
                                <div class="post-date">2018-06-03</div>
                                <br>
                            </div>
                        </li>
                        <li style="border-bottom: none;">
                            <div class="post-info">
                                <a href="">企业门户网助力中小企业快速建立网络品牌</a>
                                <div class="post-date">2016-06-28</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-con1" style="display: none;">
                    <ul>
                        <li>
                            <div class="post-img">
                                <img src="<?php echo IMG_ADD;?>
j1.png" alt="" style="float: left;width: 50px;height: 50px;;">
                            </div>
                            <div class="post-info">
                                <a href="">如何给企业门户网申请企业备案？</a>
                                <div class="post-date">2020-04-11</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-img">
                                <img src="<?php echo IMG_ADD;?>
j2.png" alt="" style="float: left;width: 50px;height: 50px;;">
                            </div>
                            <div class="post-info">
                                <a href="">如何定制网站模板</a>
                                <div class="post-date">2020-03-11</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="">在企业门户网如何选择自己想要的模板</a>
                                <div class="post-date">2016-06-28</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="">在企业门户网建设网站后，如何拥有一个顶级域名</a>
                                <div class="post-date">2020-03-05</div>
                            </div>
                        </li>
                        <li>
                            <div class="post-info">
                                <a href="">会员补贴，共克时艰 | 中小企业Q1会员专项补贴</a>
                                <div class="post-date">2020-02-15</div>
                                <br>
                            </div>
                        </li>
                        <li style="border-bottom: none;">
                            <div class="post-info">
                                <a href="">关于近期接收到"阿里云违规URL屏蔽访问处理通知"处理通知</a>
                                <div class="post-date">2019-06-04</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            var tabTitle = document.querySelectorAll(".tab-title a");
            var tabCon = document.querySelectorAll(".tab-con1");
            for (let i=0;i<tabTitle.length;i++){
                tabTitle[i].onclick = function(){
                    for(var j=0;j<tabCon.length;j++){
                        tabCon[j].style.display = "none";
                        tabTitle[j].style.background = "#eee";
                        tabTitle[j].style.borderTopColor = "#eee"
                    }
                    tabCon[i].style.display = "block";
                    tabTitle[i].style.background = "#fff";
                    tabTitle[i].style.borderTopColor = "#0088cc"
                }
                tabTitle[i].onmouseover = function(){
                    tabTitle[i].style.borderTopColor = "#0088cc";
                    tabTitle[i].style.cursor = "pointer";
                }
                tabTitle[i].onmouseout = function(){
                    tabTitle[i].style.borderTopColor = "#eee";
                    tabTitle[i].style.cursor = "pointer";
                }
            }
        <?php echo '</script'; ?>
>
    </div>
    <div style="clear: both"></div>
</div>
<!-- 底部开始 -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo '<script'; ?>
 src="<?php echo JS_ADD;?>
animate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var header = document.querySelector(".header");
    var toTop = document.querySelector(".top");
    window.onscroll = function () {
        var st = document.documentElement.scrollTop;
        if(st>5){
            header.style.background = "#000";
            header.style.opacity = 0.8;
        }else{
            header.style.background = "none";
            header.style.opacity = 1;
        }
        if(st>241){
            toTop.style.display = "block";
        }else{
            toTop.style.display = "none";
        }
    }
    toTop.onclick = function () {
        animate(document.documentElement, {
            scrollTop: 0
        }, 500)
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
