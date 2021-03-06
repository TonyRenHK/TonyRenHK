﻿<!----
<head>
<title>用水意見調查-非住宅用戶問卷</title>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery-1.11.1.js"></script>
	<script language="javascript" src="nondo3.js"></script> 
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
<link rel="stylesheet" type="text/css" href="nondo.css" />
</head>


<!-----Header----------------------------------------------->
<br></br>
<div id="g0" class="orgbor" ><center>
<table>
<tr><td>問卷編號﹕<input type = "text" name = "sce" id = "sc" value = "<?php echo @$sc; ?>"></td><td>訪問員編號﹕E <input type = "text" name = "eno1" id = "eno1" value = "<?php echo @$eno; ?>"></td></tr>
</table>
</center></div>
<!-------------------------------------------------------start---------------------------------------------------------------------------------------->
<div id="g0" class="orgbor"><center>
<table width="1100" >
<tr><td class = "right" >****************************************************************************************************************************************</td></tr>
<tr><td class = "right" >你好，我是<input type = "text" name = "employee" id = "employee" value = "<?php echo @$ans["employee"]; ?>">,是政策二十一的訪問員。我們現正受水務署委託進行一項有關公眾對於用水的意見調查,並以抽樣方法選出 貴公司參與，而水務署告知我們你是已註冊的非住宅用戶。我希望與 貴公司內最熟悉用水情況的人士進行訪問。整個訪問約需要15分鐘。</td></tr>
<tr><td class = "right" ><i>(訪問員指引：請問及受訪者的稱呼及職位)</i></td></tr>
<tr><td class = "right" >受訪者的稱呼：<input type = "text" name = "interviewee" id = "interviewee" value = "<?php echo @$ans["interviewee"]; ?>">職位：<input type = "text" name = "position" id = "position" value = "<?php echo @$ans["position"]; ?>"></td></tr>
<br>
<tr><td class = "right" ><strong>請放心作答，你所提供的所有資料將會嚴加保密，並只作整體統計之用，受訪者的個別身份不會被披露。</strong>所填嘅問卷，亦會喺調查研究完成後銷毀。</td></tr>

</table></center>
</div>
<br>
<!---------------------------------------------------------------question start--------------------------------------------------------------------->
<div id="g1" class="orgbor"><center>
<table width="1100" >
		<tr >
		    <td class = "right" colspan = "2"><strong>1.根據水務署的年報，國際人均用水量平均約為每日110公升，而香港目前的人均用水量平均約為每日130公升。</strong><br><strong>1a. 你認為政府應唔應該積極地宣傳節約用水？</strong></td>
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q1_1a" id = "q1_1a_1" value = "1" <?php if (@$ans["q1_1a"] == "1") { echo "checked"; } ?>><label for = "q1_1a_1" >(1)應該</label></td>
			<td class = "right"><input type = "radio" name = "q1_1a" id = "q1_1a_2" value = "2" <?php if (@$ans["q1_1a"] == "2") { echo "checked"; } ?>><label for = "q1_1a_2" >(2)不應該</label></td>
		</tr>

		<tr>
			<td class = "left bold" colspan = "2"><strong>1b. 你有使用什麼節約用水的措施嗎？</strong><br>(訪問員指引：請讀出下列<strong>所有選項</strong>，並可選擇<strong>所有</strong>適用的選項‧)</td>
		</tr>

		<tr>
			<td class = "right" colspan = "2"><input type = "checkbox" name = "q1_1b_1" id = "q1_1b_1" value = "1" <?php if (@$ans["q1_1b_1"] == "1") { echo "checked"; } ?>><label for = "q1_1b_1" >(a)在水龍頭安裝節流器</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "2"><input type = "checkbox" name = "q1_1b_2" id = "q1_1b_2" value = "1" <?php if (@$ans["q1_1b_2"] == "1") { echo "checked"; } ?>><label for = "q1_1b_2" >(b)立即修理滴漏的器具</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "2"><input type = "checkbox" name = "q1_1b_3" id = "q1_1b_3" value = "1" <?php if (@$ans["q1_1b_3"] == "1") { echo "checked"; } ?>><label for = "q1_1b_3" >(c)使用高用水效益標籤的器具</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "2"><input type = "checkbox" name = "q1_1b_4" id = "q1_1b_4" value = "1" <?php if (@$ans["q1_1b_4"] == "1") { echo "checked"; } ?>><label for = "q1_1b_4" >(d)減少用水時間</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "2"><input type = "checkbox" name = "q1_1b_5" id = "q1_1b_5" value = "1" <?php if (@$ans["q1_1b_5"] == "1") { echo "checked"; } ?>><label for = "q1_1b_5" >(e)其他，請註明：</label><input type = "text" name = "q1_1b_5a" id = "q1_1b_5a" value = "<?php echo @$ans["q1_1b_5a"]; ?>"></td>
		</tr>
		<tr>
			<td class = "right" colspan = "2"><input type = "checkbox" name = "q1_1b_6" id = "q1_1b_6" value = "1" <?php if (@$ans["q1_1b_6"] == "1") { echo "checked"; } ?>><label for = "q1_1b_6" >(f)沒有</label></td>
		</tr>
