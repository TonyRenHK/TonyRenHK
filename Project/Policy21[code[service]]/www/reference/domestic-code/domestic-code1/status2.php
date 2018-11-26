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