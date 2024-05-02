function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat:     14.997881118312232, lng: 104.1134596710753};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'SISAKET, THA' // Title Location
    });
}
