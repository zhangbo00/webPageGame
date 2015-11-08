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
    <link rel="stylesheet" href="../css/index.css">
	<!-- 时间控件 -->
	<link rel="stylesheet" href="datepicker/css/datepicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="datepicker/css/layout.css" />
	<script type="text/javascript" src="datepicker/js/jquery.js"></script>
	<script type="text/javascript" src="datepicker/js/datepicker.js"></script>
    <script type="text/javascript" src="datepicker/js/eye.js"></script>
    <script type="text/javascript" src="datepicker/js/utils.js"></script>
    <script type="text/javascript" src="datepicker/js/layout.js?ver=1.0.2"></script>
	
</head>
<body>
	<div class="content">
	<form action="uqdateCourse.php">
		<hr style="height:5px;border:none;border-top:5px ridge green;" />
		<h1 id="setCourse">修改</h1>

		<label for="" class="col-sm-2 control-label">编号</label>
		<select name="id" id="course_id_choose" class="form-control">
			<option value=""></option>
			<?php
			//修改的编号获取
			require '../../public/mysql_pdo.php';
			$str = "SELECT * FROM course WHERE STATUS = 1 ORDER BY id;";
			$r=$pdo-> query ( $str );
			foreach ($r as $key => $value) {
				echo "<option value=".$value['id'].">".$value['id']."</option>";
			}
			?>
		</select>
		<label for="" style="margin:20px auto;" class="col-sm-2 control-label">时间</label>
		<script type="text/javascript" src="date/date.js"></script>
		<div style="width:220px;margin:20px auto;">
			请选择日期：
			<input name="date" type="text" value="" size="14" readonly onClick="showcalendar(event,this);" onFocus="showcalendar(event, this);if(this.value=='0000-00-00')this.value=''">
		</div>

		<label for="" class="col-sm-2 control-label">内容</label>
		<textarea name="content" id="" cols="30" rows="10" class="form-control">内容</textarea>
		
		<p style="text-align: right;line-height: 80px;">
			<button class="btn btn-primary">确定</button>
		</p>
	</form>
	</div> 
</body>
</html>

<?php
/*	echo "<meta charset='UTF-8'>";
	require ('../../public/mysql_pdo.php');
   	$str = "UPDATE course SET DATE=".time($_GET['date'])." , content='".$_GET['content']."' WHERE id=".$_GET['id'].";";
    $r=$pdo-> query ( $str );
	if($r)	echo "修改成功<br>";
	else 	echo "修改失败<br>";
	echo '<a href="setCourse.php">返回</a>';*/

?>