<!doctype html>
<?php
require_once("../conn/conn.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>一奇网站导航后台管理</title>
		<link href="../style/reset.css" rel="stylesheet" />
	  	<link href="./style/lanmu.css" rel="stylesheet" />
		<link href="../style/yiqi.css" rel="stylesheet" />
</head>
<?php session_start();
	@$user=$_SESSION['user'];
	if($user==""){
		header('Location:login.php');
	}
?>
<script type="text/JavaScript" src="../js/yiqi.js"></script>
<body bgcolor="#f5f5f5">
	<div class="box">
		<div class="head">
			<div class="lanmu-deleteall" onclick="zscall()"><p>删除选中</p></div>
			<div class="lanmu-tianjia" onClick="xstjk()"><p>添加</p></div>
		</div>
			<div id="lanmu-content">
			
				<?php
				$sql="select * from leibie ORDER BY xuhao";
				$zxsql=mysql_query($sql);
				$i=0;
				echo "<div class=\"lanmu-content\" id=\"daohang-buttom-0\">";
						echo "<div class=\"lanmu-head\" align=\"center\" onClick=\"daohangss(0)\"><h1>栏目管理</h1><img src=\"../images/icon/xia.png\"></div>";
						echo "<div class=\"lanmu-table\">";
						echo "<table width=\"98%\">";
						echo "<tr bgcolor=\"#f5f5f5\" height=\"50px\">";
						echo "<td width=\"5%\" class=\"yiqi-xuanzhe\"><input type=\"checkbox\" id=\"allcheckbox0\" onclick=\"ckAll(0)\" /></td>";
						echo "<td width=\"10%\">排序</td>";
						echo "<td width=\"50%\">标题</td>";
						echo "<td width=\"20%\">操作</td>";
						echo "</tr>";
						while($hqsql=mysql_fetch_assoc($zxsql)){
								$dtitle=htmlentities($hqsql['title']);
								$xuhao=$hqsql['xuhao'];
								$lmid=$hqsql['Id'];
								echo "<tr id='z$lmid'>";
								echo "<td  class=\"yiqi-xuanzhe\"><input type=\"checkbox\" class=\"js-check$i\" value=\"$lmid\"/></td>";
								echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$xuhao\"></td>";
								echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$dtitle\"></td>";
								echo "<td id=\"table-input\"><input type=\"submit\" value=\"保存\" onClick=\"zlanmubaocun($lmid)\"><input type=\"submit\" value=\"删除\" onClick=\"zlanmushanchu($lmid)\"></td>";
						echo "</tr>";
						}
						echo "</table>";
						echo "</div></div>";
				?>
	
		</div>
	</div>
	<div id="yiqi-tijiaok" style="display: none;">
		<div class="yiqi-tijiaok-head"><p>添加记录</p></div>
		<div class="yiqi-tijiaok-input" align="center">
			<input type="text" placeholder="序号" id="yiqi-js-xuhao">
			<input type="text" placeholder="标题" id="yiqi-js-title">
		</div>
		<div class="yiqi-tijiaok-tj" align="center">
			<div class="yiqi-tijiaok-btn yiqi-tijiaok-yes" onClick="zjilutj()">确定</div>
			<div class="yiqi-tijiaok-btn yiqi-tijiaok-no" onClick="jiluqx()">取消</div>
		</div>
	</div>
	
	
	<?php require_once("buttom.php")?>
</body>
<script type="text/javascript" src="js/lanmu.js"></script>
<script type="text/javascript">
					/*全选和反选*/
						function ckAll(id){
							var check = byId("allcheckbox"+id).checked;
							var qtcheck = byId("daohang-buttom-"+id).getElementsByClassName("js-check"+id);
								id++;
							for(var i=0;i<=qtcheck.length;i++){
								qtcheck[i].checked=check;
							}
							}
			var daohangquanbu = byId("lanmu-content").getElementsByClassName("lanmu-content"),
			daohanglen=daohangquanbu.length;		//获取一共多少个栏目
			
			var daohanght = 0;
			var lanmuht = new Array();
			for(var h=0;h<daohanglen;h++){
				lanmuht[h]="a"+h;
			}
			function daohangss(id){
					var buttom = byId("daohang-buttom-" + id);	//获取栏目
						var heighT=buttom.offsetHeight;		//获取栏目的高
				
			
						if(heighT>63){						//如果栏目的高大于83
							lanmuht[id]=heighT;
							
							buttom.style.height=60+"px";	
						
						}else{
							buttom.style.height=lanmuht[id]+"px";
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