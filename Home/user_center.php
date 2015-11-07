<?php
	$new_nick =$_POST['nick'];
	$new_pass =$_POST['pass']; 
	$new_phone =$_POST['phone'];

	$user_nick = $_COOKIE['nick'];


	$dbc = mysqli_connect('localhost','root','','geekstudio') or die("Error connecting to MySQL server.");
	$query = "UPDATE user SET nick='$new_nick',pass=SHA('$new_pass'),mobile='$new_phone' WHERE nick='$user_nick'";
	$result = mysqli_query($dbc,$query);
	$ajax['nick'] = $query ;
	$ajax['re']=$result;
	if($result){
		$ajax['code']=1;
		setcookie('nick','',time()-3600);
		setcookie('pass','',time()-3600);
		$ajax['new_nick']=$new_nick;
	}else{
		$ajax['code']=0;
	}
	echo json_encode($ajax);

?>