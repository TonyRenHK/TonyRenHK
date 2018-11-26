<div id = "p9" class = "tw">
	<table class = "head">
		<tr>
			<td><span class = "headspan">第九部分：性傳播疾病 (D) STD</span></td>
		</tr>
	</table>
	<br />
	<br />
	<div id = "dqd0">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D0.</span></td>
				<td colspan = "2"><span class = "b">在您的一生中, 您共與多少人發生過性行為? (包括僅一次)[請包括所有曾與您發生性行為的人, 例如結婚的、沒結婚的、離婚或分手的、臨時的、偶然的（例如“小姐”）或同性]</span></td>
			</tr>
<!--
			<tr>
				<td class = "qno">&nbsp;</td>
				<td><input type = "text" class = "qd0a" name = "qd0a" id = "qd0a" value = "<?php echo @$ans["qd0a"]; ?>">人</td>
			</tr>
-->
			<tr>
				<td class = "qno"><input type = "radio" class = "qd0" name = "qd0" id = "qd0_1" value = "1" <?php echo @$ans["qd0"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd0_1">1.</label></td>
				<td><label for  = "qd0_1">1人</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd0" name = "qd0" id = "qd0_2" value = "2" <?php echo @$ans["qd0"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd0_2">2.</label></td>
				<td><label for  = "qd0_2">2-3人</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd0" name = "qd0" id = "qd0_3" value = "3" <?php echo @$ans["qd0"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd0_3">3.</label></td>
				<td><label for  = "qd0_3">4-6 人</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd0" name = "qd0" id = "qd0_4" value = "4" <?php echo @$ans["qd0"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd0_4">4.</label></td>
				<td><label for  = "qd0_4">7-9人</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd0" name = "qd0" id = "qd0_5" value = "5" <?php echo @$ans["qd0"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd0_5">5.</label></td>
				<td><label for  = "qd0_5">10 人或以上</label></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqd1">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D1.</span></td>
				<td colspan = "3"><span class = "b">以下問題跟通過性傳播的疾病有關, 即使您從未有過這類感染也請回答以下問題:如果您感覺自己可能感染上某種由性傳播的感染, 您會先到哪裡尋求診斷和/或治療？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd1" name = "qd1" id = "qd1_1" value = "1" <?php echo @$ans["qd1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd1_1">1.</label></td>
				<td><label for  = "qd1_1">私家診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd1" name = "qd1" id = "qd1_2" value = "2" <?php echo @$ans["qd1"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd1_2">2.</label></td>
				<td><label for  = "qd1_2">公立診所</label></td>
			</tr>
<!--			
			<tr id = "dqd1_2a">
				<td colspan = "3">
					<table>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qd1_2" name = "qd1_2a" id = "qd1_2a_1" value = "1" <?php echo @$ans["qd1_2a"] == "1" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qd1_2a_1">a)</label></td>
							<td><label for  = "qd1_2a_1">公立診所</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qd1_2" name = "qd1_2a" id = "qd1_2a_2" value = "2" <?php echo @$ans["qd1_2a"] == "2" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qd1_2a_2">b)</label></td>
							<td><label for  = "qd1_2a_2">家計會</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qd1_2" name = "qd1_2a" id = "qd1_2a_3" value = "3" <?php echo @$ans["qd1_2a"] == "3" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qd1_2a_3">c)</label></td>
							<td><label for  = "qd1_2a_3">社會衛生科診所</label></td>
						</tr>
					</table>
				</td>
			</tr>
