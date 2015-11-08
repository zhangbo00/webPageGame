<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章查阅</title>
	<!--共有引用部分-->
	  <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
	  <script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="../public/bootstrap/js/bootstrap.min.js"></script>
	  <!--自我独有引用部分-->

	<link rel="stylesheet" href="css/article.css">
	<script type="text/javascript" src="js/article.js"></script>
</head>
<body>
	<table class="table table-striped table-bordered">
        <thead>
        	<td>ID</td>
            <td>标题</td>
            <td>管理员</td>
            <td>时间</td>
            <td>操作</td>
        </thead>
        <tbody>
        <?php
            require ('../public/mysql_pdo.php');
            $str = "SELECT * FROM article WHERE STATUS=1;";
            $r=$pdo-> query ( $str );
            htmlspecialchars_decode(string)
            foreach ($r as $key => $value) {
                $time = date("Y-n-j G:i:s",$value['date']);
                echo "<tr id=".$value['id'].">";
                echo "<td>$value[id]</td>"; 
                echo "<td>".$value['title']."</td>";
                echo "<td>".$value['admin_id']."</td>";
                echo "<td>".$time."</td>";
               	echo "<td> <button class='button'>查看</button></td>";
                echo "</tr>";
            }
         ?>
        </tbody>
    </table>

	<div id="text">
		<div class="header">
			<h1 id='title'>标题</h1>
			<h5 id='date'>时间</h5>
		</div>
		<div id="content">
			<h1>文章内容</h1>
		</div>
		<div class="foot">
			<h1>文章底部</h1>
		</div>
	</div>
	
</body>
</html>