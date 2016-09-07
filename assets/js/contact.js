function initMap() {
    var myLatLng = {lat: 36.621402, lng: 127.286354};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: "Here! CIC"
    });
}