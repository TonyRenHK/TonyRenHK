<!---sc  in  nondomesticsc,-->

<?php
     error_reporting(0);
	function get_sc($link) {
		$e_num = "";
		$e_num = @htmlspecialchars($_POST["eno"], ENT_QUOTES);
		$sql = "BEGIN";
		mysql_query($sql,$link) or die (mysql_error());
		$sql = "SET AUTOCOMMIT=0";
		mysql_query($sql,$link) or die (mysql_error());
		$sql="select * from nondomesticsc where ((status <> 'C' and status <> 'UK' and status <> 'NSP' and status <> 'NE' and status <> 'COM' and status <> 'PC' and status <> 'AP') or status IS Null) and flag IS Null and (assign IS Null or assign = '".$e_num."') order by rand() LIMIT 1 FOR UPDATE";
		//echo $sql;
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows < 1) {
			$sql = "COMMIT";
			mysql_query($sql,$link) or die (mysql_error());
			$sql = "SET AUTOCOMMIT=1";
			mysql_query($sql,$link) or die (mysql_error());
			return "x";
		}
		$row = mysql_fetch_row($result);
		$x = $row[1];
		$sql = "update nondomesticsc set flag = '1' where flag IS Null and sc = '".$x."'";
		mysql_query($sql,$link) or die (mysql_error());
		if (mysql_affected_rows()>0) {
			$sql = "COMMIT";
			$x = $row[1];
		} else {
			$sql = "ROLLBACK";
			$x = "xx";
		}
		mysql_query($sql,$link) or die (mysql_error());
		$sql = "SET AUTOCOMMIT=1";
		mysql_query($sql,$link) or die (mysql_error());
		return $x;
	}

