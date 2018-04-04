<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/19
 * Time: 9:20
 */
namespace app\admin\controller;
use think\Controller;
class School extends Controller{
    public  function index(){
   $slists=model("School")->schoolList();
   $this->assign("schoollists",$slists);
   return $this->fetch();
    }
   public function add(){
        $clists=model("Country")->countryList();
        foreach ($clists as $k=>$v){
            $res[]=$v->toArray();
        }
        $zlist=model("zone")->field("cid,title")->group('title')->select();
        foreach ($zlist as $k=>$v){
            $zres[]=$v->toArray();
        }
        $this->assign("selects",$res);
        return $this->fetch();
   }
     public function zone_select($cid){
        if(empty($cid)){
            return json(['result'=>"",'code'=>0,'message'=>'操作完成']);

        }
      $res=model("zone")->field("id,title")->where("cid",$cid)->select();
      foreach ($res as $k=>$v){
          $result[]=$v->toArray();
      }
      return json(['result'=>$result,'code'=>1,'message'=>'操作完成']);

  }

   public function state_select($zid){

       if(empty($zid)){
           return json(['result'=>"",'code'=>0,'message'=>'操作完成']);

       }
       $res=model("state")->field("id,title")->where("zid",$zid)->select();
       foreach ($res as $k=>$v){
           $result[]=$v->toArray();
       }
       if(empty($result)){ return json(['result'=>"",'code'=>0,'message'=>'操作完成']);
       }else{ return json(['result'=>$result,'code'=>1,'message'=>'操作完成']);
       }

   }

   public function upload(){
       $file = $this->request->file('file');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
       if($info){

           return json(['url'=>$info->getSaveName(),'code'=>1,'message'=>'操作完成']);

       }
   }
}