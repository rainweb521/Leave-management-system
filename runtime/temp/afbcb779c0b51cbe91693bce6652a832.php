<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"/Users/rain/WWW/leave/application/index/view/leave/index.html";i:1557246303;s:62:"/Users/rain/WWW/leave/application/index/view/Index/header.html";i:1555487673;s:60:"/Users/rain/WWW/leave/application/index/view/Index/left.html";i:1557246507;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="请假管理系统">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/public/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/public/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/assets/css/admin.css">
    <link rel="stylesheet" href="/public/assets/css/app.css">
</head>
<body data-type="generalComponents">
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="/Public/assets/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-bell-o"></span> 提醒
                    <!--<span class="am-badge tpl-badge-success am-round">5</span>-->
                    </span>
                </a>
                <!--<ul class="am-dropdown-content tpl-dropdown-content">-->
                    <!--<li class="tpl-dropdown-content-external">-->
                        <!--<h3>你有 <span class="tpl-color-success">5</span> 条提醒</h3><a href="###">全部</a></li>-->
                    <!--<li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-plus tpl-dropdown-ico-btn-size tpl-badge-success"></span> 【预览模块】移动端 查看时 手机、电脑框隐藏。</a>-->
                        <!--<span class="tpl-dropdown-list-fr">3小时前</span>-->
                    <!--</li>-->
                    <!--<li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-check tpl-dropdown-ico-btn-size tpl-badge-danger"></span> 移动端，导航条下边距处理</a>-->
                        <!--<span class="tpl-dropdown-list-fr">15分钟前</span>-->
                    <!--</li>-->
                    <!--<li class="tpl-dropdown-list-bdbc"><a href="#" class="tpl-dropdown-list-fl"><span class="am-icon-btn am-icon-bell-o tpl-dropdown-ico-btn-size tpl-badge-warning"></span> 追加统计代码</a>-->
                        <!--<span class="tpl-dropdown-list-fr">2天前</span>-->
                    <!--</li>-->
                <!--</ul>-->
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-comment-o"></span> 消息
                    <!--<span class="am-badge tpl-badge-danger am-round">9</span>-->
                    </span>
                </a>
                <!--<ul class="am-dropdown-content tpl-dropdown-content">-->
                    <!--<li class="tpl-dropdown-content-external">-->
                        <!--<h3>你有 <span class="tpl-color-danger">9</span> 条新消息</h3><a href="###">全部</a></li>-->
                    <!--<li>-->
                        <!--<a href="#" class="tpl-dropdown-content-message">-->
                                <!--<span class="tpl-dropdown-content-photo">-->
                      <!--<img src="/Public/assets/img/user02.png" alt=""> </span>-->
                            <!--<span class="tpl-dropdown-content-subject">-->
                      <!--<span class="tpl-dropdown-content-from"> 禁言小张 </span>-->
                                <!--<span class="tpl-dropdown-content-time">10分钟前 </span>-->
                                <!--</span>-->
                            <!--<span class="tpl-dropdown-content-font"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </span>-->
                        <!--</a>-->
                        <!--<a href="#" class="tpl-dropdown-content-message">-->
                                <!--<span class="tpl-dropdown-content-photo">-->
                      <!--<img src="/Public/assets/img/user03.png" alt=""> </span>-->
                            <!--<span class="tpl-dropdown-content-subject">-->
                      <!--<span class="tpl-dropdown-content-from"> Steam </span>-->
                                <!--<span class="tpl-dropdown-content-time">18分钟前</span>-->
                                <!--</span>-->
                            <!--<span class="tpl-dropdown-content-font"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </span>-->
                        <!--</a>-->
                    <!--</li>-->

                <!--</ul>-->
            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-icon-calendar"></span> 进度
                    <!--<span class="am-badge tpl-badge-primary am-round">4</span>-->
                    </span>
                </a>
                <!--<ul class="am-dropdown-content tpl-dropdown-content">-->
                    <!--<li class="tpl-dropdown-content-external">-->
                        <!--<h3>你有 <span class="tpl-color-primary">3</span> 个任务进度</h3><a href="###">全部</a></li>-->
                    <!--<li>-->
                        <!--<a href="javascript:;" class="tpl-dropdown-content-progress">-->
                                <!--<span class="task">-->
                        <!--<span class="desc">这是第一个</span>-->
                                <!--<span class="percent">45%</span>-->
                                <!--</span>-->
                            <!--<span class="progress">-->
                        <!--<div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-success" style="width:45%"></div></div>-->
                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="javascript:;" class="tpl-dropdown-content-progress">-->
                                <!--<span class="task">-->
                        <!--<span class="desc">这是第二个 </span>-->
                                <!--<span class="percent">30%</span>-->
                                <!--</span>-->
                            <!--<span class="progress">-->
                       <!--<div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-secondary" style="width:30%"></div></div>-->
                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="javascript:;" class="tpl-dropdown-content-progress">-->
                                <!--<span class="task">-->
                        <!--<span class="desc">这个第三个 </span>-->
                                <!--<span class="percent">60%</span>-->
                                <!--</span>-->
                            <!--<span class="progress">-->
                        <!--<div class="am-progress tpl-progress am-progress-striped"><div class="am-progress-bar am-progress-bar-warning" style="width:60%"></div></div>-->
                    <!--</span>-->
                        <!--</a>-->
                    <!--</li>-->

                <!--</ul>-->
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">学生：<?php echo $AdminUser['s_username']; ?></span><span class="tpl-header-list-user-ico">
                    <!--<img src="/Public/assets/img/user01.png">-->
                </span>
                </a>
                <ul class="am-dropdown-content">
                    <!--<li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>-->
                    <li><a href="/index.php/admin/admin/apply"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="/index.php/admin/login/logout"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=login&a=logout" title="退出系统" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>

