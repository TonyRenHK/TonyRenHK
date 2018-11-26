<!--------------domestic/water ------------->



<head>
<Title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
if ((@$_POST["sub"] == "login")&&(@$_POST["pass"]== "p21!!!")) {
?>

<table border = 1>

<?php
	$host="localhost";
	$ser="wateruser";
	$pass="Policy21!!!!";
	$db="water";	
	date_default_timezone_set('Asia/Hong_Kong');
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
    	mysql_select_db($db,$link) or die("Could not connect database");
		mysql_query("SET character_set_client=utf8"); 
		mysql_query("SET character_set_connection=utf8"); 
		mysql_query("SET character_set_database=utf8"); 
		mysql_query("SET character_set_results=utf8"); 
		mysql_query("SET character_set_server=utf8"); 
		mysql_query("SET NAMES 'utf8'");
	$sql = "select * from waterdb where q1_1a <> \"\"";
	$result = mysql_query($sql,$link) or die("invalid query");
	$num_rows = mysql_num_rows($result);
	$num_fields = mysql_num_fields($result);
	echo "<tr>";
	for ($j = 0; $j < $num_fields; $j++) {
		echo "<td>";
		echo mysql_field_name($result,$j);
		echo "</td>";
	}
	echo "</tr>";
	for ($i = 0; $i < $num_rows; $i++) {
		$row = mysql_fetch_row($result);
		echo "<tr>";
		for ($j = 0; $j < $num_fields; $j++) {
			echo "<td>";
			if ($row[$j]!="") {
				echo urldecode($row[$j]);
			} else {
				echo "&nbsp;";
			}
			echo "</td>";
		}
		echo "</tr>";
	}

?>

</table>
<?php
}
else {
?>
<form method = post>
<input type = password name = pass /><input type = submit name = sub value = "login" />
</form>
<?php
}
?>
</body>
</html>