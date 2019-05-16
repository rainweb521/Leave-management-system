<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:41 PM
 */

namespace app\admin\controller;


use app\config\model\LeaveM;
use app\config\model\GradeM;
use app\config\model\MyclassM;
use app\config\model\StudentM;

class Myclass extends Common
{

    public function index(){
        /* c_g_id是班级表中的级别id字段，用于判断是否有查找班级的操作   */
        $c_g_id = request('get','int','c_g_id',0);
        $class_model = new MyclassM();
        $leave_model = new LeaveM();
        if ($c_g_id!=0){
            // 如果有查找班级的操作，则先获取指定级别里，所有的班级
            $class_list = $class_model->get_ClassList(array('c_g_id'=>$c_g_id));
            // 将获取到的所有班级列表穿入LeaveModel模型中，这时得到的class_list中，每个班级都包含了各种请假记录信息，今天，本周，本月的请假人数等
            $class_list = $leave_model->get_Class_Leave($class_list);
            $this->assign('class_list',$class_list);
        }
        $grade_model = new GradeM();
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = $grade_model->get_GradeList();
//        var_dump($grade_list);exit();
        $this->assign('grade_list',$grade_list);
        return view("index");
    }

    public function apply(){
        $this->assign('active',6);
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        $grade_model = new GradeM();
        $myclass_model =  new MyclassM();
        if ($flag==1){
            // 获取各种信息
            $data['c_name'] =request('post','str','c_name','');
            $data['c_addtime'] = date("Y-m-d");
            $data['c_g_id'] = request('post','int','c_g_id','');
            $grade = $grade_model->get_GradeInfo($data['c_g_id']);
            $data['c_grade'] = $grade['g_name'];
            $result = $myclass_model->add_ClassInfo($data);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
            $state = get_addInfoState($result);
            $this->assign('state',$state);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $list = $grade_model->get_GradeList();
        $this->assign('grade_list',$list);
        return view("apply");
    }
    public function menu_active(){
        $grade_model = new GradeM();
        $myclass_model =  new MyclassM();
        $this->assign('active',4);
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = $grade_model->get_GradeList();
        $this->assign('grade_list',$grade_list);
    }
    public function delete(){
        $grade_model = new GradeM();
        $myclass_model =  new MyclassM();
        $stuent_model = new StudentM();
        $leave_model = new LeaveM();
        $this->assign('active',7);
        /* c_g_id是班级表中的级别id字段，用于判断是否有查找班级的操作   */
        $c_g_id = request('get','int','c_g_id',0);
        $c_id = request('get','int','c_id',0);
        /**
         * 删除班级信息的操作
         */
        if ($c_id != 0){
            $class = $myclass_model->get_ClassInfo($c_id);
            $student_list = $stuent_model->get_StudentList(array('s_c_id'=>$c_id));
            foreach ($student_list as $student){
                $stuent_model->del_StudentInfo($student['s_id']);
            }
            $myclass_model->del_ClassInfo($class['c_id']);
            /**
             * ，先获取当前学生信息中的班级和级别，方便删除以后重新定位到该班级里
             */
            $this->success('删除成功','/index.php/admin/myclass/delete?c_g_id='.$class['c_g_id']);
            exit();
        }
        if ($c_g_id!=0){
            // 如果有查找班级的操作，则先获取指定级别里，所有的班级
            $class_list = $myclass_model->get_ClassList(array('c_g_id'=>$c_g_id));
            // 将获取到的所有班级列表穿入LeaveModel模型中，这时得到的class_list中，每个班级都包含了各种请假记录信息，今天，本周，本月的请假人数等
            $class_list = $leave_model->get_Class_Leave($class_list);
            $this->assign('class_list',$class_list);
        }
        //         每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = $grade_model->get_GradeList();
        $this->assign('grade_list',$grade_list);

        return view("delete");

    }
}