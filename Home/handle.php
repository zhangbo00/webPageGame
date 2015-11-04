<?php
	if (!empty($_GET['action'])) {
		$action = $_GET['action'];
		$receive = $_POST; 
		if (function_exists($action)) {
			$action($receive);
		} else {
			echo "方法不存在";
		}
	}
	function msgSubmit($receive)
	{	
		require_once('../public/mysql_pdo.php');
		// 暂无session
		$receive['u_id'] = 1; 
		if (strlen($receive['content'])==0) {
			$ajax['code'] = 0;
			$ajax['message'] = '不能为空';
		}
		else {
			$time = time();
			$stmt = $pdo->prepare("insert into message (u_id,p_id,root,content,time) values (?,?,?,?,?)");
			$stmt->bindParam(1, $receive['u_id']);
			$stmt->bindParam(2,$receive['p_id']);
			$stmt->bindParam(3,$receive['root']);
			$stmt->bindParam(4, $receive['content']);
			$stmt->bindParam(5, $time);
			$result = $stmt->execute();
			if ($result > 0) {
				$ajax['code'] = 1;
			} else {
				$ajax['code'] = 0;
				$ajax['message'] = '请稍后再试';
			}
		}
		echo json_encode($ajax);
	}
?>
