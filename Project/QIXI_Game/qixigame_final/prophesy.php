<!DOCTYPE html>
<html lang="ch">
<head>
	<meta charset="UTF-8">
	<title>秀出七夕爱的坐标--预测爱情城市</title>
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
    <body>
	<div id="wrapper">
		<div class="header_bg"></div>
		<div class="footer_bg"></div>
		<img id="get_fire" src="images/get-fire.png" alt="点击火把">
        <img class="disappear"src="images/light-before.png" alt="">
		<img id="light" src="images/light-before.png" alt="">
		<img id="fire" src="images/fire.png" alt="火把">
		<div class="poem1" id="poem1"><img  src="images/poem1.png"></div>
		<div class="poem2" id="poem2"><img  src="images/poem2.png"></div>
		<div class="mask" id="prophesy_mask">
			<img src="images/prophesy-guide.png">
		</div>
        <div class="mask disappear" id="love_city">
			<div class="outBox_wrap helpBox_wrap">
				<div class="outBox_head">
					<img class="outBox_headtop" src="images/explainbox-top.png" alt="">
				</div>	
				<div class="explain_box">
					<p>你的情人将来自</p>
					<p id="love_cityname"><?php  include "update.php";  ?></p>
				</div>
                <div id="share_btn" class="single_btn" style="margin-top:1em;"><img src="images/invitate-fri.png" alt="邀请朋友"></div>
	    		<div id="join_btn" class="single_btn" style="margin-top:1em;"><a href="index.html"><img src="images/join-btn.png" alt="参加游戏"></a></div>
			</div>
		</div>
        <div class="mask disappear" id="invite_mask">
			<img class="invite_btn" src="images/share-fri.png" alt="分享给好友">
			<div class="outBox_wrap">
				<div class="outBox_head">
					<img class="outBox_headtop" src="images/explainbox-top.png" alt="">
					<img id="close_btn" src="images/close-btn.png" alt="">
				</div>		
				<div class="explain_box">
					<p class="gamerule">在朋友们面前晒晒你的爱情之城，就有机会获得鹊仙送出价值1500的moto360手表呢！详情请查阅我们的公众号zdhaitao吧！</p>
				</div>
			</div>
			<div class="code_wrap">
				<img src="images/zdht_code.jpg" alt="值得海淘二维码">
			</div>
		</div>
	</div>
    <?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1256133943).'" width="0" height="0"/>';?>    
</body>
<script>
    var prophesyMask=document.getElementById("prophesy_mask");
	var inviteMask = document.getElementById("invite_mask");
	var shareBtn = document.getElementById("share_btn");
	var fireItem = document.getElementById("fire");
	var lightItem = document.getElementById("light");
	var poem1 = document.getElementById("poem1");
	var poem2 = document.getElementById("poem2");
	var getFire = document.getElementById("get_fire");
	var loveCity = document.getElementById("love_city");
	var closeBtn = document.getElementById("close_btn");
    var sentence=document.getElementById("sentence");
    var userstr;
    var user; 
    var username;
    if(localStorage.getItem("json") != null) {
            userstr = localStorage.getItem("json");//從本地存儲讀出數據
            user =  JSON.parse(localStorage.getItem("json"));//把字符串轉換成json結構
            username = user.name;
    
    document.title ="秀出七夕爱的坐标 "+username+"的爱情将来自"+document.getElementById("love_cityname").innerHTML;
    }
    else
    {
        
        document.title ="秀出七夕爱的坐标 - TA的爱情将来自"+document.getElementById("love_cityname").innerHTML;
    }

	setTimeout( function(){
		addClass(prophesyMask, "disappear");
	}, 2000);
    
    fireItem.addEventListener('click',function(){
		addClass(fireItem, "fire_updown");
		setTimeout( function(){
			lightItem.src="images/light-after.png";
			addClass(lightItem, "light_fly");
			addClass( poem1, "poem");
		}, 1000 );
		setTimeout( function(){
			addClass( poem2, "poem");
		}, 2000 );
		getFire.style.display="none";
		setTimeout( function(){
			removeClass(loveCity,"disappear");
			addClass(loveCity, "appear");
		}, 4000 );
		
	},false);

	shareBtn.addEventListener('click',function(){
		if(hasClass(inviteMask,"disappear")){
			removeClass(inviteMask,"disappear");
			addClass(inviteMask, "appear");
			removeClass(loveCity,"appear");
			addClass(loveCity, "disappear");
		}
		else{
			removeClass(inviteMask,"appear");
			addClass(inviteMask, "disappear");
			removeClass(loveCity,"disappear");
			addClass(loveCity, "appear");
		}
	},false);

	function hasClass(obj, cls) {  
		return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));  
	}  

	function addClass(obj, cls) {  
		if (!this.hasClass(obj, cls)) obj.className += " " + cls;  
	}

	function removeClass(obj, cls) {  
		if (hasClass(obj, cls)) {  
   		var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');  
    	obj.className = obj.className.replace(reg, ' ');  
		}  
	}
</script>
</html>