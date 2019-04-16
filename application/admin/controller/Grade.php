<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:42 PM
 */

namespace app\admin\controller;


use app\config\model\GradeM;
use app\config\model\LeaveM;
use app\config\model\MyclassM;
use app\config\model\StudentM;

class Grade extends Common
{
    public function index(){
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_model = new GradeM();
        $leave_model = new LeaveM();
        $grade_list = $grade_model->get_GradeList();
        $grade_list = $leave_model->get_Grade_Leave($grade_list);
        $this->assign('grade_list',$grade_list);
        return view("index");
    }

    public function apply(){
        $this->assign('active',6);
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        $grade_model = new GradeM();
        if ($flag==1){
            // 获取各种信息
            $data['g_name'] =request('post','str','g_name','0');
            $data['g_addtime'] = date("Y-m-d");
            $result = $grade_model->add_GradeInfo($data);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
            $state = get_addInfoState($result);
            $this->assign('state',$state);
        }
        return view("apply");

    }
    public function menu_active(){
        $grade_model = new GradeM();
        $this->assign('active',5);
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = $grade_model->get_GradeList();
        $this->assign('grade_list',$grade_list);
    }
    public function delete(){
        $grade_model = new GradeM();
        $myclass_model = new MyclassM();
        $student_model = new StudentM();
        $this->assign('active',7);
        $g_id = request('get','int','g_id',0);
        if ($g_id != 0){
            $class_list = $myclass_model->get_ClassList(array('c_g_id'=>$g_id));
            foreach ($class_list as $class){
                $student_list = $student_model->get_StudentList(array('s_c_id'=>$class['c_id']));
                foreach ($student_list as $student){
                    $student_model->del_StudentInfo($student['s_id']);
                }
                $myclass_model->del_ClassInfo($class['c_id']);
            }
            $grade_model->del_GradeInfo($g_id);
            $this->success('删除成功','/index.php/admin/grade/delete');
            exit();
        }
        //         每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = $grade_model->get_GradeList();
        $this->assign('grade_list',$grade_list);
        return view("delete");
    }
}