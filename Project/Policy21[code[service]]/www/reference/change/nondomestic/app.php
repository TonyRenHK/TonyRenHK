<?php
	$sql = "select * from nondomesticstatus where eno = '".@$eno."' and status = 'AP'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
?>
<div id="app1" class="orgbor"><center>
<table class = "bor" width="1100" border="1" ><center>
	<tr align= "center">
		<th>訪問員編號</th>
		<th>樣本編號</th>
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
</table></div>