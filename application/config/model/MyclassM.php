<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 1:28 PM
 */

namespace app\config\model;


use think\Model;

class MyclassM extends Model{
    //    protected $pk = 'uid';
// 设置当前模型对应的完整数据表名称
    protected $table = 'class';
    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_ClassInfo($c_id){
        $where['c_id'] = $c_id;
        $data = MyclassM::where($where)->find();
        return $data;
    }

    /** 添加单个数据对象，有重复验证功能
     * @param $data
     * @return int
     */
    public function add_ClassInfo($data){
        $where['c_name'] = $data['c_name'];
        $where['c_g_id'] = $data['c_g_id'];
        $result = MyclassM::where($where)->find();
        if ($result==NULL){
            MyclassM::save($data);
            return 0;
        }else {
            return $result['c_id'];
        }
    }

    /** 返回数据对象的列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_ClassList($where=NULL){
        $data = MyclassM::where($where)->select();
        return $data;
    }
    public function add_ExcleClass($c_name,$g_id,$g_name){
        $time = date('Y-m-d');
        $where['c_name'] = $c_name;
        $where['c_g_id'] = $g_id;
        $result = MyclassM::where($where)->find();
        if ($result==NULL){
            $data['c_name'] = $c_name;
            $data['c_g_id'] = $g_id;
            $data['c_grade'] = $g_name;
            $data['c_addtime'] = $time;
            $c_id = MyclassM::save($data);
            return $c_id;
        }else {
            return $result['c_id'];
        }
    }
    public function del_ClassInfo($c_id){
        $where['c_id'] = $c_id;
        MyclassM::where($where)->delete();
    }

}