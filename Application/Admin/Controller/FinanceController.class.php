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

        parent::_initialize();
    }

    //创建向导首页
    public function index()
    {
        $this->display();
    }
}