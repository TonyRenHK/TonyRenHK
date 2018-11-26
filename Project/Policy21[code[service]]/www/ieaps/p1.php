

<head>
	<title>「進一步鼓勵『自力更生綜合就業援助計劃』綜援受助人就業的獎勵計劃」調查</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery.js"></script>
	<script language="javascript" src="ieaps.js"></script> 
	<link rel="stylesheet" type="text/css" href="ieaps.css" />
	<link rel="stylesheet" href="jquery-ui.css">
	<script src="jquery-ui.js"></script>
</head>

<!-----Header----------------------------------------------->
<?php
date_default_timezone_set("Asia/Hong_Kong");
$tt = time();
$stday = date("Y-m-d",$tt);
$sttime = date("H:i",$tt);
?>

<div id="g0" class="orgbor" ><center>
<table class = "qno">
    <tr>
	    <td>問卷編號﹕<input type = "text" name = "sce" id = "sc" value = "<?php echo @$sc; ?>"></td>
	    <td>訪問員編號 ﹕E <input type = "text" name = "eno1" id = "eno1" value = "<?php echo @$eno; ?>"></td>
    </tr>
	<tr>
	    <td>服務單位：<input type = "text" name = "com" id = "com1" value = "<?php echo @$com; ?>"></td>
	    <td>個案類別：<select name="q_case" id="q_case">
		               <option value=" " <?php echo @$ans["q_case"] == " " ?"checked":""; ?>> </option>
		               <option value="OEAS" <?php echo @$ans["q_case"] == "OEAS" ?"checked":""; ?>>OEAS</option>
		               <option value="SEAS" <?php echo @$ans["q_case"] == "SEAS" ?"checked":""; ?>>SEAS</option>
		               <option value="MY STEP" <?php echo @$ans["q_case"] == "MY STEP" ?"checked":""; ?>>MY STEP</option>
		               <option value="ND" <?php echo @$ans["q_case"] == "ND" ?"checked":""; ?>>ND</option>
		               </select>
		</td>
    </tr>
	<tr>
	    <td>個案性質：<select name="q_nature" id="q_nature">
		               <option value=" " <?php echo @$ans["q_nature"] == " " ?"checked":""; ?>> </option>
		               <option value="OA" <?php echo @$ans["q_nature"] == "OA" ?"checked":""; ?>>OA </option>
		               <option value="PD" <?php echo @$ans["q_nature"] == "PD" ?"checked":""; ?>> PD </option>
		               <option value="IH" <?php echo @$ans["q_nature"] == "IH" ?"checked":""; ?>> IH </option>
		               <option value="SP" <?php echo @$ans["q_nature"] == "SP" ?"checked":""; ?>>SP</option>
					   <option value="LE" <?php echo @$ans["q_nature"] == "LE" ?"checked":""; ?>> LE </option>
		               <option value="UN" <?php echo @$ans["q_nature"] == "UN" ?"checked":""; ?>> UN </option>
		               <option value="OT" <?php echo @$ans["q_nature"] == "OT" ?"checked":""; ?>> OT </option>
		               </select>
		</td>
		<td>合資格領取綜援成員數目：<input type = "text" name = "q_num" id = "q_num" value = "<?php echo @$q_num; ?>"></td>
    </tr>
		<tr>
	    <td>組別：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="q_class" id="q_class">
		               <option value=" " <?php echo @$ans["q_class"] == " " ?"checked":""; ?>> </option>
		               <option value="SG" <?php echo @$ans["q_class"] == "SG" ?"checked":""; ?>>SG </option>
		               <option value="NPG" <?php echo @$ans["q_class"] == "NPG" ?"checked":""; ?>> NPG </option>
		               <option value="CG" <?php echo @$ans["q_class"] == "CG" ?"checked":""; ?>> CG</option>>
		               </select>
		</td>
	     <td>調查時段：<select name="q_time" id="q_time">
		               <option value=" " <?php echo @$ans["q_time"] == " " ?"checked":""; ?>> </option>
		               <option value="T0" <?php echo @$ans["q_time"] == "T0" ?"checked":""; ?>>TO </option>
		               <option value="T2" <?php echo @$ans["q_time"] == "T2" ?"checked":""; ?>> T2 </option>
		               <option value="T4" <?php echo @$ans["q_time"] == "T4" ?"checked":""; ?>> T4 </option>
		               <option value="T6" <?php echo @$ans["q_time"] == "T6" ?"checked":""; ?>>T6</option>
					   <option value="T7" <?php echo @$ans["q_time"] == "T7" ?"checked":""; ?>> T7 </option>
		               </select>
		</td>
    </tr>
	
	<tr><td>日期：<?php echo @$stday; ?></td><td>時間：<?php echo @$sttime; ?></td></tr>
</table>
</center></div>
<br>

