var oSeoulCityPoint = new nhn.api.map.LatLng(36.621401, 127.286414);
var defaultLevel = 11;
var oMap = new nhn.api.map.Map(document.getElementById('map'), { 
                                point : oSeoulCityPoint,
                                zoom : defaultLevel,
                                enableWheelZoom : true,
                                enableDragPan : true,
                                enableDblClickZoom : false,
                                mapMode : 0,
                                activateTrafficMap : false,
                                activateBicycleMap : false,
                                minMaxLevel : [ 1, 14 ],
                                size : new nhn.api.map.Size(1000, 350)           });
var oSlider = new nhn.api.map.ZoomControl();
oMap.addControl(oSlider);
oSlider.setPosition({
        top : 10,
        left : 10
});

var oMapTypeBtn = new nhn.api.map.MapTypeBtn();
oMap.addControl(oMapTypeBtn);
oMapTypeBtn.setPosition({
        bottom : 10,
        right : 80
});

var oThemeMapBtn = new nhn.api.map.ThemeMapBtn();
oThemeMapBtn.setPosition({
        bottom : 10,
        right : 10
});
oMap.addControl(oThemeMapBtn);

var oBicycleGuide = new nhn.api.map.BicycleGuide(); // - 자전거 범례 선언
oBicycleGuide.setPosition({
        top : 10,
        right : 10
}); // - 자전거 범례 위치 지정
oMap.addControl(oBicycleGuide);// - 자전거 범례를 지도에 추가.

var oTrafficGuide = new nhn.api.map.TrafficGuide(); // - 교통 범례 선언
oTrafficGuide.setPosition({
        bottom : 30,
        left : 10
});  // - 교통 범례 위치 지정.
oMap.addControl(oTrafficGuide); // - 교통 범례를 지도에 추가.

var trafficButton = new nhn.api.map.TrafficMapBtn(); // - 실시간 교통지도 버튼 선언
trafficButton.setPosition({
        bottom:10, 
        right:150
}); // - 실시간 교통지도 버튼 위치 지정
oMap.addControl(trafficButton);

var oSize = new nhn.api.map.Size(28, 37);
var oOffset = new nhn.api.map.Size(14, 37);
var oIcon = new nhn.api.map.Icon('http://static.naver.com/maps2/icons/pin_spot2.png', oSize, oOffset);

var oInfoWnd = new nhn.api.map.InfoWindow();
oInfoWnd.setVisible(false);
oMap.addOverlay(oInfoWnd);

oInfoWnd.setPosition({
        top : 20,
        left :20
});

var oLabel = new nhn.api.map.MarkerLabel(); // - 마커 라벨 선언.
oMap.addOverlay(oLabel); // - 마커 라벨 지도에 추가. 기본은 라벨이 보이지 않는 상태로 추가됨.

oInfoWnd.attach('changeVisible', function(oCustomEvent) {
        if (oCustomEvent.visible) {
                oLabel.setVisible(false);
        }
});

var oPolyline = new nhn.api.map.Polyline([], {
        strokeColor : '#f00', // - 선의 색깔
        strokeWidth : 5, // - 선의 두께
        strokeOpacity : 0.5 // - 선의 투명도
}); // - polyline 선언, 첫번째 인자는 선이 그려질 점의 위치. 현재는 없음.
oMap.addOverlay(oPolyline); // - 지도에 선을 추가함.

oMap.attach('mouseenter', function(oCustomEvent) {

        var oTarget = oCustomEvent.target;
        // 마커위에 마우스 올라간거면
        if (oTarget instanceof nhn.api.map.Marker) {
                var oMarker = oTarget;
                oLabel.setVisible(true, oMarker); // - 특정 마커를 지정하여 해당 마커의 title을 보여준다.
        }
});

oMap.attach('mouseleave', function(oCustomEvent) {

        var oTarget = oCustomEvent.target;
        // 마커위에서 마우스 나간거면
        if (oTarget instanceof nhn.api.map.Marker) {
                oLabel.setVisible(false);
        }
});