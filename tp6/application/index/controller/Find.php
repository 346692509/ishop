<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Find extends Controller
{    
    public function index(){            //发现
        return $this->fetch('find');
    }
  
}
