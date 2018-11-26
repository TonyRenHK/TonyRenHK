<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	$dc = "";
	$ca = "";
	$st = "";
	$bling = "";
	$f = "";
	$r = "";
	$cas = "<option value = \"\"> </option>\n";
	$sts = "<option value = \"\"> </option>\n";
	$blings = "<option value = \"\"> </option>\n";
	$fs = "<option value = \"\"> </option>\n";
	$rs = "<option value = \"\"> </option>\n";
	$sc1 = "";
	$sc2 = "";
	$visit = "0";
	$sdu = "0";
	$sc3 = "<option value = \"00\">00</option>\n";
	$sc4 = "<option value = \"00\">00</option>\n";
	
	$s = $_POST["search"];
	$x = strlen($s);
	$code1 = "";
	$code2 = "";
	$code3 = "";
	$code4 = "";
	$res = 0;
	//echo $x;
	switch($x) {
		case 1  : $res = 0;break;
		case 6  : $code1 = substr($s,1,5);break;
		case 10 : $code1 = substr($s,1,5);$code2 = substr($s,6,4);break;
		case 12 : $code1 = substr($s,1,5);$code2 = substr($s,6,4);$code3 = substr($s,10,2);break;
		case 14 : $code1 = substr($s,1,5);$code2 = substr($s,6,4);$code3 = substr($s,10,2);$code4 = substr($s,12,2);break;
		default : $res = 0;
	}
//	echo $s;
//	echo $x." ";
//	echo $code1." ";
//	echo $code2." ";
//	echo $code3." ";
//	echo $code4." ";
	$sql = "";
	switch($x) {
		case 6  : $sql = "select distinct dc, ca, st, bling from address where code1 = '".$code1."'";break;
		case 10 : $sql = "select distinct dc, ca, st, bling, f, r from address where code1 = '".$code1."' and code2 = '".$code2."'";break;
		case 12 : $sql = "select distinct dc, ca, st, bling, f, r, code3 from address where code1 = '".$code1."' and code2 = '".$code2."' and code3 = '".$code3."'";break;
		case 14 : $sql = "select distinct dc, ca, st, bling, f, r, code3, code4 from address where code1 = '".$code1."' and code2 = '".$code2."' and code3 = '".$code3."' and code4 = '".$code4."'";break;
	}
	echo $sql;
	$result = mysql_query($sql,$link);
	$num_rows = 0;
	if (!($result == FALSE)) {
		$num_rows = mysql_num_rows($result);
	}
	if ($num_rows > 0) {
		$res = 1;
		$row = mysql_fetch_row($result);
		$dc = $row[0];
		$ca = $row[1];
		$st = $row[2];
		$bling = $row[3];
		if ($x >= 10) {
			$res = 2;
			$f = $row[4];
			$r = $row[5];
		}
		if ($x >= 12) {
			$res = 3;
		}
		if ($x >= 14) {
			$res = 4;
		}
	}
	echo ($res == 0)?$res.":":$res.":".$dc.":".$ca.":".$st.":".$bling.":".$f.":".$r.":".$code3.":".$code4.":";
	
	$sql = "select distinct ca from address where dc = '".$dc."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$cas = "<option value = \"\"> </option>\n";
	if ($num_rows > 0) {
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$cas .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}	
	
	$sql = "select distinct st from address where dc = '".$dc."' and ca = '".$ca."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$sts = "<option value = \"\"> </option>\n";
	if ($num_rows > 0) {
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$sts .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}	

	$sql = "select distinct bling from address where dc = '".$dc."' and ca = '".$ca."' and st = '".$st."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$blings = "<option value = \"\"> </option>\n";
	if ($num_rows > 0) {
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$blings .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}	

	$sql = "select distinct f from address where dc = '".$dc."' and ca = '".$ca."' and st = '".$st."' and bling = '".$bling."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$fs = "<option value = \"\"> </option>\n";
	if ($num_rows > 0) {
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$fs .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}	

	$sql = "select distinct r from address where dc = '".$dc."' and ca = '".$ca."' and st = '".$st."' and bling = '".$bling."' and f = '".$f."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	$rs = "<option value = \"\"> </option>\n";
	if ($num_rows > 0) {
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$rs .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}	
	$sql = "select distinct code3 from address where dc = '".$dc."' and ca = '".$ca."' and st = '".$st."' and bling = '".$bling."' and f = '".$f."' and r = '".$r."' and code3 <> '00'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	if ($num_rows > 0) {
	$sc3 = "<option value = \"\"> </option>\n";
	$sc3 = "";
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$sc3 .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}	
	
	$sql = "select distinct code4 from address where dc = '".$dc."' and ca = '".$ca."' and st = '".$st."' and bling = '".$bling."' and f = '".$f."' and r = '".$r."' and code3 = '".$code3."' and code4 <> '00'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
	if ($num_rows > 0) {
	$sc4 = "<option value = \"\"> </option>\n";
	$sc4 = "";
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$row = mysql_fetch_row($result);
			$sc4 .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
		}
	}
	echo $cas.":".$sts.":".$blings.":".$fs.":".$rs.":".$sc3.":".$sc4.":";
	echo $code1.":".$code2.":";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	mysql_close($link);
	
	
	
?>