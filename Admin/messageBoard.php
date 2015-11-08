<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>留言管理</title>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/public.css">
	<link rel="stylesheet" type="text/css" href="css/messageBoard.css">

	<link rel="stylesheet" href="css/index.css">

</head>
<body>
	<?php 
		require 'header.php';
	 ?>
	<div class="body">
	<div class="main">
	<?php
		require_once('public/Page.class.php');
		$count_rs = $pdo->query('select count(*) as num from user as u left join message as m on u.id = m.u_id where u.status = 1 and m.p_id=0 and m.status=1');
		$count = $count_rs->fetch();
		$page = new Page(20, $count['num']);
		$select = 'u.account,u.nick,u.head_img,u.email,m.id,m.content,m.time from user as u left join message as m on u.id = m.u_id where u.status = 1 and m.p_id=0 and m.status=1 order by m.time desc';
		$page_result = $page->show_page_result($select);
		$show_page = $page->show_page();
		if ($page_result) {
			$html = '';
			$html .= '<table class="table table-striped table-bordered">';
			$html .= '<thead>';
			$html .= '<th>序号</th>';
			$html .= '<th>账户</th>';
			$html .= '<th>内容</th>';
			$html .= '<th>时间</th>';
			$html .= '<th>操作</th>';
			$html .= '</thead>';
			$html .= '<tbody>';
			$i = 0;
			foreach ($page_result as $key => $value) {
				$i ++;
				$html .= '<tr id='.$value['id'].'>';
				$html .= '<th>'.$i.'</th>';
				$html .= '<th>'.$value['account'].'</th>';
				$html .= '<th><xmp>'.$value['content'].'</xmp></th>';
				$html .= '<th>'.date('y-m-d h:i',$value['time']).'</th>';
				$html .= '<th><span class="glyphicon glyphicon-remove btn-lg"></span><span class="glyphicon glyphicon-pencil btn-lg"></span></th>';
				$html .= '</tr>';
			}
			$html .= '</tbody>';
			$html .= '</table>';
			$html .= $show_page;
			echo $html;
		}
	?>
	</div>
	</div>
</body>
	<script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/messageBoard.js"></script>
</html>