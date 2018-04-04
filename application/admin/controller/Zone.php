<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 10:34
 */
namespace app\admin\controller;
use think\Controller;
class Zone extends  Controller{
    public function index($i){
        $res=model("Zone")->lists($i);
        $this->assign("lists",$res);
        return $this->fetch();


    }
    public function edit($cid,$zid){
        $cobj=model("Country")->where("id",$cid)->find();
        $clist=$cobj->toArray();
        $ctitle=$clist["title"];
        $this->assign("ctitle",$ctitle);
        $res=model("Zone")->where("id",$zid)->find();
        $res=$res->toArray();
        $this->assign("ztitle",$res["title"]);
      return $this->fetch();

    }
public function  add($i){
        $cobj=model("Country")->where("id",$i)->find();
       $clist=$cobj->toArray();
       $ctitle=$clist["title"];
       $this->assign("title",$ctitle);
       return $this->fetch();

}

}