<?php

//$mysql  =   new SaeMysql();
    
//$sql    =   "INSERT INTO `user`(`openid`,`nickname`,`sex`) VALUES('$user_obj[openid]','$user_obj[nickname]','$user_obj[sex]')";

// $mysql->runSql($sql);    //执行插入数据的操作

//echo 'Save!!!'; 


$mysql = new SaeMysql();

$sql = "SELECT * FROM `UserInfo`";
$data = $mysql->getData( $sql );
shuffle($data);

echo $data[0]['OtherPlace'];

//print_r($data); 
?>

<html>
    
</html>
