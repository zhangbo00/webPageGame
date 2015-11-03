<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改成员</title>
	<!--共有引用部分-->
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
        echo $row['title']."<br>";
    }*/
	?>
	<div class="content">
		<div style="text-align:right"><button class="btn btn-primary btn-sm" >添加</button></div>
		<ul>
			<?php 
			$about_Members=array(
				array('img'=>'../images/sy_54283287295.jpg','name'=>'姓名','work'=>'工作','summary'=>'概要'),
				array('img'=>'../images/sy_54283287295.jpg','name'=>'姓名','work'=>'工作','summary'=>'概要'),
				array('img'=>'../images/sy_54283287295.jpg','name'=>'姓名','work'=>'工作','summary'=>'概要')
			);
			foreach ($about_Members as $key => $value) {
				echo "<li>";
				echo "<p class='text-primary'>id:".$key."</p>";
				echo "<div class='img_box'><img class='img-thumbnail' src=".$value['img']." alt='图片'></div>";
				echo 
					"<div class='text'>
						<input type='text' class='form-control' name='name' placeholder='请输入姓名' value=".$value['name'].">
						<input type='text' class='form-control' name='work' placeholder='请输入工作' value=".$value['work']."> 
						<textarea name='summary' class='form-control' id='' placeholder='请输入个人概要' cols='30' rows='10'>".$value['summary']."</textarea>
					</div>";
				echo 
					"<div class='button'>
						<button class='btn btn-warning'>修改</button>
						<button class='btn btn-danger'>删除</button>
					</div>";
				echo "</li>";
			}
			
		 ?>
		</ul>
		
		<!-- ***修改成员信息  ***HTML代码
		<p>id:0</p>
		<div class="content_line">
			<div class="img_box"><img src="../images/sy_54283287295.jpg" alt="图片"></div>
			<div class="text">
				<p><input type="text" placeholder="请输入姓名" value="姓名"></p>
				<p><input type="text" placeholder="请输入工作" value="工作"></p>
				<textarea name="" id="" placeholder="请输入个人概要" cols="30" rows="10">概要</textarea>
			</div>
			<p class="button">
				<button>修改</button>
				<button>删除</button>
			</p>
		</div>
		-->
	</div>
</body>
</html>