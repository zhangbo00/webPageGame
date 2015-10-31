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

	<div class="main">
		<div class="container">

			<?php
				include('../public/mysql_pdo.php');
				function getMessage()
				{
					$result=getItem();
					asort($result);
					foreach ($result as $key => $value) {
						$html='<div class="message_item panel panel-default" message-id='.$value['id'].'>';
							$html.='<div class="message_info panel-heading">';
								$html.=$value['nick'].'<img class=head_img src'.$value['head_img'].'>'.date('y-m-d h:i:s',$value['time']);
							$html.='</div>';
							$html.='<div class="reply panel-body">';
								$html.='<xmp class=content>body'.$value['content'].':'.$value['root'].'</xmp>';
								$html.='<button type="button" class="reply btn btn-default">回复</button>';
								$html.='<div class="reply_content">';
									$html.='<textarea></textarea>';
									$html.='<button type="button" class="submit btn btn-default" message-id='.$value['id'].'>提交</button>';
								$html.='</div>';
							$html.='</div>';
							$html.='<ul class="list-group">';
							if ($anwser=getItem($value['id'],3)) {
								foreach ($anwser as $key => $item) {
									$html.='<li class="list-group-item">';
									$html.=$item['nick'].$item['content'].':'.$item['root'];
									$html.='<button type="button" class="reply btn btn-default">回复</button>';
									$html.='<div class="reply_content">';
										$html.='<textarea></textarea>';
										$html.='<button type="button" class="submit btn btn-default" message-id='.$item['id'].'>提交</button>';
									$html.='</div>';
									$html.='</li>';
								}
							}
							$html.='</ul>';
						$html.='</div>';
						echo $html;
					}
				}
				function getItem($root=0,$limit=20)
				{
					global $pdo;
					$sql = "select m.id,m.p_id,m.root,m.content,m.time,m.reply,u.nick,u.head_img from message as m left join user as u on m.u_id=u.id where m.status=1 and root=$root order by time desc limit $limit";
					$result = $pdo->query($sql);
					$messages=$result->fetchAll();
					return $messages;
				}
				getMessage(0,10);
			?>
			<div class="message">
				<textarea style="width: 100%;height: 100px; resize: none" name="" plcaeholder"ÇëÊäÈë"></textarea>
				<button class="btn btn-info" type="button">留言</button>		
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
	
	<script type="text/javascript" src="js/messageBoard.js"></script>
</html>