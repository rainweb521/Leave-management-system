<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/10
 * Time: 11:27
 */

namespace Common\Model;
use Think\Model;

class GradeModel extends Model {
    private $_db = '';

    public function __construct() {
            $this->_db = M('grade');
    }
    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_GradeInfo($g_id){
        $where['g_id'] = $g_id;
        $data = $this->_db->where($where)->find();
        return $data;
    }
    /** 添加单个数据对象，有重复验证功能
     * @param $data
     * @return int
     */
    public function add_GradeInfo($data){
        $where['g_name'] = $data['g_name'];
        $result = $this->_db->where($where)->find();
        if ($result==NULL){
            $this->_db->add($data);
            return 1;
        }else {
            return 0;
        }
    }
    /** 返回数据对象的列表
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_GradeList(){
        $data = $this->_db->select();
        return $data;
    }

}