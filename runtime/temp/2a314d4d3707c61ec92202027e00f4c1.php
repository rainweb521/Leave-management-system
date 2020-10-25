<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"/Users/rain/WWW/leave/application/admin/view/index/index.html";i:1557558145;s:62:"/Users/rain/WWW/leave/application/admin/view/Index/header.html";i:1557557139;s:60:"/Users/rain/WWW/leave/application/admin/view/Index/left.html";i:1557246527;}*/ ?>
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
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/assets/css/admin.css">
    <link rel="stylesheet" href="/public/assets/css/app.css">
    <script src="/public/assets/js/echarts.min.js"></script>
</head>
<body data-type="index">

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
                <!--<a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">-->
                    <!--<span class="am-icon-bell-o"></span> 提醒-->
                    <!--&lt;!&ndash;<span class="am-badge tpl-badge-success am-round">5</span>&ndash;&gt;-->
                    <!--</span>-->
                <!--</a>-->
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
                <!--<a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">-->
                    <!--<span class="am-icon-comment-o"></span> 消息-->
                    <!--&lt;!&ndash;<span class="am-badge tpl-badge-danger am-round">9</span>&ndash;&gt;-->
                    <!--</span>-->
                <!--</a>-->
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
                <!--<a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">-->
                    <!--<span class="am-icon-calendar"></span> 进度-->
                    <!--&lt;!&ndash;<span class="am-badge tpl-badge-primary am-round">4</span>&ndash;&gt;-->
                    <!--</span>-->
                <!--</a>-->
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
                    <span class="tpl-header-list-user-nick"><?php echo $header_name; ?></span><span class="tpl-header-list-user-ico">
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
                <li class="tpl-left-nav-item">
                    <a href="/index.php/admin/index" class="nav-link <?php if($active == '1'): ?>active<?php endif; ?>">
                        <i class="am-icon-home"></i>
                        <span>系统首页</span>
                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 2): ?>active<?php endif; ?>" >
                        <i class="am-icon-table"></i>
                        <span>请假管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if($active == 2): ?>style="display: block;"<?php endif; ?>>
                        <li>
                            <a href="/index.php/admin/leave/apply2">
                                <i class="am-icon-angle-right"></i>
                                <span>短期假条</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>
                            <!--<a href="/index.php/admin/leave/apply">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>长期假条</span>-->
                                <!--&lt;!&ndash;<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>&ndash;&gt;-->
                            <!--</a>-->
                <a href="/index.php/admin/leave/audit">
                    <i class="am-icon-angle-right"></i>
                    <span>假条审核</span>
                    <!--<i class="tpl-left-nav-content tpl-badge-success">-->
                    <!--18-->
                    <!--</i>-->
                </a>
                            <a href="/index.php/admin/leave/index">
                                <i class="am-icon-angle-right"></i>
                                <span>假条注销</span>
                                <!--<i class="tpl-left-nav-content tpl-badge-success">-->
                                    <!--18-->
                                <!--</i>-->
                            </a>
                                <a href="/index.php/admin/leave/printf">
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
                <li class="tpl-left-nav-item">
                    <a href="/index.php/admin/student" class="nav-link tpl-left-nav-link-list <?php if($active == 3): ?>active<?php endif; ?>">
                        <i class="am-icon-user"></i>
                        <span>学生信息</span>
                        <!--<i class="tpl-left-nav-content tpl-badge-danger">-->
                            <!--12-->
                        <!--</i>-->
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="/index.php/admin/myclass" class="nav-link tpl-left-nav-link-list <?php if($active == 4): ?>active<?php endif; ?>">
                        <i class="am-icon-users"></i>
                        <span>班级信息</span>

                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="/index.php/admin/grade" class="nav-link tpl-left-nav-link-list <?php if($active == 5): ?>active<?php endif; ?>">
                        <i class="am-icon-th-list"></i>
                        <span>级别信息</span>

                    </a>
                </li>
                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php?c=student" class="nav-link tpl-left-nav-link-list">-->
                        <!--<i class="am-icon-th"></i>-->
                        <!--<span>学期信息</span>-->

                    <!--</a>-->
                <!--</li>-->
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 6): ?>active<?php endif; ?>" >
                        <i class="am-icon-plus-square"></i>
                        <span>添加信息</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if($active == 6): ?>style="display: block;"<?php endif; ?> >
                        <li>
                            <a href="/index.php/admin/student/apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加学生</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <a href="/index.php/admin/myclass/apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加班级</span>
                            </a>
                            <a href="/index.php/admin/grade/apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加级别</span>
                            </a>
                            <!--<a href="/index.php/admin/index/upload" class="">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>批量导入</span>-->
                            <!--</a>-->
                        </li>
                    </ul>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 7): ?>active<?php endif; ?>">
                        <i class="am-icon-trash-o"></i>
                        <span>删除信息</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if($active == 7): ?>style="display: block;"<?php endif; ?>>
                        <li>
                            <a href="/index.php/admin/student/delete" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>删除学生</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <a href="/index.php/admin/myclass/delete" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>删除班级</span>
                            </a>
                            <a href="/index.php/admin/grade/delete" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>删除级别</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 8): ?>active<?php endif; ?>">
                        <i class="am-icon-cog"></i>
                        <span>系统设置</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if($active == 8): ?>style="display: block;"<?php endif; ?>>
                        <li>
                            <a href="/index.php/admin/admin/apply">
                                <i class="am-icon-angle-right"></i>
                                <span>用户管理</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <a href="/index.php/admin/admin/title">
                                <i class="am-icon-angle-right"></i>
                                <span>网站名称</span>
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
            <div class="tpl-content-page-title" align="center" >
                <h1> <?php echo $title; ?></h1>

            </div>
            <br>
            <!--<ol class="am-breadcrumb">-->
                <!--<li><a href="#" class="am-icon-home">首页</a></li>-->
                <!--<li><a href="#">分类</a></li>-->
                <!--<li class="am-active">内容</li>-->
            <!--</ol>-->
            <!--<div class="tpl-content-scope">-->
                <!--<div class="note note-info">-->
                    <!--<h3>Amaze UI 为移动而生-->
                        <!--<span class="close" data-close="note"></span>-->
                    <!--</h3>-->
                    <!--<p> Amaze UI 含近 20 个 CSS 组件、20 余 JS 组件，更有多个包含不同主题的 Web 组件，可快速构建界面出色、体验优秀的跨屏页面，大幅提升开发效率。</p>-->
                    <!--<p><span class="label label-danger">提示:</span> Amaze UI 关注中文排版，根据用户代理调整字体，实现更好的中文排版效果。-->
                    <!--</p>-->
                <!--</div>-->
            <!--</div>-->

            <div class="row">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="am-icon-comments-o"></i>
                        </div>
                        <div class="details">
                            <div class="number"> <?php echo $top['now_day']; ?> </div>
                            <div class="desc"> 今日请假人数 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="am-icon-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number"> <?php echo $top['last_day']; ?> </div>
                            <div class="desc"> 昨日请假人数</div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="am-icon-apple"></i>
                        </div>
                        <div class="details">
                            <div class="number"> <?php echo $top['now_week']; ?> </div>
                            <div class="desc"> 本周请假人数 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="am-icon-android"></i>
                        </div>
                        <div class="details">
                            <div class="number"> <?php echo $top['now_month']; ?> </div>
                            <div class="desc"> 本月请假人数 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>



            </div>

            <div class="row">

                <div class="am-u-md-6 am-u-sm-12 row-mb">
                    <div class="tpl-portlet">
                        <div class="tpl-portlet-title">
                            <div class="tpl-caption font-red ">
                                <i class="am-icon-bar-chart"></i>
                                <span> 请假具体资料</span>
                            </div>
                            <div class="actions">
                                <ul class="actions-btn">
                                    <!--<li class="purple-on">昨天</li>-->
                                    <!--<li class="green">前天</li>-->
                                    <!--<li class="dark">本周</li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="tpl-scrollable">
                            <div class="number-stats">
                                <div class="stat-number am-fl am-u-md-6">
                                    <!--<div class="title am-text-right"> 请假 </div>-->
                                    <!--<div class="number am-text-right am-text-warning"> 3 </div>-->
                                </div>
                                <div class="stat-number am-fr am-u-md-6">
                                    <!--<div class="title"> 销假 </div>-->
                                    <!--<div class="number am-text-success"> 2 </div>-->
                                </div>

                            </div>

                            <table class="am-table tpl-table">
                                <thead>
                                    <tr class="tpl-table-uppercase">
                                        <th>姓名</th>
                                        <th>班级</th>
                                        <th>年级</th>
                                        <th>时间</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($leave_list) || $leave_list instanceof \think\Collection || $leave_list instanceof \think\Paginator): $i = 0; $__LIST__ = $leave_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td>
                                            <a class="user-name" href="###"><?php echo $list['l_s_username']; ?></a>
                                        </td>
                                        <td><?php echo $list['l_s_class']; ?></td>
                                        <td><?php echo $list['l_s_grade']; ?></td>
                                        <td class="font-green bold"><?php echo $list['l_addtime']; ?></td>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>

    </div>


    <script src="/public/assets/js/jquery.min.js"></script>
    <script src="/public/assets/js/amazeui.min.js"></script>
    <script src="/public/assets/js/iscroll.js"></script>
    <script src="/public/assets/js/app.js"></script>
</body>

</html>