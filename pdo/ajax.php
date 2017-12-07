<html>
<head>
<script src="test.js"></script> 
<meta charset="utf-8">
</head>

<body>
<form id="searchform" name="searchfrom" method="get" action="#"> 
 <tr>
 <td height="40">&nbsp;</td>
 <td align="'center">请输入关键字：&nbsp;
 
<input name="searchtxt" type="text" id="searchtxt" size="30"/>
<input id="s_search" name="s_search" type="button" value="查询" onClick="return showsimple()"/>
</td>
</tr>

</form>
<tr>
<td align="center" valign="top"><div id="webpage"></div></td>
</tr>
<a href="view_entries.php">返回</a>
</body>
</html>