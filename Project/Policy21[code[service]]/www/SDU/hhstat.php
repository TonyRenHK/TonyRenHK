<table class = "bor" id = "dhhstat">
<?php
$ttt = time();


?>
		<tr>
			<td class = "cen">Remark</td>
			<td class = "cen"><input type = "text" name = "remark2" id = "remark2" value = "<?php echo @$ans["remark2"]; ?>" ></td>
		</tr>
		<tr>
			<td class = "cen">訪問員號碼</td>
			<td class = "cen"><?php echo @$_POST["eno"]; ?></td>
		</tr>
		<tr>
			<td class = "cen">聯絡電話號碼</td>
			<td class = "cen"><input type = "text" name = "tel" id = "tel" value = ""></td>
		</tr>
		<tr>
			<td class = "cen">聯絡人姓名</td>
			<td class = "cen"><input type = "text" name = "nam" id = "nam" value = ""></td>
		</tr>
		<tr>
			<td class = "cen">日期</td>
			<td class = "cen"><input type = "text" name = "hhdd" id = "hhdd" value = "<?php echo date('Y-m-d', $ttt); ?>" readonly></td>
		</tr>
		<tr>
			<td class = "cen">開始時間</td>
			<td class = "cen"><input type = "text" name = "hhst" id = "hhst" value = "<?php echo date('H:i', $ttt); ?>" readonly></td>
		</tr>

		<tr>
			<td class = "cen">訪問形式</td>
			<td class = "cen">
				<select name = "hhtyp" id = "hhtyp">
					<option value = "1">上門</option>
					<option value = "2">電話</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class = "cen">成功訪問成員編號</td>
			<td class = "cen"><input type = "text" name = "hhmem" id = "hhmem" value = ""></td>
		</tr>
		<tr>
			<td class = "cen">訪問結果</td>
			<td class = "cen">
				<select name = "hhstat" id = "hhstat">
					<option value = ""> </option>
					<option value = "EN">Enumerated (完成整個訪問)</option>
					<option value = "NC">Non-Contact (無人應門)</option>
					<option value = "NR">Refusal (拒絕訪問)</option>
					<option value = "ND">Non-Domestic (非住宅用途)</option>
					<option value = "MER">MERged (合併單位)</option>
					<option value = "DEM">DEMolished (已拆卸)</option>
					<option value = "SH">Second Home (第二居所)</option>
					<option value = "PE">Partially Enumerated (部分完成)</option>
					<option value = "UN">Unoccupied (空置)</option>
					<option value = "INS">Institution (院舍)</option>
					<option value = "QAD">Quarter access Denied (單位不能進入)</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class = "cen">結束時間</td>
			<td class = "cen"><input type = "text" name = "hhet" id = "hhet" value = "" readonly></td>
		</tr>
</table>