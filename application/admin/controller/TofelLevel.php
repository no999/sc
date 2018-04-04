<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/26
 * Time: 16:44
 */
namespace app\admin\controller;
use think\Controller;
class TofelLevel extends Controller{
public  function index(){
 $tflists=model("TofelLevel")->showlists();
 $this->assign("tofellists",$tflists);
 return $this->fetch();
}
public function add(){

   $title= model("country")->field("title,id")->select();
   foreach ($title as $k=>$v){
       $res[]=$v->toArray();

   }

   $this->assign("countrytitle",$res);

    return $this->fetch();
}

public function edit($tid){

 $res= model("TofelLevel")->tofeltit($tid);
 $res=$res->toArray();
 $ctit=model("country")->field("title,id")->select();
 foreach ($ctit as $k=>$v){
     $clists[]=$v->toArray();

 }
 $cid=model("CountryTofel")->tofelcid($tid);
$cid=$cid->toArray();
$this->assign("cid",$cid["cid"]);
$this->assign("ltitle",$res);
 $this->assign("ctitle", $clists);
    return $this->fetch();

}

}