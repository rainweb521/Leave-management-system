<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/10
 * Time: 11:27
 */

namespace Common\Model;
use Think\Model;

class ClassModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('class');
    }

    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_ClassInfo($c_id){
        $where['c_id'] = $c_id;
        $data = $this->_db->where($where)->find();
        return $data;
    }

    /** 添加单个数据对象，有重复验证功能
     * @param $data
     * @return int
     */
    public function add_ClassInfo($data){
        $where['c_name'] = $data['c_name'];
        $where['c_g_id'] = $data['c_g_id'];
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
    public function get_ClassList($where=NULL){
        $data = $this->_db->where($where)->select();
        return $data;
    }


}