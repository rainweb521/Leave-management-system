<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:17 PM
 */

namespace app\index\controller;
use app\config\model\AdminM;
use app\config\model\StudentM;
use app\config\model\MyclassM;
use app\config\model\GradeM;
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
            $where['s_card'] = request('post','str','a_username','');
            $where['s_password'] = request('post','str','a_password','');
            $admin_model = new AdminM();
            $student_model = new StudentM();
            $data = $student_model->get_LoginInfo($where);
            if ($data==NULL){
                $state = "用户名不存在";
            }else if ($data['s_password']!=$where['s_password']){
                $state = "密码错误";
            }else{
                session('AdminUser',$data);
//                start_session(6000);
                $this->redirect('/index.php/index/index');
                exit();
            }
            $this->assign('state',$state);
        }
        return \view("index");

    }
    public function register(){
        $this->_init();
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        $this->assign('state',"");
//        $student_model = new StudentM();
        $grade_model = new GradeM();
        if ($flag==1){
            // 获取各种信息
            $student_model = new StudentM();
            $myclass_model = new MyclassM();
            $data['s_username'] =request('post','str','s_username','');
            $data['s_password'] =request('post','str','s_password','');
            $data['s_card'] = request('post','int','s_card','');
            $data['s_phone'] = request('post','int','s_phone','');
            $data['s_g_id'] = request('post','int','s_g_id','');
            $data['s_c_id'] = request('post','int','s_c_id','');
            $data['s_addtime'] = date("Y-m-d");
            $grade = $grade_model->get_GradeInfo($data['s_g_id']);
            $data['s_grade'] = $grade['g_name'];
            $class = $myclass_model->get_ClassInfo($data['s_c_id']);
            $data['s_class'] = $class['c_name'];
            $data['s_state'] = 1;
//            $data['s_password'] = $data['s_card'];
            // 添加学生信息
            $result = $student_model->add_StudentInfo($data);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
            $state = get_addInfoState($result);
            $this->assign('state',$state);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $list = $grade_model->get_GradeList();
        $this->assign('grade_list',$list);
        return \view("register");

    }

    /**
     * 表单中，选择级别下拉列表时，通过ajax去后台查找对应的班级信息
     */
    public function apply_ajax(){
        /* s_g_id是班级表中的级别id字段，用于判断是否有查找级别的操作   */
        $s_g_id = request('get','int','s_g_id',0);
        if ($s_g_id != 0){
            // 返回对应的班级列表
            $student_model = new StudentM();
            $class_model = new MyclassM();
            $class_list = $class_model->get_ClassList(array('c_g_id'=>$s_g_id));
//            $ret = array(array('name'=>'123543'),array('name'=>'7894561423'));
            return ($class_list);
        }
    }
    /**
     * 登出操作
     */
    public function logout() {
        session('AdminUser', null);
        $this->redirect('/index.php/index/index');
        exit();
//        $this->get_session();
    }
}