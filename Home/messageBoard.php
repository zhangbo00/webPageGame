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
				require('public/Page.class.php');
				// require_once('../public/mysql_pdo.php');
				/**
				 * 取得留言
				 */
				function getMessage()
				{
					$result=getItem();
					asort($result['messages']);
					$html='';
					foreach ($result['messages'] as $key => $value) {
						$html.='<div class="message_item panel panel-default" message-id='.$value['id'].'>';
							$html.='<div class="message_info panel-heading">';
								$html.=$value['nick'].'<img class=head_img src'.$value['head_img'].'>'.date('y-m-d h:i',$value['time']);
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
							if ($anwser=getItem($value['id'],5)) {
								$i = 0;
								foreach ($anwser['messages'] as $key => $item) {
									$html.='<li class="list-group-item">';
									$html.=$item['nick'].$item['content'].':'.$item['root'].'time:'.date('y-m-d h:i',$value['time']);
									$html.='<button type="button" class="reply btn btn-default">回复</button>';
									$html.='<div class="reply_content">';
										$html.='<textarea></textarea>';
										$html.='<button type="button" class="submit btn btn-default" message-id='.$item['id'].'>提交</button>';
									$html.='</div>';
									$html.='</li>';
									$i++;
									if ($i==5) {
										$html.='<li class="list-group-item load_more">查看更多</li>';
									}
								}
							}
							$html.='</ul>';
						$html.='</div>';
						$html.='<br/>';
					}
					$html.=$result['page_html'];
					echo $html;
				}
				/**
				 * 取得条目
				 * @param  integer $root  根节点
				 * @param  integer $limit 条数限制
				 * @return [type]         留言|回复结果集
				 */
/*				function getItem($root=0,$limit=20)
				{
					global $pdo;
					$sql = "select m.id,m.p_id,m.root,m.content,m.time,m.reply,u.nick,u.head_img from message as m left join user as u on m.u_id=u.id where m.status=1 and root=$root order by time desc limit $limit";

					$result = $pdo->query($sql);
					$messages=$result->fetchAll();
					return $messages;
				}*/

				function getItem($root=0,$limit=20)
				{
					global $pdo;
					$sql = "select count(*) as count from message as m left join user as u on m.u_id=u.id where m.status=1 and root=$root order by time desc limit $limit";
					$count_res = $pdo->query($sql);
					if ($count_res) {
						$count = $count_res->fetch();
					}
					$page = new Page($limit,$count['count']);
					$select = "m.id,m.p_id,m.root,m.content,m.time,m.reply,u.nick,u.head_img from message as m left join user as u on m.u_id=u.id where m.status=1 and root=$root order by time desc";
					$result['messages'] = $page->show_page_result($select);
					$result['page_html'] = $page->show_page(); 
					return $result;
				}
				getMessage(0,10);
			?>
			<div class="message">
				<textarea style="width: 100%;height: 100px; resize: none" name="" plcaeholder"回复"></textarea>
				<button class="btn btn-info" type="button">留言</button>		
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="../public/jquery-1.10.2.min.js"></script>
	
	<script type="text/javascript" src="js/messageBoard.js"></script>
</html>