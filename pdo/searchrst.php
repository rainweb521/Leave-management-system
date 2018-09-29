<?php

header('Content-type:text:text/html;charset=GB2312');
include_once'conn.php';
$cont=$_GET['cont'];
if(!empty($_GET['cont'])){
	$sql="select * from books where bookname like ?";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(1,'%'.$cont.'%');
	if($stmt->execute()){
		echo"<table width='500' border='1' cellpadding='1' cellspacing='1' bordercolor='#FFFFCC' bgcolor='#666666'>";
		echo"<tr><td height='30' align='center' bgcolor='#FFFFFF'>bookname</td><td align='center' bgcolor='#FFFFFF'>price</td><td align='center' bgcolor='#FFFFFF'>sort</td></tr>";
		while($myrow=$stmt->fetch()){
			echo"<tr><td height='22' bgcolor='#FFFFFF'>".$myrow['bookname']."</td>";
			echo"<td bgcolor='#FFFFFF'>".$myrow['price']."</td>";
			echo"<td bgcolor='#FFFFFF'>".$myrow['sort']."</td>";
			echo"</tr>";
			
		}
		echo"</table>";
    }else{
		echo "没有符合条件的数据";
	}
}
?>