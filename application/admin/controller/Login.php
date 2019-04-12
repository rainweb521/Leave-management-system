<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:17 PM
 */

namespace app\admin\controller;
use app\config\model\AdminM;
use think\Controller;

use \think\Request;
use \think\View;


class Login extends Controller {
    public function index(){
        // 提交表单的操作，判断是否有提交
//        $flag = request('post','int','flag',0);
        $flag = Request::instance()->post("flag",0);
        $this->assign('state',"请先登陆");
        if($flag==1){
            $a_username = request('post','str','a_username','');
            $a_password = request('post','str','a_password','');
            $admin_model = new AdminM();
            $data = $admin_model->Validate_Login($a_username,$a_password);
            if ($data==NULL){
                $state = "用户名不存在";
            }else if ($data['a_password']!=$a_password){
                $state = "密码错误";
            }else{
                session('AdminUser',$data);
//                start_session(6000);
                $this->redirect('/index.php/admin/index');
                exit();
            }
            $this->assign('state',$state);
        }
        return \view("index");

    }
    public function index2(){
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        if($flag==1){
            $a_username = request('post','str','a_username','');
            $a_password = request('post','str','a_password','');
            $admin_model = new AdminM();
            $data = $admin_model->Validate_Login($a_username,$a_password);
            if ($data==NULL){
                $state = "用户名不存在";
            }else if ($data['a_password']!=$a_password){
                $state = "密码错误";
            }else{
                session('AdminUser',$data);
//                start_session(6000);
                $this->redirect('/index.php/admin/index');
                exit();
            }
            $this->assign('state',$state);
        }
        $this->display();

    }

    /**
     * 登出操作
     */
    public function logout() {
        session('AdminUser', null);
        $this->redirect('/index.php/admin/admin');
        exit();
//        $this->get_session();
    }
}