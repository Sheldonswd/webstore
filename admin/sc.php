<?php require_once("../conn/conn.php");?>
<?php
	session_start();
	@$user=$_SESSION['user'];
	if($user==""){
		echo '<meta charset="utf-8">';
		echo '<link href="../style/yiqi.css" rel="stylesheet" />';
		echo '<script type="text/JavaScript" src="../js/yiqi.js"></script>';
		echo '<body></body>';
		echo '<script type="text/javascript">';
		echo 'tishi(1,"非法操作已记录ip地址",3000);';
	 echo '</script>';
	}else{
		@$lmid=intval($_POST['lmid']);
		@$lmzid=intval($_POST['lmzid']);
		if(@$lmid){
			$sql="delete from leibie where Id=$lmid";
			$zxsql=mysql_query($sql);
			if($zxsql){
				echo '{"success":true,"msg":"删除成功"}';
			}else{
				echo '{"success":false,"msg":"栏目删除失败"}'; 
			}
			
		}elseif(@$lmzid){
			$sql="delete from daohang where Id=$lmzid";
			$zxsql=mysql_query($sql);
			if($zxsql){
				echo '{"success":true,"msg":"删除成功"}';
			}else{
				echo $sql;
				echo '{"success":false,"msg":"子栏目删除失败"}'; 
			}
		}
		
		
		
		
	}
	
	



	

?>