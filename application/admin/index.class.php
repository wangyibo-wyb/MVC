<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\db;
use libs\code;
class index{
    function int(){
        $smarty=new smarty();
        $smarty->display("admin/login.html");
        //$this->smarty->display("admin/login.html");
    }
    function login(){
        $uname=addslashes($_POST["uname"]);
        $password=md5(md5($_POST["password"]));
        if($_POST["code"]!==$_SESSION["code"]){
            echo "验证码有误";
            return;
        }
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
        //$db=$this->db;
        $database=new \libs\db();
        $db=$database->db;
        $result=$db->query("select * from user where uname='{$uname}' and password='{$password}'");
        if($result->num_rows<1){
            echo "登陆失败";
        }else{
            $_SESSION["login"]="yes";
            $_SESSION["uname"]=$uname;
            header("location:/2006/MVC/index.php/admin/index/first");
        }
        $db->close();
    }
    function loginout(){
        session_destroy();
        header("location:/2006/MVC/index.php/admin");
    }
    function first(){
        if(isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty=new smarty();
            $smarty->assign("uname",$_SESSION["uname"]);
            $smarty->display("admin/index.html");
        }else{
            header("location:/2006/MVC/index.php/admin");
        }
    }
    function mycode(){
        $code=new code();
        $code->out();
    }

}
