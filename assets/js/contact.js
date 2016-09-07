var myLatlng = new google.maps.LatLng(36.621402,127.286354);
var mapOptions = {
    zoom: 4,
    center: myLatlng
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);

var marker = new google.maps.Marker({
    position: myLatlng,
    title:"Here! CIC"
});
marker.setMap(map);