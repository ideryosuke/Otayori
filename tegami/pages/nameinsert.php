<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("meibo",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(name) VALUE(\"$_POST[name]\")",$cn);
	}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/home.css" />
	<title>入居者登録</title>
	<script type="text/javascript"><!--
		//　イメージポップアップ表示
		function ImageUp() {
		window.open("tenant.php","window1","width=800,height=650,scrollbars=1");
		}
		// -->
	</script>
<style type="text/css">
 <!--
select.sizechange{
 font-size:100%;
 }
 .namelist1{
 	margin-top:30px;
 }
 -->
 </style>
</head>
<body bgcolor="#ff7f50"><br>
	<h1 align="center"></h1>
	<form method="post" action="insert.php"id="form">

	<div class="namelist1" align="center"> 
		<b>名前：</b><input type="text" name="name" size="15" style="width:150px;height:23px;" id="textbox"><br>
		<b>号室：</b><input type="text" name="roomno" size="15" style="width:150px;height:23px;" id="textbox"><br><br>
		<input type="image" src="../img/submit.png" name="send" id="send" width="100">
	</div>
	</form>
	<!--<a href="javascript:ImageUp();"><img src="../img/submit.png" width="100" alt=""></a>-->
</body>
</html>