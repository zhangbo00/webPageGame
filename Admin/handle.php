<?php
	/**
	 * 执行对应操作
	 */
	if (!empty($_GET['action'])) {
		$action = $_GET['action'];
		$receive = $_POST; 
		if (function_exists($action)) {
			require_once('../public/mysql_pdo.php');
			$action($receive);
		} else {
			echo "方法不存在";
		}
	}
	function message_del($receive)
	{
		global $pdo;
		$update_query = "update message set status=0 where id = $receive[id]";
		$update_rs = $pdo->exec($update_query);
		if ($update_rs) {
			$ajax['code'] = 1;
		}
		else {
			$ajax['code'] = 0;
			$ajax['message'] = '请稍后再试';
		}
		echo json_encode($ajax);
	}

	function msgSubmit($receive)
	{
		global $pdo;
		// 暂无session
		$receive['u_id'] = 1; 
		if (strlen($receive['content'])==0) {
			$ajax['code'] = 0;
			$ajax['message'] = '不能为空';
		}
		else {
			$time = time();
			$stmt = $pdo->prepare("insert into message (u_id,p_id,root,content,time,type) values (?,?,?,?,?,?)");
			$stmt->bindParam(1, $receive['u_id']);
			$stmt->bindParam(2,$receive['p_id']);
			$stmt->bindParam(3,$receive['root']);
			$stmt->bindParam(4, $receive['content']);
			$stmt->bindParam(5, $time);
			$stmt->bindParam(6,$receive['type']);
			$result = $stmt->execute();
			if ($result > 0) {
				if ($receive['type'] == 1) {
					$update_query = "update message set reply=1 where id = $receive[p_id]";
					$update_res = $pdo->exec($update_query);
					if ($update_res > 0) {
						$ajax['code'] = 1;
					}
				}
			} else {
				$ajax['code'] = 0;
				$ajax['message'] = '请稍后再试';
			}
		}
		echo json_encode($ajax);
	}