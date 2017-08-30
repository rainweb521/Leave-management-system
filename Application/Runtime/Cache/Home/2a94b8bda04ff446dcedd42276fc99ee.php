<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>请假管理系统</title>
    <meta name="description" content="请假管理系统">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/admin.css">
    <link rel="stylesheet" href="/Public/assets/css/app.css">
    <script src="/Public/assets/js/echarts.min.js"></script>
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
                    <span class="tpl-header-list-user-nick"><?php echo ($header_name); ?></span><span class="tpl-header-list-user-ico">
                    <!--<img src="/Public/assets/img/user01.png">-->
                </span>
                </a>
                <ul class="am-dropdown-content">
                    <!--<li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>-->
                    <li><a href="/index.php?c=admin&a=apply"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="/index.php?c=login&a=logout"><span class="am-icon-power-off"></span> 退出</a></li>
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
                    <a href="/index.php?c=index" class="nav-link <?php if($active == '1'): ?>active<?php endif; ?>">
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
                    <ul class="tpl-left-nav-sub-menu">
                        <li>
                            <a href="/index.php?c=leave&a=apply">
                                <i class="am-icon-angle-right"></i>
                                <span>假条申请</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <a href="/index.php?c=leave&a=index">
                                <i class="am-icon-angle-right"></i>
                                <span>假条注销</span>
                                <!--<i class="tpl-left-nav-content tpl-badge-success">-->
                                    <!--18-->
                                <!--</i>-->
                            </a>
                                <a href="/index.php?c=leave&a=show">
                                    <i class="am-icon-angle-right"></i>
                                    <span>假条模板</span>
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
                    <a href="/index.php?c=student" class="nav-link tpl-left-nav-link-list <?php if($active == 3): ?>active<?php endif; ?>">
                        <i class="am-icon-user"></i>
                        <span>学生信息</span>
                        <!--<i class="tpl-left-nav-content tpl-badge-danger">-->
                            <!--12-->
                        <!--</i>-->
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=class" class="nav-link tpl-left-nav-link-list <?php if($active == 4): ?>active<?php endif; ?>">
                        <i class="am-icon-users"></i>
                        <span>班级信息</span>

                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="/index.php?c=grade" class="nav-link tpl-left-nav-link-list <?php if($active == 5): ?>active<?php endif; ?>">
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
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 6): ?>active<?php endif; ?>">
                        <i class="am-icon-plus-square"></i>
                        <span>添加信息</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" >
                        <li>
                            <a href="/index.php?c=student&a=apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加学生</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <a href="/index.php?c=class&a=apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加班级</span>
                            </a>
                            <a href="/index.php?c=grade&a=apply" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>添加级别</span>
                            </a>
                            <a href="/index.php?c=index&a=upload" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>批量导入</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if($active == 7): ?>active<?php endif; ?>">
                        <i class="am-icon-trash-o"></i>
                        <span>删除信息</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" >
                        <li>
                            <a href="/index.php?c=student&a=delete" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>删除学生</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <a href="/index.php?c=class&a=delete" class="">
                                <i class="am-icon-angle-right"></i>
                                <span>删除班级</span>
                            </a>
                            <a href="/index.php?c=grade&a=delete" class="">
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
                    <ul class="tpl-left-nav-sub-menu" >
                        <li>
                            <a href="/index.php?c=admin&a=apply">
                                <i class="am-icon-angle-right"></i>
                                <span>用户管理</span>
                                <!--<i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>-->
                            </a>

                            <!--<a href="/index.php?c=admin&a=apply">-->
                                <!--<i class="am-icon-angle-right"></i>-->
                                <!--<span>新增用户</span>-->
                            <!--</a>-->
                            <a href="/index.php?c=admin&a=log">
                                <i class="am-icon-angle-right"></i>
                                <span>登录日志</span>
                            </a>
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
                <h1> 草原与资源环境学院--请假管理系统</h1>

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
                            <div class="number"> <?php echo ($top["now_day"]); ?> </div>
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
                            <div class="number"> <?php echo ($top["last_day"]); ?> </div>
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
                            <div class="number"> <?php echo ($top["now_week"]); ?> </div>
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
                            <div class="number"> <?php echo ($top["now_month"]); ?> </div>
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
                            <div class="tpl-caption font-green ">
                                <i class="am-icon-cloud-download"></i>
                                <span> 请假人数统计</span>
                            </div>
                            <div class="actions">
                                <ul class="actions-btn">
                                    <li class="red-on">昨天</li>
                                    <li class="green">前天</li>
                                    <li class="blue">本周</li>
                                </ul>
                            </div>
                        </div>

                        <!--此部分数据请在 js文件夹下中的 app.js 中的 “百度图表A” 处修改数据 插件使用的是 百度echarts-->
                        <div class="tpl-echarts" id="tpl-echarts-A">

                        </div>
                    </div>
                </div>
                <div class="am-u-md-6 am-u-sm-12 row-mb">
                    <div class="tpl-portlet">
                        <div class="tpl-portlet-title">
                            <div class="tpl-caption font-red ">
                                <i class="am-icon-bar-chart"></i>
                                <span> 请假具体资料</span>
                            </div>
                            <div class="actions">
                                <ul class="actions-btn">
                                    <li class="purple-on">昨天</li>
                                    <li class="green">前天</li>
                                    <li class="dark">本周</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tpl-scrollable">
                            <div class="number-stats">
                                <div class="stat-number am-fl am-u-md-6">
                                    <div class="title am-text-right"> 请假 </div>
                                    <div class="number am-text-right am-text-warning"> 3 </div>
                                </div>
                                <div class="stat-number am-fr am-u-md-6">
                                    <div class="title"> 销假 </div>
                                    <div class="number am-text-success"> 2 </div>
                                </div>

                            </div>

                            <table class="am-table tpl-table">
                                <thead>
                                    <tr class="tpl-table-uppercase">
                                        <th>姓名</th>
                                        <th>请假时间</th>
                                        <th>销假时间</th>
                                        <th>状态</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="user-name" href="###">小张</a>
                                        </td>
                                        <td>2017-8-8</td>
                                        <td>2017-8-9</td>
                                        <td class="font-green bold">未注销</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="user-name" href="###">Alex.</a>
                                        </td>
                                        <td>2017-8-8</td>
                                        <td>2017-8-8</td>
                                        <td class="font-green bold">已注销</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="user-name" href="###">Tinker404</a>
                                        </td>
                                        <td>2017-8-8</td>
                                        <td>2017-8-8</td>
                                        <td class="font-green bold">未注销</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="am-u-md-6 am-u-sm-12 row-mb">

                    <div class="tpl-portlet">
                        <div class="tpl-portlet-title">
                            <div class="tpl-caption font-green ">
                                <span>今天任务</span>
                                <span class="caption-helper">16 件</span>
                            </div>
                            <div class="tpl-portlet-input">
                                <div class="portlet-input input-small input-inline">
                                    <div class="input-icon right">
                                        <i class="am-icon-search"></i>
                                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                                </div>
                            </div>
                        </div>
                        <div id="wrapper" class="wrapper">
                            <div id="scroller" class="scroller">
                                <ul class="tpl-task-list">


                                    <li>
                                        <div class="task-checkbox">
                                            <input type="hidden" value="1" name="test">
                                            <input type="checkbox" class="liChild" value="2" name="test"> </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> 给张三请假 </span>
                                            <span class="label label-sm label-default">已废弃</span>

                                        </div>
                                        <div class="task-config">
                                            <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                                                <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
                                                    <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                                </a>
                                                <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-check"></i> 保存 </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑 </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-trash-o"></i> 删除 </a>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="task-checkbox">
                                            <input type="hidden" value="1" name="test">
                                            <input type="checkbox" class="liChild" value="2" name="test"> </div>
                                        <div class="task-title">
                                            <span class="task-title-sp"> 李四来销假 </span>
                                            <span class="label label-sm label-success">未办理</span>
                                            <span class="task-bell">
                                            <i class="am-icon-bell-o"></i>
                                        </span>
                                        </div>
                                        <div class="task-config">
                                            <div class="am-dropdown tpl-task-list-dropdown" data-am-dropdown>
                                                <a href="###" class="am-dropdown-toggle tpl-task-list-hover " data-am-dropdown-toggle>
                                                    <i class="am-icon-cog"></i> <span class="am-icon-caret-down"></span>
                                                </a>
                                                <ul class="am-dropdown-content tpl-task-list-dropdown-ul">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-check"></i> 保存 </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 编辑 </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-trash-o"></i> 删除 </a>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-u-md-6 am-u-sm-12 row-mb">
                    <div class="tpl-portlet">
                        <div class="tpl-portlet-title">
                            <div class="tpl-caption font-green ">
                                <span>项目进度</span>
                            </div>

                        </div>

                        <div class="am-tabs tpl-index-tabs" data-am-tabs>
                            <ul class="am-tabs-nav am-nav am-nav-tabs">
                                <li class="am-active"><a href="#tab1">进行中</a></li>
                                <li><a href="#tab2">已完成</a></li>
                            </ul>

                            <div class="am-tabs-bd">
                                <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                                    <div id="wrapperA" class="wrapper">
                                        <div id="scroller" class="scroller">
                                            <ul class="tpl-task-list tpl-task-remind">

                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--12分钟前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco">-->
                        <!--<i class="am-icon-bell-o"></i>-->
                      <!--</span>-->

                                                        <!--<span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件-->
                                                            <!--<i class="am-icon-share"></i>-->
                                                        <!--</span></span>-->
                                                    <!--</div>-->

                                                <!--</li>-->
                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--36分钟前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco label-danger">-->
                        <!--<i class="am-icon-bolt"></i>-->
                      <!--</span>-->

                                                        <!--<span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>-->
                                                    <!--</div>-->

                                                <!--</li>-->

                                                <li>
                                                    <div class="cosB">
                                                        2小时前
                                                    </div>
                                                    <div class="cosA">
                                                        <span class="cosIco label-info">
                        <i class="am-icon-bullhorn"></i>
                      </span>

                                                        <span> 吃饭了</span>
                                                    </div>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel am-fade" id="tab2">
                                    <div id="wrapperB" class="wrapper">
                                        <div id="scroller" class="scroller">
                                            <ul class="tpl-task-list tpl-task-remind">
                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--12分钟前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco">-->
                        <!--<i class="am-icon-bell-o"></i>-->
                      <!--</span>-->

                                                        <!--<span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件-->
                                                            <!--<i class="am-icon-share"></i>-->
                                                        <!--</span></span>-->
                                                    <!--</div>-->

                                                <!--</li>-->
                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--36分钟前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco label-danger">-->
                        <!--<i class="am-icon-bolt"></i>-->
                      <!--</span>-->

                                                        <!--<span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>-->
                                                    <!--</div>-->

                                                <!--</li>-->

                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--2小时前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco label-info">-->
                        <!--<i class="am-icon-bullhorn"></i>-->
                      <!--</span>-->

                                                        <!--<span> 使用 flexbox 实现，只兼容 IE 10+ 及其他现代浏览器。</span>-->
                                                    <!--</div>-->

                                                <!--</li>-->
                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--1天前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco label-warning">-->
                        <!--<i class="am-icon-plus"></i>-->
                      <!--</span>-->

                                                        <!--<span> 部分用户反应在过长的 Tabs 中滚动页面时会意外触发 Tab 切换事件，用户可以选择禁用触控操作。</span>-->
                                                    <!--</div>-->

                                                <!--</li>-->
                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--12分钟前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco">-->
                        <!--<i class="am-icon-bell-o"></i>-->
                      <!--</span>-->

                                                        <!--<span> 注意：Chrome 和 Firefox 下， display: inline-block; 或 display: block; 的元素才会应用旋转动画。<span class="tpl-label-info"> 提取文件-->
                                                            <!--<i class="am-icon-share"></i>-->
                                                        <!--</span></span>-->
                                                    <!--</div>-->

                                                <!--</li>-->
                                                <!--<li>-->
                                                    <!--<div class="cosB">-->
                                                        <!--36分钟前-->
                                                    <!--</div>-->
                                                    <!--<div class="cosA">-->
                                                        <!--<span class="cosIco label-danger">-->
                        <!--<i class="am-icon-bolt"></i>-->
                      <!--</span>-->

                                                        <!--<span> FontAwesome 在绘制图标的时候不同图标宽度有差异， 添加 .am-icon-fw 将图标设置为固定的宽度，解决宽度不一致问题（v2.3 新增）。</span>-->
                                                    <!--</div>-->

                                                <!--</li>-->

                                                <li>
                                                    <div class="cosB">
                                                        2小时前
                                                    </div>
                                                    <div class="cosA">
                                                        <span class="cosIco label-info">
                        <i class="am-icon-bullhorn"></i>
                      </span>

                                                        <span> 去吃饭</span>
                                                    </div>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>

    </div>


    <script src="/Public/assets/js/jquery.min.js"></script>
    <script src="/Public/assets/js/amazeui.min.js"></script>
    <script src="/Public/assets/js/iscroll.js"></script>
    <script src="/Public/assets/js/app.js"></script>
</body>

</html>