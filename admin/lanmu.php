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
			<div class="lanmu-deleteall" onclick="scall()"><p>删除选中</p></div>
			<div class="lanmu-tianjia" onClick="xstjk()"><p>添加</p></div>
		</div>
			<div id="lanmu-content">
			<?php 
				$sql="select * from leibie ORDER BY xuhao";
				$zxsql=mysql_query($sql);
				$i=0;
				while($hqsql=mysql_fetch_assoc($zxsql)){
						$dtitle=htmlentities($hqsql['title']);
						$xuhao=$hqsql['xuhao'];
						echo "<div class=\"lanmu-content\" id=\"daohang-buttom-$i\">";
						echo "<div class=\"lanmu-head\" align=\"center\">";
						echo "<h1 onClick=\"daohangss($i)\">$dtitle</h1>";
						echo "<img src=\"../images/icon/xia.png\" onClick=\"daohangss($i)\"></div>";
						echo "<div class=\"lanmu-table\">";
						echo "<table width=\"98%\">";
						echo "<tr bgcolor=\"#f5f5f5\" height=\"50px\">";
						echo "<td width=\"5%\" class=\"yiqi-xuanzhe\"><input type=\"checkbox\" id=\"allcheckbox$i\" onclick=\"ckAll($i)\" /></td>";
						echo "<td width=\"5%\">排序</td>";
						echo "<td width=\"20%\">网址</td>";
						echo "<td width=\"10%\">图标</td>";
						echo "<td width=\"10%\">标题</td>";
						echo "<td>内容</td>";
						echo "<td width=\"15%\">操作</td>";
						echo "</tr>";
						$leibie=$hqsql['Id'];
						$sql2="select * from daohang where leibie=$leibie ORDER BY paixu";
						$zxsql2=mysql_query($sql2);
				
					while($hqsql2=mysql_fetch_assoc($zxsql2)){
								$url=htmlentities($hqsql2['url']);
								$ico=htmlentities($hqsql2['ico']);
								$title=htmlentities($hqsql2['title']);
								$content=htmlentities($hqsql2['content']);
								$paixu = $hqsql2['paixu'];
								$lmid=$hqsql2['Id'];
							
						echo "<tr id='z$lmid'>";
						echo "<td  class=\"yiqi-xuanzhe\"><input type=\"checkbox\" class=\"js-check$i\" value=\"$lmid\"/></td>";
						echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$paixu\"></td>";
						echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$url\"></td>";
						echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$ico\"></td>";
						echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$title\"></td>";
						echo "<td class=\"lanmu-input\"><input type=\"text\" value=\"$content\"></td>";
						echo "<td id=\"table-input\"><input type=\"submit\" value=\"保存\" onClick=\"lanmubaocun($lmid)\"><input type=\"submit\" value=\"删除\" onClick=\"lanmushanchu($lmid)\"></td>";
						echo "</tr>";
					
						
					}
						echo "</table>";
						echo "</div></div>";
					$i++;
						
				}
			?>
		<!--		<div class="lanmu-content" id="daohang-buttom-0">
					<div class="lanmu-head" align="center" onClick="daohangss(0)"><h1>学无止境</h1><img src="../images/icon/xia.png"></div>
					<div class="lanmu-table">
						<table width="98%">
							<tr bgcolor="#f5f5f5" height="50px">
								<td width="5%" class="yiqi-xuanzhe"><input type="checkbox" /></td>
								<td width="5%">排序</td>
								<td width="20%">网址</td>
								<td width="10%">图标</td>
								<td width="10%">标题</td>
								<td>内容</td>
								<td width="15%">操作</td>
							</tr>
							<tr>
								<td  class="yiqi-xuanzhe"><input type="checkbox" checked="true" /></td>
								<td class="lanmu-input"><input type="text" value="1"></td>
								<td class="lanmu-input"><input type="text" value="http://blog.csdn.net/"></td>
								<td class="lanmu-input"><input type="text" value="images/daohang/csdn.ico"></td>
								<td class="lanmu-input"><input type="text" value="CNDS"></td>
								<td class="lanmu-input"><input type="text" value="中国最大的IT社区和服务平台"></td>
								<td id="table-input"><input type="submit" value="保存"><input type="submit" value="删除"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="lanmu-content" id="daohang-buttom-1">
					<div class="lanmu-head" align="center" onClick="daohangss(1)"><h1>学无止境</h1><img src="../images/icon/xia.png"></div>
					<div class="lanmu-table">
						<table width="98%">
							<tr bgcolor="#f5f5f5" height="50px">
								<td width="5%" class="yiqi-xuanzhe"><input type="checkbox" /></td>
								<td width="5%">排序</td>
								<td width="20%">网址</td>
								<td width="10%">图标</td>
								<td width="10%">标题</td>
								<td>内容</td>
								<td width="15%">操作</td>
							</tr>
							<tr>
								<td  class="yiqi-xuanzhe"><input type="checkbox" /></td>
								<td class="lanmu-input"><input type="text" value="1"></td>
								<td class="lanmu-input"><input type="text" value="http://blog.csdn.net/"></td>
								<td class="lanmu-input"><input type="text" value="images/daohang/csdn.ico"></td>
								<td class="lanmu-input"><input type="text" value="CNDS"></td>
								<td class="lanmu-input"><input type="text" value="中国最大的IT社区和服务平台"></td>
								<td id="table-input"><input type="submit" value="保存"><input type="submit" value="删除"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>-->
		</div>
	</div>
	<div id="yiqi-tijiaok" style="display: none;">
		<div class="yiqi-tijiaok-head"><p>添加记录</p></div>
		<div class="yiqi-tijiaok-input" align="center">
			<select id="yiqi-js-xuanze">
				<?php
						$sql="select * from leibie ORDER BY xuhao";
						$zxsql=mysql_query($sql);
					while($hqsql=mysql_fetch_assoc($zxsql)){
						
						$lanmutitle=$hqsql['title'];
						$lanmuId=$hqsql['Id'];
						echo "<option value=\"$lanmuId\">$lanmutitle</option>";
					}
				?>
			</select>
			<input type="text" placeholder="序号" id="yiqi-js-xuhao">
			<input type="text" placeholder="网址" id="yiqi-js-url">
			<input type="text" placeholder="图标地址" id="yiqi-js-ico">
			<input type="text" placeholder="标题" id="yiqi-js-title">
			<input type="text" placeholder="内容" id="yiqi-js-content">
		</div>
		<div class="yiqi-tijiaok-tj" align="center">
			<div class="yiqi-tijiaok-btn yiqi-tijiaok-yes" onClick="jilutj()">确定</div>
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