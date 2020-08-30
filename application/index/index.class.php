<?php
if (!defined("MVC")){
    die("非法侵入");
}
use libs\smarty;
use libs\getheader;
class index{
    function int(){
        $smarty=new smarty();
//        $arr=array();
//        $database=new \libs\db();
//        $db=$database->db;
//        $i=0;
//        $result=$db->query("select * from category where pid=0");
//        while ($row=$result->fetch_assoc()){
//            $arr[$i]=$row;
//            $i++;
//        }
        $header=new getheader();

        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->display("index/index.html");
    }
}