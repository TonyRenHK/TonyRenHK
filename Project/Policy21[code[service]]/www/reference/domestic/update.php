<?php

	function get_sc($link) {
		$e_num = "";
		$e_num = @htmlspecialchars($_POST["eno"], ENT_QUOTES);
		$sql = "BEGIN";
		mysql_query($sql,$link) or die (mysql_error());
		$sql = "SET AUTOCOMMIT=0";
		mysql_query($sql,$link) or die (mysql_error());
		$sql="select * from watersc where ((status <> 'C' and status <> 'UK' and status <> 'NSP' and status <> 'NE' and status <> 'COM' and status <> 'PC' and status <> 'AP') or status IS Null) and flag IS Null and (assign IS Null or assign = '".$e_num."') order by rand() LIMIT 1 FOR UPDATE";
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
		$sql = "update watersc set flag = '1' where flag IS Null and sc = '".$x."'";
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
	/*
	if (!($_POST["intere"])) {
		$_POST["intere"] = date("H:i", $ttt);
	}
	*/
	if ((isset($_POST["sub"]))||(isset($_POST["sub1"]))) {
		$sql = "insert into waterstatus(sc,status,st,ed,apd,aph,apm,eno,nam,sttt,edtt,remark) values ('".$_POST["sc"]."','".$_POST["stat"]."','".$_POST["stday"]." ".$_POST["sttime"]."','".$edday." ".$edtime."','".$_POST["datepicker"]."','".$_POST["hh"]."','".$_POST["mm"]."','".$_POST["eno"]."','".$_POST["nam"]."','".$_POST["tt"]."','".$ttt."','".$_POST["remark"]."')";
		$result = mysql_query($sql,$link);
//		$sql = "INSERT INTO `water`.`waterdbbk` (`sc`,`stat`,`tel`,`tt`,`eno`,`interm`,`interd`,`interh`,`intere`,`member`,`homett`,`memnam`,`q1a`,`q1b`,`q1c`,`q1_0`,`ord1`,`ord2`,`ord3`,`ord4`,`ord5`,`ord6`,`q2a`,`q2b`,`q2c`,`q2d`,`q2e`,`q2f`,`q3a`,`q3b`,`q3c`,`q3d`,`q3e`,`q3f`,`q4a`,`q4b`,`q4c`,`q4d`,`q4e`,`q4f`,`q5a`,`q5b`,`q5c`,`q5d`,`q5e`,`q5f`,`q6a`,`q6b`,`q6c`,`q6d`,`q6e`,`q6f`,`q7a`,`q7b`,`q7c`,`q7d`,`q7e`,`q7f`,`q8a`,`q8b`,`q8c`,`q8d`,`q8e`,`q8f`,`q8g`,`q8h`,`q9a`,`q9b`,`q9c`,`q10`,`q11`,`q12`,`q12_1a`,`q12_1a_1a`,`q12_5a`,`q13`,`q14`,`q14_6a`,`q15`,`q16`,`q16_2a`,`q17`,`q18`,`q19`,`q19_6a`,`q19a`,`q19a_17a`,`q19b`,`q19b_10a`,`q20`,`q21`,`q22`,`q23`) VALUES ('".@$_POST["sc"]."','".@$_POST["stat"]."','".@$_POST["tel"]."','".@$_POST["tt"]."','".@$_POST["eno"]."','".@$_POST["interm"]."','".@$_POST["interd"]."','".@$_POST["interh"]."','".@$_POST["intere"]."','".@$_POST["member"]."','".@$_POST["homett"]."','".@$_POST["memnam"]."','".@$_POST["q1a"]."','".@$_POST["q1b"]."','".@$_POST["q1c"]."','".@$_POST["q1_0"]."','".@$_POST["ord1"]."','".@$_POST["ord2"]."','".@$_POST["ord3"]."','".@$_POST["ord4"]."','".@$_POST["ord5"]."','".@$_POST["ord6"]."','".@$_POST["q2a"]."','".@$_POST["q2b"]."','".@$_POST["q2c"]."','".@$_POST["q2d"]."','".@$_POST["q2e"]."','".@$_POST["q2f"]."','".@$_POST["q3a"]."','".@$_POST["q3b"]."','".@$_POST["q3c"]."','".@$_POST["q3d"]."','".@$_POST["q3e"]."','".@$_POST["q3f"]."','".@$_POST["q4a"]."','".@$_POST["q4b"]."','".@$_POST["q4c"]."','".@$_POST["q4d"]."','".@$_POST["q4e"]."','".@$_POST["q4f"]."','".@$_POST["q5a"]."','".@$_POST["q5b"]."','".@$_POST["q5c"]."','".@$_POST["q5d"]."','".@$_POST["q5e"]."','".@$_POST["q5f"]."','".@$_POST["q6a"]."','".@$_POST["q6b"]."','".@$_POST["q6c"]."','".@$_POST["q6d"]."','".@$_POST["q6e"]."','".@$_POST["q6f"]."','".@$_POST["q7a"]."','".@$_POST["q7b"]."','".@$_POST["q7c"]."','".@$_POST["q7d"]."','".@$_POST["q7e"]."','".@$_POST["q7f"]."','".@$_POST["q8a"]."','".@$_POST["q8b"]."','".@$_POST["q8c"]."','".@$_POST["q8d"]."','".@$_POST["q8e"]."','".@$_POST["q8f"]."','".@$_POST["q8g"]."','".@$_POST["q8h"]."','".@$_POST["q9a"]."','".@$_POST["q9b"]."','".@$_POST["q9c"]."','".@$_POST["q10"]."','".@$_POST["q11"]."','".@$_POST["q12"]."','".@$_POST["q12_1a"]."','".@$_POST["q12_1a_1a"]."','".@$_POST["q12_5a"]."','".@$_POST["q13"]."','".@$_POST["q14"]."','".@$_POST["q14_6a"]."','".@$_POST["q15"]."','".@$_POST["q16"]."','".@$_POST["q16_2a"]."','".@$_POST["q17"]."','".@$_POST["q18"]."','".@$_POST["q19"]."','".@$_POST["q19_6a"]."','".@$_POST["q19a"]."','".@$_POST["q19a_17a"]."','".@$_POST["q19b"]."','".@$_POST["q19b_10a"]."','".@$_POST["q20"]."','".@$_POST["q21"]."','".@$_POST["q22"]."','".@$_POST["q23"]."')";
//		$sql = "INSERT INTO `water`.`waterdbbk` (`sc`,`stat`,`tel`,`tt`,`eno`,`interm`,`interd`,`interh`,`intere`,`member`,`homett`,`memnam`,`q1a`,`q1b`,`q1c`,`q1_0`,`ord1`,`ord2`,`ord3`,`ord4`,`ord5`,`ord6`,`q2a`,`q2b`,`q2c`,`q2d`,`q2e`,`q2f`,`q3a`,`q3b`,`q3c`,`q3d`,`q3e`,`q3f`,`q4a`,`q4b`,`q4c`,`q4d`,`q4e`,`q4f`,`q5a`,`q5b`,`q5c`,`q5d`,`q5e`,`q5f`,`q6a`,`q6b`,`q6c`,`q6d`,`q6e`,`q6f`,`q7a`,`q7b`,`q7c`,`q7d`,`q7e`,`q7f`,`q8a`,`q8b`,`q8c`,`q8d`,`q8e`,`q8f`,`q8g`,`q8h`,`q9a`,`q9b`,`q9c`,`q10`,`q11`,`q12_1`,`q12_2`,`q12_3`,`q12_4`,`q12_5`,`q12_0`,`q12_1a`,`q12_1a_1a`,`q12_5a`,`q13`,`q14`,`q14_6a`,`q15`,`q16`,`q16_2a`,`q17`,`q18`,`q19`,`q19_6a`,`q19a`,`q19a_17a`,`q19b`,`q19b_10a`,`q20`,`q21`,`q22`,`q23`) VALUES ('".@$_POST["sc"]."','".@$_POST["stat"]."','".@$_POST["tel"]."','".@$_POST["tt"]."','".@$_POST["eno"]."','".@$_POST["interm"]."','".@$_POST["interd"]."','".@$_POST["interh"]."','".@$_POST["intere"]."','".@$_POST["member"]."','".@$_POST["homett"]."','".@$_POST["memnam"]."','".@$_POST["q1a"]."','".@$_POST["q1b"]."','".@$_POST["q1c"]."','".@$_POST["q1_0"]."','".@$_POST["ord1"]."','".@$_POST["ord2"]."','".@$_POST["ord3"]."','".@$_POST["ord4"]."','".@$_POST["ord5"]."','".@$_POST["ord6"]."','".@$_POST["q2a"]."','".@$_POST["q2b"]."','".@$_POST["q2c"]."','".@$_POST["q2d"]."','".@$_POST["q2e"]."','".@$_POST["q2f"]."','".@$_POST["q3a"]."','".@$_POST["q3b"]."','".@$_POST["q3c"]."','".@$_POST["q3d"]."','".@$_POST["q3e"]."','".@$_POST["q3f"]."','".@$_POST["q4a"]."','".@$_POST["q4b"]."','".@$_POST["q4c"]."','".@$_POST["q4d"]."','".@$_POST["q4e"]."','".@$_POST["q4f"]."','".@$_POST["q5a"]."','".@$_POST["q5b"]."','".@$_POST["q5c"]."','".@$_POST["q5d"]."','".@$_POST["q5e"]."','".@$_POST["q5f"]."','".@$_POST["q6a"]."','".@$_POST["q6b"]."','".@$_POST["q6c"]."','".@$_POST["q6d"]."','".@$_POST["q6e"]."','".@$_POST["q6f"]."','".@$_POST["q7a"]."','".@$_POST["q7b"]."','".@$_POST["q7c"]."','".@$_POST["q7d"]."','".@$_POST["q7e"]."','".@$_POST["q7f"]."','".@$_POST["q8a"]."','".@$_POST["q8b"]."','".@$_POST["q8c"]."','".@$_POST["q8d"]."','".@$_POST["q8e"]."','".@$_POST["q8f"]."','".@$_POST["q8g"]."','".@$_POST["q8h"]."','".@$_POST["q9a"]."','".@$_POST["q9b"]."','".@$_POST["q9c"]."','".@$_POST["q10"]."','".@$_POST["q11"]."','".@$_POST["q12_1"]."','".@$_POST["q12_2"]."','".@$_POST["q12_3"]."','".@$_POST["q12_4"]."','".@$_POST["q12_5"]."','".@$_POST["q12_0"]."','".@$_POST["q12_1a"]."','".@$_POST["q12_1a_1a"]."','".@$_POST["q12_5a"]."','".@$_POST["q13"]."','".@$_POST["q14"]."','".@$_POST["q14_6a"]."','".@$_POST["q15"]."','".@$_POST["q16"]."','".@$_POST["q16_2a"]."','".@$_POST["q17"]."','".@$_POST["q18"]."','".@$_POST["q19"]."','".@$_POST["q19_6a"]."','".@$_POST["q19a"]."','".@$_POST["q19a_17a"]."','".@$_POST["q19b"]."','".@$_POST["q19b_10a"]."','".@$_POST["q20"]."','".@$_POST["q21"]."','".@$_POST["q22"]."','".@$_POST["q23"]."')";
		$sql = "INSERT INTO `water`.`waterdbbk` (";
		$sql .= "`sc`, ";
		$sql .= "`eno`, ";
		$sql .= "`client_num`, ";
		$sql .= "`employee`, ";
		$sql .= "`interviewee`, ";
		$sql .= "`relation`, ";
		$sql .= "`q1_1a`, ";
		$sql .= "`q1_1b_1`, ";
		$sql .= "`q1_1b_2`, ";
		$sql .= "`q1_1b_3`, ";
		$sql .= "`q1_1b_4`, ";
		$sql .= "`q1_1b_5`, ";
		$sql .= "`q1_1b_5a`, ";
		$sql .= "`q1_1b_6`, ";
		$sql .= "`q2`, ";
		$sql .= "`q2_1a`, ";
		$sql .= "`q3`, ";
		$sql .= "`q3_1a`, ";
		$sql .= "`q4_a`, ";
		$sql .= "`q4_a_1a`, ";
		$sql .= "`q4_b`, ";
		$sql .= "`q4_b_1a`, ";
		$sql .= "`q5`, ";
		$sql .= "`q5_e`, ";
		$sql .= "`q6_1`, ";
		$sql .= "`q6_2`, ";
		$sql .= "`q6_3`, ";
		$sql .= "`q6_4`, ";
		$sql .= "`q7_1`, ";
		$sql .= "`q7_1a`, ";
		$sql .= "`q7_2`, ";
		$sql .= "`q7_2a`, ";
		$sql .= "`q7_3`, ";
		$sql .= "`q7_3a`, ";
		$sql .= "`q7_4`, ";
		$sql .= "`q7_4a`, ";
		$sql .= "`q7_5c`, ";
		$sql .= "`q7_5`, ";
		$sql .= "`q7_5a`, ";
		$sql .= "`q8a`, ";
		$sql .= "`q8a_34`, ";
		$sql .= "`q8b`, ";
		$sql .= "`q8b_34`, ";
		$sql .= "`q9a`, ";
		$sql .= "`q9a_34`, ";
		$sql .= "`q9b`, ";
		$sql .= "`q9b_34`, ";
		$sql .= "`q10`, ";
		$sql .= "`q10_2`, ";
		$sql .= "`q10_a`, ";
		$sql .= "`q11`, ";
		$sql .= "`q12`, ";
		$sql .= "`q12_4a` ";
		$sql .= ") values (";
		$sql .= "'".@$_POST["sc"]."',";
		$sql .= "'".@$_POST["eno"]."',";
		$sql .= "'".@$_POST["client_num"]."',";
		$sql .= "'".@$_POST["employee"]."',";
		$sql .= "'".@$_POST["interviewee"]."',";
		$sql .= "'".@$_POST["relation"]."',";
		$sql .= "'".@$_POST["q1_1a"]."',";
		$sql .= "'".@$_POST["q1_1b_1"]."',";
		$sql .= "'".@$_POST["q1_1b_2"]."',";
		$sql .= "'".@$_POST["q1_1b_3"]."',";
		$sql .= "'".@$_POST["q1_1b_4"]."',";
		$sql .= "'".@$_POST["q1_1b_5"]."',";
		$sql .= "'".@$_POST["q1_1b_5a"]."',";
		$sql .= "'".@$_POST["q1_1b_6"]."',";
		$sql .= "'".@$_POST["q2"]."',";
		$sql .= "'".@$_POST["q2_1a"]."',";
		$sql .= "'".@$_POST["q3"]."',";
		$sql .= "'".@$_POST["q3_1a"]."',";
		$sql .= "'".@$_POST["q4_a"]."',";
		$sql .= "'".@$_POST["q4_a_1a"]."',";
		$sql .= "'".@$_POST["q4_b"]."',";
		$sql .= "'".@$_POST["q4_b_1a"]."',";
		$sql .= "'".@$_POST["q5"]."',";
		$sql .= "'".@$_POST["q5_e"]."',";
		$sql .= "'".@$_POST["q6_1"]."',";
		$sql .= "'".@$_POST["q6_2"]."',";
		$sql .= "'".@$_POST["q6_3"]."',";
		$sql .= "'".@$_POST["q6_4"]."',";
		$sql .= "'".@$_POST["q7_1"]."',";
		$sql .= "'".@$_POST["q7_1a"]."',";
		$sql .= "'".@$_POST["q7_2"]."',";
		$sql .= "'".@$_POST["q7_2a"]."',";
		$sql .= "'".@$_POST["q7_3"]."',";
		$sql .= "'".@$_POST["q7_3a"]."',";
		$sql .= "'".@$_POST["q7_4"]."',";
		$sql .= "'".@$_POST["q7_4a"]."',";
		$sql .= "'".@$_POST["q7_5c"]."',";
		$sql .= "'".@$_POST["q7_5"]."',";
		$sql .= "'".@$_POST["q7_5a"]."',";
		$sql .= "'".@$_POST["q8a"]."',";
		$sql .= "'".@$_POST["q8a_34"]."',";
		$sql .= "'".@$_POST["q8b"]."',";
		$sql .= "'".@$_POST["q8b_34"]."',";
		$sql .= "'".@$_POST["q9a"]."',";
		$sql .= "'".@$_POST["q9a_34"]."',";
		$sql .= "'".@$_POST["q9b"]."',";
		$sql .= "'".@$_POST["q9b_34"]."',";
		$sql .= "'".@$_POST["q10"]."',";
		$sql .= "'".@$_POST["q10_2"]."',";
		$sql .= "'".@$_POST["q10_a"]."',";
		$sql .= "'".@$_POST["q11"]."',";
		$sql .= "'".@$_POST["q12"]."',";
		$sql .= "'".@$_POST["q12_4a"]."')";

		
		$result = mysql_query($sql,$link);
		$sql = "select * from waterdb where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0) {
//			$sql = "UPDATE `water`.`waterdb`SET `stat` = '".@$_POST["stat"]."',`tel` = '".@$_POST["tel"]."',`tt` = '".@$_POST["tt"]."',`eno` = '".@$_POST["eno"]."',`interm` = '".@$_POST["interm"]."',`interd` = '".@$_POST["interd"]."',`interh` = '".@$_POST["interh"]."',`intere` = '".@$_POST["intere"]."',`member` = '".@$_POST["member"]."',`homett` = '".@$_POST["homett"]."',`memnam` = '".@$_POST["memnam"]."',`q1a` = '".@$_POST["q1a"]."',`q1b` = '".@$_POST["q1b"]."',`q1c` = '".@$_POST["q1c"]."',`q1_0` = '".@$_POST["q1_0"]."',`ord1` = '".@$_POST["ord1"]."',`ord2` = '".@$_POST["ord2"]."',`ord3` = '".@$_POST["ord3"]."',`ord4` = '".@$_POST["ord4"]."',`ord5` = '".@$_POST["ord5"]."',`ord6` = '".@$_POST["ord6"]."',`q2a` = '".@$_POST["q2a"]."',`q2b` = '".@$_POST["q2b"]."',`q2c` = '".@$_POST["q2c"]."',`q2d` = '".@$_POST["q2d"]."',`q2e` = '".@$_POST["q2e"]."',`q2f` = '".@$_POST["q2f"]."',`q3a` = '".@$_POST["q3a"]."',`q3b` = '".@$_POST["q3b"]."',`q3c` = '".@$_POST["q3c"]."',`q3d` = '".@$_POST["q3d"]."',`q3e` = '".@$_POST["q3e"]."',`q3f` = '".@$_POST["q3f"]."',`q4a` = '".@$_POST["q4a"]."',`q4b` = '".@$_POST["q4b"]."',`q4c` = '".@$_POST["q4c"]."',`q4d` = '".@$_POST["q4d"]."',`q4e` = '".@$_POST["q4e"]."',`q4f` = '".@$_POST["q4f"]."',`q5a` = '".@$_POST["q5a"]."',`q5b` = '".@$_POST["q5b"]."',`q5c` = '".@$_POST["q5c"]."',`q5d` = '".@$_POST["q5d"]."',`q5e` = '".@$_POST["q5e"]."',`q5f` = '".@$_POST["q5f"]."',`q6a` = '".@$_POST["q6a"]."',`q6b` = '".@$_POST["q6b"]."',`q6c` = '".@$_POST["q6c"]."',`q6d` = '".@$_POST["q6d"]."',`q6e` = '".@$_POST["q6e"]."',`q6f` = '".@$_POST["q6f"]."',`q7a` = '".@$_POST["q7a"]."',`q7b` = '".@$_POST["q7b"]."',`q7c` = '".@$_POST["q7c"]."',`q7d` = '".@$_POST["q7d"]."',`q7e` = '".@$_POST["q7e"]."',`q7f` = '".@$_POST["q7f"]."',`q8a` = '".@$_POST["q8a"]."',`q8b` = '".@$_POST["q8b"]."',`q8c` = '".@$_POST["q8c"]."',`q8d` = '".@$_POST["q8d"]."',`q8e` = '".@$_POST["q8e"]."',`q8f` = '".@$_POST["q8f"]."',`q8g` = '".@$_POST["q8g"]."',`q8h` = '".@$_POST["q8h"]."',`q9a` = '".@$_POST["q9a"]."',`q9b` = '".@$_POST["q9b"]."',`q9c` = '".@$_POST["q9c"]."',`q10` = '".@$_POST["q10"]."',`q11` = '".@$_POST["q11"]."',`q12` = '".@$_POST["q12"]."',`q12_1a` = '".@$_POST["q12_1a"]."',`q12_1a_1a` = '".@$_POST["q12_1a_1a"]."',`q12_5a` = '".@$_POST["q12_5a"]."',`q13` = '".@$_POST["q13"]."',`q14` = '".@$_POST["q14"]."',`q14_6a` = '".@$_POST["q14_6a"]."',`q15` = '".@$_POST["q15"]."',`q16` = '".@$_POST["q16"]."',`q16_2a` = '".@$_POST["q16_2a"]."',`q17` = '".@$_POST["q17"]."',`q18` = '".@$_POST["q18"]."',`q19` = '".@$_POST["q19"]."',`q19_6a` = '".@$_POST["q19_6a"]."',`q19a` = '".@$_POST["q19a"]."',`q19a_17a` = '".@$_POST["q19a_17a"]."',`q19b` = '".@$_POST["q19b"]."',`q19b_10a` = '".@$_POST["q19b_10a"]."',`q20` = '".@$_POST["q20"]."',`q21` = '".@$_POST["q21"]."',`q22` = '".@$_POST["q22"]."',`q23` = '".@$_POST["q23"]."' WHERE sc = '".@$_POST["sc"]."'";
//			$sql = "UPDATE `water`.`waterdb`SET `stat` = '".@$_POST["stat"]."',`tel` = '".@$_POST["tel"]."',`tt` = '".@$_POST["tt"]."',`eno` = '".@$_POST["eno"]."',`interm` = '".@$_POST["interm"]."',`interd` = '".@$_POST["interd"]."',`interh` = '".@$_POST["interh"]."',`intere` = '".@$_POST["intere"]."',`member` = '".@$_POST["member"]."',`homett` = '".@$_POST["homett"]."',`memnam` = '".@$_POST["memnam"]."',`q1a` = '".@$_POST["q1a"]."',`q1b` = '".@$_POST["q1b"]."',`q1c` = '".@$_POST["q1c"]."',`q1_0` = '".@$_POST["q1_0"]."',`ord1` = '".@$_POST["ord1"]."',`ord2` = '".@$_POST["ord2"]."',`ord3` = '".@$_POST["ord3"]."',`ord4` = '".@$_POST["ord4"]."',`ord5` = '".@$_POST["ord5"]."',`ord6` = '".@$_POST["ord6"]."',`q2a` = '".@$_POST["q2a"]."',`q2b` = '".@$_POST["q2b"]."',`q2c` = '".@$_POST["q2c"]."',`q2d` = '".@$_POST["q2d"]."',`q2e` = '".@$_POST["q2e"]."',`q2f` = '".@$_POST["q2f"]."',`q3a` = '".@$_POST["q3a"]."',`q3b` = '".@$_POST["q3b"]."',`q3c` = '".@$_POST["q3c"]."',`q3d` = '".@$_POST["q3d"]."',`q3e` = '".@$_POST["q3e"]."',`q3f` = '".@$_POST["q3f"]."',`q4a` = '".@$_POST["q4a"]."',`q4b` = '".@$_POST["q4b"]."',`q4c` = '".@$_POST["q4c"]."',`q4d` = '".@$_POST["q4d"]."',`q4e` = '".@$_POST["q4e"]."',`q4f` = '".@$_POST["q4f"]."',`q5a` = '".@$_POST["q5a"]."',`q5b` = '".@$_POST["q5b"]."',`q5c` = '".@$_POST["q5c"]."',`q5d` = '".@$_POST["q5d"]."',`q5e` = '".@$_POST["q5e"]."',`q5f` = '".@$_POST["q5f"]."',`q6a` = '".@$_POST["q6a"]."',`q6b` = '".@$_POST["q6b"]."',`q6c` = '".@$_POST["q6c"]."',`q6d` = '".@$_POST["q6d"]."',`q6e` = '".@$_POST["q6e"]."',`q6f` = '".@$_POST["q6f"]."',`q7a` = '".@$_POST["q7a"]."',`q7b` = '".@$_POST["q7b"]."',`q7c` = '".@$_POST["q7c"]."',`q7d` = '".@$_POST["q7d"]."',`q7e` = '".@$_POST["q7e"]."',`q7f` = '".@$_POST["q7f"]."',`q8a` = '".@$_POST["q8a"]."',`q8b` = '".@$_POST["q8b"]."',`q8c` = '".@$_POST["q8c"]."',`q8d` = '".@$_POST["q8d"]."',`q8e` = '".@$_POST["q8e"]."',`q8f` = '".@$_POST["q8f"]."',`q8g` = '".@$_POST["q8g"]."',`q8h` = '".@$_POST["q8h"]."',`q9a` = '".@$_POST["q9a"]."',`q9b` = '".@$_POST["q9b"]."',`q9c` = '".@$_POST["q9c"]."',`q10` = '".@$_POST["q10"]."',`q11` = '".@$_POST["q11"]."',`q12_1` = '".@$_POST["q12_1"]."',`q12_2` = '".@$_POST["q12_2"]."',`q12_3` = '".@$_POST["q12_3"]."',`q12_4` = '".@$_POST["q12_4"]."',`q12_5` = '".@$_POST["q12_5"]."',`q12_0` = '".@$_POST["q12_0"]."',`q12_1a` = '".@$_POST["q12_1a"]."',`q12_1a_1a` = '".@$_POST["q12_1a_1a"]."',`q12_5a` = '".@$_POST["q12_5a"]."',`q13` = '".@$_POST["q13"]."',`q14` = '".@$_POST["q14"]."',`q14_6a` = '".@$_POST["q14_6a"]."',`q15` = '".@$_POST["q15"]."',`q16` = '".@$_POST["q16"]."',`q16_2a` = '".@$_POST["q16_2a"]."',`q17` = '".@$_POST["q17"]."',`q18` = '".@$_POST["q18"]."',`q19` = '".@$_POST["q19"]."',`q19_6a` = '".@$_POST["q19_6a"]."',`q19a` = '".@$_POST["q19a"]."',`q19a_17a` = '".@$_POST["q19a_17a"]."',`q19b` = '".@$_POST["q19b"]."',`q19b_10a` = '".@$_POST["q19b_10a"]."',`q20` = '".@$_POST["q20"]."',`q21` = '".@$_POST["q21"]."',`q22` = '".@$_POST["q22"]."',`q23` = '".@$_POST["q23"]."' WHERE sc = '".@$_POST["sc"]."'";
			$sql = "update waterdb set ";
			$sql .= "`eno` = '".@$_POST["eno"]."', ";
			$sql .= "`client_num` = '".@$_POST["client_num"]."', ";
			$sql .= "`employee` = '".@$_POST["employee"]."', ";
			$sql .= "`interviewee` = '".@$_POST["interviewee"]."', ";
			$sql .= "`relation` = '".@$_POST["relation"]."', ";
			$sql .= "`q1_1a` = '".@$_POST["q1_1a"]."', ";
			$sql .= "`q1_1b_1` = '".@$_POST["q1_1b_1"]."', ";
			$sql .= "`q1_1b_2` = '".@$_POST["q1_1b_2"]."', ";
			$sql .= "`q1_1b_3` = '".@$_POST["q1_1b_3"]."', ";
			$sql .= "`q1_1b_4` = '".@$_POST["q1_1b_4"]."', ";
			$sql .= "`q1_1b_5` = '".@$_POST["q1_1b_5"]."', ";
			$sql .= "`q1_1b_5a` = '".@$_POST["q1_1b_5a"]."', ";
			$sql .= "`q1_1b_6` = '".@$_POST["q1_1b_6"]."', ";
			$sql .= "`q2` = '".@$_POST["q2"]."', ";
			$sql .= "`q2_1a` = '".@$_POST["q2_1a"]."', ";
			$sql .= "`q3` = '".@$_POST["q3"]."', ";
			$sql .= "`q3_1a` = '".@$_POST["q3_1a"]."', ";
			$sql .= "`q4_a` = '".@$_POST["q4_a"]."', ";
			$sql .= "`q4_a_1a` = '".@$_POST["q4_a_1a"]."', ";
			$sql .= "`q4_b` = '".@$_POST["q4_b"]."', ";
			$sql .= "`q4_b_1a` = '".@$_POST["q4_b_1a"]."', ";
			$sql .= "`q5` = '".@$_POST["q5"]."', ";
			$sql .= "`q5_e` = '".@$_POST["q5_e"]."', ";
			$sql .= "`q6_1` = '".@$_POST["q6_1"]."', ";
			$sql .= "`q6_2` = '".@$_POST["q6_2"]."', ";
			$sql .= "`q6_3` = '".@$_POST["q6_3"]."', ";
			$sql .= "`q6_4` = '".@$_POST["q6_4"]."', ";
			$sql .= "`q7_1` = '".@$_POST["q7_1"]."', ";
			$sql .= "`q7_1a` = '".@$_POST["q7_1a"]."', ";
			$sql .= "`q7_2` = '".@$_POST["q7_2"]."', ";
			$sql .= "`q7_2a` = '".@$_POST["q7_2a"]."', ";
			$sql .= "`q7_3` = '".@$_POST["q7_3"]."', ";
			$sql .= "`q7_3a` = '".@$_POST["q7_3a"]."', ";
			$sql .= "`q7_4` = '".@$_POST["q7_4"]."', ";
			$sql .= "`q7_4a` = '".@$_POST["q7_4a"]."', ";
			$sql .= "`q7_5c` = '".@$_POST["q7_5c"]."', ";
			$sql .= "`q7_5` = '".@$_POST["q7_5"]."', ";
			$sql .= "`q7_5a` = '".@$_POST["q7_5a"]."', ";
			$sql .= "`q8a` = '".@$_POST["q8a"]."', ";
			$sql .= "`q8a_34` = '".@$_POST["q8a_34"]."', ";
			$sql .= "`q8b` = '".@$_POST["q8b"]."', ";
			$sql .= "`q8b_34` = '".@$_POST["q8b_34"]."', ";
			$sql .= "`q9a` = '".@$_POST["q9a"]."', ";
			$sql .= "`q9a_34` = '".@$_POST["q9a_34"]."', ";
			$sql .= "`q9b` = '".@$_POST["q9b"]."', ";
			$sql .= "`q9b_34` = '".@$_POST["q9b_34"]."', ";
			$sql .= "`q10` = '".@$_POST["q10"]."', ";
			$sql .= "`q10_2` = '".@$_POST["q10_2"]."', ";
			$sql .= "`q10_2` = '".@$_POST["q10_a"]."', ";
			
			$sql .= "`q11` = '".@$_POST["q11"]."', ";
			$sql .= "`q12` = '".@$_POST["q12"]."', ";
			$sql .= "`q12_4a` = '".@$_POST["q12_4a"]."'";
			$sql .= "where sc = '".@$_POST["sc"]."'";

		} else {
//			$sql = "INSERT INTO `water`.`waterdb` (`sc`,`stat`,`tel`,`tt`,`eno`,`interm`,`interd`,`interh`,`intere`,`member`,`homett`,`memnam`,`q1a`,`q1b`,`q1c`,`q1_0`,`ord1`,`ord2`,`ord3`,`ord4`,`ord5`,`ord6`,`q2a`,`q2b`,`q2c`,`q2d`,`q2e`,`q2f`,`q3a`,`q3b`,`q3c`,`q3d`,`q3e`,`q3f`,`q4a`,`q4b`,`q4c`,`q4d`,`q4e`,`q4f`,`q5a`,`q5b`,`q5c`,`q5d`,`q5e`,`q5f`,`q6a`,`q6b`,`q6c`,`q6d`,`q6e`,`q6f`,`q7a`,`q7b`,`q7c`,`q7d`,`q7e`,`q7f`,`q8a`,`q8b`,`q8c`,`q8d`,`q8e`,`q8f`,`q8g`,`q8h`,`q9a`,`q9b`,`q9c`,`q10`,`q11`,`q12`,`q12_1a`,`q12_1a_1a`,`q12_5a`,`q13`,`q14`,`q14_6a`,`q15`,`q16`,`q16_2a`,`q17`,`q18`,`q19`,`q19_6a`,`q19a`,`q19a_17a`,`q19b`,`q19b_10a`,`q20`,`q21`,`q22`,`q23`) VALUES ('".@$_POST["sc"]."','".@$_POST["stat"]."','".@$_POST["tel"]."','".@$_POST["tt"]."','".@$_POST["eno"]."','".@$_POST["interm"]."','".@$_POST["interd"]."','".@$_POST["interh"]."','".@$_POST["intere"]."','".@$_POST["member"]."','".@$_POST["homett"]."','".@$_POST["memnam"]."','".@$_POST["q1a"]."','".@$_POST["q1b"]."','".@$_POST["q1c"]."','".@$_POST["q1_0"]."','".@$_POST["ord1"]."','".@$_POST["ord2"]."','".@$_POST["ord3"]."','".@$_POST["ord4"]."','".@$_POST["ord5"]."','".@$_POST["ord6"]."','".@$_POST["q2a"]."','".@$_POST["q2b"]."','".@$_POST["q2c"]."','".@$_POST["q2d"]."','".@$_POST["q2e"]."','".@$_POST["q2f"]."','".@$_POST["q3a"]."','".@$_POST["q3b"]."','".@$_POST["q3c"]."','".@$_POST["q3d"]."','".@$_POST["q3e"]."','".@$_POST["q3f"]."','".@$_POST["q4a"]."','".@$_POST["q4b"]."','".@$_POST["q4c"]."','".@$_POST["q4d"]."','".@$_POST["q4e"]."','".@$_POST["q4f"]."','".@$_POST["q5a"]."','".@$_POST["q5b"]."','".@$_POST["q5c"]."','".@$_POST["q5d"]."','".@$_POST["q5e"]."','".@$_POST["q5f"]."','".@$_POST["q6a"]."','".@$_POST["q6b"]."','".@$_POST["q6c"]."','".@$_POST["q6d"]."','".@$_POST["q6e"]."','".@$_POST["q6f"]."','".@$_POST["q7a"]."','".@$_POST["q7b"]."','".@$_POST["q7c"]."','".@$_POST["q7d"]."','".@$_POST["q7e"]."','".@$_POST["q7f"]."','".@$_POST["q8a"]."','".@$_POST["q8b"]."','".@$_POST["q8c"]."','".@$_POST["q8d"]."','".@$_POST["q8e"]."','".@$_POST["q8f"]."','".@$_POST["q8g"]."','".@$_POST["q8h"]."','".@$_POST["q9a"]."','".@$_POST["q9b"]."','".@$_POST["q9c"]."','".@$_POST["q10"]."','".@$_POST["q11"]."','".@$_POST["q12"]."','".@$_POST["q12_1a"]."','".@$_POST["q12_1a_1a"]."','".@$_POST["q12_5a"]."','".@$_POST["q13"]."','".@$_POST["q14"]."','".@$_POST["q14_6a"]."','".@$_POST["q15"]."','".@$_POST["q16"]."','".@$_POST["q16_2a"]."','".@$_POST["q17"]."','".@$_POST["q18"]."','".@$_POST["q19"]."','".@$_POST["q19_6a"]."','".@$_POST["q19a"]."','".@$_POST["q19a_17a"]."','".@$_POST["q19b"]."','".@$_POST["q19b_10a"]."','".@$_POST["q20"]."','".@$_POST["q21"]."','".@$_POST["q22"]."','".@$_POST["q23"]."')";
//			$sql = "INSERT INTO `water`.`waterdb` (`sc`,`stat`,`tel`,`tt`,`eno`,`interm`,`interd`,`interh`,`intere`,`member`,`homett`,`memnam`,`q1a`,`q1b`,`q1c`,`q1_0`,`ord1`,`ord2`,`ord3`,`ord4`,`ord5`,`ord6`,`q2a`,`q2b`,`q2c`,`q2d`,`q2e`,`q2f`,`q3a`,`q3b`,`q3c`,`q3d`,`q3e`,`q3f`,`q4a`,`q4b`,`q4c`,`q4d`,`q4e`,`q4f`,`q5a`,`q5b`,`q5c`,`q5d`,`q5e`,`q5f`,`q6a`,`q6b`,`q6c`,`q6d`,`q6e`,`q6f`,`q7a`,`q7b`,`q7c`,`q7d`,`q7e`,`q7f`,`q8a`,`q8b`,`q8c`,`q8d`,`q8e`,`q8f`,`q8g`,`q8h`,`q9a`,`q9b`,`q9c`,`q10`,`q11`,`q12_1`,`q12_2`,`q12_3`,`q12_4`,`q12_5`,`q12_0`,`q12_1a`,`q12_1a_1a`,`q12_5a`,`q13`,`q14`,`q14_6a`,`q15`,`q16`,`q16_2a`,`q17`,`q18`,`q19`,`q19_6a`,`q19a`,`q19a_17a`,`q19b`,`q19b_10a`,`q20`,`q21`,`q22`,`q23`) VALUES ('".@$_POST["sc"]."','".@$_POST["stat"]."','".@$_POST["tel"]."','".@$_POST["tt"]."','".@$_POST["eno"]."','".@$_POST["interm"]."','".@$_POST["interd"]."','".@$_POST["interh"]."','".@$_POST["intere"]."','".@$_POST["member"]."','".@$_POST["homett"]."','".@$_POST["memnam"]."','".@$_POST["q1a"]."','".@$_POST["q1b"]."','".@$_POST["q1c"]."','".@$_POST["q1_0"]."','".@$_POST["ord1"]."','".@$_POST["ord2"]."','".@$_POST["ord3"]."','".@$_POST["ord4"]."','".@$_POST["ord5"]."','".@$_POST["ord6"]."','".@$_POST["q2a"]."','".@$_POST["q2b"]."','".@$_POST["q2c"]."','".@$_POST["q2d"]."','".@$_POST["q2e"]."','".@$_POST["q2f"]."','".@$_POST["q3a"]."','".@$_POST["q3b"]."','".@$_POST["q3c"]."','".@$_POST["q3d"]."','".@$_POST["q3e"]."','".@$_POST["q3f"]."','".@$_POST["q4a"]."','".@$_POST["q4b"]."','".@$_POST["q4c"]."','".@$_POST["q4d"]."','".@$_POST["q4e"]."','".@$_POST["q4f"]."','".@$_POST["q5a"]."','".@$_POST["q5b"]."','".@$_POST["q5c"]."','".@$_POST["q5d"]."','".@$_POST["q5e"]."','".@$_POST["q5f"]."','".@$_POST["q6a"]."','".@$_POST["q6b"]."','".@$_POST["q6c"]."','".@$_POST["q6d"]."','".@$_POST["q6e"]."','".@$_POST["q6f"]."','".@$_POST["q7a"]."','".@$_POST["q7b"]."','".@$_POST["q7c"]."','".@$_POST["q7d"]."','".@$_POST["q7e"]."','".@$_POST["q7f"]."','".@$_POST["q8a"]."','".@$_POST["q8b"]."','".@$_POST["q8c"]."','".@$_POST["q8d"]."','".@$_POST["q8e"]."','".@$_POST["q8f"]."','".@$_POST["q8g"]."','".@$_POST["q8h"]."','".@$_POST["q9a"]."','".@$_POST["q9b"]."','".@$_POST["q9c"]."','".@$_POST["q10"]."','".@$_POST["q11"]."','".@$_POST["q12_1"]."','".@$_POST["q12_2"]."','".@$_POST["q12_3"]."','".@$_POST["q12_4"]."','".@$_POST["q12_5"]."','".@$_POST["q12_0"]."','".@$_POST["q12_1a"]."','".@$_POST["q12_1a_1a"]."','".@$_POST["q12_5a"]."','".@$_POST["q13"]."','".@$_POST["q14"]."','".@$_POST["q14_6a"]."','".@$_POST["q15"]."','".@$_POST["q16"]."','".@$_POST["q16_2a"]."','".@$_POST["q17"]."','".@$_POST["q18"]."','".@$_POST["q19"]."','".@$_POST["q19_6a"]."','".@$_POST["q19a"]."','".@$_POST["q19a_17a"]."','".@$_POST["q19b"]."','".@$_POST["q19b_10a"]."','".@$_POST["q20"]."','".@$_POST["q21"]."','".@$_POST["q22"]."','".@$_POST["q23"]."')";
			$sql = "INSERT INTO `water`.`waterdb` (";
			$sql .= "`sc`, ";
			$sql .= "`eno`, ";
			$sql .= "`client_num`, ";
			$sql .= "`employee`, ";
			$sql .= "`interviewee`, ";
			$sql .= "`relation`, ";
			$sql .= "`q1_1a`, ";
			$sql .= "`q1_1b_1`, ";
			$sql .= "`q1_1b_2`, ";
			$sql .= "`q1_1b_3`, ";
			$sql .= "`q1_1b_4`, ";
			$sql .= "`q1_1b_5`, ";
			$sql .= "`q1_1b_5a`, ";
			$sql .= "`q1_1b_6`, ";
			$sql .= "`q2`, ";
			$sql .= "`q2_1a`, ";
			$sql .= "`q3`, ";
			$sql .= "`q3_1a`, ";
			$sql .= "`q4_a`, ";
			$sql .= "`q4_a_1a`, ";
			$sql .= "`q4_b`, ";
			$sql .= "`q4_b_1a`, ";
			$sql .= "`q5`, ";
			$sql .= "`q5_e`, ";
			$sql .= "`q6_1`, ";
			$sql .= "`q6_2`, ";
			$sql .= "`q6_3`, ";
			$sql .= "`q6_4`, ";
			$sql .= "`q7_1`, ";
			$sql .= "`q7_1a`, ";
			$sql .= "`q7_2`, ";
			$sql .= "`q7_2a`, ";
			$sql .= "`q7_3`, ";
			$sql .= "`q7_3a`, ";
			$sql .= "`q7_4`, ";
			$sql .= "`q7_4a`, ";
			$sql .= "`q7_5c`, ";
			$sql .= "`q7_5`, ";
			$sql .= "`q7_5a`, ";
			$sql .= "`q8a`, ";
			$sql .= "`q8a_34`, ";
			$sql .= "`q8b`, ";
			$sql .= "`q8b_34`, ";
			$sql .= "`q9a`, ";
			$sql .= "`q9a_34`, ";
			$sql .= "`q9b`, ";
			$sql .= "`q9b_34`, ";
			$sql .= "`q10`, ";
			$sql .= "`q10_2`, ";
			$sql .= "`q10_a`, ";			
			$sql .= "`q11`, ";
			$sql .= "`q12`, ";
			$sql .= "`q12_4a` ";
			$sql .= ") values (";
			$sql .= "'".@$_POST["sc"]."',";
			$sql .= "'".@$_POST["eno"]."',";
			$sql .= "'".@$_POST["client_num"]."',";
			$sql .= "'".@$_POST["employee"]."',";
			$sql .= "'".@$_POST["interviewee"]."',";
			$sql .= "'".@$_POST["relation"]."',";
			$sql .= "'".@$_POST["q1_1a"]."',";
			$sql .= "'".@$_POST["q1_1b_1"]."',";
			$sql .= "'".@$_POST["q1_1b_2"]."',";
			$sql .= "'".@$_POST["q1_1b_3"]."',";
			$sql .= "'".@$_POST["q1_1b_4"]."',";
			$sql .= "'".@$_POST["q1_1b_5"]."',";
			$sql .= "'".@$_POST["q1_1b_5a"]."',";
			$sql .= "'".@$_POST["q1_1b_6"]."',";
			$sql .= "'".@$_POST["q2"]."',";
			$sql .= "'".@$_POST["q2_1a"]."',";
			$sql .= "'".@$_POST["q3"]."',";
			$sql .= "'".@$_POST["q3_1a"]."',";
			$sql .= "'".@$_POST["q4_a"]."',";
			$sql .= "'".@$_POST["q4_a_1a"]."',";
			$sql .= "'".@$_POST["q4_b"]."',";
			$sql .= "'".@$_POST["q4_b_1a"]."',";
			$sql .= "'".@$_POST["q5"]."',";
			$sql .= "'".@$_POST["q5_e"]."',";
			$sql .= "'".@$_POST["q6_1"]."',";
			$sql .= "'".@$_POST["q6_2"]."',";
			$sql .= "'".@$_POST["q6_3"]."',";
			$sql .= "'".@$_POST["q6_4"]."',";
			$sql .= "'".@$_POST["q7_1"]."',";
			$sql .= "'".@$_POST["q7_1a"]."',";
			$sql .= "'".@$_POST["q7_2"]."',";
			$sql .= "'".@$_POST["q7_2a"]."',";
			$sql .= "'".@$_POST["q7_3"]."',";
			$sql .= "'".@$_POST["q7_3a"]."',";
			$sql .= "'".@$_POST["q7_4"]."',";
			$sql .= "'".@$_POST["q7_4a"]."',";
			$sql .= "'".@$_POST["q7_5c"]."',";
			$sql .= "'".@$_POST["q7_5"]."',";
			$sql .= "'".@$_POST["q7_5a"]."',";
			$sql .= "'".@$_POST["q8a"]."',";
			$sql .= "'".@$_POST["q8a_34"]."',";
			$sql .= "'".@$_POST["q8b"]."',";
			$sql .= "'".@$_POST["q8b_34"]."',";
			$sql .= "'".@$_POST["q9a"]."',";
			$sql .= "'".@$_POST["q9a_34"]."',";
			$sql .= "'".@$_POST["q9b"]."',";
			$sql .= "'".@$_POST["q9b_34"]."',";
			$sql .= "'".@$_POST["q10"]."',";
			$sql .= "'".@$_POST["q10_2"]."',";
			$sql .= "'".@$_POST["q10_a"]."',";
			$sql .= "'".@$_POST["q11"]."',";
			$sql .= "'".@$_POST["q12"]."',";
			$sql .= "'".@$_POST["q12_4a"]."')";

		}
		$result = mysql_query($sql,$link);
		
		$sql = "select * from watersc where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0) {
		$row = mysql_fetch_row($result);
			if ((($row[5] == "C")||($row[5] == "PC")||($row[5] == "AP"))&&(($_POST["stat"] != "C")&&($_POST["stat"] != "PC")&&($_POST["stat"] != "AP"))) {
				$sql = "update watersc set eno = '".$_POST["eno"]."', nam = '".$_POST["nam"]."', eno = '".$_POST["eno"]."', tt=now() where sc = '".$_POST["sc"]."'";
				$result = mysql_query($sql,$link);
			} else {
				$sql = "update watersc set eno = '".$_POST["eno"]."', nam = '".$_POST["nam"]."', `status` = '".$_POST["stat"]."', eno = '".$_POST["eno"]."', tt=now() where sc = '".$_POST["sc"]."'";
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
	}
/*	
	if (isset($_POST["sub1"])) {
		$sql = "select * from waterstatus where sc = '".$_POST["sc"]."' and sttt = '".$_POST["tt"]."' and edtt = '".$ttt."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if (!($num_rows > 0)) {
			$sql = "insert into waterstatus(sc,status,st,ed,apd,aph,apm,eno,nam,sttt,edtt,remark) values ('".$_POST["sc"]."','".$_POST["stat"]."','".$_POST["stday"]." ".$_POST["sttime"]."','".$edday." ".$edtime."','".$_POST["datepicker"]."','".$_POST["hh"]."','".$_POST["mm"]."','".$_POST["eno"]."','".$_POST["nam"]."','".$_POST["tt"]."','".$ttt."','".$_POST["remark"]."')";
			$result = mysql_query($sql,$link);
		}
		$sql = "update watersc set eno = '".$_POST["eno"]."', nam = '".$_POST["nam"]."', `status` = '".$_POST["stat"]."', eno = '".$_POST["eno"]."', tt=now() where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
		$x = get_sc($link);
		while ($x == "xx") {
			$x = get_sc($link);
		}
		if ($x == "x") {
			echo "<p class = \"warning\">No Sample now!</p>";
		}
		$sc = $x;
	}
*/
	if (isset($_POST["sub2"])) {
		if (strlen($_POST["tel"]) != 8) {
			echo "<p class = \"warning\">Invaild tel number!</p>";
			$sc ="";
		} else {
			$sql = "select * from watersc where sc = '".$_POST["tel"]."'";
			$result = mysql_query($sql,$link);
			$num_rows = mysql_num_rows($result);
			if ($num_rows < 1) {
				$sql = "insert into watersc (sc,flag) values ('".$_POST["tel"]."','1')";
				$result = mysql_query($sql,$link);
				$sc = $_POST["tel"];
				echo "<p class = \"warning\">Samlpe not in the list, sample added!</p>";
			} else {
				$row = mysql_fetch_row($result);
				if (((($row[5] == "C")||($row[5] == "PC")||($row[5] == "AP"))&&($row[2] != $_POST["eno"]))||($row[4]==1)) {
					echo "<p class = \"warning\">The number is using by the other</p>";
					$sc ="";
				} else {
					$sql = "update watersc set flag = '1' where sc = '".$_POST["tel"]."'";
					$result = mysql_query($sql,$link);
					$sc = $_POST["tel"];
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
		$sqlx = "select id from watersc where sc = '".$sc."'";
		$resultx = mysql_query($sqlx,$link);
		$num_rowsx = mysql_num_rows($resultx);
		if ($num_rowsx > 0) {
			$rowx = mysql_fetch_row($resultx);
		}
		$ll = @strlen($rowx[0]);
		$scx = "SC";
		for ($x = 0 ; $x < 6 - $ll ; $x++) {
			$scx .= "0";
		}
		$scx .= @$rowx[0];
	}
	
	if (($sc != "x")&&($sc != "xx")) {
		$sql = "select * from waterdb where sc = '".$sc."'";
		$result = mysql_query($sql,$link);
		$num_rows = mysql_num_rows($result);
		if ($num_rows > 0) {
			$ans = mysql_fetch_assoc($result);
		}
	}
	if ($sc != $_POST["sc"]) {
		$sql = "update watersc set flag = '2' where sc = '".$_POST["sc"]."'";
		$result = mysql_query($sql,$link);
	}
	
}


?>