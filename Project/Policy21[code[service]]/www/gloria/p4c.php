<div id = "p4c" class = "tw">

<!--
	<div id = "dqmh5">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">MH5.</span></td>
				<td colspan = "3"><span class = "b">於過去十二個月，您曾經向下列那些人尋求協助以解決心理或精神問題：</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5" name = "qmh5" id = "qmh5_1" value = "1" <?php echo @$ans["qmh5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5_1">1.</label></td>
				<td><label for  = "qmh5_1">從不尋求協助，為甚麼?</label>
					<div id = "dqmh5_1">
						<table class = "">
							<tr>
								<td class = "qno"><input type = "radio" class = "qmh5_1" name = "qmh5_1" id = "qmh5_1_1" value = "1" <?php echo @$ans["qmh5_1"] == "1" ? "checked":""; ?> ></td>
								<td class = "ano"><label for  = "qmh5_1_1">1.</label></td>
								<td><label for  = "qmh5_1_1">不知應到哪裡尋求協助</label></td>
							</tr>
							<tr>
								<td class = "qno"><input type = "radio" class = "qmh5_1" name = "qmh5_1" id = "qmh5_1_2" value = "2" <?php echo @$ans["qmh5_1"] == "2" ? "checked":""; ?> ></td>
								<td class = "ano"><label for  = "qmh5_1_2">2.</label></td>
								<td><label for  = "qmh5_1_2">價錢昂貴</label></td>
							</tr>
							<tr>
								<td class = "qno"><input type = "radio" class = "qmh5_1" name = "qmh5_1" id = "qmh5_1_3" value = "3" <?php echo @$ans["qmh5_1"] == "3" ? "checked":""; ?> ></td>
								<td class = "ano"><label for  = "qmh5_1_3">3.</label></td>
								<td><label for  = "qmh5_1_3">沒有時間</label></td>
							</tr>
							<tr>
								<td class = "qno"><input type = "radio" class = "qmh5_1" name = "qmh5_1" id = "qmh5_1_4" value = "4" <?php echo @$ans["qmh5_1"] == "4" ? "checked":""; ?> ></td>
								<td class = "ano"><label for  = "qmh5_1_4">4.</label></td>
								<td><label for  = "qmh5_1_4">先看情況再決定</label></td>
							</tr>
							<tr>
								<td class = "qno"><input type = "radio" class = "qmh5_1" name = "qmh5_1" id = "qmh5_1_5" value = "5" <?php echo @$ans["qmh5_1"] == "5" ? "checked":""; ?> ></td>
								<td class = "ano"><label for  = "qmh5_1_5">5.</label></td>
								<td><label for  = "qmh5_1_5">其他, 請註明：</label><input type = "text" class = "qmh5_1_5" name = "qmh5_1_5a" id = "qmh5_1_5a" value = "<?php echo @$ans["qmh5_1_5"]; ?>" disabled></td>
							</tr>
							<tr>
								<td class = "qno"><input type = "radio" class = "qmh5_1" name = "qmh5_1" id = "qmh5_1_6" value = "6" <?php echo @$ans["qmh5_1"] == "6" ? "checked":""; ?> ></td>
								<td class = "ano"><label for  = "qmh5_1_6">6.</label></td>
								<td><label for  = "qmh5_1_6">無需要</label></td>
							</tr>
						</table>
					</div>	
				</td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5" name = "qmh5" id = "qmh5_2" value = "2" <?php echo @$ans["qmh5"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5_2">2.</label></td>
				<td><label for  = "qmh5_2">精神病醫生</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5" name = "qmh5" id = "qmh5_3" value = "3" <?php echo @$ans["qmh5"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5_3">3.</label></td>
				<td><label for  = "qmh5_3">心理諮詢師</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5" name = "qmh5" id = "qmh5_4" value = "4" <?php echo @$ans["qmh5"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5_4">4.</label></td>
				<td><label for  = "qmh5_4">其他醫生 (如家庭醫生)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5" name = "qmh5" id = "qmh5_5" value = "5" <?php echo @$ans["qmh5"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5_5">5.</label></td>
				<td><label for  = "qmh5_5">社會工作者</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5" name = "qmh5" id = "qmh5_6" value = "6" <?php echo @$ans["qmh5"] == "6" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5_6">6.</label></td>
				<td><label for  = "qmh5_6">其他, 請註明：</label><input type = "text" class = "qmh5_6" name = "qmh5_6a" id = "qmh5_6a" value = "<?php echo @$ans["qmh5_6"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>	

