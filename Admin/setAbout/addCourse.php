<?php
	echo "<meta charset='UTF-8'>";
	require ('../../public/mysql_pdo.php');
   	$str = "INSERT INTO course (date,content) VALUES(".time($_GET['date']).",'".$_GET['content']."');";
    $r=$pdo-> query ( $str );
	if($r)	echo "添加成功<br>";
	else 	echo "失败<br>";
	echo $_GET['date']."************".$_GET['content'];
?>