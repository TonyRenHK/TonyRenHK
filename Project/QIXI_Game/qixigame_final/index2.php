

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
    <div>
        <table>
            <tr><td>用户信息：</td></tr>
            <tr><td> <img src=" <?php   echo $user_obj['headimgurl'];  ?>"  alt="头像" height="50px" weight="50px"/></td> <td><?php echo $user_obj['nickname']; ?></td></tr>
            <tr><td>来自：</td><td><?php echo $user_obj['city']; ?></td><td><?php echo $user_obj['province']; ?></td><td><?php echo $user_obj['country'];?></td></tr>
            <table>
       
        
        
    </div>
        
    <br/>

            
    <div style="width:730px;" >   
        <div class="ui-btn ui-btn-inline">
        TA的地址：<input id="text_" type="text" value="香港" style="margin-right:100px;"/>
        <br/>
        <input type="button"  value="计算距离" onclick="searchByStationName();"/>
          
  
            
        <br/>查询结果(经纬度)：<input id="result_" type="text" />
        <p id="distance1"></p>
            
          
            <p> lll</p>
        </div>
        <div id="container" 
            style="position: absolute;
                margin-top:30px; 
                width: 430px; 
                height: 430px; 
                top: 780; 
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
        y1.innerHTML = "你们两个人的距离 :"+ getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude)+'KM';
        document.getElementById("result2_").value="你们两个人的距离 :"+ getGreatCircleDistance(loc1,loc2,position.coords.latitude,position.coords.longitude)+'KM';
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
        
        var s = Math.asin(Math.sqrt(Math.pow(Math.sin(a/2),2) + Math.cos(radLat1)*Math.cos(radLat2)*Math.pow(Math.sin(b/2),2)));
        s = s*EARTH_RADIUS;
        s = Math.round(s);     
        return s;
    }
</script>
     
  
    <?php
echo "Test";
?>
    
    
</html>
   
    