</table></center>
</div>
<br>

<div id="g2a" class="orgbor"><center>
<table width="1100" >
    <tr><td class = "left bold" colspan = "2"><strong>2.目前供水的成本每單位（即一立方米或一千公升）約港幣8元；屬於商業用途的每單位水費為$4.58，而屬於建築用途的每單位水費為$7.11。<br>2a. 你認為目前每單位水費的價錢可接受嗎？</strong></td></tr>
	<tr>
	    <td class = "right"><input type = "radio" name = "q2a" id = "q2a_1" value = "1" <?php if (@$ans["q2a"] == "1") { echo "checked"; } ?>><label for = "q2a_1" >(1)完全可接受</label></td>
	    <td class = "right"><input type = "radio" name = "q2a" id = "q2a_4" value = "4" <?php if (@$ans["q2a"] == "4") { echo "checked"; } ?>><label for = "q2a_4" >(4)完全不可接受</label></td>
	</tr>
	<tr>
		<td class = "right"><input type = "radio" name = "q2a" id = "q2a_2" value = "2" <?php if (@$ans["q2a"] == "2") { echo "checked"; } ?>><label for = "q2a_2" >(2)可接受</label></td>
		<td class = "right"><input type = "radio" name = "q2a" id = "q2a_5" value = "5" <?php if (@$ans["q2a"] == "5") { echo "checked"; } ?>><label for = "q2a_5" >(5)沒有意見</label></td>
	</tr>
	<tr>
		<td class = "right" colspan = "2"><input type = "radio" name = "q2a" id = "q2a_3" value = "3" <?php if (@$ans["q2a"] == "3") { echo "checked"; } ?>><label for = "q2a_3" >(3)不可接受</label></td>
	</tr>
	<tr><td class = "left bold" colspan = "2">若選擇 (3)不可接受 或 (4)完全不能接受，請註明原因：<input type = "text" name = "q2a_34" id = "q2a_34" value = "<?php echo @$ans["q2a_34"]; ?>"></td></tr>
	</table></center>
</div>
	
	
<div id="g2b" class="orgbor"><center>
<table width="1100">	
	<tr><td class = "left bold" colspan = "2"><strong>2b. 你認為目前每單位水費是否在一個可以負擔的水平？</strong></td></tr>
	<tr>
	    <td class = "right"><input type = "radio" name = "q2b" id = "q2b_1" value = "1" <?php if (@$ans["q2b"] == "1") { echo "checked"; } ?>><label for = "q2b_1" >(1)肯定能夠負擔</label></td>
	    <td class = "right"><input type = "radio" name = "q2b" id = "q2b_4" value = "4" <?php if (@$ans["q2b"] == "4") { echo "checked"; } ?>><label for = "q2b_4" >(4)肯定不能夠負擔</label></td>
	</tr>
	<tr>
		<td class = "right"><input type = "radio" name = "q2b" id = "q2b_2" value = "2" <?php if (@$ans["q2b"] == "2") { echo "checked"; } ?>><label for = "q2b_2" >(2)能夠負擔</label></td>
		<td class = "right"><input type = "radio" name = "q2b" id = "q2b_5" value = "5" <?php if (@$ans["q2b"] == "5") { echo "checked"; } ?>><label for = "q2b_5" >(5)沒有意見</label></td>
	</tr>
	<tr>
		<td class = "right" colspan = "2"><input type = "radio" name = "q2b" id = "q2b_3" value = "3" <?php if (@$ans["q2b"] == "3") { echo "checked"; } ?>><label for = "q2b_3" >(3)不能夠負擔</label></td>	
	</tr>
</table></center>
</div>
<br>

<div id="g3pre" class="orgbor"><center>
 <table width="1100" >
<tr><td align= "left" colspan = "15"><strong>3.請指出你對水務署服務的滿意程度。</strong><br><i>以下是以(1)至(10)來評分‧選(1)至(5)代表不滿意，選(6)至(10)分代表滿意。</i></td></tr> 
</table></center>
</div>

