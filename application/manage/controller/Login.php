<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:17 PM
 */

namespace app\manage\controller;
use app\config\model\AdminM;
use app\config\model\StudentM;
use think\Controller;

use \think\Request;
use \think\View;


class Login extends Controller {

    public function _init(){
        $admin_model = new AdminM();
        $config = $admin_model->get_config();
        $this->assign('title',$config['title']);
    }

    public function index(){
        $this->_init();
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        $this->assign('state','');
        if($flag==1){
            $username = Request::instance()->post("a_username");
            $password = Request::instance()->post("a_password");
            $admin_model = new AdminM();
//            $student_model = new StudentM();
//            $data = $student_model->get_LoginInfo($where);
            if ($username=='admin'&&$password=='admin'){
                $data['username'] = 'admin';
                $data['password'] = 'admin';

                session('AdminUser',$data);
//                start_session(6000);
                $this->redirect('/index.php/manage/index');
                exit();
            }else{
                $state = "用户名不存在";
            }
            $this->assign('state',$state);
        }
        return \view("index");

    }

    /**
     * 登出操作
     */
    public function logout() {
        session('AdminUser', null);
        $this->redirect('/index.php/manage/index');
        exit();
//        $this->get_session();
    }
}