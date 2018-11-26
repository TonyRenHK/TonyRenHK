<?php
$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 


//$mysql  =   new SaeMysql();
    
//$sql    =   "INSERT INTO `user`(`openid`,`nickname`,`sex`) VALUES('$user_obj[openid]','$user_obj[nickname]','$user_obj[sex]')";

// $mysql->runSql($sql);where openid = ‘o5W60uDpOBJb6rN4pLn-OLn3f5bE‘    //执行插入数据的操作

echo 'Save!!!'; 

$mysql = new SaeMysql();

$sql = "SELECT * FROM `UserInfo` where openid= 'o5W60uDpOBJb6rN4pLn-OLn3f5bE';";
$data = $mysql->getData( $sql );
if (empty($data)) {echo "<h2>没有查到哦</h2>";}

print_r($data); 
print_r(下面是数据);
print_r($data[0][Distance]);
?>


<html>
    <head>
        <title>bingo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    </head>
	<body>
        <?php echo $_SERVER['HTTP_HOST']?>        
        <p>获取网页地址</p> 
        <?php echo $_SERVER['PHP_SELF']?>
        <p>获取网址参数</p> 
        <?php echo $_SERVER["QUERY_STRING"]?>
        <p>获取用户代理 </p>
        <?php echo $_SERVER['HTTP_REFERER']?>
        <p>获取完整的url</p>
        <?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
        <?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>
        <p>尝试的地址http://localhost/blog/testurl.php?id=5</p>
        <p>包含端口号的完整url</p>
        <?php echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];?>        
        <p>只取路径</p>        
        <?php echo dirname($url);?>
    </body>
</html>