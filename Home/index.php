<!doctype html>
<html onselectstart='return false'>
 <head>
  <meta charset="UTF-8">
  <title>Geek Studio</title>
  <link rel="stylesheet" href="css/index_css.css">
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
					<li><a href="www.baidu.com">首页</a></li>
					<li><a href="www.baidu.com">关于我们</a></li>
					<li><a href="www.baidu.com">相册</a></li>
					<li><a href="www.baidu.com">留言</a></li>
					<li><a href="www.baidu.com">联系我们</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<span class="btn_login_text">您没有登录!</span>
				<span class="btn_login_text" id="btn_login">登录</span>
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
			<li>热点一</li>
			<li>热点二</li>
			<li>热点三</li>
		</ul>
	</div>
</div>
<!-- 这个是用来放资源和文章用的 -->
<div class="res_wrap">
	<div id="res_left">资源（选项卡）</div>
	<div id="res_right">优秀文章（下拉列表）</div>
</div>

<div class="time_wrap">
	这里放数子表
</div>

<div class="footer">
	这里放的是页脚
</div>

<!-- 这个是注册/登录窗口 -->
<form id="login_form">
	<div id="shadown_bg">
		<div id="lgn">
		<div id="close_login"></div>
		<span class="login_title">用户登录</span>
			<div class="user_login">
				
				<label for="user_name" class="u_lb">用户名：</label>
				<input id="user_name" name="user_name" class="u_text"/><br/>
				<label for="user_password" class="u_lb">密&nbsp&nbsp码：</label>
				<input type="password" id="user_password" name="user_password" class="u_text"/><br/>
			</div>
			<div class="btns">
				<input  type="button" name="login_btn" id="login_btn" value="登录"/>
				<input type="button" name="login_btn" id="sign_in_btn" value="注册"/>
				<a href="#" id="forget">忘记密码？</a>
			</div>
		</div>
	</div>
</form>


<script type="text/javascript" src="js/index_js.js"></script>
 </body>
</html>
