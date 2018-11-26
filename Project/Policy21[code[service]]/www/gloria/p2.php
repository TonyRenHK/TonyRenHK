<div id = "p2" class = "tw">
	<table class = "">
		<tr>
			<td><span class = "b">以下問題與您的健康狀況有關</span></td>
		</tr>
	</table>
	<table class = "head">
		<tr>
			<td><span class = "headspan">第二部分：一般健康狀況 （G）</span></td>
		</tr>
	</table>
	<br />
	<br />
	
	
	<div id = "dqg1">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">G1.</span></td>
				<td colspan = "3"><span class = "b">總括而言，您認為自己的健康狀況屬於：</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg1" name = "qg1" id = "qg1_1" value = "1" <?php echo @$ans["qg1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg1_1">1.</label></td>
				<td><label for  = "qg1_1">很好</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg1" name = "qg1" id = "qg1_2" value = "2" <?php echo @$ans["qg1"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg1_2">2.</label></td>
				<td><label for  = "qg1_2">較好</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg1" name = "qg1" id = "qg1_3" value = "3" <?php echo @$ans["qg1"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg1_3">3.</label></td>
				<td><label for  = "qg1_3">好</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg1" name = "qg1" id = "qg1_4" value = "4" <?php echo @$ans["qg1"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg1_4">4.</label></td>
				<td><label for  = "qg1_4">一般/還可以</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg1" name = "qg1" id = "qg1_5" value = "5" <?php echo @$ans["qg1"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg1_5">5.</label></td>
				<td><label for  = "qg1_5">差</label></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	


	<div id = "dqg2">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">G2.</span></td>
				<td class = ""><span class = "b">您的身高是<input type = "text" class = "qg2" name = "qg2" id = "qg2" value = "<?php echo @$ans["qg2"]; ?>">厘米　／　<input type = "text" class = "qg2a" name = "qg2a" id = "qg2a" value = "<?php echo @$ans["qg2a"]; ?>">尺<input type = "text" class = "qg2b" name = "qg2b" id = "qg2b" value = "<?php echo @$ans["qg2b"]; ?>">寸</span></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	<div id = "dqg3">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">G3.</span></td>
				<td class = ""><span class = "b">您的體重是<input type = "text" class = "qg3" name = "qg3" id = "qg3" value = "<?php echo @$ans["qg3"]; ?>">公斤　／　<input type = "text" class = "qg3a" name = "qg3a" id = "qg3a" value = "<?php echo @$ans["qg3a"]; ?>">磅</span></td>
			</tr>
		</table>
		<br />
	</div>

	
	<div id = "dqg4">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">G4.</span></td>
				<td colspan = "2"><span class = "b">過去12個月，是否有醫生或其他專業人員告知您患有身體疾病？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg4" name = "qg4" id = "qg4_0" value = "0" <?php echo @$ans["qg4"] == "0" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4_0">0.</label></td>
				<td><label for  = "qg4_0">否</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qg4" name = "qg4" id = "qg4_1" value = "1" <?php echo @$ans["qg4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4_1">1.</label></td>
				<td><label for  = "qg4_1">有</label></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqg4a">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">G4a.</span></td>
				<td colspan = "2"><span class = "b">過去12個月，診斷出您所患的疾病是? </span>(可選多於一項)</td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_1" id = "qg4a_1" value = "1" <?php echo @$ans["qg4a_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_1">1.</label></td>
				<td><label for  = "qg4a_1">後背疼痛 (持續三個月或以上)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_2" id = "qg4a_2" value = "1" <?php echo @$ans["qg4a_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_2">2.</label></td>
				<td><label for  = "qg4a_2">肌肉或骨骼的疾病 (持續三個月或以上)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_3" id = "qg4a_3" value = "1" <?php echo @$ans["qg4a_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_3">3.</label></td>
				<td><label for  = "qg4a_3">抑鬱 / 焦慮</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_4" id = "qg4a_4" value = "1" <?php echo @$ans["qg4a_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_4">4.</label></td>
				<td><label for  = "qg4a_4">心理/精神健康問題</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_5" id = "qg4a_5" value = "1" <?php echo @$ans["qg4a_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_5">5.</label></td>
				<td><label for  = "qg4a_5">帕金遜症和癲癇以外的神經系統疾病</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_6" id = "qg4a_6" value = "1" <?php echo @$ans["qg4a_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_6">6.</label></td>
				<td><label for  = "qg4a_6">癌症</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_7" id = "qg4a_7" value = "1" <?php echo @$ans["qg4a_7"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_7">7.</label></td>
				<td><label for  = "qg4a_7">甲狀腺疾病</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_8" id = "qg4a_8" value = "1" <?php echo @$ans["qg4a_8"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_8">8.</label></td>
				<td><label for  = "qg4a_8">卵巢/睾丸或垂體的疾病</label></td>
			</tr>
			<tr class = "female">
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_9" id = "qg4a_9" value = "1" <?php echo @$ans["qg4a_9"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_9">9.</label></td>
				<td><label for  = "qg4a_9">僅供女士回答: 多囊卵巢</label></td>
			</tr>
			<tr class = "female">
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_10" id = "qg4a_10" value = "1" <?php echo @$ans["qg4a_10"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_10">10.</label></td>
				<td><label for  = "qg4a_10">僅供女士回答: 不育</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qg4a" name = "qg4a_11" id = "qg4a_11" value = "1" <?php echo @$ans["qg4a_11"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qg4a_11">11.</label></td>
				<td><label for  = "qg4a_11">其他疾病, 請註明：</label><input type = "text" class = "qg4a_11" name = "qg4a_11a" id = "qg4a_11a" value = "<?php echo @$ans["qg4a_11a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	

	
</div>