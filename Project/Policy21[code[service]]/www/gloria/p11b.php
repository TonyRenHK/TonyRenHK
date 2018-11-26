<div id = "p11b" class = "tw">

	<div id = "dqpoc1">
		<table class = "">
			<tr>
				<td colspan = "1">POC1</td>
				<td colspan = "2"><span class = "b">梅毒快速檢測結果</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qpoc1" name = "qpoc1" id = "qpoc1_1" value = "1" <?php echo @$ans["qpoc1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qpoc1_1">1.</label></td>
				<td><label for  = "qpoc1_1">陽性</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qpoc1" name = "qpoc1" id = "qpoc1_2" value = "2" <?php echo @$ans["qpoc1"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qpoc1_2">2.</label></td>
				<td><label for  = "qpoc1_2">陰性</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qpoc1" name = "qpoc1" id = "qpoc1_3" value = "3" <?php echo @$ans["qpoc1"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qpoc1_3">3.</label></td>
				<td><label for  = "qpoc1_3">檢測失敗（一次）（如受訪者不願意進行第二次檢測）</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qpoc1" name = "qpoc1" id = "qpoc1_4" value = "4" <?php echo @$ans["qpoc1"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qpoc1_4">4.</label></td>
				<td><label for  = "qpoc1_4">檢測失敗（兩次）（如受訪者進行了第二次檢測仍失敗）</label></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqpoc2">
		<table class = "">
			<tr>
				<td colspan = "1">POC2</td>
				<td colspan = "2"><span class = "b">（訪問員請把梅毒快速檢測結果表給予受訪者）<br />我們能在三星期內跟進其情況，請問你會接受跟進嗎？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qpoc2" name = "qpoc2" id = "qpoc2_1" value = "1" <?php echo @$ans["qpoc2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qpoc2_1">1.</label></td>
				<td><label for  = "qpoc2_1">會，請在此輸入電話號碼:</label><input type = "text" class = "qpoc2_1" name = "qpoc2_1a" id = "qpoc2_1a" value = "<?php echo @$ans["qpoc2_1a"]; ?>" disabled></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qpoc2" name = "qpoc2" id = "qpoc2_2" value = "2" <?php echo @$ans["qpoc2"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qpoc2_2">2.</label></td>
				<td><label for  = "qpoc2_2">不會，進一步的檢測是十分重要，你肯定拒絕接受進一步檢測？</label></td>
			</tr>
		</table>
		<br />
	</div>
	













	<div id = "dqa5">
		<table class = "">
			<tr>
				<td colspan = "3"><span class = "b">我們現在將進行快速梅毒檢測，並收集尿液樣本作淋病和衣原體檢測。您是否願意收到檢測結果？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qa5" name = "qa5" id = "qa5_1" value = "1" <?php echo @$ans["qa5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qa5_1">1.</label></td>
				<td><label for  = "qa5_1">不願意</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qa5" name = "qa5" id = "qa5_2" value = "2" <?php echo @$ans["qa5"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qa5_2">2.</label></td>
				<td><label for  = "qa5_2">願意</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qa5" name = "qa5" id = "qa5_3" value = "3" <?php echo @$ans["qa5"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qa5_3">3.</label></td>
				<td><label for  = "qa5_3">只有在檢測呈陽性才願意接受通知</label></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqa6">
		<table class = "">
			<tr>
				<td colspan = "3"><span class = "b">請選擇下列我們通知您的方式：</span></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">a.</td>
				<td>我希望從電子郵件收到通知。</td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>請在此輸入電郵地址：<input type = "text" class = "qa6a" name = "qa6a" id = "qa6a" value = "<?php echo @$ans["qa6a"]; ?>"></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">b.</td>
				<td>我希望從電話短信收到通知。</td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>請在此輸入電話號碼：<input type = "text" class = "qa6b" name = "qa6b" id = "qa6b" value = "<?php echo @$ans["qa6b"]; ?>"></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">c.</td>
				<td>我希望從電話收到通知。</td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>請在此輸入電話號碼：<input type = "text" class = "qa6c" name = "qa6c" id = "qa6c" value = "<?php echo @$ans["qa6c"]; ?>"></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">d.</td>
				<td>如果檢測陽性的話，我希望得到確認信。</td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>請在此輸入電話號碼：<input type = "text" class = "qa6d" name = "qa6d" id = "qa6d" value = "<?php echo @$ans["qa6d"]; ?>">和姓名<input type = "text" class = "qa6da" name = "qa6da" id = "qa6da" value = "<?php echo @$ans["qa6da"]; ?>">。 (注：如果您不能提供這些資訊，我們可能難以提供確認信)</td>
			</tr>
			
		</table>
		<br />
	</div>




	<div id = "dqa7">
		<table class = "">
			<tr>
				<td colspan = "3"><span class = "b">我們將再次聯絡 5% 的受訪者,  以覆核訪問內容。覆核將於訪問後兩星期內進行 。您是否願意香港大學的覆核員聯絡您?</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qa7" name = "qa7" id = "qa7_1" value = "1" <?php echo @$ans["qa7"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qa7_1">1.</label></td>
				<td><label for  = "qa7_1">願意</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qa7" name = "qa7" id = "qa7_2" value = "2" <?php echo @$ans["qa7"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qa7_2">2.</label></td>
				<td><label for  = "qa7_2">不願意</label></td>
			</tr>
		</table>
		<br />
	</div>


	<div id = "dqa8">
		<table class = "">
			<tr>
				<td colspan = "3"><span class = "b">請填寫聯絡方法:</span></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">1.</td>
				<td>我希望覆核以探訪形式進行。</td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>請填寫地址：<input type = "text" class = "qa8a" name = "qa8a" id = "qa8a" value = "<?php echo @$ans["qa8a"]; ?>"></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">2.</td>
				<td>我希望覆核以電話進行。</td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>電話號碼：<input type = "text" class = "qa8b" name = "qa8b" id = "qa8b" value = "<?php echo @$ans["qa8b"]; ?>"></td>
			</tr>
		</table>
		<br />
	</div>
	
	<table class = "">
		<tr>
			<td class = "cen"><span class = "b">調查到此結束，再次感謝您的參與和配合！<br />請將電腦交還訪問員！</span></td></tr>
	</table>
	<br />


</div>