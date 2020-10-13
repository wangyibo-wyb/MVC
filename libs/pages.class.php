<?php
namespace libs;
class pages{
    public $fullPath;
    public $currentPages;
    public $pages=10;//分页数量
    public $total=200;
    public $nums=10;//每页显示的条数
    public $limit="";
    private function getUrlinfo(){
        //获取地址
        $originPath="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $path="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
        $search=substr(strchr($originPath,"?"),1);
        $reg="/&*pages=\d*/";
        $search=preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $this->currentPages=$_GET["pages"];
        }else{
            $this->currentPages=0;
        }
        $this->fullPath=$path."?".$search."&pages=";
    }
    public function show(){
        $this->getUrlinfo();
        $str="";
        $str.="<a href='{$this->fullPath}0'>[首页]</a>";
        //上一页
        $up=$this->currentPages-1>0?$this->currentPages-1:0;
        $str.="<a href='{$this->fullPath}$up'>[上一页]</a>";
        //中间页数的开始
        $start=$this->currentPages-floor($this->pages/2)<0?0:$this->currentPages-floor($this->pages/2);
        //页数的结束
        $end=$start+$this->pages>ceil($this->total/$this->nums)?ceil($this->total/$this->nums):$start+$this->pages;
        for($i=$start;$i<$end;$i++){
            $num=$i+1;
            if($i==$this->currentPages){
                $style="style=color:red";
            }else{
                $style="";
            }
            $str.="<a href='{$this->fullPath}{$i}' $style>[{$num}]</a>";
        }
        $next=$this->currentPages+1>floor($this->total/$this->nums)?floor($this->total/$this->nums):$this->currentPages+1;
        $str.="<a href='{$this->fullPath}$next'>[下一页]</a>";
        $last=floor($this->total/$this->pages);
        $str.="<a href='{$this->fullPath}$last'>[尾页]</a>";

        $this->limit=" LIMIT ".$this->currentPages*$this->nums.",".$this->nums;

        return $str;
    }
}