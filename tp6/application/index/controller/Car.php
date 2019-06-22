<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class car extends Controller
{    
    public function index() {            //购物车
        return $this->fetch('car');
    }
    public function order() {            //购物车
        return $this->fetch('order');
    }
    public function settleMent() {            //购物车
        return $this->fetch('settleMent');
    }
  
  
 
}
