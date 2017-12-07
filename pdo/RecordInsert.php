<?php include('conn.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>创建数据</title>
</head>
<body>
<h1>创建数据</h1>

<?php
$stmt = $pdo->prepare('use Bookstore');
	
print ($stmt->execute()) ?"OK": "ERROR".$pdo->errorInfo();
$bookname="";
$price=0;

$arrb = array(
	array('PHP编程宝典',56,'PHP'),
	array('PHP自学手册',49,'PHP'),
	array('PHP范例宝典',78,'PHP'),
	array('php编程宝典',79,'PHP'),
);

$sort = '中外名著';
for($i=1;$i<50;$i++){
	$bookname='外国文学短篇选' . $i;
	$price = 20 + rand()%20;
	$arrb[] = array($bookname,$price,$sort);
}

$stmt = $pdo->prepare('Insert into books(id,bookname,price,sort,pub_date) values(0,?,?,?,CURDATE())');


foreach($arrb as  $key=>$book){
	list($bookname,$price,$sort)=$book;
	//echo $bookname,$price,$sort,'<br>';
	$stmt->bindValue(1,$bookname);
	$stmt->bindValue(2,$price);
	$stmt->bindValue(3,$sort);
	$stmt->execute();
}
var_dump($arrb);

$pdo=null; 

?>
</body>
</html>