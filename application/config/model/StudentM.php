<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 1:05 PM
 */

namespace app\config\model;


use think\Model;

class StudentM extends Model
{//    protected $pk = 'uid';
// 设置当前模型对应的完整数据表名称
    protected $table = 'student';
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
            return 0;
        }else {
            return $result['s_id'];
        }
    }
    /** 返回数据对象的列表，where的值可以不传参数，默认为空，这样这个函数的扩展性很高，适合很多地方调用
     * @param null $where
     * @return false|mixed|\PDOStatement|string|\think\Collection
     */
    public function get_StudentList($where=NULL){
        $data = StudentM::where($where)->select();
        return $data;
    }

    /** 保存已经修改的数据对象
     * @param $data
     */
    public function save_StudentInfo($data){
        $where['s_id'] = $data['s_id'];
        $this->_db->where($where)->save($data);
    }

    public function add_Excel($exl){
        $time = date('Y-m-d');
        $sum = 1;
        $success = 0;
//        echo '<h5 align="center" id="state">上传第'.$sum.'条数据中</h5>';
        foreach ($exl as $value){

            $student['s_g_id'] = D('Grade')->add_ExcleGrade($value['A']);
            $student['s_grade'] = $value['A'];
            $student['s_c_id'] = D('Class')->add_ExcleClass($value['B'],$student['s_g_id'],$student['s_grade'] );
            $student['s_class'] = $value['B'];
            $student['s_card'] = $value['C'];
            $student['s_username'] = $value['D'];
            $student['s_phone'] = $value['E'];
            $student['s_addtime'] = $time;
            $student['s_state'] = 1;
            $result = $this->add_StudentInfo($student);
            $sum ++;
            if ($result == 0){
                $success ++ ;
//                echo '<script>document.getElementById("state").innerHTML = "上传第'.$sum.'条数据成功"; </script>';
            }else{
                echo '<h5 align="center">上传第'.$sum.'条数据失败，该学生在系统中存在</h5>';
            }
//            break;
        }
        return $success;
    }
    public function del_StudentInfo($s_id){
        $where['s_id'] = $s_id;
        $this->_db->where($where)->delete();
    }
}