-->			
			<tr>
				<td class = "qno"><input type = "radio" class = "qd1" name = "qd1" id = "qd1_3" value = "3" <?php echo @$ans["qd1"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd1_3">3.</label></td>
				<td><label for  = "qd1_3">藥房</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd1" name = "qd1" id = "qd1_4" value = "4" <?php echo @$ans["qd1"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd1_4">4.</label></td>
				<td><label for  = "qd1_4">私家醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd1" name = "qd1" id = "qd1_5" value = "5" <?php echo @$ans["qd1"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd1_5">5.</label></td>
				<td><label for  = "qd1_5">公立醫院 (公立綜合性醫院的皮膚科或婦產科)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd1" name = "qd1" id = "qd1_6" value = "6" <?php echo @$ans["qd1"] == "6" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd1_6">6.</label></td>
				<td><label for  = "qd1_6">其他, 請註明：</label><input type = "text" class = "qd1_6" name = "qd1_6a" id = "qd1_6a" value = "<?php echo @$ans["qd1_6a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqd2">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D2.</span></td>
				<td colspan = "3"><span class = "b">您您是否同意(我可以自然地向我的醫生提出有關性傳播疾病檢測方面的要求)?</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd2" name = "qd2" id = "qd2_1" value = "1" <?php echo @$ans["qd2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd2_1">1.</label></td>
				<td><label for  = "qd2_1">非常不同意</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd2" name = "qd2" id = "qd2_2" value = "2" <?php echo @$ans["qd2"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd2_2">2.</label></td>
				<td><label for  = "qd2_2">不同意</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd2" name = "qd2" id = "qd2_3" value = "3" <?php echo @$ans["qd2"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd2_3">3.</label></td>
				<td><label for  = "qd2_3">同意</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd2" name = "qd2" id = "qd2_4" value = "4" <?php echo @$ans["qd2"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd2_4">4.</label></td>
				<td><label for  = "qd2_4">非常同意</label></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	
	<div id = "dqd3">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D3.</span></td>
				<td colspan = "2"><span class = "b">有沒有醫生或其他醫療專業人士 (自我檢測亦包括在內) 告知您可能感染以下某種由性傳播的疾病？ 如有, 大概是於什麼時候發生?</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd3" name = "qd3" id = "qd3_1" value = "1" <?php echo @$ans["qd3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd3_1">1.</label></td>
				<td><label for  = "qd3_1">有</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd3" name = "qd3" id = "qd3_2" value = "2" <?php echo @$ans["qd3"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd3_2">2.</label></td>
				<td><label for  = "qd3_2">沒有</label></td>
			</tr>
		</table>
		
		
		
		<br />
		<div id = "dqd3_1">
			<table class = "bor">
				<tr>
					<td class = "qno"><span class = "">題號</span></td>
					<td><span class = "">選項</span></td>
					<td class = "cen"><span class = "">(1) 從不檢測過此項</span></td>
					<td class = "cen"><span class = "">(2) 確認感染次數</span></td>
					<td class = "cen"><span class = "">(3) 1年內曾確認感染</span></td>
				</tr>
				<tr class = "odd">
					<td class = "qno"><span class = "">1</span></td>
					<td>衣原體</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3a" name = "qd3a" id = "qd3a_1" value = "1" <?php echo @$ans["qd3a"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3aa" id = "qd3aa">
							<option value = "0" <?php echo @$ans["qd3aa"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3aa"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3aa"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3aa"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3aa"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3aa"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3aa"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3aa"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3aa"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3aa"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3aa"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3a" name = "qd3a" id = "qd3a_2" value = "2" <?php echo @$ans["qd3a"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "even">
					<td class = "qno"><span class = "">2</span></td>
					<td>淋病</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3b" name = "qd3b" id = "qd3b_1" value = "1" <?php echo @$ans["qd3b"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ba" id = "qd3ba">
							<option value = "0" <?php echo @$ans["qd3ba"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ba"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ba"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ba"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ba"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ba"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ba"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ba"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ba"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ba"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ba"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3b" name = "qd3b" id = "qd3b_2" value = "2" <?php echo @$ans["qd3b"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "odd">
					<td class = "qno"><span class = "">3</span></td>
					<td>生殖器疣（尖銳濕疣）</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3c" name = "qd3c" id = "qd3c_1" value = "1" <?php echo @$ans["qd3c"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ca" id = "qd3ca">
							<option value = "0" <?php echo @$ans["qd3ca"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ca"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ca"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ca"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ca"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ca"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ca"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ca"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ca"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ca"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ca"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3c" name = "qd3c" id = "qd3c_2" value = "2" <?php echo @$ans["qd3c"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "even">
					<td class = "qno"><span class = "">4</span></td>
					<td>梅毒</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3d" name = "qd3d" id = "qd3d_1" value = "1" <?php echo @$ans["qd3d"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3da" id = "qd3da">
							<option value = "0" <?php echo @$ans["qd3da"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3da"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3da"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3da"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3da"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3da"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3da"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3da"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3da"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3da"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3da"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3d" name = "qd3d" id = "qd3d_2" value = "2" <?php echo @$ans["qd3d"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "odd">
					<td class = "qno"><span class = "">5</span></td>
					<td>陰道滴蟲</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3e" name = "qd3e" id = "qd3e_1" value = "1" <?php echo @$ans["qd3e"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ea" id = "qd3ea">
							<option value = "0" <?php echo @$ans["qd3ea"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ea"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ea"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ea"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ea"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ea"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ea"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ea"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ea"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ea"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ea"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3e" name = "qd3e" id = "qd3e_2" value = "2" <?php echo @$ans["qd3e"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "even">
					<td class = "qno"><span class = "">6</span></td>
					<td>疱疹 (生殖器疱疹)</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3f" name = "qd3f" id = "qd3f_1" value = "1" <?php echo @$ans["qd3f"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3fa" id = "qd3fa">
							<option value = "0" <?php echo @$ans["qd3fa"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3fa"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3fa"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3fa"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3fa"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3fa"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3fa"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3fa"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3fa"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3fa"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3fa"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3f" name = "qd3f" id = "qd3f_2" value = "2" <?php echo @$ans["qd3f"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "odd">
					<td class = "qno"><span class = "">7</span></td>
					<td>陰虱</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3g" name = "qd3g" id = "qd3g_1" value = "1" <?php echo @$ans["qd3g"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ga" id = "qd3ga">
							<option value = "0" <?php echo @$ans["qd3ga"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ga"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ga"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ga"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ga"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ga"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ga"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ga"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ga"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ga"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ga"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3g" name = "qd3g" id = "qd3g_2" value = "2" <?php echo @$ans["qd3g"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "male even">
					<td class = "qno"><span class = "">8</span></td>
					<td><span class = "b">僅針對男性:</span> (非特異性尿道炎， 非淋球菌尿道炎)</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3h" name = "qd3h" id = "qd3h_1" value = "1" <?php echo @$ans["qd3h"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ha" id = "qd3ha">
							<option value = "0" <?php echo @$ans["qd3ha"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ha"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ha"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ha"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ha"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ha"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ha"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ha"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ha"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ha"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ha"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3h" name = "qd3h" id = "qd3h_2" value = "2" <?php echo @$ans["qd3h"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "male odd">
					<td class = "qno"><span class = "">9</span></td>
					<td><span class = "b">僅針對男性:</span> 附睾炎</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3i" name = "qd3i" id = "qd3i_1" value = "1" <?php echo @$ans["qd3i"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ia" id = "qd3ia">
							<option value = "0" <?php echo @$ans["qd3ia"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ia"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ia"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ia"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ia"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ia"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ia"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ia"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ia"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ia"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ia"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3i" name = "qd3i" id = "qd3i_2" value = "2" <?php echo @$ans["qd3i"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "female even">
					<td class = "qno"><span class = "">10</span></td>
					<td><span class = "b">僅針對女性:</span> 盆腔炎(輸卵管炎)</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3j" name = "qd3j" id = "qd3j_1" value = "1" <?php echo @$ans["qd3j"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ja" id = "qd3ja">
							<option value = "0" <?php echo @$ans["qd3ja"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ja"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ja"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ja"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ja"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ja"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ja"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ja"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ja"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ja"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ja"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3j" name = "qd3j" id = "qd3j_2" value = "2" <?php echo @$ans["qd3j"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "odd">
					<td class = "qno"><span class = "">11</span></td>
					<td>有過此類檢查, 但是不記得是哪一種了</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3k" name = "qd3k" id = "qd3k_1" value = "1" <?php echo @$ans["qd3k"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3ka" id = "qd3ka">
							<option value = "0" <?php echo @$ans["qd3ka"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3ka"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3ka"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3ka"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3ka"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3ka"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3ka"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3ka"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3ka"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3ka"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3ka"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3k" name = "qd3k" id = "qd3k_2" value = "2" <?php echo @$ans["qd3k"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "even">
					<td class = "qno"><span class = "">12</span></td>
					<td>其他, 請註明：<input type = "text" class = "qd3_12" name = "qd3_12a" id = "qd3_12a" value = "<?php echo @$ans["qd3_12a"]; ?>"></td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3l" name = "qd3l" id = "qd3l_1" value = "1" <?php echo @$ans["qd3l"] == "1" ? "checked":""; ?> ></span></td>
					<td class = "cen">
						<select name = "qd3la" id = "qd3la">
							<option value = "0" <?php echo @$ans["qd3la"] == "0" ? "selected":""; ?>>0</option>
							<option value = "1" <?php echo @$ans["qd3la"] == "1" ? "selected":""; ?>>1</option>
							<option value = "2" <?php echo @$ans["qd3la"] == "2" ? "selected":""; ?>>2</option>
							<option value = "3" <?php echo @$ans["qd3la"] == "3" ? "selected":""; ?>>3</option>
							<option value = "4" <?php echo @$ans["qd3la"] == "4" ? "selected":""; ?>>4</option>
							<option value = "5" <?php echo @$ans["qd3la"] == "5" ? "selected":""; ?>>5</option>
							<option value = "6" <?php echo @$ans["qd3la"] == "6" ? "selected":""; ?>>6</option>
							<option value = "7" <?php echo @$ans["qd3la"] == "7" ? "selected":""; ?>>7</option>
							<option value = "8" <?php echo @$ans["qd3la"] == "8" ? "selected":""; ?>>8</option>
							<option value = "9" <?php echo @$ans["qd3la"] == "9" ? "selected":""; ?>>9</option>
							<option value = "10" <?php echo @$ans["qd3la"] == "10" ? "selected":""; ?>>10</option>
						</select>
					</td>
					<td class = "cen"><span class = ""><input type = "radio" class = "qd3l" name = "qd3l" id = "qd3l_2" value = "2" <?php echo @$ans["qd3l"] == "2" ? "checked":""; ?> ></span></td>
				</tr>
				<tr class = "odd">
					<td class = "qno"><span class = "">13</span></td>
					<td>我從來沒有檢測過</td>
					<td class = "cen"><span class = ""><input type = "checkbox" class = "qd3mx" name = "qd3m" id = "qd3m" value = "1" <?php echo @$ans["qd3m"] == "1" ? "checked":""; ?> ></span></td>
					<td colspan = "3" class = "cen">&nbsp;</td>
				</tr>
			</table>
		</div>
		<br />
	</div>
	
	
	
	
	


	<div id = "dqd4">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D4.</span></td>
				<td colspan = "3"><span class = "b">以下問題跟通過性傳播的感染有關, 即使您從未有過這類感染也請回答以下問題:如果您感覺自己可能感染上某種由性傳播的感染, 您會先到哪裡尋求診斷和/或治療？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd4" name = "qd4_1" id = "qd4_1" value = "1" <?php echo @$ans["qd4_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd4_1">1.</label></td>
				<td><label for  = "qd4_1">私家診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd4" name = "qd4_2" id = "qd4_2" value = "1" <?php echo @$ans["qd4_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd4_2">2.</label></td>
				<td><label for  = "qd4_2">公立診所</label></td>
			</tr>
<!--			
			<tr id = "dqd4_2a">
				<td colspan = "3">
					<table>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "checkbox" class = "qd4_2" name = "qd4_2a_1" id = "qd4_2a_1" value = "1" <?php echo @$ans["qd4_2a_1"] == "1" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qd4_2a_1">a)</label></td>
							<td><label for  = "qd4_2a_1">公立診所</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "checkbox" class = "qd4_2" name = "qd4_2a_2" id = "qd4_2a_2" value = "1" <?php echo @$ans["qd4_2a_2"] == "1" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qd4_2a_2">b)</label></td>
							<td><label for  = "qd4_2a_2">家計會</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "checkbox" class = "qd4_2" name = "qd4_2a_3" id = "qd4_2a_3" value = "1" <?php echo @$ans["qd4_2a_3"] == "1" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qd4_2a_3">c)</label></td>
							<td><label for  = "qd4_2a_3">社會衛生科診所</label></td>
						</tr>
					</table>
				</td>
			</tr>
-->			
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd4" name = "qd4_3" id = "qd4_3" value = "1" <?php echo @$ans["qd4_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd4_3">3.</label></td>
				<td><label for  = "qd4_3">藥房</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd4" name = "qd4_4" id = "qd4_4" value = "1" <?php echo @$ans["qd4_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd4_4">4.</label></td>
				<td><label for  = "qd4_4">私家醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd4" name = "qd4_5" id = "qd4_5" value = "1" <?php echo @$ans["qd4_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd4_5">5.</label></td>
				<td><label for  = "qd4_5">公立醫院 (公立綜合性醫院的皮膚科或婦產科)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd4" name = "qd4_6" id = "qd4_6" value = "1" <?php echo @$ans["qd4_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd4_6">6.</label></td>
				<td><label for  = "qd4_6">其他, 請註明：</label><input type = "text" class = "qd4_6" name = "qd4_6a" id = "qd4_6a" value = "<?php echo @$ans["qd4_6a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>




	<div id = "dqd5">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D5.</span></td>
				<td colspan = "3"><span class = "b">您有沒有接受過HIV檢測？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd5" name = "qd5" id = "qd5_1" value = "1" <?php echo @$ans["qd5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd5_1">1.</label></td>
				<td><label for  = "qd5_1">有</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd5" name = "qd5" id = "qd5_2" value = "2" <?php echo @$ans["qd5"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd5_2">2.</label></td>
				<td><label for  = "qd5_2">沒有</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd5" name = "qd5" id = "qd5_3" value = "3" <?php echo @$ans["qd5"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd5_3">3.</label></td>
				<td><label for  = "qd5_3">不知道</label></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqd6">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D6.</span></td>
				<td colspan = "3"><span class = "b">您在哪裡進行愛滋病（HIV）檢測?</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd6" name = "qd6" id = "qd6_1" value = "1" <?php echo @$ans["qd6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd6_1">1.</label></td>
				<td><label for  = "qd6_1">公立醫院/診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd6" name = "qd6" id = "qd6_2" value = "2" <?php echo @$ans["qd6"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd6_2">2.</label></td>
				<td><label for  = "qd6_2">私人醫院/診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd6" name = "qd6" id = "qd6_3" value = "3" <?php echo @$ans["qd6"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd6_3">3.</label></td>
				<td><label for  = "qd6_3">產前檢查/紅十字會</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd6" name = "qd6" id = "qd6_4" value = "4" <?php echo @$ans["qd6"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd6_4">4.</label></td>
				<td><label for  = "qd6_4">在網上購買檢測工具，然後自行檢測</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd6" name = "qd6" id = "qd6_5" value = "5" <?php echo @$ans["qd6"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd6_5">5.</label></td>
				<td><label for  = "qd6_5">在藥店購買檢測用品，然後自行檢測</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd6" name = "qd6" id = "qd6_6" value = "6" <?php echo @$ans["qd6"] == "6" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd6_6">6.</label></td>
				<td><label for  = "qd6_6">其他, 請註明：</label><input type = "text" class = "qd6_6" name = "qd6_6a" id = "qd6_6a" value = "<?php echo @$ans["qd6_6a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqd7">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D7.</span></td>
				<td colspan = "3"><span class = "b">為什麼您從未接受過愛滋病和性傳播疾病的檢測? </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd7" name = "qd7" id = "qd7_1" value = "1" <?php echo @$ans["qd7"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd7_1">1.</label></td>
				<td><label for  = "qd7_1">我不認為我有感染的危機</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd7" name = "qd7" id = "qd7_2" value = "2" <?php echo @$ans["qd7"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd7_2">2.</label></td>
				<td><label for  = "qd7_2">我很健康,認為我沒任何相關問題</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd7" name = "qd7" id = "qd7_3" value = "3" <?php echo @$ans["qd7"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd7_3">3.</label></td>
				<td><label for  = "qd7_3">不希望別人在背後議論我為何到那些地方</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd7" name = "qd7" id = "qd7_4" value = "4" <?php echo @$ans["qd7"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd7_4">4.</label></td>
				<td><label for  = "qd7_4">不知可到哪裡檢測</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qd7" name = "qd7" id = "qd7_5" value = "5" <?php echo @$ans["qd7"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd7_5">5.</label></td>
				<td><label for  = "qd7_5">其他, 請註明：</label><input type = "text" class = "qd7_5" name = "qd7_5a" id = "qd7_5a" value = "<?php echo @$ans["qd7_5a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqd8">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D8.</span></td>
				<td colspan = "3"><span class = "b">當您發現有梅毒感染時, 您採取了以下哪種方法處理？ (可選多於一項) </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd8" name = "qd8_1" id = "qd8_1" value = "1" <?php echo @$ans["qd8_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd8_1">1.</label></td>
				<td><label for  = "qd8_1">去醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd8" name = "qd8_2" id = "qd8_2" value = "1" <?php echo @$ans["qd8_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd8_2">2.</label></td>
				<td><label for  = "qd8_2">去私人診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd8" name = "qd8_3" id = "qd8_3" value = "1" <?php echo @$ans["qd8_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd8_3">3.</label></td>
				<td><label for  = "qd8_3">去公立診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd8" name = "qd8_4" id = "qd8_4" value = "1" <?php echo @$ans["qd8_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd8_4">4.</label></td>
				<td><label for  = "qd8_4">去社會衛生科診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd8" name = "qd8_5" id = "qd8_5" value = "1" <?php echo @$ans["qd8_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd8_5">5.</label></td>
				<td><label for  = "qd8_5">自我治療</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd8" name = "qd8_6" id = "qd8_6" value = "1" <?php echo @$ans["qd8_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd8_6">6.</label></td>
				<td><label for  = "qd8_6">沒有採取任何醫療方式</label></td>
			</tr>
		</table>
		<br />
	</div>
	<div id = "dqd9">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D9.</span></td>
				<td colspan = "3"><span class = "b">當您發現有淋病感染時, 您採取了以下哪種方法處理？ (可選多於一項)  </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd9" name = "qd9_1" id = "qd9_1" value = "1" <?php echo @$ans["qd9_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd9_1">1.</label></td>
				<td><label for  = "qd9_1">去醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd9" name = "qd9_2" id = "qd9_2" value = "1" <?php echo @$ans["qd9_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd9_2">2.</label></td>
				<td><label for  = "qd9_2">去私人診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd9" name = "qd9_3" id = "qd9_3" value = "1" <?php echo @$ans["qd9_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd9_3">3.</label></td>
				<td><label for  = "qd9_3">去公立診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd9" name = "qd9_4" id = "qd9_4" value = "1" <?php echo @$ans["qd9_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd9_4">4.</label></td>
				<td><label for  = "qd9_4">去社會衛生科診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd9" name = "qd9_5" id = "qd9_5" value = "1" <?php echo @$ans["qd9_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd9_5">5.</label></td>
				<td><label for  = "qd9_5">自我治療</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd9" name = "qd9_6" id = "qd9_6" value = "1" <?php echo @$ans["qd9_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd9_6">6.</label></td>
				<td><label for  = "qd9_6">沒有採取任何醫療方式</label></td>
			</tr>
		</table>
		<br />
	</div>
	<div id = "dqd10">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D10.</span></td>
				<td colspan = "3"><span class = "b">當您發現有衣原體感染時, 您採取了以下哪種方法處理？ (可選多於一項) </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd10" name = "qd10_1" id = "qd10_1" value = "1" <?php echo @$ans["qd10_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd10_1">1.</label></td>
				<td><label for  = "qd10_1">去醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd10" name = "qd10_2" id = "qd10_2" value = "1" <?php echo @$ans["qd10_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd10_2">2.</label></td>
				<td><label for  = "qd10_2">去私人診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd10" name = "qd10_3" id = "qd10_3" value = "1" <?php echo @$ans["qd10_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd10_3">3.</label></td>
				<td><label for  = "qd10_3">去公立診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd10" name = "qd10_4" id = "qd10_4" value = "1" <?php echo @$ans["qd10_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd10_4">4.</label></td>
				<td><label for  = "qd10_4">去社會衛生科診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd10" name = "qd10_5" id = "qd10_5" value = "1" <?php echo @$ans["qd10_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd10_5">5.</label></td>
				<td><label for  = "qd10_5">自我治療</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd10" name = "qd10_6" id = "qd10_6" value = "1" <?php echo @$ans["qd10_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd10_6">6.</label></td>
				<td><label for  = "qd10_6">沒有採取任何醫療方式</label></td>
			</tr>
		</table>
		<br />
	</div>
	<div id = "dqd11">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D11.</span></td>
				<td colspan = "3"><span class = "b">當您發現有陰道滴蟲感染時, 您採取了以下哪種方法處理？ (可選多於一項)  </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd11" name = "qd11_1" id = "qd11_1" value = "1" <?php echo @$ans["qd11_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd11_1">1.</label></td>
				<td><label for  = "qd11_1">去醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd11" name = "qd11_2" id = "qd11_2" value = "1" <?php echo @$ans["qd11_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd11_2">2.</label></td>
				<td><label for  = "qd11_2">去私人診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd11" name = "qd11_3" id = "qd11_3" value = "1" <?php echo @$ans["qd11_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd11_3">3.</label></td>
				<td><label for  = "qd11_3">去公立診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd11" name = "qd11_4" id = "qd11_4" value = "1" <?php echo @$ans["qd11_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd11_4">4.</label></td>
				<td><label for  = "qd11_4">去社會衛生科診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd11" name = "qd11_5" id = "qd11_5" value = "1" <?php echo @$ans["qd11_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd11_5">5.</label></td>
				<td><label for  = "qd11_5">自我治療</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd11" name = "qd11_6" id = "qd11_6" value = "1" <?php echo @$ans["qd11_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd11_6">6.</label></td>
				<td><label for  = "qd11_6">沒有採取任何醫療方式</label></td>
			</tr>
		</table>
		<br />
	</div>
	<div id = "dqd12">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">D12.</span></td>
				<td colspan = "3"><span class = "b">當您發現有疱疹 (生殖器疱疹) 感染時, 您採取了以下哪種方法處理？ (可選多於一項)  </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd12" name = "qd12_1" id = "qd12_1" value = "1" <?php echo @$ans["qd12_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd12_1">1.</label></td>
				<td><label for  = "qd12_1">去醫院</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd12" name = "qd12_2" id = "qd12_2" value = "1" <?php echo @$ans["qd12_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd12_2">2.</label></td>
				<td><label for  = "qd12_2">去私人診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd12" name = "qd12_3" id = "qd12_3" value = "1" <?php echo @$ans["qd12_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd12_3">3.</label></td>
				<td><label for  = "qd12_3">去公立診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd12" name = "qd12_4" id = "qd12_4" value = "1" <?php echo @$ans["qd12_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd12_4">4.</label></td>
				<td><label for  = "qd12_4">去社會衛生科診所</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd12" name = "qd12_5" id = "qd12_5" value = "1" <?php echo @$ans["qd12_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd12_5">5.</label></td>
				<td><label for  = "qd12_5">自我治療</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qd12" name = "qd12_6" id = "qd12_6" value = "1" <?php echo @$ans["qd12_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qd12_6">6.</label></td>
				<td><label for  = "qd12_6">沒有採取任何醫療方式</label></td>
			</tr>
		</table>
		<br />
	</div>

</div>
