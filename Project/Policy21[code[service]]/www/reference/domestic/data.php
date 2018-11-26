<?php
date_default_timezone_set("Asia/Hong_Kong");
$tt = time();
$stday = date("Y-m-d",$tt);
$sttime = date("H:i",$tt);
$sttime++;
$sttime++;
$sttime++;
$sttime++;
$sttime++;
$sttime++;
$sttime++;      //server late 7min
?>
電話號碼:<?php echo @$sc; ?><br />
訪問員編號：<?php echo @$eno; ?><br />
日期：<?php echo @$stday; ?><br />
時間：<?php echo @$sttime; ?><br />
<input type = "hidden" name = "sc" id = "sc" value = "<?php echo @$sc; ?>">
<input type = "hidden" name = "eno" id = "eno" value = "<?php echo @$eno; ?>">
<input type = "hidden" name = "stday" id = "stday" value = "<?php echo @$stday; ?>">
<input type = "hidden" name = "sttime" id = "sttime" value = "<?php echo @$sttime; ?>">
<input type = "hidden" name = "tt" id = "tt" value = "<?php echo @$tt; ?>">
<input type = "hidden" name = "login" id = "login" value = "login">