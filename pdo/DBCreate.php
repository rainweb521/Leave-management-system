<?php include('conn.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>创建数据库</title>
</head>
<body>
<h1>创建数据库Bookstore</h1>

<?php
$stmt = $pdo->prepare('Create Database bookstore');
	
if ($stmt->execute()) { 
		print "OK";
} else{
	print "ERROR".$pdo->errorInfo();
}

$pdo=null; 

?>
</body>
</html>