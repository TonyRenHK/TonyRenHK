
<?php

//$wObj = new atweixin();
//$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
//$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
//$wObj->fromUsername = $postObj->FromUserName;
//session_id($wObj->fromUsername);
//session_start();
//$_SESSION['username']=$user_obj['nickname'];
//$_SESSION['openid']=$user_obj['openid'];
//$_SESSION['city']=$user_obj['city'];
//$_SESSION['province']=$user_obj['province'];
//$_SESSION['country']=$user_obj['country'];
//_Session['username2']=$username2;
//session_start();

//$regValue = $_GET['user'];
//$data=$_SESSION['user'];
//echo $_SESSION['username'];
//echo $_SESSION['openid']; 
//echo $_SESSION['city'];
//echo $_SESSION['province']; 
//echo $_SESSION['country'];
//echo $regValue;
//$mysql  =   new SaeMysql();
    

//$sql    =   "INSERT INTO `user`(`openid`,`nickname`,`Other_Name`,`sex`,`city`,`province`,`country`) VALUES('$openid','$username','$username2','$sex','$city','$province','$country')";
//$mysql->runSql($sql);    //执行插入数据的操作


?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
    <title>秀出七夕爱的坐标</title>
    <link rel="stylesheet" type="text/css" href="css/plugin/animation.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/address.css">
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
    <script src=”http://libs.baidu.com/jquery/2.1.1/jquery.min.js”></script>
</head>
    
<body onselectstart="return false"  id="wrapper2">
    <div id="wrapper">
        <div class="part a-fadein" id="part-0"></div>
        

        <form method="post" action="show-distance.php">
            <input  type="hidden" name="username" value = "<?php echo @$user_obj[nickname]; ?>" />
            <input  type="hidden" name="openid" value = "<?php echo @$user_obj[openid]; ?>" />
            <input  type="hidden" name="sex" value = "<?php echo @$user_obj[sex]; ?>" />
            <input  type="hidden" name="city" value = "<?php echo @$user_obj[city]; ?>" />
            <input  type="hidden" name="province" value = "<?php echo @$user_obj[province]; ?>" />
            <input  type="hidden" name="country" value = "<?php echo @$user_obj[country]; ?>" />
            <input  type="hidden" id="result_" type="text" />
            <input id="result2_"  type="hidden" type="text"  name="dis" />
            
        <div class="part a-fadein" id="part-2">
            <div class="box">
                <div class="row"> 
                    <div class="icon"><img src="images/location.png"></div>
                    <div class="input-text">
                        <input type="text" placeholder="输入Ta的地址"  name="OtherPlace"  id="text_" onchange="searchByStationName();">
                        <img class="alert" id="alert_tip" style="visibility: hidden" src="images/alert.png" />
                    </div>
                    <p class="intro">例：中国广州，如在国外，请输入国家名称，例：美国</p>
                </div>
                <div class="row">
                    <div class="icon"><img src="images/person.png"></div>
                    <div class="input-text">
                        <input type="text" placeholder="输入Ta的姓名"  name="username2" id="username2" >
                         <p id="distance1" style="visibility: hidden" ></p>
                        <input  type="hidden" id="result2_" type="text"  name="dis" />
                    </div>
                </div>
            </div>
        </div>           
        <div class="part a-fadein" id="part-3">
           <div class="btn" id="btn-1"  type="submit" onclick="window.open('prophesy.php');"><!--<input type="submit" class="btn btn-default" style="background:transparent;" value="Submit Button" >--></div> 
           <div class="btn" id="btn-2" name="btn-2" type="submit" onclick="jump();"></div>   
        </div>
        </form>
    </div>
    
   <div id="container"  style="visibility: hidden" >
    </div>
    
    
    <script>
        $(document).ready(function(){


            $("#username2").change(function(){
                //alert('For Test only');
                var loc=$("#text_").val() ;
                 var oname=$("#username2").val() ;
                var dis=$("#result2_").val();
                $.post("do.php",
                       {
                           name:"<?php echo @$user_obj[nickname]; ?>",
                            openid: "<?php echo @$user_obj[openid]; ?>",
                           city:"<?php echo @$user_obj[city]; ?>",
                           province:"<?php echo @$user_obj[province]; ?>",
                           sex:"<?php echo @$user_obj[sex]; ?>",
                           Place:loc,
                           Distance:dis,
                           oname:oname,
                           country:"<?php echo @$user_obj[country]; ?>"
                       },
                       function(data,status){
                           //alert(dis+"ForTestonly数据：" + data + "\n状态：" + status);
                           var l='Test';
                       }); 
            });
        });
    </script>
    <?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1256133943).'" width="0" height="0"/>';?>
    
