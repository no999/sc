<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/27
 * Time: 13:56
 */
namespace app\admin\controller;
use think\Controller;
class CountryCost extends Controller{

public function index(){

   $res=model("CountryCost")->lists();
   foreach ($res as $k=>$v){

     $list[$v["ctt"]][]=$v["stt"];
       //$list[$v["ctt"]][]=$v;
   }
 //dump($res);
   //dump($list);
   foreach ($list as $k=>$v){
       //dump(implode(" ",$v));
       $z[$k]=implode(" ",$v);

   }
      // dump( $z);
   /*foreach ($z as $k=>$v){
       $country[]=$v;
       $cost[]=$k;

   }*/

    $this->assign("country",$z);
    return $this->fetch();
}

}