<div id="g1pre" class="orgbor" ><center>
<table class = "qno">
<tr><td class= "left h2strong" colspan = "2" >甲. 個人與住戶資料</td></tr>
<tr><td class= "left h2strong" colspan = "2" >以下問題有關<u>您及您同住家人</u>的資料：</td></tr>
</table></center>
</div>
</center></div>


<div id="g1" class="orgbor" ><center>
<table class = "qno" >
<tr><td colspan = "2">Q.1	同住家人的數目（包括您）：<input type = "text" name = "q1" id = "q1" value = "<?php echo @$q1; ?>"> 人  （如Q.1 = 合資格領取綜援成員數目，跳至Q.3）</td></tr>
</table></center><br>
</div>


<div id="g2" class="orgbor" ><center>
<table class = "qno">
<tr><td colspan = "2">Q.2	不合資格成員（非綜援人士）數目：<input type = "text" name = "q2" id = "q2" value = "<?php echo @$q2; ?>"> 人（同住家人的數目－合資格領取綜援成員數目）</td></tr>
<tr><td><i>（有關不合資格成員的資料，如有）<i></td></tr>
</table></center>
</div>

<!-----Q2a-Q2f----------------------------------------------->

<div id="g2a_f" class="orgbor" ><center>
<table class = "qno1" >
	<tr class = "nocol4" ><td>家庭成員</td>                      
	<?php
		for ($i = 1 ; $i <= 20 ; $i++) {
		 echo "<td class=\"cen pc".$i."\"><b>".$i."</b></td>";
		}
    ?>
	
	
	 <tr class = "background2" ><td>Q.2a  <br>與受訪者的關係  </td>
	 <?php
		   for ($i = 1 ; $i <= 20 ; $i++) {                                
		   echo "<td class=\"pc".$i."\">";                                 
		   echo "<select name= \"q2a_" .$i. " id = \"q2a_".$i." >";
		   echo "<option value =\" \"  ".(@$ans["q2a_".$i.""] == " " ? "checked" : "")."> </option>";   
		   echo "<option value =\"1\"  ".(@$ans["q2a_".$i.""] == "1" ? "checked" : "").">1.	配偶</option>";
		   echo "<option value =\"2\"  ".(@$ans["q2a_".$i.""] == "2" ? "checked" : "").">2.	同居</option>";
		   echo "<option value =\"3\"  ".(@$ans["q2a_".$i.""] == "3" ? "checked" : "").">3.	兒子 ／ 女兒</option>";
		   echo "<option value =\"4\"  ".(@$ans["q2a_".$i.""] == "4" ? "checked" : "").">4.	女婿 ／ 媳婦</option>";	
		   echo "<option value =\"5\"  ".(@$ans["q2a_".$i.""] == "5" ? "checked" : "").">5.	爸爸 ／ 媽媽	</option>";
		   echo "<option value =\"6\"  ".(@$ans["q2a_".$i.""] == "6" ? "checked" : "").">6.	岳父 ／ 岳母</option>";
		   echo "<option value =\"7\"  ".(@$ans["q2a_".$i.""] == "7" ? "checked" : "").">7.	兄弟姐妹</option>";
		   echo "<option value =\"8\"  ".(@$ans["q2a_".$i.""] == "8" ? "checked" : "").">8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>";
		   echo "<option value =\"9\"  ".(@$ans["q2a_".$i.""] == "9" ? "checked" : "").">9.	孫子 ／ 孫女／外孫子 ／外孫女</option>";
		   echo "<option value =\"10\"  ".(@$ans["q2a_".$i.""] == "10" ? "checked" : "").">10.	祖父 ／ 祖母／外祖父／外祖母</option>";
		   echo "<option value =\"11\"  ".(@$ans["q2a_".$i.""] == "11" ? "checked" : "").">11.	其他親戚</option>";
		   echo "<option value =\"12\"  ".(@$ans["q2a_".$i.""] == "12" ? "checked" : "").">12.	其他：</option></select>";
           echo "<br>請註明:<input type = \" text \" name = \"q2a_".$i."_12\"  id = \" q2a_".$i."_12\" value =\"".(@$ans["q2a_".$i."_12"])."\">";
           echo "</td>";
		}
    ?>
	</tr>
	
		<tr class = "background1" ><td>Q.2b  出生年份:</td>
	     <?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                 
						  echo "<td class= \"left pc".$i." \"><input type = \" text \" name = \"q2b_".$i."  id = \" q2b_".$i." value =\"".(@$ans["q2b_".$i.""])."\"></td>";
						  
		             }
	
	     ?>
     </tr>
	 
	 	<tr  class = "left background2" ><td>Q.2c  性別</td>
	<?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                  echo "<td class= \"left pc".$i." \"><input type = \"radio\" name = \"q2c_".$i."\" id = \"q2c_".$i."_1\" value = \"1\" ".(@$ans["q2c_".$i.""] == "1" ? "checked" : "")." ><label for = \"q2c_".$i."_1\">1.	男</label>";
						  echo "<br><input type = \"radio\" name = \"q2c_".$i."\" id = \"q2c_".$i."_2\" value = \"2\" ".(@$ans["q2c_".$i.""] == "2" ? "checked" : "")." ><label for = \"q2c_".$i."_2\">2.	女 </label>";     
						  echo "</td>";
						  
		             }
	
	     ?>
	
	 </tr>
	 <tr  class = "left background1" ><td>Q.2d  是否新來港人士?</td>
	<?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                  echo "<td class= \"left pc".$i." \"><input type = \"radio\" name = \"q2d_".$i."\" id = \"q2d_".$i."_1\" value = \"1\" ".(@$ans["q2d_".$i.""] == "1" ? "checked" : "")." ><label for = \"q2d_".$i."_1\">1.	是， 在香港居住了</label><input type = \" text \" name = \"q2d_".$i."_1a\"  id = \" q2d_".$i."_1a\" value =\"".(@$ans["q2d_".$i."_1a"])."\" >";
						  echo "<br><input type = \"radio\" name = \"q2d_".$i."\" id = \"q2d_".$i."_2\" value = \"2\" ".(@$ans["q2d_".$i.""] == "2" ? "checked" : "")." ><label for = \"q2d_".$i."_2\">2.	否  </label>";     
						  echo "</td>";
						  
		             }
	
	     ?>
	
	 </tr>
	 
	  <tr class = "background2" ><td>Q.2e  經濟就業狀況：</td>
	 <?php
		   for ($i = 1 ; $i <= 20 ; $i++) {                                
		   echo "<td class=\"pc".$i."\">";                                 
		   echo "<select name= \"q2e_" .$i. " id = \"q2e_".$i." >";
		   echo "<option value =\" \"  ".(@$ans["q2e_".$i.""] == " " ? "checked" : "")."> </option>";   
		   echo "<option value =\"1\"  ".(@$ans["q2e_".$i.""] == "1" ? "checked" : "").">1.	未適齡入學</option>";
		   echo "<option value =\"2\"  ".(@$ans["q2e_".$i.""] == "2" ? "checked" : "").">2.	學生</option>";
		   echo "<option value =\"3\"  ".(@$ans["q2e_".$i.""] == "3" ? "checked" : "").">3.	全職僱員</option>";
		   echo "<option value =\"4\"  ".(@$ans["q2e_".$i.""] == "4" ? "checked" : "").">4.	兼職僱員</option>";	
		   echo "<option value =\"5\"  ".(@$ans["q2e_".$i.""] == "5" ? "checked" : "").">5.	全職自僱／僱主</option>";
		   echo "<option value =\"6\"  ".(@$ans["q2e_".$i.""] == "6" ? "checked" : "").">6.	兼職自僱／僱主</option>";
		   echo "<option value =\"7\"  ".(@$ans["q2e_".$i.""] == "7" ? "checked" : "").">7.	失業</option>";
		   echo "<option value =\"8\"  ".(@$ans["q2e_".$i.""] == "8" ? "checked" : "").">8.	已退休</option>";
		   echo "<option value =\"9\"  ".(@$ans["q2e_".$i.""] == "9" ? "checked" : "").">9.	家務料理者</option>";
		   echo "<option value =\"10\"  ".(@$ans["q2e_".$i.""] == "10" ? "checked" : "").">10.	長期病患 ／永久傷殘</option>";
		   echo "<option value =\"11\"  ".(@$ans["q2e_".$i.""] == "11" ? "checked" : "").">11.	其他</option>";
           echo "<br>請註明:<input type = \" text \" name = \"q2e_".$i."_11\"  id = \" q2e_".$i."_11\" value =\"".(@$ans["q2e_".$i."_11"])."\">";
           echo "</td>";
		}
    ?>
	</tr>
	 
	 	  <tr class = "background1" ><td>Q.2f  身體狀況：</td>
	 <?php
		   for ($i = 1 ; $i <= 20 ; $i++) {                                
		   echo "<td class=\"pc".$i."\">";                                 
		   echo "<select name= \"q2f_" .$i. " id = \"q2f_".$i." >";
		   echo "<option value =\" \"  ".(@$ans["q2f_".$i.""] == " " ? "checked" : "")."> </option>";   
		   echo "<option value =\"1\"  ".(@$ans["q2f_".$i.""] == "1" ? "checked" : "").">1.	健全人士</option>";
		   echo "<option value =\"2\"  ".(@$ans["q2f_".$i.""] == "2" ? "checked" : "").">2.	長期病患者</option>";
		   echo "<option value =\"3\"  ".(@$ans["q2f_".$i.""] == "3" ? "checked" : "").">3.	永久傷殘人士</option>";
		   echo "<option value =\"4\"  ".(@$ans["q2f_".$i.""] == "4" ? "checked" : "").">4.	長者</option>";	
           echo "</td>";
		}
    ?>
	</tr>
