<?php
session_start();
header("content-type:text/html;charset=utf8");
//用来记录一个口令
define("MVC",true);
//应用文件夹
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);
//启动
require_once "libs/start.php";