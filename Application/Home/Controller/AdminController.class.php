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
        $this->assign('admin',$admin);
        $this->display();

    }

    /**
     * 登录日志的显示页面
     */
    public function log(){
        $this->display();

    }
}