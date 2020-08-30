<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\db;
use libs\getheader;
class show{
    function int(){
        $conid=$_GET["conid"];
        $db=new db();
        $db=$db->db;
        $result=$db->query("select * from content where conid=$conid");
        $condata=array();
        while ($row1=$result->fetch_assoc()){
            $condata[]=$row1;
        }
        $header=new getheader();
        $smarty=new smarty();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("condata",$condata);
        $smarty->display("index/show.html");
    }
}