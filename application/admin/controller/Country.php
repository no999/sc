<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/15
 * Time: 9:42
 */
namespace app\admin\controller;
use think\Controller;
class Country extends Controller{
    public function index(){
        $res=[];
        $clist=model('Country')->countryList();
        foreach ($clist as $k=>$v){
            $res[]=$v->toarray();
        }
        $this->assign('lists', $res);
       return $this->fetch();
    }
    public function  add(){
      $rlists=model('Country')->countryAdd();
        $this->assign('normalRank', $rlists);
        return $this->fetch();

    }

    public  function  edit($id){
       $cinfo=model("country")->where("id",$id)->find()->toArray();
        $this->assign('lists', $cinfo);
        $rlists=model('Country')->countryAdd();
        $this->assign('normalRank', $rlists);
        return $this->fetch();

    }

}