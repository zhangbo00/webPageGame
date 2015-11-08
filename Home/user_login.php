<?php
	$user_name=$_POST['email'];
	$user_password=$_POST['password'];
	
	$dbc = mysqli_connect('localhost','root','','geekstudio') or die("Error connecting to MySQL server.");
	$query = "SELECT * FROM user WHERE email='$user_name' and pass=SHA('$user_password')";
	$result = mysqli_query($dbc,$query);

	if($result->num_rows>=1){
		/*while($row = mysqli_fetch_array($result)) { 
			$rows[]=$row;
		}	*/ 
		
		$row = mysqli_fetch_array($result);
		var_dump($row);
		Session_start();
		$_SESSION['account'] = $row['account'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['head_img'] = $row['head_img'];
		var_dump($_SESSION);
		return;
		$ajax['code']=1;
		$ajax['message']="登录成功！2秒后跳转！";
		$ajax['nick']=$row['nick'];
		$ajax['email']=$row['email'];
		$ajax['password']=$row['pass'];


	}else{
		$ajax['code']=0;
		$ajax['message']="帐号密码不正确！";

	}
	mysqli_close($dbc);
	echo json_encode($ajax);
?>