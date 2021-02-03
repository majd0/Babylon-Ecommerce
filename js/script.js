function initMap(){
  let location = {lat: 26.3928, lng: 50.1926};
  let map = new google.maps.Map(document.getElementById(map), {
    zoom: 4,
    center: location;
  });
}
<script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAKvnZhKzKUF13iLn7XZIKbo8elXAY5B3Qcallback=initMap"></script>
