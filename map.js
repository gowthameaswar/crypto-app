function getCoordinates() {
  var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  };

  function success(pos) {
    var crd = pos.coords;
    var lat = crd.latitude;
    var lng = crd.longitude;
    var coordinates = [lng, lat];
    console.log(`Latitude: ${lat}, Longitude: ${lng}`);
    displayMap(coordinates);
  }

  function error(err) {
    console.warn(`ERROR(${err.code}): ${err.message}`);
  }

  navigator.geolocation.getCurrentPosition(success, error, options);
}

function displayMap(coordinates) {
  mapboxgl.accessToken = 'pk.eyJ1IjoiZ293dGhhbTIwMDMiLCJhIjoiY2xlNDBibXR5MDd2cTNwbnluaTZ6cHg2ayJ9.RIRwrcJM2oFWnsxgDgHMwA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: coordinates,
    zoom: 15
  });

  var marker = new mapboxgl.Marker()
    .setLngLat(coordinates)
    .addTo(map);
}
