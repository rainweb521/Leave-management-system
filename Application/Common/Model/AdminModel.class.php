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
        if ($data==NULL){
            return 1;
        }
        if ($data['a_password']!=$a_password){
            return 0;
        }
        return 2;
        session('AdminUser',$data['a_id']);
    }
}