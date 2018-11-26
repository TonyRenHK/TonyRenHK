<?php
	$sql = "select * from icacbrandstatus where sc = '".@$sc."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
?>
<table class = "bor">
	<tr>
		<th>訪問員編號</th>
		<th>開始時間</th>
		<th>結束時間</th>
		<th>狀況</th>
		<th>姓名</th>
		<th>預約</th>
	</tr>
<?php
	$nam = "";
	for ($i = 0 ; $i < $num_rows ; $i++) {
		$row = mysql_fetch_assoc($result);
		echo "<tr>\n";
		echo "<td>".$row["eno"]."</td>\n";
		echo "<td>".$row["st"]."</td>\n";
		echo "<td>".$row["ed"]."</td>\n";
		echo "<td>".$row["status"]."</td>\n";
		echo "<td>".$row["nam"]."&nbsp;</td>\n";
		echo "<td>".$row["apd"];
		if ((isset($row["aph"]))&&(@$row["aph"]!="")) {
			echo $row["aph"].":".$row["apm"];
		}
		echo "&nbsp;</td>\n";
		echo "</tr>\n";
		$nam = $row["nam"];
	}
?>
</table>
<br />
受訪者姓名：<input type = "text" name = "nam" id = "nam" value = "<?php echo $nam; ?>">
<br />