<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 10:36
 */
namespace app\admin\model;
use think\Model;
class Zone extends Model{

   public function lists($i){

       $cid=$this->where("cid",$i)->select();
       foreach ($cid as $k=>$v){
           $res[]=$v->toarray();

       }
       if(empty($res)){ }else{
           return $res;


       }


   }

}