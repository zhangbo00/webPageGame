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
    <script type="text/javascript" src="../js/setAbout.js"></script>
</head>
<body>
	<div class="content">
		<div style="text-align:right"><button class="btn btn-primary btn-sm" >添加</button></div>
		<ul>
			<?php 
				require ('../../public/mysql_pdo.php');
		       	$str = "SELECT * FROM members where status=1;";
		        $r=$pdo-> query ( $str );
		        foreach ($r as $key => $value) {
		        	echo "<form action=''>";
		        	echo "<li>";
		        	echo "<p class='text-primary'>id:".$value['id']."</p>";
		        	echo "<div class='img_box'><img class='img-thumbnail' src=../".$value['img']." alt='图片'></div>";
		        	echo 
		        		"<div class='text'>
		        			<input name='name' type='text' class='form-control' placeholder='请输入姓名' value=".$value['name'].">
		        			<input name='work' type='text' class='form-control' placeholder='请输入工作' value=".$value['work']."> 
		        			<textarea name='summary' class='form-control' id='' placeholder='请输入个人概要' cols='30' rows='10'>".$value['summary']."</textarea>
		        		</div>";
		        	echo 
		        		"<div class='button'>
		        			<button type='submit' class='btn btn-warning'>修改</button>
		        			<button type='submit' class='btn btn-danger'>删除</button>
		        		</div>";
		        	echo "</li>";
		        	echo "</form>";
		        }
		/*
		添加的sql: 对应字段数据
		INSERT INTO members (img,NAME,WORK,summary) VALUES("images/sy_50382172896.jpg","凌一","测试","测试员工");

		删除的sql：设置status 为 0（假） 
		UPDATE members SET STATUS = 0 WHERE id=2;
		
		修改的sql：所有字段（除id）进行更新
		UPDATE members SET NAME = '凌一',WORK='测试',summary='叼' WHERE id=4;	
		*/
		?>
		<?php
			if(isset($_GET['name'])){
				if (empty($_GET['type'])) {
					echo "del";
				}
				else {
					echo "modify";
				}			
			}
		 ?>
		</ul>
	</div>
	
</body>
	<script type="text/javascript">
		$(function () {
			$("form button").click(function () {
				console.log($(this));
				if ($(this).hasClass("btn-warning")) {
					$(this).after("<input name='type' value='1' style='display:none'>");
				};
			})			
		})
	</script>
</html>