</table></center><br>
</div>




<div id="g3" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.3	您的家庭狀況 （考慮自己及同住家人）：</td></tr>
<tr><td class = "left">1.<input type = "radio" name = "q3" id = "q3_1" value = "1" <?php if (@$ans["q3"] == "1") { echo "checked"; } ?>><label for = "q3_1" >沒有家人同住</label></td></tr>
<tr><td class = "left">2.<input type = "radio" name = "q3" id = "q3_2" value = "2" <?php if (@$ans["q3"] == "2") { echo "checked"; } ?>><label for = "q3_2" >單親家庭（有未滿18歲子女）（最年幼子女的年齡</label>:<input type = "text" name = "q3_2a" id = "q3_2a" value = "<?php echo @$q3_2a; ?>" disabled>）</td></tr>
<tr><td class = "left">3.<input type = "radio" name = "q3" id = "q3_3" value = "3" <?php if (@$ans["q3"] == "3") { echo "checked"; } ?>><label for = "q3_3" >單親與成年子女（18歲或以上）同住家庭</label></td></tr>
<tr><td class = "left">4.<input type = "radio" name = "q3" id = "q3_4" value = "4" <?php if (@$ans["q3"] == "4") { echo "checked"; } ?>><label for = "q3_4" >核心家庭（父母與子女兩代的家庭）</label></td></tr>
<tr><td class = "left">5.<input type = "radio" name = "q3" id = "q3_5" value = "5" <?php if (@$ans["q3"] == "5") { echo "checked"; } ?>><label for = "q3_5" >夫妻二人沒有子女家庭</label></td></tr><tr>
<tr><td class = "left">6.<input type = "radio" name = "q3" id = "q3_6" value = "6" <?php if (@$ans["q3"] == "6") { echo "checked"; } ?>><label for = "q3_6" >大家庭（祖孫三代或以上的家庭）</label></td></tr>
<tr><td class = "left">7.<input type = "radio" name = "q3" id = "q3_7" value = "7" <?php if (@$ans["q3"] == "7") { echo "checked"; } ?>><label for = "q3_7" >其他（請註明）：</label><input type = "text" name = "q3_7a" id = "q3_7a" value = "<?php echo @$q3_7a; ?>" disabled > </td></tr>
</table></center>
</div>
<br>

