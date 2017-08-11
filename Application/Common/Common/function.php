<?php

/**
 * 公用的方法
 */

/** 作为登录验证返回值转换的函数，也就是将model返回的1,0,2转换为文字，然后传到前台页面中显示出来
 * @param $state 参数
 */
function get_LoginState($state){
    if ($state==0){
        return "密码错误";
    }
    if ($state==1){
        return "用户名不存在";
    }
    return $state;
}

/** 用作添加级别，班级，学生信息的返回值判断
 * @param $result 用于做判断的值
 * @return string 返回要显示的值
 */
function get_addInfoState($result){
    if ($result==1){
        return '添加成功';
    }else {
        return '该记录在系统中有重复';
    }
}


function  show($status, $message,$data=array()) {
    $reuslt = array(
        'status' => $status,
        'message' => $message,
        'data' => $data,
    );

    exit(json_encode($reuslt));
}
function getMd5Password($password) {
    return md5($password . C('MD5_PRE'));
}
function getMenuType($type) {
    return $type == 1 ? '后台菜单' : '前端导航';
}
function status($status) {
    if($status == 0) {
        $str = '关闭';
    }elseif($status == 1) {
        $str = '正常';
    }elseif($status == -1) {
        $str = '删除';
    }
    return $str;
}
function getAdminMenuUrl($nav) {
    $url = '/admin.php?c='.$nav['c'].'&a='.$nav['a'];
    if($nav['f']=='index') {
        $url = '/admin.php?c='.$nav['c'];
    }
    return $url;
}
function getActive($navc){
    $c = strtolower(CONTROLLER_NAME);
    if(strtolower($navc) == $c) {
        return 'class="active"';
    }
    return '';
}
function showKind($status,$data) {
    header('Content-type:application/json;charset=UTF-8');
    if($status==0) {
        exit(json_encode(array('error'=>0,'url'=>$data)));
    }
    exit(json_encode(array('error'=>1,'message'=>'上传失败')));
}
function getLoginUsername() {
    return $_SESSION['adminUser']['username'] ? $_SESSION['adminUser']['username']: '';
}
function getCatName($navs, $id) {
    foreach($navs as $nav) {
        $navList[$nav['menu_id']] = $nav['name'];
    }
    return isset($navList[$id]) ? $navList[$id] : '';
}
function getCopyFromById($id) {
    $copyFrom = C("COPY_FROM");
    return $copyFrom[$id] ? $copyFrom[$id] : '';
}
function isThumb($thumb) {
    if($thumb) {
        return '<span style="color:red">有</span>';
    }
    return '无';
}

/**
+----------------------------------------------------------
 * 字符串截取，支持中文和其他编码
+----------------------------------------------------------
 * @static
 * @access public
+----------------------------------------------------------
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
+----------------------------------------------------------
 * @return string
+----------------------------------------------------------
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
{
    $len = substr($str);
    if(function_exists("mb_substr")){
        if($suffix)
            return mb_substr($str, $start, $length, $charset)."...";
        else
            return mb_substr($str, $start, $length, $charset);
    }
    elseif(function_exists('iconv_substr')) {
        if($suffix && $len>$length)
            return iconv_substr($str,$start,$length,$charset)."...";
        else
            return iconv_substr($str,$start,$length,$charset);
    }
    $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
    preg_match_all($re[$charset], $str, $match);
    $slice = join("",array_slice($match[0], $start, $length));
    if($suffix) return $slice."…";
    return $slice;
}
/**
 * @param $class 设置请求类型，post，get
 * @param $type 设置参数类型，str，int
 * @param $name 设置参数名称
 * @param $default 可选参数，设置参数的默认值
 *
 */
function request($class,$type,$name,$default){
    $flag = 1;
    if($class=='get'){
        if(empty($_GET[$name])){
            $flag = 0;
        }else{
            $value = $_GET[$name];
        }
    }else{
        if(empty($_POST[$name])){
            $flag = 0;
        }else{
            $value = $_POST[$name];
        }
    }
    if($type=='str'){
        if($flag==1){
            //          $value = utf8_encode($value);
            //删除字符串两端的空白字符和其他预定义字符
            $value = trim($value);
        }else{
            $value = '';
            if(!empty($default)){
                $value = $default;
            }
        }
    }else{
        if($flag==1){
            //          $value = utf8_encode($value);
            //删除字符串两端的空白字符和其他预定义字符
            $value = trim($value);
            if($value<0) $value = 0;
        }else{
            $value = 0;
            if(!empty($default)){
                $value = $default;
            }
        }
    }
    return $value;
}
function javascript_alert($text){
    echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><script type='text/javascript'>alert('".$text."');</script></html>";
}
/**
 * 邮件发送函数
 */
