<?php
date_default_timezone_set("Asia/Hong_Kong");
$tt = time();
$stday = date("Y-m-d",$tt);
$sttime = date("H:i",$tt);
?>

<div id="data" class="orgbor" ><center>
<table width="1100" >
<tr><td  align= "left" colspan = "3">樣本編號：<?php echo @$sc; ?></td></tr>
<tr><td  align= "left" colspan = "3"> 電話號碼: <?php echo @$scx; ?></td></tr>
<tr><td  align= "left" colspan = "3">公司名稱: <?php echo @$fullname; ?></td></tr>
<tr><td  align= "left" colspan = "3">地址：<?php echo @$addr; ?></td></tr>
<tr><td  align= "left" colspan = "3">訪問員編號：<?php echo @$eno; ?></td></tr>
<tr><td  align= "left" colspan = "3">日期：<?php echo @$stday; ?></td></tr>
<tr><td  align= "left" colspan = "3">時間：<?php echo @$sttime; ?></td></tr>
<input type = "hidden" name = "sc" id = "sc" value = "<?php echo @$sc; ?>">
<input type = "hidden" name = "eno" id = "eno" value = "<?php echo @$eno; ?>">
<input type = "hidden" name = "stday" id = "stday" value = "<?php echo @$stday; ?>">
<input type = "hidden" name = "sttime" id = "sttime" value = "<?php echo @$sttime; ?>">
<input type = "hidden" name = "tt" id = "tt" value = "<?php echo @$tt; ?>">
<input type = "hidden" name = "login" id = "login" value = "login" >
</table></center>
</div>