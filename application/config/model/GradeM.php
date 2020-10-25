<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 9:39 PM
 */

namespace app\config\model;


use think\Model;

class GradeM extends Model
{
// 设置当前模型对应的完整数据表名称
    protected $table = 'grade';
    /** 返回单个数据对象
     * @param $c_id
     * @return array|false|mixed|\PDOStatement|string|Model
     */
    public function get_GradeInfo($g_id){
        $where['g_id'] = $g_id;
        $data = GradeM::where($where)->find();
        return $data;
    }
    /** 添加单个数据对象，有重复验证功能
     * @param $data
     * @return int
     */
    public function add_GradeInfo($data){
        $where['g_name'] = $data['g_name'];
        $result = GradeM::where($where)->find();
        if ($result==NULL){
            GradeM::save($data);
            return 0;
        }else {
            return $result['g_id'];
        }
    }
    /** 返回数据对象的列表
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_GradeList(){
        $data = GradeM::all();
        return $data;
    }
    public function add_ExcleGrade($g_name){
        $time = date('Y-m-d');
        $where['g_name'] = $g_name;
        $result = $this->_db->where($where)->find();
        if ($result==NULL){
            $data['g_name'] = $g_name;
            $data['g_addtime'] = $time;
            $g_id = $this->_db->add($data);
            return $g_id;
        }else {
            return $result['g_id'];
        }
    }

    public function del_GradeInfo($g_id){
        $where['g_id'] = $g_id;
        GradeM::where($where)->delete();
    }
}