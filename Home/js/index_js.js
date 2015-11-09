window.onload = function(){
	var oBtn_login=document.getElementById('btn_login');		//这个是导航的登录按钮
	var oBtn_close_login=document.getElementById('close_login');			//这个是登录框的关闭按钮
	var oShadown_bg=document.getElementById('shadown_bg');			//这个是遮罩层
	var lgn = document.getElementById('lgn');
	
	var oLogin_btn=document.getElementById('login_btn');			//这个是登录按钮
	var oSin_in_btn=document.getElementById('sign_in_btn');		//这个是注册按钮
	var text_login = document.getElementById('text_login');

	var user_name = document.getElementById('user_name');
	var user_password = document.getElementById('user_password');
	var user_exit = document.getElementById('btn_exit');
	var user_center = document.getElementById('user_center');
	var cook_nick = getCookie('nick');
	var cook_pass = getCookie('pass');

	oBtn_close_login.onclick=function(){
		oShadown_bg.style.display="none";
	}

	oBtn_login.onclick=function(){
		oShadown_bg.style.display="block";
		
	}
Login();
/*======================================COOKIT自动登录=================================*/
function Login(){

	if(cook_nick.length>0&&cook_pass.length>0){
		

		text_login.innerHTML = cook_nick+"你好!";
		// text_login.style.float='left';
		oBtn_login.style.display='none';
		user_center.style.display='inline-block';
		user_exit.style.display='inline-block';
	}else{
		user_exit.style.display="none";
		text_login.innerHTML = "您没有登录!";
		// oBtn_login.style.display='block';
		// user_center.style.display='none';
	}
}
/*==========================================AJAX======================================*/
function createXHR() {
	if (typeof XMLHttpRequest != 'undefined') {
		return new XMLHttpRequest();
	} else if  (typeof ActiveXObject != 'undefined') {
		var versions = [
										'MSXML2.XMLHttp.6.0',
										'MSXML2.XMLHttp.3.0',
										'MSXML2.XMLHttp'
		];
		for (var i = 0; i < versions.length; i ++) {
			try {
				return new ActiveXObject(version[i]);
			} catch (e) {
				//跳过
			} 
		}
	} else {
		throw new Error('您的浏览器不支持XHR对象！');
	}
}

function params(data) {
	var arr = [];
	for (var i in data) {
		arr.push(encodeURIComponent(i) + '=' + encodeURIComponent(data[i]));
	}
	return arr.join('&');
}

function ajax(obj) {
	var xhr = new createXHR();
	obj.url = obj.url + '?rand=' + Math.random();
	obj.data = params(obj.data);
	if (obj.method === 'get') obj.url = obj.url.indexOf('?') == -1 ? 
obj.url + '?' + obj.data : obj.url + '&' + obj.data;
	if (obj.async === true) {
		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4) callback();
		};
	}
	xhr.open(obj.method, obj.url, obj.async);
	if (obj.method === 'post') {
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(obj.data);
	} else {
		xhr.send(null);
	}
	if (obj.async === false) {
			callback();
	}
	function callback () {
		if (xhr.status == 200) {
			 obj.success(xhr.responseText);			//回调
		} else {
			alert('数据返回失败！状态代码：' + xhr.status + '，状态信息：' + xhr.statusText);
		}
	}
}

var oLtime = function login_time(){
	oShadown_bg.style.display="none";
}


/*======================================登录和注册==================================*/
	oSin_in_btn.onclick=function(){
		window.open("http://localhost/webPageGame/Home/user_register.html");
		oShadown_bg.style.display="none";
	}
	oLogin_btn.onclick=function(){

		var str_user_name = user_name.value;
		var str_user_password = user_password.value;
		ajax({
		method : 'post',
		url : 'http://localhost/webPageGame/Home/user_login.php',
			data : {
				'email' : str_user_name,
				'password' : str_user_password 
			},
			success : function (data) {
				data = JSON.parse(data);
				if(data.code==1){
					var msg = document.getElementById('message');
					var text_login = document.getElementById('text_login');


					msg.innerHTML=data.message;
					setTimeout(oLtime,2000);
					text_login.innerHTML = data.nick+"你好!";
					oBtn_login.style.display='none';
					user_center.style.display='block';
					setCookie('nick',data.nick,5);
					setCookie('pass',data.password,2);
					user_exit.style.display='inline-block';
				}else{
					var msg = document.getElementById('message');
					msg.innerHTML=data.message;
				}
			},
		async : true
		});
	}	

	user_exit.onclick=function(){
		// 清除COOKIT
		if (confirm("你确定退出吗？")) {
			removeCookie('nick');
			removeCookie('pass');
			ajax({
				url:'http://localhost/webPageGame/Home/logout.php',
			})
			return;
			user_exit.style.display="none";
			text_login.innerHTML = "您没有登录!";
			user_center.style.display="none";
			oBtn_login.style.display="inline-block";
		}
	}

	user_center.onclick=function(){
		window.open("http://localhost/webPageGame/Home/user_center.html");
	}