<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            功能列表
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php/admin/index" class="nav-link <?php if($active == '1'): ?>active<?php endif; ?>">-->
                        <!--<i class="am-icon-home"></i>-->
                        <!--<span>系统首页</span>-->
                    <!--</a>-->
                <!--</li>-->
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 2): ?>active<?php endif; ?>" >
                        <i class="am-icon-table"></i>
                        <span>请假管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if($active == 2): ?>style="display: block;"<?php endif; ?>>
                        <li>
                <a href="/index.php/index/leave/index">
                    <i class="am-icon-angle-right"></i>
                    <span>我的假条</span>
                    <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                </a>
                            <a href="/index.php/index/leave/apply2">
                                <i class="am-icon-angle-right"></i>
                                <span>短期假条</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>
                            <!--<a href="/index.php/index/leave/apply">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>长期假条</span>-->
                                <!--&lt;!&ndash;<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>&ndash;&gt;-->
                            <!--</a>-->


                                <a href="/index.php/index/leave/printf">
                                    <i class="am-icon-angle-right"></i>
                                    <span>模板打印</span>
                                    <!--<i class="tpl-left-nav-content tpl-badge-primary">-->
                                        <!--5-->
                                    <!--</i>-->
                                </a>

                                    <!--<a href="">-->
                                        <!--<i class="am-icon-angle-right"></i>-->
                                        <!--<span>假条列表</span>-->
                                    <!--</a>-->
                        </li>
                    </ul>
                </li>
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php/ind/student" class="nav-link tpl-left-nav-link-list <?php if($active == 3): ?>active<?php endif; ?>">-->
                        <!--<i class="am-icon-user"></i>-->
                        <!--<span>学生信息</span>-->
                        <!--&lt;!&ndash;<i class="tpl-left-nav-content tpl-badge-danger">&ndash;&gt;-->
                            <!--&lt;!&ndash;12&ndash;&gt;-->
                        <!--&lt;!&ndash;</i>&ndash;&gt;-->
                    <!--</a>-->
                <!--</li>-->


                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php/admin/myclass" class="nav-link tpl-left-nav-link-list <?php if($active == 4): ?>active<?php endif; ?>">-->
                        <!--<i class="am-icon-users"></i>-->
                        <!--<span>班级信息</span>-->

                    <!--</a>-->
                <!--</li>-->
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php/admin/grade" class="nav-link tpl-left-nav-link-list <?php if($active == 5): ?>active<?php endif; ?>">-->
                        <!--<i class="am-icon-th-list"></i>-->
                        <!--<span>级别信息</span>-->

                    <!--</a>-->
                <!--</li>-->
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php?c=student" class="nav-link tpl-left-nav-link-list">-->
                        <!--<i class="am-icon-th"></i>-->
                        <!--<span>学期信息</span>-->

                    <!--</a>-->
                <!--</li>-->

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 8): ?>active<?php endif; ?>">
                        <i class="am-icon-cog"></i>
                        <span>系统设置</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if($active == 8): ?>style="display: block;"<?php endif; ?>>
                        <li>
                            <a href="/index.php/index/index/update">
                                <i class="am-icon-angle-right"></i>
                                <span>修改密码</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>


                            <!--<a href="/index.php/admin/admin/log">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>登录日志</span>-->
                            <!--</a>-->
                        </li>
                    </ul>
                </li>
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="login.html" class="nav-link tpl-left-nav-link-list">-->
                        <!--<i class="am-icon-key"></i>-->
                        <!--<span>登录</span>-->

                    <!--</a>-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</div>


