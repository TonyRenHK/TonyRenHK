    <?php
    //http://www.111cn.net/callback.php
      
    $appid = "wx3fd2fa173fb6f311";  
    $secret = "bf315edcfd648a05aefdbdcba816707f";  
    $code = $_GET["code"];  
    $get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$get_token_url);  
    curl_setopt($ch,CURLOPT_HEADER,0);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);  
    $res = curl_exec($ch);  

    $json_obj = json_decode($res,true);  
      
    //根据openid和access_token查询用户信息  
    $access_token = $json_obj['access_token'];  
    $openid = $json_obj['openid'];  
    $get_user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';  

//session_start();
//$_SESSION['openid'] = $openid;
    
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$get_user_info_url);  
    curl_setopt($ch,CURLOPT_HEADER,0);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);  
    $res = curl_exec($ch);  
    curl_close($ch);  
      
    //解析json  
    $user_obj = json_decode($res,true);  
    $_SESSION['user'] = $user_obj;  
 



    
//$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
//if(!$con){ 
//   die('could not connect:'.mysql_error()); 
// }
// mysql_select_db(SAE_MYSQL_DB,$con);
//print_r($user_obj);  
//include "update.php";
//include "sub.php";
include "address.php";
//include "show-distance.php";
      
    ?>  

