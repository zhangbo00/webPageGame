<?php
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['account']);
	unset($_SESSION['head_img']);
	var_dump($_SESSION);
?>