<div id="g3" class="orgbor"><center>
 <table width="1100" border="1">
   <tr><td>&nbsp;</td><td align="center">&nbsp;&nbsp;&nbsp;⑩&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑨&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑧&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑦&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑥&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑤&nbsp;&nbsp;&nbsp;</td><td>&nbsp;④&nbsp;&nbsp;&nbsp;</td><td>&nbsp;③&nbsp;&nbsp;&nbsp;</td><td>&nbsp;②&nbsp;&nbsp;&nbsp;</td><td>&nbsp;①&nbsp;&nbsp;&nbsp;</td><td>沒有意見</td></tr>
   <tr id="g3a" >
       <td class = "right" >a.食水水質</td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_10" value = "10" <?php if (@$ans["q3_1"] == "10") { echo "checked"; } ?>></td> 
	   <td><input type = "radio" name = "q3_1" id = "q3_1_9" value = "9" <?php if (@$ans["q3_1"] == "9") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_8" value = "8" <?php if (@$ans["q3_1"] == "8") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_7" value = "7" <?php if (@$ans["q3_1"] == "7") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_6" value = "6" <?php if (@$ans["q3_1"] == "6") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_5" value = "5" <?php if (@$ans["q3_1"] == "5") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_4" value = "4" <?php if (@$ans["q3_1"] == "4") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_3" value = "3" <?php if (@$ans["q3_1"] == "3") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_2" value = "2" <?php if (@$ans["q3_1"] == "2") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q3_1" id = "q3_1_1" value = "1" <?php if (@$ans["q3_1"] == "1") { echo "checked"; } ?>></td>
	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q3_1" id = "q3_1_0" value = "00" <?php if (@$ans["q3_1"] == "00") { echo "checked"; } ?>></td>
	</tr>
	<tr id="g3b">
	    <td class = "right" >b.食水供應的可靠度</td>
	    <td><input type = "radio" name = "q3_2" id = "q3_2_10" value = "10" <?php if (@$ans["q3_2"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_9" value = "9" <?php if (@$ans["q3_2"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_8" value = "8" <?php if (@$ans["q3_2"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_7" value = "7" <?php if (@$ans["q3_2"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_6" value = "6" <?php if (@$ans["q3_2"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_5" value = "5" <?php if (@$ans["q3_2"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_4" value = "4" <?php if (@$ans["q3_2"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_3" value = "3" <?php if (@$ans["q3_2"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_2" value = "2" <?php if (@$ans["q3_2"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_2" id = "q3_2_1" value = "1" <?php if (@$ans["q3_2"] == "1") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q3_2" id = "q3_2_0" value = "0" <?php if (@$ans["3_2"] == "00") { echo "checked"; } ?>></td>
    </tr>
	
	<tr id="g3c">
	    <td class = "right">c.對水務署的整體客戶服務的滿意程度</td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_10" value = "10" <?php if (@$ans["q3_3"] == "10") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_9" value = "9" <?php if (@$ans["q3_3"] == "9") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_8" value = "8" <?php if (@$ans["q3_3"] == "8") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_7" value = "7" <?php if (@$ans["q3_3"] == "7") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_6" value = "6" <?php if (@$ans["q3_3"] == "6") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_5" value = "5" <?php if (@$ans["q3_3"] == "5") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_4" value = "4" <?php if (@$ans["q3_3"] == "4") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_3" value = "3" <?php if (@$ans["q3_3"] == "3") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_2" value = "2" <?php if (@$ans["q3_3"] == "2") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q3_3" id = "q3_3_1" value = "1" <?php if (@$ans["q3_3"] == "1") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q3_3" id = "q6_3_0" value = "0" <?php if (@$ans["q3_3"] == "00") { echo "checked"; } ?>></td>
    </tr>
	
	<tr id="g3d" >
	    <td class = "right">d.對水務署的水費帳單及繳費安排</td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_10" value = "10" <?php if (@$ans["q3_4"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_9" value = "9" <?php if (@$ans["q3_4"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_8" value = "8" <?php if (@$ans["q3_4"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_7" value = "7" <?php if (@$ans["q3_4"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_6" value = "6" <?php if (@$ans["q3_4"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_5" value = "5" <?php if (@$ans["q3_4"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_4" value = "4" <?php if (@$ans["q3_4"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_3" value = "3" <?php if (@$ans["q3_4"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_2" value = "2" <?php if (@$ans["q3_4"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q3_4" id = "q3_4_1" value = "1" <?php if (@$ans["q3_4"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q3_4" id = "q3_4_0" value = "0" <?php if (@$ans["q3_4"] == "0") { echo "checked"; } ?>></td>
    </tr>
</table></center>
</div>
<br>

<div id="g4pre" class="orgbor"><center>
  <table width="1100"  >
<tr><td class = "left bold" colspan = "3"><strong>4.請排序以下因素的重要程度。</strong><br>以下是以(1)至(5)來排序‧選(1)代表你認為這項因素是最重要的，選(2)代表你認為這項因素是次重要的，如此類推。請給每項因素排序。</strong></td></tr>
  </table>
</div>

<div id="g4" class="orgbor"><center>
  <table width="900"  >
    
	<tr><td align = "left" >&nbsp;&nbsp;&nbsp;因素</td><td align = "left" >排序</td><td>如有需要，請註明</td></tr>
	<tr><td align = "left" >●食水水質</td><td align = "left" > <input type = "text" name = "q4_1" id = "q4_1" value = "<?php echo @$ans["q4_1"]; ?>"></td> <td><input type = "text" name = "q4_1a" id = "q4_1a" value = "<?php echo @$ans["q4_1a"]; ?>"></td></tr>
	<tr><td align = "left" >●食水供應的可靠度</td><td align = "left" > <input type = "text" name = "q4_2" id = "q4_2" value = "<?php echo @$ans["q4_2"]; ?>"></td> <td><input type = "text" name = "q4_2a" id = "q4_2a" value = "<?php echo @$ans["q4_2a"]; ?>"></td></tr>
	<tr><td align = "left" >●水費多少</td><td align = "left" ><input type = "text" name = "q4_3" id = "q4_3" value = "<?php echo @$ans["q4_3"]; ?>"></td> <td><input type = "text" name = "q4_3a" id = "q4_3a" value = "<?php echo @$ans["q4_3a"]; ?>"></td></tr>
	<tr><td align = "left" >●客戶服務水平</td><td align = "left" > <input type = "text" name = "q4_4" id = "q4_4" value = "<?php echo @$ans["q4_4"]; ?>"></td> <td><input type = "text" name = "q4_4a" id = "q4_4a" value = "<?php echo @$ans["q4_4a"]; ?>"></td></tr>
	<tr><td align = "left" >●其他，請註明：<input type = "text" name = "q4_5c" id = "q4_5c" value = "<?php echo @$ans["q4_5c"]; ?>"></td><td align = "left" > <input type = "text" name = "q4_5" id = "q4_5" value = "<?php echo @$ans["q4_5"]; ?>"></td><td><input type = "text" name = "q4_5a" id = "q4_5a" value = "<?php echo @$ans["q4_5a"]; ?>"></td></tr>	
  </table>
</div>
<br>

<div id="g5" class="orgbor"><center>
<table width="1100" >
    <tr><td class = "left bold" colspan = "2"><strong>5.根據水務署的年報，2012-2013年的赤字超過了10億元。如果政府會採取措施來減少超過10億元的赤字，<br>你認為應該以多少年的時間，把赤字減至零，從而不需要用公帑來補貼赤字差額？</strong><br>(訪問員指引：請讀出下列<strong>所有選項</strong>，並只可選擇<strong>一項</strong>最合適用的選項‧)</td></tr>
	<tr>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_a" value = "1" <?php if (@$ans["q5"] == "1") { echo "checked"; } ?>><label for = "q5_a" >(a)少於3年</label></td>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_b" value = "2" <?php if (@$ans["q5"] == "2") { echo "checked"; } ?>><label for = "q5_b" >(b)3至5年</label></td>
	 </tr>
	 <tr>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_c" value = "3" <?php if (@$ans["q5"] == "3") { echo "checked"; } ?>><label for = "q5_c" >(c)6至10年</label></td>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_d" value = "4" <?php if (@$ans["q5"] == "4") { echo "checked"; } ?>><label for = "q5_d" >(d)11至15年</label></td>
	 </tr>
	 <tr>	
	   <td class = "right" colspan = "2"><input type = "radio" name = "q5" id = "q5_e" value = "5" <?php if (@$ans["q5"] == "5") { echo "checked"; } ?>><label for = "q5_e" >(e)其他建議，請註明：</label><input type = "text" name = "q5_e" id = "q5_e1" value = "<?php echo @$ans["q5_e"]; ?>"></td>		
	</tr>
</table></center>
</div>
<br>

<div id="g6pre" class="orgbor"><center>
 <table width="1100">
<tr><td class = "left bold" colspan = "21"><strong>6.如果政府增加水費，約5%左右，你覺得這樣的增幅對貴公司的業務有什麼影響？</strong><br><i>以下是以(1)至(10)來評分‧選(1)至(5)代表不可能會出現這樣的效果，選(6)至(10)分代表可能會出現這樣的效果。</i></td></tr>
</table></center>
</div>

<div id="g6" class="orgbor"><center>
 <table width="1100" border="1" >
   <tr><td></td><td>&nbsp;⑩&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑨&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑧&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑦&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑥&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑤&nbsp;&nbsp;&nbsp;</td><td>&nbsp;④&nbsp;&nbsp;&nbsp;</td><td>&nbsp;③&nbsp;&nbsp;&nbsp;</td><td>&nbsp;②&nbsp;&nbsp;&nbsp;</td><td>&nbsp;①&nbsp;&nbsp;&nbsp;</td><td>沒有意見</td></tr>
   <tr id="g6a" >
       <td class = "right">a.我公司將會把增加的成本轉嫁給客戶</td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_10" value = "10" <?php if (@$ans["q6_1"] == "10") { echo "checked"; } ?>></td> 
	   <td><input type = "radio" name = "q6_1" id = "q6_1_9" value = "9" <?php if (@$ans["q6_1"] == "9") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_8" value = "8" <?php if (@$ans["q6_1"] == "8") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_7" value = "7" <?php if (@$ans["q6_1"] == "7") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_6" value = "6" <?php if (@$ans["q6_1"] == "6") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_5" value = "5" <?php if (@$ans["q6_1"] == "5") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_4" value = "4" <?php if (@$ans["q6_1"] == "4") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_3" value = "3" <?php if (@$ans["q6_1"] == "3") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_2" value = "2" <?php if (@$ans["q6_1"] == "2") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_1" value = "1" <?php if (@$ans["q6_1"] == "1") { echo "checked"; } ?>></td>
	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_1" id = "q6_1_0" value = "0" <?php if (@$ans["q6_1"] == "0") { echo "checked"; } ?>><label for = "q6_1_0" > </label></td>
	</tr>
	<tr id="g6b" >
	    <td class = "right">b.我公司將會削減對客戶的服務</td>
	    <td><input type = "radio" name = "q6_2" id = "q6_2_10" value = "10" <?php if (@$ans["q6_2"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_9" value = "9" <?php if (@$ans["q6_2"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_8" value = "8" <?php if (@$ans["q6_2"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_7" value = "7" <?php if (@$ans["q6_2"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_6" value = "6" <?php if (@$ans["q6_2"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_5" value = "5" <?php if (@$ans["q6_2"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_4" value = "4" <?php if (@$ans["q6_2"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_3" value = "3" <?php if (@$ans["q6_2"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_2" value = "2" <?php if (@$ans["q6_2"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_1" value = "1" <?php if (@$ans["q6_2"] == "1") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_2" id = "q6_2_0" value = "0" <?php if (@$ans["6_2"] == "0") { echo "checked"; } ?>><label for = "q6_2_0" > </label></td>
    </tr>
	
	<tr id="g6c" >
	    <td class = "right">c.我公司將會減少員工人數</td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_10" value = "10" <?php if (@$ans["q6_3"] == "10") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_9" value = "9" <?php if (@$ans["q6_3"] == "9") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_8" value = "8" <?php if (@$ans["q6_3"] == "8") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_7" value = "7" <?php if (@$ans["q6_3"] == "7") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_6" value = "6" <?php if (@$ans["q6_3"] == "6") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_5" value = "5" <?php if (@$ans["q6_3"] == "5") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_4" value = "4" <?php if (@$ans["q6_3"] == "4") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_3" value = "3" <?php if (@$ans["q6_3"] == "3") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_2" value = "2" <?php if (@$ans["q6_3"] == "2") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_1" value = "1" <?php if (@$ans["q6_3"] == "1") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_3" id = "q6_3_0" value = "0" <?php if (@$ans["q6_3"] == "0") { echo "checked"; } ?>><label for = "q6_3_0" > </label></td>
    </tr>
	
	<tr id="g6d" >
	    <td class = "right">d.我公司將會推出更多節水措施</td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_10" value = "10" <?php if (@$ans["q6_4"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_9" value = "9" <?php if (@$ans["q6_4"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_8" value = "8" <?php if (@$ans["q6_4"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_7" value = "7" <?php if (@$ans["q6_4"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_6" value = "6" <?php if (@$ans["q6_4"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_5" value = "5" <?php if (@$ans["q6_4"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_4" value = "4" <?php if (@$ans["q6_4"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_3" value = "3" <?php if (@$ans["q6_4"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_2" value = "2" <?php if (@$ans["q6_4"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_1" value = "1" <?php if (@$ans["q6_4"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_4" id = "q3_4_0" value = "0" <?php if (@$ans["q6_4"] == "0") { echo "checked"; } ?>><label for = "q6_4_0" > </label></td>
    </tr>

	<tr id="g6e" >
	    <td class = "right">e.我公司將會減少投資</td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_10" value = "10" <?php if (@$ans["q6_5"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_9" value = "9" <?php if (@$ans["q6_5"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_8" value = "8" <?php if (@$ans["q6_5"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_7" value = "7" <?php if (@$ans["q6_5"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_6" value = "6" <?php if (@$ans["q6_5"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_5" value = "5" <?php if (@$ans["q6_5"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_4" value = "4" <?php if (@$ans["q6_5"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_3" value = "3" <?php if (@$ans["q6_5"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_2" value = "2" <?php if (@$ans["q6_5"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_5" id = "q6_5_1" value = "1" <?php if (@$ans["q6_5"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_5" id = "q6_5_0" value = "0" <?php if (@$ans["q6_5"] == "0") { echo "checked"; } ?>><label for = "q6_5_0" > </label></td>
    </tr>

	<tr id="g6f" >
	    <td class = "right">f.我公司將會結束業務</td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_10" value = "10" <?php if (@$ans["q6_6"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_9" value = "9" <?php if (@$ans["q6_6"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_8" value = "8" <?php if (@$ans["q6_6"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_7" value = "7" <?php if (@$ans["q6_6"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_6" value = "6" <?php if (@$ans["q6_6"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_5" value = "5" <?php if (@$ans["q6_6"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_4" value = "4" <?php if (@$ans["q6_6"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_3" value = "3" <?php if (@$ans["q6_6"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_2" value = "2" <?php if (@$ans["q6_6"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_6" id = "q6_6_1" value = "1" <?php if (@$ans["q6_6"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_6" id = "q6_6_0" value = "0" <?php if (@$ans["q6_6"] == "0") { echo "checked"; } ?>><label for = "q6_6_0" > </label></td>
    </tr>
		
	<tr>
	    <td class = "right">g.其他，請註明：<input type = "text" name = "q6_7a" id = "q6_7a" value = "<?php echo @$ans["q6_7a"]; ?>"></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_10" value = "10" <?php if (@$ans["q6_7"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_9" value = "9" <?php if (@$ans["q6_7"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_8" value = "8" <?php if (@$ans["q6_7"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_7" value = "7" <?php if (@$ans["q6_7"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_6" value = "6" <?php if (@$ans["q6_7"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_5" value = "5" <?php if (@$ans["q6_7"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_4" value = "4" <?php if (@$ans["q6_7"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_3" value = "3" <?php if (@$ans["q6_7"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_2" value = "2" <?php if (@$ans["q6_7"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_7" id = "q6_7_1" value = "1" <?php if (@$ans["q6_7"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_7" id = "q6_7_0" value = "0" <?php if (@$ans["q6_7"] == "0") { echo "checked"; } ?>><label for = "q6_7_0" > </label></td>
    </tr>
	
</table></center>
</div>
<br>

<div id="g7pre" class="orgbor"><center>
 <table width="1100">
<tr><td class = "left bold" colspan = "21"><strong>7.如果政府增加水費，約10%左右，你覺得這樣的增幅對 貴公司的業務有什麼影響？</strong><br><i>以下是以(1)至(10)來評分‧選(1)至(5)代表不可能會出現這樣的效果，選(6)至(10)分代表可能會出現這樣的效果。</i></td></tr> 
</table></center>
</div>


<div id="g7" class="orgbor"><center>
 <table width="1100" border="1" >
   
   <tr><td></td><td>&nbsp;⑩&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑨&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑧&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑦&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑥&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑤&nbsp;&nbsp;&nbsp;</td><td>&nbsp;④&nbsp;&nbsp;&nbsp;</td><td>&nbsp;③&nbsp;&nbsp;&nbsp;</td><td>&nbsp;②&nbsp;&nbsp;&nbsp;</td><td>&nbsp;①&nbsp;&nbsp;&nbsp;</td><td>沒有意見</td></tr>
   <tr id="g7a" >
       <td class = "right">a.我公司將會把增加的成本轉嫁給客戶</td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_10" value = "10" <?php if (@$ans["q7_1"] == "10") { echo "checked"; } ?>></td> 
	   <td><input type = "radio" name = "q7_1" id = "q7_1_9" value = "9" <?php if (@$ans["q7_1"] == "9") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_8" value = "8" <?php if (@$ans["q7_1"] == "8") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_7" value = "7" <?php if (@$ans["q7_1"] == "7") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_6" value = "6" <?php if (@$ans["q7_1"] == "6") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_5" value = "5" <?php if (@$ans["q7_1"] == "5") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_4" value = "4" <?php if (@$ans["q7_1"] == "4") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_3" value = "3" <?php if (@$ans["q7_1"] == "3") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_2" value = "2" <?php if (@$ans["q7_1"] == "2") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q7_1" id = "q7_1_1" value = "1" <?php if (@$ans["q7_1"] == "1") { echo "checked"; } ?>></td>
	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_1" id = "q7_1_0" value = "0" <?php if (@$ans["q7_1"] == "0") { echo "checked"; } ?>></td>
	</tr>
	<tr id="g7b" >
	    <td class = "right">b.我公司將會削減對客戶的服務</td>
	    <td><input type = "radio" name = "q7_2" id = "q7_2_10" value = "10" <?php if (@$ans["q7_2"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_9" value = "9" <?php if (@$ans["q7_2"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_8" value = "8" <?php if (@$ans["q7_2"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_7" value = "7" <?php if (@$ans["q7_2"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_6" value = "6" <?php if (@$ans["q7_2"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_5" value = "5" <?php if (@$ans["q7_2"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_4" value = "4" <?php if (@$ans["q7_2"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_3" value = "3" <?php if (@$ans["q7_2"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_2" value = "2" <?php if (@$ans["q7_2"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_2" id = "q7_2_1" value = "1" <?php if (@$ans["q7_2"] == "1") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_2" id = "q7_2_0" value = "0" <?php if (@$ans["7_2"] == "0") { echo "checked"; } ?>></td>
    </tr>
	
	<tr id="g7c">
	    <td class = "right">c.我公司將會減少員工人數</td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_10" value = "10" <?php if (@$ans["q7_3"] == "10") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_9" value = "9" <?php if (@$ans["q7_3"] == "9") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_8" value = "8" <?php if (@$ans["q7_3"] == "8") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_7" value = "7" <?php if (@$ans["q7_3"] == "7") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_6" value = "6" <?php if (@$ans["q7_3"] == "6") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_5" value = "5" <?php if (@$ans["q7_3"] == "5") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_4" value = "4" <?php if (@$ans["q7_3"] == "4") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_3" value = "3" <?php if (@$ans["q7_3"] == "3") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_2" value = "2" <?php if (@$ans["q7_3"] == "2") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q7_3" id = "q7_3_1" value = "1" <?php if (@$ans["q7_3"] == "1") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_3" id = "q7_3_0" value = "0" <?php if (@$ans["q7_3"] == "0") { echo "checked"; } ?>></td>
    </tr>
	
	<tr id="g7d" >
	    <td class = "right">d.我公司將會推出更多節水措施</td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_10" value = "10" <?php if (@$ans["q7_4"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_9" value = "9" <?php if (@$ans["q7_4"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_8" value = "8" <?php if (@$ans["q7_4"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_7" value = "7" <?php if (@$ans["q7_4"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_6" value = "6" <?php if (@$ans["q7_4"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_5" value = "5" <?php if (@$ans["q7_4"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_4" value = "4" <?php if (@$ans["q7_4"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_3" value = "3" <?php if (@$ans["q7_4"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_2" value = "2" <?php if (@$ans["q7_4"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_4" id = "q7_4_1" value = "1" <?php if (@$ans["q7_4"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_4" id = "q7_4_0" value = "0" <?php if (@$ans["q7_4"] == "0") { echo "checked"; } ?>></td>
    </tr>

	<tr id="g7e">
	    <td class = "right">e.我公司將會減少投資</td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_10" value = "10" <?php if (@$ans["q7_5"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_9" value = "9" <?php if (@$ans["q7_5"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_8" value = "8" <?php if (@$ans["q7_5"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_7" value = "7" <?php if (@$ans["q7_5"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_6" value = "6" <?php if (@$ans["q7_5"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_5" value = "5" <?php if (@$ans["q7_5"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_4" value = "4" <?php if (@$ans["q7_5"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_3" value = "3" <?php if (@$ans["q7_5"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_2" value = "2" <?php if (@$ans["q7_5"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_5" id = "q7_5_1" value = "1" <?php if (@$ans["q7_5"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_5" id = "q7_5_0" value = "0" <?php if (@$ans["q7_5"] == "0") { echo "checked"; } ?>></td>
    </tr>

	<tr id="g7f">
	    <td class = "right">f.我公司將會結束業務</td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_10" value = "10" <?php if (@$ans["q7_6"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_9" value = "9" <?php if (@$ans["q7_6"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_8" value = "8" <?php if (@$ans["q7_6"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_7" value = "7" <?php if (@$ans["q7_6"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_6" value = "6" <?php if (@$ans["q7_6"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_5" value = "5" <?php if (@$ans["q7_6"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_4" value = "4" <?php if (@$ans["q7_6"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_3" value = "3" <?php if (@$ans["q7_6"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_2" value = "2" <?php if (@$ans["q7_6"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_6" id = "q7_6_1" value = "1" <?php if (@$ans["q7_6"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_6" id = "q7_6_0" value = "0" <?php if (@$ans["q7_6"] == "0") { echo "checked"; } ?>></td>
    </tr>
		
	<tr>
	    <td class = "right">g.其他，請註明：<input type = "text" name = "q7_7a" id = "q7_7a" value = "<?php echo @$ans["q7_7a"]; ?>"></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_10" value = "10" <?php if (@$ans["q7_7"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_9" value = "9" <?php if (@$ans["q7_7"] == "9") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_8" value = "8" <?php if (@$ans["q7_7"] == "8") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_7" value = "7" <?php if (@$ans["q7_7"] == "7") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_6" value = "6" <?php if (@$ans["q7_7"] == "6") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_5" value = "5" <?php if (@$ans["q7_7"] == "5") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_4" value = "4" <?php if (@$ans["q7_7"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_3" value = "3" <?php if (@$ans["q7_7"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_2" value = "2" <?php if (@$ans["q7_7"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q7_7" id = "q7_7_1" value = "1" <?php if (@$ans["q7_7"] == "1") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q7_7" id = "q7_7_0" value = "0" <?php if (@$ans["q7_7"] == "0") { echo "checked"; } ?>></td>
    </tr>
	
</table></center>
</div>
<br>

<div id="g8" class="orgbor"><center>
<table width="1100" >
     <tr><td class = "left bold" colspan = "4"><strong>8.	請問 貴公司水費的金額所佔總經營費用的比例是多少?</strong></td></tr>
	 <tr><td class = "right" >(1)</td><td class = "right" colspan = "3"><input type = "radio" name = "q8" id = "q8_1" value = "1" <?php if (@$ans["q8"] == "1") { echo "checked"; } ?>><label for = "q8_1" >可以，比例是</label><input type = "text" name = "q8_a" id = "q8_a" value = "<?php echo @$ans["q8_a"]; ?>">%</td></tr>
	 <tr><td class = "right" >(2)</td><td class = "right" colspan = "3"><input type = "radio" name = "q8" id = "q8_2" value = "2" <?php if (@$ans["q8"] == "2") { echo "checked"; } ?>><label for = "q8_2" >如果不太清楚，能否在下列範圍選出比例嗎？</label></td></tr>
	 <tr class="cg8_2"><td></td>
	     <td class = "right" colspan = "3">
		     (a)<input type = "radio" name = "q8_2" id = "q8_2_1" value = "1" <?php if (@$ans["q8_2"] == "1") { echo "checked"; } ?>><label for = "q8_2_1" >低於0.05%</label><br>
			 (b)<input type = "radio" name = "q8_2" id = "q8_2_2" value = "2" <?php if (@$ans["q8_2"] == "2") { echo "checked"; } ?>><label for = "q8_2_2" > 0.05 - 0.09%</label><br>
			 (c)<input type = "radio" name = "q8_2" id = "q8_2_3" value = "3" <?php if (@$ans["q8_2"] == "3") { echo "checked"; } ?>><label for = "q8_2_3" >0.1% - 0.5%</label><br>
			 (d)<input type = "radio" name = "q8_2" id = "q8_2_4" value = "4" <?php if (@$ans["q8_2"] == "4") { echo "checked"; } ?>><label for = "q8_2_4" >0.6% - 1%</label><br>
			 (e)<input type = "radio" name = "q8_2" id = "q8_2_5" value = "5" <?php if (@$ans["q8_2"] == "5") { echo "checked"; } ?>><label for = "q8_2_5" >1.1 - 2%</label><br>
			 (f)<input type = "radio" name = "q8_2" id = "q8_2_6" value = "6" <?php if (@$ans["q8_2"] == "6") { echo "checked"; } ?>><label for = "q8_2_6" >2.1% - 3%</label><br>
			 (g)<input type = "radio" name = "q8_2" id = "q8_2_7" value = "7" <?php if (@$ans["q8_2"] == "7") { echo "checked"; } ?>><label for = "q8_2_7" >3.1% - 4%</label><br>
			 (h)<input type = "radio" name = "q8_2" id = "q8_2_8" value = "8" <?php if (@$ans["q8_2"] == "8") { echo "checked"; } ?>><label for = "q8_2_8" >4.1% - 5%</label><br>
			 (i)<input type = "radio" name = "q8_2" id = "q8_2_9" value = "9" <?php if (@$ans["q8_2"] == "9") { echo "checked"; } ?>><label for = "q8_2_9" >大於5%</label>
	     </td>
	 </tr>
	 <tr><td class = "right" >(3)</td><td class = "right" colspan = "3" ><input type = "radio" name = "q8" id = "q8_3" value = "3" <?php if (@$ans["q8"] == "3") { echo "checked"; } ?>><label for = "q8_3" >不能提供/ 拒絕回答。</label></td></tr>
</table></center>
</div>
<br>

<div id="g9" class="orgbor" ><center>
<table width="1100">
     <tr><td class = "left bold" colspan = "4"><strong>9.	請問 貴公司員工的人數是多少？</strong></td></tr>
	 <tr><td>(1)</td><td class = "right" colspan = "3"><input type = "radio" name = "q9" id = "q9_1" value = "1" <?php if (@$ans["q9"] == "1") { echo "checked"; } ?>><label for = "q9_1" >可以，員工人數是:</label><input type = "text" name = "q9_1a" id = "q9_1a" value = "<?php echo @$ans["q9_1a"]; ?>"><label for = "q9_1a" >(全職員工) 及</label><input type = "text" name = "q9_1b" id = "q9_1b" value = "<?php echo @$ans["q9_1b"]; ?>">(兼職員工)</td></tr>
	 <tr><td>(2)</td><td class = "right" colspan = "3"><input type = "radio" name = "q9" id = "q9_2" value = "2" <?php if (@$ans["q9"] == "2") { echo "checked"; } ?>><label for = "q9_2" >如果不太清楚，能否在下列範圍選出員工人數嗎 (以相近全職員工人數計算)？</label></td></tr>
	 <tr class="cg9_2"><td></td>
	     <td  class = "right" colspan = "3">
		     <p>(a)<input type = "radio" name = "q9_2" id = "q9_2_1" value = "1" <?php if (@$ans["q9_2"] == "1") { echo "checked"; } ?>><label for = "q9_2_1" >1 - 9 位</label>
			 <br>(b)<input type = "radio" name = "q9_2" id = "q9_2_2" value = "2" <?php if (@$ans["q9_2"] == "2") { echo "checked"; } ?>><label for = "q9_2_2" >10 - 19位</label>
			 <br>(c)<input type = "radio" name = "q9_2" id = "q9_2_3" value = "3" <?php if (@$ans["q9_2"] == "3") { echo "checked"; } ?>><label for = "q9_2_3" >20 - 29位</label>
			 <br>(d)<input type = "radio" name = "q9_2" id = "q9_2_4" value = "4" <?php if (@$ans["q9_2"] == "4") { echo "checked"; } ?>><label for = "q9_2_4" >30 - 39位</label>
			 <br>(e)<input type = "radio" name = "q9_2" id = "q9_2_5" value = "5" <?php if (@$ans["q9_2"] == "5") { echo "checked"; } ?>><label for = "q9_2_5" >40 - 49位</label>
			 <br>(f)<input type = "radio" name = "q9_2" id = "q9_2_6" value = "6" <?php if (@$ans["q9_2"] == "6") { echo "checked"; } ?>><label for = "q9_2_6" >50 - 99位</label>
			 <br>(g)<input type = "radio" name = "q9_2" id = "q9_2_7" value = "7" <?php if (@$ans["q9_2"] == "7") { echo "checked"; } ?>><label for = "q9_2_7" >100 - 149位</label>
			 <br>(h)<input type = "radio" name = "q9_2" id = "q9_2_8" value = "8" <?php if (@$ans["q9_2"] == "8") { echo "checked"; } ?>><label for = "q9_2_8" >150 - 199位</label>
			 <br>(i)<input type = "radio" name = "q9_2" id = "q9_2_9" value = "9" <?php if (@$ans["q9_2"] == "9") { echo "checked"; } ?>><label for = "q9_2_9" >200位 或以上</label>
	     </td>
	 </tr>
	 <tr><td>(3)</td><td class = "right" colspan = "3" ><input type = "radio" name = "q9" id = "q9_3" value = "3" <?php if (@$ans["q9"] == "3") { echo "checked"; } ?>><label for = "q9_3" >不能提供/ 拒絕回答。</label></td></tr>
</table></center>
</div>



<br>
</br>
<br>
</br>
<p><strong><center>問卷完，謝謝!!</center></strong></p>
