<?php  
      
    if(isset($_SESSION['user'])){  
        print_r($_SESSION['user']);
    exit;
    }
    $APPID='wx3fd2fa173fb6f311';
    $REDIRECT_URI='http://1.qixigame.sinaapp.com/callback.php';
    $scope='snsapi_userinfo';
    $state='123';
    //$scope='snsapi_userinfo';//需要授权
    $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$APPID.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';
    
    header("Location:".$url);
exit();
    ?>