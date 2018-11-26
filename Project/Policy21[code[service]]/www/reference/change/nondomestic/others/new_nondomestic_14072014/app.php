<?php
	$sql = "select * from nondomesticstatus where eno = '".@$eno."' and status = 'AP'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
?>
<table class = "bor">
	<tr>
		<th>訪問員編號</th>
		<th>電話號碼</th>
		<th>姓名</th>
		<th>預約</th>
	</tr>
<?php
	for ($i = 0 ; $i < $num_rows ; $i++) {
		$row = mysql_fetch_assoc($result);
		echo "<tr>\n";
		echo "<td>".$row["eno"]."</td>\n";
		echo "<td>".$row["sc"]."</td>\n";
		echo "<td>".$row["nam"]."&nbsp;</td>\n";
		echo "<td>".$row["apd"];
		if ((isset($row["aph"]))&&(@$row["aph"]!="")) {
			echo $row["aph"].":".$row["apm"];
		}
		echo "&nbsp;</td>\n";
		echo "</tr>\n";
	}
?>
</table>
<br />