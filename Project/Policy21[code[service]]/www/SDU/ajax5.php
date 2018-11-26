<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	$sc = "3".$_POST["sc1"].$_POST["sc2"]."0000";
	$bsc = "3".$_POST["bsc1"].$_POST["bsc2"]."0000";
	$sql = "update address set `bind` = '".$sc."' where `code` = '".$bsc."'";
	$result = mysql_query($sql,$link);
	if (!($result == FALSE)) {
		echo $bsc;
	} else {
		echo "0";
	}
	$sql = "update address set `nf` = '".date("Y-m-d H:i:s", time())."' where `code` = '".$bsc."'";
	$result = mysql_query($sql,$link);
	
	
?>