<div id="g4" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.4	請問您和您家中同住成員（年滿15歲或以上）有沒有從事有薪工作？</td></tr>
<tr><td class = "left">1.<input type = "radio" name = "q4" id = "q4_1" value = "1" <?php if (@$ans["q4"] == "1") { echo "checked"; } ?>><label for = "q4_1" > 有，</label><input type = "text" name = "q4_1a" id = "q4_1a" value = "<?php echo @$q4_1a; ?>" disabled >位</td></tr>
<tr><td class = "left">2.<input type = "radio" name = "q4" id = "q4_2" value = "2" <?php if (@$ans["q4"] == "2") { echo "checked"; } ?>><label for = "q4_2" >沒有 （跳問Q.6）</label></td></tr>

</table></center>
</div>
<br>


<div id="g5pre" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.5	家中所有同住成員（包括自己、合資格及不合資格成員，如適用）的個人每月收入：</td></tr>
</table></center>
</div>


<!---------------------------------------------change----------------------------------------------------------------------->

<div id="g5ae" class="orgbor" ><center>
<table class = "qno1" >
	<tr class = "nocol4" ><td>家庭成員</td>                      
	<?php
		for ($i = 1 ; $i <= 20 ; $i++) {
		 echo "<td class=\"cen pc5_".$i."\"><b>".$i."</b></td>";
		}
    ?>
	</tr>
	
    <tr class = "nocol1" ><td>Q.5a  <br>與受訪者的關係  </td>
	 	 <td class="cen pc5_1" ><b>受訪者</b> </td>
    <?php
		   for ($i = 2 ; $i <= 20 ; $i++) {                                 //a
		   echo "<td class=\"pc5_".$i."\">";                                 //class= "pc5_i"
		   echo "<select name= \"q5a_".$i. " id = \"q5a_".$i." >";
		   echo "<option value =\" \"  ".(@$ans["q5a".$i."_2"] == " " ? "checked" : "")."> </option>";   //q5_2_2  q5_2_3    q5_20_3
		   echo "<option value =\"1\"  ".(@$ans["q5a".$i."_2"] == "1" ? "checked" : "").">1.	配偶</option>";
		   echo "<option value =\"2\"  ".(@$ans["q5a".$i."_2"] == "2" ? "checked" : "").">2.	同居</option>";
		   echo "<option value =\"3\"  ".(@$ans["q5a".$i."_2"] == "3" ? "checked" : "").">3.	兒子 ／ 女兒</option>";
		   echo "<option value =\"4\"  ".(@$ans["q5a".$i."_2"] == "4" ? "checked" : "").">4.	女婿 ／ 媳婦</option>";	
		   echo "<option value =\"5\"  ".(@$ans["q5a".$i."_2"] == "5" ? "checked" : "").">5.	爸爸 ／ 媽媽	</option>";
		   echo "<option value =\"6\"  ".(@$ans["q5a".$i."_2"] == "6" ? "checked" : "").">6.	岳父 ／ 岳母</option>";
		   echo "<option value =\"7\"  ".(@$ans["q5a".$i."_2"] == "7" ? "checked" : "").">7.	兄弟姐妹</option>";
		   echo "<option value =\"8\"  ".(@$ans["q5a".$i."_2"] == "8" ? "checked" : "").">8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>";
		   echo "<option value =\"9\"  ".(@$ans["q5a".$i."_2"] == "9" ? "checked" : "").">9.	孫子 ／ 孫女／外孫子 ／外孫女</option>";
		   echo "<option value =\"10\"  ".(@$ans["q5a".$i."_2"] == "10" ? "checked" : "").">10.	祖父 ／ 祖母／外祖父／外祖母</option>";
		   echo "<option value =\"11\"  ".(@$ans["q5a".$i."_2"] == "11" ? "checked" : "").">11.	其他親戚</option>";
		   echo "<option value =\"12\"  ".(@$ans["q5a".$i."_2"] == "12" ? "checked" : "").">12.	其他：</option></select>";
           echo "<br>請註明:<input type = \" text \" name = \"q5b_".$i."_12\"  id = \" q5b_".$i."_12\" value =\"".(@$ans["q5b_".$i."_12"])."\">";
           echo "</td>";
		}
    ?>
	</tr>
     
	<tr class = "background2" ><td>Q.5b  每月工作收入（上個月）：(港幣$)</td>
	     <?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                  //echo "<td class= \"cen pc5_".$i." \"><input type = \" text \" name = \"q5b_".$i.\"  id = \" q5b_".$i.\" value = \" ".(@$ans["q5b_".$i.""])." \"      ></td>";
						  echo "<td class= \"left pc5_".$i." \"><input type = \" text \" name = \"q5b_".$i."  id = \" q5b_".$i." value =\"".(@$ans["q5b_".$i.""])."\"></td>";
						  
		             }
	
	     ?>
     </tr>
	 
	<tr  class = "left nocol1" ><td>Q.5c  合資格綜援人士</td>
	<?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                  echo "<td class= \"left pc5_".$i." \"><input type = \"radio\" name = \"q5c_".$i."\" id = \"q5c_".$i."_1\" value = \"1\" ".(@$ans["q5c_".$i.""] == "1" ? "checked" : "")." ><label for = \"q5c_".$i."_1\">1.	是</label>";
						  echo "<br><input type = \"radio\" name = \"q5c_".$i."\" id = \"q5c_".$i."_2\" value = \"2\" ".(@$ans["q5c_".$i.""] == "2" ? "checked" : "")." ><label for = \"q5c_".$i."_2\">2.	否（跳問Q.5e）</label>";     
						  echo "</td>";
						  
		             }
	
	     ?>
	
	 </tr>
	 	<tr class = "background2" ><td>Q.5d  豁免入息金額：(港幣$)</td>
	     <?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                  //echo "<td class= \"cen pc5_".$i." \"><input type = \" text \" name = \"q5b_".$i.\"  id = \" q5b_".$i.\" value = \" ".(@$ans["q5b_".$i.""])." \"      ></td>";
						  echo "<td class= \"left pc5_".$i." \"><input type = \" text \" name = \"q5d_".$i."  id = \" q5d_".$i." value =\"".(@$ans["q5d_".$i.""])."\"></td>";
						  
		             }
	
	     ?>
     </tr>
	 	<tr  class = "left nocol1" ><td>Q.5e  有沒有領取「鼓勵就業交通津貼」？</td>
	 	<?php
	          		for ($i = 1 ; $i <= 20 ; $i++) {
		                  echo "<td class= \"left pc5_".$i." \"><input type = \"radio\" name = \"q5e_".$i."\" id = \"q5e_".$i."_1\" value = \"1\" ".(@$ans["q5e_".$i.""] == "1" ? "checked" : "")." ><label for = \"q5e_".$i."_1\">1.有</label>";
						  echo "<br><input type = \"radio\" name = \"q5e_".$i."\" id = \"q5e_".$i."_2\" value = \"2\" ".(@$ans["q5e_".$i.""] == "2" ? "checked" : "")." ><label for = \"q5e_".$i."_2\">2.沒有</label>";     
						  echo "</td>";
						  
		             }
	
	     ?>
	
	 </tr>
