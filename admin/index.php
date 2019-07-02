<!doctype html>
<html>
<?php require_once("./head.php");?>
	<link href="../style/main.css" rel="stylesheet" />
<?php session_start();
	@$user=$_SESSION['user'];
	if($user==""){
		header('Location:login.php');
	}
?>
<script type="text/JavaScript" src="../js/yiqi.js"></script>
<body bgcolor="#F5F5F5">
	<div id="box">
				<div class="bottom">
			<div id="left">
				<div class="touxiang" align="center">
					<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=330729121&spec=5"  id="touxiang">
					<p>欢迎你<?php if(@$user){echo $user;}else{echo "游客";}?></p>
				</div>
				<div align="left" class="cebianlan">
					<ul>
						<li  onClick="Dqopen('../daohang.php')"><img src="../images/icon/zy.png"><a href="#">返回前台首页</a></li>
						<li onClick="iFrame('zlanmu.php')"><img src="../images/icon/love2.png"><a href="#">栏目管理</a></li>
						<li onClick="iFrame('lanmu.php')"><img src="../images/icon/chat.png"><a href="#">栏目链接管理</a></li>
					</ul>
				</div>
			</div>
			<div id="right">
				<iframe src='lanmu.php' width='100%' height='100%' frameborder='0' name="_blank" id="iFrame-content" ></iframe>
					
			</div>
		</div>
		<div class="head">
			<h1>一奇网站导航后台管理</h1>
			<div class="openclose" id="openclose">
				<img id="xiangleftright" src="../images/icon/candan.png">
			</div>
			<div class="head-right" align="center">
				<?php 
				if($user){
						echo "<p>$user</p>";
					}else{
					echo "<p onClick=\"iFrame('./login.php')\">登录</p>";
				}
				?>
				
				<img src="../images/icon/xia.png" onclick="xialadj()">
			</div>
			<div id="head-right-xiala" align="left" style="display: none;">
				
				<ul>
					<?php
						if($user){
							echo "<li onclick=\"Dqopen('./index.php');\">后台管理</li>";
							echo "<li onClick=\"iFrame('./xgpass.php');\">修改密码</li>";
							echo "<li onClick=\"Dqopen('./zx.php');\">注销</li>";
						}else{
							header('Location:login.php');
						}
					?>
					
					
					
				</ul>
				
			</div>
		</div>

		</div>
		
</body>

	<script type="text/JavaScript" src="../js/main.js"></script>
	<script type="text/JavaScript">
			var xialaheight = 0;
				xialadianji = byId("head-right-xiala");
				function xialadj(){
					if(xialadianji.style.display=="none"){
					   			xialadianji.style.display="block";
								xialaheight=byId("head-right-xiala").scrollHeight,
								xialadianji.style.height=0+"px";
								xialadianji.style.height=xialaheight+"px";
					   }else if(xialadianji.style.height=="0px"){
								xialadianji.style.height=xialaheight+"px";
						}else{
								xialaheight=byId("head-right-xiala").scrollHeight,
								xialadianji.style.height=0+"px";
					   }
					
				}
				

	</script>
</html>