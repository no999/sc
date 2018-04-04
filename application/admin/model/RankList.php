<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/15
 * Time: 14:57
 */
namespace app\admin\model;
use think\Model;
class RankList extends Model{
    public function ranklist(){

        $res=$this->select();
        foreach ($res as $k=>$v){
            $lists[]=$v->toarray();
        }
        return $lists;
    }


}