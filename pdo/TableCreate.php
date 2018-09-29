<?php include('conn.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>创建数据表</title>
</head>
<body>
<h1>创建数据表Books</h1>

<?php
$stmt = $pdo->prepare('use bookstore');
	
if ($stmt->execute()) { 
		print "OK";
} else{
	print "ERROR".$pdo->errorInfo();
}

$stmt = $pdo->prepare('CREATE TABLE books (
						id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
						bookname VARCHAR(100) NOT NULL,
						price SMALLINT NOT NULL,
						sort VARCHAR(20) NOT NULL,
						pub_date DATE NOT NULL
)');

if ($stmt->execute()) { 
		print "OK";
} else{
	print "ERROR".$pdo->errorInfo();
}

$pdo=null; 

?>
</body>
</html>