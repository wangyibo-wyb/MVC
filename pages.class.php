<?php
class pages{
    public $fullPath;
    function getUrlinfo(){
        $originPath="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $path=dirname($originPath).DIRECTORY_SEPARATOR;
        $search=substr(strchr($originPath,"?"),1);
        $reg="/&*pages=\d*/";
        $search=preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $currentPages=$_GET["pages"];
        }else{
            $currentPages=0;
        }
        $this->fullPath=$path."?".$search."&pages=".$currentPages;
    }
    public function show(){
        $this->getUrlinfo();
        $str="";
        $str.="<a href='{$this->fullPath}0'>[首页]</a>";
    }
}
$pages=new pages();
$pages->getUrlinfo();