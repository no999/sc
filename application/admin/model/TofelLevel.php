<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/26
 * Time: 16:15
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class TofelLevel extends Model{

public function showlists(){

    $lists= Db::table("sc_country_tofel sct")->field("scc.title scct,stl.title stt,sct.tid")->join("sc_tofel_level stl","sct.tid=stl.id")->join("sc_country scc","sct.cid=scc.id")->select();

   return  $lists;


}

public function tofeltit($tid){

   $res=$this->field("title")->where("id",$tid)->find();
   return $res;


}

}