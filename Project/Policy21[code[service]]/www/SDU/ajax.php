<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	$ca = "<option value = \"\"></option>\n";
	$st = "<option value = \"\"></option>\n";
	$bling = "<option value = \"\"></option>\n";
	$f = "<option value = \"\"></option>\n";
	$r = "<option value = \"\"></option>\n";
	$sc1 = "";
	$sc2 = "";
	$visit = "0";
	$sdu = "0";
	$sc3 = "<option value = \"00\">00</option>\n";
	$sc4 = "<option value = \"00\">00</option>\n";
	if (isset($_POST["dc"])&&$_POST["dc"]!="") {
		$sql = "select distinct ca from address where dc = '".$_POST["dc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		$ca = "<option value = \"\"></option>\n";
		if ($num_rows > 0) {
			for ($i = 0 ; $i < $num_rows ; $i++) {
				$row = mysql_fetch_row($result);
				$ca .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
			}
		}
		if (isset($_POST["ca"])&&$_POST["ca"]!="") {
			$sql = "select distinct st from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."'";
			$result = mysql_query($sql,$link);
			$num_rows = mysql_num_rows($result);
			$st = "<option value = \"\"></option>\n";
			if ($num_rows > 0) {
				for ($i = 0 ; $i < $num_rows ; $i++) {
					$row = mysql_fetch_row($result);
					$st .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
				}
			}
			if (isset($_POST["st"])&&$_POST["st"]!="") {
				$sql = "select distinct bling from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."'";
				$result = mysql_query($sql,$link);
				$num_rows = mysql_num_rows($result);
				$bling = "<option value = \"\"></option>\n";
				if ($num_rows > 0) {
					for ($i = 0 ; $i < $num_rows ; $i++) {
						$row = mysql_fetch_row($result);
						$bling .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
					}
				}
				if (isset($_POST["bling"])&&$_POST["bling"]!="") {
//					$sql = "select distinct f from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."' and (nf <> '-2' or nf is null)";
					$sql = "select distinct f from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."'";
					$result = mysql_query($sql,$link);
					$num_rows = mysql_num_rows($result);
					$f = "<option value = \"\"></option>\n";
					if ($num_rows > 0) {
						for ($i = 0 ; $i < $num_rows ; $i++) {
							$row = mysql_fetch_row($result);
							$f .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
						}
					}
					$sql = "select distinct code1 from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."'";
					$result = mysql_query($sql,$link);
					$num_rows = mysql_num_rows($result);
					if ($num_rows > 0) {
						$row = mysql_fetch_row($result);
						$sc1 = $row[0]; 
					}
					if (isset($_POST["f"])&&$_POST["f"]!="") {
						$sql = "select distinct r from address where  dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."' and f = '".$_POST["f"]."'";
						$result = mysql_query($sql,$link);
						$num_rows = mysql_num_rows($result);
						$r = "<option value = \"\"></option>\n";
						if ($num_rows > 0) {
							for ($i = 0 ; $i < $num_rows ; $i++) {
								$row = mysql_fetch_row($result);
								$r .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
							}
						}
						if (isset($_POST["r"])&&$_POST["r"]!="") {
							$sql = "select distinct code2 from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."'and f = '".$_POST["f"]."'and r = '".$_POST["r"]."'";
							$result = mysql_query($sql,$link);
							$num_rows = mysql_num_rows($result);
							if ($num_rows > 0) {
								$row = mysql_fetch_row($result);
								$sc2 = $row[0]; 
							}
							$sql = "select distinct visit,sdu from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."' and f = '".$_POST["f"]."' and r = '".$_POST["r"]."' and code3 = '00'";
							$result = mysql_query($sql,$link);
							if ($num_rows > 0) {
								$row = mysql_fetch_row($result);
								$visit = $row[0] == ""?"0":"1"; 
								$sdu = $row[1] == ""?"0":"1";  
							}
							$sql = "select distinct code3 from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."' and f = '".$_POST["f"]."' and r = '".$_POST["r"]."' and code3 <> '00'";
							$result = mysql_query($sql,$link);
							$num_rows = mysql_num_rows($result);
							$zero = 1;
							if ($num_rows > 0) {
								$zero = 0;
								//$sc3 = "<option value = \"\"></option>\n";
								$sc3 = "";
								for ($i = 0 ; $i < $num_rows ; $i++) {
									$row = mysql_fetch_row($result);
									$sc3 .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
								}
							}
							//echo $_POST["sc3"];
							if (isset($_POST["sc3"])&&$_POST["sc3"]!="") {
								if (($_POST["sc3"] == "00")&&($zero == 0)) {
									$_POST["sc3"] = "01";
								}
								$sql = "select distinct code4 from address where dc = '".$_POST["dc"]."' and ca = '".$_POST["ca"]."' and st = '".$_POST["st"]."' and bling = '".$_POST["bling"]."' and f = '".$_POST["f"]."' and r = '".$_POST["r"]."' and code3 = '".$_POST["sc3"]."' and code4 <> '00'";
								//echo $sql;
								$result = mysql_query($sql,$link);
								$num_rows = mysql_num_rows($result);
								if ($num_rows > 0) {
									//$sc4 = "<option value = \"\"></option>\n";
									$sc4 = "";
									for ($i = 0 ; $i < $num_rows ; $i++) {
										$row = mysql_fetch_row($result);
										$sc4 .= "<option value = \"".$row[0]."\">".$row[0]."</option>\n"; 
									}
								}
							}
							
							
						}
					}	
				}	
			}
		}
	}
	echo $ca;
	echo ":";
	echo $st;
	echo ":";
	echo $bling;
	echo ":";
	echo $f;
	echo ":";
	echo $r;
	echo ":";
	echo $sc1;
	echo ":";	
	echo $sc2;
	echo ":";
	echo $visit;
	echo ":";
	echo $sdu;
	echo ":";
	echo $sc3;
	echo ":";	
	echo $sc4;
	echo ":";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	mysql_close($link);
	
	
	
?>