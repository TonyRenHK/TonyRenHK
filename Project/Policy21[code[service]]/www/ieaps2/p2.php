
<head>
	<title>「進一步鼓勵『自力更生綜合就業援助計劃』綜援受助人就業的獎勵計劃」調查</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery.js"></script>
	<script language="javascript" src="ieaps.js"></script> 
	<link rel="stylesheet" type="text/css" href="ieaps.css" />
	<link rel="stylesheet" href="jquery-ui.css">
	<script src="jquery-ui.js"></script>
</head>


<!------------------------------------------------------------------------------------------->
<div id="g10pre" class="orgbor" ><center>
<table class = "qno">
<tr><td class= "h2strong" colspan = "2" >乙. 就業／失業狀況</td></tr>
</table></center>
</div>


<div id="g10" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.10	請問您過去一個月的工作時數是多少？　<input type = "text" name = "q10" id = "q10" value = "<?php echo @$q10; ?>">小時</td></tr>
</table></center>
</div>

<div id="g10later" class="orgbor" ><center>
<table class = "qno2">
    <tr><td colspan = "4" ><a class="exred">由訪問員填寫:<a><br>請問您是否「欣曉計劃」(ND) 參加者﹖</td></tr>
    <tr><td >1.</td><td class = "left" colspan = "2" width="1050"><input type = "radio" name = "q10p" id = "q10p_1" value = "1" <?php if (@$ans["q10p"] == "1") { echo "checked"; } ?>><label for = "q10p_1" > 是</label></td></tr>
        <tr class="g10p_1" ><td></td><td>1. <input type = "radio" name = "q10p_1" id = "q10p_1a" value = "1" <?php if (@$ans["q10p_1"] == "1") { echo "checked"; } ?>><label for = "q10p_1a" >每月工作時數32小時或以上，<a class="exblue">請問II「低收入人士」部分，Q.20</a></label></td></tr>
        <tr class="g10p_1" ><td></td><td>2. <input type = "radio" name = "q10p_1" id = "q10p_1b" value = "2" <?php if (@$ans["q10p_1"] == "2") { echo "checked"; } ?>><label for = "q10p_1b" >每月工作時數少於32小時，<a class="exblue">請問I「失業人士」部分，Q.11</a></label></td></tr>
    <tr><td>2.</td><td class = "left" colspan = "2" ><input type = "radio" name = "q10p" id = "q10p_2" value = "2" <?php if (@$ans["q10p"] == "2") { echo "checked"; } ?>><label for = "q10p_2" >否</label></td></tr>
        <tr class="g10p_2" ><td></td><td>1. <input type = "radio" name = "q10p_2" id = "q10p_2a" value = "1" <?php if (@$ans["q10p_2"] == "1") { echo "checked"; } ?>><label for = "q10p_2a" >每月工作時數<u>120小時或以上</u>及每月收入<u>高於1,920元</u>，<a class="exblue">請問II「低收入人士」部分，Q.20</a></label></td></tr>
        <tr class="g10p_2" ><td></td><td>2. <input type = "radio" name = "q10p_2" id = "q10p_2b" value = "2" <?php if (@$ans["q10p_2"] == "2") { echo "checked"; } ?>><label for = "q10p_2b" >未能乎合以上要求，<a class="exblue">請問I「失業人士」部分，Q.11</a></label></td></tr>

</table></center>
</div>
<br>


<!---------------------I. 失業人士 ----------------------------------------->

<div id="gpc1">
<div id="g11pre" class="orgbor" ><center>
<table class = "qno">
<tr><td class= "h2strong" colspan = "2" ><u>I. 失業人士  ﹝包括未符合「自力更生支援計劃」工作時間／收入要求的人士﹞</u></td></tr>
</table></center>
</div>


<div id="g11a" class="orgbor" ><center>
<table class = "qno">
     <tr><td colspan = "3" >Q.11a 您現時有工作嗎? </td></tr>
     <tr><td class = "left">1.<input type = "radio" name = "q11a" id = "q11a_1" value = "1" <?php if (@$ans["q11a"] == "1") { echo "checked"; } ?>><label for = "q11a_1" > 有，</label></td><td> （最近一個月收入為: 港幣 <input type = "text" name = "q11a_1a" id = "q11a_1a" value = "<?php echo @$q11a_1a; ?>">元）</td></tr>
     <tr><td class = "left">2.<input type = "radio" name = "q11a" id = "q11a_2" value = "2" <?php if (@$ans["q11a"] == "2") { echo "checked"; } ?>><label for = "q11a_2" >沒有 </label></td><td>（失業了多久?  1. 
	                       <input type = "radio" name = "q11a_2a" id = "q11a_2a_1" value = "1" <?php if (@$ans["q11a_2a"] == "1") { echo "checked"; } ?>><label for = "q11a_2a_1" >自領取綜援開始</label>&nbsp;&nbsp;&nbsp;&nbsp;
						 2.<input type = "radio" name = "q11a_2a" id = "q11a_2a_2" value = "2" <?php if (@$ans["q11a_2a"] == "2") { echo "checked"; } ?>><label for = "q11a_2a_2" >最近<input type = "text" name = "q11a_2a_2a" id = "q11a_2a_2a" value = "<?php echo @$q11a_2a_2a; ?>">月【少於1個月為1 月】）</label></td>
	 </tr>
</table></center>
</div>
<br>

