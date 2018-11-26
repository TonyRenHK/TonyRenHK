<!DOCTYPE html>
<html>
<?php

if($_SERVER["HTTPS"] != "on") {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
   exit();
}

	date_default_timezone_set("Asia/Hong_Kong");
	$host="localhost";
	$ser="root";
	$ser="wateruser";
	$pass="Policy21!!!!";
	$db="water";
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
	$ans = array();

?>
<head>
<title>用水意見調查-住宅用戶問卷</title>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery-1.11.1.js"></script>
	<script language="javascript" src="water.js"></script> 
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
<link rel="stylesheet" type="text/css" href="dome.css" />
</head>

<body>
<?php
	include "update.php";
if (!(isset($_POST["login"]))) {
?>
<form method = "post" name = "waterlogin" id = "waterlogin">
<?php
	include "header.php";
	include "login.php";
?>
</form>
<?php
} else {
?>
<form method = "post" name = "waterform" id = "waterform">


<?php
	include "header.php";
	include "data.php";
	include "tel.php";
	include "app.php";
	include "status.php";
	include "status1.php";
	include "main.php";
	
	

	include "status2.php";
?>


<center><input type = "submit" name = "sub" id = "sub" value = "提交"></center>
</form>
<?php
}
?>
</body>
</html>