if (!(isset($_POST["login"]))) {
	if ((@$_POST["pass"] == "policy21")&&(@$_POST["eno"] != "")&&(strlen(@$_POST["eno"]) < 6)) {
		$eno = $_POST["eno"];
		$_POST["login"] = true;
		$x = get_sc($link);
		while ($x == "xx") {
			$x = get_sc($link);
		}
		if ($x == "x") {
			echo "<p class = \"warning\">No Sample now!</p>";
		}
		$sc = $x;
			$sqlx = "select scx from nondomesticsc where sc = '".$sc."'";
			$resultx = mysql_query($sqlx,$link);
			$num_rowsx = mysql_num_rows($resultx);
			if ($num_rowsx > 0) {
			$rowx = mysql_fetch_row($resultx);	
			}
			$scx = @$rowx[0];
	}
} else {

	foreach ($_POST as $key => $value) {
		$_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
	}

	$sc = "";
	$eno = $_POST["eno"];
	$ttt = time();
	$edday = date("Y-m-d",$ttt);
	$edtime = date("H:i",$ttt);
	
	if ((isset($_POST["sub"]))||(isset($_POST["sub1"]))) {
		$sql = "insert into nondomesticstatus(sc,status,st,ed,apd,aph,apm,eno,nam,sttt,edtt,remark) values ('".$_POST["sc"]."','".$_POST["stat"]."','".$_POST["stday"]." ".$_POST["sttime"]."','".$edday." ".$edtime."','".$_POST["datepicker"]."','".$_POST["hh"]."','".$_POST["mm"]."','".$_POST["eno"]."','".$_POST["nam"]."','".$_POST["tt"]."','".$ttt."','".$_POST["remark"]."')";

		$result = mysql_query($sql,$link);
		$sql = "insert into nondomesticdbbk(sc,eno,interviewee,position,status,st,ed,q1_1a,q1_1b_1,q1_1b_2,q1_1b_3,q1_1b_4,q1_1b_5,q1_1b_5a,q1_1b_6,q2a,q2a_34,q2b,q3_1,q3_2,q3_3,q3_4,q4_1,q4_1a,q4_2,q4_2a,q4_3,q4_3a,q4_4,q4_4a,q4_5c,q4_5,q4_5a,q5,q5_e,q6_1,q6_2,q6_3,q6_4,q6_5,q6_6,q6_7,q6_7a,q7_1,q7_2,q7_3,q7_4,q7_5,q7_6,q7_7,q7_7a,q8,q8_a,q8_2,q9,q9_1a,q9_1b,q9_2)values ('".$_POST["sc"]."','".$_POST["eno"]."','".$_POST["interviewee"]."','".$_POST["position"]."','".$_POST["stat1"]."','".$_POST["stday"]." ".$_POST["sttime"]."','".$edday." ".$edtime."','".$_POST["q1_1a"]."','".$_POST["q1_1b_1"]."','".$_POST["q1_1b_2"]."','".$_POST["q1_1b_3"]."','".$_POST["q1_1b_4"]."','".$_POST["q1_1b_5"]."','".$_POST["q1_1b_5a"]."','".$_POST["q1_1b_6"]."','".$_POST["q2a"]."','".$_POST["q2a_34"]."','".$_POST["q2b"]."','".$_POST["q3_1"]."','".$_POST["q3_2"]."','".$_POST["q3_3"]."','".$_POST["q3_4"]."','".$_POST["q4_1"]."','".$_POST["q4_1a"]."','".$_POST["q4_2"]."','".$_POST["q4_2a"]."','".$_POST["q4_3"]."','".$_POST["q4_3a"]."','".$_POST["q4_4"]."','".$_POST["q4_4a"]."','".$_POST["q4_5c"]."','".$_POST["q4_5"]."','".$_POST["q4_5a"]."','".$_POST["q5"]."','".$_POST["q5_e"]."','".$_POST["q6_1"]."','".$_POST["q6_2"]."','".$_POST["q6_3"]."','".$_POST["q6_4"]."','".$_POST["q6_5"]."','".$_POST["q6_6"]."','".$_POST["q6_7"]."','".$_POST["q6_7a"]."','".$_POST["q7_1"]."','".$_POST["q7_2"]."','".$_POST["q7_3"]."','".$_POST["q7_4"]."','".$_POST["q7_5"]."','".$_POST["q7_6"]."','".$_POST["q7_7"]."','".$_POST["q7_7a"]."','".$_POST["q8"]."','".$_POST["q8_a"]."','".$_POST["q8_2"]."','".$_POST["q9"]."','".$_POST["q9_1a"]."','".$_POST["q9_1b"]."','".$_POST["q9_2"]."')";
		
//		echo $sql;		
		$result = mysql_query($sql,$link);
		$sql = "select * from nondomesticdb where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);	
/*		
		$result = mysql_query($sql,$link);
		$sql = "select * from nondomesticdbbk where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
*/		
		if ($num_rows > 0) {
		
		$sql = " UPDATE `nondomestic`.`nondomesticdb`SET `sc` = '".@$_POST["sc"]."',`eno` = '".@$_POST["eno"]."',`interviewee` = '".@$_POST["interviewee"]."',`position` = '".@$_POST["position"]."',`status` = '".@$_POST["stat1"]."',`st` = '".@$_POST["stday"]."',`ed` = '".@$_POST["edday."]."',`q1_1a` = '".@$_POST["q1_1a"]."',`q1_1b_1` = '".@$_POST["q1_1b_1"]."',`q1_1b_2` = '".@$_POST["q1_1b_2"]."',`q1_1b_3` = '".@$_POST["q1_1b_3"]."',`q1_1b_4` = '".@$_POST["q1_1b_4"]."',`q1_1b_5` = '".@$_POST["q1_1b_5"]."',`q1_1b_5a` = '".@$_POST["q1_1b_5a"]."',`q1_1b_6` = '".@$_POST["q1_1b_6"]."',`q2a` = '".@$_POST["q2a"]."',`q2a_34` = '".@$_POST["q2a_34"]."',`q2b` = '".@$_POST["q2b"]."',`q3_1` = '".@$_POST["q3_1"]."',`q3_2` = '".@$_POST["q3_2"]."',`q3_3` = '".@$_POST["q3_3"]."',`q3_4` = '".@$_POST["q3_4"]."',`q4_1` = '".@$_POST["q4_1"]."',`q4_1a` = '".@$_POST["q4_1a"]."',`q4_2` = '".@$_POST["q4_2"]."',`q4_2a` = '".@$_POST["q4_2a"]."',`q4_3` = '".@$_POST["q4_3"]."',`q4_3a` = '".@$_POST["q4_3a"]."',`q4_4` = '".@$_POST["q4_4"]."',`q4_4a` = '".@$_POST["q4_4a"]."',`q4_5c` = '".@$_POST["q4_5c"]."',`q4_5` = '".@$_POST["q4_5"]."',`q4_5a` = '".@$_POST["q4_5a"]."',`q5` = '".@$_POST["q5"]."',`q5_e` = '".@$_POST["q5_e"]."',`q6_1` = '".@$_POST["q6_1"]."',`q6_2` = '".@$_POST["q6_2"]."',`q6_3` = '".@$_POST["q6_3"]."',`q6_4` = '".@$_POST["q6_4"]."',`q6_5` = '".@$_POST["q6_5"]."',`q6_6` = '".@$_POST["q6_6"]."',`q6_7` = '".@$_POST["q6_7"]."',`q6_7a` = '".@$_POST["q6_7a"]."',`q7_1` = '".@$_POST["q7_1"]."',`q7_2` = '".@$_POST["q7_2"]."',`q7_3` = '".@$_POST["q7_3"]."',`q7_4` = '".@$_POST["q7_4"]."',`q7_5` = '".@$_POST["q7_5"]."',`q7_6` = '".@$_POST["q7_6"]."',`q7_7` = '".@$_POST["q7_7"]."',`q7_7a` = '".@$_POST["q7_7a"]."',`q8` = '".@$_POST["q8"]."',`q8_a` = '".@$_POST["q8_a"]."',`q8_2` = '".@$_POST["q8_2"]."',`q9` = '".@$_POST["q9"]."',`q9_1a` = '".@$_POST["q9_1a"]."',`q9_1b` = '".@$_POST["q9_1b"]."',`q9_2` = '".@$_POST["q9_2"]."', where sc = '".$_POST["sc"]."'";
	} else {
		$sql = "insert into nondomesticdb(sc,eno,interviewee,position,status,st,ed,q1_1a,q1_1b_1,q1_1b_2,q1_1b_3,q1_1b_4,q1_1b_5,q1_1b_5a,q1_1b_6,q2a,q2a_34,q2b,q3_1,q3_2,q3_3,q3_4,q4_1,q4_1a,q4_2,q4_2a,q4_3,q4_3a,q4_4,q4_4a,q4_5c,q4_5,q4_5a,q5,q5_e,q6_1,q6_2,q6_3,q6_4,q6_5,q6_6,q6_7,q6_7a,q7_1,q7_2,q7_3,q7_4,q7_5,q7_6,q7_7,q7_7a,q8,q8_a,q8_2,q9,q9_1a,q9_1b,q9_2)values ('".$_POST["sc"]."','".$_POST["eno"]."','".$_POST["interviewee"]."','".$_POST["position"]."','".$_POST["stat1"]."','".$_POST["stday"]." ".$_POST["sttime"]."','".$edday." ".$edtime."','".$_POST["q1_1a"]."','".$_POST["q1_1b_1"]."','".$_POST["q1_1b_2"]."','".$_POST["q1_1b_3"]."','".$_POST["q1_1b_4"]."','".$_POST["q1_1b_5"]."','".$_POST["q1_1b_5a"]."','".$_POST["q1_1b_6"]."','".$_POST["q2a"]."','".$_POST["q2a_34"]."','".$_POST["q2b"]."','".$_POST["q3_1"]."','".$_POST["q3_2"]."','".$_POST["q3_3"]."','".$_POST["q3_4"]."','".$_POST["q4_1"]."','".$_POST["q4_1a"]."','".$_POST["q4_2"]."','".$_POST["q4_2a"]."','".$_POST["q4_3"]."','".$_POST["q4_3a"]."','".$_POST["q4_4"]."','".$_POST["q4_4a"]."','".$_POST["q4_5c"]."','".$_POST["q4_5"]."','".$_POST["q4_5a"]."','".$_POST["q5"]."','".$_POST["q5_e"]."','".$_POST["q6_1"]."','".$_POST["q6_2"]."','".$_POST["q6_3"]."','".$_POST["q6_4"]."','".$_POST["q6_5"]."','".$_POST["q6_6"]."','".$_POST["q6_7"]."','".$_POST["q6_7a"]."','".$_POST["q7_1"]."','".$_POST["q7_2"]."','".$_POST["q7_3"]."','".$_POST["q7_4"]."','".$_POST["q7_5"]."','".$_POST["q7_6"]."','".$_POST["q7_7"]."','".$_POST["q7_7a"]."','".$_POST["q8"]."','".$_POST["q8_a"]."','".$_POST["q8_2"]."','".$_POST["q9"]."','".$_POST["q9_1a"]."','".$_POST["q9_1b"]."','".$_POST["q9_2"]."')";
		}
		$result = mysql_query($sql,$link);
		
		$sql = "select * from  nondomesticsc where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0) {
		$row = mysql_fetch_row($result);
			if ((($row[5] == "C")||($row[5] == "PC")||($row[5] == "AP"))&&(($_POST["stat"] != "C")&&($_POST["stat"] != "PC")&&($_POST["stat"] != "AP"))) {
				$sql = "update  nondomesticsc set eno = '".$_POST["eno"]."', nam = '".$_POST["nam"]."', eno = '".$_POST["eno"]."', tt=now() where sc = '".$_POST["sc"]."'";
				$result = mysql_query($sql,$link);
			} else {
				$sql = "update  nondomesticsc set eno = '".$_POST["eno"]."', nam = '".$_POST["nam"]."', `status` = '".$_POST["stat"]."', eno = '".$_POST["eno"]."', tt=now() where sc = '".$_POST["sc"]."'";
				$result = mysql_query($sql,$link);
			}
		}
		$x = get_sc($link);
		while ($x == "xx") {
			$x = get_sc($link);
		}
		if ($x == "x") {
			echo "<p class = \"warning\">No Sample now!</p>";
		}
		$sc = $x;
			$sqlx = "select scx from nondomesticsc where sc = '".$sc."'";
			$resultx = mysql_query($sqlx,$link);
			$num_rowsx = mysql_num_rows($resultx);
			if ($num_rowsx > 0) {
			$rowx = mysql_fetch_row($resultx);	
			}
			$scx = @$rowx[0];
	}
	
	
	
	
