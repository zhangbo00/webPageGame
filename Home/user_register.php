<?php
	echo "<meta charset='UTF-8'>";
	$nick=$_POST['nick'];															//昵称（nick）
	$password=$_POST['password'];											//密码（password）
	$confirm_password=$_POST['confirm_password'];			//确认密码（confirm_password）
	$email=$_POST['email'];														//电子邮箱（email）	
	$mobiel=$_POST['mobiel'];	
													//手机号（mobile）
	$head_img=$_FILES['head_img'];
	$img_name = $head_img['name'];
	define('UPLODEPATH', 'D:/wamp/www/webPageGame/public/head_imgs/');
	$new_path=UPLODEPATH.$img_name;

	$old_path = $head_img['tmp_name'];

	check();
//PHP验证注册信息
function check(){
	global $nick;
	global $password;
	global $confirm_password;
	global $email;
	global $mobiel;
//数据为空检测
	if(empty($nick)||empty($password)||empty($confirm_password)||empty($email)||empty($mobiel)){
		echo "出错了，不能为空！";
		return false;
	}
//数据包含空格检测
	if(strpos($nick," ")||strpos($password," ")||strpos($confirm_password," ")||strpos($email," ")||strpos($mobiel," ")){
		echo '输入的数据中包含有空格！';
		return false;
	}
//密码检测
	$nick = preg_replace("/\s+/",'',$nick);																				    //去空格的正则表达式
	if(strlen($nick)>20||strlen($nick)<=0){
		echo "昵称错误！";
		return false;	
	}
//密码检测
	if(strlen($password)>16||strlen($password)<6||strpos($password," ")){
		echo "密码格式错误！";	
		return false;	
	}
//确认密码检测
	if(strlen($confirm_password)>16||strlen($confirm_password)<6){
		echo "确认密码过长！";	
		return false;	
	}

//邮箱检测	
	if(strlen($email)>30||strlen($email)<7){
		echo "email过长！";	
		return false;	
	}
//手机号检测
	if(strlen($mobiel)!=11){
		echo "手机号有问题！";	
		return false;
	}

	insertData();
}

function insertData(){
	global $nick;
	global $password;
	global $confirm_password;
	global $email;
	global $mobiel;

	global $img_name;
	global $new_path;
	global $old_path;

	$dbc = mysqli_connect('localhost','root','','geekstudio') or die("Error connecting to MySQL server.");
	mysqli_set_charset($dbc,'utf8');
	$query = "SELECT * FROM user WHERE email='$email' or nick='$nick'";
	$result = mysqli_query($dbc,$query);
	if($result->num_rows>=1){
		echo "	<span style='font-size:70px;display:block;text-align:center;margin-top:20%;'>注册失败，邮箱或昵称已存在！ $nick</span>";
	}else{
		if (!empty($img_name)) {
			if(move_uploaded_file($old_path,$new_path)){
				$query = "INSERT INTO user (nick,pass,head_img,email,mobile) VALUES('$nick',SHA('$password'),'$img_name','$email','$mobiel')";
			}
		}else{
			$query = "INSERT INTO user (nick,pass,email,mobile) VALUES('$nick',SHA('$password'),'$email','$mobiel')";
		}
		$query = "INSERT INTO user (nick,pass,email,mobile) VALUES('$nick',SHA('$password'),'$email','$mobiel')";
		$data = mysqli_query($dbc,$query);
		mysqli_close($dbc);

		echo "	<span style='font-size:70px;display:block;text-align:center;margin-top:20%;'>注册成功，欢迎您！ $nick</span>";
		echo " <span id='showbox' style='font-size:15px;display:block;text-align:center;margin-top:20%;'></span>";
		$a = "
			<script type='text/javascript'>
				var timeout = 4;
					var Clock = function show(){
					var showbox = document.getElementById('showbox');
					showbox.innerHTML='距离页面关闭还有'+timeout+'秒！';
					timeout--;
						if (timeout == 0) {
						window.close();
						}
					}
				setInterval(Clock, 1000);
			</script>
		";}
		echo $a;
	
}

	
?>