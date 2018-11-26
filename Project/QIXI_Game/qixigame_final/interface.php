<?php


//echo 'Save!!!'; 
$uid=$_GET['xx'];
$dd=$_GET['yy'];
$nickname=$_GET['nickname'];
$oplace=$_GET['oplace'];
$oname=$_GET['oname'];
$mypos=$_GET['mypos'];    
//echo $uid;
//echo 'KM</br>'; 
//echo $dd;
// echo 'Test';


$mysql  =   new SaeMysql();
//$sql    =   "INSERT INTO `UserUni`(`OtherPlace`,`Distance`,`OtherName`,`nickname`,`sex`,`openid`,`city`,`province`,`country`) VALUES('$Place','$Distance','$oname','$username','$sex','$openid','$city','$province','$country')";
$sql    =   "INSERT INTO `UserUni`(`Distance`,`nickname`,`openid`,`OtherPlace`,`OtherName`,`Myplace`) VALUES('$dd','$nickname','$uid','$oplace','$oname','$mypos')";

$mysql->runSql($sql); 



?>

<html>
    <meta charset="utf-8">
</html>
