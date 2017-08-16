<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 18:43
 */

namespace Home\Controller;
use Think\Controller;

class GradeController extends CommonController {
    public function index(){
        // 每次点击，都会先将级别的信息传入前台，在下拉列表中显示
        $grade_list = D('Grade')->get_GradeList();
        $grade_list = D('Leave')->get_Grade_Leave($grade_list);
        $this->assign('grade_list',$grade_list);
        $this->display();
    }

    public function apply(){
        $this->assign('active',6);
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        if ($flag==1){
            // 获取各种信息
            $data['g_name'] =request('post','str','g_name','0');
            $data['g_addtime'] = date("Y-m-d");
            $result = D('Grade')->add_GradeInfo($data);
            // 返回前台操作的结果，是否添加成功，或者记录有重复等
            $state = get_addInfoState($result);
            $this->assign('state',$state);
        }
        $this->display();

    }
    public function menu_active(){
        $this->assign('active',5);
    }
    public function delete(){
        $this->assign('active',7);
        $g_id = request('get','int','g_id',0);
        if ($g_id != 0){
            $class_list = D('Class')->get_ClassList(array('c_g_id'=>$g_id));
            foreach ($class_list as $class){
                $student_list = D('Student')->get_StudentList(array('s_c_id'=>$class['c_id']));
                foreach ($student_list as $student){
                    D('Student')->del_StudentInfo($student['s_id']);
                }
                D('Class')->del_ClassInfo($class['c_id']);
            }
            D('Grade')->del_GradeInfo($g_id);
            $this->success('删除成功','/index.php?c=grade&a=delete');
            exit();
        }
        $grade_list = D('Grade')->get_GradeList();
        $this->assign('grade_list',$grade_list);
        $this->display();
    }
}