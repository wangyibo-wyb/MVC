<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\db;
use libs\getheader;
class category{
    function int(){
        $cid=$_GET["cid"];
        $db=new db();
        $db=$db->db;
        $result=$db->query("select * from category where cid=$cid");
        $currentinfo=$result->fetch_assoc();
        $result1=$db->query("select * from category where pid=$cid");
        $soninfo=array();
        while($row=$result1->fetch_assoc()){
            $soninfo[]=$row;
        }
        $result2=$db->query("select * from content where cid=$cid");
        $condata=array();
        while ($row1=$result2->fetch_assoc()){
            $condata[]=$row1;
        }
        $header=new getheader();
        $smarty=new smarty();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("soninfo",$soninfo);
        $smarty->assign("currentinfo",$currentinfo);
        $smarty->assign("condata",$condata);
        $smarty->display("index/".$currentinfo['tpl_name']);
    }
}