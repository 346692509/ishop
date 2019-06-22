<?php
namespace app\index\controller;
use think\Controller;
use think\facade\Session;
class car extends Common
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