function sendMail($to, $title, $content) {

    Vendor('PHPMailer.PHPMailerAutoload');
    $mail = new PHPMailer(); //实例化
    $mail->IsSMTP(); // 启用SMTP
    $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
    $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
    $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
    $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
    $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
    $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
    $mail->AddAddress($to,"尊敬的客户");
    $mail->WordWrap = 50; //设置每行字符长度
    $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
    $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
    $mail->Subject =$title; //邮件主题
    $mail->Body = $content; //邮件内容
    $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
    return($mail->Send());
}
function start_session($expire = 0)
{
    if ($expire == 0) {
        $expire = ini_get('session.gc_maxlifetime');
    } else {
        ini_set('session.gc_maxlifetime', $expire);
    }
    if (empty($_COOKIE['PHPSESSID'])) {
        session_set_cookie_params($expire);
        session_start();
    } else {
        session_start();
        setcookie('PHPSESSID', session_id(), time() + $expire);
    }
}

/** 计算两个日期相差天数的函数
 * @param $date1 开始日期
 * @param $date2 结束日期
 * @return float 返回的天数
 */
function get_Num_Day($date1,$date2){
    $date1=strtotime($date1);
    $date2=strtotime($date2);
    $value = round(($date1-$date2)/3600/24) + 1;
    return $value;
}

/** 用于设置header的显示信息
 * @param $data admin信息
 * @return string 返回顶部显示的内容
 */
function get_HeaderName($data){
    $name = '';
    if ($data['a_status']==1){
        $name = $name.'教师：'.$data['a_username'];
    }else{
        $name = $name.'学工助理：'.$data['a_username'];
    }
    return $name;
}

/** 用于查找本星期内所有的日期
 * @return array 返回今天所在的星期内所有的日期数组
 */
function get_Week_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y")));
    $now = date("Y-m-d");
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $week = array();
    for ($i = 0;$i < 7;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($week,$day);
        if ($day == $now){
            break;
        }
    }
    return $week;
}
/** 用于查找上一个星期内所有的日期
 * @return array 返回上一个星期内所有的日期数组
 */
function get_Last_Week_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-7,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("d")-date("w")+7-7,date("Y")));
    $end = date("Y-m-d",strtotime($end));
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $week = array();
    for ($i = 0;$i < 7;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($week,$day);
        if ($day == $end){
            break;
        }
    }
    return $week;
}
/** 用于查找上一个月月份内所有的日期
 * @return array 返回上一个月份内所有的日期数组
 */
function get_Last_Month_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m")-1,1,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m") ,0,date("Y")));
    $end = date("Y-m-d",strtotime($end));
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $month = array();
    for ($i = 0;$i < 32;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($month,$day);
        if ($day == $end){
            break;
        }
    }
    return $month;
}
/** 用于查找本月份内所有的日期
 * @return array 返回今天所在的月份内所有的日期数组
 */
function get_Month_All_Day(){
    $begin = date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),1,date("Y")));
    $end = date("Y-m-d H:i:s",mktime(23,59,59,date("m"),date("t"),date("Y")));
    $now = date("Y-m-d");
//    $begin = date("Y-m-d H:i:s",strtotime("2017-02-27 00:00:00"));
    $month = array();
    for ($i = 0;$i < 32;$i++){
        $day = date('Y-m-d',strtotime($begin)+$i*24*60*60);
        array_push($month,$day);
        if ($day == $now){
            break;
        }
    }
    return $month;
}
/** 用于查找昨天的日期
 * @return array 返回昨天的日期数组
 */
function get_Last_Day(){
    $date = date("Y-m-d");
    $time = strtotime($date) - 3600*24;
    return date('Y-m-d',$time);
}


