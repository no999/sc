<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 10:27
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class Country extends Model{
    public function countryList(){
       return $this->select();
    }
    public function countryAdd(){
       $res=model("RankList")->ranklist();
        return $res;
    }
     public  function countryEdit($i){
       $cinfo=$this->where(id,$i)->select();

     }
}


