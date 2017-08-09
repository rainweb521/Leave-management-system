<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 11:34
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
    public function __construct()
    {

        parent::__construct();
//        $this->_init();
    }

    /**
     * 初始化
     * @return
     */
    private function _init()
    {
        // 如果已经登录
        $isLogin = $this->isLogin();
        if (!$isLogin) {
            // 跳转到登录页面
            $this->redirect('/index.php?m=home&c=login');
        }
    }

    /**
     * 获取登录用户信息
     * @return array
     */
    public function getLoginUser()
    {
        return session("adminUser");
    }

    /**
     * 判定是否登录
     * @return boolean
     */
    public function isLogin()
    {
        $user = $this->getLoginUser();
        if ($user && is_array($user)) {
            return true;
        }

        return false;
    }
}