<?php
$APPID='wx3fd2fa173fb6f311';
    $REDIRECT_URI='http://2.zhide123.sinaapp.com/callback.php';
    $scope='snsapi_userinfo';
    $state='123';
    //$scope='snsapi_userinfo';//需要授权
    $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$APPID.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';
     header("Location:".$url);
    

$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ 
    die('could not connect:'.mysql_error()); 
}
mysql_select_db(SAE_MYSQL_DB,$con);
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>zhidehaitao</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
</head>
    
<body>
    <br/>
    <br/>
    <br/>
    <br/>
    <div style="width:730px;" >   
        <div class="ui-btn ui-btn-inline">
        TA的地址：<input id="text_" type="text" value="香港" style="margin-right:100px;"/>
        <br/>
        <input type="button" value="计算距离" onclick="searchByStationName();"/>
        <br/>查询结果(经纬度)：<input id="result_" type="text" />
        <p id="distance1"></p>
            
            <div id="subm" name = "waterform2">
            <center><p><b>感謝參與<br></b>
                <input type = "submit" name = "sub" id = "sub5" value = "提交"></center>
        </div>
            
        </div>
        <div id="container" 
            style="position: absolute;
                margin-top:30px; 
                width: 430px; 
                height: 430px; 
                top: 450; 
                border: 1px solid gray;
                overflow:hidden;">
        </div>
        
    </div>
    
     
</body>
    
    
<script type="text/javascript">
    var map = new BMap.Map("container");
    var loc1;
    var loc2;

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
        
        loc1=poi.point.lng;
        loc2=poi.point.lat;
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
        y1.innerHTML = "你们两个人的距离 :"+ getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude)+'M';
}
    

    var EARTH_RADIUS = 6378137.0;    //单位M
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
    function getGreatCircleDistance(Business_Latitude_new,Business_Longitude_new,latitude,longitude){
       return 6371.012 *
       acos(cos(acos(-1) / 180 * Business_Latitude_new) *
            cos(acos(-1) / 180 * latitude) *
            cos(acos(-1) / 180 * Business_Longitude_new - acos(-1) / 180 * longitude) +
            sin(acos(-1) / 180 * Business_Latitude_new) *
            sin(acos(-1) / 180 * latitude))*1;
    }
</script>
     
  
    <?php
echo "Test";
?>
    
    
</html>
   
    