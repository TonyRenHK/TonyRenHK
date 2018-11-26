<!-----------
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery-1.11.1.js"></script>
	<script language="javascript" src="water.js"></script> 
	<link rel="stylesheet" href="jquery-ui-1.10.4.custom.css">
	<script src="jquery-ui-1.10.4.custom.js"></script>
<link rel="stylesheet" type="text/css" href="dome.css" />






<!---------------------------------------Header---------------------------------------------------------------->
<br></br>

<h1><center><strong>用水意見調查-住宅用戶問卷</strong></center></h1>

<div id="g0" class="orgbor">
<center><table>
<tr><td>問卷編號﹕<input type = "text" name = "questionnaire" id = "questionnaire" value = "<?php echo @$ans["questionnaire"]; ?>"></td><td>訪問員編號﹕E <input type = "text" name = "stuff_num" id = "stuff_num" value = "<?php echo @$ans["stuff_num"]; ?>"></td></tr>

</table>
</center></div>
<!-------------------------------------------------------start---------------------------------------------------------------------------------------->
<div id="g0" class="orgbor"><center>
<table width="1100">
<tr><td class = "right" >****************************************************************************************************************************************</td></tr>
<tr><td class = "right" >你好，我是<input type = "text" name = "employee" id = "employee" value = "<?php echo @$ans["employee"]; ?>">,是政策二十一的訪問員。我們現正受水務署委託進行一項有關公眾對於用水的意見調查。我希望與 貴住戶內最熟悉用水情況的成員進行訪問。整個訪問約需要15分鐘。</td></tr>
<tr><td class = "right" >(訪問員指引：如註冊用戶未能回答問卷 或 如由其他家庭成員回答問卷，請問及受訪者的稱呼及與戶主關係。受訪者必須為18歲或以上家庭成員。)</td></tr>
<tr><td class = "right" >受訪者的稱呼：<input type = "text" name = "interviewee" id = "interviewee" value = "<?php echo @$ans["interviewee"]; ?>">與戶主關係：<input type = "text" name = "relation" id = "relation" value = "<?php echo @$ans["relation"]; ?>"></td></tr>
<br>
<tr><td class = "right" ><strong>請放心作答，你所提供的所有資料將會嚴加保密，並只作整體研究之用，受訪者的個別身份不會被披露。</strong></td></tr>
</table></center>
</div>
<!---------------------------------------------------------------question start--------------------------------------------------------------------->
<div id="g1" class="orgbor">
<p></p><center>
<table width="1100" border="1" >
		<tr >
		    <td class = "right" colspan = "3"><strong>1.根據水務署的年報，國際人均用水量平均約為每日110公升，而香港目前的人均用水量平均約為每日130公升。</strong><br><strong>1a. 你認為政府應該積極地宣傳節約用水？</strong></td>
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q1_1a" id = "q1_1a_1" value = "01" <?php if (@$ans["q1_1a"] == "01") { echo "checked"; } ?>><label for = "q1_1a_1" >(1)同意</label></td>
			<td class = "right"><input type = "radio" name = "q1_1a" id = "q1_1a_2" value = "02" <?php if (@$ans["q1_1a"] == "02") { echo "checked"; } ?>><label for = "q1_1a_2" >(2)不同意</label></td>
		</tr>

		<tr>
			<td class = "left bold" colspan = "3"><strong>1b. 你有使用什麼節約用水的措施嗎？</strong><br>(訪問員指引：請讀出下列所有選項，並可選擇所有適用的選項‧)</td>
		</tr>

		<tr>
			<td class = "right" colspan = "3"><input type = "checkbox" name = "q1_1b_1" id = "q1_1b_1" value = "1" <?php if (@$ans["q1_1b_1"] == "1") { echo "checked"; } ?>><label for = "q1_1b_1" >(a)在水龍頭安裝節流器</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "3"><input type = "checkbox" name = "q1_1b_2" id = "q1_1b_2" value = "1" <?php if (@$ans["q1_1b_2"] == "1") { echo "checked"; } ?>><label for = "q1_1b_2" >(b)立即修理滴漏的器具</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "3"><input type = "checkbox" name = "q1_1b_3" id = "q1_1b_3" value = "1" <?php if (@$ans["q1_1b_3"] == "1") { echo "checked"; } ?>><label for = "q1_1b_3" >(c)使用高用水效益標籤的器具</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "3"><input type = "checkbox" name = "q1_1b_4" id = "q1_1b_4" value = "1" <?php if (@$ans["q1_1b_4"] == "1") { echo "checked"; } ?>><label for = "q1_1b_4" >(d)減少用水時間</label></td>
		</tr>
		<tr>
			<td class = "right" colspan = "3"><input type = "checkbox" name = "q1_1b_5" id = "q1_1b_5" value = "1" <?php if (@$ans["q1_1b_5"] == "1") { echo "checked"; } ?>><label for = "q1_1b_5" >(e)其他，請註明：</label><input type = "text" name = "q1_1b_5a" id = "q1_1b_5a" value = "<?php echo @$ans["q1_1b_5a"]; ?>"></td>
		</tr>
		<tr>
			<td class = "right" colspan = "3"><input type = "checkbox" name = "q1_1b_6" id = "q1_1b_6" value = "1" <?php if (@$ans["q1_1b_6"] == "1") { echo "checked"; } ?>><label for = "q1_1b_6" >(f)沒有</label></td>
		</tr>
