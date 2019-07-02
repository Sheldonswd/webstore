// JavaScript Document


	window.onload=function(){
		
		/*侧边栏动画*/
		 var cebianlan = document.getElementById("xiangleftright");
			cebianlan.onclick=function(){
				var cebianlanleft = document.getElementById("left");
					if(cebianlanleft.style.left==0+"px"){
						cebianlanleft.style.left=-250+"px";
						var zhezhao = document.getElementById("zhezhao");
							document.body.removeChild(zhezhao);
					}else{
						cebianlanleft.style.left=0+"px";
						var zhezhao = document.createElement("div");
				   		zhezhao.id="zhezhao";
						document.body.appendChild(zhezhao);
					}
			}
	
			
	}
		/*删除遮罩 并且侧边栏隐藏*/
	
		function sczhezhao(){
			var cebianlanleft = document.getElementById("left");
			var zhezhao = document.getElementById("zhezhao");
				document.body.removeChild(zhezhao);
				cebianlanleft.style.left=-250+"px";
				
		}
		
			var daohangquanbu = byId("daohang-quanbu").getElementsByClassName("daohang-buttom"),
			daohanglen=daohangquanbu.length;		//获取一共多少个栏目
			var daohanght = 0;
			var lanmuht = new Array();
			for(var h=0;h<=daohanglen;h++){
				lanmuht[h]="a"+h;
			}
			console.log(lanmuht);
			function daohangss(id){
					var buttom = byId("daohang-buttom-" + id);	//获取栏目
						var heighT=buttom.offsetHeight;		//获取栏目的高
						
						if(heighT>83){						//如果栏目的高大于83
							lanmuht[id]=heighT;
							
							buttom.style.height=80+"px";	
						
						}else{
							buttom.style.height=lanmuht[id]+"px";
						}
						
						
			}
				/*点击跳转到iframe地址*/
						function iFrame(url){
						var iframe = byId("iFrame-content");
							iframe.src=url;
							sczhezhao();
					}

			/*点击隐藏和现实下拉菜单*/
				



						function zhuce(){
							alert("暂时没开放");
						}
		