<?php

	set_time_limit(0);
	ob_implicit_flush(true);
	ob_end_flush();	
	include "serv.php";
	$sql = "";
	

	$host2="113.28.46.27";
	$host2="192.168.1.242";
	$ser2="sdususer";
	$pass2="Policy21!!!!";
	$db2="sdu";
	$link2 = mysql_connect($host2, $ser2, $pass2) or die("Could not connect");
	mysql_select_db($db2,$link2) or die("Could not connect database");
	mysql_query("set names utf8");

	echo "start qustatus<br />";
	flush();
	$sql = "select * from qustatus";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `qustatus` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload qustatus error";
			}
			flush();
		}
	} else {
		echo "qustatus error<br />";
	}
	
	echo "start hhstatus<br />";
	flush();
	$sql = "select * from hhstatus";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `hhstatus` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload hhstatus error";
			}
			flush();
		}
	} else {
		echo "hhstatus error<br />";
	}


	echo "start photo name<br />";
	flush();
	$sql = "select * from photo";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `photo` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload photo error";
			}
			flush();
		}
	} else {
		echo "photo error<br />";
	}


	
	
	
	echo "start memdb<br />";
	flush();
	$sql = "select distinct code from memdb";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$rows = mysql_fetch_row($result);
			$sql = "delete from `memdb` where code = '".$rows[0]."'";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "delete memdb error<br />";
			}
		}
	}
	$sql = "select * from memdb";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `memdbbk` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[6]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload memdbbk error<br />";
			}
	
			$sql = "insert into `memdb` (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[6]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload memdb error<br />";
			}
			flush();
		}
	} else {
		echo "memdb error";
	}



	echo "start qudb<br />";
	flush();
	$sql = "select distinct code from qudb";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$rows = mysql_fetch_row($result);
			$sql = "delete from `qudb` where code = '".$rows[0]."'";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "delete qudb error<br />";
			}
		}
	}
	$sql = "select * from qudb";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `qudbbk` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload qudbbk error<br />";
			}
	
			$sql = "insert into `qudb` (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload qudb error<br />";
			}
			flush();
		}
	} else {
		echo "qudb error";
	}

	echo "start sdudb<br />";
	flush();
	$sql = "select distinct code from sdudb";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$rows = mysql_fetch_row($result);
			$sql = "delete from `sdudb` where code = '".$rows[0]."'";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "delete sdudb error<br />";
			}
		}
	}
	$sql = "select * from sdudb";
	$result = mysql_query($sql,$link);
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `sdudbbk` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload sdudbbk error<br />";
			}
	
			$sql = "insert into `sdudb` (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[5]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload sdudb error<br />";
			}
			flush();
		}
	} else {
		echo "sdudb error";
	}


	echo "start address<br />";
	flush();
//	$sql = "select distinct code from (select distinct code from hhstatus union select distinct code from qustatus)";
//	$result1 = mysql_query($sql,$link);
	$sql = "select * from address where (`visit` <> 'del' or `visit` is null) and `nf` is not null";
	$result = mysql_query($sql,$link);
	
	if ($result != false) {
		$num_rows = mysql_num_rows($result);
		$num_fields = mysql_num_fields($result);
		for ($i = 0 ; $i < $num_rows ; $i++) {
			$sql = "insert into `addressbk` (";
			$rows = mysql_fetch_row($result);
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[11]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload addressbk error<br />";
			}



			$sql = "update `address` set visit = 'del' where code = '".$rows[11]."'";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "delete sdudb error<br />";
			}

		
			
			$sql = "insert into `address` (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "`".mysql_field_name($result,$j)."`,";
			}
			$sql .= "`".mysql_field_name($result, $num_fields-1)."` ) values (";
			for ($j = 1 ; $j < $num_fields-1 ; $j++) {
				$sql .= "'".$rows[$j]."',";
			}
			$sql .= "'".$rows[$num_fields-1]."');";
			echo $rows[11]."<br />";
			$result2 = mysql_query($sql,$link2);
			if ($result2 == false) {
				echo "upload address error<br />";
			}
			flush();
		}
	} else {
		echo "sdudbbk error";
	}
	@mysql_free_result($result);
	@mysql_free_result($result2);
	mysql_close($link);
	mysql_close($link2);
	
	
?>