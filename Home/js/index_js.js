window.onload = function(){
	var oBtn_login=document.getElementById('btn_login');									//
	var oBtn_close_login=document.getElementById('close_login');						//
	var shadown_bg=document.getElementById('shadown_bg');


	oBtn_close_login.onclick=function(){
		shadown_bg.style.display="none";
	}

	oBtn_login.onclick=function(){
		shadown_bg.style.display="block";
	}


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


}