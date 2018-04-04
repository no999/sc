<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/19
 * Time: 9:21
 */
namespace app\admin\model;
use think\Model;
use think\Db;
class School extends Model{

    public function schoolList(){
      $a= Db::table('sc_school')->alias('sc')->field("sc.*,cty.title ctit")->join("sc_country cty","sc.cid=cty.id","LEFT")->paginate(15);
     return $a;
    }
   public function add(){



}

}