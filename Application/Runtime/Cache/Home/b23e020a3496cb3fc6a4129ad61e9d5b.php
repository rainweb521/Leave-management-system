<?php if (!defined('THINK_PATH')) exit();?><!Doctype html><html xmlns=http://www.w3.org/1999/xhtml>
<html>
<head>
    <meta http-equiv=Content-Type content="text/html;charset=utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
    <meta content=always name=referrer>
    <script language="javascript" type="text/javascript" src="http://www.php100.com/statics/js//php100/js/jquery.js"></script>
    <title>excel</title>

<body>
<form id="addform" action="<?php echo U('Index/upload');?>" method="post" enctype="multipart/form-data">

    <div class="control-group">
        <label>Excel表格：</label>
        <input type="file" name="excelData" value=""  datatype="*4-50"  nullmsg="请填写产品！" errormsg="不能少于4个字符大于50个汉字"/>

    </div>
    <div class="control-group">
        <img style="display:none;" src="images/loading.gif" />
        <input type="submit" class="btn btn-primary Sub" value="导入" />
    </div>
</form>
</body>
</html>