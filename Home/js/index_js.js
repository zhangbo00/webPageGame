window.onload = function(){
	var oBtn_login=document.getElementById('btn_login');									//��������¼��ť
	var oBtn_close_login=document.getElementById('close_login');					//��¼���ڹرհ�ť
	var shadown_bg=document.getElementById('shadown_bg');

<!-- �رյ�¼ -->
	oBtn_close_login.onclick=function(){
		shadown_bg.style.display="none";
	}
<!-- �򿪵�¼ -->
	oBtn_login.onclick=function(){
		shadown_bg.style.display="block";
	}





}