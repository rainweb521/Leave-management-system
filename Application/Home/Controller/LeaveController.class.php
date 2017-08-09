<?php
/**
 * Created by PhpStorm.
 * User: Rain
 * Date: 2017/8/9
 * Time: 19:21
 */

namespace Home\Controller;
use Think\Controller;

class LeaveController extends CommonController {
    public function index(){
        $this->display();
    }
    public function apply(){

        $flag = request('post','int','flag',0);
        if ($flag==1){

        }
        $this->display();
    }
}