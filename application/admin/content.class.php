<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\db;
use libs\upload;
class content{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/content.html");
    }
    function addcon(){
        $cid=$_POST["cid"];
        $ctitle=$_POST["ctitle"];
        $cons=$_POST["cons"];
        $content=$_POST["content"];
        $imgurl=$_POST["imgurl"];
        $database=new db();
        $db=$database->db;
        $db->query("insert into content (ctitle,cons,cid,content,imgurl) VALUES ('$ctitle','$cons','$cid','$content','$imgurl')");
        if($db->affected_rows>0){
            echo "<script>alert('插入成功');location.href='/2006/MVC/index.php/admin/content/add'</script>";
        }else{
            echo "<script>alert('插入失败');location.href='/2006/MVC/index.php/admin/content/add'</script>";
        }
    }
    function showList(){
        $database=new db();
        $sql="select * from content as con left join category as cat on con.cid=cat.cid where 1=1";
        if(isset($_POST["cid"])&&!empty($_POST["cid"])){
            $sql.=" and con.cid=".$_POST["cid"];
        }
        if(isset($_POST["ctitle"])&&!empty($_POST["ctitle"])){
            $wordkey=$_POST["ctitle"];
            $sql.=" and ctitle like '%".$wordkey."%'";
        }
        echo $sql;
        $db=$database->db;
        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showList.html");
    }
    function show(){
        $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/showcon.html");
    }
    function edit(){
        $conid=$_GET["conid"];
        $smarty=new smarty();
        $database=new \libs\db();
        $db=$database->db;
        $result=$db->query("select * from content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty->assign("data",$row);
        $smarty->display("admin/editcon.html");
    }
    function editcon(){
        $conid=$_POST["conid"];
        $cid=$_POST["cid"];
        $ctitle=$_POST["ctitle"];
        $cons=$_POST["cons"];
        $content=$_POST["content"];
        $imgurl=$_POST["imgurl"];
        $database=new \libs\db();
        $db=$database->db;
        $db->query("update content set ctitle='$ctitle',cons='$cons',cid=$cid,content='$content',imgurl='$imgurl' where conid=".$conid);
        if($db->affected_rows>0){
            echo "<script>alert('修改成功');location.href='/2006/mvc/index.php/admin/content/edit/?conid={$conid}'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='/2006/mvc/index.php/admin/content/edit/?conid={$conid}'</script>";
        }
    }
    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/2006/MVC/".$upload->fullpath;
        echo $path;
    }
    function tinyuploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/2006/MVC/".$upload->fullpath;
        echo json_encode(array('location'=>$path));
    }
}