</body>
   
 <script type="application/javascript">
     
     
    function jump(){
        var user = {
        name: "<?php echo @$user_obj[nickname]; ?>",
        openid: "<?php echo @$user_obj[openid]; ?>",
        sex: "<?php echo @$user_obj[sex]; ?>",
        city: "<?php echo @$user_obj[city]; ?>",
        province: "<?php echo @$user_obj[province]; ?>",
        othplace:document.getElementById("text_").value,
        othname:document.getElementById("username2").value,
        distance:dis,
            //myplace:document.getElementById("mypos").value,
        country: "<?php echo @$user_obj[country]; ?>"
        }//定義一個json結構體user，存放後端傳過來的數據
        var json = JSON.stringify(user);//把user轉換成字符串
        
        localStorage.setItem("json",json);//把json存入本地存儲
        
        var p = 1 - user.distance/4458;
       var percent;
           if(p > 0){
                percent = Math.round((1-p)*100);
            }
            else{
                percent = 99;
            }
        if(loc1!=null&&loc2!=null){
            //Pass value to show-distance.php and save data in database 
            window.open('show-distance.php?'+"xx=<?php echo @$user_obj[openid]; ?>&yy="+dis+"&nickname=<?php echo @$user_obj[nickname]; ?>&mypos="+0+"&oplace="+document.getElementById("text_").value+"&oname="+document.getElementById("username2").value+"&percent="+percent);
        }
    else{
        //location.reload(false); 
        document.getElementById("alert_tip").style.visibility='visible';
        
    }
        
        

        //$mysql  =   new SaeMysql();
    
        //$sql    =   "INSERT INTO `user`(`openid`,`nickname`,`sex`) VALUES('$user_obj[openid]','$user_obj[nickname]','$user_obj[sex]')";

//$mysql->runSql($sql);    //执行插入数据的操作

        //echo 'Save!!!'; 

        }
    
   var dis;
    function passvalue() {
        if(loc1!=null&&loc2!=null){
    
        var user = {
        name: "<?php echo @$user_obj[nickname]; ?>",
        openid: "<?php echo @$user_obj[openid]; ?>",
        sex: "<?php echo @$user_obj[sex]; ?>",
        city: "<?php echo @$user_obj[city]; ?>",
        province: "<?php echo @$user_obj[province]; ?>",
        othplace:document.getElementById("text_").value,
        othname:document.getElementById("username2").value,
        distance:dis,
        myplace:document.getElementById("mypos").value,
        country: "<?php echo @$user_obj[country]; ?>"
        }//定義一個json結構體user，存放後端傳過來的數據
        var json = JSON.stringify(user);//把user轉換成字符串
        localStorage.setItem("json",json);//把json存入本地存儲
        }
        
    }
    //JSON.parse(localStorage.getItem("json"));//這種方法可以讀出數據並轉換成json格式
    
    dis='0';
     
    var map = new BMap.Map("container");
    var loc1 ;
    var loc2 ;
    var distance;

    map.centerAndZoom("香港", 12);
    map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用
    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
    map.addControl(new BMap.OverviewMapControl({ isOpen: true, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开

    var localSearch = new BMap.LocalSearch(map);
    localSearch.enableAutoViewport(); //允许自动调节窗体大小
    
    
    
function searchByStationName() {
   
    
    
    map.clearOverlays();//清空原来的标注
    var keyword = document.getElementById("text_").value;
    
    var y1 = document.getElementById("distance1");

    localSearch.setSearchCompleteCallback(function (searchResult) {
       
        var poi = searchResult.getPoi(0);
        document.getElementById("result_").value = poi.point.lng + "," + poi.point.lat;
        map.centerAndZoom(poi.point, 13);
        var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
        loc1=poi.point.lat;
        loc2=poi.point.lng;
        //y1 = document.getElementById("distance1");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showdistance);   //y1.innerHTML = "xxxxxxx :";
        } else { 
            y1.innerHTML = "Geolocation is not supported by this browser.";
        }

        map.addOverlay(marker);
        var content = document.getElementById("text_").value + "<br/><br/>经度：" + poi.point.lng + "<br/>纬度：" + poi.point.lat;
        var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>");
        marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
        // marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    });
    localSearch.search(keyword);
    
}
     
    function showdistance(position) {
        y1 = document.getElementById("distance1");
        distance = getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude);
        y1.innerHTML = "你们两个人的距离 :"+ getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude)+'KM';
        document.getElementById("result2_").value= getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude);
         dis= getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude);
        
}
    

    var EARTH_RADIUS = 6378.1370;    //单位kM
    var PI = Math.PI;
    
    function getRad(d){
        return d*PI/180.0;
    }
    

    
    /**
     * caculate the great circle distance
     * @param {Object} lat1
     * @param {Object} lng1
     * @param {Object} lat2
     * @param {Object} lng2
     */
    function getGreatCircleDistance(lat1,lng1,lat2,lng2){
        var radLat1 = getRad(lat1);
        var radLat2 = getRad(lat2);
        
        var a = radLat1 - radLat2;
        var b = getRad(lng1) - getRad(lng2);
        
        var s = 2*Math.asin(Math.sqrt(Math.pow(Math.sin(a/2),2) + Math.cos(radLat1)*Math.cos(radLat2)*Math.pow(Math.sin(b/2),2)));
        s = s*EARTH_RADIUS;
        s = Math.round(s);     
        return s;
    }
</script>
    
<?php
//echo $_SESSION['username'];
//echo $_SESSION['openid'];
//echo $_SESSION['city'];
//echo $_SESSION['province'];
//echo $_SESSION['country'];
$_SESSION['Other_Name'] = $_POST['username2'];
$_SESSION['Other_Place'] = $_POST['OtherPlace'];
//echo "Test";
//echo $_SESSION['Other_Name'];
//echo $_SESSION['Other_Place'];
//$mysql  =   new SaeMysql();
    

//$sql    =   "INSERT INTO `user`(`openid`,`nickname`,`Other_Name`,`sex`,`city`,`province`,`country`) VALUES('$openid','$username','$username2','$sex','$city','$province','$country')";
//$mysql->runSql($sql);    //执行插入数据的操作
?>

     
</html>
