<?php
	$sql = "select * from nondomesticstatus where sc = '".@$sc."'";
	$result = mysql_query($sql,$link);
	$num_rows = mysql_num_rows($result);
?>
<div id="status" class="orgbor"><center>
<table width="1100" class = "bor" border="1" >
	<tr align= "center" >
		<th>訪問員編號</th>
		<th>開始時間</th>
		<th>結束時間</th>
		<th>狀況</th>
		<th>姓名</th>
		<th>預約</th>
		<th>備註</th>
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
		echo "<td>".$row["remark"]."&nbsp;</td>\n";
		//echo "<td>".$row["remark"];
		echo "&nbsp;</td>\n";
		echo "</tr>\n";
		$nam = $row["nam"];
	}
?>
</table>
</table></center>
</div>

<div id="interview_nam" class="orgbor"><center>
<table width="1100" ><tr><td align = "left" colspan = "3">
<br />
受訪者姓名：<input type = "text" name = "nam" id = "nam" value = "<?php echo $nam; ?>">
<br />
</td></tr>
</table></center>
</div>