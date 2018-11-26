

<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>秀出七夕爱的坐标</title>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    
    <!--<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
    <!-- <script src="js/show-distance.js" type="text/javascript"></script> -->
</head>
    
<body>
  
    <div id="wrapper">
        <div class="header_bg"></div>
        <div class="footer_bg"></div>
        <div class="distance_info">
            <div class="info_box">
                <img class="city_icon" src="images/city-icon.png" alt="城市">
                <p class="player_name" id="myname"><?php $nickname=$_GET['nickname']; echo $nickname;?></p>
                <p class="city_name" >您所在位置</p>
 
            </div>
            <div class="link">
                <span class="blink_point link_point"></span>
                <span class="slink_point link_point"></span>
                <span class="slink_point link_point"></span>
                <span class="blink_point link_point"></span>
                <span class="slink_point link_point"></span>
                <span class="slink_point link_point"></span>
                <span class="blink_point link_point"></span>
            </div>
            <div class="info_box">
                <img class="city_icon" src="images/city-icon.png" alt="城市">
                <p class="player_name" id="othname"><?php $oname=$_GET['oname']; echo $oname;?> </p>
                <p class="city_name" id="otherplace" ><?php $oplace=$_GET['oplace']; echo $oplace;?></p>
            </div>
        </div>
        <p class="rank">和Ta相隔<span class="rank_num" id="dis"><?php $dd=$_GET['yy']; echo $dd;?> </span>km，超越了<span class="rank_num" id="percent"><?php $percent=$_GET['percent']; echo $percent;?></span>%的情况</p>
        <p id="myname"></p>
        <p class="left_distance">还有<span class="left_num" id="distance"><?php $dd=$_GET['yy']; echo $dd;?> </span>km</p>
        <p class="left_distance">就能把爱意送给<span class="left_distance" id="othname2"><?php $oname=$_GET['oname']; echo $oname;?></span> </p>
        <div class="meetwrap">
            <div class="bridge">
                <span class="finish_num" id="left_dis"><?php $dd=$_GET['yy']; echo $dd;?></span>/<span class="total_num" id="total_dis"><?php $dd=$_GET['yy']; echo $dd;?></span>
                <img class="bridge_boy" src="images/bridge-boy.png" alt="">
                <img class="bridge_girl" src="images/bridge-girl.png" alt="">
            </div>
        </div>
        <div id="share_btn" class="single_btn"><img src="images/invitate-fri.png" alt="邀请朋友"></div>
        <!--<p class="check_result" style="font-size:250%;"><a href="index.html">我也要参加></a></p>-->
        <div id="join_btn" class="single_btn"><a href="index.html"><img src="images/join-btn.png" alt="邀请朋友"></a></div>
        <div class="mask disappear" id="invite_mask">
            <img class="invite_btn" src="images/share-fri.png" alt="分享给好友">
            <div class="outBox_wrap">
                <div class="outBox_head">
                    <img class="outBox_headtop" src="images/explainbox-top.png" alt="">
                    <img id="close_btn" src="images/close-btn.png" alt="">
                </div>      
                <div class="explain_box">
                    <?php  include "interface.php";  ?>
                    <p class="gamerule">在朋友们面前晒晒你们的距离或者TA的城市，就有机会获得鹤仙送出价值1500的moto360手表呢！详情请查阅我们的公众号zdhaitao吧！</p>
                </div>
            </div>
            <div class="code_wrap">
                <img src="images/zdht_code.jpg" alt="值得海淘二维码">
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/common.js"></script>
    <script>
        var myname =  document.getElementById("myname");
        var otherplace =  document.getElementById("otherplace");
        var othname =  document.getElementById("othname");
        var othname2 =  document.getElementById("othname2");
        //var myplace =  document.getElementById("myplace");
        var dis =  document.getElementById("dis");
        var distance =  document.getElementById("distance");
        var left_dis =  document.getElementById("left_dis");
        var total_distance =  document.getElementById("total_dis");
        var userstr;
        var percent = document.getElementById("percent");
        var user;
        if(localStorage.getItem("json") != null) {
            userstr = localStorage.getItem("json");//從本地存儲讀出數據
            user =  JSON.parse(localStorage.getItem("json"));//把字符串轉換成json結構
            myname.innerHTML = user.name;
            otherplace.innerHTML = user.othplace;
            othname.innerHTML = user.othname;
            othname2.innerHTML = user.othname;
            //myplace.innerHTML = user.myplace;
            dis.innerHTML = user.distance;
            distance.innerHTML = user.distance;
            left_dis.innerHTML = user.distance;
            total_distance.innerHTML = user.distance;
            var p = 1 - user.distance/4458;
            if(p > 0){
                percent.innerHTML = Math.round((1-p)*100);
            }
            else{
                percent.innerHTML = 99;
            }
            
            document.title ="秀出七夕爱的坐标 "+user.name+"和"+user.othname+"相隔"+user.distance+"km,超越了"+percent.innerHTML+"%的情侣";
        }
        //else
        //{
        // document.getElementById("myname").style.visibility="visible";
        // }
        
        
        var shareBtn = document.getElementById("share_btn");
        var inviteMask = document.getElementById("invite_mask");
        var closeBtn = document.getElementById("close_btn");
        shareBtn.addEventListener('click',function(){
            if(hasClass(inviteMask,"disappear")){
                removeClass(inviteMask,"disappear");
                addClass(inviteMask, "appear");
            }
            else{
                removeClass(inviteMask,"appear");
                addClass(inviteMask, "disappear");
            }
        },false);

        closeBtn.addEventListener('click',function(){   
                removeClass(inviteMask,"appear");
                addClass(inviteMask, "disappear");
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

  <?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1256133943).'" width="0" height="0"/>';?>  
    
</body>
</html>