</table>
</div>


<br>
<div id="g2" class="orgbor">
	<center>
	<table width="1100" border="1">
		<tr>
			<td class = "left bold" colspan = "3"><strong>2.你認為你的家庭每期(以四個月計)水費為多少才算可接受？請注意：水務署每四個月(為一期)收費一次。</strong></td>
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q2" id = "q2_1" value = "01" <?php if (@$ans["q2"] == "01") { echo "checked"; } ?>><label for = "q2_1" >(1)</label><input type = "text" name = "q2_1a" id = "q2_1a" value = "<?php echo @$ans["q2_1a"]; ?>">元</td>
			<td class = "right"><input type = "radio" name = "q2" id = "q2_2" value = "02" <?php if (@$ans["q2"] == "02") { echo "checked"; } ?>><label for = "q2_2" >(2)不能提供/ 拒絕回答</label></td>
		</tr>
	</table>
	</center>
</div>
<br>

<div id="g3" class="orgbor"><center>
	<table width="1100" border="1">
		<tr>
			<td class = "left bold" colspan = "4"><strong>3.你認為你的家庭每期(以每四個月計)可負擔多少水費？請注意：水務署每四個月(為一期)收費一次。</strong></td>
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q3" id = "q3_1" value = "01" <?php if (@$ans["q3"] == "01") { echo "checked"; } ?>><label for = "q3_1" >(1)</label><input type = "text" name = "q3_1a" id = "q3_1a" value = "<?php echo @$ans["q3_1a"]; ?>">元</td>
			<td class = "right"><input type = "radio" name = "q3" id = "q3_2" value = "02" <?php if (@$ans["q3"] == "02") { echo "checked"; } ?>><label for = "q3_2" >(2)不能提供/ 拒絕回答</label></td>
		</tr>
	</table></center>
</div>
<br>

