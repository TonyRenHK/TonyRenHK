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
/*
	date_default_timezone_set("Asia/Hong_Kong");
	$host="localhost";
	$ser="sduuser";
	$pass="Policy21!!!!";
	$db="sdu";
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
	$ans = array();
*/
?>
<head>
	<title>2014年有關住屋狀況的主題性住戶統計調查</title>
	<!--
	<meta name="viewport" content="width=device-width, initial-scale=2.0, minimum-scale=2.0, maximum-scale=2.0, user-scalable=no">
	-->
	<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0, user-scalable=yes">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="jquery-1.11.1.js"></script>
	<script type="text/javascript" src="sdu.js"></script> 
	<link rel="stylesheet" type="text/css" href="sdu.css" />
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
  
</head>
<body>
<form name = "sduform" id = "sduform" method = "post">
<?php
	foreach ($_POST as $key => $value) {
		$_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
	}


$login = 0;

if (@$_POST["log"] == "log") {
$login = 1;
}
if (@$_POST["sub"] == "登入") {
include "login.php";
}
if ($login == 0) {
?>
<br /><br />
<center>
<h1>2014年有關住屋狀況的主題性住戶統計調查</h1>
</center>
<br /><br /><br />
<div class = "midcen">
<table class = "bor fif midcen">
	<tr>
		<td>訪問員號碼</td>
		<td><input type = "text" name = "eno" id = "eno" ></td>
	</tr>
	<tr>
		<td>密碼</td>
		<td><input type = "password" name = "pass" id = "pass" ></td>
	</tr>
</table>
</div>
<br /><br /><br />
<center>
<input type = "submit" name = "sub" id = "sub" value = "登入">
</center>
<?php
} else {
?>
<input type = "hidden" name = "log" id = "log" value = "log" >
<?php
include "sql.php";
include "header.php";

include "sel.php";
include "sc.php";
//include "showqustat.php";
include "pq.php";
include "qustat.php";
//include "showhhstat.php";
include "pa.php";
include "pb.php";
include "pc.php";
include "hhstat.php";
@mysql_free_result($result);
?>


<div class = "cen">
<input type = "submit" name = "sub" id = "sub" value = "提交">
</div>
<?php
}
?>
<br />
<br />
</form>
<div class = "cen">
2014年有關住屋狀況的主題性住戶統計調查
</div>
<br />
<br />
</body>
</html>