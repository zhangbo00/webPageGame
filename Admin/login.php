<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript" src="js/login.js"></script>
	<title>登录</title>
</head>
<body>
	<form>
		<div class="content">
			<fieldset>
				<h1>登录</h1>
				<p>
					<span>用户名 : </span>
					<input type="text" name="user"> 
				</p>
				<p>
					<span>密&nbsp;码 : </span>
					<input type="password" name="password">
				</p>
				<p>
					<input type="submit">
					<input type="reset">
				</p>
			</fieldset>	
		</div>
	</form>
	<?php
		if(isset($_GET['user'])) {
			echo $_GET['user'];	
		}
	 ?>
</body>
</html>