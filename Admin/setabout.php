<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改关于</title>
</head>
<body>
<h1>连接数据库</h1>
	<?php 
		require ('../public/mysql_pdo.php');	//连接数据库
		$str = "select * from about;";
	    foreach ( $pdo-> query ( $str ) as  $row ) {
        print  $row [ 'id' ] .  " : " ;
        echo $row['title']."<br>";
    }

	?>
</body>
</html>