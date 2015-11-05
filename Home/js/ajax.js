function ajax(url, fnSucc, fnFaild)
{
	//1.创建Ajax对象
	if(window.XMLHttpRequest)
	{
		var oAjax=new XMLHttpRequest();
	}
	else
	{
		var oAjax=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	//2.连接服务器
	//open(方法, 文件名, 异步传输)
	oAjax.open('GET', url, true);
	
	//3.发送请求
	oAjax.send();
	
	//4.接收返回
	oAjax.onreadystatechange=function ()
	{
		//oAjax.readyState	//浏览器和服务器，进行到哪一步了
		if(oAjax.readyState==4)	//读取完成
		{
			if(oAjax.status==200)	//成功
			{
				fnSucc(oAjax.responseText);
			}
			else
			{
				if(fnFaild)
				{
					fnFaild(oAjax.status);
				}
				//alert('失败:'+oAjax.status);
			}
		}
	};
}
<<<<<<< HEAD
function fnFaild () {
		
}
=======


>>>>>>> cffe88ea26a1529a4a4e043a7f404f29ecbf7be4
