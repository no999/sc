<?php
namespace app\admin\model;
use think\Model;
class Member extends Model{
    protected $autoWriteTimestamp = true;
	/*查询用户名是否存在*/
	function isUser($name){
	  $user = $this->get(['name'=>$name]);
	  if($user){
	      return $user;
      }else{
          return false;
      }

    }
    /*查询用户密码是否正确*/
    function isPwd($password){
    $pwd=$this->get(['password'=>md5($password)]);
     if($pwd){ return true;}else{
         return false;
     }
    }
	}