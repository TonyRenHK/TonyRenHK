<head>
	<title>「進一步鼓勵『自力更生綜合就業援助計劃』綜援受助人就業的獎勵計劃」調查</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script language="javascript" src="jquery.js"></script>
	<script language="javascript" src="ieaps.js"></script> 
	<link rel="stylesheet" type="text/css" href="ieaps.css" />
	<link rel="stylesheet" href="jquery-ui.css">
	<script src="jquery-ui.js"></script>
</head>
<!----------------------------------------------->

<div id="g2a_f" class="orgbor" ><center>
<table class = "qno1" >
	<tr class = "nocol4" ><td>家庭成員</td>                      
	<?php
		for ($i = 1 ; $i <= 20 ; $i++) {
		 echo "<td class=\"cen pc".$i."\"><b>".$i."</b></td>";
		}
    ?>
	 <tr class = "nocol1" ><td>Q.2a  <br>與受訪者的關係  </td>
	 <?php
		   for ($i = 1 ; $i <= 20 ; $i++) {                                
		   echo "<td class=\"pc".$i."\">";                                 
		   echo "<select name= \"q2a_" .$i. " id = \"q2a_".$i." >";
		   echo "<option value =\" \"  ".(@$ans["q2a_".$i.""] == " " ? "checked" : "")."> </option>";   
		   echo "<option value =\"1\"  ".(@$ans["q2a_".$i.""] == "1" ? "checked" : "").">1.	配偶</option>";
		   echo "<option value =\"2\"  ".(@$ans["q2a_".$i.""] == "2" ? "checked" : "").">2.	同居</option>";
		   echo "<option value =\"3\"  ".(@$ans["q2a".$i.""] == "3" ? "checked" : "").">3.	兒子 ／ 女兒</option>";
		   echo "<option value =\"4\"  ".(@$ans["q2a_".$i.""] == "4" ? "checked" : "").">4.	女婿 ／ 媳婦</option>";	
		   echo "<option value =\"5\"  ".(@$ans["q2a".$i.""] == "5" ? "checked" : "").">5.	爸爸 ／ 媽媽	</option>";
		   echo "<option value =\"6\"  ".(@$ans["q2a".$i.""] == "6" ? "checked" : "").">6.	岳父 ／ 岳母</option>";
		   echo "<option value =\"7\"  ".(@$ans["q2a".$i.""] == "7" ? "checked" : "").">7.	兄弟姐妹</option>";
		   echo "<option value =\"8\"  ".(@$ans["q2a".$i.""] == "8" ? "checked" : "").">8.	姐夫 ／妹夫 ／嫂嫂 ／弟婦</option>";
		   echo "<option value =\"9\"  ".(@$ans["q2a".$i.""] == "9" ? "checked" : "").">9.	孫子 ／ 孫女／外孫子 ／外孫女</option>";
		   echo "<option value =\"10\"  ".(@$ans["q2a".$i.""] == "10" ? "checked" : "").">10.	祖父 ／ 祖母／外祖父／外祖母</option>";
		   echo "<option value =\"11\"  ".(@$ans["q2a".$i.""] == "11" ? "checked" : "").">11.	其他親戚</option>";
		   echo "<option value =\"12\"  ".(@$ans["q2a".$i.""] == "12" ? "checked" : "").">12.	其他：</option></select>";
           echo "<br>請註明:<input type = \" text \" name = \"q5b_".$i."_12\"  id = \" q5b_".$i."_12\" value =\"".(@$ans["q5b_".$i."_12"])."\">";
           echo "</td>";
		}
    ?>
	
	
	
	
	
	
	
	</tr>
	
</table></center><br>
</div>
