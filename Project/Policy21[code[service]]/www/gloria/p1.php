

<h1><center>訪問法</center></h1>
<div id = "p1" class = "tw">
	<table class = "head">
		<tr>
			<td><span class = "headspan">第一部分：背景及基本資料(B)</span></td>
		</tr>
	</table>
	<br />
	<br />

	<div id = "dqb1">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B1.</span></td>
				<td colspan = "2"><span class = "b">您的性別是</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb1" name = "qb1" id = "qb1_1" value = "1" <?php echo @$ans["qb1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb1_1">1.</label></td>
				<td><label for  = "qb1_1">男</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb1" name = "qb1" id = "qb1_2" value = "2" <?php echo @$ans["qb1"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb1_2">2.</label></td>
				<td><label for  = "qb1_2">女</label></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	
	<div id = "dqb2">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B2.</span></td>
				<td colspan = "2"><span class = "b">您的宗教信仰是</span>(可選多於一項)</td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_1" id = "qb2_1" value = "1" <?php echo @$ans["qb2_1"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_1">1.</label></td>
				<td><label for  = "qb2_1">沒有宗教信仰 (無神論者)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_2" id = "qb2_2" value = "1" <?php echo @$ans["qb2_2"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_2">2.</label></td>
				<td><label for  = "qb2_2">佛教</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_3" id = "qb2_3" value = "1" <?php echo @$ans["qb2_3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_3">3.</label></td>
				<td><label for  = "qb2_3">道教</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_4" id = "qb2_4" value = "1" <?php echo @$ans["qb2_4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_4">4.</label></td>
				<td><label for  = "qb2_4">基督教 (新教) </label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_5" id = "qb2_5" value = "1" <?php echo @$ans["qb2_5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_5">5.</label></td>
				<td><label for  = "qb2_5">天主教</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_6" id = "qb2_6" value = "1" <?php echo @$ans["qb2_6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_6">6.</label></td>
				<td><label for  = "qb2_6">回教</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_7" id = "qb2_7" value = "1" <?php echo @$ans["qb2_7"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_7">7.</label></td>
				<td><label for  = "qb2_7">孔教</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "checkbox" class = "qb2" name = "qb2_8" id = "qb2_8" value = "1" <?php echo @$ans["qb2_8"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb2_8">8.</label></td>
				<td><label for  = "qb2_8">其他, 請註明：</label><input type = "text" class = "qb2_8" name = "qb2_8a" id = "qb2_8a" value = "<?php echo @$ans["qb2_8a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	
	
	<div id = "dqb3">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B3.</span></td>
				<td colspan = "2"><span class = "b">您在那裡出生？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3" name = "qb3" id = "qb3_1" value = "1" <?php echo @$ans["qb3"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3_1">1.</label></td>
				<td><label for  = "qb3_1">香港，您是否持有香港永久居民身分證</label></td>
			</tr>
			<tr id = "dqb3_1a">
				<td colspan = "3">
					<table>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qb3_1" name = "qb3_1a" id = "qb3_1a_1" value = "1" <?php echo @$ans["qb3_1a"] == "1" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qb3_1a_1">1.</label></td>
							<td><label for  = "qb3_1a_1">是</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qb3_1" name = "qb3_1a" id = "qb3_1a_2" value = "2" <?php echo @$ans["qb3_1a"] == "2" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qb3_1a_2">2.</label></td>
							<td><label for  = "qb3_1a_2">否</label></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3" name = "qb3" id = "qb3_2" value = "2" <?php echo @$ans["qb3"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3_2">2.</label></td>
				<td><label for  = "qb3_2">廣東</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3" name = "qb3" id = "qb3_3" value = "3" <?php echo @$ans["qb3"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3_3">3.</label></td>
				<td><label for  = "qb3_3">中國其他省份/市/自治區，請註明:</label>
					<select class = "qb3_3" name = "qb3_3a" id = "qb3_3a">
						<option value = ""></option>
						<option value = "河北省" <?php echo @$ans["qb3_3a"] == "河北省"?"selected":""; ?>>河北省</option>
						<option value = "山西省" <?php echo @$ans["qb3_4a"] == "山西省"?"selected":""; ?>>山西省</option>
						<option value = "遼寧省" <?php echo @$ans["qb3_5a"] == "遼寧省"?"selected":""; ?>>遼寧省</option>
						<option value = "吉林省" <?php echo @$ans["qb3_6a"] == "吉林省"?"selected":""; ?>>吉林省</option>
						<option value = "黑龍江省" <?php echo @$ans["qb3_7a"] == "黑龍江省"?"selected":""; ?>>黑龍江省</option>
						<option value = "江蘇省" <?php echo @$ans["qb3_8a"] == "江蘇省"?"selected":""; ?>>江蘇省</option>
						<option value = "浙江省" <?php echo @$ans["qb3_9a"] == "浙江省"?"selected":""; ?>>浙江省</option>
						<option value = "安徽省" <?php echo @$ans["qb3_10a"] == "安徽省"?"selected":""; ?>>安徽省</option>
						<option value = "福建省" <?php echo @$ans["qb3_11a"] == "福建省"?"selected":""; ?>>福建省</option>
						<option value = "江西省" <?php echo @$ans["qb3_12a"] == "江西省"?"selected":""; ?>>江西省</option>
						<option value = "山東省" <?php echo @$ans["qb3_13a"] == "山東省"?"selected":""; ?>>山東省</option>
						<option value = "河南省" <?php echo @$ans["qb3_14a"] == "河南省"?"selected":""; ?>>河南省</option>
						<option value = "湖北省" <?php echo @$ans["qb3_15a"] == "湖北省"?"selected":""; ?>>湖北省</option>
						<option value = "湖南省" <?php echo @$ans["qb3_16a"] == "湖南省"?"selected":""; ?>>湖南省</option>
						<option value = "廣東省" <?php echo @$ans["qb3_17a"] == "廣東省"?"selected":""; ?>>廣東省</option>
						<option value = "海南省" <?php echo @$ans["qb3_18a"] == "海南省"?"selected":""; ?>>海南省</option>
						<option value = "四川省" <?php echo @$ans["qb3_19a"] == "四川省"?"selected":""; ?>>四川省</option>
						<option value = "貴州省" <?php echo @$ans["qb3_20a"] == "貴州省"?"selected":""; ?>>貴州省</option>
						<option value = "雲南省" <?php echo @$ans["qb3_21a"] == "雲南省"?"selected":""; ?>>雲南省</option>
						<option value = "陝西省" <?php echo @$ans["qb3_22a"] == "陝西省"?"selected":""; ?>>陝西省</option>
						<option value = "甘肅省" <?php echo @$ans["qb3_23a"] == "甘肅省"?"selected":""; ?>>甘肅省</option>
						<option value = "青海省" <?php echo @$ans["qb3_24a"] == "青海省"?"selected":""; ?>>青海省</option>
						<option value = "北京市" <?php echo @$ans["qb3_25a"] == "北京市"?"selected":""; ?>>北京市</option>
						<option value = "天津市" <?php echo @$ans["qb3_26a"] == "天津市"?"selected":""; ?>>天津市</option>
						<option value = "上海市" <?php echo @$ans["qb3_27a"] == "上海市"?"selected":""; ?>>上海市</option>
						<option value = "重慶市" <?php echo @$ans["qb3_28a"] == "重慶市"?"selected":""; ?>>重慶市</option>
						<option value = "內蒙古自治區" <?php echo @$ans["qb3_29a"] == "內蒙古自治區"?"selected":""; ?>>內蒙古自治區</option>
						<option value = "廣西壯族自治區" <?php echo @$ans["qb3_30a"] == "廣西壯族自治區"?"selected":""; ?>>廣西壯族自治區</option>
						<option value = "西藏自治區" <?php echo @$ans["qb3_31a"] == "西藏自治區"?"selected":""; ?>>西藏自治區</option>
						<option value = "寧夏回族自治區" <?php echo @$ans["qb3_32a"] == "寧夏回族自治區"?"selected":""; ?>>寧夏回族自治區</option>
						<option value = "新疆維吾爾自治區" <?php echo @$ans["qb3_33a"] == "新疆維吾爾自治區"?"selected":""; ?>>新疆維吾爾自治區</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3" name = "qb3" id = "qb3_4" value = "4" <?php echo @$ans["qb3"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3_4">4.</label></td>
				<td><label for  = "qb3_4">其他國家，請註明:</label><input type = "text" class = "qb3_4" name = "qb3_4a" id = "qb3_4a" value = "<?php echo @$ans["qb3_4a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqb3a">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B3a.</span></td>
				<td colspan = "2"><span class = "b">您為什麼搬到香港？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3a" name = "qb3a" id = "qb3a_1" value = "1" <?php echo @$ans["qb3a"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3a_1">1.</label></td>
				<td><label for  = "qb3a_1">工作</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3a" name = "qb3a" id = "qb3a_2" value = "2" <?php echo @$ans["qb3a"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3a_2">2.</label></td>
				<td><label for  = "qb3a_2">與家人團聚</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3a" name = "qb3a" id = "qb3a_3" value = "3" <?php echo @$ans["qb3a"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3a_3">3.</label></td>
				<td><label for  = "qb3a_3">求學</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3a" name = "qb3a" id = "qb3a_4" value = "4" <?php echo @$ans["qb3a"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3a_4">4.</label></td>
				<td><label for  = "qb3a_4">其他原因, 請註明：</label><input type = "text" class = "qb3a_4" name = "qb3a_4a" id = "qb3a_4a" value = "<?php echo @$ans["qb3a_4a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqb3b">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B3b.</span></td>
				<td colspan = "2"><span class = "b">請問你是否在最近前的六個月內或將來六個月內，在港逗留最少一個月但少於三個月？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3b" name = "qb3b" id = "qb3b_1" value = "1" <?php echo @$ans["qb3b"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3b_1">1.</label></td>
				<td><label for  = "qb3b_1">是</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb3b" name = "qb3b" id = "qb3b_2" value = "2" <?php echo @$ans["qb3b"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb3b_2">2.</label></td>
				<td><label for  = "qb3b_2">否</label></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqb4">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B4.</span></td>
				<td colspan = "2"><span class = "b">您曾就讀的最高教育程度是下列哪種？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_0" value = "0" <?php echo @$ans["qb4"] == "0" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_0">0.</label></td>
				<td><label for  = "qb4_0">未受教育/學前教育</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_1" value = "1" <?php echo @$ans["qb4"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_1">1.</label></td>
				<td><label for  = "qb4_1">小學</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_2" value = "2" <?php echo @$ans["qb4"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_2">2.</label></td>
				<td><label for  = "qb4_2">初中</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_3" value = "3" <?php echo @$ans["qb4"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_3">3.</label></td>
				<td><label for  = "qb4_3">高中</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_4" value = "4" <?php echo @$ans["qb4"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_4">4.</label></td>
				<td><label for  = "qb4_4">專上教育： 文憑/證書課程/副學位課程</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_5" value = "5" <?php echo @$ans["qb4"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_5">5.</label></td>
				<td><label for  = "qb4_5">學位課程及以上</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb4" name = "qb4" id = "qb4_77" value = "77" <?php echo @$ans["qb4"] == "77" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb4_77">77.</label></td>
				<td><label for  = "qb4_77">不記得</label></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	<div id = "dqb5">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B5.</span></td>
				<td colspan = "2"><span class = "b">您現在的婚姻狀況是下列哪種？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_0" value = "0" <?php echo @$ans["qb5"] == "0" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5_0">0.</label></td>
				<td><label for  = "qb5_0">單身</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_1" value = "1" <?php echo @$ans["qb5"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5_1">1.</label></td>
				<td><label for  = "qb5_1">同居</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_2" value = "2" <?php echo @$ans["qb5"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5_2">2.</label></td>
				<td><label for  = "qb5_2">已婚</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_3" value = "3" <?php echo @$ans["qb5"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5_3">3.</label></td>
				<td><label for  = "qb5_3">離婚</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5" name = "qb5" id = "qb5_99" value = "99" <?php echo @$ans["qb5"] == "99" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5_99">99.</label></td>
				<td><label for  = "qb5_99">其他, 請註明：</label><input type = "text" class = "qb5_99" name = "qb5_99a" id = "qb5_99a" value = "<?php echo @$ans["qb5_99a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
<!--
	<div id = "dqb5a">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B5a.</span></td>
				<td colspan = "2"><span class = "b">有沒有性經驗？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5a" name = "qb5a" id = "qb5a_0" value = "0" <?php echo @$ans["qb5a"] == "0" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5a_0">0.</label></td>
				<td><label for  = "qb5a_0">沒有</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb5a" name = "qb5a" id = "qb5a_1" value = "1" <?php echo @$ans["qb5a"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb5a_1">1.</label></td>
				<td><label for  = "qb5a_1">有</label></td>
			</tr>
		</table>
		<br />
	</div>
-->	
	<div id = "dqb6">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B6.</span></td>
				<td colspan = "2"><span class = "b">您現在的住屋狀況如何？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb6" name = "qb6" id = "qb6_1" value = "1" <?php echo @$ans["qb6"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb6_1">1.</label></td>
				<td><label for  = "qb6_1">自置物業</label></td>
			</tr>
			<tr class="dqb6_1"><td></td><td class = "left" colspan = "3">
		          <input type = "radio" name = "qb6_1a" id = "qb6_1a_1" value = "01" <?php if (@$ans["qb6_1a"] == "01") { echo "checked"; } ?>><label for = "qb6_1a_1" >1. 公屋</label><br>
			      <input type = "radio" name = "qb6_1a" id = "qb6_1a_2" value = "02" <?php if (@$ans["qb6_1a"] == "02") { echo "checked"; } ?>><label for = "qb6_1a_2" >2. 居屋</label><br>
			      <input type = "radio" name = "qb6_1a" id = "qb6_1a_3" value = "03" <?php if (@$ans["qb6_1a"] == "03") { echo "checked"; } ?>><label for = "qb6_1a_3" >3. 私人房屋</label>
			</td>
	 </tr>
			
			<tr>
				<td class = "qno"><input type = "radio" class = "qb6" name = "qb6" id = "qb6_2" value = "2" <?php echo @$ans["qb6"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb6_2">2.</label></td>
				<td><label for  = "qb6_2">全租戶(即住戶向居於別處的人士租用整個單位自住，沒有分租，單位內也沒有其他的住戶)</label></td>
			</tr>
			<tr class="dqb6_2"><td></td><td class = "left" colspan = "3">
			      <input type = "radio" name = "qb6_2a" id = "qb6_2a_1" value = "01" <?php if (@$ans["qb6_2a"] == "01") { echo "checked"; } ?>><label for = "qb6_2a_1" >1. 公屋</label><br>
			      <input type = "radio" name = "qb6_2a" id = "qb6_2a_2" value = "02" <?php if (@$ans["qb6_2a"] == "02") { echo "checked"; } ?>><label for = "qb6_2a_2" >2. 居屋</label><br>
			      <input type = "radio" name = "qb6_2a" id = "qb6_2a_3" value = "03" <?php if (@$ans["qb6_2a"] == "03") { echo "checked"; } ?>><label for = "qb6_2a_3" >3. 私人房屋</label>
			</td>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb6" name = "qb6" id = "qb6_3" value = "3" <?php echo @$ans["qb6"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb6_3">3.</label></td>
				<td><label for  = "qb6_3">合租戶(兩個或以上的住戶分別向居於別處的人士租用部分單位元居住)二房東(住戶向居於別處的人士租用整個單位元，並把部分單位元分租予其他住戶) / 三房客(住戶向居於同一單位內的人士租用單位的一部分居住)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb6" name = "qb6" id = "qb6_4" value = "4" <?php echo @$ans["qb6"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb6_4">4.</label></td>
				<td><label for  = "qb6_4">由僱主提供 / 免租</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb6" name = "qb6" id = "qb6_5" value = "5" <?php echo @$ans["qb6"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb6_5">5.</label></td>
				<td><label for  = "qb6_5">其他, 請註明：</label><input type = "text" class = "qb6_5" name = "qb6_5a" id = "qb6_5a" value = "<?php echo @$ans["qb6_5a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqb7">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B7.</span></td>
				<td colspan = "2"><span class = "b">您目前的居住狀況是：</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_1" value = "1" <?php echo @$ans["qb7"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb7_1">1.</label></td>
				<td><label for  = "qb7_1">獨自居住</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb7" name = "qb7" id = "qb7_2" value = "2" <?php echo @$ans["qb7"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb7_2">2.</label></td>
				<td><label for  = "qb7_2">與其他人同住，有多少人與您同住？</label><input type = "text" class = "qb7_2" name = "qb7_2a" id = "qb7_2a" value = "<?php echo @$ans["qb7_2a"]; ?>">人</td>
			</tr>
		</table>
		<br />
	</div>
	
	<div id = "dqb7a">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B7a.</span></td>
				<td colspan = "2"><span class = "b">請簡述與您同住之人士：</span></td>
			</tr>
		</table>
		<br />
		<table class = "bor">
			<tr>
				<td class = "cen"><span class = "b">與您的關係</span></td>
				<td class = "cen"><span class = "b">人數</span></td>
			</tr>
			<tr>
				<td class = ""><span class = "">配偶 / 戀人</span></td>
				<td class = "cen"><span class = ""><input type = "text" class = "qb7a_1" name = "qb7a_1a" id = "qb7a_1a" value = "<?php echo @$ans["qb7a_1a"]; ?>"></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "">父母(包括配偶父母)</span></td>
				<td class = "cen"><span class = ""><input type = "text" class = "qb7a_2" name = "qb7a_2a" id = "qb7a_2a" value = "<?php echo @$ans["qb7a_2a"]; ?>"></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "">孩子</span></td>
				<td class = "cen"><span class = ""><input type = "text" class = "qb7a_3" name = "qb7a_3a" id = "qb7a_3a" value = "<?php echo @$ans["qb7a_3a"]; ?>"></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "">兄弟姐妹</span></td>
				<td class = "cen"><span class = ""><input type = "text" class = "qb7a_4" name = "qb7a_4a" id = "qb7a_4a" value = "<?php echo @$ans["qb7a_4a"]; ?>"></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "">朋友/室友 </span></td>
				<td class = "cen"><span class = ""><input type = "text" class = "qb7a_5" name = "qb7a_5a" id = "qb7a_5a" value = "<?php echo @$ans["qb7a_5a"]; ?>"></span></td>
			</tr>
			<tr>
				<td class = ""><span class = "">其他(如妯娌, 嫂子) (請註明:<input type = "text" class = "qb7a_6" name = "qb7a_6b" id = "qb7a_6b" value = "<?php echo @$ans["qb7a_6b"]; ?>">)</span></td>
				<td class = "cen"><span class = ""><input type = "text" class = "qb7a_6" name = "qb7a_6a" id = "qb7a_6a" value = "<?php echo @$ans["qb7a_6a"]; ?>"></span></td>
			</tr>
		</table>
		<br />
	</div>
	
	
	<div id = "dqb8">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B8.</span></td>
				<td colspan = "2"><span class = "b">您於現在的住址居住了多久？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_1" value = "1" <?php echo @$ans["qb8"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb8_1">1.</label></td>
				<td><label for  = "qb8_1">0 - 3個月</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_2" value = "2" <?php echo @$ans["qb8"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb8_2">2.</label></td>
				<td><label for  = "qb8_2">4 - 6個月</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_3" value = "3" <?php echo @$ans["qb8"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb8_3">3.</label></td>
				<td><label for  = "qb8_3">7個月 – 少於1年</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_4" value = "4" <?php echo @$ans["qb8"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb8_4">4.</label></td>
				<td><label for  = "qb8_4">1 - 5年</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb8" name = "qb8" id = "qb8_5" value = "5" <?php echo @$ans["qb8"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb8_5">5.</label></td>
				<td><label for  = "qb8_5">多於5年</label></td>
			</tr>
		</table>
		<br />
	</div>	
	
	<div id = "dqb9">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B9.</span></td>
				<td colspan = "2"><span class = "b">您在香港生活了多久？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb9" name = "qb9" id = "qb9_1" value = "1" <?php echo @$ans["qb9"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb9_1">1.</label></td>
				<td><label for  = "qb9_1">0 - 3個月</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb9" name = "qb9" id = "qb9_2" value = "2" <?php echo @$ans["qb9"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb9_2">2.</label></td>
				<td><label for  = "qb9_2">4 - 6個月</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb9" name = "qb9" id = "qb9_3" value = "3" <?php echo @$ans["qb9"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb9_3">3.</label></td>
				<td><label for  = "qb9_3">7個月 – 少於1年</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb9" name = "qb9" id = "qb9_4" value = "4" <?php echo @$ans["qb9"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb9_4">4.</label></td>
				<td><label for  = "qb9_4">1 - 5年</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb9" name = "qb9" id = "qb9_5" value = "5" <?php echo @$ans["qb9"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb9_5">5.</label></td>
				<td><label for  = "qb9_5">多於5年</label></td>
			</tr>
		</table>
		<br />
	</div>	
	
	<div id = "dqb10">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B10.</span></td>
				<td class = ""><span class = "b">在過去5年，您於多少個地方生活連續超過三個月？<input type = "text" class = "qb10" name = "qb10" id = "qb10" value = "<?php echo @$ans["qb10"]; ?>">個</span></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqb11">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B11.</span></td>
				<td class = ""><span class = "b">到香港前，您上一個生活地方是位於？<input type = "text" class = "qb11" name = "qb11" id = "qb11" value = "<?php echo @$ans["qb11"]; ?>"></span></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqb12">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B12.</span></td>
				<td colspan = "2"><span class = "b">您目前的工作狀況是？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_1" value = "1" <?php echo @$ans["qb12"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_1">1.</label></td>
				<td><label for  = "qb12_1">全職工作</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_2" value = "2" <?php echo @$ans["qb12"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_2">2.</label></td>
				<td><label for  = "qb12_2">兼職工作</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_3" value = "3" <?php echo @$ans["qb12"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_3">3.</label></td>
				<td><label for  = "qb12_3">目前沒有工作，但正在尋找工作</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_4" value = "4" <?php echo @$ans["qb12"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_4">4.</label></td>
				<td><label for  = "qb12_4">目前沒有工作，也沒有尋找工作</label>
				</td>
			</tr>
			<tr id = "dqb12_4a">
				<td colspan = "3">
					<table>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qb12_4" name = "qb12_4a" id = "qb12_4a_1" value = "1" <?php echo @$ans["qb12_4a"] == "1" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qb12_4a_1">a)</label></td>
							<td><label for  = "qb12_4a_1">退休人士</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qb12_4" name = "qb12_4a" id = "qb12_4a_2" value = "2" <?php echo @$ans["qb12_4a"] == "2" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qb12_4a_2">b)</label></td>
							<td><label for  = "qb12_4a_2">家庭主婦</label></td>
						</tr>
						<tr>
							<td class = "ano">&nbsp;</td>
							<td class = "qno"><input type = "radio" class = "qb12_4" name = "qb12_4a" id = "qb12_4a_3" value = "3" <?php echo @$ans["qb12_4a"] == "3" ? "checked":""; ?> ></td>
							<td class = "ano"><label for  = "qb12_4a_3">c)</label></td>
							<td><label for  = "qb12_4a_3">無需要工作人士</label></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_5" value = "5" <?php echo @$ans["qb12"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_5">5.</label></td>
				<td><label for  = "qb12_5">學生</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_6" value = "6" <?php echo @$ans["qb12"] == "6" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_6">6.</label></td>
				<td><label for  = "qb12_6">自雇人士</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb12" name = "qb12" id = "qb12_7" value = "7" <?php echo @$ans["qb12"] == "7" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb12_7">7.</label></td>
				<td><label for  = "qb12_7">其他, 請註明：</label><input type = "text" class = "qb12_7" name = "qb12_7a" id = "qb12_7a" value = "<?php echo @$ans["qb12_7a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>

	<div id = "dqb13">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B13.</span></td>
				<td colspan = "2"><span class = "b">請問你的職業是什麼？</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_1" value = "1" <?php echo @$ans["qb13"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_1">1.</label></td>
				<td><label for  = "qb13_1">農業生產者(農民)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_2" value = "2" <?php echo @$ans["qb13"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_2">2.</label></td>
				<td><label for  = "qb13_2">工人 (直接參加生產)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_3" value = "3" <?php echo @$ans["qb13"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_3">3.</label></td>
				<td><label for  = "qb13_3">商業、服務業、娛樂業的普通工作者</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_4" value = "4" <?php echo @$ans["qb13"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_4">4.</label></td>
				<td><label for  = "qb13_4">個體勞動者(如，小販、做小生意、推銷等)</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_5" value = "5" <?php echo @$ans["qb13"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_5">5.</label></td>
				<td><label for  = "qb13_5">職員、坐辦公室的人、白領、員警</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_6" value = "6" <?php echo @$ans["qb13"] == "6" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_6">6.</label></td>
				<td><label for  = "qb13_6">科技人員、教師、研究員、文藝界、傳媒廣告業</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_7" value = "7" <?php echo @$ans["qb13"] == "7" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_7">7.</label></td>
				<td><label for  = "qb13_7">各種企業家：經理、廠長、老闆(包括網店老闆)、等</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_8" value = "8" <?php echo @$ans["qb13"] == "8" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_8">8.</label></td>
				<td><label for  = "qb13_8">公務員</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb13" name = "qb13" id = "qb13_9" value = "9" <?php echo @$ans["qb13"] == "9" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb13_9">9.</label></td>
				<td><label for  = "qb13_9">其他, 請註明：</label><input type = "text" class = "qb13_9" name = "qb13_9a" id = "qb13_9a" value = "<?php echo @$ans["qb13_9a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>





	<div id = "dqb14">
		<table class = "">
			<tr>
				<td class = "qno"><span class = "b">B14.</span></td>
				<td colspan = "11"><span class = "b">您家庭的每月平均總收入是多少？家庭總月入: 包括所有全職、兼職及臨時工作收入、現金及住屋津貼、獎金和雙糧。（請不要扣除僱員的強積金供款，將獎金和雙糧除以 12 個月計算和所有形式的經濟援助。）</span></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_1" value = "1" <?php echo @$ans["qb14"] == "1" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_1">1.</label></td>
				<td><label for  = "qb14_1">沒有收入</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_2" value = "2" <?php echo @$ans["qb14"] == "2" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_2">2.</label></td>
				<td><label for  = "qb14_2">&lt;$8,000</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_3" value = "3" <?php echo @$ans["qb14"] == "3" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_3">3.</label></td>
				<td><label for  = "qb14_3">$8,000 - $8,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_4" value = "4" <?php echo @$ans["qb14"] == "4" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_4">4.</label></td>
				<td><label for  = "qb14_4">$9,000 - $9,999</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_5" value = "5" <?php echo @$ans["qb14"] == "5" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_5">5.</label></td>
				<td><label for  = "qb14_5">$10,000 - $12,499</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_6" value = "6" <?php echo @$ans["qb14"] == "6" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_6">6.</label></td>
				<td><label for  = "qb14_6">$12,500 - $14,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_7" value = "7" <?php echo @$ans["qb14"] == "7" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_7">7.</label></td>
				<td><label for  = "qb14_7">$15,000 - $19,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_8" value = "8" <?php echo @$ans["qb14"] == "8" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_8">8.</label></td>
				<td><label for  = "qb14_8">$20,000 - $29,999</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_9" value = "9" <?php echo @$ans["qb14"] == "9" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_9">9.</label></td>
				<td><label for  = "qb14_9">$30,000 - $39,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_10" value = "10" <?php echo @$ans["qb14"] == "10" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_10">10.</label></td>
				<td><label for  = "qb14_10">$40,000 - $49,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_11" value = "11" <?php echo @$ans["qb14"] == "11" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_11">11.</label></td>
				<td><label for  = "qb14_11">$50,000 - $59,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_12" value = "12" <?php echo @$ans["qb14"] == "12" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_12">12.</label></td>
				<td><label for  = "qb14_12">$60,000 - $69,999</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_13" value = "13" <?php echo @$ans["qb14"] == "13" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_13">13.</label></td>
				<td><label for  = "qb14_13">$70,000 - $79,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_14" value = "14" <?php echo @$ans["qb14"] == "14" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_14">14.</label></td>
				<td><label for  = "qb14_14">$80,000 – $89,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_15" value = "15" <?php echo @$ans["qb14"] == "15" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_15">15.</label></td>
				<td><label for  = "qb14_15">$90,000 - $99,999</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_16" value = "16" <?php echo @$ans["qb14"] == "16" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_16">16.</label></td>
				<td><label for  = "qb14_16">$100,000或以上</label></td>
			</tr>
			<tr>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_17" value = "17" <?php echo @$ans["qb14"] == "17" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_17">17.</label></td>
				<td><label for  = "qb14_17">拒絕回答</label></td>
				<td class = "qno"><input type = "radio" class = "qb14" name = "qb14" id = "qb14_18" value = "18" <?php echo @$ans["qb14"] == "18" ? "checked":""; ?> ></td>
				<td class = "ano"><label for  = "qb14_18">18.</label></td>
				<td><label for  = "qb14_18">不知道</label></td>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>&nbsp;</td>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</table>
		<br />
	</div>


</div>