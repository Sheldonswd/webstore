// JavaScript Document
				/*显示添加数据窗口*/
					function xstjk(){
							var xsk = byId("yiqi-tijiaok");
							if(xsk.style.display=="none"){
							   		xsk.style.display="block";
								/*如果不要JS设置添加数据窗口居中的话 就把这段删掉*/
									var lanmutj = byId("yiqi-tijiaok"),
									tjheight=lanmutj.scrollHeight,
									tjwidth = lanmutj.scrollWidth;
									lanmutj.style.top=(Kheight-tjheight)/3+"px";
									lanmutj.style.left=(Zwidth-tjwidth)/2+"px";
								/**/
							   }else{
								   xsk.style.display="none";
							   }
					}
				function jiluqx(){
					var xsk = byId("yiqi-tijiaok");
					 xsk.style.display="none";
				}
			
/*主栏目删除*/
			function zlanmushanchu(id){
				if(isNaN(id)){
				   	tishi(2,"小伙子 非法传参数，我要记录你ip",3000);
				   }else{
					  parseInt(id);
					  	var hello = new XMLHttpRequest;
			   		hello.open("POST","sc.php");
			   		hello.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			   		hello.send("lmid=" + id);
			   		hello.onreadystatechange=function(){
								if(hello.readyState===4){
										if(hello.status===200){
											var fanhui = JSON.parse(hello.responseText);	
											if(fanhui.success){
											var trs =byId("z"+id);
									
											trs.innerHTML = "";
											tishi(2,fanhui.msg,1500);

											}else{
											tishi(1,fanhui.msg,3000);
												
											}
											
											
										}
								}
							}
   
				   }
		}	


			
				/*子栏目删除*/
			function lanmushanchu(id){
				if(isNaN(id)){
				   	tishi(2,"小伙子 非法传参数，我要记录你ip",3000);
				   }else{
					  parseInt(id);
					  	var hello = new XMLHttpRequest;
			   		hello.open("POST","sc.php");
			   		hello.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			   		hello.send("lmzid=" + id);
			   		hello.onreadystatechange=function(){
								if(hello.readyState===4){
										if(hello.status===200){
											var fanhui = JSON.parse(hello.responseText);	
											if(fanhui.success){
											var trs =byId("z"+id);
									
											trs.innerHTML = "";
											tishi(2,fanhui.msg,1500);

											}else{
											tishi(1,fanhui.msg,3000);
												
											}
											
											
										}
								}
							}
   
				   }
		}	
/*主栏目保存*/
					function zlanmubaocun(id){
								if(isNaN(id)){
									tishi(2,"小伙子 非法传参数，我要记录你ip",3000);
								   }else{
									  parseInt(id);
										var hqinput = byId("z"+id).getElementsByTagName("input"),
											paixu=hqinput[1].value,
											title=hqinput[2].value;
										var hello = new XMLHttpRequest;
									hello.open("POST","bc.php");
									hello.setRequestHeader("Content-type","application/x-www-form-urlencoded");
									hello.send("lmid=" + id
											  +"&paixu=" + paixu
											  +"&title=" + title
											  );
									hello.onreadystatechange=function(){
												if(hello.readyState===4){
														if(hello.status===200){
															var fanhui = JSON.parse(hello.responseText);	
															if(fanhui.success){

															tishi(2,fanhui.msg,1500,"zlanmu.php");

															}else{
															tishi(1,fanhui.msg,3000,"zlanmu.php");

															}


														}
												}
											}

								   }
		}





