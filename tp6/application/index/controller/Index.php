<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }

    public function class()
    {
        return $this->fetch('class');
    }
    public function find()
    {
        return $this->fetch('find');
    }
    public function car()
    {
        return $this->fetch('car');
    }
    public function uime()
    {
        return $this->fetch('uime');
    }
}
