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
    public function Validate_Login($a_username,$a_password){
        $where['a_username'] = $a_username;
        $data = $this->_db->where($where)->find();
        return $data;
    }
}