<div class="tpl-content-wrapper">
            <!--<div class="tpl-content-page-title">-->
                <!--Amaze UI 文字列表-->
            <!--</div>-->
            <!--<ol class="am-breadcrumb">-->
                <!--<li><a href="#" class="am-icon-home">首页</a></li>-->
                <!--<li><a href="#">Amaze UI CSS</a></li>-->
                <!--<li class="am-active">文字列表</li>-->
            <!--</ol>-->
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span>我的假条
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <!--<i class="am-icon-search"></i>-->
                                <!--<input type="text" class="form-control form-control-solid" placeholder="搜索..."> -->
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <!--<div class="am-u-sm-12 am-u-md-6">-->
                            <!--<div class="am-btn-toolbar">-->
                                <!--<div class="am-btn-group am-btn-group-xs">-->
                                    <!--<button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>-->
                                    <!--&lt;!&ndash;<button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>&ndash;&gt;-->
                                    <!--&lt;!&ndash;<button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>&ndash;&gt;-->
                                    <!--&lt;!&ndash;<button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>&ndash;&gt;-->

                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group" style="float: inherit" >
                                <!--<select data-am-selected="{btnSize: 'sm'}" id="s_g_id" name="s_g_id" onchange="change_class()">-->
                                    <!--<option value="0">选择级别</option>-->
                                    <!--<volist name="grade_list" id="list">-->
                                        <!--<option value="<?php echo $list['g_id']; ?>"><?php echo $list['g_name']; ?></option>-->
                                    <!--</volist>-->
                                <!--</select>-->
                            </div>

                            <!--<div class="am-form-group" style="float: inherit">-->
                                <!--<select data-am-selected="{btnSize: 'sm'}">-->
                                    <!--<option value="option1">选择学生</option>-->
                                <!--</select>-->
                            <!--</div>-->
                        </div>

                        <!--<div class="am-u-sm-12 " style="width: 25%">-->
                            <!--<div class="am-input-group am-input-group-sm">-->
                                <!--<input type="text" class="am-form-field" placeholder="请输入学号进行查找">-->
                                <!--<span class="am-input-group-btn">-->
            <!--<button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>-->
          <!--</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <!--<th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>-->
                                            <!--<th class="table-id">ID</th>-->
                                            <th class="table-title">学号</th>
                                            <th class="table-type">姓名</th>
                                            <th class="table-author am-hide-sm-only">级别</th>
                                            <th class="table-author am-hide-sm-only">班级</th>
                                            <th class="table-author am-hide-sm-only">联系方式</th>
                                            <th class="table-date am-hide-sm-only">最近请假日期</th>
                                            <th class="table-date am-hide-sm-only">类型</th>
                                            <th class="table-date am-hide-sm-only">操作</th>
                                            <th class="table-date am-hide-sm-only">状态</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($leave_list) || $leave_list instanceof \think\Collection || $leave_list instanceof \think\Paginator): $i = 0; $__LIST__ = $leave_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <!--<td><input type="checkbox"></td>-->
                                            <!--<td><?php echo $list['l_id']; ?></td>-->
                                            <td><a href="#"><?php echo $list['l_s_card']; ?></a></td>
                                            <td><?php echo $list['l_s_username']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo $list['l_s_grade']; ?>级</td>
                                            <td class="am-hide-sm-only"><?php echo $list['l_s_class']; ?>班</td>
                                            <td class="am-hide-sm-only"><?php echo $list['l_s_phone']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo $list['l_addtime']; ?></td>
                                            <?php if($list['l_status'] == 1): ?>
                                                <td class="am-hide-sm-only">长期假条</td>
                                            <?php endif; if($list['l_status'] == 2): ?>
                                                <td class="am-hide-sm-only">短期假条</td>
                                            <?php endif; ?>
                                            <td class="am-hide-sm-only"><a class="label label-sm " style="background-color: #01AAED" onclick="Look_Leave('<?php echo $list['l_id']; ?>')">查看</a></td>
                                            <td class="am-hide-sm-only">
                                                <a class="label label-sm " style="background-color: #ed6b75" id="state<?php echo $list['l_id']; ?>" >
                                                    <?php if($list['l_state'] == 2): ?>
                                                    未审核
                                                    <?php endif; if($list['l_state'] == 1): ?>
                                                    已完成
                                                    <?php endif; if($list['l_state'] == 0): ?>
                                                    审核通过
                                                    <?php endif; ?>

                                                </a>

                                                <!--<div class="am-form-group">-->
                                                    <!--<div class="am-u-sm-9">-->
                                                        <!--<div class="tpl-switch">-->
                                                            <!--<input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" id="state'<?php echo $list['l_id']; ?>'" value=""  />-->
                                                            <!--<div class="tpl-switch-btn-view" onclick="set_State('<?php echo $list['l_id']; ?>')">-->
                                                                <!--<div>-->
                                                                <!--</div>-->
                                                            <!--</div>-->
                                                        <!--</div>-->

                                                    <!--</div>-->
                                                <!--</div>-->


                                            </td>
                                        </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                    </tbody>
                                </table>
                                <!--<div class="am-cf">-->

                                    <!--<div class="am-fr">-->
                                        <!--<ul class="am-pagination tpl-pagination">-->
                                            <!--<li class="am-disabled"><a href="#">«</a></li>-->
                                            <!--<li class="am-active"><a href="#">1</a></li>-->
                                            <!--<li><a href="#">2</a></li>-->
                                            <!--<li><a href="#">3</a></li>-->
                                            <!--<li><a href="#">4</a></li>-->
                                            <!--<li><a href="#">5</a></li>-->
                                            <!--<li><a href="#">»</a></li>-->
                                        <!--</ul>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>


        </div>

    </div>


    <script src="/public/assets/js/jquery.min.js"></script>
    <script src="/public/assets/js/amazeui.min.js"></script>
    <script src="/public/assets/js/app.js"></script>
<script>


    function set_State(obj){

        $.get("/index.php/admin/leave/set_state?tip=1&l_id=" + obj);
        document.getElementById('state'+obj).style.backgroundColor = "#1E9FFF";
        document.getElementById('state'+obj).innerHTML = "已注销";
        document.getElementById('statt'+obj).innerHTML = "";
    }
    function Look_Leave(obj){
        location.href = "/index.php/index/leave/show?l_id=" + obj;
    }
</script>
</body>

</html>