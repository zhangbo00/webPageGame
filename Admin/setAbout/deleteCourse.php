<?php 
	echo "<meta charset='UTF-8'>";
	require ('../../public/mysql_pdo.php');
	foreach ($_GET['choose'] as $key => $value) {
		$str="UPDATE course SET STATUS = 0 WHERE id=$value;";
	    $r=$pdo-> query ( $str );
		if($r)	echo "修改".$value."成功<br>";
		else 	echo "修改".$value."失败<br>";
	}
	echo '<a href="setCourse.php">返回</a>';

/*   	$str = "UPDATE course SET DATE=".time($_GET['date'])." , content='".$_GET['content']."' WHERE id=".$_GET['id'].";";
    $r=$pdo-> query ( $str );
	if($r)	echo "修改成功<br>";
	else 	echo "修改失败<br>";
	echo $_GET['date']."************".$_GET['id'];*/

/*	require ('../../public/mysql_pdo.php');
   	$str = "UPDATE course SET DATE=".time($_GET['date'])." , content='".$_GET['content']."' WHERE id=".$_GET['id'].";";
    $r=$pdo-> query ( $str );
	if($r)	echo "修改成功<br>";
	else 	echo "修改失败<br>";
	echo $_GET['date']."************".$_GET['id'];*/
 ?>