/*子栏目保存*/
					function lanmubaocun(id){
				if(isNaN(id)){
				   	tishi(2,"小伙子 非法传参数，我要记录你ip",3000);
				   }else{
					  parseInt(id);
					 	var hqinput = byId("z"+id).getElementsByTagName("input"),
							paixu=hqinput[1].value,
							url=hqinput[2].value,
							ico=hqinput[3].value,
							title=hqinput[4].value,
							content=hqinput[5].value;
					  	var hello = new XMLHttpRequest;
			   		hello.open("POST","bc.php");
			   		hello.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			   		hello.send("lmzid=" + id
							  +"&paixu=" + paixu
							  +"&url=" + url
							  +"&ico=" + ico
							  +"&title=" + title
							  +"&content=" + content
							  );
			   		hello.onreadystatechange=function(){
								if(hello.readyState===4){
										if(hello.status===200){
											var fanhui = JSON.parse(hello.responseText);	
											if(fanhui.success){
										
											tishi(2,fanhui.msg,1500,"lanmu.php");

											}else{
											tishi(1,fanhui.msg,3000,"lanmu.php");
												
											}
											
											
										}
								}
							}
   
				   }
		}
	/*主栏目删除所有*/
		function zscall(){
					var daohangquanbu = byId("lanmu-content").getElementsByClassName("lanmu-content"),
						daohanglen = daohangquanbu.length;
					for(var d=0;d<=daohanglen;d++){
							var qtcheck = byId("daohang-buttom-"+d).getElementsByClassName("js-check"+d);
							var z=0;
						while(qtcheck[z]){
							if(qtcheck[z].checked){
										var id=qtcheck[z].value;
										
												var hello = new XMLHttpRequest;
													hello.open("POST","sc.php");
													hello.setRequestHeader("Content-type","application/x-www-form-urlencoded");
													hello.send("lmid=" + id);
													hello.onreadystatechange=function(){
																if(hello.readyState===4){
																		if(hello.status===200){
																			var fanhui = JSON.parse(hello.responseText);	
																			if(fanhui.success){
																			tishi(2,fanhui.msg,1500,"zlanmu.php");

																			}else{
																			tishi(1,fanhui.msg,3000);

																			}


																		}
																}
															}
								
								
								
							}
							z++;
							  } 
						}

					}




/*子栏目删除所有*/
		function scall(){
					var daohangquanbu = byId("lanmu-content").getElementsByClassName("lanmu-content"),
						daohanglen = daohangquanbu.length;
					for(var d=0;d<=daohanglen;d++){
							var qtcheck = byId("daohang-buttom-"+d).getElementsByClassName("js-check"+d);
							var z=0;
						while(qtcheck[z]){
							if(qtcheck[z].checked){
										var id=qtcheck[z].value;
										
												var hello = new XMLHttpRequest;
													hello.open("POST","sc.php");
													hello.setRequestHeader("Content-type","application/x-www-form-urlencoded");
													hello.send("lmzid=" + id);
													hello.onreadystatechange=function(){
																if(hello.readyState===4){
																		if(hello.status===200){
																			var fanhui = JSON.parse(hello.responseText);	
																			if(fanhui.success){
																			tishi(2,fanhui.msg,1500,"lanmu.php");

																			}else{
																			tishi(1,fanhui.msg,3000);

																			}


																		}
																}
															}
								
								
								
							}
							z++;
							  } 
						}

					}
		/*主栏目添加*/
				
				function zjilutj(){
							var xuhao = byId("yiqi-js-xuhao").value,
								title = byId("yiqi-js-title").value;
						if(title==""){
						   		tishi(1,"标题都不填，添加个啥",2000);
						   }else{
							var tj = new XMLHttpRequest;
								tj.open("POST","tianjia.php");
								tj.setRequestHeader("Content-type","application/x-www-form-urlencoded");
								tj.send("xuhao=" + xuhao
										+"&title=" + title
									   );
								tj.onreadystatechange=function(){
																if(tj.readyState===4){
																		if(tj.status===200){
																			var fanhui = JSON.parse(tj.responseText);	
																			if(fanhui.success){
																			tishi(2,fanhui.msg,1500,"zlanmu.php");

																			}else{
																			tishi(1,fanhui.msg,3000);

																			}


																		}
																}
															}
					
					
					
					
					
					
					
					
						   }
					
					
					
					
				}






/*子栏目添加*/
				
				function jilutj(){
							var xuhao = byId("yiqi-js-xuhao").value,
								url = byId("yiqi-js-url").value,
								ico = byId("yiqi-js-ico").value,
								title = byId("yiqi-js-title").value,
								content = byId("yiqi-js-content").value,
								xuanzhe = byId("yiqi-js-xuanze").value;
						if(title==""){
						   		tishi(1,"标题都不填，添加个啥",2000);
						   }else{
							var tj = new XMLHttpRequest;
								tj.open("POST","tianjia.php");
								tj.setRequestHeader("Content-type","application/x-www-form-urlencoded");
								tj.send("xuhao=" + xuhao
									   	+"&url=" + url
										+"&ico=" + ico
										+"&title=" + title
										+"&content=" + content
										+"&xuanzhe=" + xuanzhe
									   );
								tj.onreadystatechange=function(){
																if(tj.readyState===4){
																		if(tj.status===200){
																			var fanhui = JSON.parse(tj.responseText);	
																			if(fanhui.success){
																			tishi(2,fanhui.msg,1500,"lanmu.php");

																			}else{
																			tishi(1,fanhui.msg,3000);

																			}


																		}
																}
															}
					
					
					
					
					
					
					
					
						   }
					
					
					
					
				}