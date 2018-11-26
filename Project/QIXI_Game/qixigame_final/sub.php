
<html>
 <meta type="hidden" http-equiv="Content-Type" content="text/html; charset=utf-8">
<form  method="post" action="show-distance.php">
<input type="text" name="username" value = "<?php echo @$user_obj[nickname]; ?>" />
<input type="text" name="sex" value = "<?php echo @$user_obj[sex]; ?>" />
    <input type="text" name="openid" value = "<?php echo @$user_obj[openid]; ?>" />
    <input type="text" name="city" value = "<?php echo @$user_obj[city]; ?>" />
    <input type="text" name="province" value = "<?php echo @$user_obj[province]; ?>" />
    <input type="text" name="country" value = "<?php echo @$user_obj[country]; ?>" />
<input type="password" name="pass" />
        
        <br/>查询结果(经纬度)：<input id="result_" type="text" />
    <input id="result2_" type="text"  name="dis" />
        <p id="distance1"></p>
    <input type="submit" value="点击提交" onclick="window.open(show-distance.php);">
</form>
   
    </html>