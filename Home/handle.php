<?php

	if (!empty($_GET['action'])) {
		$action = $_GET['action'];
		$receive = $_POST;
		$receive['u_id'] = 1;  

		// $receive['u_id'] =  
		// $_POST['u_id'];
		// $receive['content'] = $_POST['content'];
		if (function_exists($action)) {
			$action($receive);
		} else {
			echo "方法不存在";
		}
	}
	function msgSubmit($receive)
	{	
		require_once('../public/mysql_pdo.php');
		$time = time();
		$u_id = 1;
		$stmt = $pdo->prepare("insert into message (u_id,content,time) values (?,?,?)");
		$stmt->bindParam(1, $u_id);
		$stmt->bindParam(2, $receive['content']);
		$stmt->bindParam(3, $time);
		$result = $stmt->execute();
		if ($result > 0) {
			$ajax['code'] = 1;
		} else {
			$ajax['code'] = 0;
		}
		echo json_encode($ajax);
	}
?>
