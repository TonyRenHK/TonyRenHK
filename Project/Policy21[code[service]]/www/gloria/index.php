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
	$ser="smhsuser";
	$pass="Policy21!!!!";
	$db="smhs";
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
	$ans = array();
*/
?>
<head>
	<title>香港/廣州居民健康調查</title>
	<!--
	<meta name="viewport" content="width=device-width, initial-scale=2.0, minimum-scale=2.0, maximum-scale=2.0, user-scalable=no">
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery-1.11.1.js"></script>
	<script type="text/javascript" language="javascript" src="smhs.js"></script> 
	<link rel="stylesheet" type="text/css" href="smhs.css" />
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
	<script src="jquery.ui.touch-punch.js"></script>

	
  <script>
 /* 
  $(function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 500,
      min: 1,
      max: 1000,
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.value );
      }
    });
    $( "#amount" ).val( "" + $( "#slider-range-min" ).slider( "value" ) );
	$( "#slider-range-min" ).css('background', 'rgb(119,0,0)');
	$( "#slider-range-min .ui-slider-range" ).css('background', 'rgb(0,109,42)');
	$( "#slider-range-min" ).css('border', '2px solid #385D8A');
	$( "#slider-range-min" ).find('a').css( "background-color", 'rgb(127,127,127)' );
	$( "#slider-range-min" ).find('a').css( "border-radius", "12px" );
	$( "#slider-range-min" ).find('a').css('border', '2px solid #385D8A');
	$( "#slider-range-min" ).find('a').css('background-image', 'none');
  });
  */

  </script>
  
</head>
<body>
<div class = "wrapper">
<!--
<p>
  <label for="amount">Maximum price:</label>
  <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
</p>
<table width = 45%>
<tr><td>
<div id="slider-range-min"></div>
</td>
</tr>
</table>
-->
<?php

if (!(isset($_POST["login"]))) {
	if ((@$_POST["pass"] == "policy21")&&(@$_POST["eno"] != "")&&(strlen(@$_POST["eno"]) < 6)) {
		$eno = $_POST["eno"];
		$_POST["login"] = true;
	}
}

if (!(isset($_POST["login"]))) {
	include "login.php";
} else {
?>
<form name = "smhsform" id = "smhsform" method = "post">
<input type = "hidden" name = "login" id = "login" value = "true">
<?php
if (!(isset($_POST["addr"]))) {
	if (@$_POST["sub"] == "提交") {
		include "sql.php";
	}
	include "sc.php";
} else {
	include "ld.php";
	include "filter.php";
	include "p1.php";
	include "p2.php";
	include "p3a.php";
//	include "p4a.php";
//	include "p5.php";

//	include "p4b.php";
	include "p10.php";
	include "p11a.php";

	include "p3b.php";
	include "p4c.php";
	include "p6.php";
	include "p7.php";
	include "p8.php";
	include "p9.php";

	include "p11b.php";

	include "stat.php";
}
?>
<center>
<input type = "submit" name = "sub" id = "sub" value = "提交">
</center>
<br />
<br />
</form>
<?php
}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</div>
</body>
</html>