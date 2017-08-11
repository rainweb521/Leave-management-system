<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/10
 * Time: 11:27
 */

namespace Common\Model;
use Think\Model;

class StudentModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('student');
    }
    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_StudentInfo($s_id){
        $where['s_id'] = $s_id;
        $data = $this->_db->where($where)->find();
        return $data;
    }

    /** 添加单个数据对象，有重复验证功能
     * @param $data
     * @return int
     */
    public function add_StudentInfo($data){
        $where['s_card'] = $data['s_card'];
//        $where['s_c_id'] = $data['s_c_id'];
//        $where['s_c_id'] = $data['s_c_id'];
        $result = $this->_db->where($where)->find();
        if ($result==NULL){
            $this->_db->add($data);
            return 1;
        }else {
            return 0;
        }
    }
    /** 返回数据对象的列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_StudentList($where=NULL){
        $data = $this->_db->where($where)->select();
        return $data;
    }

    /** 保存已经修改的数据对象
     * @param $data
     */
    public function save_StudentInfo($data){
        $where['s_id'] = $data['s_id'];
        $this->_db->where($where)->save($data);
    }

}