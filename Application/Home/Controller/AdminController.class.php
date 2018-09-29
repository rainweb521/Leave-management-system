<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 18:14
 */

namespace Home\Controller;
use Think\Controller;

class AdminController extends CommonController {
    public function index(){

    }
    /**
     *  管理员信息修改页面
     */
    public function apply(){
        $admin = $_SESSION['AdminUser'];

        $flag = request('post','int','flag',0);
        if ($flag != 0){
            $admin['a_username'] = request('post','str','a_username','');
            $admin['a_status'] = request('post','str','a_status','');
            $last_password = request('post','str','last_password','');
            if ($last_password != $admin['a_password']){
                $this->assign('state','原密码输入错误');
            }else {

                $admin['a_password'] = request('post','str','a_password','');
                D('Admin')->save_AdminInfo($admin);
                /**
                 * 刚刚发现修改了好多遍的值都还改不了，断点调试了几次，发现没有问题，sql语句也没有问题，后来才发现，是session的问题，
                 * 要修改的话连session也需要修改掉
                 */
                session('AdminUser',$admin);
                $this->success('修改信息成功','/index.php?c=admin&a=apply');
                exit();
            }
        }
        $this->assign('admin',$admin);
        $this->display();
    }

    /**
     * 登录日志的显示页面
     */
    public function log(){
        $this->display();
    }
    public function menu_active(){
        $this->assign('active',8);
    }
}