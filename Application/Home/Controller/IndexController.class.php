<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
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
        $top['now_day'] = sizeof(D('Leave')->get_Day_Leave(date("Y-m-d")));
        $top['last_day'] = sizeof(D('Leave')->get_Day_Leave(get_Last_Day()));
        $top['now_week'] = sizeof(D('Leave')->get_Week_Leave(get_Week_All_Day()));
        $top['last_week'] = sizeof(D('Leave')->get_Week_Leave(get_Last_Week_All_Day()));
        $this->assign('top',$top);
        $this->display();
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
}