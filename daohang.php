<!doctype html>
<html>
<?php require_once("./conn/conn.php")?>
<?php require_once("head.php")?>
<script type="text/JavaScript" src="js/yiqi.js"></script>
<body bgcolor="#f5f5f5">
	<div class="daohang-content" align="center">
		<form>
			<div class="baidu">
				<img src="images/bd_logo1.png">
				<input class="baidu-input-1" type="text" id="js-baidutext">
				<input class="baidu-input-2" type="submit" value="百度一下" id="js-baidubtn">
				<h3 id="js-baidushouye">设为首页</h3>
			</div>
		</form>	
		<div id="daohang-quanbu">
		<?php
			$sql="select * from leibie ORDER BY xuhao";
			$zxsql=mysql_query($sql);
			$i=0;
			while($hqsql=mysql_fetch_assoc($zxsql)){			
					$dtitle=$hqsql['title'];
					echo "<div class=\"daohang-buttom\" id=\"daohang-buttom-$i\">";
						echo "<h1 onClick=\"daohangss($i)\">$dtitle</h1><img src=\"images/icon/xia.png\" onClick=\"daohangss($i)\">";
						echo "<div class=\"content\">";
							$leibie=$hqsql['Id'];
							$sql2="select * from daohang where leibie=$leibie ORDER BY paixu";
							$zxsql2=mysql_query($sql2);
							while($hqsql2=mysql_fetch_assoc($zxsql2)){
								$url=htmlentities($hqsql2['url']);
								$ico=htmlentities($hqsql2['ico']);
								$title=htmlentities($hqsql2['title']);
								$content=htmlentities($hqsql2['content']);
								if($ico=="" && $content==""){
									echo "<div class=\"daohang-lianjie3\" align=\"left\" onClick=\"Newopen('$url')\">";
									echo "<div class=\"daohang-logo2\">";
								}elseif($ico=="" && $content!==""){
									echo "<div class=\"daohang-lianjie2\" align=\"left\" onClick=\"Newopen('$url')\">";
									echo "<div class=\"daohang-logo2\">";
								}else{
									echo "<div class=\"daohang-lianjie\" align=\"left\" onClick=\"Newopen('$url')\">";
									echo "<div class=\"daohang-logo\">";
									echo "<img src=\"$ico\">";
								}
								echo "<span>$title</span>";
								echo "</div>";
								
								echo "<div class=\"daohang-shuoming\">";
								if($content!==""){
									echo "<p>$content</p>";
								}
								echo "</div>";
								echo "</div>";
							}
						echo "</div>";
					echo "</div>";
				$i++;
			}	

			?>
			
		

		</div>
			<?php require_once("buttom.php")?>
	</div>

</body>
<!--一奇开源QQ330729121-->
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
			var baidubtn = byId("js-baidubtn");
				baidubtn.onclick=function(){
						var baidutext = byId("js-baidutext").value;
							Newopen("https://www.baidu.com/s?wd=" + baidutext);
				}
			document.onkeydown=function(){
           if (event.keyCode == 13){
				  var baidutext = byId("js-baidutext").value;
					Newopen("https://www.baidu.com/s?wd=" + baidutext);
			   		
           }
          }
			function daohangheight(){
					var z=0;
					for(var i=0;i<=daohanglen;i++){			//有多少栏目就循环几次
						var	daohangbuttom = byId("daohang-buttom-"+z),
							heighT=daohangbuttom.offsetHeight;
							daohangbuttom.style.height=heighT+"px";
							
							z++;
					}
			}
			daohangheight();
		
	</script>
</html>