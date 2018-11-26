<?php

	$ttt = time();
	$ddd = date('Y-m-d', $ttt);
	$st = date('h:i', $ttt);

	$stat = array();
	$stat[0] = "";
	$stat[1] = "C";
	$stat[2] = "PC";
	$stat[3] = "NF";
	$stat[4] = "NC";
	$stat[5] = "UK";
	$stat[6] = "NE";
	$stat[7] = "NSP";
	$stat[8] = "COM";
	$stat[9] = "NR";
	$stat[10] = "AP";

	$statlabel = array();
	$statlabel[0] = "";
	$statlabel[1] = "C";
	$statlabel[2] = "PC";
	$statlabel[3] = "NF";
	$statlabel[4] = "NC";
	$statlabel[5] = "UK";
	$statlabel[6] = "NE";
	$statlabel[7] = "NSP";
	$statlabel[8] = "COM";
	$statlabel[9] = "NR";
	$statlabel[10] = "AP";

?>
<input type = "hidden" name = "ttt" id = "ttt" value = <?php  echo $ttt; ?>>
<table class = "bor statt">
	<tr>
		<td>日期：</td>
		<td><input type = "text" name = "ddd" id = "ddd" value = <?php  echo $ddd; ?> readonly></td>
	</tr>
	<tr>
		<td>時間：</td>
		<td><input type = "text" name = "st" id = "st" value = <?php  echo $st; ?> readonly></td>
	</td>
	</tr>
		<td>結果：</td>
		<td>
			<select name = "stat" id = "stat">
				<?php
					for ($i = 0 ; $i < 11 ; $i++) {
						echo "<option value = \"".$stat[$i]."\" >";
						echo $statlabel[$i];
						echo "</option>\n";
					}
				?>
			</select>
		</td>
	</tr>
</table>


