<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 19:21
 */

namespace Home\Controller;
use Think\Controller;

class LeaveController extends CommonController {
    public function menu_active(){
        $this->assign('active',2);
    }
    public function index(){

        /**
         * 进入销假列表时，自动显示最近的十条未销假记录。
         */
        $leave_list = D('Leave')->get_Num_LeaveList(array('l_state'=>0),10);
        $this->assign('leave_list',$leave_list);
        $this->display();
    }
    public function apply(){
        // 用于显示表单中的负责人信息
        $this->assign('l_charge',$_SESSION['AdminUser']['a_username']);
        $this->display();
    }
    public function apply2(){
        // 用于显示表单中的负责人信息
        $this->assign('l_charge',$_SESSION['AdminUser']['a_username']);
        $this->display();
    }
    public function show(){
        // 提交表单的操作，判断是否有提交
        $flag = request('post','int','flag',0);
        if ($flag==1){
            $l_status = request('post','int','l_status');
            $data = array();
            // 1 表示是长期假条
            if ($l_status == 1){
                // 获取各种信息
                $data['l_s_card'] = request('post','str','l_s_card','');
                $data['l_s_username'] = request('post','str','l_s_username','');
                $data['l_s_grade'] = request('post','str','l_s_grade','');
                $data['l_s_class'] = request('post','str','l_s_class','');
                $data['l_s_phone'] = request('post','str','l_s_phone','');
                $data['l_begintime'] = request('post','str','l_begintime','');
                $data['l_endtime'] = request('post','str','l_endtime','');
                $data['l_day'] = get_Num_Day($data['l_endtime'],$data['l_begintime']);
                $data['l_address'] = request('post','str','l_address','');
                $data['l_cause'] = request('post','str','l_cause','');
                $data['l_charge'] = request('post','str','l_charge','');
                $data['l_addtime'] = date("Y-m-d");
                $data['l_state'] = 0;
                $data['l_status'] = 1;
                $data['l_s_id'] = request('post','int','l_s_id','');
                $data['l_c_id'] = request('post','int','l_c_id','');
                $data['l_g_id'] = request('post','int','l_g_id','');
                // 添加请假条信息
                D('Leave')->add_LeaveInfo($data);
                // 修改对应学生的最后请假时间
                $student = D('Student')->get_StudentInfo($data['l_s_id']);
                $student['s_lastleave'] = date("Y-m-d");
                // 修改保存学生的信息
                D('Student')->save_StudentInfo($student);
            }else if ($l_status == 2){
                // 获取各种信息
                $data['l_s_card'] = request('post','str','l_s_card','');
                $data['l_s_username'] = request('post','str','l_s_username','');
                $data['l_s_grade'] = request('post','str','l_s_grade','');
                $data['l_s_class'] = request('post','str','l_s_class','');
                $data['l_s_phone'] = request('post','str','l_s_phone','');
                $data['l_night_end_time'] = request('post','str','l_night_end_time','');
                $data['l_night_begin_time'] = request('post','str','l_night_begin_time','');
                $data['l_class_begin_time'] = request('post','str','l_class_begin_time','');
                $data['l_class_end_time'] = request('post','str','l_class_end_time','');
                $data['l_begin_class'] = request('post','str','l_begin_class','');
                $data['l_end_class'] = request('post','str','l_end_class','');
                $data['l_day'] = get_Num_Day($data['l_endtime'],$data['l_begintime']);
                $data['l_address'] = request('post','str','l_address','');
                $data['l_cause'] = request('post','str','l_cause','');
                $data['l_charge'] = request('post','str','l_charge','');
                $data['l_addtime'] = date("Y-m-d");
                $data['l_state'] = 0;
                $data['l_status'] = 2;
                $data['l_s_id'] = request('post','int','l_s_id','');
                $data['l_c_id'] = request('post','int','l_c_id','');
                $data['l_g_id'] = request('post','int','l_g_id','');
                // 添加请假条信息
                D('Leave')->add_LeaveInfo($data);
                // 修改对应学生的最后请假时间
                $student = D('Student')->get_StudentInfo($data['l_s_id']);
                $student['s_lastleave'] = date("Y-m-d");
                // 修改保存学生的信息
                D('Student')->save_StudentInfo($student);

            }
        } else {
            $l_id = request('get','int','l_id',1);
            $data = D('Leave')->get_LeaveInfo($l_id);
        }
        $data = get_Split_DateArr($data);
        $this->assign('leave',$data);
        $this->display();
    }
    /**
     * 表单中，输入学号，自动填写信息的操作，用过ajax来后台获取对应信息
     */
    public function apply_ajax(){
        /* $l_s_card是假条表中的学号字段，用于判断是否有查找学号的操作   */
        $l_s_card = request('get','str','l_s_card','');
        if ($l_s_card != ''){
            // 返回对应的学生信息
            $student = D('Student')->get_StudentList(array('s_card'=>$l_s_card));
//            $ret = array(array('name'=>'123543'),array('name'=>'7894561423'));
//            if ($student==NULL){
//                $student = array();
//            }
            echo json_encode($student);
        }
    }

    /**
     *  设置请假条的注销状态函数
     */
    public function set_state(){
        // 获取假条的id，和操作的验证值
        $l_id = request('get','int','l_id',0);
        $tip = request('get','int','tip',0);
        if ($l_id!=0 && $tip!=0){
            // 获取对应的假条
            $data = D('Leave')->get_LeaveInfo($l_id);
            // 修改假条状态
            $data['l_state'] = 1;
            // 设置销假时间
            $data['l_logout'] = date("Y-m-d");
            // 保存假条修改
            D('Leave')->save_LeaveInfo($data);
//            echo json_encode($data);
        }
    }
    public function printf(){
        $tip = request('get','int','tip',0);
        if ($tip == 0){
            $this->display();
        }else{
            if ($tip == 1){
                $this->redirect('/index.php?c=leave&a=form');
            }else{
                $this->redirect('/index.php?c=leave&a=form2');
            }
        }
    }
    public function form(){
        $l_id = request('get','int','l_id',0);
        $data = array();
        if ($l_id != 0){
            $data = D('Leave')->get_LeaveInfo($l_id);
            $data = get_Split_DateArr($data);
        }
        $this->assign('leave',$data);
        $this->display();
    }
    public function form2(){
        $l_id = request('get','int','l_id',0);
        $data = array();
        if ($l_id != 0){
            $data = D('Leave')->get_LeaveInfo($l_id);
            $data = get_Split_DateArr($data);
        }
        $this->assign('leave',$data);
        $this->display();
    }

}