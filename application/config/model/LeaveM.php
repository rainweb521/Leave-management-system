<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:47 PM
 */

namespace app\config\model;

use think\Model;

class LeaveM extends Model{
    /**
     * 主键默认自动识别
     */
//    protected $pk = 'uid';
// 设置当前模型对应的完整数据表名称
    protected $table = 'leave';
    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_LeaveInfo($l_id){
        $where['l_id'] = $l_id;
        $data = LeaveM::where($where)->find();
        if ($data!=null){
            return $data->getData();
        }else{
            return null;
        }
    }
    /** 添加单个数据对象
     * @param $data
     * @return int
     */
    public function add_LeaveInfo($data){
//        $where['s_card'] = $data['s_card'];
//        $where['s_c_id'] = $data['s_c_id'];
//        $where['s_c_id'] = $data['s_c_id'];
        LeaveM::save($data);
//        $result = $this->_db->where($where)->find();
//        if ($result==NULL){
//            return 1;
//        }else {
//            return 0;
//        }
    }
    /** 返回数据对象的列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_LeaveList($where=NULL){
        $data = LeaveM::where($where)->select();
        return $data;
    }

    /** 返回指定个数的数据对象列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @param $num
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_Num_LeaveList($where=NULL,$num){
//        $data = LeaveM::where($where)->limit(0,9)->select();
        $data = LeaveM::where($where)->select();
        return $data;
    }
    public function get_LeaveList2($where=NULL,$num){
        $data = LeaveM::where($where)->select();
        $data2 = LeaveM::where($where)->limit(count($data)-$num,count($data))->select();
//        $data = LeaveM::where($where)->select();
        return $data2;
    }
    /** 保存一个已经修改的数据对象
     * @param $data
     */
    public function save_LeaveInfo($data){
        $where['l_id'] = $data['l_id'];
        LeaveM::save($data,$where);
    }

    /** 获取一个指定日期的请假条对象列表，data为日期参数，格式为Y-m-d，2017-8-08，
     * @param $date data为日期参数
     * @param null $where where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_Day_Leave($date ,$where=NULL){
        $where['l_addtime'] = $date;
        $data = $this->get_LeaveList($where);
        return $data;
    }

    /** 获取一个指定星期的请假条对象列表，data为日期数组，包含一个星期内所有的日期，
     * @param $date
     * @param null $where
     * @return array
     */
    public function get_Week_Leave($date ,$where=NULL){
        $data_leave = array();
//        $sum = 0;
        foreach ($date as $value){
            $where['l_addtime'] = $value;
            $data = $this->get_LeaveList($where);
            if ($data!=NULL){
                foreach ($data as $line){
                    array_push($data_leave,$line);
                }
            }
//            $sum = $sum + sizeof($data);
        }
        return $data_leave;
    }
    /** 获取一个指定月份的请假条对象列表，data为日期数组，包含一个月份内所有的日期，
     * @param $date
     * @param null $where
     * @return array
     */
    public function get_Month_Leave($date ,$where=NULL){
        $data_leave = array();
//        $sum = 0;
        foreach ($date as $value){
            $where['l_addtime'] = $value;
            $data = $this->get_LeaveList($where);
            if ($data!=NULL){
                foreach ($data as $line){
                    array_push($data_leave,$line);
                }
            }
//            $sum = $sum + sizeof($data);
        }
        return $data_leave;
    }

    /** 获取指定班级的所有请假条对象列表， class_list是一个数组列表，不是单个班级对象，
     * @param $class_list
     * @return array
     */
    public function get_Class_Leave($class_list){
        $class_leave = array();
        foreach ($class_list as $class){
            $where['l_c_id'] = $class['c_id'];
            $where['l_g_id'] = $class['c_g_id'];
            $class['day'] = sizeof($this->get_Day_Leave(date("Y-m-d"),$where));
            $class['last_day'] = sizeof($this->get_Day_Leave(get_Last_Day(date("Y-m-d")),$where));
            $class['week'] = sizeof($this->get_Week_Leave(get_Week_All_Day(),$where));
            $class['month'] = sizeof($this->get_Month_Leave(get_Month_All_Day(),$where));
            array_push($class_leave,$class);
        }
        return $class_leave;
    }

    /** 获取所有级别的所有请假条对象列表，grade_list是一个数组对象列表，不是一个单个对象
     * @param $grade_list
     * @return array
     */
    public function get_Grade_Leave($grade_list){
        $grade_leave = array();
        foreach ($grade_list as $grade){
            $where['l_g_id'] = $grade['g_id'];
            $grade['day'] = sizeof($this->get_Day_Leave(date("Y-m-d"),$where));
            $grade['last_day'] = sizeof($this->get_Day_Leave(get_Last_Day(date("Y-m-d")),$where));
            $grade['week'] = sizeof($this->get_Week_Leave(get_Week_All_Day(),$where));
            $grade['month'] = sizeof($this->get_Month_Leave(get_Month_All_Day(),$where));
            array_push($grade_leave,$grade);
        }
        return $grade_leave;

    }
}