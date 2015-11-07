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
	<?php
		require ('../../public/mysql_pdo.php');
		if(isset($_GET['name'])){
			if (empty($_GET['type'])) {		//del
				$str = "UPDATE members SET STATUS = 0 WHERE id=$_GET[id];";
				$r=$pdo-> query ( $str );
				if($r){
					echo "删除".$_GET['id']."成功";
				}else{
					echo "删除".$_GET['id']."失败";
				}
			}
			else if($_GET['type']== 1){							//modify
				$str = "UPDATE members SET work = '修改测试' WHERE id=$_GET[id];";
				$r=$pdo-> query ( $str );
				if($r){
					echo "修改".$_GET['id']."成功";
				}else{
					echo "修改".$_GET['id']."失败";
				}
			}else if($_GET['type']== 2){							//modify
				$str = "INSERT INTO members (img,NAME,WORK,summary) VALUES('images/sy_50382172896.jpg','".$_GET['name']."','".$_GET['work']."','".$_GET['summary']."');";
				$r=$pdo-> query ( $str );
				if($r){
					echo "添加".$_GET['name']."成功";
				}else{
					echo "添加".$_GET['name']."失败";
				}
			}			
		}
	 ?>
	<div class="content">
		<div style="text-align:right">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					 <a id="modal-637509" href="#modal-container-637509" role="button" class="btn btn-primary btn-sm" data-toggle="modal">添加</a>
					
					<div class="modal fade" id="modal-container-637509" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title" id="myModalLabel">
										添加成员
									</h4>
								</div>
								<form action=''>
								<div class="modal-body">
									<input name='id' type='text' style='display:none;' value="">
									<div class='img_box'><img class='img-thumbnail' src=../images/sy_50382172896.jpg alt='图片'></div>
									<div class='text'>
											<input name='name' type='text' class='form-control' placeholder='请输入姓名' value="">
											<input name='work' type='text' class='form-control' placeholder='请输入工作' value=""> 
											<textarea name='summary' class='form-control' id='' placeholder='请输入个人概要' cols='30' rows='10'></textarea>
									</div>
								
								</div>
								<div class="modal-footer">
									 <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> <button type="submit" class="btn btn-primary">添加</button>
								</div>
								</form>
							</div>
							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		</div>
		<ul>
			<?php 
				
		       	$str = "SELECT * FROM members where status=1;";
		        $r=$pdo-> query ( $str );
		        foreach ($r as $key => $value) {
		        	echo "<form action=''>";
		        	echo "<li>";
		        	echo "<input name='id' type='text' style='display:none;' value=".$value['id'].">";
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
		
		</ul>
	</div>
	
</body>
	<script type="text/javascript">
		$(function () {
			$("form button").click(function () {
				console.log($(this));
				if ($(this).hasClass("btn-warning")) {
					$(this).after("<input name='type' value='1' style='display:none'>");
				}else if ($(this).hasClass("btn-primary")) {
					$(this).after("<input name='type' value='2' style='display:none'>");
				};
			})			
		})
	</script>
</html>