<div id = "pb">
	<table class = "headspan">
		<tr>
			<td>(B)	住戶資料</td>
		</tr>
	</table>
	<br />

	<div id = "db1">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B1.</span></td>
				<td><span class = "b">請問你哋係邊年邊月搬入嚟呢度住?</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "b"><input type = "text" class = "qb1a short" name = "qb1a" id = "qb1a" value = "<?php echo @$ans["qb1a"]; ?>" >年<input type = "text" class = "qb1b short" name = "qb1b" id = "qb1b" value = "<?php echo @$ans["qb1b"]; ?>" >月 (如居於此處超過3年，跳至B3)</span></td>
			</tr>
		</table>
	
		<br />
	</div>
	
	<div id = "db2">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B2.</span></td>
				<td><span class = "b">(a) 請問你哋係過去三年內搬左幾多次屋，包括搬入黎呢度?<br /> (訪問員請注意：搬屋次數最少一次)?</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = ""><label for = "qb2a_1">1</label><input type = "radio" class = "qb2a" name = "qb2a" id = "qb2a_1" value = "1" <?php echo @$ans["qb2a"] == "1"?"checked":""; ?>><label for = "qb2a_1">過去三年內搬屋嘅次數：</label></span><input type = "text" class = "qb2a_1 short" name = "qb2a_1a" id = "qb2a_1a" value = "<?php echo @$ans["qb2a_1a"]; ?>" disabled></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = ""><label for = "qb2a_2">2</label><input type = "radio" class = "qb2a" name = "qb2a" id = "qb2a_2" value = "2" <?php echo @$ans["qb2a"] == "2"?"checked":""; ?>><label for = "qb2a_2">來港後即入住此處 <span class = "b">(跳至B3)</span></label></span></td>
			</tr>
		</table>
		<br />
		<table id = "db2a_2a">
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "b">(b) 點解要搬離上次嘅住所? （可選多項）[不用讀出選項，提供示咭2，供受訪者選擇]</span></td>
			</tr>
		</table>
		<table id = "db2a_2b">
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td>
					<table>
						<tr>
							<td class = "qno"><label for = "qb2b_1">1</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_1" id = "qb2b_1" value = "1" <?php echo @$ans["qb2b_1"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_1">加租</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_2">2</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_2" id = "qb2b_2" value = "1" <?php echo @$ans["qb2b_2"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_2">不獲續租	</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_3">3</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_3" id = "qb2b_3" value = "1" <?php echo @$ans["qb2b_3"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_3">沒有足夠居住空間</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_4">4</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_4" id = "qb2b_4" value = "1" <?php echo @$ans["qb2b_4"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_4">家庭問題</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_5">5</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_5" id = "qb2b_5" value = "1" <?php echo @$ans["qb2b_5"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_5">方便返工</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_6">6</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_6" id = "qb2b_6" value = "1" <?php echo @$ans["qb2b_6"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_6">方便返學(如有學生)</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_7">7</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_7" id = "qb2b_7" value = "1" <?php echo @$ans["qb2b_7"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_7">環境惡劣</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb2b_8">8</label></td>
							<td class = "ano"><input type = "checkbox" class = "qb2b" name = "qb2b_8" id = "qb2b_8" value = "1" <?php echo @$ans["qb2b_8"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb2b_8">其他原因，請註明：</label><input type = "text" class = "qb2b_8" name = "qb2b_8a" id = "qb2b_8a" value = "<?php echo @$ans["qb2b_8a"]; ?>" disabled></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br />

	</div>	
	
	
	
	
	<div id = "db3">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B3.</span></td>
				<td><span class = "b">請問你哋現時租住嘅範圍 / 分間單位 / 房間有冇租約(包括口頭合約) 呢?</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb3_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qb3" name = "qb3" id = "qb3_1" value = "1" <?php echo @$ans["qb3"] == "1"?"checked":""; ?>></td>
				<td class = "ans"><label for = "qb3_1">有</label></td>
				<td class = "qno"><label for = "qb3_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qb3" name = "qb3" id = "qb3_2" value = "2" <?php echo @$ans["qb3"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qb3_2">沒有</label></td>
			</tr>
		</table>
		<br />
	</div>	
	

	<div id = "db4">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B4.</span></td>
				<td><span class = "b">請問你哋現在嘅居所每月嘅</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td>(a) 租金費用(包括管理費、差餉同埋地租)係：<input type = "text" class = "qb4a short" name = "qb4a" id = "qb4a" value = "<?php echo @$ans["qb4a"]; ?>" ><span class = "b">(港幣)</span></td>
			</tr>
		</table>
		<br />
		<table>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "">(b) 水費</span></td>
			</tr>
		</table>
		<table>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td>
					<table>
						<tr>
							<td class = "qno"><label for = "qb4b_1">1</label></td>
							<td class = "ano"><input type = "radio" class = "qb4b" name = "qb4b" id = "qb4b_1" value = "1" <?php echo @$ans["qb4b"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4b_1">已包括在租金內</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4b_2">2</label></td>
							<td class = "ano"><input type = "radio" class = "qb4b" name = "qb4b" id = "qb4b_2" value = "2" <?php echo @$ans["qb4b"] == "2"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4b_2">不包括在租金內，按用量(睇錶)收費 </label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4b_3">3</label></td>
							<td class = "ano"><input type = "radio" class = "qb4b" name = "qb4b" id = "qb4b_3" value = "3" <?php echo @$ans["qb4b"] == "3"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4b_3">不包括在租金內，定額收費：</label><input type = "text" class = "qb4b_3 short" name = "qb4b_3a" id = "qb4b_3a" value = "<?php echo @$ans["qb4b_3a"]; ?>" disabled><span class = "b">(港幣)</span></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4b_4">4</label></td>
							<td class = "ano"><input type = "radio" class = "qb4b" name = "qb4b" id = "qb4b_4" value = "4" <?php echo @$ans["qb4b"] == "4"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4b_4">不適用</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4b_5">5</label></td>
							<td class = "ano"><input type = "radio" class = "qb4b" name = "qb4b" id = "qb4b_5" value = "5" <?php echo @$ans["qb4b"] == "5"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4b_5">其他，請註明：</label><input type = "text" class = "qb4b_5" name = "qb4b_5a" id = "qb4b_5a" value = "<?php echo @$ans["qb4b_5a"]; ?>" disabled><span class = "b"></span></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br />
		<table>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "">(c) 電費</span></td>
			</tr>
		</table>
		<table>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td>
					<table>
						<tr>
							<td class = "qno"><label for = "qb4c_1">1</label></td>
							<td class = "ano"><input type = "radio" class = "qb4c" name = "qb4c" id = "qb4c_1" value = "1" <?php echo @$ans["qb4c"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4c_1">已包括在租金內</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4c_2">2</label></td>
							<td class = "ano"><input type = "radio" class = "qb4c" name = "qb4c" id = "qb4c_2" value = "2" <?php echo @$ans["qb4c"] == "2"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4c_2">不包括在租金內，按用量(睇錶)收費 </label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4c_3">3</label></td>
							<td class = "ano"><input type = "radio" class = "qb4c" name = "qb4c" id = "qb4c_3" value = "3" <?php echo @$ans["qb4c"] == "3"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4c_3">不包括在租金內，定額收費：</label><input type = "text" class = "qb4c_3 short" name = "qb4c_3a" id = "qb4c_3a" value = "<?php echo @$ans["qb4c_3a"]; ?>" disabled><span class = "b">(港幣)</span></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4c_4">4</label></td>
							<td class = "ano"><input type = "radio" class = "qb4c" name = "qb4c" id = "qb4c_4" value = "4" <?php echo @$ans["qb4c"] == "4"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4c_4">不適用</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4c_5">5</label></td>
							<td class = "ano"><input type = "radio" class = "qb4c" name = "qb4c" id = "qb4c_5" value = "5" <?php echo @$ans["qb4c"] == "5"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4c_5">其他，請註明：</label><input type = "text" class = "qb4c_5" name = "qb4c_5a" id = "qb4c_5a" value = "<?php echo @$ans["qb4c_5a"]; ?>" disabled><span class = "b"></span></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br />
		<table>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "">(d) 煤氣／石油氣費</span></td>
			</tr>
		</table>
		<table>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td>
					<table>
						<tr>
							<td class = "qno"><label for = "qb4d_1">1</label></td>
							<td class = "ano"><input type = "radio" class = "qb4d" name = "qb4d" id = "qb4d_1" value = "1" <?php echo @$ans["qb4d"] == "1"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4d_1">已包括在租金內</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4d_2">2</label></td>
							<td class = "ano"><input type = "radio" class = "qb4d" name = "qb4d" id = "qb4d_2" value = "2" <?php echo @$ans["qb4d"] == "2"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4d_2">不包括在租金內，按用量(睇錶)收費 </label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4d_3">3</label></td>
							<td class = "ano"><input type = "radio" class = "qb4d" name = "qb4d" id = "qb4d_3" value = "3" <?php echo @$ans["qb4d"] == "3"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4d_3">不包括在租金內，定額收費：</label><input type = "text" class = "qb4d_3 short" name = "qb4d_3a" id = "qb4d_3a" value = "<?php echo @$ans["qb4d_3a"]; ?>" disabled><span class = "b">(港幣)</span></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4d_4">4</label></td>
							<td class = "ano"><input type = "radio" class = "qb4d" name = "qb4d" id = "qb4d_4" value = "4" <?php echo @$ans["qb4d"] == "4"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4d_4">不適用</label></td>
						</tr>
						<tr>
							<td class = "qno"><label for = "qb4d_5">5</label></td>
							<td class = "ano"><input type = "radio" class = "qb4d" name = "qb4d" id = "qb4d_5" value = "5" <?php echo @$ans["qb4d"] == "5"?"checked":""; ?>></td>
							<td class = ""><label for = "qb4d_5">其他，請註明：</label><input type = "text" class = "qb4d_5" name = "qb4d_5a" id = "qb4d_5a" value = "<?php echo @$ans["qb4d_5a"]; ?>" disabled><span class = "b"></span></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br />
		
	</div>
	
	<div id = "db5">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B5.</span></td>
				<td><span class = "b">喺過去一年，你哋現時所租住嘅範圍 / 分間單位 / 房間嘅租金有冇調整過?</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb5_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_1" value = "1" <?php echo @$ans["qb5"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb5_1">加租，增加金額大約係：</label><input type = "text" class = "qb5_1" name = "qb5_1a" id = "qb5_1a" value = "<?php echo @$ans["qb5_1a"]; ?>" disabled><span class = "b">(港幣)</span></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb5_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_2" value = "2" <?php echo @$ans["qb5"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qb5_2">減租，減少金額大約係：</label><input type = "text" class = "qb5_2" name = "qb5_2a" id = "qb5_2a" value = "<?php echo @$ans["qb5_2a"]; ?>" disabled><span class = "b">(港幣)</span></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb5_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_3" value = "3" <?php echo @$ans["qb5"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qb5_3">冇調整</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb5_4">4</label></td>
				<td class = "ano"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_4" value = "4" <?php echo @$ans["qb5"] == "4"?"checked":""; ?>></td>
				<td class = ""><label for = "qb5_4">不適用(現時的租約是第一份租約)</label></td>
			</tr>
		</table>
		<br />
	</div>		
	
	<div id = "db6">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B6.</span></td>
				<td><span class = "b">你哋現時所租住嘅範圍/ 分間單位 / 房間內有冇以下設備? <br />（可選多項）[不用讀出選項，提供示咭3，供受訪者選擇] </span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb6_1">1</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_1" id = "qb6_1" value = "1" <?php echo @$ans["qb6_1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_1">獨立門口</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb6_2">2</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_2" id = "qb6_2" value = "1" <?php echo @$ans["qb6_2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_2">獨立廁所</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb6_3">3</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_3" id = "qb6_3" value = "1" <?php echo @$ans["qb6_3"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_3">廚房<span class = "up">4</span>，廚房嘅類型係：</label>
					<div id = "db6_3">
						<table>
							<tr>
								<td class = "qno"><label for = "qb6_3a_1">3a</label></td>
								<td class = "ano"><input type = "radio" class = "qb6_3a" name = "qb6_3a" id = "qb6_3a_1" value = "1" <?php echo @$ans["qb6_3a"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_3a_1"> 開放式</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb6_3a_2">3b</label></td>
								<td class = "ano"><input type = "radio" class = "qb6_3a" name = "qb6_3a" id = "qb6_3a_2" value = "2" <?php echo @$ans["qb6_3a"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_3a_2">封閉式</label></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb6_4">4</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_4" id = "qb6_4" value = "1" <?php echo @$ans["qb6_4"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_4">窗戶，窗戶可不可開啟</label>
					<div id = "db6_4">
						<table>
							<tr>
								<td class = "qno"><label for = "qb6_4a_1">4a</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb6_4a" name = "qb6_4a_1" id = "qb6_4a_1" value = "1" <?php echo @$ans["qb6_4a_1"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_4a_1"> 不可以</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb6_4a_2">4b</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb6_4a" name = "qb6_4a_2" id = "qb6_4a_2" value = "2" <?php echo @$ans["qb6_4a_2"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_4a_2"> 可以，開啟後在屋宇單位外</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb6_4a_3">4c</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb6_4a" name = "qb6_4a_3" id = "qb6_4a_3" value = "3" <?php echo @$ans["qb6_4a_3"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_4a_3"> 可以，開啟後仍在屋宇單位內</label></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb6_5">5</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_5" id = "qb6_5" value = "1" <?php echo @$ans["qb6_5"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_5">獨立的電錶</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb6_6">6</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_6" id = "qb6_6" value = "1" <?php echo @$ans["qb6_6"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_6">食水供應，有冇獨立嘅水錶：</label>
					<div id = "db6_6">
						<table>
							<tr>
								<td class = "qno"><label for = "qb6_6a_1">6a</label></td>
								<td class = "ano"><input type = "radio" class = "qb6_6a" name = "qb6_6a" id = "qb6_6a_1" value = "1" <?php echo @$ans["qb6_6a"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_6a_1"> 有獨立嘅水錶</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb6_6a_2">6b</label></td>
								<td class = "ano"><input type = "radio" class = "qb6_6a" name = "qb6_6a" id = "qb6_6a_2" value = "2" <?php echo @$ans["qb6_6a"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qb6_6a_2"> 冇獨立嘅水錶</label></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb6_7">7</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb6" name = "qb6_7" id = "qb6_7" value = "1" <?php echo @$ans["qb6_7"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb6_7">沒有以上設備</label></td>
			</tr>
		</table>
		<br />
<span class = "i">4 廚房即具備有(i)自來水供應的洗碗盤及(ii)煮食爐具的特定地方。</span><br /><br />
	</div>		
	
	<div id = "db7">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B7.</span></td>
				<td><span class = "b">喺入住呢度之前，你係同而家依伙人一齊住，定係同其他人一齊住？</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb7_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_1" value = "1" <?php echo @$ans["qb7"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_1">自己住(包括自己買或者租屋住、同其他人合租地方住)</label>
<!--					<div id = "db7_1">
						<table>
							<tr>
								<td class = "qno"><label for = "qb7_1_1">1a</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb7_1" name = "qb7_1_1" id = "qb7_1_1" value = "1" <?php echo @$ans["qb7_1_1"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb7_1_1">自己自置</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb7_1_2">1b</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb7_1" name = "qb7_1_2" id = "qb7_1_2" value = "1" <?php echo @$ans["qb7_1_2"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb7_1_2">父母自置</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb7_1_3">1c</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb7_1" name = "qb7_1_3" id = "qb7_1_3" value = "1" <?php echo @$ans["qb7_1_3"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb7_1_3">子女自置</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb7_1_4">1d</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb7_1" name = "qb7_1_4" id = "qb7_1_4" value = "1" <?php echo @$ans["qb7_1_4"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb7_1_4">親人自置</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb7_1_5">1e</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb7_1" name = "qb7_1_5" id = "qb7_1_5" value = "1" <?php echo @$ans["qb7_1_5"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb7_1_5">其他，請註明：</label><input type = "text" class = "qb7_1_5" name = "qb7_1_5a" id = "qb7_1_5a" value = "<?php echo @$ans["qb7_1_5a"]; ?>" disabled></td>
							</tr>
						</table>
					</div>
-->
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb7_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_2" value = "2" <?php echo @$ans["qb7"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_2">住喺父母屋企</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb7_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_3" value = "3" <?php echo @$ans["qb7"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_3">住喺子女屋企</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb7_4">4</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_4" value = "4" <?php echo @$ans["qb7"] == "4"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_4">住喺兄弟姊妹屋企</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb7_5">5</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_5" value = "5" <?php echo @$ans["qb7"] == "5"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_5">住喺其他親友屋企</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb7_6">6</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_6" value = "6" <?php echo @$ans["qb7"] == "6"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_6">其他，請說明：</label><input type = "text" class = "qb7_6" name = "qb7_6a" id = "qb7_6a" value = "<?php echo @$ans["qb7_6a"]; ?>" disabled></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb7_7">7</label></td>
				<td class = "ano"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_7" value = "7" <?php echo @$ans["qb7"] == "7"?"checked":""; ?>></td>
				<td class = ""><label for = "qb7_7">來港後即入住此處</label></td>
			</tr>
		</table>
		<br />
		<br />
		<span class = "b">[註：父母屋企是指由父母為戶主的居所，一般由父母所擁有或租用，如此類推。如受訪者之前同父母等一齊住，但本身是有關居所的戶主，應答「其他」，並說明。]</span>
		<br />
		<br />
		<br />
		<br />
	</div>	
	
	
	
	<div id = "db8">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B8.</span></td>
				<td><span class = "b">入住呢度或者同類嘅住屋類型前，你係住喺邊一種嘅住屋類型? <br />[不用讀出選項，提供示咭4，供受訪者選擇] </span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb8_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_1" value = "1" <?php echo @$ans["qb8"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_1">租住整個私人單位</label></td>
				<td class = "qno"><label for = "qb8_8">8</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_8" value = "8" <?php echo @$ans["qb8"] == "8"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_8">私人樓宇中嘅屋外直達的分間單位／房間</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb8_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_2" value = "2" <?php echo @$ans["qb8"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_2">臨時房屋</label></td>
				<td class = "qno"><label for = "qb8_9">9</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_9" value = "9" <?php echo @$ans["qb8"] == "9"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_9">私人樓宇中嘅牀位</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb8_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_3" value = "3" <?php echo @$ans["qb8"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_3">公共房屋</label></td>
				<td class = "qno"><label for = "qb8_10">10</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_10" value = "10" <?php echo @$ans["qb8"] == "10"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_10">露宿</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb8_4">4</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_4" value = "4" <?php echo @$ans["qb8"] == "4"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_4">居者有其屋（居屋）</label></td>
				<td class = "qno"><label for = "qb8_11">11</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_11" value = "11" <?php echo @$ans["qb8"] == "11"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_11">僱主提供宿舍</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb8_5">5</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_5" value = "5" <?php echo @$ans["qb8"] == "5"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_5">自置私人樓宇</label></td>
				<td class = "qno"><label for = "qb8_12">12</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_12" value = "12" <?php echo @$ans["qb8"] == "12"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_12">青年／中途宿舍</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb8_6">6</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_6" value = "6" <?php echo @$ans["qb8"] == "6"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_6">私人樓宇中嘅閣樓</label></td>
				<td class = "qno"><label for = "qb8_13">13</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_13" value = "13" <?php echo @$ans["qb8"] == "13"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_13">其他：</label><input type = "text" class = "qb8_13" name = "qb8_13a" id = "qb8_13a" value = "<?php echo @$ans["qb8_13a"]; ?>" disabled></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb8_7">7</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_7" value = "7" <?php echo @$ans["qb8"] == "7"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_7">私人樓宇中嘅屋內互通房間／板間房</label></td>
				<td class = "qno"><label for = "qb8_14">14</label></td>
				<td class = "ano"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_14" value = "14" <?php echo @$ans["qb8"] == "14"?"checked":""; ?>></td>
				<td class = ""><label for = "qb8_14">來港後即入住此處</label></td>
		</table>
		<br />
	</div>	
	
	
	
	
	
	
	<div id = "db9">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B9.</span></td>
				<td><span class = "b">點解你哋會住係呢度? （可選多項）[不用讀出選項，提供示咭5，供受訪者選擇]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb9_1">1</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_1" id = "qb9_1" value = "1" <?php echo @$ans["qb9_1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_1">租金比較可以負擔　（與租住整個私人單位作比較）</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb9_2">2</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_2" id = "qb9_2" value = "1" <?php echo @$ans["qb9_2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_2">經濟困難</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb9_3">3</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_3" id = "qb9_3" value = "1" <?php echo @$ans["qb9_3"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_3">方便返工 （是否在香港有另一個唔通常住嘅居所？ </label><input type = "radio" class = "qb9_3" name = "qb9_3a" id = "qb9_3a_1" value = "1" <?php echo @$ans["qb9_3a"] == "1"?"checked":""; ?>> <label for = "qb9_3a_1">有</label> <input type = "radio" class = "qb9_3" name = "qb9_3a" id = "qb9_3a_2" value = "2" <?php echo @$ans["qb9_3a"] == "2"?"checked":""; ?>> <label for = "qb9_3a_2">冇</label>）</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb9_4">4</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_4" id = "qb9_4" value = "1" <?php echo @$ans["qb9_4"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_4">方便返學 （如有學生）</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb9_5">5</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_5" id = "qb9_5" value = "1" <?php echo @$ans["qb9_5"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_5">家庭問題</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb9_6">6</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_6" id = "qb9_6" value = "1" <?php echo @$ans["qb9_6"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_6">父母／親人的居所太擠迫</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb9_7">7</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb9" name = "qb9_7" id = "qb9_7" value = "1" <?php echo @$ans["qb9_7"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb9_7">其他：</label><input type = "text" class = "qb9_7" name = "qb9_7a" id = "qb9_7a" value = "<?php echo @$ans["qb9_7a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>	
	
	<div id = "db10">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B10.</span></td>
				<td><span class = "b">請問你哋有冇曾經申請過公屋?[以受訪者的申請狀況為依歸]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb10_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qb10" name = "qb10" id = "qb10_1" value = "1" <?php echo @$ans["qb10"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb10_1">有，</label>
					<div id = "db10_1">
						<table>
							<tr>
								<td class = "qno"><span class = "b">(a)</span></td>
								<td><span class = "b">現時公屋申請嘅類別？</span></td>
							</tr>
						</table>
						
						<table>
							<tr>
								<td class = "qno"><label for = "qb10_1a_1">1</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1a" name = "qb10_1a" id = "qb10_1a_1" value = "1" <?php echo @$ans["qb10_1a"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1a_1">一般家庭申請</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_1a_2">2</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1a" name = "qb10_1a" id = "qb10_1a_2" value = "2" <?php echo @$ans["qb10_1a"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1a_2">非長者一人申請</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_1a_3">3</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1a" name = "qb10_1a" id = "qb10_1a_3" value = "3" <?php echo @$ans["qb10_1a"] == "3"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1a_3">長者一人申請</label></td>
							</tr>
						</table>
						<br />
						<table>
							<tr>
								<td class = "qno"><span class = "b">(b)</span></td>
								<td><span class = "b">咁現時/最後嘅申請進度係？</span></td>
							</tr>
						</table>
						
						<table>
							<tr>
								<td class = "qno"><label for = "qb10_1b_1">1</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1b" name = "qb10_1b" id = "qb10_1b_1" value = "1" <?php echo @$ans["qb10_1b"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1b_1">在輪候冊上</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_1b_2">2</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1b" name = "qb10_1b" id = "qb10_1b_2" value = "2" <?php echo @$ans["qb10_1b"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1b_2">不符合申請資格</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_1b_3">3</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1b" name = "qb10_1b" id = "qb10_1b_3" value = "3" <?php echo @$ans["qb10_1b"] == "3"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1b_3">已接受公屋編配並快將搬入</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_1b_4">4</label></td>
								<td class = "ano"><input type = "radio" class = "qb10_1b" name = "qb10_1b" id = "qb10_1b_4" value = "4" <?php echo @$ans["qb10_1b"] == "4"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_1b_4">其他，請註明：</label><input type = "text" class = "qb10_1b_4" name = "qb10_1b_4a" id = "qb10_1b_4a" value = "<?php echo @$ans["qb10_1b_4a"]; ?>" disabled></td>
							</tr>
						</table>
						<br />
					</div>	
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb10_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qb10" name = "qb10" id = "qb10_2" value = "2" <?php echo @$ans["qb10"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qb10_2">冇，</label>
					<div id = "db10_2">
						<table>
							<tr>
								<td class = "qno"><span class = "b">&nbsp;</span></td>
								<td>點解冇申請? <span class = "b">（可選多項）[不用讀出選項，提供示咭6，供受訪者選擇]</span></td>
							</tr>
						</table>
						
						<table>
							<tr>
								<td class = "qno"><label for = "qb10_2a_1">1</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_1" id = "qb10_2a_1" value = "1" <?php echo @$ans["qb10_2a_1"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_1">超出資產限額</label></td>
								<td class = "qno"><label for = "qb10_2a_5">5</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_5" id = "qb10_2a_5" value = "1" <?php echo @$ans["qb10_2a_5"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_5">怕公屋地點太遠</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_2a_2">2</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_2" id = "qb10_2a_2" value = "1" <?php echo @$ans["qb10_2a_2"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_2">超出入息限額 </label></td>
								<td class = "qno"><label for = "qb10_2a_6">6</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_6" id = "qb10_2a_6" value = "1" <?php echo @$ans["qb10_2a_6"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_6">申請手續麻煩</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_2a_3">3</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_3" id = "qb10_2a_3" value = "1" <?php echo @$ans["qb10_2a_3"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_3">不符合居港七年條件 </label></td>
								<td class = "qno"><label for = "qb10_2a_7">7</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_7" id = "qb10_2a_7" value = "1" <?php echo @$ans["qb10_2a_7"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_7">輪候時間太長</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qb10_2a_4">4</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_4" id = "qb10_2a_4" value = "1" <?php echo @$ans["qb10_2a_4"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_4">不懂申請手續</label></td>
								<td class = "qno"><label for = "qb10_2a_8">8</label></td>
								<td class = "ano"><input type = "checkbox" class = "qb10_2a" name = "qb10_2a_8" id = "qb10_2a_8" value = "1" <?php echo @$ans["qb10_2a_8"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qb10_2a_8">其他：</label><input type = "text" class = "qb10_2a_8" name = "qb10_2a_8a" id = "qb10_2a_8a" value = "<?php echo @$ans["qb10_2a_8a"]; ?>" disabled></td>
							</tr>
						</table>
						<br />
					</div>	
				</td>
			</tr>
		</table>
		<br />
	</div>	
	
	
	<div id = "db11">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B11.</span></td>
				<td><span class = "b">請問你哋而家有冇面對緊以下嘅困難 / 問題?（可選多項）<br />[不用讀出選項，提供示咭7，供受訪者選擇] </span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb11_1">1</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_1" id = "qb11_1" value = "1" <?php echo @$ans["qb11_1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_1">考慮搬遷到其他屋宇單位</label></td>
				<td class = "qno"><label for = "qb11_7">7</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_7" id = "qb11_7" value = "1" <?php echo @$ans["qb11_7"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_7">失業</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb11_2">2</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_2" id = "qb11_2" value = "1" <?php echo @$ans["qb11_2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_2">經濟困難</label></td>
				<td class = "qno"><label for = "qb11_8">8</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_8" id = "qb11_8" value = "1" <?php echo @$ans["qb11_8"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_8">管教子女</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb11_3">3</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_3" id = "qb11_3" value = "1" <?php echo @$ans["qb11_3"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_3">現有居所環境</label></td>
				<td class = "qno"><label for = "qb11_9">9</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_9" id = "qb11_9" value = "1" <?php echo @$ans["qb11_9"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_9">家庭問題</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb11_4">4</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_4" id = "qb11_4" value = "1" <?php echo @$ans["qb11_4"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_4">子女學業問題</label></td>
				<td class = "qno"><label for = "qb11_10">10</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_10" id = "qb11_10" value = "1" <?php echo @$ans["qb11_10"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_10">其他：</label><input type = "text" class = "qb11_10" name = "qb11_10a" id = "qb11_10a" value = "<?php echo @$ans["qb11_10a"]; ?>" disabled></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb11_5">5</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_5" id = "qb11_5" value = "1" <?php echo @$ans["qb11_5"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_5">健康問題</label></td>
				<td class = "qno"><label for = "qb11_11">11</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_11" id = "qb11_11" value = "1" <?php echo @$ans["qb11_11"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_11">沒有任何困難</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb11_6">6</label></td>
				<td class = "ano"><input type = "checkbox" class = "qb11" name = "qb11_6" id = "qb11_6" value = "1" <?php echo @$ans["qb11_6"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb11_6">開工不足</label></td>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td class = "">&nbsp;</td>
			</tr>
		</table>
		<br />
	</div>	
	
	<div id = "db12">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B12.</span></td>
				<td><span class = "b">請問你哋對呢幢樓宇嘅居住環境、現狀同埋安全情況滿唔滿意?</span></td>
			</tr>
		</table>	
	
		<table>
			<tr>
				<td>&nbsp;</td>
				<td class = "cen">1非常滿意</td>
				<td class = "cen">2滿意</td>
				<td class = "cen">3一般</td>
				<td class = "cen">4不滿意</td>
				<td class = "cen">5非常不滿意</td>
			</tr>
			<tr class = "odd">
				<td>a.	租住範圍內既空氣流通度</td>
				<td class = "cen"><input type = "radio" class = "qb12a" name = "qb12a" id = "qb12a_1" value = "1" <?php echo @$ans["qb12a"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12a" name = "qb12a" id = "qb12a_2" value = "2" <?php echo @$ans["qb12a"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12a" name = "qb12a" id = "qb12a_3" value = "3" <?php echo @$ans["qb12a"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12a" name = "qb12a" id = "qb12a_4" value = "4" <?php echo @$ans["qb12a"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12a" name = "qb12a" id = "qb12a_5" value = "5" <?php echo @$ans["qb12a"] == "5" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "even">
				<td>b.	居住空間<span class = "up">5</span></td>
				<td class = "cen"><input type = "radio" class = "qb12b" name = "qb12b" id = "qb12b_1" value = "1" <?php echo @$ans["qb12b"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12b" name = "qb12b" id = "qb12b_2" value = "2" <?php echo @$ans["qb12b"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12b" name = "qb12b" id = "qb12b_3" value = "3" <?php echo @$ans["qb12b"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12b" name = "qb12b" id = "qb12b_4" value = "4" <?php echo @$ans["qb12b"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb12b" name = "qb12b" id = "qb12b_5" value = "5" <?php echo @$ans["qb12b"] == "5" ? "checked":""; ?> ></td>
			</tr>	
		</table>
		<br />
		<span class = "i">5 這是住戶對居住密度的主觀意見</span><br /><br />
	</div>
	
	<div id = "db13">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B13.</span></td>
				<td><span class = "b">請問你哋而家所租住嘅範圍/ 分間單位 / 房間內有冇以下問題呢? 如有，問題嚴唔嚴重呢?</span></td>
			</tr>
		</table>	
	
		<table>
			<tr>
				<td>&nbsp;</td>
				<td class = "cen" colspan = "5">有，</td>
				<td class = "cen noborr" rowspan = "2">6沒有此<br />問題</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class = "cen">1非常嚴重</td>
				<td class = "cen">2嚴重</td>
				<td class = "cen">3一般</td>
				<td class = "cen">4不嚴重</td>
				<td class = "cen">5非常不嚴重</td>
			</tr>
			<tr class = "odd">
				<td>a.	滲水／漏水</td>
				<td class = "cen"><input type = "radio" class = "qb13a" name = "qb13a" id = "qb13a_1" value = "1" <?php echo @$ans["qb13a"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13a" name = "qb13a" id = "qb13a_2" value = "2" <?php echo @$ans["qb13a"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13a" name = "qb13a" id = "qb13a_3" value = "3" <?php echo @$ans["qb13a"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13a" name = "qb13a" id = "qb13a_4" value = "4" <?php echo @$ans["qb13a"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13a" name = "qb13a" id = "qb13a_5" value = "5" <?php echo @$ans["qb13a"] == "5" ? "checked":""; ?> ></td>
				<td class = "cen noborr"><input type = "radio" class = "qb13a" name = "qb13a" id = "qb13a_6" value = "6" <?php echo @$ans["qb13a"] == "6" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "even">
				<td>b.	鋼筋外露</td>
				<td class = "cen"><input type = "radio" class = "qb13b" name = "qb13b" id = "qb13b_1" value = "1" <?php echo @$ans["qb13b"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13b" name = "qb13b" id = "qb13b_2" value = "2" <?php echo @$ans["qb13b"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13b" name = "qb13b" id = "qb13b_3" value = "3" <?php echo @$ans["qb13b"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13b" name = "qb13b" id = "qb13b_4" value = "4" <?php echo @$ans["qb13b"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13b" name = "qb13b" id = "qb13b_5" value = "5" <?php echo @$ans["qb13b"] == "5" ? "checked":""; ?> ></td>
				<td class = "cen noborr"><input type = "radio" class = "qb13b" name = "qb13b" id = "qb13b_6" value = "6" <?php echo @$ans["qb13b"] == "6" ? "checked":""; ?> ></td>
			</tr>	
			<tr class = "odd">
				<td>c.	石屎剝落</td>
				<td class = "cen"><input type = "radio" class = "qb13c" name = "qb13c" id = "qb13c_1" value = "1" <?php echo @$ans["qb13c"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13c" name = "qb13c" id = "qb13c_2" value = "2" <?php echo @$ans["qb13c"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13c" name = "qb13c" id = "qb13c_3" value = "3" <?php echo @$ans["qb13c"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13c" name = "qb13c" id = "qb13c_4" value = "4" <?php echo @$ans["qb13c"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13c" name = "qb13c" id = "qb13c_5" value = "5" <?php echo @$ans["qb13c"] == "5" ? "checked":""; ?> ></td>
				<td class = "cen noborr"><input type = "radio" class = "qb13c" name = "qb13c" id = "qb13c_6" value = "6" <?php echo @$ans["qb13c"] == "6" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "even">
				<td>d.	電線鋪設零亂</td>
				<td class = "cen"><input type = "radio" class = "qb13d" name = "qb13d" id = "qb13d_1" value = "1" <?php echo @$ans["qb13d"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13d" name = "qb13d" id = "qb13d_2" value = "2" <?php echo @$ans["qb13d"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13d" name = "qb13d" id = "qb13d_3" value = "3" <?php echo @$ans["qb13d"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13d" name = "qb13d" id = "qb13d_4" value = "4" <?php echo @$ans["qb13d"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb13d" name = "qb13d" id = "qb13d_5" value = "5" <?php echo @$ans["qb13d"] == "5" ? "checked":""; ?> ></td>
				<td class = "cen noborr"><input type = "radio" class = "qb13d" name = "qb13d" id = "qb13d_6" value = "6" <?php echo @$ans["qb13d"] == "6" ? "checked":""; ?> ></td>
			</tr>
		</table>
		<br />
	</div>	
	
	
	<div id = "db14">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B14.</span></td>
				<td><span class = "b">請問你哋對呢幢樓宇嘅居住環境、現狀同埋安全情況滿唔滿意?</span></td>
			</tr>
		</table>	
	
		<table>
			<tr>
				<td>&nbsp;</td>
				<td class = "cen">1非常滿意</td>
				<td class = "cen">2滿意</td>
				<td class = "cen">3一般</td>
				<td class = "cen">4不滿意</td>
				<td class = "cen">5非常不滿意</td>
			</tr>
			<tr class = "odd">
				<td>a.	大廈內的衛生情況</td>
				<td class = "cen"><input type = "radio" class = "qb14a" name = "qb14a" id = "qb14a_1" value = "1" <?php echo @$ans["qb14a"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14a" name = "qb14a" id = "qb14a_2" value = "2" <?php echo @$ans["qb14a"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14a" name = "qb14a" id = "qb14a_3" value = "3" <?php echo @$ans["qb14a"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14a" name = "qb14a" id = "qb14a_4" value = "4" <?php echo @$ans["qb14a"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14a" name = "qb14a" id = "qb14a_5" value = "5" <?php echo @$ans["qb14a"] == "5" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "even">
				<td>b.	大廈走廊的暢通程度<span class = "up">6</span></td>
				<td class = "cen"><input type = "radio" class = "qb14b" name = "qb14b" id = "qb14b_1" value = "1" <?php echo @$ans["qb14b"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14b" name = "qb14b" id = "qb14b_2" value = "2" <?php echo @$ans["qb14b"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14b" name = "qb14b" id = "qb14b_3" value = "3" <?php echo @$ans["qb14b"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14b" name = "qb14b" id = "qb14b_4" value = "4" <?php echo @$ans["qb14b"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14b" name = "qb14b" id = "qb14b_5" value = "5" <?php echo @$ans["qb14b"] == "5" ? "checked":""; ?> ></td>
			</tr>	
			<tr class = "odd">
				<td>c.	走火通道(後樓梯)的暢通程度</td>
				<td class = "cen"><input type = "radio" class = "qb14c" name = "qb14c" id = "qb14c_1" value = "1" <?php echo @$ans["qb14c"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14c" name = "qb14c" id = "qb14c_2" value = "2" <?php echo @$ans["qb14c"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14c" name = "qb14c" id = "qb14c_3" value = "3" <?php echo @$ans["qb14c"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14c" name = "qb14c" id = "qb14c_4" value = "4" <?php echo @$ans["qb14c"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14c" name = "qb14c" id = "qb14c_5" value = "5" <?php echo @$ans["qb14c"] == "5" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "even">
				<td>d.	電力供應情況</td>
				<td class = "cen"><input type = "radio" class = "qb14d" name = "qb14d" id = "qb14d_1" value = "1" <?php echo @$ans["qb14d"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14d" name = "qb14d" id = "qb14d_2" value = "2" <?php echo @$ans["qb14d"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14d" name = "qb14d" id = "qb14d_3" value = "3" <?php echo @$ans["qb14d"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14d" name = "qb14d" id = "qb14d_4" value = "4" <?php echo @$ans["qb14d"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14d" name = "qb14d" id = "qb14d_5" value = "5" <?php echo @$ans["qb14d"] == "5" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "odd">
				<td>e.	消防設備<span class = "up">7</span></td>
				<td class = "cen"><input type = "radio" class = "qb14e" name = "qb14e" id = "qb14e_1" value = "1" <?php echo @$ans["qb14e"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14e" name = "qb14e" id = "qb14e_2" value = "2" <?php echo @$ans["qb14e"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14e" name = "qb14e" id = "qb14e_3" value = "3" <?php echo @$ans["qb14e"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14e" name = "qb14e" id = "qb14e_4" value = "4" <?php echo @$ans["qb14e"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14e" name = "qb14e" id = "qb14e_5" value = "5" <?php echo @$ans["qb14e"] == "5" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "even">
				<td>f.	治安</td>
				<td class = "cen"><input type = "radio" class = "qb14f" name = "qb14f" id = "qb14f_1" value = "1" <?php echo @$ans["qb14f"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14f" name = "qb14f" id = "qb14f_2" value = "2" <?php echo @$ans["qb14f"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14f" name = "qb14f" id = "qb14f_3" value = "3" <?php echo @$ans["qb14f"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14f" name = "qb14f" id = "qb14f_4" value = "4" <?php echo @$ans["qb14f"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14f" name = "qb14f" id = "qb14f_5" value = "5" <?php echo @$ans["qb14f"] == "5" ? "checked":""; ?> ></td>
			</tr>
			<tr class = "odd">
				<td>g.	整體樓宇狀況</td>
				<td class = "cen"><input type = "radio" class = "qb14g" name = "qb14g" id = "qb14g_1" value = "1" <?php echo @$ans["qb14g"] == "1" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14g" name = "qb14g" id = "qb14g_2" value = "2" <?php echo @$ans["qb14g"] == "2" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14g" name = "qb14g" id = "qb14g_3" value = "3" <?php echo @$ans["qb14g"] == "3" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14g" name = "qb14g" id = "qb14g_4" value = "4" <?php echo @$ans["qb14g"] == "4" ? "checked":""; ?> ></td>
				<td class = "cen"><input type = "radio" class = "qb14g" name = "qb14g" id = "qb14g_5" value = "5" <?php echo @$ans["qb14g"] == "5" ? "checked":""; ?> ></td>
			</tr>
		</table>
		<br />
		<span class = "i">6 這是主觀量度方法，視乎走廊／走火通道有幾經常／有多少雜物阻礙</span><br />
		<span class = "i">7 消防龍頭／消防喉／消防花灑／滅火筒／沙筒／防煙門</span><br /><br />
	</div>
	
	<div id = "db15">
		<table>
			<tr>
				<td class = "qno"><span class = "b">B15.</span></td>
				<td><span class = "b">整體嚟講，你滿唔滿意而家所租住嘅範圍 / 分間單位 / 房間呢?</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qb15_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qb15" name = "qb15" id = "qb15_1" value = "1" <?php echo @$ans["qb15"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qb15_1">非常滿意</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb15_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qb15" name = "qb15" id = "qb15_2" value = "2" <?php echo @$ans["qb15"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qb15_2">滿意</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb15_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qb15" name = "qb15" id = "qb15_3" value = "3" <?php echo @$ans["qb15"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qb15_3">一般</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb15_4">4</label></td>
				<td class = "ano"><input type = "radio" class = "qb15" name = "qb15" id = "qb15_4" value = "4" <?php echo @$ans["qb15"] == "4"?"checked":""; ?>></td>
				<td class = ""><label for = "qb15_4">不滿意</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qb15_5">5</label></td>
				<td class = "ano"><input type = "radio" class = "qb15" name = "qb15" id = "qb15_5" value = "5" <?php echo @$ans["qb15"] == "5"?"checked":""; ?>></td>
				<td class = ""><label for = "qb15_5">非常不滿意</label></td>
			</tr>
		</table>
		<br />
	</div>	
	
	
</div>