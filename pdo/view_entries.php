<?php include('conn.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>View My Blog</title>
<style type="text/css">
</style>
</head>
<body>
<h1>My Blog</h1>
<p><a href="add_entry.php">添加</a></p>
<p><a href="ajax.php">搜索</a></p>
<?php
$pagesize =5;//每页记录数
$sqlstr='SELECT count(id) as num FROM books'; //统计记录个数的sql语句
$stmt = $pdo->prepare($sqlstr);
if ($stmt->execute()) { 
	$row = $stmt->fetch();
	$totalNum = $row['num'];
} 
$pagecount = ceil($totalNum/$pagesize);//总页数
$page=(!isset($_GET['page']))? 1 : $_GET['page'];//当前页
$page=($page<=$pagecount)?$page:$pagecount;//当前页
$f_pageNum = $pagesize *($page-1);//当前页第一条记录
$sqlstr1 = 'SELECT * FROM books order by id desc limit '.$f_pageNum.','.$pagesize;

$stmt = $pdo->prepare($sqlstr1);	
if ($totalNum!=0&&$stmt->execute()) { 
	while ($row = $stmt->fetch()) {
		print "<p><h3>{$row['bookname']}</h3>
		{$row['sort']}&nbsp;&nbsp;&nbsp;{$row['price']}&nbsp;&nbsp;&nbsp;{$row['pub_date']}<br />
		<a href=\"edit_entry.php?id={$row['id']}\">编辑</a>
		<a href=\"delete_entry.php?id={$row['id']}\">删除</a>
		</p><hr />\n";
	}

} 
else print 'no data';
print '<div>共'.$totalNum.'本图书&nbsp;&nbsp;&nbsp;第'.$page.'页/共'.$pagecount.'&nbsp;&nbsp;&nbsp;******';
for($i=1;$i<=$pagecount;$i++){
	if($i!=$page)print "<a href=view_entries.php?page=$i style=\"display:inline-block\">&nbsp;$i&nbsp;</a>&nbsp;";
	else print '&nbsp;'.$i .'&nbsp;&nbsp;';
}
print '******</div>';

$pdo=null; 

?>
</body>
</html>