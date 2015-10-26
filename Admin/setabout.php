<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改关于</title>
</head>
<body>
<h1>连接数据库</h1>
	<?php 
		require '../public/mysql_pdo.php';	//连接数据库
		$query="SELECT * FROM about";
		try{
		  /**执行查询语句**/
		  $pd = $dbh->query($query);
		  echo "一共读取".$pd->rowCount()."记录";
		  /**遍历查询结果输出信息**/
		  foreach ($pd as $row) {
		   echo $row['id']."\t";
		   echo $row['title']."\n";
		  }
		 }catch(PDOException $e){
		  echo $e->getMessage();
		 }
	 ?>
</body>
</html>