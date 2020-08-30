<?php
namespace libs;
if(!defined("MVC")){
    die("访问路径不合法");
}
class getheader{
    function __construct(){
        $arr=array();
        $database=new \libs\db();
        $db=$database->db;
        $i=0;
        $result=$db->query("select * from category where pid=0 and isshow=1");
        while ($row=$result->fetch_assoc()){
            $arr[$i]=$row;
            $i++;
        }
        $this->menuData=$arr;
        $this->header=TPL_PATH."index/header.html";
        $this->footer=TPL_PATH."index/footer.html";
    }
}