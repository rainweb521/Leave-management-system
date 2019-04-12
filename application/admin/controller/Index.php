<?php
/**
 * Created by PhpStorm.
 * User: rain
 * Date: 2019/4/12
 * Time: 12:39 PM
 */

namespace app\admin\controller;


use app\config\model\LeaveM;

class Index extends Common{
    public function index(){
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//        echo date("Ymd",strtotime("now")), "\n";
//        echo date("Ymd",strtotime("-1 week Monday")), "\n";
//        echo date("Ymd",strtotime("-1 week Sunday")), "\n";
//        echo date("Ymd",strtotime("+0 week Monday")), "\n";
//        echo date("Ymd",strtotime("+0 week Sunday")), "\n";
//
//        echo "*********第几个月:";
//        echo date('n');
//        echo "*********本周周几:";
//        echo date("w");
//        echo "*********本月天数:";
//        echo date("t");
//        echo "*********";
//
//        echo '<br>上周起始时间:<br>';
//        echo date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-7,date("Y"))),"\n";
//        echo date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7-7,date("Y"))),"\n";
//        echo '<br>本周起始时间:<br>';
//        echo date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y"))),"\n";
//        echo date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"))),"\n";
//
//        echo '<br>上月起始时间:<br>';
//        echo date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m")-1,1,date("Y"))),"\n";
//        echo date("Y-m-d H:i:s",mktime(23,59,59,date("m") ,0,date("Y"))),"\n";
//        echo '<br>本月起始时间:<br>';
//        echo date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),1,date("Y"))),"\n";
//        echo date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("t"),date("Y"))),"\n";
//
//        $season = ceil((date('n'))/3);//当月是第几季度
//        echo '<br>本季度起始时间:<br>';
//        echo date('Y-m-d H:i:s', mktime(0, 0, 0,$season*3-3+1,1,date('Y'))),"\n";
//        echo date('Y-m-d H:i:s', mktime(23,59,59,$season*3,date('t',mktime(0, 0 , 0,$season*3,1,date("Y"))),date('Y'))),"\n";
//
//        $season = ceil((date('n'))/3)-1;//上季度是第几季度
//        echo '<br>上季度起始时间:<br>';
//        echo date('Y-m-d H:i:s', mktime(0, 0, 0,$season*3-3+1,1,date('Y'))),"\n";
//        echo date('Y-m-d H:i:s', mktime(23,59,59,$season*3,date('t',mktime(0, 0 , 0,$season*3,1,date("Y"))),date('Y'))),"\n";
//
//        exit();

        $leave_model = new LeaveM();
        $top['now_day'] = sizeof($leave_model->get_Day_Leave(date("Y-m-d")));
        $top['last_day'] = sizeof($leave_model->get_Day_Leave(get_Last_Day()));
        $top['now_week'] = sizeof($leave_model->get_Week_Leave(get_Week_All_Day()));
//        $top['last_week'] = sizeof(D('Leave')->get_Week_Leave(get_Last_Week_All_Day()));
        $top['now_month'] = sizeof($leave_model->get_Month_Leave(get_Month_All_Day()));
        $this->assign('top',$top);
        return view("index");
    }
    public function menu_active(){
        $this->assign('active',1);
    }
    public function test(){
        $data = get_Last_Week_All_Day();
        echo sizeof($data);
        foreach ($data as $v){
            echo $v;
        }
    }
    public function leave(){
        $this->display();
    }

    public function upload(){

        $this->display();
    }
    /**
     * 导入限制，只能在一张表里，即第一个Sheet1
     *
     */
    public function handling(){
        $files = $_FILES['exl'];
        // exl格式，否则重新上传
//        var_dump($files['type']);exit();
        if($files['type'] !='application/octet-stream'){
            $this->error('不是Excel文件，请重新上传','/index.php?c=index&a=upload',5);
        }
        // 上传
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('xls');// 设置附件上传类型
        $upload->rootPath  =     './Upload/'; // 设置附件上传根目录
        $upload->savePath  =     'excel/'; // 设置附件上传（子）目录
        //$upload->subName   =     array('date', 'Ym');
        $upload->subName   =     '';
        // 上传文件
        $info   =   $upload->upload();
        $file_name =  $upload->rootPath.$info['exl']['savepath'].$info['exl']['savename'];
        $exl = $this->import_exl($file_name);
        // 去掉第exl表格中第一行
        unset($exl[1]);
        // 清理空数组
//        foreach($exl as $k=>$v){
//            if(empty($v)){
//                unset($exl[$k]);
//            }
//        };
        // 重新排序
//        sort($exl);
        $count = count($exl);
        // 检测表格导入成功后，是否有数据生成
        if($count<1){
            $this->error('未检测到有效数据','/index.php?c=index&a=upload',5);
        }
        echo '<h1 align="center">正在上传，不要关闭当前页面</h1>';

        $sum = D('Student')->add_Excel($exl);
        // 删除Excel文件
//        var_dump($exl);
        unlink($file_name);
        $this->success('数据上传成功，共上传'.$sum.'条数据','/index.php?c=index&a=upload',30);
//        $this->display('info');

    }

    /** 处理上传exl数据
     * $file_name  文件路径
     */

    private function import_exl($file_name){
//    $file_name= './Upload/upload.xls';
        import("Org.Util.PHPExcel");
        import("Org.Util.PHPExcel.IOFactory");
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load($file_name,$encode='utf-8');

        // 获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet = $objPHPExcel->getSheet(0);
        // 取得总行数
        $allRow = $currentSheet->getHighestRow();
        // 取得总列数
        $allColumn = $currentSheet->getHighestColumn();
        // 循环获取表中的数据，$currentRow表示当前行，从哪行开始读取数据，索引值从0开始
        for ($currentRow = 1; $currentRow <= $allRow; $currentRow ++) {
            // 从哪列开始，A表示第一列
            for ($currentColumn = 'A'; $currentColumn <= $allColumn; $currentColumn ++) {
                // 数据坐标
                $address = $currentColumn . $currentRow;
                // 读取到的数据，保存到数组$arr中
                $data[$currentRow][$currentColumn] = $currentSheet->getCell($address)->getValue();
            }
        }
        return $data;
//        $s = $objPHPExcel->getActiveSheet()->getCell("A2")->getValue();
//        $this->display();
    }



}