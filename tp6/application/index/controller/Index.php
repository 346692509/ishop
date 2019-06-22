<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Index extends Controller
{    //导航栏开始
    public function index(){                 //主页
        return $this->fetch('index');
    }
    public function sign(){                  //签到
        return $this->fetch('sign');
    }
    public function time(){                 //限时抢购
        return $this->fetch('time');
    }
    public function membership(){            //会员专享
        return $this->fetch('membership');
    }
    public function purchase(){             //好货拼团
        return $this->fetch('purchase');
    }
    public function invitation(){           //分享领券
        return $this->fetch('invitation');
    }
    public function iphone(){               //手机充值
        return $this->fetch('iphone');
    }
    public function finance(){             //金融理财
        return $this->fetch('finance');
    }
    public function appliance(){            //电器商场
        return $this->fetch('appliance');
    }
    public function supermarket(){           //萌宝超市
        return $this->fetch('supermarket');
    }
    public function uime(){                  //个人中心
        return $this->fetch('uime');
    }
    //导航栏结束
 	public function product(){                  //循环物品
        return $this->fetch('product');
    }
}
