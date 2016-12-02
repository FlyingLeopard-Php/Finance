<?php
/**
 * Created by PhpStorm.
 * User: liushibao
 * Date: 2016/11/29
 * Time: 15:23
 */
namespace Admin\Controller;
class financeController extends AdminController
{

    public function _initialize()
    {
        $admin_user = M('admin_liu')->field('admin_user,job_number')->select();
        $this->assign('admin_user',$admin_user);
        parent::_initialize();
    }

    //创建向导首页
    public function index()
    {
        $this->display();
    }
    //加班
    public function overtime(){
        $this->display();
    }
    //发薪
    public function pay(){
        $this->display();
    }
    //出差
    public function travel(){
        $this->display();
    }
    //请假
    public function leave(){
        $this->display();
    }
    //调休
    public function offtime(){
        $this->display();
    }
}