<div id="g4" class="orgbor">
   <center>
      <table width="1100" border="1">
		<tr>
			<td class = "left bold" colspan = "3"><strong>4.根據水務署的年報，於2012至2013年度每月平均水費為約相等於住戶每月平均開支的0.3%。<br>4a.你認為你的家庭每月水費佔總支出多少百分比，才算可接受？</strong></td>
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q4_a" id = "q4_a_1" value = "01" <?php if (@$ans["q4_a"] == "01") { echo "checked"; } ?>><label for = "q4_a_1" >(1)</label><input type = "text" name = "q4_a_1a" id = "q4_a_1a" value = "<?php echo @$ans["q4_a_1a"]; ?>">%</td>
			<td class = "right"><input type = "radio" name = "q4_a" id = "q4_a_2" value = "02" <?php if (@$ans["q4_a"] == "02") { echo "checked"; } ?>><label for = "q4_a_2" >(2)不能提供/ 拒絕回答</label></td>
		</tr>
		
		<tr>
			<td class = "left bold" colspan = "3"><strong>4b. 你認為你的家庭每月水費佔總支出多少百分比，才算是可以負擔的水平？</strong></td>			
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q4_b" id = "q4_b_1" value = "01" <?php if (@$ans["q4_b"] == "01") { echo "checked"; } ?>><label for = "q4_b_1" >(1)</label><input type = "text" name = "q4_b_1a" id = "q4_b_1a" value = "<?php echo @$ans["q4_b_1a"]; ?>">%</td>
			<td class = "right"><input type = "radio" name = "q4_b" id = "q4_b_2" value = "02" <?php if (@$ans["q4_b"] == "02") { echo "checked"; } ?>><label for = "q4_b_2" >(2)不能提供/ 拒絕回答</label></td>
		</tr>
	   </table>
	</center>
</div>

<br>

<div id="g5" class="orgbor">
<center><table width="1100" border="1">
    <tr><td class = "left bold" colspan = "3"><strong>5.根據水務署的年報，2012-2013年的赤字超過了10億元。如果政府會採取行動來減少超過10億元的赤字，<br>你認為應該以多少年的時間，把赤字減至零，使政府不需要使用納稅人的公帑來補貼赤字差額？</strong><br>(訪問員指引：請讀出下列<strong>所有選項</strong>，並只可選擇一項最合適用的選項‧)</td></tr>
	<tr>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_a" value = "01" <?php if (@$ans["q5"] == "01") { echo "checked"; } ?>><label for = "q5_a" >(a)少於3年</label></td>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_b" value = "02" <?php if (@$ans["q5"] == "02") { echo "checked"; } ?>><label for = "q5_b" >(b)3至5年</label></td>
	 </tr>
	 <tr>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_c" value = "03" <?php if (@$ans["q5"] == "03") { echo "checked"; } ?>><label for = "q5_c" >(c)6至10年</label></td>
	   <td class = "right"><input type = "radio" name = "q5" id = "q5_d" value = "04" <?php if (@$ans["q5"] == "04") { echo "checked"; } ?>><label for = "q5_d" >(d)11至15年</label></td>
	 </tr>
	 <tr>	
	   <td class = "right" colspan = "3"><input type = "radio" name = "q5" id = "q5_e" value = "05" <?php if (@$ans["q5"] == "05") { echo "checked"; } ?>><label for = "q5_e" >(e)其他建議，請註明：</label><input type = "text" name = "q5_e" id = "q5_e" value = "<?php echo @$ans["q5_e"]; ?>"></td>		
	</tr>
</table></center>
</div>
<br>

