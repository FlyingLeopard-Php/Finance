<?php
/**
 * Created by PhpStorm.
 * User: liushibao
 * Date: 2016/11/29
 * Time: 15:23
 */
namespace Admin\Controller;
class staffController extends AdminController
{

    public function _initialize()
    {

        parent::_initialize();
    }

    //创建向导首页
    public function index()
    {
        $list  = M('admin_liu')->select();
        $this->assign('list',$list);
//        var_dump($list);
        $this->display();
    }
    public function staff_add(){
        if(IS_POST){
            $data =$this->check();
           M('admin_liu')->add($data);
           $this->success('添加成功', U('staff/index'));
        }
        else{
            $this->display();
        }
    }
    public function staff_edit(){
        if(IS_POST){
            $where['id'] = I('id');
            $data =$this->check();
            M('admin_liu')->where($where)->save($data);
            $this->success('修改成功', U('staff/index'));
        }
        else{
            $where['id'] = I('id');
            $list = M('admin_liu')->where($where)->find();
            $this->assign('list',$list);
            $this->display();
        }
    }
    public function check(){
        $data['admin_user'] = I('admin_user');
        $data['admin_pwd'] = I('admin_pwd');
        $data['type'] = I('type');
        $data['c_phone'] = I('c_phone');
        $data['job_number'] = I('job_number');
        return $data;
    }
}