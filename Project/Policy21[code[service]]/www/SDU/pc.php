

<head>
	<title>2014年有關住屋狀況的主題性住戶統計調查</title>

	<meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0, user-scalable=yes">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="jquery-1.11.1.js"></script>
	<script type="text/javascript" src="sdu.js"></script> 
	<link rel="stylesheet" type="text/css" href="sdu.css" />
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
  
</head>










<div id = "pc">
	<table class = "headspan">
		<tr>
			<td>(C)	住戶成員資料</td>
		</tr>
	</table>
	<br />
	<div id = "xdc1">
		<table>
			<tr>
				<td class = "qno"><span class = "b">C1.</span></td>
				<td><span class = "b">請問你通常住係呢度嘅住戶成員有幾多個？</span> <input type = "text" class = "qc1" name = "qc1" id = "qc1" value = "<?php echo @$ans["qc1"]; ?>">（不包括短期留港旅客）</td>
			</tr>
		</table>
		<br />
	</div>

	
	<div id = "dc2_8">
	
	<?php
	
		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_2\">\n";
			echo "<tr class = \"odd\">\n";
			echo "<td colspan = \"6\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\"><span class = \"b\">C2.</span></td>\n";
			echo "<td colspan = \"5\"><span class = \"b\">請你話俾我聽呢位住戶成員係你邊位？</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_1\">1</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_1\" value = \"1\" ".(@$ans["qc2_".$i.""] == "1" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc2_".$i."_1\">配偶</label></span></td>\n";
			echo "<td class = \"qno\"><span class = \"\"><label for = \"qc2_".$i."_6\">6</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_6\" value = \"6\" ".(@$ans["qc2_".$i.""] == "6" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc2_".$i."_6\">其他長輩親屬</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_2\">2</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_2\" value = \"2\" ".(@$ans["qc2_".$i.""] == "2" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_2\">子女</label></span></td>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_7\">7</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_7\" value = \"7\" ".(@$ans["qc2_".$i.""] == "7" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_7\">其他同輩親屬</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_3\">3</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_3\" value = \"3\" ".(@$ans["qc2_".$i.""] == "3" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_3\">孫</label></span></td>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_8\">8</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_8\" value = \"8\" ".(@$ans["qc2_".$i.""] == "8" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_8\">其他晚輩親屬</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_4\">4</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_4\" value = \"4\" ".(@$ans["qc2_".$i.""] == "4" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_4\">父母</label></span></td>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_9\">9</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_9\" value = \"9\" ".(@$ans["qc2_".$i.""] == "9" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_9\">留宿嘅家庭傭工</label></span> <span class = \"b\">[不需問 C5-C8]</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_5\">5</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_5\" value = \"5\" ".(@$ans["qc2_".$i.""] == "5" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_5\">兄弟姊妹</label></span></td>\n";
			echo "<td><span class = \"\"><label for = \"qc2_".$i."_10\">10</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc2_".$i."\" name = \"qc2_".$i."\" id = \"qc2_".$i."_10\" value = \"10\" ".(@$ans["qc2_".$i.""] == "10" ? "checked" : "")." ><td><span class = \"\"><label for = \"qc2_".$i."_10\">其他</label></span><input type = \"text\" class = \"qc2_".$i."_10\" name = \"qc2_".$i."_10a\" id = \"qc2_".$i."_10a\" value = \"".(@$ans["qc2_".$i."_10a"])."\" disabled></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"6\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_3\">\n";
			echo "<tr class = \"even\">\n";
			echo "<td colspan = \"6\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span><span class = \"pc".$i."_rel\" ></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\"><span class = \"b\">C3.</span></td>\n";
			echo "<td colspan = \"5\"><span class = \"b\">性別</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc3_".$i."_1\">1</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc3_".$i."\" name = \"qc3_".$i."\" id = \"qc3_".$i."_1\" value = \"1\" ".(@$ans["qc3_".$i.""] == "1" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc3_".$i."_1\">男</label></span></td>\n";
			echo "<td class = \"qno\"><span class = \"\"><label for = \"qc3_".$i."_2\">2</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc3_".$i."\" name = \"qc3_".$i."\" id = \"qc3_".$i."_2\" value = \"2\" ".(@$ans["qc3_".$i.""] == "2" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc3_".$i."_2\">女</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"6\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_4\">\n";
			echo "<tr class = \"odd\">\n";
			echo "<td colspan = \"2\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span><span class = \"pc".$i."_rel\" ></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\" rowspan = \"2\"><span class = \"b\">C4.</span></td>\n";
			echo "<td colspan = \"1\"><span class = \"b\">請問你／佢今年幾多歲呢？(以足歲計，未夠一歲的為\"0\")</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td colspan = \"1\"><span class = \"\"><input type = \"text\" class = \"qc4_".$i."\" name = \"qc4_".$i."\" id = \"qc4_".$i."\" value = \"".(@$ans["qc4_".$i.""])."\"></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"2\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_5\">\n";
			echo "<tr class = \"even\">\n";
			echo "<td colspan = \"6\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span><span class = \"pc".$i."_rel\" ></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\"><span class = \"b\">C5.</span></td>\n";
			echo "<td colspan = \"5\"><span class = \"b\">請問你／佢而家嘅婚姻狀況係乜嘢呢？</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc5_".$i."_1\">1</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc5_".$i."\" name = \"qc5_".$i."\" id = \"qc5_".$i."_1\" value = \"1\" ".(@$ans["qc5_".$i.""] == "1" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc5_".$i."_1\">從未結婚</label></span></td>\n";
			echo "<td class = \"qno\"><span class = \"\"><label for = \"qc5_".$i."_4\">4</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc5_".$i."\" name = \"qc5_".$i."\" id = \"qc5_".$i."_4\" value = \"4\" ".(@$ans["qc5_".$i.""] == "4" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc5_".$i."_4\">喪偶</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc5_".$i."_2\">2</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc5_".$i."\" name = \"qc5_".$i."\" id = \"qc5_".$i."_2\" value = \"2\" ".(@$ans["qc5_".$i.""] == "2" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc5_".$i."_2\">同居</label></span></td>\n";
			echo "<td><span class = \"\"><label for = \"qc5_".$i."_5\">5</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc5_".$i."\" name = \"qc5_".$i."\" id = \"qc5_".$i."_5\" value = \"5\" ".(@$ans["qc5_".$i.""] == "5" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc5_".$i."_5\">離婚／分居</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc5_".$i."_3\">3</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc5_".$i."\" name = \"qc5_".$i."\" id = \"qc5_".$i."_3\" value = \"3\" ".(@$ans["qc5_".$i.""] == "3" ? "checked" : "")." ></td><td><span class = \"\"><label for = \"qc5_".$i."_3\">已婚</label></span></td>\n";
			echo "<td><span class = \"\">&nbsp;</span></td><td class = \"ano\"><span class = \"\">&nbsp;</span></td><td><span class = \"\">&nbsp;</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"6\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_6\">\n";
			echo "<tr class = \"odd\">\n";
			echo "<td colspan = \"3\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span><span class = \"pc".$i."_rel\" ></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\"><span class = \"b\">C6.</span></td>\n";
			echo "<td colspan = \"2\"><span class = \"b\">請問你／佢係唔係在香港出世呢？</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc6_".$i."_1\">1</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc6_".$i."\" name = \"qc6_".$i."\" id = \"qc6_".$i."_1\" value = \"1\" ".(@$ans["qc6_".$i.""] == "1" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc6_".$i."_1\">係</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc6_".$i."_2\">2</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc6_".$i."\" name = \"qc6_".$i."\" id = \"qc6_".$i."_2\" value = \"2\" ".(@$ans["qc6_".$i.""] == "2" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc6_".$i."_2\">唔係，咁自那一年開始係香港住</label></span><input type = \"text\" class = \"qc6_".$i."_2 short\" name = \"qc6_".$i."_2a\" id = \"qc6_".$i."_2a\" value = \"".(@$ans["qc6_".$i."_2a"])."\" disabled></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"3\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_7\">\n";
			echo "<tr class = \"even\">\n";
			echo "<td colspan = \"3\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span><span class = \"pc".$i."_rel\" ></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\"><span class = \"b\">C7.</span></td>\n";
			echo "<td colspan = \"2\"><span class = \"b\">請問你／佢嘅教育程度係？</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc7_".$i."_1\">1</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc7_".$i."\" name = \"qc7_".$i."\" id = \"qc7_".$i."_1\" value = \"1\" ".(@$ans["qc7_".$i.""] == "1" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc7_".$i."_1\">冇受教育／學前教育</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc7_".$i."_2\">2</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc7_".$i."\" name = \"qc7_".$i."\" id = \"qc7_".$i."_2\" value = \"2\" ".(@$ans["qc7_".$i.""] == "2" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc7_".$i."_2\">小學 (小一至小六)</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc7_".$i."_3\">3</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc7_".$i."\" name = \"qc7_".$i."\" id = \"qc7_".$i."_3\" value = \"3\" ".(@$ans["qc7_".$i.""] == "3" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc7_".$i."_3\">初中</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc7_".$i."_4\">4</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc7_".$i."\" name = \"qc7_".$i."\" id = \"qc7_".$i."_4\" value = \"4\" ".(@$ans["qc7_".$i.""] == "4" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc7_".$i."_4\">高中／預科</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc7_".$i."_5\">5</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc7_".$i."\" name = \"qc7_".$i."\" id = \"qc7_".$i."_5\" value = \"5\" ".(@$ans["qc7_".$i.""] == "5" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc7_".$i."_5\">專上教育（文憑／證書課程、副學位課程、學位課程、碩士／博士課程）</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"3\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
			echo "<table class = \"bor hhqs\">\n";
			echo "<tr>\n";
			echo "<td colspan = \"1\">若「15歲或以上人士」(C4≧15)，續問 C8；否則跳至C9。</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
			echo "<br />\n";

		for ($i = 1 ; $i <= 20 ; $i++) {
			echo "<table class = \"bor hhqs pc".$i."\" id = \"pc".$i."_8\">\n";
			echo "<tr class = \"odd\">\n";
			echo "<td colspan = \"3\"><span class = \"b\">成員編號：".($i==1?"受訪者":$i)."</span><span class = \"pc".$i."_rel\" ></span><span id = \"pc".$i."_age\" ></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"qno\"><span class = \"b\">C8.</span></td>\n";
			echo "<td colspan = \"2\"><span class = \"b\">請問你／佢而家嘅工作係</span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_1\">1</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_1\" value = \"1\" ".(@$ans["qc8_".$i.""] == "1" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_1\">僱主(最少僱用一人為其工作的人)</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_2\">2</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_2\" value = \"2\" ".(@$ans["qc8_".$i.""] == "2" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_2\">僱員</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_3\">3</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_3\" value = \"3\" ".(@$ans["qc8_".$i.""] == "3" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_3\">自營工作者(並沒有僱用他人或受僱於他人的人)</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_4\">4</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_4\" value = \"4\" ".(@$ans["qc8_".$i.""] == "4" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_4\">無酬家庭從業員(為有關家庭工作但無收取報酬的人)</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_5\">5</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_5\" value = \"5\" ".(@$ans["qc8_".$i.""] == "5" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_5\">無業／失業</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_6\">6</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_6\" value = \"6\" ".(@$ans["qc8_".$i.""] == "6" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_6\">料理家務者</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_7\">7</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_7\" value = \"7\" ".(@$ans["qc8_".$i.""] == "7" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_7\">學生(讀緊書)</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_8\">8</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_8\" value = \"8\" ".(@$ans["qc8_".$i.""] == "8" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_8\">退休人士</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_9\">9</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_9\" value = \"9\" ".(@$ans["qc8_".$i.""] == "9" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_9\">經濟自給者(無須為生計而工作的人)</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td><span class = \"\"><label for = \"qc8_".$i."_10\">10</label></span></td><td class = \"ano\"><input type = \"radio\" class = \"qc8_".$i."\" name = \"qc8_".$i."\" id = \"qc8_".$i."_10\" value = \"10\" ".(@$ans["qc8_".$i.""] == "10" ? "checked" : "")." ></td><td colspan = \"1\"><span class = \"\"><label for = \"qc8_".$i."_10\">其他非從事經濟活動人士</label></span></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class = \"nobor\" colspan = \"3\">&nbsp;</td>\n";
			echo "</tr>\n";
			echo "</table>\n";
		}
	?>
	
	</div>
	<br/>
	<div id = "dc9">
		<table>
			<tr>
				<td class = ""><span class = "b">&nbsp;</span></td>
			</tr>
		</table>
		<table>
			<tr>
				<td class = "qno"><span class = "b">C9.</span></td>
				<td><span class = "b">請問你哋嘅家庭主要收入來源係咩? （可選多項）[不用讀出選項，提供示咭8，供受訪者選擇]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qc9_1">1</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_1" id = "qc9_1" value = "1" <?php echo @$ans["qc9_1"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_1">工作收入/薪金</label></td>
				<td class = "qno"><label for = "qc9_8">8</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_8" id = "qc9_8" value = "1" <?php echo @$ans["qc9_8"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_8">長者生活津貼</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc9_2">2</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_2" id = "qc9_2" value = "1" <?php echo @$ans["qc9_2"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_2">花紅</label></td>
				<td class = "qno"><label for = "qc9_9">9</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_9" id = "qc9_9" value = "1" <?php echo @$ans["qc9_9"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_9">利息/股息/投資嘅收入</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc9_3">3</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_3" id = "qc9_3" value = "1" <?php echo @$ans["qc9_3"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_3">房屋津貼</label></td>
				<td class = "qno"><label for = "qc9_10">10</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_10" id = "qc9_10" value = "1" <?php echo @$ans["qc9_10"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_10">非同住家人或親友俾嘅錢(金錢饋贈)</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc9_4">4</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_4" id = "qc9_4" value = "1" <?php echo @$ans["qc9_4"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_4">退休金/長俸</label></td>
				<td class = "qno"><label for = "qc9_11">11</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_11" id = "qc9_11" value = "1" <?php echo @$ans["qc9_11"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_11">贍養費</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc9_5">5</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_5" id = "qc9_5" value = "1" <?php echo @$ans["qc9_5"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_5">綜援</label></td>
				<td class = "qno"><label for = "qc9_12">12</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_12" id = "qc9_12" value = "1" <?php echo @$ans["qc9_12"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_12">租金收入</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc9_6">6</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_6" id = "qc9_6" value = "1" <?php echo @$ans["qc9_6"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_6">傷殘津貼</label></td>
				<td class = "qno"><label for = "qc9_13">13</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_13" id = "qc9_13" value = "1" <?php echo @$ans["qc9_13"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_13">助學金 (貸款除外)</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc9_7">7</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_7" id = "qc9_7" value = "1" <?php echo @$ans["qc9_7"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_7">高齡津貼（即「生果金」)</label></td>
				<td class = "qno"><label for = "qc9_14">14</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_14" id = "qc9_14" value = "1" <?php echo @$ans["qc9_14"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_14">其他政府資助/援助 (如交通津貼、上網費津貼或書簿津貼等)</label></td>
			</tr>
			<tr>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td class = "">&nbsp;</td>
				<td class = "qno"><label for = "qc9_15">15</label></td>
				<td class = "ano"><input type = "checkbox" class = "qc9" name = "qc9_15" id = "qc9_15" value = "1" <?php echo @$ans["qc9_15"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc9_15">其他 (請註明)：</label><input type = "text" class = "qc9_15" name = "qc9_15a" id = "qc9_15a" value = "<?php echo @$ans["qc9_15a"]; ?>" disabled></td>
			</tr>
		</table>
		<br />
	</div>


	<div id = "dc10">
		<table>
			<tr>
				<td class = "qno"><span class = "b">C10.</span></td>
				<td><span class = "b">請問你哋上月嘅家庭總收入(以港幣計算)是多少？</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "">包括所有收入如工作和所有形式嘅經濟援助。</span></td>
			</tr>
			<tr>
				<td class = "qno"><span class = "b">&nbsp;</span></td>
				<td><span class = "b">[不用讀出選項，提供示咭9，供受訪者選擇]</span></td>
			</tr>
		</table>
		
		<table>
			<tr>
				<td class = "qno"><label for = "qc10_1">1</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_1" value = "1" <?php echo @$ans["qc10"] == "1"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_1">沒有收入</label></td>
				<td class = "qno"><label for = "qc10_7">7</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_7" value = "7" <?php echo @$ans["qc10"] == "7"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_7">$10,000 – $12,499</label></td>
				<td class = "qno"><label for = "qc10_13">13</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_13" value = "13" <?php echo @$ans["qc10"] == "13"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_13">$30,000 – $34,999</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc10_2">2</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_2" value = "2" <?php echo @$ans["qc10"] == "2"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_2">$2,000 以下</label></td>
				<td class = "qno"><label for = "qc10_8">8</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_8" value = "8" <?php echo @$ans["qc10"] == "8"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_8">$12,500 – $14,999</label></td>
				<td class = "qno"><label for = "qc10_14">14</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_14" value = "14" <?php echo @$ans["qc10"] == "14"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_14">$35,000 – $39,999</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc10_3">3</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_3" value = "3" <?php echo @$ans["qc10"] == "3"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_3">$2,000 – $3,999</label></td>
				<td class = "qno"><label for = "qc10_9">9</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_9" value = "9" <?php echo @$ans["qc10"] == "9"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_9">$15,000 – $17,499</label></td>
				<td class = "qno"><label for = "qc10_15">15</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_15" value = "15" <?php echo @$ans["qc10"] == "15"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_15">$40,000 或以上</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc10_4">4</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_4" value = "4" <?php echo @$ans["qc10"] == "4"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_4">$4,000 – $5,999</label></td>
				<td class = "qno"><label for = "qc10_10">10</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_10" value = "10" <?php echo @$ans["qc10"] == "10"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_10">$17,500 – $19,999</label></td>
				<td class = "qno"><label for = "qc10_16">16</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_16" value = "16" <?php echo @$ans["qc10"] == "16"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_16">拒答</label></td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc10_5">5</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_5" value = "5" <?php echo @$ans["qc10"] == "5"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_5">$6,000 – $7,999</label></td>
				<td class = "qno"><label for = "qc10_11">11</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_11" value = "11" <?php echo @$ans["qc10"] == "11"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_11">$20,000 – $24,999</label></td>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td class = "">&nbsp;</td>
			</tr>
			<tr>
				<td class = "qno"><label for = "qc10_6">6</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_6" value = "6" <?php echo @$ans["qc10"] == "6"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_6">$8,000 – $9,999</label></td>
				<td class = "qno"><label for = "qc10_12">12</label></td>
				<td class = "ano"><input type = "radio" class = "qc10" name = "qc10" id = "qc10_12" value = "12" <?php echo @$ans["qc10"] == "12"?"checked":""; ?>></td>
				<td class = ""><label for = "qc10_12">$25,000 – $29,999</label></td>
				<td class = "qno">&nbsp;</td>
				<td class = "ano">&nbsp;</td>
				<td class = "">&nbsp;</td>
			</tr>
		</table>
		<br />
	</div>
















































<br/>

</div>
	<input type="file" accept="image/*" capture="camera" id="capture2" name = "capture2"> 
	<input type = "hidden" name = "picamt" id = "picamt" value = "0" >
	<div id = "pic2">
	</div>