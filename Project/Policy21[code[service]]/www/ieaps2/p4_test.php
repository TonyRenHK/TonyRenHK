


<head>
	<title>「進一步鼓勵『自力更生綜合就業援助計劃』綜援受助人就業的獎勵計劃」調查</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery.js"></script>
	<script language="javascript" src="ieaps.js"></script> 
	<link rel="stylesheet" type="text/css" href="ieaps.css" />
	<link rel="stylesheet" href="jquery-ui.css">
	<script src="jquery-ui.js"></script>
</head>

<!--------------------------------------------------------------->

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
	 	 <td class="cen" ><b>受訪者</b> </td>
    <?php
		   for ($i = 2 ; $i <= 20 ; $i++) {                                 //a
		   echo "<td class=\"pc5_".$i."\">";                                 //class= "pc5_i"
		   echo "<select name= \"q5_" .$i. "_2 \" id = \"q5_".$i."_2\" >";
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
		   echo "<option value =\"12\"  ".(@$ans["q5a".$i."_2"] == "12" ? "checked" : "").">12.	其他：</option>";
           echo "<input type = \" text \" name = \"q5b_".$i."_12\"  id = \" q5b_".$i."_12\" value =\"".(@$ans["q5b_".$i."_12"])."\">";
           echo "</td>";
		}
    ?>
	</tr>
     
	<tr class = "nocol3" ><td>Q.5b  每月工作收入（上個月）：<br>港幣$</td>
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
	 	<tr class = "nocol3" ><td>Q.5d  豁免入息金額：(港幣$)</td>
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
</table></center>
</div>


















