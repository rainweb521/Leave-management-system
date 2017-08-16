<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 18:43
 */

namespace Home\Controller;
use Think\Controller;

class ClassController extends CommonController {

    public function index(){
        /* c_g_id是班级表中的级别id字段，用于判断是否有查找班级的操作   */
        $c_g_id = request('get','int','c_g_id',0);
        if ($c_g_id!=0){
            // 如果有查找班级的操作，则先获取指定级别里，所有的班级
            $class_list = D('Class')->get_ClassList(array('c_g_id'=>$c_g_id));
            // 将获取到的所有班级列表穿入LeaveModel模型中，这时得到的class_list中，每个班级都包含了各种请假记录信息，今天，本周，本月的请假人数等
            $class_list = D('Leave')->get_Class_Leave($class_list);
            $this->assign('class_list',$class_list);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = D('Grade')->get_GradeList();
        $this->assign('grade_list',$grade_list);
        $this->display();
    }

    public function apply(){
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        if ($flag==1){
            // 获取各种信息
            $data['c_name'] =request('post','str','c_name','');
            $data['c_addtime'] = date("Y-m-d");
            $data['c_g_id'] = request('post','int','c_g_id','');
            $grade = D('Grade')->get_GradeInfo($data['c_g_id']);
            $data['c_grade'] = $grade['g_name'];
            $result = D('Class')->add_ClassInfo($data);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
            $state = get_addInfoState($result);
            $this->assign('state',$state);
        }
        // 先将级别的信息传入前台，在下拉列表中显示
        $list = D('Grade')->get_GradeList();
        $this->assign('grade_list',$list);
        $this->display();
    }

    public function delete(){
        /* c_g_id是班级表中的级别id字段，用于判断是否有查找班级的操作   */
        $c_g_id = request('get','int','c_g_id',0);
        $c_id = request('get','int','c_id',0);
        /**
         * 删除班级信息的操作
         */
        if ($c_id != 0){
            $class = D('Class')->get_ClassInfo($c_id);
            $student_list = D('Student')->get_StudentList(array('s_c_id'=>$c_id));
            foreach ($student_list as $student){
                D('Student')->del_StudentInfo($student['s_id']);
            }
            D('Class')->del_ClassInfo($class['c_id']);
            /**
             * ，先获取当前学生信息中的班级和级别，方便删除以后重新定位到该班级里
             */
            $this->success('删除成功','/index.php?c=class&a=delete&c_g_id='.$class['c_g_id']);
            exit();
        }
        if ($c_g_id!=0){
            // 如果有查找班级的操作，则先获取指定级别里，所有的班级
            $class_list = D('Class')->get_ClassList(array('c_g_id'=>$c_g_id));
            // 将获取到的所有班级列表穿入LeaveModel模型中，这时得到的class_list中，每个班级都包含了各种请假记录信息，今天，本周，本月的请假人数等
            $class_list = D('Leave')->get_Class_Leave($class_list);
            $this->assign('class_list',$class_list);
        }
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = D('Grade')->get_GradeList();
        $this->assign('grade_list',$grade_list);
        $this->display();

    }
}