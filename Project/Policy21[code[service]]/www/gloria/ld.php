<?php
	date_default_timezone_set("Asia/Hong_Kong");
	$host="localhost";
	$ser="root";
	$pass="Policy21!!!!";
	$db="smhs";
	$link = @mysql_connect($host, $ser, $pass) or die("Could not connect");
	mysql_select_db($db,$link) or die("Could not connect database");
	mysql_query("set names utf8");
	$ans = array();
	$sql = "";
	if ((isset($_POST["addr"]))) {
		$sql = "select * from smhsdb where sc = '".@$_POST["addr"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0) {
			$ans = mysql_fetch_assoc($result);
		}
	}
	mysql_free_result($result);	
	mysql_close($link);
?>