<?php
namespace app\index\controller;
use think\Controller;
use think\facade\Session;
use Request;
class Login extends Controller
{    
    public function index(){            //发现
        return $this->fetch('login');
    }
  	public function loginAction(){
  		$res=db('shop_user')->find();
  		$user=Request::post('user');
  		$pwd=Request::post('pwd');
  		if($res['user_name']!=$user || $res['user_pwd']!=$pwd){
  			$arr=['status'=>'error','code'=>'2','message'=>'用户名或密码错误'];
  			$json=json_encode($arr);
        	echo $json;
  		}else{
  			$arr=['status'=>'seccuss','code'=>'0','message'=>'登录成功'];
            Session::set('name',$user);
            $json=json_encode($arr);
        	echo $json;
  		}
  	}
  	public function loginOut() {
        Session::delete('name');
        $this->redirect('login/index');
    }
}
