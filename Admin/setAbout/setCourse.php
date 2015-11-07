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
		<form action="deleteCourse.php">
		<table class="course table table-bordered">
			<thead>
				<td>年份</td>
				<td>编号</td>
				<td>时间</td>
				<td>内容</td>
				<td>是否选中</td>
			</thead>
			<?php 
		        require ('../../public/mysql_pdo.php');
		       	$str = "SELECT * FROM course WHERE STATUS = 1 ORDER BY DATE;";
		        $r=$pdo-> query ( $str );
		        $old = 0;
		        foreach ($r as $key => $value) {
		        	$year = (int)date('Y',$value['date']);
		            $time = date('n月j日',$value['date']);
		        	echo 
			        	"<tr>
			        	<td>".$year."</td>
			        	<td>".$value['id']."</td>
			        	<td>".$time."</td>
			        	<td>".$value['content']."</td>
			        	<td><input name='choose[]' type='checkbox' value=$value[id]></td>
			        	</tr>";
		        }
		        /*
		        添加的sql: 对应字段数据
				INSERT INTO course (date,content) VALUES(1322222222,"测试添加);

				删除的sql：设置status 为 0（假） 
				UPDATE course SET STATUS = 0 WHERE id=2;
				
				查询指定id：状态为1（真）
				SELECT * FROM course WHERE id=9 AND STATUS=1;

				修改的sql：所有字段（除id）进行更新
				UPDATE course SET DATE=1333333333 , content='测试' WHERE id = 9;	
		        */
			?>
		</table>
		<p style="text-align: right;">
			<a herf='#addCourse' class="btn btn-primary" onclick="javascript:document.getElementById('addCourse').scrollIntoView()">添加</a>
			<!-- V<li class="" onclick="javascript:document.getElementById('here').scrollIntoView()"></li>  -->
			<a class="btn btn-success" onclick="javascript:document.getElementById('setCourse').scrollIntoView()">修改</a>
			<button class="btn btn-warning">删除</button>
		</p>
		</form>
	</div>
	<div class="content">
	<form action="addCourse.php">
		<hr style="height:5px;border:none;border-top:5px ridge green;" />
		<h1 id="addCourse" name="addCourse">添加</h1>
		<label for="" class="col-sm-2 control-label">时间</label>
		<input name="date" style="display:inline-block;width:100%" class="inputDate form-control" id="inputDate" value="11/05/2015" />
		<label id="closeOnSelect" style="display:none"><input type="checkbox" checked="checked"/> Close on selection</label>
		<label for="" class="col-sm-2 control-label">内容</label>
		<textarea name="content" id="" cols="30" rows="10" class="form-control">内容</textarea>
		<p style="text-align: right;line-height: 80px;">
			<button class="btn btn-primary">确定</button>
		</p>
	</form>
	</div>  
	<div class="content">
	<form action="uqdateCourse.php">
		<hr style="height:5px;border:none;border-top:5px ridge green;" />
		<h1 id="setCourse">修改</h1>

		<label for="" class="col-sm-2 control-label">编号</label>
		<select name="id" id="" class="form-control">
			<option value=""></option>
			<?php
			//修改的编号获取
			$str = "SELECT * FROM course WHERE STATUS = 1 ORDER BY id;";
			$r=$pdo-> query ( $str );
			foreach ($r as $key => $value) {
				echo "<option value=".$value['id'].">".$value['id']."</option>";
			}
			?>
		</select>
		<label for="" class="col-sm-2 control-label">时间</label>
		<label for="" class="col-sm-2 control-label">内容</label>
		<textarea name="content" id="" cols="30" rows="10" class="form-control">内容</textarea>
		<p style="text-align: right;line-height: 80px;">
			<button class="btn btn-primary">确定</button>
		</p>
	</form>
	</div> 
</body>
</html>