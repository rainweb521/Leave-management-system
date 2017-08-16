<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 16:50
 */
namespace Common\Model;
use Think\Model;
class AdminModel extends Model{
    private $_db = '';

    public function __construct() {
        $this->_db = M('admin');

    }

    /** 用于登录的验证
     * @param $a_username
     * @param $a_password
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function Validate_Login($a_username,$a_password){
        $where['a_username'] = $a_username;
        $data = $this->_db->where($where)->find();
        return $data;
    }
    /** 返回单个数据对象
     * @param $a_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_AdminInfo($a_id){
        $where['a_id'] = $a_id;
        $data = $this->_db->where($where)->find();
        return $data;
    }

    public function save_AdminInfo($admin){
        $where['a_id'] = $admin['a_id'];
        $this->_db->where($where)->save($admin);
//        var_dump($admin);
//        exit();

    }

}