<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx3fd2fa173fb6f311", "bf315edcfd648a05aefdbdcba816707f");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  // 注意：所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。 
  // 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
  // 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
  wx.config({
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
       'checkJsApi',
        'onMenuShareTimeline'
    ]
  });
  wx.ready(function () {
     wx.checkJsApi({
      jsApiList: [
        'getNetworkType',
        'previewImage'
      ],
      success: function (res) {
        alert(JSON.stringify(res));
      }
    });
      
    wx.onMenuShareTimeline({
    title: '测试测试', // 分享标题
    link: 'game.zdhaitao.com', // 分享链接
    imgUrl: 'http://1.qixigame.sinaapp.com/images/zdht_code.jpg', // 分享图标
    success: function () { 
        // 用户确认分享后执行的回调函数
        alert("success");
    },
    cancel: function () { 
        // 用户取消分享后执行的回调函数
        alert("cancle");
    }
});
  });
</script>
</html>