<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言回复</title>
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/public.css">
	<link rel="stylesheet" type="text/css" href="css/message_answer.css">
	<link rel="stylesheet" href="css/index.css">
	<style>
	    .body{
	        float: left;
	        padding-top: 50px;
	        padding-left: 50px;
	    }
	</style>
</head>
<body>
	<?php 
		require 'header.php';
	 ?>
	<div class="body">
	<div class="main">
		<div class="continer">
			<?php
				if (!empty($_GET['id'])) {
					require_once('public/Page.class.php');
					$message_rs = $pdo->query('select u.account,u.nick,u.head_img,u.email,m.id,m.content,m.time from user as u  left join message as m on u.id = m.u_id where m.id='.$_GET['id'].' and m.status=1');
					$message = $message_rs->fetch();
					var_dump($message);
					$count_query = $pdo->query('select count(*) as count from message as m left join user as u on m.u_id = u.id where root='.$_GET['id'].' and m.status=1');
					$count = $count_query->fetch();
					$page = new Page(10,$count['count']);
					$select = 'u.account,u.nick,u.head_img,u.email,m.id,m.content,m.time,m.type from user as u left join message as m on u.id = m.u_id where u.status = 1 and m.root='.$_GET['id'].' and m.status=1';
					$page_result = $page->show_page_result($select);
					$show_page = $page->show_page();
					$html = '';
					foreach ($page_result as $key => $value) {
						if ($value['type'] == 1) {
							$html .= '<div class=right>';
						}
						else {
							$html .= '<div class=left>';
						}
							$html .= '<p>';
								$html .= $value['account'].':'.date('y-m-d h:i',$value['time']);
							$html .= '</p>';
							$html .= '<p>';
								$html .= '<xmp>'.$value['content'].'</xmp>';
							$html .= '</p>';
						$html .= '</div>';
					}
					$html .= $show_page;
					echo $html;
				}
				echo '<input type="hidden" id="root" value='.$message['id'].'>';
			?>
			<div class="message">
				<textarea style="width: 100%;height: 100px; resize: none" name="" plcaeholder"回复"></textarea>
				<button class="btn btn-info" type="button">留言</button>		
			</div>
		</div>
	</div>
	</div>
</body>
	<script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/message_answer.js"></script>
</html>