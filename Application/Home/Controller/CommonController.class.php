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
    public function __construct(){
        header("Content-type: text/html; charset=utf-8");
        parent::__construct();
        $this->_init();
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
//            $url = '/index.php?c=login';
//            echo "<script language=\"javascript\">";
//            echo "location.href=\"$url\"";
//            echo "</script>";
        }
        $this->assign('header_name',get_HeaderName($_SESSION['AdminUser']));
    }

    /**
     * 获取登录用户信息
     * @return array
     */
    public function getLoginUser()
    {
        return session("AdminUser");
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
    public function _empty(){
        echo "不存在的方法";
    }
}