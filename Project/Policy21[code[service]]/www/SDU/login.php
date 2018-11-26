<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	
	$login = 0;
	
	$sql = "select * from eno where eno = '".$_POST["eno"]."' and pass = '".$_POST["pass"]."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$login = ($num_rows > 0)?1:0;

	