<!doctype html>
<html onselectstart='return false'>
 <head>
  <meta charset="UTF-8">
  <title>Geek Studio</title>
  <link rel="stylesheet" href="css/index_css.css">
  <link rel="stylesheet" href="css/clock.css" type="text/css"  />
  <style type="text/css" id="css"></style>

 </head>
 <body>

	<div class ="banners" id="header" >
		<div id="container">
			<div class="pull-left">
			<img src="images/logo.png"  width="190px" height=70px;/>
			</div>
			<div class="pull-center">
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="about.php">关于我们</a></li>
					<li><a href="photo_album.php">相册</a></li>
					<li><a href="messageBoard.php">留言</a></li>
					<li><a href="contact_us.php">联系我们</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<span class="btn_login_text" id="text_login">您没有登录!</span>
				<span class="btn_login_text" id="btn_login">登录</span>
				<span class="btn_login_text" id="btn_exit">退出</span>
				<span class="btn_login_text" id="user_center" style="display:none;float:right;">个人中心</span>
			</div>
			
		</div>


<!-- 这里要放的是轮播 -->
<div class="banner" style="clear:both">
	<div id="banner">
		<ul id="ul"></ul>
		<ol id="ol">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
		</ol>
	</div>
</div>

<div class="hot_info">
	<div class="hot_info_wrap">
		<ul id="ul_info">
			<li>
				<div class="hot_info">
					<a href=""></a>
					<div class="hot_title">Title</div>
					<img src="images/hot1.png"/>
					<div class="hot_content"><span>学习无疑是程序员最为重要的素质之一，尤其是互联网这种日新月异的行业，把学习当做工作的一大半也不为过。</span></div>
				</div>
			</li>
			<li><div class="hot_info">
					<a href=""></a>
					<div class="hot_title">Title</div>
					<img src="images/hot1.png"/>
					<div class="hot_content"><span>学习无疑是程序员最为重要的素质之一，尤其是互联网这种日新月异的行业，把学习当做工作的一大半也不为过。</span></div	>
				</div></li>
			<li><div class="hot_info">
					<a href=""></a>
					<div class="hot_title">Title</div>
					<img src="images/hot1.png"/>
					<div class="hot_content"><span>学习无疑是程序员最为重要的素质之一，尤其是互联网这种日新月异的行业，把学习当做工作的一大半也不为过。</span></div>
				</div></li>
		</ul>
	</div>
</div>
<!-- 这个是用来放资源和文章用的 -->
<div class="res_wrap">
	<div id="res_left">资源（选项卡）</div>
	<div id="res_right">
	<div id="essay_title">&nbsp&nbsp精选文章列表（HOT）</div>
	</div>
</div>

<div class="time_wrap">
	<div id="div1"></div>
</div>

<div class="footer">
	<span>博明网络科技有限公司版权所有   京ICP证140465号   京ICP备13032407号-1   京公网安备 11010802013162</span>
	<span>河南省 新乡市 红旗区 河南科技学院 0号楼9层  1197516839@qq.com</span>
</div>

<!-- 这个是注册/登录窗口 -->
<form id="login_form">
	<div id="shadown_bg">
		<div id="lgn">
		<div id="close_login"></div>
		<span class="login_title">用户登录</span>
			<table class="user_login">
				<tr>
				<td><label for="user_name" class="u_lb">用户名：</label></td>
				<td><input id="user_name" name="user_name" class="u_text"/></td></tr>
				<tr>
				<td><label for="user_password" class="u_lb">密码：</label></td>
				<td><input type="password" id="user_password" name="user_password" class="u_text"/></td></tr>
			</table>
			<span id = "message"style="display:block;height:12px;color:#ff3333;font-family:Microsoft Yahei;"> </span>
			<div class="btns">
				<input  type="button" name="login_btn" id="login_btn" value="登录"/>
				<input type="button" name="login_btn" id="sign_in_btn" value="注册"/>
			</div>
		</div>
	</div>
</form>

<script  type="js/javascript" src="js/clock.js"></script>
<script type="text/javascript" src="js/index_js.js"></script>
 </body>
</html>
