<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加成功</title>
</head>
<body>
	<?php
		echo "<meta charset='UTF-8'>";
		require ('../../public/mysql_pdo.php');
	   	$str = "INSERT INTO course (date,content) VALUES(".time($_GET['date']).",'".$_GET['content']."');";
	    $r=$pdo-> query ( $str );
		if($r){
			echo "添加成功";
		}
		else{
			echo "添加失败";
		}

		echo '<a href="setCourse.php">返回</a>';
	?>

</body>
</html>
