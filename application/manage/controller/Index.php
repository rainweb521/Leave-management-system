<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:43 PM
 */

namespace app\manage\controller;


use app\config\model\AdminM;
use app\config\model\GradeM;
use app\config\model\MyclassM;
use app\config\model\StudentM;
use think\Request;

class Index extends Common{
    public function index(){
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $admin_model = new AdminM();
        $list = $admin_model->get_AdminList();
        $this->assign('list',$list);
        return view("index");
    }

    public function apply(){
        $this->assign('active',6);
        // 提交表单的操作，判断是否有提交
        $a_id = Request::instance()->get("a_id",0);
        $grade_model = new GradeM();
        $admin_model = new AdminM();
        if ($a_id!=0){
            // 获取各种信息
//            $data['g_name'] =request('post','str','g_name','0');
//            $data['g_addtime'] = date("Y-m-d");
//            $result = $grade_model->add_GradeInfo($data);
            $data = $admin_model->get_AdminInfo($a_id);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
//            $state = get_addInfoState($result);
        }else{
            $data['a_id'] = 0;
            $data['a_username'] = '';
            $data['a_password'] = '';
            $data['a_email'] = '';
            $data['a_phone'] = '';

        }
        $this->assign('data',$data);
        return view("apply");

    }
    public function save(){
        $a_id = Request::instance()->post("a_id",0);
        $data['a_username'] = Request::instance()->post("a_username",0);
        $data['a_password'] = Request::instance()->post("a_password",0);
        $data['a_email'] = Request::instance()->post("a_email",0);
        $data['a_phone'] = Request::instance()->post("a_phone",0);

        $grade_model = new GradeM();
        $admin_model = new AdminM();
        if ($a_id!=0){
            $data['a_id'] = $a_id;
            $admin_model->save_AdminInfo($data);
            $this->success('修改成功','/index.php/manage/index/');
        }else{
            $data['a_addtime'] = date("Y-m-d");;
            $admin_model->insert_AdminInfo($data);
            $this->success('添加成功','/index.php/manage/index');
        }
    }

    public function delete(){
        $admin_model = new AdminM();
        $a_id = Request::instance()->get("a_id",0);
        $admin_model->delete_AdminInfo(array('a_id'=>$a_id));
        $this->success('删除成功','/index.php/manage/index');
    }
}