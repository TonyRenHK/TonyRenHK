<?php
$username=$_POST['name'];
$city=$_POST['city'];
$province=$_POST['province'];
$country=$_POST['country'];
$openid=$_POST['openid'];
$sex=$_POST['sex'];
$Place=$_POST['Place'];
$Distance=$_POST['Distance'];
$oname=$_POST['oname'];

//$mysql  =   new SaeMysql();
    
//$sql    =   "INSERT INTO `user`(`Other_Place`,`Other_Name`,`distance`) VALUES('$Place','88','$Distance')";
//$sql    =   "INSERT INTO `user`(`openid`,`nickname`,`city`,`province`,`country`,`Other_Place`,`sex`,`distance`,`Other_Name`) VALUES('$openid','$username','$city','$province','$country','$Place','$sex','$Distance','$oname')";
// $mysql->runSql($sql);    //执行插入数据的操作


//Real Use Data
$mysql  =   new SaeMysql();
$sql    =   "INSERT INTO `UserInfo`(`OtherPlace`,`Distance`,`OtherName`,`nickname`,`sex`,`openid`,`city`,`province`,`country`) VALUES('$Place','$Distance','$oname','$username','$sex','$openid','$city','$province','$country')";
$mysql->runSql($sql); 



//$mysql  =   new SaeMysql();
//$sql    =   "INSERT INTO `loginNum`(`fieldid`) VALUES('$openid')";
//$mysql->runSql($sql); 
?>

<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   test
</html>