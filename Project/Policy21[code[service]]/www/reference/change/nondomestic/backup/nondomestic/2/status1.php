<div id="status1" class="orgbor"><center>
<table width="1100" ><tr><td class = "left" colspan = "3">
狀況:
<select name = "stat" id = "stat">
<option value = "" ></option>
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
	
for ($i = 0 ; $i < 10 ; $i++) {
	echo "<option value = \"".$stat[$i]."\" >";
	echo $statlabel[$i];
	echo "</option>\n";
} 
	
?>
</select>
預約:<input type="text" name = "datepicker" id="datepicker">
<select name = "hh" id = "hh">
<option value = ""></option>
<option value = "00">00</option>
<option value = "01">01</option>
<option value = "02">02</option>
<option value = "03">03</option>
<option value = "04">04</option>
<option value = "05">05</option>
<option value = "06">06</option>
<option value = "07">07</option>
<option value = "08">08</option>
<option value = "09">09</option>
<option value = "10">10</option>
<option value = "11">11</option>
<option value = "12">12</option>
<option value = "13">13</option>
<option value = "14">14</option>
<option value = "15">15</option>
<option value = "16">16</option>
<option value = "17">17</option>
<option value = "18">18</option>
<option value = "19">19</option>
<option value = "20">20</option>
<option value = "21">21</option>
<option value = "22">22</option>
<option value = "23">23</option>
</select>:
<select name = "mm" id = "mm">
<option value = ""></option>
<option value = "00">00</option>
<option value = "15">15</option>
<option value = "30">30</option>
<option value = "45">45</option>
</select>
備註:<input type = "text" name = "remark" id = "remark" >
<input type = "submit" name = "sub1" id = "sub1" value = "提交"></td></tr>
</table></center>
</div>


