var map;
var marker;

function bindInfoWindow(map, infoWindow) {


  google.maps.event.addListener(map, 'click', function( event ){
    var lat = event.latLng.lat();
    var lon = event.latLng.lng();
    document.getElementById('longitude').value = lon.toFixed(3);
    document.getElementById('latitude').value = lat.toFixed(3);
            alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() ); 
  });

  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng, map);
  });
}

function placeMarker(location, map) {
    if (marker == undefined){
        marker = new google.maps.Marker({
            position: location,
            map: map,
            animation: google.maps.Animation.DROP,
        });
    }
    else{
        marker.setPosition(location);
    }
    map.setCenter(location);
}

  function initialize() {
    var mapOptions = {
      zoom: 4,
      center: new google.maps.LatLng(37.6, -95.665)
    };
    var infoWindow = new google.maps.InfoWindow;
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    bindInfoWindow(map, infoWindow);
  }

  google.maps.event.addDomListener(window, 'load', initialize);




