<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/public.css">
	<link rel="stylesheet" type="text/css" href="css/messageBoard.css">
</head>
<body>
	<?php
		require_once('public/header.html');
	?>

<!-- ============================= -->
	<div class="main">
		<div class="container">
			<div class="message_item panel panel-default">
				<div class="message_info panel-heading">
					留言区
				</div>
				<div class="reply panel-body">
					互相回复区
					更多内容
				</div>
				<ul class="list-group">
				  <li class="list-group-item">Cras justo odio</li>
				  <li class="list-group-item">Dapibus ac facilisis in</li>
				  <li class="list-group-item">Morbi leo risus</li>
				  <li class="list-group-item">Porta ac consectetur ac</li>
				  <li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
			<div class="message">
				<textarea style="width: 100%;height: 100px; resize: none" name="" plcaeholder"请输入"></textarea>
				<button class="btn btn-info" type="button">留言</button>		
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
	
	<script type="text/javascript" src="js/messageBoard.js"></script>
</html>