</table></center><br>
</div>






<!---------------------------------------------change----------------------------------------------------------------------->

<div id="g6" class="orgbor" ><center>
<table class = "qno">
     <tr><td  colspan = "3" >Q.6	除了綜援的金額資助及工作收入／「鼓勵就業交通津貼」外，請問您<b><u>及</u></b>同住家庭成員（包括沒有領取綜援的成員）有沒有其他收入來源？</td></tr>
     <tr><td class = "left">1.<input type = "radio" name = "q6" id = "q6_1" value = "1" <?php if (@$ans["q6"] == "1") { echo "checked"; } ?>><label for = "q6_1" > 有</label></td><td>（Q.6a  每月多少？港幣<input type = "text" name = "q6_1a" id = "q6_1a" value = "<?php echo @$q6_1a; ?>" disabled >元）</td></tr>
     <tr><td class = "left">2.<input type = "radio" name = "q6" id = "q6_2" value = "2" <?php if (@$ans["q6"] == "2") { echo "checked"; } ?>><label for = "q6_2" >沒有 </label></td></tr>

</table></center>
</div>
<br>

<div id="g7" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.7	請問你知道什麼是「豁免入息金額」*嗎？</td><tr>
<tr><td class = "left">1.<input type = "radio" name = "q7" id = "q7_1" value = "1" <?php if (@$ans["q7"] == "1") { echo "checked"; } ?>><label for = "q7_1" > 知道</label></td></tr>
<tr><td class = "left">2.<input type = "radio" name = "q7" id = "q7_2" value = "2" <?php if (@$ans["q7"] == "2") { echo "checked"; } ?>><label for = "q7_2" >不知道</label></td></tr>
<tr><td>*「豁免入息金額」安排是自力更生支援計劃的其中一項措施，旨在鼓勵上述有工作能力的綜援受助人求職和持續就業。在安排下，受助人每月從工作賺取的部分入息無須在援助金額中扣除。現時每人每月工作收入最高豁免入息金額為2,500元(即首800元入息獲全數豁免，繼後3,400元獲半數豁免(800+3,400/2=2,500)。每月工作收入高於4,200元的部份則不獲豁免)。<td><tr>
</table></center>
</div>
<br>

