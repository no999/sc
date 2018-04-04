<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/16
 * Time: 17:06
 */
namespace app\admin\controller;
use think\Controller;
class State extends Controller{

    public function index($zid){
        $result=model("State")->zlists($zid);
        $this->assign('lists',$result);
        return $this->fetch();

    }

    public function add(){


    }
    public function edit($zid,$sid){
        //获得二级地区名
        $zlists=model("Zone")->where("id",$zid)->find();
        $zlists=$zlists->toArray();
       $this->assign('ztit',$zlists["title"]);

        //获得三级地区名
        $slist=model("State")->where("id",$sid)->find();
        $this->assign('stit',$slist["title"]);

        return $this->fetch();

    }

}