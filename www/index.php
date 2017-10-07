<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<div id="map"></div>
<script>
	function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	  center: new google.maps.LatLng(-27.495738, 153.011882),
	  zoom: 16
	});
	var infoWindow = new google.maps.InfoWindow;

	  // Change this depending on the name of your PHP or XML file
	  downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
		var xml = data.responseXML;
		var markers = xml.documentElement.getElementsByTagName('marker');
		Array.prototype.forEach.call(markers, function(markerElem) {
			
		  var id = markerElem.getAttribute('id');
		  var name = markerElem.getAttribute('name');
		  var address = markerElem.getAttribute('address');
		  var type = markerElem.getAttribute('type');
		  var point = new google.maps.LatLng(
			  parseFloat(markerElem.getAttribute('lat')),
			  parseFloat(markerElem.getAttribute('lng')));

		  var infowincontent = document.createElement('div');
		  var strong = document.createElement('strong');
		  strong.textContent = name
		  infowincontent.appendChild(strong);
		  infowincontent.appendChild(document.createElement('br'));

		  var text = document.createElement('text');
		  text.textContent = address
		  infowincontent.appendChild(text);
		  var icon = customLabel[type] || {};
		  var marker = new google.maps.Marker({
			map: map,
			position: point,
			label: icon.label
		  });
		  marker.addListener('click', function() {
			infoWindow.setContent(infowincontent);
			infoWindow.open(map, marker);
		  });
		});
	  });
	}
</script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhfQaHai0ydMXiqkKdszmOUSA9qZdsEx0&callback=initMap">
    </script>


</body>

</html>