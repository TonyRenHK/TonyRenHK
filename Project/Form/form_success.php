<!DOCTYPE html>
<html>
<head>
<title>LikeHK - Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">   
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
</head>

<body>

    
    
    <?php
$username=$_POST['name'];

//Real Use Data
$mysql  =   new SaeMysql();
$sql    =   "INSERT INTO `Users`(`Id`,`name2`) VALUES('111','$username')";
$mysql->runSql($sql); 


?>
    
    
    
<div data-role="page">

	<div data-role="header">
		<h1>LikeHK - Form</h1>
	</div>
	
	<div data-role="content">

		
        <h2><center>提交成功！</center></h2>
	</div>
            
            <p style="text-align:center">
                Copyright © <a href="http://1.likehongkong.sinaapp.com">LikeHK</a> 
            </p>
    
    
</div>

</body>
</html>