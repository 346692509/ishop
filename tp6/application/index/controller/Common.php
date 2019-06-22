<?php
namespace app\index\controller;
use think\Controller;
use think\facade\Session;
class Common extends Controller{
    public function __construct(){
        parent::__construct();
		$name=Session::get('name');
        if(empty($name)){
            $this->redirect('login/index');
        }else{
        	$this->assign('name',$name); 
        }  
    }
}