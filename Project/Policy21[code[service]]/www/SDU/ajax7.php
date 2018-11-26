<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	$tt = time();
	if (@$_POST["quet"] != "") {
		$sql = "insert into qustatus (";
		$sql .= "`code1`,";
		$sql .= "`code2`,";
		$sql .= "`code3`,";
		$sql .= "`code4`,";
		$sql .= "`code`,";	
		$sql .= "`eno`,";	
		$sql .= "`tt`,";	
		$sql .= "`dd`,";	
		$sql .= "`st`,";	
		$sql .= "`et`,";	
		$sql .= "`typ`,";	
		$sql .= "`stat`,";	
		$sql .= "`tel`";	
		$sql .= ") values (";
		$sql .= "'".@$_POST["sc1"]."',";
		$sql .= "'".@$_POST["sc2"]."',";
		$sql .= "'".@$_POST["sc3"]."',";
		$sql .= "'".@$_POST["sc4"]."',";
		$sql .= "'3".@$_POST["sc1"].@$_POST["sc2"].@$_POST["sc3"].@$_POST["sc4"]."',";
		$sql .= "'".@$_POST["eno"]."',";
		$sql .= "'".$tt."',";
		$sql .= "'".@$_POST["qudd"]."',";
		$sql .= "'".@$_POST["qust"]."',";
		$sql .= "'".@$_POST["quet"]."',";
		$sql .= "'".@$_POST["qutyp"]."',";
		$sql .= "'".@$_POST["qustat"]."',";
		$sql .= "'".@$_POST["tel"]."')";
		$result = mysql_query($sql,$link);
		echo $sql;
		if ((@$_POST["qustat"]=="EN")||(@$_POST["qustat"]=="AD")) {
			$sql = "update address set `visit` = '1' where code1 = '".$_POST["sc1"]."' and code2 = '".$_POST["sc2"]."' and code3 = '00'";
			$result = mysql_query($sql,$link);
			$sql = "update address set `nf` = '".date("Y-m-d H:i:s", time())."' where code1 = '".$_POST["sc1"]."' and code2 = '".$_POST["sc2"]."' and code3 = '00'";
			$result = mysql_query($sql,$link);
			$sql = "update address set `qustat` = '".@$_POST["qustat"]."' where code1 = '".$_POST["sc1"]."' and code2 = '".$_POST["sc2"]."' and code3 = '00' and code4 = '00'";
			$result = mysql_query($sql,$link);
		}
	}

	
	mysql_close($link);
	
	
	
?>