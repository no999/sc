<?Php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller{
	
	public function _initialize(){
     $this->isLogin();
    }
	
	public function isLogin(){

}
}