<div id="g8pre" class="orgbor" ><center>
<table class = "qno">
    <tr><td>Q.8	請問您同意以下有關「豁免入息金額」的句子嗎？</td><tr>
</table></center>
</div>




<div id="g8" class="orgbor" ><center>
<table class = "qno2">
	 <tr class="nocol4" ><td>&nbsp;</td><td class="cen" >1 (非常不同意)</td><td class="cen" >2(不同意)</td><td class="cen" >3(中立)</td><td class="cen" >4(同意)</td><td class="cen" >5(非常同意)</td></tr>
     <tr ><td>1.	豁免入息金額能鼓勵我求職／持續就業</td>
	    <td class="cen" ><input type = "radio" name = "q8_1" id = "q8_1_1" value = "1" <?php if (@$ans["q8_1"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_1" id = "q8_1_2" value = "2" <?php if (@$ans["q8_1"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_1" id = "q8_1_3" value = "3" <?php if (@$ans["q8_1"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_1" id = "q8_1_4" value = "4" <?php if (@$ans["q8_1"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_1" id = "q8_1_5" value = "5" <?php if (@$ans["q8_1"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "background3" ><td>2.	如果沒有豁免入息金額，我負擔不起日常生活基本開支</td>
	    <td class="cen" ><input type = "radio" name = "q8_2" id = "q8_2_1" value = "1" <?php if (@$ans["q8_2"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_2" id = "q8_2_2" value = "2" <?php if (@$ans["q8_2"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_2" id = "q8_2_3" value = "3" <?php if (@$ans["q8_2"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_2" id = "q8_2_4" value = "4" <?php if (@$ans["q8_2"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_2" id = "q8_2_5" value = "5" <?php if (@$ans["q8_2"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr><td>3.	豁免入息金額讓我能購買一些東西（尤其是非必需品）給自己及家人<br>（如酒、煙、偶爾看電影、買玩具給孩子）</td>
	    <td class="cen" ><input type = "radio" name = "q8_3" id = "q8_3_1" value = "1" <?php if (@$ans["q8_3"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_3" id = "q8_3_2" value = "2" <?php if (@$ans["q8_3"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_3" id = "q8_3_3" value = "3" <?php if (@$ans["q8_3"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_3" id = "q8_3_4" value = "4" <?php if (@$ans["q8_3"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_3" id = "q8_3_5" value = "5" <?php if (@$ans["q8_3"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	      <tr class = "background3" ><td>4.	豁免入息金額能讓我有個人儲蓄</td>
	    <td class="cen" ><input type = "radio" name = "q8_4" id = "q8_4_1" value = "1" <?php if (@$ans["q8_4"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_4" id = "q8_4_2" value = "2" <?php if (@$ans["q8_4"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_4" id = "q8_4_3" value = "3" <?php if (@$ans["q8_4"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_4" id = "q8_4_4" value = "4" <?php if (@$ans["q8_4"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_4" id = "q8_4_5" value = "5" <?php if (@$ans["q8_4"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr><td>5.	豁免入息金額只僅僅（／甚至不足以）補助我因工作而增加的日常支出<br>（如交通費、外出進膳的費用）</td>
	    <td class="cen" ><input type = "radio" name = "q8_5" id = "q8_5_1" value = "1" <?php if (@$ans["q8_5"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_5" id = "q8_5_2" value = "2" <?php if (@$ans["q8_5"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_5" id = "q8_5_3" value = "3" <?php if (@$ans["q8_5"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_5" id = "q8_5_4" value = "4" <?php if (@$ans["q8_5"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_5" id = "q8_5_5" value = "5" <?php if (@$ans["q8_5"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 <tr class = "background3" ><td>6.	豁免入息金額太少</td>
	    <td class="cen" ><input type = "radio" name = "q8_6" id = "q8_6_1" value = "1" <?php if (@$ans["q8_6"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_6" id = "q8_6_2" value = "2" <?php if (@$ans["q8_6"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_6" id = "q8_6_3" value = "3" <?php if (@$ans["q8_6"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_6" id = "q8_6_4" value = "4" <?php if (@$ans["q8_6"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_6" id = "q8_6_5" value = "5" <?php if (@$ans["q8_6"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	 	 <tr class = "nocol3" ><td>7.	我不在乎豁免入息金額的多少</td>
	    <td class="cen" ><input type = "radio" name = "q8_7" id = "q8_7_1" value = "1" <?php if (@$ans["q8_7"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_7" id = "q8_7_2" value = "2" <?php if (@$ans["q8_7"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_7" id = "q8_7_3" value = "3" <?php if (@$ans["q8_7"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_7" id = "q8_7_4" value = "4" <?php if (@$ans["q8_7"] == "4") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q8_7" id = "q8_7_5" value = "5" <?php if (@$ans["q8_7"] == "5") { echo "checked"; } ?>></td>
	 </tr>
	
</table></center>
</div>
<br>

<div id="g9pre" class="orgbor" ><center>
<table class = "qno">
<tr><td>Q.9	以下問題是關於您的精神健康狀況，在過去一個月，您有沒有以下的情況出現？</td></tr>
</table></center>
</div>

<div id="g9" class="orgbor" ><center>
<table class = "qno2" >
	 <tr class="nocol4" ><td>您最近一個月…</td><td class="cen" >1 (從不)</td><td class="cen" >2(很少)</td><td class="cen" >3(有時)</td><td class="cen" >4(經常)</td></tr>
     <tr><td>1.	做事能集中精神?</td>
	    <td class="cen" ><input type = "radio" name = "q9_1" id = "q9_1_1" value = "1" <?php if (@$ans["q9_1"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_1" id = "q9_1_2" value = "2" <?php if (@$ans["q9_1"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_1" id = "q9_1_3" value = "3" <?php if (@$ans["q9_1"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_1" id = "q9_1_4" value = "4" <?php if (@$ans["q9_1"] == "4") { echo "checked"; } ?>></td>
	 </tr>
     <tr class = "background3" ><td>2.	為擔憂而失眠?</td>
	    <td class="cen" ><input type = "radio" name = "q9_2" id = "q9_2_1" value = "1" <?php if (@$ans["q9_2"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_2" id = "q9_2_2" value = "2" <?php if (@$ans["q9_2"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_2" id = "q9_2_3" value = "3" <?php if (@$ans["q9_2"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_2" id = "q9_2_4" value = "4" <?php if (@$ans["q9_2"] == "4") { echo "checked"; } ?>></td>
	 </tr>
	     <tr><td>3.	覺得自己在各方面擔當有用的角色?</td>
	    <td class="cen" ><input type = "radio" name = "q9_3" id = "q9_3_1" value = "1" <?php if (@$ans["q9_3"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_3" id = "q9_3_2" value = "2" <?php if (@$ans["q9_3"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_3" id = "q9_3_3" value = "3" <?php if (@$ans["q9_3"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_3" id = "q9_3_4" value = "4" <?php if (@$ans["q9_3"] == "4") { echo "checked"; } ?>></td>
	 </tr>    
	 <tr class = "background3" ><td>4.	覺得處事可以拿定主意?</td>
	    <td class="cen" ><input type = "radio" name = "q9_4" id = "q9_4_1" value = "1" <?php if (@$ans["q9_4"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_4" id = "q9_4_2" value = "2" <?php if (@$ans["q9_4"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_4" id = "q9_4_3" value = "3" <?php if (@$ans["q9_4"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_4" id = "q9_4_4" value = "4" <?php if (@$ans["q9_4"] == "4") { echo "checked"; } ?>></td>
	 </tr>    
	 <tr><td>5.	覺得總是有精神上的壓力?</td>
	    <td class="cen" ><input type = "radio" name = "q9_5" id = "q9_5_1" value = "1" <?php if (@$ans["q9_5"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_5" id = "q9_5_2" value = "2" <?php if (@$ans["q9_5"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_5" id = "q9_5_3" value = "3" <?php if (@$ans["q9_5"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_5" id = "q9_5_4" value = "4" <?php if (@$ans["q9_5"] == "4") { echo "checked"; } ?>></td>
	 </tr>   
	 <tr class = "background3" ><td>6.	覺得無法克服困難?</td>
	    <td class="cen" ><input type = "radio" name = "q9_6" id = "q9_6_1" value = "1" <?php if (@$ans["q9_6"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_6" id = "q9_6_2" value = "2" <?php if (@$ans["q9_6"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_6" id = "q9_6_3" value = "3" <?php if (@$ans["q9_6"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_6" id = "q9_6_4" value = "4" <?php if (@$ans["q9_6"] == "4") { echo "checked"; } ?>></td>
	 </tr>    
	 <tr><td>7.	覺得日常生活有趣味?</td>
	    <td class="cen" ><input type = "radio" name = "q9_7" id = "q9_7_1" value = "1" <?php if (@$ans["q9_7"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_7" id = "q9_7_2" value = "2" <?php if (@$ans["q9_7"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_7" id = "q9_7_3" value = "3" <?php if (@$ans["q9_7"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_7" id = "q9_7_4" value = "4" <?php if (@$ans["q9_7"] == "4") { echo "checked"; } ?>></td>
	 </tr>    
	 <tr class = "background3" ><td>8.	能夠勇敢地面對問題?</td>
	    <td class="cen" ><input type = "radio" name = "q9_8" id = "q9_8_1" value = "1" <?php if (@$ans["q9_8"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_8" id = "q9_8_2" value = "2" <?php if (@$ans["q9_8"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_8" id = "q9_8_3" value = "3" <?php if (@$ans["q9_8"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_8" id = "q9_8_4" value = "4" <?php if (@$ans["q9_8"] == "4") { echo "checked"; } ?>></td>
	 </tr>     
	 <tr><td>9.	覺得心情不快樂及憂慮?</td>
	    <td class="cen" ><input type = "radio" name = "q9_9" id = "q9_9_1" value = "1" <?php if (@$ans["q9_9"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_9" id = "q9_9_2" value = "2" <?php if (@$ans["q9_9"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_9" id = "q9_9_3" value = "3" <?php if (@$ans["q9_9"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_9" id = "q9_9_4" value = "4" <?php if (@$ans["q9_9"] == "4") { echo "checked"; } ?>></td>
	 </tr>     
	 <tr class = "background3" ><td>10.	對於自己失去信心?</td>
	    <td class="cen" ><input type = "radio" name = "q9_10" id = "q9_10_1" value = "1" <?php if (@$ans["q9_10"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_10" id = "q9_10_2" value = "2" <?php if (@$ans["q9_10"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_10" id = "q9_10_3" value = "3" <?php if (@$ans["q9_10"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_10" id = "q9_10_4" value = "4" <?php if (@$ans["q9_10"] == "4") { echo "checked"; } ?>></td>
	 </tr>    
	 <tr><td>11.	覺得自己無用?</td>
	    <td class="cen" ><input type = "radio" name = "q9_11" id = "q9_11_1" value = "1" <?php if (@$ans["q9_11"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_11" id = "q9_11_2" value = "2" <?php if (@$ans["q9_11"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_11" id = "q9_11_3" value = "3" <?php if (@$ans["q9_11"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_11" id = "q9_11_4" value = "4" <?php if (@$ans["q9_11"] == "4") { echo "checked"; } ?>></td>
	 </tr>     
	 <tr class = "background3" ><td>12.	大致上感到快樂?</td>
	    <td class="cen" ><input type = "radio" name = "q9_12" id = "q9_12_1" value = "1" <?php if (@$ans["q9_12"] == "1") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_12" id = "q9_12_2" value = "2" <?php if (@$ans["q9_12"] == "2") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_12" id = "q9_12_3" value = "3" <?php if (@$ans["q9_12"] == "3") { echo "checked"; } ?>></td>
		<td class="cen" ><input type = "radio" name = "q9_12" id = "q9_12_4" value = "4" <?php if (@$ans["q9_12"] == "4") { echo "checked"; } ?>></td>
	 </tr>    
</table></center>
</div>