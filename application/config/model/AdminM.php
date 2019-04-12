<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:24 PM
 */
namespace app\config\model;
use think\Model;
class AdminM extends Model{
    /**
     * 主键默认自动识别
     */
//    protected $pk = 'uid';
// 设置当前模型对应的完整数据表名称
    protected $table = 'admin';
    /** 用于登录的验证
     * @param $a_username
     * @param $a_password
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function Validate_Login($a_username,$a_password){
        $where['a_username'] = $a_username;
        $data = AdminM::where($where)->find();
        if ($data!=null){
            return $data->getData();
        }else{
            return $data;
        }
//        $data = $this->_db->where($where)->find();
//        return $data;
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