if (isset($_POST["sub2"])) {
		if (strlen($_POST["tel"]) != 8) {
			echo "<p class = \"warning\">Invaild tel number!</p>";
			$sc ="";
		} else {
			$sql = "select * from nondomesticsc where sc = '".$_POST["tel"]."'";
			$result = mysql_query($sql,$link);
			$num_rows = mysql_num_rows($result);
			if ($num_rows < 1) {
				$sql = "insert into nondomesticsc (sc,flag) values ('".$_POST["tel"]."','1')";
				$result = mysql_query($sql,$link);
				$sc = $_POST["tel"];
				echo "<p class = \"warning\">Samlpe not in the list, sample added!</p>";
			} else {
				$row = mysql_fetch_row($result);
				if (((($row[5] == "C")||($row[5] == "PC")||($row[5] == "AP"))&&($row[2] != $_POST["eno"]))||($row[4]==1)) {
					echo "<p class = \"warning\">The number is using by the other</p>";
					$sc ="";
				} else {
					$sql = "update nondomesticsc set flag = '1' where sc = '".$_POST["tel"]."'";
					$result = mysql_query($sql,$link);
					$sc = $_POST["tel"];
			$sqlx = "select scx from nondomesticsc where sc = '".$sc."'";
			$resultx = mysql_query($sqlx,$link);
			$num_rowsx = mysql_num_rows($resultx);
			if ($num_rowsx > 0) {
			$rowx = mysql_fetch_row($resultx);	
			}
			$scx = @$rowx[0];
				}
			}
		}
	}
	if (isset($_POST["sub3"])) {
		$x = get_sc($link);
		while ($x == "xx") {
			$x = get_sc($link);
		}
		if ($x == "x") {
			echo "<p class = \"warning\">No Sample now!</p>";
		}
		$sc = $x;
		$sqlx = "select id from nondomesticsc where sc = '".$sc."'";
		$resultx = mysql_query($sqlx,$link);
		$num_rowsx = mysql_num_rows($resultx);
		if ($num_rowsx > 0) {
			$rowx = mysql_fetch_row($resultx);
		}
		$ll = @strlen($rowx[0]);
//		$scx = "SC";
//		for ($x = 0 ; $x < 6 - $ch_row($resultx);	
//			}
//			$scx .= @$rowx[0];
//				}
//			}

			$sqlx = "select scx from nondomesticsc where sc = '".$sc."'";
			$resultx = mysql_query($sqlx,$link);
			$num_rowsx = mysql_num_rows($resultx);
			if ($num_rowsx > 0) {
			$rowx = mysql_fetch_row($resultx);	
			}
			$scx = @$rowx[0];

	}
	
	if (($sc != "x")&&($sc != "xx")) {
		$sql = "select * from nondomesticdb where sc = '".$sc."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0) {
			$ans = mysql_fetch_assoc($result);
		}
	}
	if ($sc != $_POST["sc"]) {
		$sql = "update nondomesticsc set flag = '2' where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
	}
}
?>	