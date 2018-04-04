<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 17:10
 */
namespace app\admin\model;
use think\Model;
class State extends Model{
    public function zlists($zid){
       $zlists= $this->where("zid",$zid)->select();
       foreach ($zlists as $k=>$v){
           $res[]=$v->toArray();


       }
     return $res;

    }


}