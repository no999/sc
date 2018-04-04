<?php
namespace app\admin\controller;
use think\Db;
use app\admin\model\Country;
class Index extends Base
{
	

    public function index()
    {
     if(session('username')){ return $this->fetch();}else{
         return $this->redirect(url('admin/login/index'));
     }

    }
	
	public function welcome()
    {

     echo("<p>津桥院校库系统</p><p>tp5,h-uiadmin,架构</p></p><p>author:ydh</p>");


    }
}
 
    