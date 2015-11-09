<?php
	session_start();
	if (empty($_SESSION['id'])) {
		$ajax['code'] =0;
		$ajax['message'] = "请先登录"; 
		echo json_encode($ajax);
		return;
	}
	/**
	 * 执行对应操作
	 */
	if (!empty($_GET['action'])) {
		$action = $_GET['action'];
		$receive = $_POST; 
		$receive['u_id']=$_SESSION['id'];
		if (function_exists($action)) {
			require_once('../public/mysql_pdo.php');
			$action($receive);
		} else {
			echo "方法不存在";
		}
	}

	/**
	 * 留言提交
	 * @param  [array] $receive [留言的相关信息]
	 * @return [array]          成功|失败[提示信息]
	 */
	function msgSubmit($receive)
	{	
		global $pdo;
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
				}
				$ajax['code'] = 1;
			} else {
				$ajax['code'] = 0;
				$ajax['message'] = '请稍后再试';
			}
		}
		echo json_encode($ajax);
	}

	function msgSubmit_copy($receive)
	{
		global $pdo;
		if (strlen($receive['content'])==0) {
			$ajax['code'] = 0;
			$ajax['message'] = '不能为空';
		}
		else {
			$time = time();
			$stmt = $pdo->prepare("insert into message_copy (u_id,path,content,time) values (?,?,?,?)");
			$stmt->bindParam(1, $receive['u_id']);
			$stmt->bindParam(2,$receive['path']);
			$stmt->bindParam(3, $receive['content']);
			$stmt->bindParam(4, $time);
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

	/**
	 * 载入更多回复
	 * @param  [array] $receive [根节点]
	 * @return [array]          [回复结果集]
	 */
	function answer_load_more($receive)
	{
		global $pdo;
		$query = 'select m.id,m.p_id,m.root,m.content,m.time,m.reply,u.nick,u.head_img from message as m left join user as u on m.u_id=u.id where m.root='.$receive['root'].' and m.status=1 order by time limit '.$receive['answer_num'].','.$receive['limit'];
		$result = $pdo->query($query);
		if (!$result) {
			return;
		}
		$answer = $result->fetchAll();
		array_push($answer,$query);
		echo json_encode($answer);
	}
?>
