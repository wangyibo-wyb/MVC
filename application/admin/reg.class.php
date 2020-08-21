<?php
use libs\smarty;
use libs\db;
class reg{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/reg.html");
        //$this->smarty->display("admin/reg.html");
    }
    function addUser(){
        $uname=$_POST["uname"];
        $password=$_POST["password"];
        $password1=$_POST["password1"];
        if($password!==$password1){
            echo "密码不一致";
            return;
        }
        //连接数据库
//        $db=new mysqli("localhost","root","123456","wui2006","8806");
//        if(mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");
        //$db=$this->db;
        $database=new \libs\db();
        $db=$database->db;
        $result=$db->query("select uname from user where uname='{$uname}'");
        if($result->num_rows>0){
            echo "用户名已存在";
            return;
        }
        $password=md5(md5($password));
        $db->query("insert into user (uname,password) VALUES ('$uname','$password')");
        if($db->affected_rows>0){
            echo "注册成功";
        }
    }
    function checkName(){
        $uname=$_POST["uname"];
//        $db=new mysqli("localhost","root","123456","wui2006","8806");
//        if(mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");
        //$db=$this->db;
        $database=new \libs\db();
        $db=$database->db;
        $result=$db->query("select uname from user where uname='{$uname}'");
        if($result->num_rows<1){
            echo "true";
        }else{
            echo "false";
        }
    }
}