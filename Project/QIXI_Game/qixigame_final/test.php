<?php
$json =  file_get_contents('php://input');
$data = json_decode($json);
$name = $data[0]->{'name'};
$openid = $data[0]->{'openid'};
echo $name;
echo $openid;
echo $json;




?>

<html>
    <head>
        <title>bingo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
    </head>
	<body>
        aaa
    </body>
</html>