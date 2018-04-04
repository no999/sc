<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/27
 * Time: 13:26
 */
namespace app\admin\model;
use think\Model;
class CountryTofel extends Model{

public  function tofelcid($tid){
 $res=$this->field("cid")->where("tid",$tid)->find();
 return $res;

}

}