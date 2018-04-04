<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 10:31
 */
namespace app\admin\controller;

 class Login extends Base{
     function index(){

         return $this->fetch();
     }
    function login(){
      $validate = validate('Member');
        if(request()->isPost()){
            $data = [
                'name'=>input("user"),
                'password'=>input("password"),
                'vcode'=>input("vcode"),
            ];
            //验证用户名和密码格式是否正确
            if(!$validate->check($data)){
                echo($validate->getError());
            }else{
                $isUser=model('Member')->isUser(input('user'));//判断用户名是否存在
                $isPwd=model('Member')->isPwd(input('password'));//判断密码是否正确
                if(!$isUser){return "用户名不正确";}
                if(!$isPwd){return "密码不正确";}
                //验证码是否正确
                if(!captcha_check(input('vcode'))){
                    return '验证码不正确';
                };
                session('username', $isUser);
                 return $this->redirect(url("admin/index/index"));


            }
        }



    }

 }