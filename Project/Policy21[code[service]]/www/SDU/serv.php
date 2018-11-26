<?php
	date_default_timezone_set("Asia/Hong_Kong");
	$host="localhost";
	$ser="sdususer";
	$ser="root";
	$pass="Policy21!!!!";
	$db="sdu";
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
?>