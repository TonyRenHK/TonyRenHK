
<head>
	<title>2014年有關住屋狀況的主題性住戶統計調查</title>
	<!--
	<meta name="viewport" content="width=device-width, initial-scale=2.0, minimum-scale=2.0, maximum-scale=2.0, user-scalable=no">
	-->
	<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0, user-scalable=yes">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="jquery-1.11.1.js"></script>
	<script type="text/javascript" src="sdu.js"></script> 
	<link rel="stylesheet" type="text/css" href="sdu.css" />
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
  
</head>







<div id = "pq">
	<input type ="hidden" name = "sdunum" id = "sdunum" value = "0">
	<table class = "bor">
		<tr>
			<td><span class = "b">引言</span><br />早晨 / 午安 / 晚安，我叫___________，係政策二十一有限公司嘅訪問員，我哋受統計處委託進行緊一項關於住屋狀況嘅主題性住戶統計調查，目的係為了解市民嘅居住狀況同埋佢地所面對嘅問題。調查結果將有助政府制訂有關政策。請放心，你所提供嘅資料將會絕對保密。多謝你嘅合作。</td>
		</tr>
	</table>

	<table class = "headspan">
		<tr>
			<td>(Q)	屋宇單位資料</td>
		</tr>
	</table>
	<br />
	
	<div id = "dq1">
		<table>
			<tr>
				<td class = "qno"><span class = "b">Q1.</span></td>
				<td><span class = "b">請問你哋嘅單位係屬於邊一類型嘅呢? [如訪問員憑觀察已有答案，便不用詢問受訪者。]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qq1_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qq1" name = "qq1" id = "qq1_1" value = "1" <?php echo @$ans["qq1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq1_1">私人永久性房屋單位</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq1_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qq1" name = "qq1" id = "qq1_2" value = "2" <?php echo @$ans["qq1"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qq1_2">天台建築物</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq1_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qq1" name = "qq1" id = "qq1_3" value = "3" <?php echo @$ans["qq1"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qq1_3">其他，請註明：</label><input type = "text" class = "qq1_3" name = "qq1_3a" id = "qq1_3a" value = "<?php echo @$ans["qq1_3a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	<div id = "dq2">
		<table>
			<tr>
				<td class = "qno"><span class = "b">Q2.</span></td>
				<td><span class = "b">請問呢個單位係唔係屬於屋外直達<span class = "up">1</span>嘅分間單位／房間?<br />[如訪問員憑觀察已有答案，便不用詢問受訪者。]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qq2_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qq2" name = "qq2" id = "qq2_1" value = "1" <?php echo @$ans["qq2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq2_1">係，</label>
					<div id = "dq2_1">
						<table>
							<tr>
								<td class = "qno"><span class = "b">(a)</span></td>
								<td>咁係屬於以下邊一個<span class = "b">類型</span>呢?</td>
							</tr>
						</table>
						<table>
							<tr>
								<td class = "qno top"><label for = "qq2_1a_1">1</label></td>
								<td class = "ano top"><input type = "radio" class = "qq2_1a" name = "qq2_1a" id = "qq2_1a_1" value = "1" <?php echo @$ans["qq2_1a"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qq2_1a_1"><img src = "q2_1.jpg" alt = "type1"></label></td>
							</tr>
							<tr>
								<td class = "qno top"><label for = "qq2_1a_2">2</label></td>
								<td class = "ano top"><input type = "radio" class = "qq2_1a" name = "qq2_1a" id = "qq2_1a_2" value = "2" <?php echo @$ans["qq2_1a"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qq2_1a_2"><img src = "q2_2.jpg" alt = "type2"></label></td>
							</tr>
							<tr>
								<td class = "qno top"><label for = "qq2_1a_3">3</label></td>
								<td class = "ano top"><input type = "radio" class = "qq2_1a" name = "qq2_1a" id = "qq2_1a_3" value = "3" <?php echo @$ans["qq2_1a"] == "3"?"checked":""; ?>></td>
								<td class = ""><label for = "qq2_1a_3">其他，請註明：</label><input type = "text" class = "qq2_1a_3" name = "qq2_1a_3a" id = "qq2_1a_3a" value = "<?php echo @$ans["qq2_1a_3a"]; ?>" disabled>
								<input type="file" accept="image/*" capture="camera" id="capture" name = "capture"> 
								
								<div id = "pic">
								</div>
								</td>
							</tr>


						</table>
						<table>
							<tr>
								<td class = "qno"><span class = "b">(b)</span></td>
								<td>總共有幾多個屋外直達嘅分間單位／房間呢? <input type = "text" class = "qq2_1b" name = "qq2_1b" id = "qq2_1b" value = "<?php echo @$ans["qq2_1b"]; ?>">個</td>
							</tr>
							<tr>
								<td class = "qno"><span class = "b">&nbsp;</span></td>
								<td>&#8594;跳至A部分-租用範圍資料</td>
							</tr>
						</table>
						
						
					</div>
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq2_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qq2" name = "qq2" id = "qq2_2" value = "2" <?php echo @$ans["qq2"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qq2_2">唔係</label></td>
			</tr>
		</table>
		<br />
<span class = "i">1 屋外直逹 － 定義為不必經過其他屋宇單位而能從街道、公共走廊或樓梯直逹屋宇單位內。</span><br /><br />
	</div>	
	
	
	
	
	
	<div id = "dq3">
		<table>
			<tr>
				<td class = "qno"><span class = "b">Q3.</span></td>
				<td><span class = "b">請問呢個單位總共有幾多伙人住呢？ （一伙人是指一群住在一起及分享生活所需（如膳食、日常開支）的人士，他們之間不一定有親戚關係。因此，自己單獨安排生活所需的個別人士亦視作一伙。）</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qq3_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qq3" name = "qq3" id = "qq3_1" value = "1" <?php echo @$ans["qq3"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq3_1">一伙人	你哋呢伙人係唔係居住整個單位？</label>
					<div id = "dq3_1">
						<table>
							<tr>
								<td class = "qno"><label for = "qq3_1a_1">1</label></td>
								<td class = "ano"><input type = "radio" class = "qq3_1a" name = "qq3_1a" id = "qq3_1a_1" value = "1" <?php echo @$ans["qq3_1a"] == "1"?"checked":""; ?>></td>
								<td class = ""><label for = "qq3_1a_1">係<span class = "b">（不是目標受訪對象，問卷完）</span></label></td>
							</tr>
							<tr>
								<td class = "qno"><label for = "qq3_1a_2">2</label></td>
								<td class = "ano"><input type = "radio" class = "qq3_1a" name = "qq3_1a" id = "qq3_1a_2" value = "2" <?php echo @$ans["qq3_1a"] == "2"?"checked":""; ?>></td>
								<td class = ""><label for = "qq3_1a_2">唔係</label></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq3_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qq3" name = "qq3" id = "qq3_2" value = "2" <?php echo @$ans["qq3"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qq3_2">兩伙人或以上</label></td>
			</tr>
		</table>
		<br />
	</div>	
	
	<div id = "dq4">
		<table>
			<tr>
				<td class = "qno"><span class = "b">Q4.</span></td>
				<td><span class = "b">請問呢個單位內有冇 (訪問員讀出以下每一項)（可選多項）</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qq4_1">1</label></td>
				<td class = "ano"><input type = "checkbox" class = "qq4" name = "qq4_1" id = "qq4_1" value = "1" <?php echo @$ans["qq4_1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq4_1">共用嘅客飯廳</label></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq4_2">2</label></td>
				<td class = "ano"><input type = "checkbox" class = "qq4" name = "qq4_2" id = "qq4_2" value = "1" <?php echo @$ans["qq4_2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq4_2">板間房<span class = "up">2</span></label></td>
				<td><input type = "text" class = "qq4_2" name = "qq4_2a" id = "qq4_2a" value = "<?php echo @$ans["qq4_2a"]; ?>" disabled>數目</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq4_3">3</label></td>
				<td class = "ano"><input type = "checkbox" class = "qq4" name = "qq4_3" id = "qq4_3" value = "1" <?php echo @$ans["qq4_3"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq4_3">梗房<span class = "up">3</span>（板間房除外）</label></td>
				<td><input type = "text" class = "qq4_3" name = "qq4_3a" id = "qq4_3a" value = "<?php echo @$ans["qq4_3a"]; ?>" disabled>數目</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq4_4">4</label></td>
				<td class = "ano"><input type = "checkbox" class = "qq4" name = "qq4_4" id = "qq4_4" value = "1" <?php echo @$ans["qq4_4"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq4_4">閣樓</label></td>
				<td><input type = "text" class = "qq4_4" name = "qq4_4a" id = "qq4_4a" value = "<?php echo @$ans["qq4_4a"]; ?>" disabled>數目</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq4_5">5</label></td>
				<td class = "ano"><input type = "checkbox" class = "qq4" name = "qq4_5" id = "qq4_5" value = "1" <?php echo @$ans["qq4_5"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq4_5">牀位</label></td>
				<td><input type = "text" class = "qq4_5" name = "qq4_5a" id = "qq4_5a" value = "<?php echo @$ans["qq4_5a"]; ?>" disabled>數目</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qq4_6">6</label></td>
				<td class = "ano"><input type = "checkbox" class = "qq4" name = "qq4_6" id = "qq4_6" value = "1" <?php echo @$ans["qq4_6"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qq4_6">其他，請註明：</label><input type = "text" class = "qq4_6" name = "qq4_6b" id = "qq4_6b" value = "<?php echo @$ans["qq4_6b"]; ?>" disabled></td>
				<td><input type = "text" class = "qq4_6" name = "qq4_6a" id = "qq4_6a" value = "<?php echo @$ans["qq4_6a"]; ?>" disabled>數目</td>
			</tr>
		</table>
		<br />
	</div>
	
	
	
	
	
	
	
<span class = "b">若此屋宇單位多於一伙人居住，訪問員必須用多張獨立問卷，分別訪問每個住戶。</span><br /><br /><br />


<span class = "i">2 板間房 － 為一個屋宇單位用木板隔開為一個或多個房間，不論木間隔直達天花板與否。</span><br />
<span class = "i">3 梗房  － 為一個屋宇單位用木板以外的材料隔開為一個或多個房間，不論間隔直達天花板與否。</span><br />
	
	
	
</div>