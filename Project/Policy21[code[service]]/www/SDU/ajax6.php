<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	$bsc = $_POST["bsc"]."";
	$bsc = str_replace("\xef\xbb\xbf", '', $bsc);
	$sql = "update address set `bind` = '' where `code` = '".$bsc."'";
	$result = mysql_query($sql,$link);
	echo $sql;
	if (!($result == FALSE)) {
		echo $bsc;
	} else {
		echo "0";
	}
	$sql = "update address set `nf` = '".date("Y-m-d H:i:s", time())."' where `code` = '".$bsc."'";
	$result = mysql_query($sql,$link);
	
	
?>