<div id="g6" class="orgbor">
<center>
 <table width="1100" border="1">
   <tr><td class = "left bold" colspan = "21"><strong>6.請指出你對水務署服務的滿意程度。</strong><br><i>以下是以(1)至(10)來評分‧選(1)至(5)代表不滿意，選(6)至(10)分代表滿意。</i></td></tr> 
   <tr><td></td><td>&nbsp;⑩&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑨&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑧&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑦&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑥&nbsp;&nbsp;&nbsp;</td><td>&nbsp;⑤&nbsp;&nbsp;&nbsp;</td><td>&nbsp;④&nbsp;&nbsp;&nbsp;</td><td>&nbsp;③&nbsp;&nbsp;&nbsp;</td><td>&nbsp;②&nbsp;&nbsp;&nbsp;</td><td>&nbsp;①&nbsp;&nbsp;&nbsp;</td><td>沒有意見</td></tr>
   <tr>
       <td class = "right">a.食水水質</td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_10" value = "10" <?php if (@$ans["q6_1"] == "10") { echo "checked"; } ?>></td> 
	   <td><input type = "radio" name = "q6_1" id = "q6_1_9" value = "09" <?php if (@$ans["q6_1"] == "09") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_8" value = "08" <?php if (@$ans["q6_1"] == "08") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_7" value = "07" <?php if (@$ans["q6_1"] == "07") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_6" value = "06" <?php if (@$ans["q6_1"] == "06") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_5" value = "05" <?php if (@$ans["q6_1"] == "05") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_4" value = "04" <?php if (@$ans["q6_1"] == "04") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_3" value = "03" <?php if (@$ans["q6_1"] == "03") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_2" value = "02" <?php if (@$ans["q6_1"] == "02") { echo "checked"; } ?>></td>
	   <td><input type = "radio" name = "q6_1" id = "q6_1_1" value = "01" <?php if (@$ans["q6_1"] == "01") { echo "checked"; } ?>></td>
	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_1" id = "q6_1_0" value = "00" <?php if (@$ans["q6_1"] == "00") { echo "checked"; } ?>><label for = "q6_1_0" > </label></td>
	</tr>
	<tr>
	    <td class = "right">b.食水供應的可靠度</td>
	    <td><input type = "radio" name = "q6_2" id = "q6_2_10" value = "10" <?php if (@$ans["q6_2"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_9" value = "09" <?php if (@$ans["q6_2"] == "09") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_8" value = "08" <?php if (@$ans["q6_2"] == "08") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_7" value = "07" <?php if (@$ans["q6_2"] == "07") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_6" value = "06" <?php if (@$ans["q6_2"] == "06") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_5" value = "05" <?php if (@$ans["q6_2"] == "05") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_4" value = "04" <?php if (@$ans["q6_2"] == "04") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_3" value = "03" <?php if (@$ans["q6_2"] == "03") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_2" value = "02" <?php if (@$ans["q6_2"] == "02") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_2" id = "q6_2_1" value = "01" <?php if (@$ans["q6_2"] == "01") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_2" id = "q6_2_0" value = "00" <?php if (@$ans["6_2"] == "00") { echo "checked"; } ?>><label for = "q6_2_0" > </label></td>
    </tr>
	
	<tr>
	    <td class = "right">c.對水務署的整體客戶滿意程度</td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_10" value = "10" <?php if (@$ans["q6_3"] == "10") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_9" value = "09" <?php if (@$ans["q6_3"] == "09") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_8" value = "08" <?php if (@$ans["q6_3"] == "08") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_7" value = "07" <?php if (@$ans["q6_3"] == "07") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_6" value = "06" <?php if (@$ans["q6_3"] == "06") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_5" value = "05" <?php if (@$ans["q6_3"] == "05") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_4" value = "04" <?php if (@$ans["q6_3"] == "04") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_3" value = "03" <?php if (@$ans["q6_3"] == "03") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_2" value = "02" <?php if (@$ans["q6_3"] == "02") { echo "checked"; } ?>></td>
	    <td><input type = "radio" name = "q6_3" id = "q6_3_1" value = "01" <?php if (@$ans["q6_3"] == "01") { echo "checked"; } ?>></td>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_3" id = "q6_3_0" value = "00" <?php if (@$ans["q6_3"] == "00") { echo "checked"; } ?>><label for = "q6_3_0" > </label></td>
    </tr>
	
	<tr>
	    <td class = "right">d.水費帳單及繳費安排</td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_10" value = "10" <?php if (@$ans["q6_4"] == "10") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_9" value = "09" <?php if (@$ans["q6_4"] == "09") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_8" value = "08" <?php if (@$ans["q6_4"] == "08") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_7" value = "07" <?php if (@$ans["q6_4"] == "07") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_6" value = "06" <?php if (@$ans["q6_4"] == "06") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_5" value = "05" <?php if (@$ans["q6_4"] == "05") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_4" value = "04" <?php if (@$ans["q6_4"] == "04") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_3" value = "03" <?php if (@$ans["q6_4"] == "03") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_2" value = "02" <?php if (@$ans["q6_4"] == "02") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q6_4" id = "q6_4_1" value = "01" <?php if (@$ans["q6_4"] == "01") { echo "checked"; } ?>></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "q6_4" id = "q6_4_0" value = "00" <?php if (@$ans["q6_4"] == "00") { echo "checked"; } ?>><label for = "q6_4_0" > </label></td>
    </tr>

</table>
</center>
</div>

<br>

<div id="g7" class="orgbor"><center>
  <table width="1100" border="1">
    <tr><td class = "left bold" colspan = "4"><strong>7.請排序以下因素的重要程度。以下是以(1)至(5)來排序‧選(1)代表你認為這項因素是最重要的，選(2)代表你認為這項因素是次重要的，如此類推。<br>請給每項排序。</strong></td></tr>
	<tr><td class = "right" >&nbsp;&nbsp;&nbsp;因素</td><td>排序</td><td>如有需要，請註明</td></tr>
	<tr><td class = "right" >●食水水質</td><td class = "onedigit" ><input type = "text" name = "q7_1" id = "q7_1" value = "<?php echo @$ans["q7_1"]; ?>"></td> <td><input type = "text" name = "q7_1a" id = "q7_1a" value = "<?php echo @$ans["q7_1a"]; ?>"></td></tr>
	<tr><td class = "right" >●食水供應的可靠度</td><td class = "onedigit"> <input type = "text" name = "q7_2" id = "q7_2" value = "<?php echo @$ans["q7_2"]; ?>"> </td> <td><input type = "text" name = "q7_2a" id = "q7_2a" value = "<?php echo @$ans["q7_2a"]; ?>"></td></tr>
	<tr><td class = "right" >●水費</td><td class = "onedigit"> <input type = "text" name = "q7_3" id = "q7_3" value = "<?php echo @$ans["q7_3"]; ?>">  </td> <td><input type = "text" name = "q7_3a" id = "q7_3a" value = "<?php echo @$ans["q7_3a"]; ?>"></td></tr>
	<tr><td class = "right" >●客戶服務</td><td class = "onedigit"> <input type = "text" name = "q7_4" id = "q7_4" value = "<?php echo @$ans["q7_4"]; ?>"> </td> <td><input type = "text" name = "q7_4a" id = "q7_4a" value = "<?php echo @$ans["q7_4a"]; ?>"></td></tr>
	<tr><td class = "right" >●其他，請註明：<input type = "text" name = "q7_5c" id = "q7_5c" value = "<?php echo @$ans["q7_5c"]; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td> <input type = "text" name = "q7_5" id = "q7_5" value = "<?php echo @$ans["q7_5"]; ?>"></td><td><input type = "text" name = "q7_5a" id = "q7_5a" value = "<?php echo @$ans["q7_5a"]; ?>"></td></tr>	
  </table></center>
</div>


<br>


<div id="g8" class="orgbor">
<center><table width="1100" border="1">
    <tr><td class = "left bold" colspan = "4"><strong>8.如果2015至2016年度調整水費，約有三分之二的住宅用戶每一期(以四個月計)水費帳單的加幅不超過$20，即每月不超過$5。<br>8a. 你認為加幅可接受嗎？</strong></td></tr>
	<tr>
	    <td class = "right"><input type = "radio" name = "q8a" id = "q8a_1" value = "01" <?php if (@$ans["q8a"] == "01") { echo "checked"; } ?>><label for = "q8a_1" >(1)完全可接受</label></td>
	    <td class = "right"><input type = "radio" name = "q8a" id = "q8a_4" value = "04" <?php if (@$ans["q8a"] == "04") { echo "checked"; } ?>><label for = "q8a_4" >(4)完全不能接受</label></td>
	</tr>
	<tr>
		<td class = "right"><input type = "radio" name = "q8a" id = "q8a_2" value = "02" <?php if (@$ans["q8a"] == "02") { echo "checked"; } ?>><label for = "q8a_2" >(2)可接受</label></td>
		<td class = "right"><input type = "radio" name = "q8a" id = "q8a_5" value = "05" <?php if (@$ans["q8a"] == "05") { echo "checked"; } ?>><label for = "q8a_5" >(5)沒有意見</label></td>
	</tr>
	<tr>
		<td class = "right" colspan = "20"><input type = "radio" name = "q8a" id = "q8a_3" value = "03" <?php if (@$ans["q8a"] == "03") { echo "checked"; } ?>><label for = "q8a_3" >(3)不可接受</label></td>
		
	</tr>
	<tr><td class = "left bold" colspan = "4">若選擇 (3)不可接受 或 (4)完全不能接受，請註明原因：<input type = "text" name = "q8a_34" id = "q8a_34" value = "<?php echo @$ans["q8a_34"]; ?>"></td></tr>
	
	<tr><td class = "left bold" colspan = "4"><strong>8b. 你認為加幅是一個可以負擔的水平嗎？</strong></td></tr>
	<tr>
	    <td class = "right"><input type = "radio" name = "q8b" id = "q8b_1" value = "01" <?php if (@$ans["q8b"] == "01") { echo "checked"; } ?>><label for = "q8b_1" >(1)肯定能夠負擔</label></td>
	    <td class = "right"><input type = "radio" name = "q8b" id = "q8b_4" value = "04" <?php if (@$ans["q8b"] == "04") { echo "checked"; } ?>><label for = "q8b_4" >(4)肯定不能夠負擔</label></td>
	</tr>
	<tr>
		<td class = "right"><input type = "radio" name = "q8b" id = "q8b_2" value = "02" <?php if (@$ans["q8b"] == "02") { echo "checked"; } ?>><label for = "q8b_2" >(2)能夠負擔</label></td>
		<td class = "right"><input type = "radio" name = "q8b" id = "q8b_5" value = "05" <?php if (@$ans["q8b"] == "05") { echo "checked"; } ?>><label for = "q8b_5" >(5)沒有意見</label></td>
	</tr>
	<tr>
		<td class = "right" colspan = "20"><input type = "radio" name = "q8b" id = "q8b_3" value = "03" <?php if (@$ans["q8b"] == "03") { echo "checked"; } ?>><label for = "q8b_3" >(3)不能夠負擔</label></td>
		
	</tr>
	
</table>
</center>
</div>

<br>

<div id="g9" class="orgbor">
<center><table width="1100" border="1">
    <tr><td class = "left bold" colspan = "4"><strong>9.如果2015至2016年度調整水費，約有三分之二的住宅用戶每一期(以四個月計)水費帳單的加幅不超過$10，即每月不超過$2.5。<br>9a. 你認為加幅可接受嗎？</strong></td></tr>
	<tr>
	    <td class = "right"><input type = "radio" name = "q9a" id = "q9a_1" value = "01" <?php if (@$ans["q9a"] == "01") { echo "checked"; } ?>><label for = "q9a_1" >(1)完全可接受</label></td>
	    <td class = "right"><input type = "radio" name = "q9a" id = "q9a_4" value = "04" <?php if (@$ans["q9a"] == "04") { echo "checked"; } ?>><label for = "q9a_4" >(4)完全不能接受</label></td>
	</tr>
	<tr>
		<td class = "right"><input type = "radio" name = "q9a" id = "q9a_2" value = "02" <?php if (@$ans["q9a"] == "02") { echo "checked"; } ?>><label for = "q9a_2" >(2)可接受</label></td>
		<td class = "right"><input type = "radio" name = "q9a" id = "q9a_5" value = "05" <?php if (@$ans["q9a"] == "05") { echo "checked"; } ?>><label for = "q9a_5" >(5)沒有意見</label></td>
	</tr>
	<tr>
		<td class = "right" colspan = "20"><input type = "radio" name = "q9a" id = "q9a_3" value = "03" <?php if (@$ans["q9a"] == "03") { echo "checked"; } ?>><label for = "q9a_3" >(3)不可接受</label></td>	
	</tr>
	<tr><td class = "left bold" colspan = "4">若選擇 (3)不可接受 或 (4)完全不能接受，請註明原因：<input type = "text" name = "q9a_34" id = "q9a_34" value = "<?php echo @$ans["q9a_34"]; ?>"></td></tr>
	
	<tr><td class = "left bold" colspan = "4"><strong>9b. 你認為加幅是一個可以負擔的水平嗎？</strong></td></tr>
	<tr>
	    <td class = "right"><input type = "radio" name = "q9b" id = "q9b_1" value = "01" <?php if (@$ans["q9b"] == "01") { echo "checked"; } ?>><label for = "q9b_1" >(1)肯定能夠負擔</label></td>
	    <td class = "right"><input type = "radio" name = "q9b" id = "q9b_4" value = "04" <?php if (@$ans["q9b"] == "04") { echo "checked"; } ?>><label for = "q9b_4" >(4)肯定不能夠負擔</label></td>
	</tr>
	<tr>
		<td class = "right"><input type = "radio" name = "q9b" id = "q9b_2" value = "02" <?php if (@$ans["q9b"] == "02") { echo "checked"; } ?>><label for = "q9b_2" >(2)能夠負擔</label></td>
		<td class = "right"><input type = "radio" name = "q9b" id = "q9b_5" value = "05" <?php if (@$ans["q9b"] == "05") { echo "checked"; } ?>><label for = "q9b_5" >(5)沒有意見</label></td>
	</tr>
	<tr>
		<td class = "right" colspan = "20"><input type = "radio" name = "q9b" id = "q9b_3" value = "03" <?php if (@$ans["q9b"] == "03") { echo "checked"; } ?>><label for = "q9b_3" >(3)不能夠負擔</label></td>		
	</tr>
	
</table></center>
</div>

<br>

<div id="g10" class="orgbor">
<center><table width="1100" border="1">
     <tr><td class = "left bold" colspan = "4"><strong>10.請問可否提供你的家庭每月收入嗎？請包括所有在職家庭成員的工作收入及其他收入。</strong></td></tr>
	 <tr><td class = "right" >(1)</td><td class = "right" colspan = "3"><input type = "radio" name = "q10" id = "q10_1" value = "1" <?php if (@$ans["q10"] == "1") { echo "checked"; } ?>><label for = "q10_1" >可以，數目大概是 $</label><input type = "text" name = "q10_a" id = "q10_a" value = "<?php echo @$ans["q10_a"]; ?>"></td></tr>
	 <tr><td class = "right" >(2)</td><td class = "right" colspan = "3"><input type = "radio" name = "q10" id = "q10_2" value = "2" <?php if (@$ans["q10"] == "2") { echo "checked"; } ?>><label for = "q10_2" >如果不太清楚，能否在下列範圍選出大概數目嗎？</label></td></tr>
	 <tr class="cg10_2"><td></td>
	     <td class = "right" colspan = "3">
		    (a)<input type = "radio" name = "q10_2" id = "q10_2_1" value = "01" <?php if (@$ans["q10_2"] == "01") { echo "checked"; } ?>><label for = "q10_2_1" >$5,000 或以下</label>
			 <br>(b)<input type = "radio" name = "q10_2" id = "q10_2_2" value = "02" <?php if (@$ans["q10_2"] == "02") { echo "checked"; } ?>><label for = "q10_2_2" >$5,001 - $10,000</label>
			 <br>(c)<input type = "radio" name = "q10_2" id = "q10_2_3" value = "03" <?php if (@$ans["q10_2"] == "03") { echo "checked"; } ?>><label for = "q10_2_3" >$10,001 - $15,000</label>
			 <br>(d)<input type = "radio" name = "q10_2" id = "q10_2_4" value = "04" <?php if (@$ans["q10_2"] == "04") { echo "checked"; } ?>><label for = "q10_2_4" >$15,001 - $20,000</label>
			 <br>(e)<input type = "radio" name = "q10_2" id = "q10_2_5" value = "05" <?php if (@$ans["q10_2"] == "05") { echo "checked"; } ?>><label for = "q10_2_5" >$20,001 - $25,000</label>
			 <br>(f)<input type = "radio" name = "q10_2" id = "q10_2_6" value = "06" <?php if (@$ans["q10_2"] == "06") { echo "checked"; } ?>><label for = "q10_2_6" >$25,001 - $30,000</label>
			 <br>(g)<input type = "radio" name = "q10_2" id = "q10_2_7" value = "07" <?php if (@$ans["q10_2"] == "07") { echo "checked"; } ?>><label for = "q10_2_7" >$30,001 - $35,000</label>
			 <br>(h)<input type = "radio" name = "q10_2" id = "q10_2_8" value = "08" <?php if (@$ans["q10_2"] == "08") { echo "checked"; } ?>><label for = "q10_2_8" >$35,001 - $40,000</label>
			 <br>(i)<input type = "radio" name = "q10_2" id = "q10_2_9" value = "09" <?php if (@$ans["q10_2"] == "09") { echo "checked"; } ?>><label for = "q10_2_9" >$40,000 以上</label>
	     </td>
	 </tr>
	 <tr><td class = "right" >(3)</td><td class = "right" colspan = "3" ><input type = "radio" name = "q10" id = "q10_3" value = "3" <?php if (@$ans["q10"] == "3") { echo "checked"; } ?>><label for = "q10_3" >不能提供/ 拒絕回答。</label></td></tr>
</table></center>
</div>

<br>

<div id="g11" class="orgbor"><center>
<table width="1100" border="1" >
    <tr><td class = "left bold" colspan = "4"><strong>11.請指出你現時居住單住的住戶人數。請計算所有同住家庭成員的數目，包括家庭傭工及與共同享用生活所
需的戶內人士。(例如，共同用膳。)</strong><input type = "text" name = "q11" id = "q11" value = "<?php echo @$ans["q11"]; ?>"></td></tr>
</table></center>
</div>

<br>

<div id="g12" class="orgbor">
<center><table width="1100" border="1">
    <tr>
	   <td class = "left bold" colspan = "3"><strong>12.請指出你現時居住的房屋類別。</strong></td>
	</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q12" id = "q12_1" value = "01" <?php if (@$ans["q12"] == "01") { echo "checked"; } ?>><label for = "q12_1" >(1)公營房屋</label></td>
			<td class = "right"><input type = "radio" name = "q12" id = "q12_3" value = "03" <?php if (@$ans["q12"] == "03") { echo "checked"; } ?>><label for = "q12_3" >(2)私營房屋</label></td>
		</tr>
		<tr>
			<td class = "right"><input type = "radio" name = "q12" id = "q12_2" value = "02" <?php if (@$ans["q12"] == "02") { echo "checked"; } ?>><label for = "q12_2" >(3)資助自置居所</label></td>
			<td class = "right"><input type = "radio" name = "q12" id = "q12_4" value = "04" <?php if (@$ans["q12"] == "04") { echo "checked"; } ?>><label for = "q12_4" >(4)其他，請註明：</label><input type = "text" name = "q12_4a" id = "q12_4a" value = "<?php echo @$ans["q12_4a"]; ?>"></td>
		</tr>
</table></center>
</div>

<br>
</br>
<br>
</br>
<p><strong><center>問卷完，謝謝!!</center></strong></p>