-->
	
	<div id = "dqmh4">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">MH4.</span></td>
				<td colspan = "3"><span class = "b">於過去2星期,  下列問題有多經常困擾到您？</span>(請選擇合適的數字)</td>
			</tr>	
		</table>
		<br />
		<table class = "bor">
			<tr>
				<td class = "cen">&nbsp;</td>
				<td class = "cen">1. 從來沒有</td>
				<td class = "cen">2. 幾天一次</td>
				<td class = "cen">3. 多於一半日子</td>
				<td class = "cen">4. 幾乎每日</td>
			</tr>
			<tr class = "odd">
				<td class = ""><span class = "b">1. 做事提不起興趣</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_1" name = "qmh4_1" id = "qmh4_1_1" value = "1" <?php echo @$ans["qmh4_1"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_1" name = "qmh4_1" id = "qmh4_1_2" value = "2" <?php echo @$ans["qmh4_1"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_1" name = "qmh4_1" id = "qmh4_1_3" value = "3" <?php echo @$ans["qmh4_1"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_1" name = "qmh4_1" id = "qmh4_1_4" value = "4" <?php echo @$ans["qmh4_1"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "even">
				<td class = ""><span class = "b">2. 感到失落, 沒希望</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_2" name = "qmh4_2" id = "qmh4_2_1" value = "1" <?php echo @$ans["qmh4_2"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_2" name = "qmh4_2" id = "qmh4_2_2" value = "2" <?php echo @$ans["qmh4_2"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_2" name = "qmh4_2" id = "qmh4_2_3" value = "3" <?php echo @$ans["qmh4_2"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_2" name = "qmh4_2" id = "qmh4_2_4" value = "4" <?php echo @$ans["qmh4_2"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "odd">
				<td class = ""><span class = "b">3. 難以入睡/保持睡眠</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_3" name = "qmh4_3" id = "qmh4_3_1" value = "1" <?php echo @$ans["qmh4_3"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_3" name = "qmh4_3" id = "qmh4_3_2" value = "2" <?php echo @$ans["qmh4_3"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_3" name = "qmh4_3" id = "qmh4_3_3" value = "3" <?php echo @$ans["qmh4_3"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_3" name = "qmh4_3" id = "qmh4_3_4" value = "4" <?php echo @$ans["qmh4_3"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "even">
				<td class = ""><span class = "b">4. 感到疲勞/沒有精力</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_4" name = "qmh4_4" id = "qmh4_4_1" value = "1" <?php echo @$ans["qmh4_4"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_4" name = "qmh4_4" id = "qmh4_4_2" value = "2" <?php echo @$ans["qmh4_4"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_4" name = "qmh4_4" id = "qmh4_4_3" value = "3" <?php echo @$ans["qmh4_4"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_4" name = "qmh4_4" id = "qmh4_4_4" value = "4" <?php echo @$ans["qmh4_4"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "odd">
				<td class = ""><span class = "b">5. 食慾不振/暴飲暴食</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_5" name = "qmh4_5" id = "qmh4_5_1" value = "1" <?php echo @$ans["qmh4_5"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_5" name = "qmh4_5" id = "qmh4_5_2" value = "2" <?php echo @$ans["qmh4_5"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_5" name = "qmh4_5" id = "qmh4_5_3" value = "3" <?php echo @$ans["qmh4_5"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_5" name = "qmh4_5" id = "qmh4_5_4" value = "4" <?php echo @$ans["qmh4_5"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "even">
				<td class = ""><span class = "b">6. 對自己或令家人感到失望</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_6" name = "qmh4_6" id = "qmh4_6_1" value = "1" <?php echo @$ans["qmh4_6"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_6" name = "qmh4_6" id = "qmh4_6_2" value = "2" <?php echo @$ans["qmh4_6"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_6" name = "qmh4_6" id = "qmh4_6_3" value = "3" <?php echo @$ans["qmh4_6"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_6" name = "qmh4_6" id = "qmh4_6_4" value = "4" <?php echo @$ans["qmh4_6"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "odd">
				<td class = ""><span class = "b">7. 不能集中 (例如看報紙或電視時)</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_7" name = "qmh4_7" id = "qmh4_7_1" value = "1" <?php echo @$ans["qmh4_7"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_7" name = "qmh4_7" id = "qmh4_7_2" value = "2" <?php echo @$ans["qmh4_7"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_7" name = "qmh4_7" id = "qmh4_7_3" value = "3" <?php echo @$ans["qmh4_7"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_7" name = "qmh4_7" id = "qmh4_7_4" value = "4" <?php echo @$ans["qmh4_7"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "even">
				<td class = ""><span class = "b">8. 言行過渡緩慢/焦急</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_8" name = "qmh4_8" id = "qmh4_8_1" value = "1" <?php echo @$ans["qmh4_8"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_8" name = "qmh4_8" id = "qmh4_8_2" value = "2" <?php echo @$ans["qmh4_8"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_8" name = "qmh4_8" id = "qmh4_8_3" value = "3" <?php echo @$ans["qmh4_8"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_8" name = "qmh4_8" id = "qmh4_8_4" value = "4" <?php echo @$ans["qmh4_8"] == "4" ? "checked":""; ?>></td>
			</tr>
			<tr class = "odd">
				<td class = ""><span class = "b">9. 想過死掉或傷害自己</span></td>
				<td class = "cen"><input type = "radio" class = "qmh4_9" name = "qmh4_9" id = "qmh4_9_1" value = "1" <?php echo @$ans["qmh4_9"] == "1" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_9" name = "qmh4_9" id = "qmh4_9_2" value = "2" <?php echo @$ans["qmh4_9"] == "2" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_9" name = "qmh4_9" id = "qmh4_9_3" value = "3" <?php echo @$ans["qmh4_9"] == "3" ? "checked":""; ?>></td>
				<td class = "cen"><input type = "radio" class = "qmh4_9" name = "qmh4_9" id = "qmh4_9_4" value = "4" <?php echo @$ans["qmh4_9"] == "4" ? "checked":""; ?>></td>
			</tr>
		</table>
		<br />	
	</div>

	<div id = "dqmh5a">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">MH5a.</span></td>
				<td colspan = "3"><span class = "b">於過去12個月，您是否有尋求協助以解決心理或精神問題？ </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5a" name = "qmh5a" id = "qmh5a_0" value = "0" <?php echo @$ans["qmh5a"] == "0" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5a_0">0.</label></td>
				<td><label for  = "qmh5a_0">否</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5a" name = "qmh5a" id = "qmh5a_1" value = "1" <?php echo @$ans["qmh5a"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5a_1">1.</label></td>
				<td><label for  = "qmh5a_1">有</label></td>
			</tr>
		</table>
		<br />
	</div>	



	<div id = "dqmh5b">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">MH5b.</span></td>
				<td colspan = "3"><span class = "b">從不尋求協助，為甚麼？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5b" name = "qmh5b" id = "qmh5b_1" value = "1" <?php echo @$ans["qmh5b"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5b_1">1.</label></td>
				<td><label for  = "qmh5b_1">不知應到哪裡尋求協助</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5b" name = "qmh5b" id = "qmh5b_2" value = "2" <?php echo @$ans["qmh5b"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5b_2">2.</label></td>
				<td><label for  = "qmh5b_2">價錢昂貴</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5b" name = "qmh5b" id = "qmh5b_3" value = "3" <?php echo @$ans["qmh5b"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5b_3">3.</label></td>
				<td><label for  = "qmh5b_3">沒有時間)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5b" name = "qmh5b" id = "qmh5b_4" value = "4" <?php echo @$ans["qmh5b"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5b_4">4.</label></td>
				<td><label for  = "qmh5b_4">無需要</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qmh5b" name = "qmh5b" id = "qmh5b_5" value = "5" <?php echo @$ans["qmh5b"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5b_5">5.</label></td>
				<td><label for  = "qmh5b_5">其他, 請註明：</label><input type = "text" class = "qmh5b_5" name = "qmh5b_5a" id = "qmh5b_5a" value = "<?php echo @$ans["qmh5b_5"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>	


	
	<div id = "dqmh5c">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">MH5c.</span></td>
				<td colspan = "3"><span class = "b">您曾經向下列那些人尋求協助以解決心理或精神問題: (可選擇多項) </span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qmh5c" name = "qmh5c_1" id = "qmh5c_1" value = "1" <?php echo @$ans["qmh5c_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5c_1">1.</label></td>
				<td><label for  = "qmh5c_1">精神病醫生</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qmh5c" name = "qmh5c_2" id = "qmh5c_2" value = "1" <?php echo @$ans["qmh5c_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5c_2">2.</label></td>
				<td><label for  = "qmh5c_2">心理諮詢師</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qmh5c" name = "qmh5c_3" id = "qmh5c_3" value = "1" <?php echo @$ans["qmh5c_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5c_3">3.</label></td>
				<td><label for  = "qmh5c_3">其他醫生 (如家庭醫生)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qmh5c" name = "qmh5c_4" id = "qmh5c_4" value = "1" <?php echo @$ans["qmh5c_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5c_4">4.</label></td>
				<td><label for  = "qmh5c_4">社會工作者</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qmh5c" name = "qmh5c_5" id = "qmh5c_5" value = "1" <?php echo @$ans["qmh5c_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qmh5c_5">5.</label></td>
				<td><label for  = "qmh5c_5">其他, 請註明：</label><input type = "text" class = "qmh5c_5" name = "qmh5c_5a" id = "qmh5c_5a" value = "<?php echo @$ans["qmh5c_5"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
