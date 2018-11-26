<div id = "px" class = "tw">

<div class = "cen b" >
本港性病發病率及相關風險因素研究
</div>

	<div id = "dqx1">
		<table class = "">
			<tr>
				<td class = ""><span class = "b">參考編號:<input type = "text" class = "sc" name = "sc" id = "sc" value = "<?php echo @$_POST["addr"]; ?>" readonly></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "b">訪問日期 (由電腦填寫):<input type = "text" class = "mm tt" name = "mm" id = "mm" value = "<?php echo date('d'); ?>" readonly>/<input type = "text" class = "dd tt" name = "dd" id = "dd" value = "<?php echo date('m'); ?>" readonly>/<input type = "text" class = "yy tt" name = "yy" id = "yy" value = "<?php echo date('Y'); ?>" readonly><input type = "hidden" name = "tt" class = "tt" id = "tt" value = "<?php echo time(); ?>"></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "b">訪問員編號:<input type = "text" class = "eno" name = "eno" id = "eno" value = "<?php echo @$_POST["eno"]; ?>" readonly></span></td>
			</tr>
		</table>
		<br />
	</div>

	<table class = "">
		<tr>
			<td><span class = "b">受訪對象過濾問題:</span></td>
		</tr>
	</table>
	<br />

	<div id = "dqx1">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">1.</span></td>
				<td class = ""><span class = "b">您的出生年份為？
				<select name = "qx1" id = "qx1">
					<option value = ""></option>
					<option value = "NSP" <?php echo @$ans["qx1"] == "NSP"?"selected":""; ?>>NSP</option>
					<option value = "1965" <?php echo @$ans["qx1"] == "1965"?"selected":""; ?>>1965</option>
					<option value = "1966" <?php echo @$ans["qx1"] == "1966"?"selected":""; ?>>1966</option>
					<option value = "1967" <?php echo @$ans["qx1"] == "1967"?"selected":""; ?>>1967</option>
					<option value = "1968" <?php echo @$ans["qx1"] == "1968"?"selected":""; ?>>1968</option>
					<option value = "1969" <?php echo @$ans["qx1"] == "1969"?"selected":""; ?>>1969</option>
					<option value = "1970" <?php echo @$ans["qx1"] == "1970"?"selected":""; ?>>1970</option>
					<option value = "1971" <?php echo @$ans["qx1"] == "1971"?"selected":""; ?>>1971</option>
					<option value = "1972" <?php echo @$ans["qx1"] == "1972"?"selected":""; ?>>1972</option>
					<option value = "1973" <?php echo @$ans["qx1"] == "1973"?"selected":""; ?>>1973</option>
					<option value = "1974" <?php echo @$ans["qx1"] == "1974"?"selected":""; ?>>1974</option>
					<option value = "1975" <?php echo @$ans["qx1"] == "1975"?"selected":""; ?>>1975</option>
					<option value = "1976" <?php echo @$ans["qx1"] == "1976"?"selected":""; ?>>1976</option>
					<option value = "1977" <?php echo @$ans["qx1"] == "1977"?"selected":""; ?>>1977</option>
					<option value = "1978" <?php echo @$ans["qx1"] == "1978"?"selected":""; ?>>1978</option>
					<option value = "1979" <?php echo @$ans["qx1"] == "1979"?"selected":""; ?>>1979</option>
					<option value = "1980" <?php echo @$ans["qx1"] == "1980"?"selected":""; ?>>1980</option>
					<option value = "1981" <?php echo @$ans["qx1"] == "1981"?"selected":""; ?>>1981</option>
					<option value = "1982" <?php echo @$ans["qx1"] == "1982"?"selected":""; ?>>1982</option>
					<option value = "1983" <?php echo @$ans["qx1"] == "1983"?"selected":""; ?>>1983</option>
					<option value = "1984" <?php echo @$ans["qx1"] == "1984"?"selected":""; ?>>1984</option>
					<option value = "1985" <?php echo @$ans["qx1"] == "1985"?"selected":""; ?>>1985</option>
					<option value = "1986" <?php echo @$ans["qx1"] == "1986"?"selected":""; ?>>1986</option>
					<option value = "1987" <?php echo @$ans["qx1"] == "1987"?"selected":""; ?>>1987</option>
					<option value = "1988" <?php echo @$ans["qx1"] == "1988"?"selected":""; ?>>1988</option>
					<option value = "1989" <?php echo @$ans["qx1"] == "1989"?"selected":""; ?>>1989</option>
					<option value = "1990" <?php echo @$ans["qx1"] == "1990"?"selected":""; ?>>1990</option>
					<option value = "1991" <?php echo @$ans["qx1"] == "1991"?"selected":""; ?>>1991</option>
					<option value = "1992" <?php echo @$ans["qx1"] == "1992"?"selected":""; ?>>1992</option>
					<option value = "1993" <?php echo @$ans["qx1"] == "1993"?"selected":""; ?>>1993</option>
					<option value = "1994" <?php echo @$ans["qx1"] == "1994"?"selected":""; ?>>1994</option>
					<option value = "1995" <?php echo @$ans["qx1"] == "1995"?"selected":""; ?>>1995</option>
					<option value = "1996" <?php echo @$ans["qx1"] == "1996"?"selected":""; ?>>1996</option>
				</select>
				<!--<input type = "text" class = "qx1" name = "qx1" id = "qx1" value = "<?php echo @$ans["qx1"]; ?>"></span>-->
				
				</td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td class = ""><span class = "">(於1965-1996期間出生均為受訪對象)</span></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqx2">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">2.</span></td>
				<td colspan = "3"><span class = "b">截至目前為止，您是否曾經和他人（包括同性或異性）發生***親密關係？</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b"></span></td>
				<td colspan = "3"><span class = "b">***(親密關係只包括口交，性交及肛交)</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qx2" name = "qx2" id = "qx2_1" value = "1" <?php echo @$ans["qx2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qx2_1">1.</label></td>
				<td><label for  = "qx2_1">是 (受訪對象)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qx2" name = "qx2" id = "qx2_2" value = "2" <?php echo @$ans["qx2"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qx2_2">2.</label></td>
				<td><label for  = "qx2_2">否 (非受訪對象)</label></td>
			</tr>
		</table>
		<br />
	</div>		
	
	<div id = "dqx3">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">3.</span></td>
				<td colspan = "3"><span class = "b">您是否持有香港身份證 (包括永久或非永久之香港身份證)？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qx3" name = "qx3" id = "qx3_1" value = "1" <?php echo @$ans["qx3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qx3_1">1.</label></td>
				<td><label for  = "qx3_1">是 (受訪對象)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qx3" name = "qx3" id = "qx3_2" value = "2" <?php echo @$ans["qx3"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qx3_2">2.</label></td>
				<td><label for  = "qx3_2">否 (非受訪對象)</label></td>
			</tr>
		</table>
		<br />
	</div>			
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>