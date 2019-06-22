<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Sort extends Controller
{  
    public function index() {          //分类  
        return $this->fetch('sort');
    }
     public function productsClass() {          //分类  
        return $this->fetch('productsClass');
    }
 
}