<div id="g11a" class="orgbor" ><center>
<table class = "qno">
        <tr><td colspan = "3">Q.11b 您過往或現在有沒有以下情況？<u>（可選多於一項）</u></td></tr>
        <tr><td>1.<input type = "checkbox" class = "unity01" name = "q11b_1" id = "q11b_1" value = "1" <?php if (@$ans["q11b_1"] == "1") { echo "checked"; } ?>><label for = "q11b_1" > 身體長期不適／有病 (如：哮喘)（請註明病症:</label><input type = "text" name = "q11b_1a" id = "q11b_1a" value = "<?php echo @$q11b_1a; ?>">）</td></tr>
        <tr><td>2.<input type = "checkbox" class = "unity01" name = "q11b_2" id = "q11b_2" value = "1" <?php if (@$ans["q11b_2"] == "1") { echo "checked"; } ?>><label for = "q11b_2" >  傷殘（例如：失聰、失明、弱智、肢體弱能／缺失）請註明:</label><input type = "text" name = "q11b_2a" id = "q11b_2a" value = "<?php echo @$q11b_2a; ?>"></td></tr>
        <tr><td>3.<input type = "checkbox" class = "unity01" name = "q11b_3" id = "q11b_3" value = "1" <?php if (@$ans["q11b_3"] == "1") { echo "checked"; } ?>><label for = "q11b_3" >   酗酒</label></td></tr>
        <tr><td>4.<input type = "checkbox" class = "unity01" name = "q11b_4" id = "q11b_4" value = "1" <?php if (@$ans["q11b_4"] == "1") { echo "checked"; } ?>><label for = "q11b_4" >  賭博</label></td></tr>
        <tr><td>5.<input type = "checkbox" class = "unity01" name = "q11b_5" id = "q11b_5" value = "1" <?php if (@$ans["q11b_5"] == "1") { echo "checked"; } ?>><label for = "q11b_5" >精神病</label></td></tr>
        <tr><td>6.<input type = "checkbox" class = "unity01" name = "q11b_6" id = "q11b_6" value = "1" <?php if (@$ans["q11b_6"] == "1") { echo "checked"; } ?>><label for = "q11b_6" >  吸毒</label></td></tr>
        <tr><td>7.<input type = "checkbox" class = "unity01" name = "q11b_7" id = "q11b_7" value = "1" <?php if (@$ans["q11b_7"] == "1") { echo "checked"; } ?>><label for = "q11b_7" > 入獄</label></td></tr>
        <tr><td>8.<input type = "checkbox" class = "unity01" name = "q11b_8" id = "q11b_8" value = "1" <?php if (@$ans["q11b_8"] == "1") { echo "checked"; } ?>><label for = "q11b_8" > 其他 (請註明:</label><input type = "text" name = "q11b_8a" id = "q11b_8a" value = "<?php echo @$q11b_8a; ?>"></td></tr>
        <tr><td>9.<input type = "checkbox" class = "unity01" name = "q11b_9" id = "q11b_9" value = "1" <?php if (@$ans["q11b_9"] == "1") { echo "checked"; } ?>><label for = "q11b_9" > 沒有以上情況</label></td></tr>
</table></center>
</div>
<br>


<div id="g11c" class="orgbor" ><center>
<table class = "qno">
    <tr><td colspan = "3" >Q.11c在過去30日，您有沒有積極地尋找工作（「積極地」是指有去搵工的行為如打電話給朋友，看報章招聘廣告等，而不單是在家中等電話或等其他人（包括IEAPs工作員、勞工署職員）介紹）？</u></td></tr>
	<tr><td class = "left">1.<input type = "radio" name = "q11c" id = "q11c_1" value = "1" <?php if (@$ans["q11c"] == "1") { echo "checked"; } ?>><label for = "q11c_1" >有積極尋找（跳問Q.13）</label></td></tr>
	<tr><td class = "left">2.<input type = "radio" name = "q11c" id = "q11c_2" value = "2" <?php if (@$ans["q11c"] == "2") { echo "checked"; } ?>><label for = "q11c_2" >沒有積極尋找</label></td></tr>
	<tr><td class = "left">3.<input type = "radio" name = "q11c" id = "q11c_3" value = "3" <?php if (@$ans["q11c"] == "3") { echo "checked"; } ?>><label for = "q11c_3" >完全沒有尋找</label></td></tr>

</table></center><br>
</div>


<div id="g12" class="orgbor" ><center>
<table class = "qno">
    <tr><td colspan = "3" >Q.12	您在過去30日沒有積極尋找工作的原因是？（可選多於一項）（跳問Q.19）</td></tr>
    <tr><td class = "left" >1.<input type = "checkbox" name = "q12_1" id = "q12_1" value = "1" <?php if (@$ans["q12_1"] == "1") { echo "checked"; } ?>><label for = "q12_1" >缺乏動力</label></td></tr>
    <tr><td class = "left" >2.<input type = "checkbox" name = "q12_2" id = "q12_2" value = "1" <?php if (@$ans["q12_2"] == "1") { echo "checked"; } ?>><label for = "q12_2" >缺乏信心</label></td></tr>
    <tr><td class = "left" >3.<input type = "checkbox" name = "q12_3" id = "q12_3" value = "1" <?php if (@$ans["q12_3"] == "1") { echo "checked"; } ?>><label for = "q12_3" >缺乏技能 </label></td></tr>
    <tr><td class = "left" >4.<input type = "checkbox" name = "q12_4" id = "q12_4" value = "1" <?php if (@$ans["q12_4"] == "1") { echo "checked"; } ?>><label for = "q12_4" >我身體不舒服</label></td></tr>
    <tr><td class = "left" >5.<input type = "checkbox" name = "q12_5" id = "q12_5" value = "1" <?php if (@$ans["q12_5"] == "1") { echo "checked"; } ?>><label for = "q12_5" >我需要照顧子女／家人</label></td></tr>
    <tr><td class = "left" >6.<input type = "checkbox" name = "q12_6" id = "q12_6" value = "1" <?php if (@$ans["q12_6"] == "1") { echo "checked"; } ?>><label for = "q12_6" >我很滿意我的現況</label></td></tr>
    <tr><td class = "left" >7.<input type = "checkbox" name = "q12_7" id = "q12_7" value = "1" <?php if (@$ans["q12_7"] == "1") { echo "checked"; } ?>><label for = "q12_7" >我不想改變我的現況</label></td></tr>
    <tr><td class = "left" >8.<input type = "checkbox" name = "q12_8" id = "q12_8" value = "1" <?php if (@$ans["q12_8"] == "1") { echo "checked"; } ?>><label for = "q12_8" >其他（請註明：</label><input type = "text" name = "q12_8a" id = "q12_8a" value = "<?php echo @$q12_8a; ?>">）</td></tr>

</table></center><br>
</div>


<div id="g13pre" class="orgbor" ><center>
<table class = "qno">
    <tr><td>Q.13	以下問題是有關尋找工作狀況：</td><tr>
</table></center>
</div>

<div id="g13" class="orgbor" ><center>
<table class = "qno2">
        <tr class = "nocol4" ><td></td><td>Q.13a  請問您<b><u>過往一個月</u></b>有沒有透過以下途徑(a- f) 搵工？</td><td class="g13b">Q.13b  請問您<b><u>過往一個月</u></b>試過幾多次接觸僱主?</td></tr>
        <tr class = "nocol3" ><td>a.報紙／雜誌</td>
		                    <td>1.<input type = "radio" name = "q13a_a" id = "q13a_a_1" value = "1" <?php if (@$ans["q13a_a"] == "1") { echo "checked"; } ?>><label for = "q13a_a_1" >有</label><br>   
                                2.<input type = "radio" name = "q13a_a" id = "q13a_a_2" value = "2" <?php if (@$ans["q13a_a"] == "2") { echo "checked"; } ?>><label for = "q13a_a_2" > 沒有（跳問b）</label>
							</td>
						    <td class="g13b_a" >1.<input type = "radio" name = "q13a_b" id = "q13a_b_1" value = "1" <?php if (@$ans["q13a_b"] == "1") { echo "checked"; } ?>><label for = "q13a_b_1" >無試過</label><br>   
                                2.<input type = "radio" name = "q13a_b" id = "q13a_b_2" value = "2" <?php if (@$ans["q13a_b"] == "2") { echo "checked"; } ?>><label for = "q13a_b_2" >  試過<input type = "text" name = "q13a_b_2a" id = "q13a_b_2a" value = "<?php echo @$q13a_b_2a; ?>"  disabled >次</label>
							</td>
        <tr>

        <tr class="nocol5" ><td>b.上網</td><td>1.<input type = "radio" name = "q13b_a" id = "q13b_a_1" value = "1" <?php if (@$ans["q13b_a"] == "1") { echo "checked"; } ?>><label for = "q13b_a_1" >有</label><br>   
                                2.<input type = "radio" name = "q13b_a" id = "q13b_a_2" value = "2" <?php if (@$ans["q13b_a"] == "2") { echo "checked"; } ?>><label for = "q13b_a_2" > 沒有（跳問c）</label>
							</td>
						    <td class="g13b_b" >1.<input type = "radio" name = "q13b_b" id = "q13b_b_1" value = "1" <?php if (@$ans["q13b_b"] == "1") { echo "checked"; } ?>><label for = "q13b_b_1" >無試過</label><br>   
                                2.<input type = "radio" name = "q13b_b" id = "q13b_b_2" value = "2" <?php if (@$ans["q13b_b"] == "2") { echo "checked"; } ?>><label for = "q13b_b_2" >  試過<input type = "text" name = "q13b_b_2a" id = "q13b_b_2a" value = "<?php echo @$q13b_b_2a; ?>"  disabled >次</label>
							</td>
		<tr>
		
        <tr class = "nocol3" ><td>c.勞工處</td>
		                      <td>1.<input type = "radio" name = "q13c_a" id = "q13c_a_1" value = "1" <?php if (@$ans["q13c_a"] == "1") { echo "checked"; } ?>><label for = "q13c_a_1" >有</label><br>   
                                  2.<input type = "radio" name = "q13c_a" id = "q13c_a_2" value = "2" <?php if (@$ans["q13c_a"] == "2") { echo "checked"; } ?>><label for = "q13c_a_2" > 沒有（跳問d）</label>
							  </td>
						      <td class="g13b_c" >1.<input type = "radio" name = "q13c_b" id = "q13c_b_1" value = "1" <?php if (@$ans["q13c_b"] == "1") { echo "checked"; } ?>><label for = "q13c_b_1" >無試過</label><br>   
                                  2.<input type = "radio" name = "q13c_b" id = "q13c_b_2" value = "2" <?php if (@$ans["q13c_b"] == "2") { echo "checked"; } ?>><label for = "q13c_b_2" >  試過<input type = "text" name = "q13c_b_2a" id = "q13c_b_2a" value = "<?php echo @$q13c_b_2a; ?>" disabled >次</label>
							 </td>
		<tr>
		
        <tr class="nocol5" ><td>d.別人介紹</td><td>1.<input type = "radio" name = "q13d_a" id = "q13d_a_1" value = "1" <?php if (@$ans["q13d_a"] == "1") { echo "checked"; } ?>><label for = "q13d_a_1" >有</label><br>   
                                   2.<input type = "radio" name = "q13d_a" id = "q13d_a_2" value = "2" <?php if (@$ans["q13d_a"] == "2") { echo "checked"; } ?>><label for = "q13d_a_2" > 沒有（跳問e）</label>
							</td>
						    <td class="g13b_d" >1.<input type = "radio" name = "q13d_b" id = "q13d_b_1" value = "1" <?php if (@$ans["q13d_b"] == "1") { echo "checked"; } ?>><label for = "q13d_b_1" >無試過</label><br>   
                                2.<input type = "radio" name = "q13d_b" id = "q13d_b_2" value = "2" <?php if (@$ans["q13d_b"] == "2") { echo "checked"; } ?>><label for = "q13d_b_2" >  試過<input type = "text" name = "q13d_b_2a" id = "q13d_b_2a" value = "<?php echo @$q13d_b_2a; ?>" disabled >次</label>
							</td>
		<tr>
		
        <tr class = "nocol3" ><td>e.自力更生綜合就業援助計劃同工</td>
		                      <td>1.<input type = "radio" name = "q13e_a" id = "q13e_a_1" value = "1" <?php if (@$ans["q13e_a"] == "1") { echo "checked"; } ?>><label for = "q13e_a_1" >有</label><br>   
                                  2.<input type = "radio" name = "q13e_a" id = "q13e_a_2" value = "2" <?php if (@$ans["q13e_a"] == "2") { echo "checked"; } ?>><label for = "q13e_a_2" > 沒有（跳問f）</label>
							  </td>
						    <td class="g13b_e" >1.<input type = "radio" name = "q13e_b" id = "q13e_b_1" value = "1" <?php if (@$ans["q13e_b"] == "1") { echo "checked"; } ?>><label for = "q13e_b_1" >無試過</label><br>   
                                2.<input type = "radio" name = "q13e_b" id = "q13e_b_2" value = "2" <?php if (@$ans["q13e_b"] == "2") { echo "checked"; } ?>><label for = "q13e_b_2" >試過<input type = "text" name = "q13e_b_2a" id = "q13e_b_2a" value = "<?php echo @$q13e_b_2a; ?>" disabled >次</label>
							</td>
		<tr>
        <tr class="nocol5" ><td>f.其他（請註明）：<input type = "text" name = "q13f" id = "q13f" value = "<?php echo @$q13f; ?>"></td>
		                    <td>1.<input type = "radio" name = "q13f_a" id = "q13f_a_1" value = "1" <?php if (@$ans["q13f_a"] == "1") { echo "checked"; } ?>><label for = "q13f_a_1" >有</label><br>   
                                2.<input type = "radio" name = "q13f_a" id = "q13f_a_2" value = "2" <?php if (@$ans["q13f_a"] == "2") { echo "checked"; } ?>><label for = "q13f_a_2" > 沒有 沒有（跳問Q.14）</label>
							</td>
						    <td class="g13b_f" >1.<input type = "radio" name = "q13f_b" id = "q13f_b_1" value = "1" <?php if (@$ans["q13f_b"] == "1") { echo "checked"; } ?>><label for = "q13f_b_1" >無試過</label><br>   
                                2.<input type = "radio" name = "q13f_b" id = "q13f_b_2" value = "2" <?php if (@$ans["q13f_b"] == "2") { echo "checked"; } ?>><label for = "q13f_b_2" >  試過<input type = "text" name = "q13f_b_2a" id = "q13f_b_2a" value = "<?php echo @$q13f_b_2a; ?>" disabled >次</label>
							</td>
		<tr>

</table></center>
<br>
</div>


<div id="g14" class="orgbor" ><center>
<table class = "qno">
    <tr><td colspan = "3" >Q.14	在過去一個月，您有沒有透過上述途徑(Q.13a, a-f) 而搵到工作（獲聘而可選擇是否入職）？ 幾多次？</u></td></tr>
	<tr><td class = "left">1.<input type = "radio" name = "q14" id = "q14_1" value = "1" <?php if (@$ans["q14"] == "1") { echo "checked"; } ?>><label for = "q14_1" >  有，</label><input type = "text" name = "q14_1a" id = "q14_1a" value = "<?php echo @$q14_1a; ?>" disabled > 次</td></tr>
	<tr><td class = "left">2.<input type = "radio" name = "q14" id = "q14_2" value = "2" <?php if (@$ans["q14"] == "2") { echo "checked"; } ?>><label for = "q14_2" >沒有</label></td></tr>

	<br>
	</table></center>
</div>



<div id="g15" class="orgbor" ><center>
<table class = "qno">
    <tr><td colspan = "3" >Q.15	請問您現在主要尋找哪些工作（職業）？（可選多於一項，最多三項）</td></tr>
	<tr><td class = "left">1<input type = "checkbox"  class = "unity15" name = "q15_1" id = "q15_1" value = "1" <?php if (@$ans["q15_1"] == "1") { echo "checked"; } ?>><label for = "q15_1" >花王</label></td>
        <td class = "left">12<input type = "checkbox" class = "unity15" name = "q15_12" id = "q15_12" value = "1" <?php if (@$ans["q15_12"] == "1") { echo "checked"; } ?>><label for = "q15_12" >洗碗碟工人</label></td>
		<td class = "left">23<input type = "checkbox" class = "unity15" name = "q15_23" id = "q15_23" value = "1" <?php if (@$ans["q15_23"] == "1") { echo "checked"; } ?>><label for = "q15_23" >技工</label></td>
   </tr>
   	<tr><td class = "left">2<input type = "checkbox"  class = "unity15" name = "q15_2" id = "q15_2" value = "1" <?php if (@$ans["q15_2"] == "1") { echo "checked"; } ?>><label for = "q15_2" > 裁縫／車衣工人</label></td>
        <td class = "left">13<input type = "checkbox" class = "unity15" name = "q15_13" id = "q15_13" value = "1" <?php if (@$ans["q15_13"] == "1") { echo "checked"; } ?>><label for = "q15_13" >知客／侍應／傳菜／茶水</label></td>
		<td class = "left">24<input type = "checkbox" class = "unity15" name = "q15_24" id = "q15_24" value = "1" <?php if (@$ans["q15_24"] == "1") { echo "checked"; } ?>><label for = "q15_24" >雜工</label></td>
   </tr>
    <tr><td class = "left">3<input type = "checkbox"  class = "unity15" name = "q15_3" id = "q15_3" value = "1" <?php if (@$ans["q15_3"] == "1") { echo "checked"; } ?>><label for = "q15_3" >  三行／裝修工人</label></td>
        <td class = "left">14<input type = "checkbox" class = "unity15" name = "q15_14" id = "q15_14" value = "1" <?php if (@$ans["q15_14"] == "1") { echo "checked"; } ?>><label for = "q15_14" >廚師／幫廚</label></td>
		<td class = "left">25<input type = "checkbox" class = "unity15" name = "q15_25" id = "q15_25" value = "1" <?php if (@$ans["q15_25"] == "1") { echo "checked"; } ?>><label for = "q15_25" >文員</label></td>
   </tr>
    <tr><td class = "left">4<input type = "checkbox"  class = "unity15" name = "q15_4" id = "q15_4" value = "1" <?php if (@$ans["q15_4"] == "1") { echo "checked"; } ?>><label for = "q15_4" > 司機</label></td>
        <td class = "left">15<input type = "checkbox" class = "unity15" name = "q15_15" id = "q15_15" value = "1" <?php if (@$ans["q15_15"] == "1") { echo "checked"; } ?>><label for = "q15_15" >外賣速遞員</label></td>
		<td class = "left">26<input type = "checkbox" class = "unity15" name = "q15_26" id = "q15_26" value = "1" <?php if (@$ans["q15_26"] == "1") { echo "checked"; } ?>><label for = "q15_26" >地盤工人</label></td>
   </tr>
    <tr><td class = "left">5<input type = "checkbox"  class = "unity15" name = "q15_5" id = "q15_5" value = "1" <?php if (@$ans["q15_5"] == "1") { echo "checked"; } ?>><label for = "q15_5" > 送貨員</label></td>
        <td class = "left">16<input type = "checkbox" class = "unity15" name = "q15_16" id = "q15_16" value = "1" <?php if (@$ans["q15_16"] == "1") { echo "checked"; } ?>><label for = "q15_16" > 店舖助理</label></td>
		<td class = "left">27<input type = "checkbox" class = "unity15" name = "q15_27" id = "q15_27" value = "1" <?php if (@$ans["q15_27"] == "1") { echo "checked"; } ?>><label for = "q15_27" >幼兒托管／陪月</label></td>
   </tr>
    <tr><td class = "left">6<input type = "checkbox"  class = "unity15" name = "q15_6" id = "q15_6" value = "1" <?php if (@$ans["q15_6"] == "1") { echo "checked"; } ?>><label for = "q15_6" >倉務員</label></td>
        <td class = "left">17<input type = "checkbox" class = "unity15" name = "q15_17" id = "q15_17" value = "1" <?php if (@$ans["q15_17"] == "1") { echo "checked"; } ?>><label for = "q15_17" >銷售員</label></td>
		<td class = "left">28<input type = "checkbox" class = "unity15" name = "q15_28" id = "q15_28" value = "1" <?php if (@$ans["q15_28"] == "1") { echo "checked"; } ?>><label for = "q15_28" >其他：</label><input type = "text" name = "q15_28a" id = "q15_28a" value = "<?php echo @$q15_28a; ?>" disabled ></td>
   </tr>
    <tr><td class = "left">7<input type = "checkbox"  class = "unity15" name = "q15_7" id = "q15_7" value = "1" <?php if (@$ans["q15_7"] == "1") { echo "checked"; } ?>><label for = "q15_7" >速遞員</label></td>
        <td class = "left">18<input type = "checkbox" class = "unity15" name = "q15_18" id = "q15_18" value = "1" <?php if (@$ans["q15_18"] == "1") { echo "checked"; } ?>><label for = "q15_18" > 保安員</label></td>
   </tr>  
   <tr><td class = "left">8<input type = "checkbox"  class = "unity15" name = "q15_8" id = "q15_8" value = "1" <?php if (@$ans["q15_8"] == "1") { echo "checked"; } ?>><label for = "q15_8" > 信差</label></td>
        <td class = "left">19<input type = "checkbox" class = "unity15" name = "q15_19" id = "q15_19" value = "1" <?php if (@$ans["q15_19"] == "1") { echo "checked"; } ?>><label for = "q15_19" >  收銀員</label></td>
   </tr>
       <tr><td class = "left">9<input type = "checkbox"  class = "unity15" name = "q15_9" id = "q15_9" value = "1" <?php if (@$ans["q15_9"] == "1") { echo "checked"; } ?>><label for = "q15_9" > 接線生</label></td>
        <td class = "left">20<input type = "checkbox" class = "unity15" name = "q15_20" id = "q15_20" value = "1" <?php if (@$ans["q15_20"] == "1") { echo "checked"; } ?>><label for = "q15_20" > 洗頭／髮型助理／美容／按摩</label></td>
   </tr>  
   <tr><td class = "left">10<input type = "checkbox"  class = "unity15" name = "q15_10" id = "q15_10" value = "1" <?php if (@$ans["q15_10"] == "1") { echo "checked"; } ?>><label for = "q15_10" >辦公室助理</label></td>
        <td class = "left">21<input type = "checkbox" class = "unity15" name = "q15_21" id = "q15_21" value = "1" <?php if (@$ans["q15_21"] == "1") { echo "checked"; } ?>><label for = "q15_21" > 跟車工人</label></td>
   </tr>
      <tr><td class = "left">11<input type = "checkbox"  class = "unity15" name = "q15_11" id = "q15_11" value = "1" <?php if (@$ans["q15_11"] == "1") { echo "checked"; } ?>><label for = "q15_11" >清潔工人</label></td>
        <td class = "left">22<input type = "checkbox" class = "unity15" name = "q15_22" id = "q15_22" value = "1" <?php if (@$ans["q15_22"] == "1") { echo "checked"; } ?>><label for = "q15_22" >家務助理</label></td>
   </tr>
   <br>
</table></center>
</div>


<div id="g16" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.16	請問您期望的每星期最高工作時數是多少？（在您現在身體狀況及家庭條件下）<input type = "text" name = "q16" id = "q16" value = "<?php echo @$q16; ?>">小時</td></tr>

</table></center>
<br>
</div>


<div id="g17" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.17	請問您期望的每月最低工作收入是多少？（在您現在身體狀況及家庭條件下）港幣<input type = "text" name = "q17" id = "q17" value = "<?php echo @$q17; ?>">元</td></tr>
</table></center><br>
</div>


<div id="g18pre" class="orgbor" ><center>
<table class = "qno">
    <tr><td>Q.18	以下的問題是關於您尋找工作的原因，您是否同意以下句子？</td><tr>
</table></center>
</div>

<div id="g18" class="orgbor" ><center>
<table class = "qno2">
	 <tr  class = "nocol4"  ><td>我尋找工作是因為….....</td><td class="cen" >1 (非常不同意)</td><td class="cen" >2(不同意)</td><td class="cen" >3(中立)</td><td class="cen" >4(同意)</td><td class="cen" >5(非常同意)</td></tr>
     <tr><td>1.	如果我不工作，我負擔不起我的生活開支</td>
	    <td class="cen" ><input type = "radio" name = "q18_1" id = "q18_1_1" value = "1" <?php if (@$ans["q18_1"] == "1") { echo "checked"; } ?>><label for = "q18_1" ></label></td>
		<td  class="cen" ><input type = "radio" name = "q18_1" id = "q18_1_2" value = "2" <?php if (@$ans["q18_1"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_1" id = "q18_1_3" value = "3" <?php if (@$ans["q18_1"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_1" id = "q18_1_4" value = "4" <?php if (@$ans["q18_1"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_1" id = "q18_1_5" value = "5" <?php if (@$ans["q18_1"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "nocol" ><td>2.	如果我不工作，我需要動用個人存款去支付所有花費</td>
	    <td class="cen" ><input type = "radio" name = "q18_2" id = "q18_2_1" value = "1" <?php if (@$ans["q18_2"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_2" id = "q18_2_2" value = "2" <?php if (@$ans["q18_2"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_2" id = "q18_2_3" value = "3" <?php if (@$ans["q18_2"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_2" id = "q18_2_4" value = "4" <?php if (@$ans["q18_2"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_2" id = "q18_2_5" value = "5" <?php if (@$ans["q18_2"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr><td>3.	我所賺得的金錢能使我買到想要的東西</td>
	    <td class="cen" ><input type = "radio" name = "q18_3" id = "q18_3_1" value = "1" <?php if (@$ans["q18_3"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_3" id = "q18_3_2" value = "2" <?php if (@$ans["q18_3"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_3" id = "q18_3_3" value = "3" <?php if (@$ans["q18_3"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_3" id = "q18_3_4" value = "4" <?php if (@$ans["q18_3"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_3" id = "q18_3_5" value = "5" <?php if (@$ans["q18_3"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	      <tr class = "nocol" ><td>4.	如果我不工作，我就要節省我的個人支出</td>
	    <td class="cen" ><input type = "radio" name = "q18_4" id = "q8_4_1" value = "1" <?php if (@$ans["q18_4"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_4" id = "q8_4_2" value = "2" <?php if (@$ans["q18_4"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_4" id = "q8_4_3" value = "3" <?php if (@$ans["q18_4"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_4" id = "q8_4_4" value = "4" <?php if (@$ans["q18_4"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_4" id = "q8_4_5" value = "5" <?php if (@$ans["q18_4"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>5.	失業令我感到羞愧</td>
	    <td class="cen" ><input type = "radio" name = "q18_5" id = "q18_5_1" value = "1" <?php if (@$ans["q18_5"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_5" id = "q18_5_2" value = "2" <?php if (@$ans["q18_5"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_5" id = "q18_5_3" value = "3" <?php if (@$ans["q18_5"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_5" id = "q18_5_4" value = "4" <?php if (@$ans["q18_5"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_5" id = "q18_5_5" value = "5" <?php if (@$ans["q18_5"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "nocol" ><td>6.	我覺得失業應該要揾工做</td>
	    <td class="cen" ><input type = "radio" name = "q18_6" id = "q18_6_1" value = "1" <?php if (@$ans["q18_6"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_6" id = "q18_6_2" value = "2" <?php if (@$ans["q18_6"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_6" id = "q18_6_3" value = "3" <?php if (@$ans["q18_6"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_6" id = "q18_6_4" value = "4" <?php if (@$ans["q18_6"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_6" id = "q18_6_5" value = "5" <?php if (@$ans["q18_6"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr><td>7.	工作是我對社會的責任</td>
	    <td class="cen" ><input type = "radio" name = "q18_7" id = "q18_7_1" value = "1" <?php if (@$ans["q18_7"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_7" id = "q18_7_2" value = "2" <?php if (@$ans["q18_7"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_7" id = "q18_7_3" value = "3" <?php if (@$ans["q18_7"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_7" id = "q18_7_4" value = "4" <?php if (@$ans["q18_7"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_7" id = "q18_7_5" value = "5" <?php if (@$ans["q18_7"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	<tr class = "nocol" ><td>8.	我不想其他人覺得我懶惰</td>
	    <td class="cen" ><input type = "radio" name = "q18_8" id = "q8_8_1" value = "1" <?php if (@$ans["q8_1"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_8" id = "q8_8_2" value = "2" <?php if (@$ans["q8_1"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_8" id = "q8_1_3" value = "3" <?php if (@$ans["q8_1"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_8" id = "q8_1_4" value = "4" <?php if (@$ans["q8_1"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_8" id = "q8_1_5" value = "5" <?php if (@$ans["q8_1"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>9.	工作可以令我一展所長</td>
	    <td class="cen" ><input type = "radio" name = "q18_9" id = "q8_9_1" value = "1" <?php if (@$ans["q8_9"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_9" id = "q8_9_2" value = "2" <?php if (@$ans["q8_9"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_9" id = "q8_9_3" value = "3" <?php if (@$ans["q8_9"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_9" id = "q8_9_4" value = "4" <?php if (@$ans["q8_9"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_9" id = "q8_9_5" value = "5" <?php if (@$ans["q8_9"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr class = "nocol" ><td>10.	工作給予我進一步提升個人品格的機會</td>
	    <td class="cen" ><input type = "radio" name = "q18_10" id = "q18_10_1" value = "1" <?php if (@$ans["q18_10"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_10" id = "q18_10_2" value = "2" <?php if (@$ans["q18_10"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_10" id = "q18_10_3" value = "3" <?php if (@$ans["q18_10"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_10" id = "q18_10_4" value = "4" <?php if (@$ans["q18_10"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_10" id = "q18_10_5" value = "5" <?php if (@$ans["q18_10"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	      <tr ><td>11.	工作對我個人來說很有意義</td>
	    <td class="cen" ><input type = "radio" name = "q18_11" id = "q18_11_1" value = "1" <?php if (@$ans["q18_11"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_11" id = "q18_11_2" value = "2" <?php if (@$ans["q18_11"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_11" id = "q18_11_3" value = "3" <?php if (@$ans["q18_11"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_11" id = "q18_11_4" value = "4" <?php if (@$ans["q18_11"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_11" id = "q18_11_5" value = "5" <?php if (@$ans["q18_11"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "nocol" ><td>12.	我想工作</td>
	    <td class="cen" ><input type = "radio" name = "q18_12" id = "q18_12_1" value = "1" <?php if (@$ans["q18_12"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_12" id = "q18_12_2" value = "2" <?php if (@$ans["q18_12"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_12" id = "q18_12_3" value = "3" <?php if (@$ans["q18_12"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_12" id = "q18_12_4" value = "4" <?php if (@$ans["q18_12"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_12" id = "q18_12_5" value = "5" <?php if (@$ans["q18_12"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>13.	我會在工作中獲得樂趣</td>
	    <td class="cen" ><input type = "radio" name = "q18_13" id = "q18_13_1" value = "1" <?php if (@$ans["q18_13"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_13" id = "q18_13_2" value = "2" <?php if (@$ans["q18_13"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_13" id = "q18_13_3" value = "3" <?php if (@$ans["q18_13"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_13" id = "q18_13_4" value = "4" <?php if (@$ans["q18_13"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_13" id = "q18_13_5" value = "5" <?php if (@$ans["q18_13"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr class = "nocol" ><td>14.	我認為工作對我來說很重要</td>
	    <td class="cen" ><input type = "radio" name = "q18_14" id = "q18_14_1" value = "1" <?php if (@$ans["q18_14"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_14" id = "q18_14_2" value = "2" <?php if (@$ans["q18_14"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_14" id = "q18_14_3" value = "3" <?php if (@$ans["q18_14"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_14" id = "q18_14_4" value = "4" <?php if (@$ans["q18_14"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_14" id = "q18_14_5" value = "5" <?php if (@$ans["q18_14"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr><td>15.	我享受去搵我有能力勝任的工作的過程</td>
	    <td class="cen" ><input type = "radio" name = "q18_15" id = "q18_15_1" value = "1" <?php if (@$ans["q18_15"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_15" id = "q18_15_2" value = "2" <?php if (@$ans["q18_15"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_15" id = "q18_15_3" value = "3" <?php if (@$ans["q18_15"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_15" id = "q18_15_4" value = "4" <?php if (@$ans["q18_15"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_15" id = "q18_15_5" value = "5" <?php if (@$ans["q18_15"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr  class = "nocol" ><td>16.	我享受去搵自己感興趣的工作的過程</td>
	    <td class="cen" ><input type = "radio" name = "q18_16" id = "q18_16_1" value = "1" <?php if (@$ans["q18_16"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_16" id = "q18_16_2" value = "2" <?php if (@$ans["q18_16"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_16" id = "q18_16_3" value = "3" <?php if (@$ans["q18_16"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_16" id = "q18_16_4" value = "4" <?php if (@$ans["q18_16"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_16" id = "q18_16_5" value = "5" <?php if (@$ans["q18_16"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol4" ><td>我不尋找工作是因為…...</td><td class="cen" >1 (非常不同意)</td><td class="cen" >2(不同意)</td><td class="cen" >3(中立)</td><td class="cen" >4(同意)</td><td class="cen" >5(非常同意)</td></tr>
	   <tr><td>17.	我是一個愚笨的僱員</td>
	    <td class="cen" ><input type = "radio" name = "q18_17" id = "q18_17_1" value = "1" <?php if (@$ans["q18_17"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_17" id = "q18_17_2" value = "2" <?php if (@$ans["q18_17"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_17" id = "q18_17_3" value = "3" <?php if (@$ans["q18_17"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_17" id = "q18_17_4" value = "4" <?php if (@$ans["q18_17"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_17" id = "q18_17_5" value = "5" <?php if (@$ans["q18_17"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	<tr class = "nocol"  ><td>18.	我不知道怎樣開始搵工</td>
	    <td class="cen" ><input type = "radio" name = "q18_18" id = "q18_18_1" value = "1" <?php if (@$ans["q18_18"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_18" id = "q18_18_2" value = "2" <?php if (@$ans["q18_18"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_18" id = "q18_18_3" value = "3" <?php if (@$ans["q18_18"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_18" id = "q18_18_4" value = "4" <?php if (@$ans["q18_18"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_18" id = "q18_18_5" value = "5" <?php if (@$ans["q18_18"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr ><td>19.	我無把握揾到工做</td>
	    <td class="cen" ><input type = "radio" name = "q18_19" id = "q18_19_1" value = "1" <?php if (@$ans["q18_19"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_19" id = "q18_19_2" value = "2" <?php if (@$ans["q18_19"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_19" id = "q18_19_3" value = "3" <?php if (@$ans["q18_19"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_19" id = "q18_19_4" value = "4" <?php if (@$ans["q18_19"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_19" id = "q18_19_5" value = "5" <?php if (@$ans["q18_19"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr  class = "nocol" ><td>20.	我的學歷太低而不被僱主所接受</td>
	    <td class="cen" ><input type = "radio" name = "q18_20" id = "q18_20_1" value = "1" <?php if (@$ans["q8_20"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_20" id = "q18_20_2" value = "2" <?php if (@$ans["q8_20"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_20" id = "q18_20_3" value = "3" <?php if (@$ans["q8_20"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_20" id = "q18_20_4" value = "4" <?php if (@$ans["q8_20"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q18_20" id = "q18_20_5" value = "5" <?php if (@$ans["q8_20"] == "5") { echo "checked"; } ?>></td>
	 </tr>
</table></center>
</div>
<br>

<div id="g19pre" class="orgbor" ><center>
<table class = "qno">
    <tr><td>Q.19	試想想您於尋找工作時的不同情況，您幾有信心在以下方面做得好：</td><tr>
</table></center>
</div>




<div id="g19" class="orgbor" ><center>
<table class = "qno2">
	 <tr><td>&nbsp;</td><td>1(我完全沒有信心做得好)</td><td>2(我不太有信心做得好)</td><td>3(我或許有信心做得好)</td><td>4(我幾有信心做得好)</td><td>5(我非常有信心做得好)</td></tr>
     <tr class = "nocol3" ><td>1.	揾我需要的資料或消息</td>
	    <td><input type = "radio" name = "q19_1" id = "q19_1_1" value = "1" <?php if (@$ans["q19_1"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_1" id = "q19_1_2" value = "2" <?php if (@$ans["q19_1"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_1" id = "q19_1_3" value = "3" <?php if (@$ans["q19_1"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_1" id = "q19_1_4" value = "4" <?php if (@$ans["q19_1"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_1" id = "q19_1_5" value = "5" <?php if (@$ans["q19_1"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>2.	明白我揾到的資料或消息</td>
	    <td><input type = "radio" name = "q19_2" id = "q19_2_1" value = "1" <?php if (@$ans["q19_2"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_2" id = "q19_2_2" value = "2" <?php if (@$ans["q19_2"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_2" id = "q19_2_3" value = "3" <?php if (@$ans["q19_2"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_2" id = "q19_2_4" value = "4" <?php if (@$ans["q19_2"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_2" id = "q19_2_5" value = "5" <?php if (@$ans["q19_2"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr class = "nocol3" ><td>3.	按自己能力揀最啱自己的工作</td>
	    <td><input type = "radio" name = "q19_3" id = "q19_3_1" value = "1" <?php if (@$ans["q19_3"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_3" id = "q19_3_2" value = "2" <?php if (@$ans["q19_3"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_3" id = "q19_3_3" value = "3" <?php if (@$ans["q19_3"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_3" id = "q19_3_4" value = "4" <?php if (@$ans["q19_3"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_3" id = "q19_3_5" value = "5" <?php if (@$ans["q19_3"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	      <tr><td>4.	視失敗為挑戰而不是困難</td>
	    <td><input type = "radio" name = "q19_4" id = "q19_4_1" value = "1" <?php if (@$ans["q19_4"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_4" id = "q19_4_2" value = "2" <?php if (@$ans["q19_4"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_4" id = "q19_4_3" value = "3" <?php if (@$ans["q19_4"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_4" id = "q19_4_4" value = "4" <?php if (@$ans["q19_4"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_4" id = "q19_4_5" value = "5" <?php if (@$ans["q19_4"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "nocol3" ><td>5.	勇敢面對失敗</td>
	    <td><input type = "radio" name = "q19_5" id = "q19_5_1" value = "1" <?php if (@$ans["q19_5"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_5" id = "q19_5_2" value = "2" <?php if (@$ans["q19_5"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_5" id = "q19_5_3" value = "3" <?php if (@$ans["q19_5"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_5" id = "q19_5_4" value = "4" <?php if (@$ans["q19_5"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_5" id = "q19_5_5" value = "5" <?php if (@$ans["q19_5"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>6.	向有經驗的人請教</td>
	    <td><input type = "radio" name = "q19_6" id = "q19_6_1" value = "1" <?php if (@$ans["q19_6"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_6" id = "q19_6_2" value = "2" <?php if (@$ans["q19_6"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_6" id = "q19_6_3" value = "3" <?php if (@$ans["q19_6"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_6" id = "q19_6_4" value = "4" <?php if (@$ans["q19_6"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_6" id = "q19_6_5" value = "5" <?php if (@$ans["q19_6"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr class = "nocol3" ><td>7.	尊重別人的能力</td>
	    <td><input type = "radio" name = "q19_7" id = "q19_7_1" value = "1" <?php if (@$ans["q19_7"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_7" id = "q19_7_2" value = "2" <?php if (@$ans["q19_7"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_7" id = "q19_7_3" value = "3" <?php if (@$ans["q19_7"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_7" id = "q19_7_4" value = "4" <?php if (@$ans["q19_7"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_7" id = "q19_7_5" value = "5" <?php if (@$ans["q19_7"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	<tr ><td>8.	與新同事合作</td>
	    <td><input type = "radio" name = "q19_8" id = "q19_8_1" value = "1" <?php if (@$ans["q19_8"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_8" id = "q19_8_2" value = "2" <?php if (@$ans["q19_8"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_8" id = "q19_8_3" value = "3" <?php if (@$ans["q19_8"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_8" id = "q19_8_4" value = "4" <?php if (@$ans["q19_8"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_8" id = "q19_8_5" value = "5" <?php if (@$ans["q19_8"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "nocol3" ><td>9.	計劃好自己的工作路向</td>
	    <td><input type = "radio" name = "q19_9" id = "q19_9_1" value = "1" <?php if (@$ans["q19_9"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_9" id = "q19_9_2" value = "2" <?php if (@$ans["q19_9"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_9" id = "q19_9_3" value = "3" <?php if (@$ans["q19_9"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_9" id = "q19_9_4" value = "4" <?php if (@$ans["q19_9"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_9" id = "q19_9_5" value = "5" <?php if (@$ans["q19_9"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr><td>10.	於求職市場把握新的機會</td>
	    <td><input type = "radio" name = "q19_10" id = "q19_10_1" value = "1" <?php if (@$ans["q19_10"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_10" id = "q19_10_2" value = "2" <?php if (@$ans["q19_10"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_10" id = "q19_10_3" value = "3" <?php if (@$ans["q19_10"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_10" id = "q19_10_4" value = "4" <?php if (@$ans["q19_10"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_10" id = "q19_10_5" value = "5" <?php if (@$ans["q19_10"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	      <tr  class = "nocol3" ><td>11.	克服面對的困難</td>
	    <td><input type = "radio" name = "q19_11" id = "q19_11_1" value = "1" <?php if (@$ans["q19_11"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_11" id = "q19_11_2" value = "2" <?php if (@$ans["q19_11"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_11" id = "q19_11_3" value = "3" <?php if (@$ans["q19_11"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_11" id = "q19_11_4" value = "4" <?php if (@$ans["q19_11"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_11" id = "q19_11_5" value = "5" <?php if (@$ans["q19_11"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>12.	揾方法去達成目標</td>
	    <td><input type = "radio" name = "q19_12" id = "q19_12_1" value = "1" <?php if (@$ans["q19_12"] == "1") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_12" id = "q19_12_2" value = "2" <?php if (@$ans["q19_12"] == "2") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_12" id = "q19_12_3" value = "3" <?php if (@$ans["q19_12"] == "3") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_12" id = "q19_12_4" value = "4" <?php if (@$ans["q19_12"] == "4") { echo "checked"; } ?>></td>
		<td><input type = "radio" name = "q19_12" id = "q19_12_5" value = "5" <?php if (@$ans["q19_12"] == "5") { echo "checked"; } ?>></td>
	 </tr>


</table></center>
</div>
<br>


</div>

<!---------------------------低收入人士---------------------------------------------------------->
<div id="gpc2">

<div id="g20pre" class="orgbor" ><center>
<table class = "qno">
<tr><td class= "h2strong" colspan = "2" ><u>  II. 低收入人士及「欣曉計劃」參加者（每月工作時數不少於32小時）</u></td></tr>
</table></center>
</div>


<div id="g20a" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.20a  您現在所做的主要工作做了多久: <input type = "text" name = "q20a" id = "q20a" value = "<?php echo @$q20a; ?>"> 月 ﹝少於1個月為1 月﹞</td></tr>
</table></center>
</div>


<!-------------------change varible---------------------------->
<div id="g20b" class="orgbor" ><center>
<table class = "qno">
    <tr><td colspan = "3" >Q.20b  您現在從事什麼職位？ （如您有多於一份兼職工作，請回答所有兼職擔任的職位）</td></tr>
	<tr><td class = "left">1<input type = "checkbox"  class = "unity02" name = "q20b_1" id = "q20b_1" value = "1" <?php if (@$ans["q20b_1"] == "1") { echo "checked"; } ?>><label for = "q20b_1" >花王</label></td>
        <td class = "left">12<input type = "checkbox" class = "unity02" name = "q20b_12" id = "q20b_12" value = "1" <?php if (@$ans["q20b_12"] == "1") { echo "checked"; } ?>><label for = "q20b_12" >洗碗碟工人</label></td>
		<td class = "left">23<input type = "checkbox" class = "unity02" name = "q20b_23" id = "q20b_23" value = "1" <?php if (@$ans["q20b_23"] == "1") { echo "checked"; } ?>><label for = "q20b_23" >技工</label></td>
   </tr>
   	<tr><td class = "left">2<input type = "checkbox"  class = "unity02" name = "q20b_2" id = "q20b_2" value = "1" <?php if (@$ans["q20b_2"] == "1") { echo "checked"; } ?>><label for = "q20b_2" > 裁縫／車衣工人</label></td>
        <td class = "left">13<input type = "checkbox" class = "unity02" name = "q20b_13" id = "q20b_13" value = "1" <?php if (@$ans["q20b_13"] == "1") { echo "checked"; } ?>><label for = "q20b_13" >知客／侍應／傳菜／茶水</label></td>
		<td class = "left">24<input type = "checkbox" class = "unity02" name = "q20b_24" id = "q20b_24" value = "1" <?php if (@$ans["q20b_24"] == "1") { echo "checked"; } ?>><label for = "q20b_24" >雜工</label></td>
   </tr>
    <tr><td class = "left">3<input type = "checkbox"  class = "unity02" name = "q20b_3" id = "q20b_3" value = "1" <?php if (@$ans["q20b_3"] == "1") { echo "checked"; } ?>><label for = "q20b_3" >  三行／裝修工人</label></td>
        <td class = "left">14<input type = "checkbox" class = "unity02" name = "q20b_14" id = "q20b_14" value = "1" <?php if (@$ans["q20b_14"] == "1") { echo "checked"; } ?>><label for = "q20b_14" >廚師／幫廚</label></td>
		<td class = "left">25<input type = "checkbox" class = "unity02" name = "q20b_25" id = "q20b_25" value = "1" <?php if (@$ans["q20b_25"] == "1") { echo "checked"; } ?>><label for = "q20b_25" >文員</label></td>
   </tr>
    <tr><td class = "left">4<input type = "checkbox"  class = "unity02" name = "q20b_4" id = "q20b_4" value = "1" <?php if (@$ans["q20b_4"] == "1") { echo "checked"; } ?>><label for = "q20b_4" > 司機</label></td>
        <td class = "left">15<input type = "checkbox" class = "unity02" name = "q20b_15" id = "q20b_15" value = "1" <?php if (@$ans["q20b_15"] == "1") { echo "checked"; } ?>><label for = "q20b_15" >外賣速遞員</label></td>
		<td class = "left">26<input type = "checkbox" class = "unity02" name = "q20b_26" id = "q20b_26" value = "1" <?php if (@$ans["q20b_26"] == "1") { echo "checked"; } ?>><label for = "q20b_26" >地盤工人</label></td>
   </tr>
    <tr><td class = "left">5<input type = "checkbox"  class = "unity02" name = "q20b_5" id = "q20b_5" value = "1" <?php if (@$ans["q20b_5"] == "1") { echo "checked"; } ?>><label for = "q20b_5" > 送貨員</label></td>
        <td class = "left">16<input type = "checkbox" class = "unity02" name = "q20b_16" id = "q20b_16" value = "1" <?php if (@$ans["q20b_16"] == "1") { echo "checked"; } ?>><label for = "q20b_16" > 店舖助理</label></td>
		<td class = "left">27<input type = "checkbox" class = "unity02" name = "q20b_27" id = "q20b_27" value = "1" <?php if (@$ans["q20b_27"] == "1") { echo "checked"; } ?>><label for = "q20b_27" >幼兒托管／陪月</label></td>
   </tr>
    <tr><td class = "left">6<input type = "checkbox"  class = "unity02" name = "q20b_6" id = "q20b_6" value = "1" <?php if (@$ans["q20b_6"] == "1") { echo "checked"; } ?>><label for = "q20b_6" >倉務員</label></td>
        <td class = "left">17<input type = "checkbox" class = "unity02" name = "q20b_17" id = "q20b_17" value = "1" <?php if (@$ans["q20b_17"] == "1") { echo "checked"; } ?>><label for = "q20b_17" >銷售員</label></td>
		<td class = "left">28<input type = "checkbox" class = "unity02" name = "q20b_28" id = "q20b_28" value = "1" <?php if (@$ans["q20b_28"] == "1") { echo "checked"; } ?>><label for = "q20b_28" >其他：</label><input type = "text" name = "q20b_28a" id = "q20b_28a" value = "<?php echo @$q20b_28a; ?>" disabled ></td>
   </tr>
    <tr><td class = "left">7<input type = "checkbox"  class = "unity02" name = "q20b_7" id = "q20b_7" value = "1" <?php if (@$ans["q20b_7"] == "1") { echo "checked"; } ?>><label for = "q20b_7" >速遞員</label></td>
        <td class = "left">18<input type = "checkbox" class = "unity02" name = "q20b_18" id = "q20b_18" value = "1" <?php if (@$ans["q15_18"] == "1") { echo "checked"; } ?>><label for = "q20b_18" > 保安員</label></td>
   </tr>  
   <tr><td class = "left">8<input type = "checkbox"  class = "unity02" name = "q20b_8" id = "q20b_8" value = "1" <?php if (@$ans["q20b_8"] == "1") { echo "checked"; } ?>><label for = "q20b_8" > 信差</label></td>
        <td class = "left">19<input type = "checkbox" class = "unity02" name = "q20b_19" id = "q20b_19" value = "1" <?php if (@$ans["q20b_19"] == "1") { echo "checked"; } ?>><label for = "q20b_19" >  收銀員</label></td>
   </tr>
       <tr><td class = "left">9<input type = "checkbox"  class = "unity02" name = "q20b_9" id = "q20b_9" value = "1" <?php if (@$ans["q20b_9"] == "1") { echo "checked"; } ?>><label for = "q20b_9" > 接線生</label></td>
        <td class = "left">20<input type = "checkbox" class = "unity02" name = "q20b_20" id = "q20b_20" value = "1" <?php if (@$ans["q20b_20"] == "1") { echo "checked"; } ?>><label for = "q20b_20" > 洗頭／髮型助理／美容／按摩</label></td>
   </tr>  
   <tr><td class = "left">10<input type = "checkbox"  class = "unity02" name = "q20b_10" id = "q20b_10" value = "1" <?php if (@$ans["q20b_10"] == "1") { echo "checked"; } ?>><label for = "q20b_10" >辦公室助理</label></td>
        <td class = "left">21<input type = "checkbox" class = "unity02" name = "q20b_21" id = "q20b_21" value = "1" <?php if (@$ans["q20b_21"] == "1") { echo "checked"; } ?>><label for = "q20b_21" > 跟車工人</label></td>
   </tr>
      <tr><td class = "left">11<input type = "checkbox"  class = "unity02" name = "q20b_11" id = "q20b_11" value = "1" <?php if (@$ans["q20b_11"] == "1") { echo "checked"; } ?>><label for = "q20b_11" >清潔工人</label></td>
        <td class = "left">22<input type = "checkbox" class = "unity02" name = "q20b_22" id = "q20b_22" value = "1" <?php if (@$ans["q20b_22"] == "1") { echo "checked"; } ?>><label for = "q20b_22" >家務助理</label></td>
   </tr>
   
</table></center>
</div>
<br>

<div id="g21a" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.21a 在<b><u>過去一個月</b></u>，您主要工作的收入 (包括佣金／獎金／花紅／小費／各類津貼等，但不包括僱主強積金)有多少？ <br>港幣:<input type = "text" name = "q21a" id = "q21a" value = "<?php echo @$q21a; ?>"> 元 </td></tr>
</table></center>
</div>
<br>

<div id="g21b" class="orgbor" ><center>
<table class = "qno">

<tr><td colspan = "3" >Q.21b  您主要工作的地區是？</td></tr>
	<tr><td class = "left">1<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_1" value = "1" <?php if (@$ans["q21b"] == "1") { echo "checked"; } ?>><label for = "q21b_1" >中西區</label></td>
        <td class = "left">8<input type = "radio" class = "unity02" name = "q21b" id = "q21b_8" value = "8" <?php if (@$ans["q21b"] == "8") { echo "checked"; } ?>><label for = "q21b_8" > 黃大仙區</label></td>
		<td class = "left">15<input type = "radio" class = "unity02" name = "q21b" id = "q21b_15" value = "15" <?php if (@$ans["q21b"] == "15") { echo "checked"; } ?>><label for = "q21b_15" >葵青區</label></td>
   </tr>
   	<tr><td class = "left">2<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_2" value = "2" <?php if (@$ans["q21b"] == "2") { echo "checked"; } ?>><label for = "q21b_2" >南區</label></td>
        <td class = "left">9<input type = "radio" class = "unity02" name = "q21b" id = "q21b_9" value = "9" <?php if (@$ans["q21b"] == "9") { echo "checked"; } ?>><label for = "q21b_9" > 觀塘區</label></td>
		<td class = "left">16<input type = "radio" class = "unity02" name = "q21b" id = "q21b_16" value = "16" <?php if (@$ans["q21b"] == "16") { echo "checked"; } ?>><label for = "q21b_16" >屯門區</label></td>
   </tr>
   <tr><td class = "left">3<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_3" value = "3" <?php if (@$ans["q21b"] == "3") { echo "checked"; } ?>><label for = "q21b_3" >灣仔區</label></td>
        <td class = "left">10<input type = "radio" class = "unity02" name = "q21b" id = "q21b_10" value = "10" <?php if (@$ans["q21b"] == "10") { echo "checked"; } ?>><label for = "q21b_10" > 西貢區</label></td>
		<td class = "left">17<input type = "radio" class = "unity02" name = "q21b" id = "q21b_17" value = "17" <?php if (@$ans["q21b"] == "17") { echo "checked"; } ?>><label for = "q21b_17" >元朗區</label></td>
   </tr>
   <tr><td class = "left">4<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_4" value = "4" <?php if (@$ans["q21b"] == "4") { echo "checked"; } ?>><label for = "q21b_4" >東區</label></td>
        <td class = "left">11<input type = "radio" class = "unity02" name = "q21b" id = "q21b_11" value = "11" <?php if (@$ans["q21b"] == "11") { echo "checked"; } ?>><label for = "q21b_11" > 沙田區	</label></td>
		<td class = "left">18<input type = "radio" class = "unity02" name = "q21b" id = "q21b_18" value = "18" <?php if (@$ans["q21b"] == "18") { echo "checked"; } ?>><label for = "q21b_18" >離島區</label></td>
   </tr>
      	<tr><td class = "left">5<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_5" value = "5" <?php if (@$ans["q21b"] == "5") { echo "checked"; } ?>><label for = "q21b_5" >油尖旺區</label></td>
        <td class = "left">12<input type = "radio" class = "unity02" name = "q21b" id = "q21b_12" value = "12" <?php if (@$ans["q21b"] == "12") { echo "checked"; } ?>><label for = "q21b_12" > 大埔區</label></td>
		<td class = "left">19<input type = "radio" class = "unity02" name = "q21b" id = "q21b_23" value = "19" <?php if (@$ans["q21b"] == "19") { echo "checked"; } ?>><label for = "q21b_19" >無固定地區工作</label></td>
   </tr>
   <tr><td class = "left">6<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_6" value = "6" <?php if (@$ans["q21b"] == "6") { echo "checked"; } ?>><label for = "q21b_6" >深水埗區</label></td>
        <td class = "left">13<input type = "radio" class = "unity02" name = "q21b" id = "q21b_13" value = "13" <?php if (@$ans["q21b"] == "13") { echo "checked"; } ?>><label for = "q21b_13" > 北區</label></td>
		<td class = "left">20<input type = "radio" class = "unity02" name = "q21b" id = "q21b_20" value = "20" <?php if (@$ans["q21b"] == "20") { echo "checked"; } ?>><label for = "q21b_23" >不在香港工作</label></td>
   </tr>
   <tr><td class = "left">7<input type = "radio"  class = "unity02" name = "q21b" id = "q21b_7" value = "7" <?php if (@$ans["q21b"] == "7") { echo "checked"; } ?>><label for = "q21b_7" >九龍城區</label></td>
        <td class = "left">14<input type = "radio" class = "unity02" name = "q21b" id = "q21b_14" value = "14" <?php if (@$ans["q21b"] == "14") { echo "checked"; } ?>><label for = "q21b_14" > 荃灣區</label></td>
		<td class = "left">21<input type = "radio" class = "unity02" name = "q21b" id = "q21b_21" value = "21" <?php if (@$ans["q21b"] == "21") { echo "checked"; } ?>><label for = "q21b_21" >其他:</label><input type = "text" name = "q21b_21a" id = "q21b_21a" value = "<?php echo @$q21b_21a; ?>" disabled ></td>
   </tr>
</table></center>
</div>
<br>


<div id="g21c" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.21c 您每月因工作而花的交通費是多少？（只計受訪者）<br>港幣:<input type = "text" name = "q21c" id = "q21c" value = "<?php echo @$q21c; ?>"> 元 </td></tr>
</table></center>
</div>
<br>

<div id="g21d" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.21d  您每月因工作而需外出用膳的費用是多少？（只計受訪者）<br>港幣:<input type = "text" name = "q21d" id = "q21d" value = "<?php echo @$q21d; ?>"> 元 </td></tr>
</table></center>
</div>
<br>


<div id="g22" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.22	若您有多於一份工作，您<b><u>過去一個月</b></u>所有工作的總收入有多少？<u>（若受訪者只有一份工作，則跳問Q.23）</u><br>港幣:<input type = "text" name = "q22" id = "q22" value = "<?php echo @$q22; ?>"> 元 </td></tr>
</table></center>
</div>
<br>

<div id="g23" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.23	您在過去一個月所有工作的總工作時數是多少？<input type = "text" name = "q23" id = "q23" value = "<?php echo @$q23; ?>">  小時 </td></tr>
</table></center>
</div>
<br>

<div id="g24" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.24	您覺得<b><u>現時</u></b>的工作時間如何？</td></tr>
<tr><td class = "left">1.<input type = "radio" name = "q24" id = "q24_1" value = "1" <?php if (@$ans["q3"] == "1") { echo "checked"; } ?>><label for = "q24_1" >很長</label></td></tr>
<tr><td class = "left">2.<input type = "radio" name = "q24" id = "q24_2" value = "2" <?php if (@$ans["q3"] == "2") { echo "checked"; } ?>><label for = "q24_2" >長</label></td></tr>
<tr><td class = "left">3.<input type = "radio" name = "q24" id = "q24_3" value = "3" <?php if (@$ans["q3"] == "3") { echo "checked"; } ?>><label for = "q24_3" > 適中（跳問Q.26）</label></td></tr>
<tr><td class = "left">4.<input type = "radio" name = "q24" id = "q24_4" value = "4" <?php if (@$ans["q3"] == "4") { echo "checked"; } ?>><label for = "q24_4" > 短</label></td></tr>
<tr><td class = "left">5.<input type = "radio" name = "q24" id = "q24_5" value = "5" <?php if (@$ans["q3"] == "5") { echo "checked"; } ?>><label for = "q24_5" >很短</label></td></tr><tr>
</table></center><br>
</div>



<div id="g25" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.25	您期望每星期工作多少個小時才合符您的期望（在您現在身體狀況及家庭條件下）？<input type = "text" name = "q25" id = "q25" value = "<?php echo @$q25; ?>">小時</td></tr>
</table></center><br>
</div>





<div id="g26" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.26	您覺得現時的工作薪酬如何？</td></tr>
<tr><td class = "left">1.<input type = "radio" name = "q26" id = "q26_1" value = "1" <?php if (@$ans["q26"] == "1") { echo "checked"; } ?>><label for = "q26_1" >偏低</label></td></tr>
<tr><td class = "left">2.<input type = "radio" name = "q26" id = "q26_2" value = "2" <?php if (@$ans["q26"] == "2") { echo "checked"; } ?>><label for = "q26_2" >低</label></td></tr>
<tr><td class = "left">3.<input type = "radio" name = "q26" id = "q26_3" value = "3" <?php if (@$ans["q26"] == "3") { echo "checked"; } ?>><label for = "q26_3" >  合理（跳問Q.28）</label></td></tr>
<tr><td class = "left">4.<input type = "radio" name = "q26" id = "q26_4" value = "4" <?php if (@$ans["q26"] == "4") { echo "checked"; } ?>><label for = "q26_4" > 高</label></td></tr>
<tr><td class = "left">5.<input type = "radio" name = "q26" id = "q26_5" value = "5" <?php if (@$ans["q26"] == "5") { echo "checked"; } ?>><label for = "q26_5" >偏高</label></td></tr><tr>
</table></center><br>
</div>


<div id="g27" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.27	您期望月入多少才合符您的期望（在您現在身體狀況及家庭條件下）？<br>港幣<input type = "text" name = "q27" id = "q27" value = "<?php echo @$q27; ?>">元</td></tr>
</table></center><br>
</div>





<div id="g28" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.28	您會找另一份收入相對高而工時較長的工作嗎？</td></tr>
<tr><td class = "left">1.<input type = "radio" name = "q28" id = "q28_1" value = "1" <?php if (@$ans["q28"] == "1") { echo "checked"; } ?>><label for = "q28_1" >肯定會</label></td></tr>
<tr><td class = "left">2.<input type = "radio" name = "q28" id = "q28_2" value = "2" <?php if (@$ans["q28"] == "2") { echo "checked"; } ?>><label for = "q28_2" >有機會</label></td></tr>
<tr><td class = "left">3.<input type = "radio" name = "q28" id = "q28_3" value = "3" <?php if (@$ans["q28"] == "3") { echo "checked"; } ?>><label for = "q28_3" >不肯定</label></td></tr>
<tr><td class = "left">4.<input type = "radio" name = "q28" id = "q28_4" value = "4" <?php if (@$ans["q28"] == "4") { echo "checked"; } ?>><label for = "q28_4" > 機會不大</label></td></tr>
<tr><td class = "left">5.<input type = "radio" name = "q28" id = "q28_5" value = "5" <?php if (@$ans["q28"] == "5") { echo "checked"; } ?>><label for = "q28_5" >肯定不會</label></td></tr><tr>
</table></center>
</div>
<br>


<div id="g29pre" class="orgbor" ><center>
<table class = "qno">
    <tr><td>Q.29	以下是一些關於繼續投入現時這份工作的原因，您是否同意以下句子？<b>（如您現任多份兼職工作，請以任職時間最長的一份作答）</b></td><tr>
</table></center>
</div>

<div id="g29" class="orgbor" ><center>
<table class = "qno2">
	 <tr  class = "nocol4"  ><td>繼續投入現時這份工作的原因：</td><td>1 (非常不同意)</td><td>2(不同意)</td><td>3(有點不同意)</td><td>4(中立)</td><td>5(有點同意)</td><td>6(同意)</td><td>7(非常同意)</td></tr>
	    <tr><td>1.	我很享受做現在這份工作。</td>
	        <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_1" value = "1" <?php if (@$ans["q29_1"] == "1") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_2" value = "2" <?php if (@$ans["q29_1"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_3" value = "3" <?php if (@$ans["q29_1"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_4" value = "4" <?php if (@$ans["q29_1"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_5" value = "5" <?php if (@$ans["q29_1"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_6" value = "6" <?php if (@$ans["q29_1"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_1" id = "q29_1_7" value = "7" <?php if (@$ans["q29_1"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol3" ><td>2.	我在這份工得到樂趣。</td>
	        <td class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_1" value = "1" <?php if (@$ans["q29_2"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_2" value = "2" <?php if (@$ans["q29_2"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_3" value = "3" <?php if (@$ans["q29_2"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_4" value = "4" <?php if (@$ans["q29_2"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_5" value = "5" <?php if (@$ans["q29_2"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_6" value = "6" <?php if (@$ans["q29_2"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_2" id = "q29_2_7" value = "7" <?php if (@$ans["q29_2"] == "7") { echo "checked"; } ?>></td>
	 </tr>
     	    <tr><td>3.	這份工作帶給我愉快的時刻。</td>
	        <td class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_1" value = "1" <?php if (@$ans["q29_3"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_2" value = "2" <?php if (@$ans["q29_3"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_3" value = "3" <?php if (@$ans["q29_3"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_4" value = "4" <?php if (@$ans["q29_3"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_5" value = "5" <?php if (@$ans["q29_3"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_6" value = "6" <?php if (@$ans["q29_3"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_3" id = "q29_3_7" value = "7" <?php if (@$ans["q29_3"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol3" ><td>4.	我揀這份工作因為它能讓我達成自己的人生目標。</td>
	        <td class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_1" value = "1" <?php if (@$ans["q29_4"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_2" value = "2" <?php if (@$ans["q29_4"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_3" value = "3" <?php if (@$ans["q29_4"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_4" value = "4" <?php if (@$ans["q29_4"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_5" value = "5" <?php if (@$ans["q29_4"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_6" value = "6" <?php if (@$ans["q29_4"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_4" id = "q29_4_7" value = "7" <?php if (@$ans["q29_4"] == "7") { echo "checked"; } ?>></td>
	 </tr>
     	    <tr><td>5.	這份工作實現了我的事業計劃。</td>
	        <td class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_1" value = "1" <?php if (@$ans["q29_5"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_2" value = "2" <?php if (@$ans["q29_5"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_3" value = "3" <?php if (@$ans["q29_5"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_4" value = "4" <?php if (@$ans["q29_5"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_5" value = "5" <?php if (@$ans["q29_5"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_6" value = "6" <?php if (@$ans["q29_5"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_5" id = "q29_5_7" value = "7" <?php if (@$ans["q29_5"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol3" ><td>6.	這份工作與我的個人價值觀相符。</td>
	        <td class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_1" value = "1" <?php if (@$ans["q29_6"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_2" value = "2" <?php if (@$ans["q29_6"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_3" value = "3" <?php if (@$ans["q29_6"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_4" value = "4" <?php if (@$ans["q29_6"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_5" value = "5" <?php if (@$ans["q29_6"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_6" value = "6" <?php if (@$ans["q29_6"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_6" id = "q29_6_7" value = "7" <?php if (@$ans["q29_6"] == "5") { echo "checked"; } ?>></td>
	 </tr>
     	    <tr><td>7.	我要在這份工作做到最好，我想出人頭地。</td>
	        <td class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_1" value = "1" <?php if (@$ans["q29_7"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_2" value = "2" <?php if (@$ans["q29_7"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_3" value = "3" <?php if (@$ans["q29_7"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_4" value = "4" <?php if (@$ans["q29_7"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_5" value = "5" <?php if (@$ans["q29_7"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_6" value = "6" <?php if (@$ans["q29_7"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_7" id = "q29_7_7" value = "7" <?php if (@$ans["q29_7"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol3" ><td>8.	這份工作對我來說很重要，我不想失敗。</td>
	        <td class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_1" value = "1" <?php if (@$ans["q29_8"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_2" value = "2" <?php if (@$ans["q29_8"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_3" value = "3" <?php if (@$ans["q29_8"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_4" value = "4" <?php if (@$ans["q29_8"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_5" value = "5" <?php if (@$ans["q29_8"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_6" value = "6" <?php if (@$ans["q29_8"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_8" id = "q29_8_7" value = "7" <?php if (@$ans["q29_8"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	 	    <tr><td>9.	這份工作對我個人聲譽很重要。</td>
	        <td class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_1" value = "1" <?php if (@$ans["q29_9"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_2" value = "2" <?php if (@$ans["q29_9"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_3" value = "3" <?php if (@$ans["q29_9"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_4" value = "4" <?php if (@$ans["q29_9"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_5" value = "5" <?php if (@$ans["q29_9"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_6" value = "6" <?php if (@$ans["q29_9"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_9" id = "q29_9_7" value = "7" <?php if (@$ans["q29_9"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol3" ><td>10.	這份工作能讓我達到一定程度的生活水平。</td>
	        <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_1" value = "1" <?php if (@$ans["q29_10"] == "1") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_2" value = "2" <?php if (@$ans["q29_10"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_3" value = "3" <?php if (@$ans["q29_10"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_4" value = "4" <?php if (@$ans["q29_10"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_5" value = "5" <?php if (@$ans["q29_10"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_6" value = "6" <?php if (@$ans["q29_10"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_10" id = "q29_10_7" value = "7" <?php if (@$ans["q29_10"] == "7") { echo "checked"; } ?>></td>
	 </tr>
     	    <tr><td>11.	這份工作能讓我賺大錢。</td>
	        <td class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_1" value = "1" <?php if (@$ans["q29_11"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_2" value = "2" <?php if (@$ans["q29_11"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_3" value = "3" <?php if (@$ans["q29_11"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_4" value = "4" <?php if (@$ans["q29_11"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_5" value = "5" <?php if (@$ans["q29_11"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_6" value = "6" <?php if (@$ans["q29_11"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_11" id = "q29_11_7" value = "7" <?php if (@$ans["q29_11"] == "7") { echo "checked"; } ?>></td>
	 </tr>
	  <tr  class = "nocol3" ><td>12.	我做這份是睇錢份上。</td>
	        <td class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_1" value = "1" <?php if (@$ans["q29_12"] == "1") { echo "checked"; } ?>></td>
		    <td  class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_2" value = "2" <?php if (@$ans["q29_12"] == "2") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_3" value = "3" <?php if (@$ans["q29_12"] == "3") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_4" value = "4" <?php if (@$ans["q29_12"] == "4") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_5" value = "5" <?php if (@$ans["q29_12"] == "5") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_6" value = "6" <?php if (@$ans["q29_12"] == "6") { echo "checked"; } ?>></td>
		    <td class="cen" ><input type = "radio" name = "q29_12" id = "q29_12_7" value = "7" <?php if (@$ans["q29_12"] == "7") { echo "checked"; } ?>></td>
	 </tr>
</table></center>
</div>
<br>

</div>