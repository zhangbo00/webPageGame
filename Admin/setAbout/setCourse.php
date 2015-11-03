<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改历程</title>
	<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../../public/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
    <!--自我独有引用部分-->
    <link rel="stylesheet" href="../css/setAbout.css">
    <link rel="stylesheet" href="../js/setAbout.js">
</head>
<body>
<h1>连接数据库</h1>
	<?php 
/*		require ('../public/mysql_pdo.php');	//连接数据库
		$str = "select * from about;";
	    foreach ( $pdo-> query ( $str ) as  $row ) {
        print  $row [ 'id' ] .  " : " ;
        echo $row['title']."<br>";*/
        $about_course_content=array(
        	'2013'=>array(
	        	array('time'=>'5月','content'=>'站长之家专栏改版上线'),
	        	array('time'=>'3月','content'=>'站长之家创业栏目上线')
          	),
        	'2012'=>array(
            	array('time'=>'9月','content'=>'站长之家北京分公司成立'),
            	array('time'=>'3月','content'=>'站长之家创业栏目上线')
          	),
        	'2011'=>array(
	            array('time'=>'3月13日','content'=>'建站大师（www.313.com）上线'),
	            array('time'=>'3月','content'=>'站长之家创业栏目上线')
        	)
        );
	?>

	<div class="content">
		<table>
			<td>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
			</td>
			<td>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
			</td>
		</table>
	</div>
</body>
</html>