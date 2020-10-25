<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"/Users/rain/WWW/leave/application/manage/view/index/index.html";i:1557242618;s:63:"/Users/rain/WWW/leave/application/manage/view/Index/header.html";i:1557235963;s:61:"/Users/rain/WWW/leave/application/manage/view/Index/left.html";i:1557241319;}*/ ?>
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
    <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/assets/css/admin.css">
    <link rel="stylesheet" href="/Public/assets/css/app.css">
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


            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>

            </li>
            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>

            </li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick"><?php echo $header_name; ?></span><span class="tpl-header-list-user-ico">
                    <!--<img src="/Public/assets/img/user01.png">-->
                </span>
                </a>
                <ul class="am-dropdown-content">
                    <!--<li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>-->
                    <li><a href="/index.php/manage/login/logout"><span class="am-icon-power-off"></span> 退出</a></li>
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
                    <a href="/index.php/manage/index" class="nav-link tpl-left-nav-link-list <?php if($active == 3): ?>active<?php endif; ?>">
                        <i class="am-icon-user"></i>
                        <span>教师列表</span>
                        <!--<i class="tpl-left-nav-content tpl-badge-danger">-->
                            <!--12-->
                        <!--</i>-->
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="/index.php/manage/index/apply" class="nav-link tpl-left-nav-link-list <?php if($active == 4): ?>active<?php endif; ?>">
                        <i class="am-icon-users"></i>
                        <span>添加教师</span>

                    </a>
                </li>

                <!--<li class="tpl-left-nav-item">-->
                    <!--<a href="/index.php?c=student" class="nav-link tpl-left-nav-link-list">-->
                        <!--<i class="am-icon-th"></i>-->
                        <!--<span>学期信息</span>-->

                    <!--</a>-->
                <!--</li>-->


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
                        <span class="am-icon-code"></span> 教师信息
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <!--<i class="am-icon-search"></i>-->
                                <input type="hidden" class="form-control form-control-solid" placeholder="搜索..."> </div>
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

                        <!--<div class="am-u-sm-12 am-u-md-3">-->
                            <!--<div class="am-form-group" style="float: inherit" >-->
                                <!--<select data-am-selected="{btnSize: 'sm'}">-->
                                    <!--<option value="option1">所有类别</option>-->
                                    <!--<option value="option2">IT业界</option>-->
                                    <!--<option value="option3">数码产品</option>-->
                                    <!--<option value="option3">笔记本电脑</option>-->
                                    <!--<option value="option3">平板电脑</option>-->
                                    <!--<option value="option3">只能手机</option>-->
                                    <!--<option value="option3">超极本</option>-->
                                <!--</select>-->

                            <!--</div>-->
                            <!--<div class="am-form-group" style="float: inherit">-->
                                <!--<select data-am-selected="{btnSize: 'sm'}">-->
                                    <!--<option value="option1">所有类别</option>-->
                                    <!--<option value="option2">IT业界</option>-->
                                    <!--<option value="option3">数码产品</option>-->
                                    <!--<option value="option3">笔记本电脑</option>-->
                                    <!--<option value="option3">平板电脑</option>-->
                                    <!--<option value="option3">只能手机</option>-->
                                    <!--<option value="option3">超极本</option>-->
                                <!--</select>-->

                            <!--</div>-->
                            <!--<div class="am-form-group" style="float: inherit">-->
                                <!--<select data-am-selected="{btnSize: 'sm'}">-->
                                    <!--<option value="option1">所有类别</option>-->
                                    <!--<option value="option2">IT业界</option>-->
                                    <!--<option value="option3">数码产品</option>-->
                                    <!--<option value="option3">笔记本电脑</option>-->
                                    <!--<option value="option3">平板电脑</option>-->
                                    <!--<option value="option3">只能手机</option>-->
                                    <!--<option value="option3">超极本</option>-->
                                <!--</select>-->

                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="am-u-sm-12 " style="width: 25%">-->
                            <!--<div class="am-input-group am-input-group-sm">-->
                                <!--<input type="text" class="am-form-field">-->
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
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">姓名</th>
                                            <th class="table-type">邮箱</th>
                                            <th class="table-author am-hide-sm-only">手机号</th>
                                            <!--<th class="table-author am-hide-sm-only">添加日期</th>-->
                                            <!--<th class="table-author am-hide-sm-only">本月请假</th>-->
                                            <!--<th class="table-date am-hide-sm-only">最近请假日期</th>-->
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$line): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><?php echo $line['a_id']; ?></td>
                                            <td><a href="#"><?php echo $line['a_username']; ?></a></td>
                                            <td><?php echo $line['a_email']; ?></td>
                                            <td class="am-hide-sm-only"><?php echo $line['a_phone']; ?></td>
                                            <!--<td class="am-hide-sm-only"><?php echo $line['a_email']; ?></td>-->
                                            <!--<td class="am-hide-sm-only"><?php echo $line['a_email']; ?></td>-->
                                            <!--<td class="am-hide-sm-only">2014-9-4 7:28:47</td>-->
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary" type="button" onclick="location.href='/index.php/manage/index/apply?a_id=<?php echo $line['a_id']; ?>';"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <!--<button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>-->
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" type="button" onclick="location.href='/index.php/manage/index/delete?a_id=<?php echo $line['a_id']; ?>';"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
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
                    <br><br><br><br><br><br><br>
                </div>
                <div class="tpl-alert"></div>
            </div>


        </div>

    </div>


    <script src="/Public/assets/js/jquery.min.js"></script>
    <script src="/Public/assets/js/amazeui.min.js"></script>
    <script src="/Public/assets/js/app.js"></script>
</body>

</html>