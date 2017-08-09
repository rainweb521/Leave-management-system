<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 16:17
 */

namespace Home\Controller;
use Think\Controller;

class LoginController  extends Controller{
    public function index(){
        $flag = request('post','int','flag',0);
        if($flag==1){
            $a_username = request('post','str','a_username','');
            $a_password = request('post','str','a_password','');
            $data = D('Admin')->Validate_Login($a_username,$a_password);
            if ($data==NULL){
                $state = "用户名不存在";
            }else if ($data['a_password']!=$a_password){
                $state = "密码错误";
            }else{
                session('AdminUser',$data);
                $this->redirect('/index.php?c=index');
                exit();
            }
            $this->assign('state',$state);
        }
        $this->display();

    }

}