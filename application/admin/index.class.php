<?php
if (!defined("MVC")){
    die("非法侵入");
}
class index extends main{
    function int(){
        $this->smarty->display("admin/login.html");
    }
    function login(){
        $uname=addslashes($_POST["uname"]);
        $password=md5(md5($_POST["password"]));
        if(strlen($uname)<5||empty($password)){
            echo "用户名或密码不符合规范";
            return;
        }
        //匹配用户名和密码
//        $db=new mysqli("localhost","root","123456","wui2006","8806");
//        if(mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");
        $db=$this->db;
        $result=$db->query("select * from user where uname='{$uname}' and password='{$password}'");
        if($result->num_rows<1){
            echo "登陆失败";
        }else{
            header("location:/2006/MVC/index.php/admin/index/first");
        }
    }
    function first(){
        echo "后台首页";
    }

}
