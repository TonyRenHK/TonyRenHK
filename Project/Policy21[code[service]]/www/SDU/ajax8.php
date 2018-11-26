<?php
	include "serv.php";
	$ans = array();
	$sql = "";
	$tt = time();

	$data = explode("&", $_POST["data"]);
	//$_POST = explode("&", $_POST["data"]);
	foreach ($data as $key => $value) {
		list($k, $v) = explode("=", $value);
		$_POST[$k] = urldecode($v);//htmlspecialchars(urldecode($v), ENT_QUOTES);
		//echo $v."\n";
	}
	
	if (@$_POST["qq1"] != "") {
		$sql = "delete from qudb where code1 = '".@$_POST["sc1"]."' and code2 = '".@$_POST["sc2"]."' and code3 = '".@$_POST["sc3"]."' and code4 = '".@$_POST["sc4"]."'";
		$result = mysql_query($sql,$link);
		$sql = "insert into qudb (";
		$sql .= "`code1`,";
		$sql .= "`code2`,";
		$sql .= "`code3`,";
		$sql .= "`code4`,";
		$sql .= "`code`,";		
		$sql .= "`sdunum`,";
		$sql .= "`qq1`,";
		$sql .= "`qq1_3a`,";
		$sql .= "`qq2`,";
		$sql .= "`qq2_1a`,";
		$sql .= "`qq2_1a_3a`,";
		$sql .= "`qq2_1b`,";
		$sql .= "`qq3`,";
		$sql .= "`qq3_1a`,";
		$sql .= "`qq4_1`,";
		$sql .= "`qq4_2`,";
		$sql .= "`qq4_2a`,";
		$sql .= "`qq4_3`,";
		$sql .= "`qq4_3a`,";
		$sql .= "`qq4_4`,";
		$sql .= "`qq4_4a`,";
		$sql .= "`qq4_5`,";
		$sql .= "`qq4_5a`,";
		$sql .= "`qq4_6`,";
		$sql .= "`qq4_6a`,";
		$sql .= "`qq4_6b`,";
		$sql .= "`tt`";		
		$sql .= ") values (";
		$sql .= "'".@$_POST["sc1"]."',";
		$sql .= "'".@$_POST["sc2"]."',";
		$sql .= "'".@$_POST["sc3"]."',";
		$sql .= "'".@$_POST["sc4"]."',";
		$sql .= "'3".@$_POST["sc1"].@$_POST["sc2"].@$_POST["sc3"].@$_POST["sc4"]."',";
		$sql .= "'".@$_POST["sdunum"]."',";
		$sql .= "'".@$_POST["qq1"]."',";
		$sql .= "'".@$_POST["qq1_3a"]."',";
		$sql .= "'".@$_POST["qq2"]."',";
		$sql .= "'".@$_POST["qq2_1a"]."',";	
		$sql .= "'".@$_POST["qq2_1a_3a"]."',";	
		$sql .= "'".@$_POST["qq2_1b"]."',";	
		$sql .= "'".@$_POST["qq3"]."',";
		$sql .= "'".@$_POST["qq3_1a"]."',";
		$sql .= "'".@$_POST["qq4_1"]."',";	
		$sql .= "'".@$_POST["qq4_2"]."',";	
		$sql .= "'".@$_POST["qq4_2a"]."',";	
		$sql .= "'".@$_POST["qq4_3"]."',";	
		$sql .= "'".@$_POST["qq4_3a"]."',";		
		$sql .= "'".@$_POST["qq4_4"]."',";	
		$sql .= "'".@$_POST["qq4_4a"]."',";	
		$sql .= "'".@$_POST["qq4_5"]."',";	
		$sql .= "'".@$_POST["qq4_5a"]."',";	
		$sql .= "'".@$_POST["qq4_6"]."',";	
		$sql .= "'".@$_POST["qq4_6a"]."',";	
		$sql .= "'".@$_POST["qq4_7a"]."',";	
		$sql .= "'".$tt."')";
		$result = mysql_query($sql,$link);	

		$sql = "insert into qudbbk (";
		$sql .= "`code1`,";
		$sql .= "`code2`,";
		$sql .= "`code3`,";
		$sql .= "`code4`,";
		$sql .= "`code`,";		
		$sql .= "`sdunum`,";
		$sql .= "`qq1`,";
		$sql .= "`qq1_3a`,";
		$sql .= "`qq2`,";
		$sql .= "`qq2_1a`,";
		$sql .= "`qq2_1a_3a`,";
		$sql .= "`qq2_1b`,";
		$sql .= "`qq3`,";
		$sql .= "`qq3_1a`,";
		$sql .= "`qq4_1`,";
		$sql .= "`qq4_2`,";
		$sql .= "`qq4_2a`,";
		$sql .= "`qq4_3`,";
		$sql .= "`qq4_3a`,";
		$sql .= "`qq4_4`,";
		$sql .= "`qq4_4a`,";
		$sql .= "`qq4_5`,";
		$sql .= "`qq4_5a`,";
		$sql .= "`qq4_6`,";
		$sql .= "`qq4_6a`,";
		$sql .= "`qq4_6b`,";
		$sql .= "`tt`";		
		$sql .= ") values (";
		$sql .= "'".@$_POST["sc1"]."',";
		$sql .= "'".@$_POST["sc2"]."',";
		$sql .= "'".@$_POST["sc3"]."',";
		$sql .= "'".@$_POST["sc4"]."',";
		$sql .= "'3".@$_POST["sc1"].@$_POST["sc2"].@$_POST["sc3"].@$_POST["sc4"]."',";
		$sql .= "'".@$_POST["sdunum"]."',";
		$sql .= "'".@$_POST["qq1"]."',";
		$sql .= "'".@$_POST["qq1_3a"]."',";
		$sql .= "'".@$_POST["qq2"]."',";
		$sql .= "'".@$_POST["qq2_1a"]."',";	
		$sql .= "'".@$_POST["qq2_1a_3a"]."',";	
		$sql .= "'".@$_POST["qq2_1b"]."',";	
		$sql .= "'".@$_POST["qq3"]."',";
		$sql .= "'".@$_POST["qq3_1a"]."',";
		$sql .= "'".@$_POST["qq4_1"]."',";	
		$sql .= "'".@$_POST["qq4_2"]."',";	
		$sql .= "'".@$_POST["qq4_2a"]."',";	
		$sql .= "'".@$_POST["qq4_3"]."',";	
		$sql .= "'".@$_POST["qq4_3a"]."',";		
		$sql .= "'".@$_POST["qq4_4"]."',";	
		$sql .= "'".@$_POST["qq4_4a"]."',";	
		$sql .= "'".@$_POST["qq4_5"]."',";	
		$sql .= "'".@$_POST["qq4_5a"]."',";	
		$sql .= "'".@$_POST["qq4_6"]."',";	
		$sql .= "'".@$_POST["qq4_6a"]."',";	
		$sql .= "'".@$_POST["qq4_7a"]."',";	
		$sql .= "'".$tt."')";
		$result = mysql_query($sql,$link);	

	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>