window.onload=function(){
	var nick = document.getElementById('nick');
	var pass = document.getElementById('pass');
	var qr_pass = document.getElementById('qr_pass');
	var phone = document.getElementById('phone');		

	var nick_x = document.getElementById('nick_x');
	var pass_x = document.getElementById('pass_x');
	var qr_pass_x =document.getElementById('qr_pass_x');
	var phone_x =document.getElementById('phone_x');

	var commit = document.getElementById('commit');
	var reset =	document.getElementById('reset');
/*================移上去的时候事件========================*/
	nick.onmousemove=function(){

	}
	pass.onmousemove=function(){
		
	}
	qr_pass.onmousemove=function(){
		
	}
	phone.onmousemove=function(){
		
	}
/*=============移下去的时候事件============================*/
	nick.onmouseout=function(){
		
	}
	pass.onmouseout=function(){
		
	}
	qr_pass.onmouseout=function(){
		
	}
	phone.onmouseout=function(){
		
	}
/*================失去焦点时候事件========================*/
	nick.onblur=function(){
		if(nick.value.length>20||nick.value.length<=0||nick.value.indexOf(" ") >=0){
			nick_x.style.display='block';
		}else{
			nick_x.style.display='none';
		}
	}
	pass.onblur=function(){
		if(pass.value.length>16||pass.value.length<6){
			pass_x.style.display='block';
		}else{
			pass_x.style.display='none';
		}
	}
	qr_pass.onblur=function(){
		if((pass.value.length>16||pass.value.length<6)||qr_pass.value!=pass.value){
			qr_pass_x.style.display='block';
		}else{
			qr_pass_x.style.display='none';
		}
	}
	phone.onblur=function(){
		var re=/^[1]\d{10}$/;
        if(!re.test(phone.value)){
            phone_x.style.display='block';
		}else{
			phone_x.style.display='none';
		}
	}
/*======================AJAX==========================*/
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
/*=====================提交和重置============================*/
	commit.onclick=function(){
		if(nick.value.length>20||nick.value.length<=0||nick.value.indexOf(" ") >=0){
			return false;
		}
		if(pass.value.length>16||pass.value.length<6){
			return false;
		}
		if((pass.value.length>16||pass.value.length<6)||qr_pass.value!=pass.value){
			return false;
		}
		var re=/^[1]\d{10}$/;
        if(!re.test(phone.value)){
            return false;
		}

		ajax({
		method : 'post',
		url : 'http://localhost/webPageGame/Home/user_center.php',
			data : {
				'nick' : nick.value,
				'pass' : pass.value,
				'phone' : pass.value	
			},
			success : function (data) {
				data = JSON.parse(data);
				if(data.code==1){
					alert("修改成功！");
				}else{
					alert("修改失败！");
				}
			},
		async : true
		});


	}

	reset.onclick=function(){
		nick.value="";
		pass.value=""; 
		qr_pass.value="";
		phone.value="";
		nick_x.style.display='block'; 
		pass_x.style.display='block'; 
		qr_pass_x.style.display='block';
		phone_x.style.display='block';
	}

}