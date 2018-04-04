<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/27
 * Time: 13:56
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class CountryCost{

public function lists(){

   $res=Db::table("sc_country_cost")->alias('cct')->field("scl.title as ctt,sct.title as stt")->join("sc_cost_level scl","cct.lid=scl.id")->join("sc_country sct","cct.cid=sct.id")->select();
   return $res;

}

}