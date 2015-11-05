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
	<div class="content">
		<table class="course table table-bordered">
			<thead>
				<td>年份</td>
				<td>编号</td>
				<td>时间</td>
				<td>内容</td>
				<td>是否选中</td>
			</thead>
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
        foreach ($about_course_content as $key => $value) {
			echo $value['0']['time']."123<br>";
			echo 
			"<tr>
				<td rowspan=".2.">".2013."</td>
				<td>".0."</td>
				<td>".5月."</td>
				<td>".站长之家专栏改版上线."</td>
				<td><input type='checkbox'></td>
			</tr>";
		}
	?>
	</table>
		<p style="text-align: right;">
			<button class="btn btn-primary">添加</button>
			<button class="btn btn-success">修改</button>
			<button class="btn btn-warning">删除</button>
		</p>
	</div>
	<div class="content">
		<hr style="height:5px;border:none;border-top:5px ridge green;" />
		<h1>添加</h1>
		<label for="" class="col-sm-2 control-label">时间</label>
		<input type="text" class="form-control">
		<label for="" class="col-sm-2 control-label">内容</label>
		<textarea name="" id="" cols="30" rows="10" class="form-control">内容</textarea>
	</div>  
	<div class="content">
		<hr style="height:5px;border:none;border-top:5px ridge green;" />
		<h1>修改</h1>
		<label for="" class="col-sm-2 control-label">编号</label>
		<select name="" id="" class="form-control">
			<option value="">1</option>
			<option value="">2</option>
			<option value="">3</option>
			<option value="">4</option>
		</select>
		<label for="" class="col-sm-2 control-label">时间</label>
		<input type="text" class="form-control">
		<label for="" class="col-sm-2 control-label">内容</label>
		<textarea name="" id="" cols="30" rows="10" class="form-control">内容</textarea>
	</div> 
	<!--
	<div class="content">
		<table class="course table table-bordered">
			<thead>
				<td>年份</td>
				<td>编号</td>
				<td>时间</td>
				<td>内容</td>
				<td>是否选中</td>
			</thead>
			<tr>
				<td rowspan="2">2013</td>
				<td>0</td>
				<td>5月</td>
				<td>站长之家专栏改版上线</td>
				<td><input type="checkbox"></td>
			</tr>
			<tr>
				<td>1</td>
				<td>3月</td>
				<td>站长之家创业栏目上线</td>
				<td><input type="checkbox"></td>
			</tr>

			<tr>
				<td rowspan="2">2012</td>
				<td>2</td>
				<td>9月</td>
				<td>站长之家创业栏目上线</td>
				<td><input type="checkbox"></td>
			</tr>
			<tr>
				<td>3</td>
				<td>3月</td>
				<td>站长之家创业栏目上线</td>
				<td><input type="checkbox"></td>
			</tr>
			<tr>
				<td rowspan="2">2011</td>
				<td>4</td>
				<td>3月13日</td>
				<td>建站大师（www.313.com）上线</td>
				<td><input type="checkbox"></td>
			</tr>
			<tr>
				<td>5</td>
				<td>3月</td>
				<td>站长之家创业栏目上线</td>
				<td><input type="checkbox"></td>
			</tr>
		</table>
		<p style="text-align: right;">
			<button class="btn btn-primary">添加</button>
			<button class="btn btn-success">修改</button>
			<button class="btn btn-warning">删除</button>
		</p>
	</div>
	
	-->
</body>
</html>