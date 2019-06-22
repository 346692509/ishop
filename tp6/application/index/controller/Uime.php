<?php
namespace app\index\controller;
use think\Controller;
use think\facade\Session;
class Uime extends Common
{    
    public function index(){            //我的中心
        return $this->fetch('uime');
    }
    public function whole(){            
        return $this->fetch('whole');
    }
    public function coupon(){            
        return $this->fetch('coupon');
    }
    public function Collection(){            
        return $this->fetch('Collection');
    }
    public function invitation(){            
        return $this->fetch('invitation');
    }


    //设置开始
    public function set(){            
        return $this->fetch('set');
    }
 	public function editAddress(){            
        return $this->fetch('editAddress');
    }
    public function addres(){            
        return $this->fetch('addres');
    }
    //设置结束
}
