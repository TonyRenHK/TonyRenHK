<!DOCTYPE html>
<html>
<?php

/*
if($_SERVER["HTTPS"] != "on") {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
   exit();
}
*/
	date_default_timezone_set("Asia/Hong_Kong");
	$host="localhost";
	$ser="root";
	$ser="ieapsuser";
	$pass="Policy21!!!!";
	$db="ieaps";
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
	$ans = array();

?>

<head>
	<title>「進一步鼓勵『自力更生綜合就業援助計劃』綜援受助人就業的獎勵計劃」調查</title>
	
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery.js"></script>
	<script language="javascript" src="ieaps.js"></script> 
	<link rel="stylesheet" type="text/css" href="ieaps.css" />
	<link rel="stylesheet" href="jquery-ui.css">
	<script src="jquery-ui.js"></script>
</head>


<body>
<?php
	include "update.php";
if (!(isset($_POST["login"]))) {
?>
<form method = "post" name = "ieapslogin" id = "ieapslogin">
<?php
	include "header.php";
	include "login.php";
?>
</form>
<?php
} else {
?>
<form method = "post" name = "ieapsform" id = "ieapsform">


<?php
	include "header.php";
	include "p1.php";	
	include "p2.php";	
	include "p3.php";	
	include "status.php";	

?>
<div id="subm" name = "waterform2" id = "waterform2">
<center><p><b>感謝參與<br>訪問完畢<br></b>
<input type = "submit" name = "sub" id = "sub5" value = "提交"></center>
</div>

</form>
<?php
}
?>
</body>
</html>