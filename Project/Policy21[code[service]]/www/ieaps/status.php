




<?php
	$stat = array();
	$stat[0] = "C";
	$stat[1] = "PC";
	$stat[2] = "NF";
	$stat[3] = "NC";
	$stat[4] = "UK";
	$stat[5] = "NE";
	$stat[6] = "NSP";
	$stat[7] = "COM";
	$stat[8] = "NR";
	$stat[9] = "AP";
	$statlabel = array();
	$statlabel[0] = "C";
	$statlabel[1] = "PC";
	$statlabel[2] = "NF";
	$statlabel[3] = "NC";
	$statlabel[4] = "UK";
	$statlabel[5] = "NE";
	$statlabel[6] = "NSP";
	$statlabel[7] = "COM";
	$statlabel[8] = "NR";
	$statlabel[9] = "AP";
?>








<center>
<select name = "stat1" id = "stat1">
<option value = "" ></option>
<?php
	
for ($i = 0 ; $i < 10 ; $i++) {
	echo "<option value = \"".$stat[$i]."\" >";
	echo $statlabel[$i];
	echo "</option>\n";
} 
	
?>
</select>
</center>