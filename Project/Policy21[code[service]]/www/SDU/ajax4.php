﻿<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	
	$sql = "select * from address where code1 = '".$_POST["code1"]."' and code2 = '".$_POST["code2"]."' and code3 = '".$_POST["code3"]."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	if ($num_rows > 0) {
		$row = mysql_fetch_row($result);
		for ($i = 0 ; $i < $_POST["code4"] ; $i++){
			$s = $i+1;
			$s = $s+"";
			$x = (2 - strlen($s)); 
			for ($j = 1 ; $j <= $x ; $j++) {
				$s = "0".$s;
			}		
			$sql = "select * from address where code1 = '".$_POST["code1"]."' and code2 = '".$_POST["code2"]."' and code3 = '".$_POST["code3"]."' and code4 = '".$s."'";
			$result = mysql_query($sql,$link);
			$num_rows = mysql_num_rows($result);
			if ($num_rows == 0) {
				$sql = "insert into address (dc, ca, st, bling, f,r,code1,code2,code3,code4,code) values ('".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[6]."','".$row[7]."','".$row[8]."','".$row[9]."','".$s."','".$row[7].$row[8].$row[9].$s."')";
				$result = mysql_query($sql,$link);
				$sql = "update address set `nf` = '".date("Y-m-d H:i:s", time())."' where code = '".$row[7].$row[8].$row[9].$s."'";
				$result = mysql_query($sql,$link);
			}
		}
		$sql = "update address set `sdu` = '1' where code1 = '".$_POST["code1"]."' and code2 = '".$_POST["code2"]."' and code3 = '".$_POST["code3"]."' and code4 = '00'";
		$result = mysql_query($sql,$link);
		$sql = "update address set `nf` = '".date("Y-m-d H:i:s", time())."' where code1 = '".$_POST["code1"]."' and code2 = '".$_POST["code2"]."' and code3 = '".$_POST["code3"]."' and code4 = '00'";
		$result = mysql_query($sql,$link);
	}
	
	$sql = "select distinct code4 from address where code1 = '".$_POST["code1"]."' and code2 = '".$_POST["code2"]."' and code3 = '".$_POST["code3"]."' and code4 <> '00'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$sc4 = "";
	if ($num_rows > 0) {
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$sc4 .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}
	echo $sc4;
	echo ":";	
	
	
	
	mysql_close($link);	
	
	
	
?>