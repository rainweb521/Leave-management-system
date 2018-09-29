<?php include('conn.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>图书信息更新</title>
</head>
<body>
<h1>图书信息更新</h1>
<?php 

if (isset($_GET['id']) && is_numeric($_GET['id']) ) {
	
	$stmt = $pdo->prepare('SELECT * FROM books WHERE id= ?');
	$stmt->bindValue(1, $_GET['id']);

	if ($stmt->execute()) { 
		$row = $stmt->fetch(); 		
		// Make the form:
		print '<form action="edit_entry.php" method="post">
		  <p>书名： <input type="text" name="bookname" size="40" maxsize="100" value="' . htmlentities($row['bookname']) . '" /></p>
		  <p>分类： <input type="text" name="sort" size="40" value="' . htmlentities($row['sort']) . '" /></p>
		  <p>价格： <input type="text" name="price" size="40" value="' . htmlentities($row['price']) . '" /></p>
		  <p>出版日期： <input type="text" name="pub_date" size="40" value="' . htmlentities($row['pub_date']) . '" /></p>
	<input type="hidden" name="id" value="' . $_GET['id'] . '" />
	<input type="submit" name="submit" value="更新" />
	</form>';

	} else { 
		print '<p style="color: red;">没有找到图书信息，因为：<br />' . $pdo->errorInfo().  '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form.

	$problem = FALSE;
	if (!empty($_POST['bookname']) && !empty($_POST['sort']) && !empty($_POST['price']) && !empty($_POST['pub_date'])) {
		$bookname = trim(strip_tags($_POST['bookname']));
		$sort =trim(strip_tags($_POST['sort']));
		$price = trim(strip_tags($_POST['price']));
		$pub_date =trim(strip_tags($_POST['pub_date']));
	} else {
		print '<p style="color: red;">图书信息不能为空</p>';
		$problem = TRUE;
	}

	if (!$problem) {

	$stmt = $pdo->prepare("UPDATE books SET bookname=?, sort=?, price=?, pub_date=? WHERE id=?");
	$stmt->bindValue(1, $bookname);
	$stmt->bindValue(2, $sort);
	$stmt->bindValue(3, $price);
	$stmt->bindValue(4, $pub_date);
	$stmt->bindValue(5, $_POST['id']);
	
		if ($stmt->execute()) {
			print '<p>图书信息已更新.</p>';
		} else {
			print '<p style="color: red;">图书信息未能更新，因为：<br />'  . $pdo->errorInfo() . '</p>';
		}
		
	} // No problem!

} else { // No ID set.
	print '<p style="color: red;">页面有错误。</p>';
} // End of main IF.

$pdo=null;

?>
<a href="view_entries.php">返回</a>
</body>
</html>