/*=============================================轮播==========================================*/
		var Css=document.getElementById("css");
		init(1);
		click();
		function init(len){

			var ul = document.getElementById("ul");
			var width = 1400/len;	
			var uHTML = "",pHTML="",zHTML="",z=0,tHTML="";

			for(var i=0;i<len;i++){
				if(i>len/2){
					z--;
					zHTML+="#banner ul li:nth-child("+(i+1)+"){z-index:"+z+";}"
				}
				uHTML+="<li><div></div><div></div><div></div><div></div></li>"
				pHTML+="#banner ul li:nth-child("+(i+1)+") div{background-position:"+(-i*width)+"px;}"
				tHTML+="#banner ul li:nth-child("+(i+1)+"){transition:1s "+0.5*i+"s}"
						
			};
			Css.innerHTML += tHTML + zHTML + pHTML +"#banner ul li{width:"+width+"px;}#banner ul li div{width:"+width+"px;}";
			ul.innerHTML += uHTML;

		};
		function click(){
			var ol=document.getElementById("ol");
			var oLi=ol.getElementsByTagName("li");

			for(var i=0;i<oLi.length;i++){
				oLi[i].index = i;
				oLi[i].onclick = function(){
					Css.innerHTML += "#banner ul li{transform:translateZ(-180px) rotateX("+this.index*90+"deg);}"
				}
			}
		};



/*==========================================时钟======================================*/
var oDiv=document.getElementById('div1');
	var aTime=[];
	
	var last='000000';
	
	for(var i=0;i<8;i++)
	{
		var oBox=document.createElement('div');
		oBox.className='box';
		
		if((i+1)%3)
		{
			aTime.push(oBox);
			oBox.innerHTML=
				'<span>0</span>'+
				'<div class="top"><span>0</span></div>'+
				'<div class="tran move">'+
					'<div class="front"><span>0</span></div>'+
					'<div class="back"><span>0</span></div>'+
				'</div>';
		}
		else
		{
			oBox.innerHTML='<span class="dian">:</span>';
		}
		
		oDiv.appendChild(oBox);
	}
	
	function inner()
	{
		function toDou(n){return n<10?'0'+n:''+n;}
		var oDate=new Date();
		var now=toDou(oDate.getHours())+toDou(oDate.getMinutes())+toDou(oDate.getSeconds());
		
		for(var i=0;i<now.length;i++)
		{
			if(now.charAt(i)!=last.charAt(i))
			{
				aTime[i].className='box';
				aTime[i].innerHTML=
					'<span>'+last.charAt(i)+'</span>'+
					'<div class="top"><span>'+now.charAt(i)+'</span></div>'+
					'<div class="tran move">'+
						'<div class="front"><span>'+last.charAt(i)+'</span></div>'+
						'<div class="back"><span>'+now.charAt(i)+'</span></div>'+
					'</div>';
				
				(function (box){
					setTimeout(function (){
						box.className='box active';
					}, 0);
				})(aTime[i]);
			}
		}
		
		last=now;
	}
	
	setInterval(inner, 1000);
	(function (){
		var oS=document.createElement('script');
		
		oS.type='text/javascript';
		oS.src='http://www.zhinengshe.com/zpi/zns_demo.php?id=3538';
		
		document.body.appendChild(oS);
	})();


/*==================================COOKIT=====================================*/
function setCookie(name, value, iDay)
{
	var oDate=new Date();
	oDate.setDate(oDate.getDate()+iDay);
	
	document.cookie=name+'='+value+';expires='+oDate;
}

function getCookie(name)
{
	var arr=document.cookie.split('; ');
	for(var i=0;i<arr.length;i++)
	{
		var arr2=arr[i].split('=');
		
		if(arr2[0]==name)
		{
			return arr2[1];
		}
	}
	
	return '';
}

function removeCookie(name)
{
	setCookie(name, 1, -1);
}

oShadown_bg.onclick=function(){

	oShadown_bg.style.display='none';
}
lgn.onclick=function(e){
	console.log(e);
	stopEventBubble(e);
}

function stopEventBubble(event){
    var e=event || window.event;
    if (e && e.stopPropagation){
        e.stopPropagation();    
    }
    else{
        e.cancelBubble=true;
    }
}
}