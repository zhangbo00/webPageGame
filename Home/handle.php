<?php
	if (!empty($_GET['action'])) {
		$action = $_GET['action'];
		$receive = $_POST;
		$receive['u_id'] = $_POST['u_id'];
		$receive['content'] = $_POST['content'];

		if (function_exists($action)) {
			$action($receive);
		} else {
			echo "方法不存在";
		}
		/*try {
			$action($receive);
		} catch (Exception $e) {
			echo  'Caught exception: ' ,   $e -> getMessage (),  "\n" ;
			//echo "方法不存在";
		}*/
	}
	function msgSubmit()
	{
		echo "提交留言";
	}

?>
