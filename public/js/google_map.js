function initMap() {
    // Set the coordinates for the marker
    var myLatLng = {lat: 31.5094375, lng: 74.3364375};

    // Create a map object and set its properties
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: myLatLng
    });

    // Add a marker to the map object and set its position
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Lahore'
    });
  }