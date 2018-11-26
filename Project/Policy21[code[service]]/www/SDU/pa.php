<div id = "pa">
	<input type ="hidden" name = "hhnum" id = "hhnum" value = "0">
	<table class = "bor">
		<tr>
			<td><span class = "b">引言</span><br />早晨 / 午安 / 晚安，我叫___________，係政策二十一有限公司嘅訪問員，我哋受統計處委託進行緊一項關於住屋狀況嘅主題性住戶統計調查，目的為了解市民嘅居住狀況同埋佢地所面對嘅問題。調查結果將有助政府制訂有關政策。請放心，你所提供嘅資料將會絕對保密。多謝你嘅合作。</td>
		</tr>
	</table>


	<table class = "headspan">
		<tr>
			<td>(A)	租用範圍資料</td>
		</tr>
	</table>
	<br />

	<div id = "da1">
		<table>
			<tr>
				<td class = "qno"><span class = "b">A1.</span></td>
				<td><span class = "b">請問你哋住嘅範圍 / 分間單位 / 房間係屬於以下邊一類型呢？<br />[如訪問員憑觀察已有答案，便不用詢問受訪者。]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qa1_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qa1" name = "qa1" id = "qa1_1" value = "1" <?php echo @$ans["qa1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qa1_1">屋外直達嘅分間單位／房間<span class = "b">，請問咁有幾多伙人係度住呢？</span></label><input type = "text" class = "qa1_1 short" name = "qa1_1a" id = "qa1_1a" value = "<?php echo @$ans["qa1_1a"]; ?>" disabled>伙</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qa1_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qa1" name = "qa1" id = "qa1_2" value = "2" <?php echo @$ans["qa1"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qa1_2">屋內互通嘅板間房</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qa1_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qa1" name = "qa1" id = "qa1_3" value = "3" <?php echo @$ans["qa1"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qa1_3">屋內互通嘅梗房</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qa1_4">4</label></td>
				<td class = "ano"><input type = "radio" class = "qa1" name = "qa1" id = "qa1_4" value = "4" <?php echo @$ans["qa1"] == "4"?"checked":""; ?>></td>
				<td class = ""><label for = "qa1_4">閣樓</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qa1_5">5</label></td>
				<td class = "ano"><input type = "radio" class = "qa1" name = "qa1" id = "qa1_5" value = "5" <?php echo @$ans["qa1"] == "5"?"checked":""; ?>></td>
				<td class = ""><label for = "qa1_5">牀位</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qa1_6">6</label></td>
				<td class = "ano"><input type = "radio" class = "qa1" name = "qa1" id = "qa1_6" value = "6" <?php echo @$ans["qa1"] == "6"?"checked":""; ?>></td>
				<td class = ""><label for = "qa1_6">其他，請註明：</label><input type = "text" class = "qa1_6" name = "qa1_6a" id = "qa1_6a" value = "<?php echo @$ans["qa1_6a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	
	
	<div id = "da2">
		<table>
			<tr>
				<td class = "qno"><span class = "b">A2.</span></td>
				<td><span class = "b">請問你住嘅範圍 / 分間單位 / 房間係自置定係租住呢?</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qa2_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qa2" name = "qa2" id = "qa2_1" value = "1" <?php echo @$ans["qa2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qa2_1">自置<span class = "b">（不是目標受訪對象，問卷完）</span></label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qa2_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qa2" name = "qa2" id = "qa2_2" value = "2" <?php echo @$ans["qa2"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qa2_2">租住，咁你哋嘅租住情況係點呢?</label>
					<div id = "da2_2">
						<table>
							<tr>
								<td class = "qno"><label for = "qa2_2a_1">1</label></td>
								<td class = "ano"><input type = "radio" class = "qa2_2a" name = "qa2_2a" id = "qa2_2a_1" value = "1" <?php echo @$ans["qa2_2a"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qa2_2a_1">全租戶</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qa2_2a_2">2</label></td>
								<td class = "ano"><input type = "radio" class = "qa2_2a" name = "qa2_2a" id = "qa2_2a_2" value = "2" <?php echo @$ans["qa2_2a"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qa2_2a_2">合租／二房東／三房客</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qa2_2a_3">3</label></td>
								<td class = "ano"><input type = "radio" class = "qa2_2a" name = "qa2_2a" id = "qa2_2a_3" value = "3" <?php echo @$ans["qa2_2a"] == "3"?"checked":""; ?>></td>
								<td class = ""><label for = "qa2_2a_3">僱主提供／免租</label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qa2_2a_4">4</label></td>
								<td class = "ano"><input type = "radio" class = "qa2_2a" name = "qa2_2a" id = "qa2_2a_4" value = "4" <?php echo @$ans["qa2_2a"] == "4"?"checked":""; ?>></td>
								<td class = ""><label for = "qa2_2a_4">其他，請註明：</label><input type = "text" class = "qa2_2a_4" name = "qa2_2a_4a" id = "qa2_2a_4a" value = "<?php echo @$ans["qa2_2a_4a"]; ?>" disabled></td>
							</tr>
						</table>
					</div>	
				</td>
			</tr>
		</table>
		<br />
	</div>	
	
	

	
	
	
	
	
	
	
	

	<div id = "da3">
		<table>
			<tr>
				<td class = "qno"><span class = "b">A3.</span></td>
				<td><span class = "b">請問你哋現時所租住範圍 / 分間單位 / 房間嘅面積係幾多平方呎?（獨佔嘅面積，不包括與其他住戶共用嘅地方）</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "">面積：<input type = "text" class = "qa3a" name = "qa3a" id = "qa3a" value = "<?php echo @$ans["qa3a"]; ?>">平方呎</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "b"><br />[訪問員注意：如受訪者未能回答，訪問員請用提供示咭1，供受訪者選擇]<br /><br /></span></td>
			</tr>
		</table>
		<div id = "da3a">
			<table>
				<tr>
					<td class = "qno"><label for = "qa3_1">1</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_1" value = "1" <?php echo @$ans["qa3"] == "1"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_1">70平方呎以下</label></td>
					<td class = "qno"><label for = "qa3_7">7</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_7" value = "7" <?php echo @$ans["qa3"] == "7"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_7">245-279平方呎</label></td>
				</tr>
				<tr>
					<td class = "qno"><label for = "qa3_2">2</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_2" value = "2" <?php echo @$ans["qa3"] == "2"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_2">70-104平方呎</label></td>
					<td class = "qno"><label for = "qa3_8">8</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_8" value = "8" <?php echo @$ans["qa3"] == "8"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_8">280-314平方呎</label></td>
				</tr>
				<tr>
					<td class = "qno"><label for = "qa3_3">3</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_3" value = "3" <?php echo @$ans["qa3"] == "3"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_3">105-139平方呎</label></td>
					<td class = "qno"><label for = "qa3_9">9</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_9" value = "9" <?php echo @$ans["qa3"] == "9"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_9"> 315-349平方呎</label></td>
				</tr>
				<tr>
					<td class = "qno"><label for = "qa3_4">4</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_4" value = "4" <?php echo @$ans["qa3"] == "4"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_4">140-174平方呎</label></td>
					<td class = "qno"><label for = "qa3_10">10</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_10" value = "10" <?php echo @$ans["qa3"] == "10"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_10">350-384平方呎</label></td>
				</tr>
				<tr>
					<td class = "qno"><label for = "qa3_5">5</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_5" value = "5" <?php echo @$ans["qa3"] == "5"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_5">175-209平方呎</label></td>
					<td class = "qno"><label for = "qa3_11">11</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_11" value = "11" <?php echo @$ans["qa3"] == "11"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_11">385-419平方呎</label></td>
				</tr>
				<tr>
					<td class = "qno"><label for = "qa3_6">6</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_6" value = "6" <?php echo @$ans["qa3"] == "6"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_6">210-244平方呎</label></td>
					<td class = "qno"><label for = "qa3_12">12</label></td>
					<td class = "ano"><input type = "radio" class = "qa3" name = "qa3" id = "qa3_12" value = "12" <?php echo @$ans["qa3"] == "12"?"checked":""; ?>></td>
					<td class = ""><label for = "qa3_12">420平方呎或以上</label></td>
				</tr>
			</table>
		</div>
		<br />
	</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>