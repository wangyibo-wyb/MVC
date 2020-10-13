<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\db;
class user{
    function showusers(){
        $db=new db();
        $db=$db->db;
        $result=$db->query("select * from user");
        $condata=array();
        while ($row1=$result->fetch_assoc()){
            $condata[]=$row1;
        }
        $smarty = new smarty();
        $smarty->assign("condata",$condata);
        $smarty->display("admin/showusers.html");
    }
    function addusers(){
        $smarty = new smarty();
        $smarty->display("admin/addusers.html");
    }
    function add(){
        $uname=$_POST["uname"];
        $password = md5(md5($_POST["password"]));
        $database=new \libs\db();
        $db=$database->db;
        $db->query("insert into user (uname,password) values ('$uname','$password')");
        if($db->affected_rows>0){
            echo "<script>alert('插入成功');location.href='/2006/MVC/index.php/admin/user/showusers'</script>";
        }else{
            echo "<script>alert('插入失败');location.href='/2006/MVC/index.php/admin/user/showusers'</script>";
        }
    }

    function delete(){
        $id=$_GET["id"];
        $database=new \libs\db();
        $db=$database->db;
        $db->query("delete from user where id=" . $id);
        if ($db->affected_rows > 0) {
            echo "<script>alert('删除成功');location.href='/2006/MVC/index.php/admin/user/showusers'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='/2006/MVC/index.php/admin/user/showusers'</script>";
        }
    }
}