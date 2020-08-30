<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\db;
class category{
    public $arr=array();
    function int(){
        $smarty=new smarty();
        //查询数据库
        $database=new \libs\db();
        $this->db=$database->db;
        $str="";
        $this->tree(0,$str);
        $smarty->assign("data",$str);
        $smarty->display("admin/category.html");
    }
    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from category where pid=".$pid);
        while ($row=$result->fetch_assoc()){
            if($row["isshow"]==1){
                $s="可见";
            }else{
                $s="不可见";
            }
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("☇",$i).$row["cname"].'</td><td>'.$s.'</td><td><a href="javascript:;" attr="'.$row["cid"].'" class="add">添加</a>&nbsp;<a href="/2006/MVC/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="remove">删除</a>&nbsp;<a href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'" class="edit">修改</a></td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }
    }
    function show(){
        $cid=$_GET["cid"];
        $database=new \libs\db();
        $db=$database->db;
        $result=$db->query("select * from category where cid=".$cid);
        $row=$result->fetch_assoc();
        echo json_encode($row);
    }
    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }
    function treeOption($pid,&$arr){
        $database=new \libs\db();
        $this->db=$database->db;
        $result=$this->db->query("select * from category where pid=".$pid);
        $i=0;
        while($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"]
            );
            $this->treeoption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
    function addpage(){
        $smarty=new smarty();
        $smarty->display("admin/addpage.html");
    }
    function add(){
        if(isset($_POST["cid"])){
            $gid=$_POST["cid"];
        }else{
            $gid=0;
        }
        $cname=$_POST["cname"];
        $isshow=$_POST["isshow"];
        $tpl_name=$_POST["tpl_name"];
        $info=$_POST["info"];
        $database=new \libs\db();
        $db=$database->db;
        $db->query("insert into category (cname,pid,isshow,tpl_name,info) values ('$cname',$gid,$isshow,'$tpl_name','$info')");
        if($db->affected_rows>0){
            header("location:/2006/MVC/index.php/admin/category");
        }
    }
    function del(){
        $cid=$_GET["cid"];
        $database=new \libs\db();
        $db=$database->db;
        $result=$db->query("select * from category where pid=".$cid);
        if($result->num_rows>0){
            echo "<script>alert('请先删除子目录');location.href='/2006/MVC/index.php/admin/category'</script>";
        }else {
            $db->query("delete from category where cid=" . $cid);
            if ($db->affected_rows > 0) {
                header("location:/2006/MVC/index.php/admin/category");
            }
        }
    }
    function editcon(){
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $isshow=$_GET["isshow"];
        $info=$_GET["info"];
        $tpl_name=$_GET["tpl_name"];
        $database=new \libs\db();
        $db=$database->db;
        $db->query("update category set cname='{$cname}',pid={$pid},isshow={$isshow},info='{$info}',tpl_name='{$tpl_name}' where cid=".$cid);
        if($db->affected_rows>0){
            echo "ok";
        }
    }
}