<div id="g5a_e" class="orgbor" ><center>
<table class = "qno1" >
     <tr class = "nocol4" ><td>家庭成員</td>
	     <td>1</td>
		 <td>2</td>
		 <td>3</td>
		 <td>4</td>
		 <td>5</td>
	 </tr>
     <tr class = "nocol1" ><td>Q.5a  <br>與受訪者的關係  </td>
	 	 <td class="cen" ><b>受訪者</b>
		
		 </td>
		 <td>
		 <select name="q5a_2" id="q5a_2">
		               <option value=" " <?php echo @$ans["q5a_2"] == " " ?"checked":""; ?>> </option>
		               <option value="1" <?php echo @$ans["q5a_2"] == "1" ?"checked":""; ?>>1.	配偶</option>
		               <option value="2" <?php echo @$ans["q5a_2"] == "2" ?"checked":""; ?>>2.	同居</option>
		               <option value="3" <?php echo @$ans["q5a_2"] == "3" ?"checked":""; ?>>3.	兒子 ／ 女兒</option>
		               <option value="4" <?php echo @$ans["q5a_2"] == "4" ?"checked":""; ?>>4.	女婿 ／ 媳婦</option>
					   <option value="5" <?php echo @$ans["q5a_2"] == "5" ?"checked":""; ?>> 5.爸爸 ／ 媽媽	</option>
		               <option value="6" <?php echo @$ans["q5a_2"] == "6" ?"checked":""; ?>>6.	岳父 ／ 岳母</option>
		               <option value="7" <?php echo @$ans["q5a_2"] == "7" ?"checked":""; ?>>7.	兄弟姐妹</option>
					   <option value="8" <?php echo @$ans["q5a_2"] == "8" ?"checked":""; ?>>8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>
					   <option value="9" <?php echo @$ans["q5a_2"] == "9" ?"checked":""; ?>>9.	孫子 ／ 孫女／外孫子 ／外孫女</option>
		               <option value="10" <?php echo @$ans["q5a_2"] == "10" ?"checked":""; ?>>10.	祖父 ／ 祖母／外祖父／外祖母</option>
		               <option value="11" <?php echo @$ans["q5a_2"] == "11" ?"checked":""; ?>>11.	其他親戚</option> 
					   <option value="12" <?php echo @$ans["q5a_2"] == "12" ?"checked":""; ?>>12.	其他：</option>
		               </select>
					   <br><input type = "text" name = "q5a_2_12" id = "q5a_2_12" value = "<?php echo @$q5a_2_12; ?>">
		 
		 </td>
		 <td>
		 <select name="q5a_4" id="q5a_4">
		               <option value=" " <?php echo @$ans["q5a_4"] == " " ?"checked":""; ?>> </option>
		               <option value="1" <?php echo @$ans["q5a_4"] == "1" ?"checked":""; ?>>1.	配偶</option>
		               <option value="2" <?php echo @$ans["q5a_4"] == "2" ?"checked":""; ?>>2.	同居</option>
		               <option value="3" <?php echo @$ans["q5a_4"] == "3" ?"checked":""; ?>>3.	兒子 ／ 女兒</option>
		               <option value="4" <?php echo @$ans["q5a_4"] == "4" ?"checked":""; ?>>4.	女婿 ／ 媳婦</option>
					   <option value="5" <?php echo @$ans["q5a_4"] == "5" ?"checked":""; ?>> 5.爸爸 ／ 媽媽	</option>
		               <option value="6" <?php echo @$ans["q5a_4"] == "6" ?"checked":""; ?>>6.	岳父 ／ 岳母</option>
		               <option value="7" <?php echo @$ans["q5a_4"] == "7" ?"checked":""; ?>>7.	兄弟姐妹</option>
					   <option value="8" <?php echo @$ans["q5a_4"] == "8" ?"checked":""; ?>>8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>
					   <option value="9" <?php echo @$ans["q5a_4"] == "9" ?"checked":""; ?>>9.	孫子 ／ 孫女／外孫子 ／外孫女</option>
		               <option value="10" <?php echo @$ans["q5a_4"] == "10" ?"checked":""; ?>>10.	祖父 ／ 祖母／外祖父／外祖母</option>
		               <option value="11" <?php echo @$ans["q5a_4"] == "11" ?"checked":""; ?>>11.	其他親戚</option> 
					   <option value="12" <?php echo @$ans["q5a_4"] == "12" ?"checked":""; ?>>12.	其他：</option>
		               </select>
					   <br><input type = "text" name = "q5a_4_12" id = "q5a_4_12" value = "<?php echo @$q5a_4_12; ?>">
		 
		 </td>
		 <td><select name="q5a_4" id="q5a_4">
		               <option value=" " <?php echo @$ans["q5a_4"] == " " ?"checked":""; ?>> </option>
		               <option value="1" <?php echo @$ans["q5a_4"] == "1" ?"checked":""; ?>>1.	配偶</option>
		               <option value="2" <?php echo @$ans["q5a_4"] == "2" ?"checked":""; ?>>2.	同居</option>
		               <option value="3" <?php echo @$ans["q5a_4"] == "3" ?"checked":""; ?>>3.	兒子 ／ 女兒</option>
		               <option value="4" <?php echo @$ans["q5a_4"] == "4" ?"checked":""; ?>>4.	女婿 ／ 媳婦</option>
					   <option value="5" <?php echo @$ans["q5a_4"] == "5" ?"checked":""; ?>> 5.爸爸 ／ 媽媽	</option>
		               <option value="6" <?php echo @$ans["q5a_4"] == "6" ?"checked":""; ?>>6.	岳父 ／ 岳母</option>
		               <option value="7" <?php echo @$ans["q5a_4"] == "7" ?"checked":""; ?>>7.	兄弟姐妹</option>
					   <option value="8" <?php echo @$ans["q5a_4"] == "8" ?"checked":""; ?>>8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>
					   <option value="9" <?php echo @$ans["q5a_4"] == "9" ?"checked":""; ?>>9.	孫子 ／ 孫女／外孫子 ／外孫女</option>
		               <option value="10" <?php echo @$ans["q5a_4"] == "10" ?"checked":""; ?>>10.	祖父 ／ 祖母／外祖父／外祖母</option>
		               <option value="11" <?php echo @$ans["q5a_4"] == "11" ?"checked":""; ?>>11.	其他親戚</option> 
					   <option value="12" <?php echo @$ans["q5a_4"] == "12" ?"checked":""; ?>>12.	其他：</option>
		               </select>
					   <br><input type = "text" name = "q5a_4_12" id = "q5a_4_12" value = "<?php echo @$q5a_4_12; ?>">
		 
		 </td>
		 <td >
		 <select name="q5a_5" id="q5a_5">
		               <option value=" " <?php echo @$ans["q5a_5"] == " " ?"checked":""; ?>> </option>
		               <option value="1" <?php echo @$ans["q5a_5"] == "1" ?"checked":""; ?>>1.	配偶</option>
		               <option value="2" <?php echo @$ans["q5a_5"] == "2" ?"checked":""; ?>>2.	同居</option>
		               <option value="3" <?php echo @$ans["q5a_5"] == "3" ?"checked":""; ?>>3.	兒子 ／ 女兒</option>
		               <option value="4" <?php echo @$ans["q5a_5"] == "4" ?"checked":""; ?>>4.	女婿 ／ 媳婦</option>
					   <option value="5" <?php echo @$ans["q5a_5"] == "5" ?"checked":""; ?>> 5.爸爸 ／ 媽媽	</option>
		               <option value="6" <?php echo @$ans["q5a_5"] == "6" ?"checked":""; ?>>6.	岳父 ／ 岳母</option>
		               <option value="7" <?php echo @$ans["q5a_5"] == "7" ?"checked":""; ?>>7.	兄弟姐妹</option>
					   <option value="8" <?php echo @$ans["q5a_5"] == "8" ?"checked":""; ?>>8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>
					   <option value="9" <?php echo @$ans["q5a_5"] == "9" ?"checked":""; ?>>9.	孫子 ／ 孫女／外孫子 ／外孫女</option>
		               <option value="10" <?php echo @$ans["q5a_5"] == "10" ?"checked":""; ?>>10.	祖父 ／ 祖母／外祖父／外祖母</option>
		               <option value="11" <?php echo @$ans["q5a_5"] == "11" ?"checked":""; ?>>11.	其他親戚</option> 
					   <option value="12" <?php echo @$ans["q5a_5"] == "12" ?"checked":""; ?>>12.	其他：</option>
		               </select>
					   <br><input type = "text" name = "q5a_5_12" id = "q5a_5_12" value = "<?php echo @$q5a_5_12; ?>">
		 
		 </td>
	 </tr>
	 <tr class = "nocol3" ><td>Q.5b  每月工作收入（上個月）：<br>港幣$</td>
	     <td><input type = "text" name = "q5b_1" id = "q5b_1" value = "<?php echo @$q5b_1; ?>"></td>
		 <td><input type = "text" name = "q5b_2" id = "q5b_2" value = "<?php echo @$q5b_2; ?>"></td>
		 <td><input type = "text" name = "q5b_3" id = "q5b_3" value = "<?php echo @$q5b_3; ?>"></td>
		 <td><input type = "text" name = "q5b_4" id = "q5b_4" value = "<?php echo @$q5b_4; ?>"></td>
		 <td><input type = "text" name = "q5b_5" id = "q5b_5" value = "<?php echo @$q5b_5; ?>"></td>
	 </tr>
	      <tr  class = "nocol1" ><td>Q.5c  合資格綜援人士</td>
	     <td>
		      <input type = "radio" name = "q5c_1" id = "q5c_1_1" value = "1" <?php if (@$ans["q5c_1"] == "1") { echo "checked"; } ?>><label for = "q5c_1_1" >1.	是</label>
			  <br><input type = "radio" name = "q5c_1" id = "q5c_1_2" value = "2" <?php if (@$ans["q5c_1"] == "2") { echo "checked"; } ?>><label for = "q5c_1_2" >2.	否（跳問Q.5e）</label>
		 </td>
		 <td>
		      <input type = "radio" name = "q5c_2" id = "q5c_2_1" value = "1" <?php if (@$ans["q5c_2"] == "1") { echo "checked"; } ?>><label for = "q5c_2_1" >1.	是</label>
			  <br><input type = "radio" name = "q5c_2" id = "q5c_2_2" value = "2" <?php if (@$ans["q5c_2"] == "2") { echo "checked"; } ?>><label for = "q5c_2_2" >2.	否 </label>
	    </td>
		 <td>
		      <input type = "radio" name = "q5c_3" id = "q5c_3_1" value = "1" <?php if (@$ans["q5c_3"] == "1") { echo "checked"; } ?>><label for = "q5c_3_1" >1.	是</label>
			  <br><input type = "radio" name = "q5c_3" id = "q5c_3_2" value = "2" <?php if (@$ans["q5c_3"] == "2") { echo "checked"; } ?>><label for = "q5c_3_2" >2.	否 </label>
		 </td>
		 <td>
		       <input type = "radio" name = "q5c_4" id = "q5c_4_1" value = "1" <?php if (@$ans["q5c_4"] == "1") { echo "checked"; } ?>><label for = "q5c_4_1" >1.	是</label>
			   <br><input type = "radio" name = "q5c_4" id = "q5c_4_2" value = "2" <?php if (@$ans["q5c_4"] == "2") { echo "checked"; } ?>><label for = "q5c_4_2" >2.	否 </label>
		 </td>
		 <td>
		       <input type = "radio" name = "q5c_5" id = "q5c_5_1" value = "1" <?php if (@$ans["q5c_5"] == "1") { echo "checked"; } ?>><label for = "q5c_5_1" >1.	是</label>
			   <br><input type = "radio" name = "q5c_5" id = "q5c_5_2" value = "2" <?php if (@$ans["q5c_5"] == "2") { echo "checked"; } ?>><label for = "q5c_5_2" >2.	否 </label>
		 
		 </td>
	 </tr>
	    
		<tr  class = "nocol3"><td>Q.5d  豁免入息金額：港幣$</td>
	         <td><input type = "text" name = "q5d_1" id = "q5d_1" value = "<?php echo @$q5d_1; ?>"></td>
		 <td><input type = "text" name = "q5d_2" id = "q5d_2" value = "<?php echo @$q5d_2; ?>"></td>
		 <td><input type = "text" name = "q5d_3" id = "q5d_3" value = "<?php echo @$q5d_3; ?>"></td>
		 <td><input type = "text" name = "q5d_4" id = "q5d_4" value = "<?php echo @$q5d_4; ?>"></td>
		 <td><input type = "text" name = "q5d_5" id = "q5d_5" value = "<?php echo @$q5d_5; ?>"></td>
	 </tr>
	  <tr  class = "nocol1" ><td>Q.5e  有沒有領取「鼓勵就業交通津貼」？</td>
	     <td>
		      <input type = "radio" name = "q5e_1" id = "q5e_1_1" value = "1" <?php if (@$ans["q5e_1"] == "1") { echo "checked"; } ?>><label for = "q5e_1_1" >1.	有</label>
			  <br><input type = "radio" name = "q5e_1" id = "q5e_1_2" value = "2" <?php if (@$ans["q5e_1"] == "2") { echo "checked"; } ?>><label for = "q5e_1_2" >2.	沒有 </label>
		 </td>
		 <td>
		      <input type = "radio" name = "q5e_2" id = "q5e_2_1" value = "1" <?php if (@$ans["q5e_2"] == "1") { echo "checked"; } ?>><label for = "q5e_2_1" >1.	有</label>
			  <br><input type = "radio" name = "q5e_2" id = "q5e_2_2" value = "2" <?php if (@$ans["q5e_2"] == "2") { echo "checked"; } ?>><label for = "q5e_2_2" >2.	沒有 </label>
	    </td>
		 <td>
		      <input type = "radio" name = "q5e_3" id = "q5e_3_1" value = "1" <?php if (@$ans["q5e_3"] == "1") { echo "checked"; } ?>><label for = "q5e_3_1" >1.	有</label>
			  <br><input type = "radio" name = "q2c_3" id = "q5e_3_2" value = "2" <?php if (@$ans["q5e_3"] == "2") { echo "checked"; } ?>><label for = "q5e_3_2" >2.	沒有</label>
		 </td>
		 <td>
		       <input type = "radio" name = "q5e_4" id = "q5e_4_1" value = "1" <?php if (@$ans["q5e_4"] == "1") { echo "checked"; } ?>><label for = "q5e_4_1" >1.	有</label>
			   <br><input type = "radio" name = "q5e_4" id = "q5e_4_2" value = "2" <?php if (@$ans["q5e_4"] == "2") { echo "checked"; } ?>><label for = "q5e_4_2" >2.	沒有</label>
		 </td>
		 <td>
		       <input type = "radio" name = "q5e_5" id = "q5e_5_1" value = "1" <?php if (@$ans["q5e_5"] == "1") { echo "checked"; } ?>><label for = "q5e_5_1" >1.	有</label>
			   <br><input type = "radio" name = "q5e_5" id = "q5e_5_2" value = "2" <?php if (@$ans["q5e_5"] == "2") { echo "checked"; } ?>><label for = "q5e_5_2" >2.	沒有 </label>
		 
		 </td>
	 </tr>
	 <br>
</table></center>
</div>
















