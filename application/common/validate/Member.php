<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 15:19
 */
namespace  app\common\validate;
use think\Validate;
class Member extends Validate{

    protected $rule = [
        'name'  =>  'require|max:25',
        'password' =>  'require',
        'vcode'=>'require',
    ];
    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过25个字符',
        'password' => '密码不能为空',
    ];


}