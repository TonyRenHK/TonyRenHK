<?php
	$host="localhost";
	$ser="wateruser";
	$pass="Policy21!!!!";
	$db="water";	
	date_default_timezone_set('Asia/Hong_Kong');
	$link = mysql_connect($host, $ser, $pass) or die("Could not connect");
    	mysql_select_db($db,$link) or die("Could not connect database");
		mysql_query("set names utf8");
?>
<html>
<head>
<Title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
if (((@$_POST["sub"] == "login")&&(@$_POST["pass"] == "policy21"))||(@$_POST["sub"] == "submit")) {
?>
<form method = post>
<select name = "eno">
<option value = "">ALL</option>

<?php
	$sql = "select distinct eno from waterstatus order by eno";
	$result = mysql_query($sql,$link) or die("invalid query");
	$num_rows = mysql_num_rows($result);
	
for ($i = 0 ; $i < $num_rows ; $i++)
{
	$row = mysql_fetch_row($result);
	echo "<option value = \"".$row[0]."\"";
	if (@$_POST["eno"] == $row[0]) echo "selected";
	echo ">";
	echo $row[0];	
	echo "</option>";
}
?>


</select>
<select name = "dat">
<option value = "">ALL</option>
<?php
//	$sql = "select distinct date_format(FROM_UNIXTIME(st),'%Y-%m-%d') from coshstatus order by st";
	$sql = "select distinct FROM_UNIXTIME((sttt),'%Y-%m-%d') from waterstatus order by sttt";
	$result = mysql_query($sql,$link) or die("invalid query");
	$num_rows = mysql_num_rows($result);
	for ($i = 0 ; $i < $num_rows ; $i++)
	{
	$row = mysql_fetch_row($result);
	echo "<option value = \"".$row[0]."\"";
	if (@$_POST["dat"] == $row[0]) echo "selected";
	echo ">";
	echo $row[0];	
	echo "</option>";
	}
?>
</select>


<select name = "stat">
<option value = "" <?php if (@$_POST["stat"] == "") echo "selected"; ?>>ALL</option>
<option value = "C" <?php if (@$_POST["stat"] == "C") echo "selected"; ?>>C</option>
<option value = "NC" <?php if (@$_POST["stat"] == "NC") echo "selected"; ?>>NC</option>
<option value = "NF" <?php if (@$_POST["stat"] == "NF") echo "selected"; ?>>NF</option>
<option value = "UK" <?php if (@$_POST["stat"] == "UK") echo "selected"; ?>>UK</option>
<option value = "NR" <?php if (@$_POST["stat"] == "NR") echo "selected"; ?>>NR</option>
<option value = "NRR" <?php if (@$_POST["stat"] == "NRR") echo "selected"; ?>>NR(拒絕錄音)</option>
<option value = "NRR" <?php if (@$_POST["stat"] == "NSPN") echo "selected"; ?>>NSPN</option>
<option value = "NSP" <?php if (@$_POST["stat"] == "NSP") echo "selected"; ?>>NSP</option>
<option value = "AP" <?php if (@$_POST["stat"] == "AP") echo "selected"; ?>>AP</option>
<option value = "NE" <?php if (@$_POST["stat"] == "NE") echo "selected"; ?>>NE</option>
<option value = "PC" <?php if (@$_POST["stat"] == "PC") echo "selected"; ?>>PC</option>
</select>

<input type = submit name = sub value = "submit" />
</form>

<table border = 1>

<?php
	$sql = "select waterstatus.* from waterstatus";
	$sql .= " where 1 = 1";
	if (@$_POST["eno"] != "")
	{
		$sql .= " and waterstatus.eno = '".$_POST["eno"]."'";
	}
	if (@$_POST["stat"] != "")
	{
		$sql .= " and waterstatus.status = '".$_POST["stat"]."'";
	}
	if (@$_POST["dat"] != "")
	{
		$sql .= " and FROM_UNIXTIME((sttt),'%Y-%m-%d') = '".$_POST["dat"]."'";
	}


	$result = mysql_query($sql,$link) or die("invalid query");
	$num_rows = mysql_num_rows($result);
	$num_fields = mysql_num_fields($result);
	echo "<tr>";
	echo "<td colspan = \"".$num_fields."\" />"."Total : ".$num_rows."</td>";
	echo "</tr>";
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
				echo $row[$j];
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










