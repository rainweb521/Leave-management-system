<?php include('conn.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>图书录入</title>
</head>
<body>
<h1>图书录入</h1>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

	$problem = FALSE;
	if (!empty($_POST['bookname']) && !empty($_POST['sort']) && !empty($_POST['price']) && !empty($_POST['pub_date'])) {
		$bookname = trim(strip_tags($_POST['bookname']));
		$sort =trim(strip_tags($_POST['sort']));
		$price = trim(strip_tags($_POST['price']));
		$pub_date =trim(strip_tags($_POST['pub_date']));
	} else {
		print '<p style="color: red;">请把图书信息填写完整</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		$stmt = $pdo->prepare("INSERT INTO books (id, bookname, price, sort, pub_date)values(0,?,?,?,?)");
			$stmt->bindValue(1, $bookname);
			$stmt->bindValue(2, $price);
			$stmt->bindValue(3, $sort);
			$stmt->bindValue(4, $pub_date);
			print  ($stmt->execute()) ? "OK" : "ERROR".$pdo->errorInfo();
	}
$pdo=null; 
	
} 

?>
<a href="view_entries.php">返回</a>

<form action="add_entry.php" method="post">
  <p>书名： <input type="text" name="bookname" size="40" maxsize="100" /></p>
  <p>分类： <input type="text" name="sort" size="40"  /></p>
  <p>价格： <input type="text" name="price" size="40"  /></p>
  <p>出版日期： <input type="text" name="pub_date" size="40" /></p>
	<input type="submit" name="submit" value="添加" />
</form>
</body>
</html>