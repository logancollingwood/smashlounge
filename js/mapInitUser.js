var map;
var customIcons = {
      'All': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
      },
      'Smash 64': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
      },
      'Smash Melee': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
      },
      'Smash Brawl': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
      },
      'Project M': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/purple-dot.png'
      },
      'Smash 4': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/orange-dot.png'
      },
    };


function initialize() {
  var mapOptions = {
    zoom: 4,
    center: new google.maps.LatLng(37.6, -95.665)
  };
  var infoWindow = new google.maps.InfoWindow;
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  downloadUrl("../api/usersXML.php", function(data) {
    var xml = data.responseXML;
    var markers = xml.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers.length; i++) {
      var name = markers[i].getAttribute("name");
      var link = markers[i].getAttribute("href");
      var region = markers[i].getAttribute("region");
      var type = markers[i].getAttribute("type");
      var point = new google.maps.LatLng(
        parseFloat(markers[i].getAttribute("lat")),
        parseFloat(markers[i].getAttribute("lng")));
      var html = "<b>" + name + "</b><br/>"
      html += type + "<br/>"
      html += "<a href='" + link + "'>Profile" + "</a><br/>"; 
      html += region + "<br/>";
      var icon = customIcons[type] || {};
      var marker = new google.maps.Marker({
        map: map,
        position: point,
        icon: icon.icon
      });
      bindInfoWindow(marker, map, infoWindow, html);
    }
  });
}



google.maps.event.addDomListener(window, 'load', initialize);

function bindInfoWindow(marker, map, infoWindow, html) {
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
  });

  google.maps.event.addListener(map, 'click', function( event ){
    var lat = event.latLng.lat();
    var lon = event.latLng.lng();
    document.getElementById('longitude').value = lon.toFixed(3);
    document.getElementById('latitude').value = lat.toFixed(3);
    $("#longitude").html = lon;
            alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() ); 
  });
}

function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
  };
  request.open('GET', url, true);
  request.send(null);
}

function doNothing() {}
