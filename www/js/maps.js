function initAutocomplete() {

	//Google Map and Directions objects
	var directionsService = new google.maps.DirectionsService;
	var directionsDisplay = new google.maps.DirectionsRenderer;
	var map = new google.maps.Map(document.getElementById('map'), {
		
		center: new google.maps.LatLng(-27.495738, 153.011882),
		zoom: 13,
		mapTypeId: 'roadmap',
		zoomControl: true,
		mapTypeControl: false,
		scaleControl: true,
		streetViewControl: false,
		rotateControl: true,
		fullscreenControl: true

	});
	directionsDisplay.setMap(map);
	

	var infoWindow = new google.maps.InfoWindow;

	//Reads the XML File and gathers column data for each parking space entry
	downloadUrl('dummydb.xml', function(data) {
		var xml = data.responseXML;
		var markers = xml.documentElement.getElementsByTagName('marker');
		Array.prototype.forEach.call(markers, function(markerElem) {
		var id = markerElem.getAttribute('id');
		var address = markerElem.getAttribute('address');
		var type = markerElem.getAttribute('type');
		var point = new google.maps.LatLng(
		  parseFloat(markerElem.getAttribute('lat')),
		  parseFloat(markerElem.getAttribute('lng')));

		
		//Sets styling for the content window on marker click
		var infowincontent = document.createElement('div');
		var strong = document.createElement('strong');
		infowincontent.appendChild(strong);
		infowincontent.appendChild(document.createElement('br'));

		//Writes the address to a text element for each marker
		var text = document.createElement('text');
		text.textContent = address
		infowincontent.appendChild(text);

		//Creates the button for each marker
		var bookButton = document.createElement('button');
		var buttonText = document.createTextNode('Book Now');
		bookButton.setAttribute("onclick", "bookNow("+id+")");
		bookButton.appendChild(buttonText);
		infowincontent.appendChild(document.createElement('br'));
		infowincontent.appendChild(bookButton);
	
		//Draws the marker to the map
		var marker = new google.maps.Marker({
			map: map,
			position: point,
		});
		
		//Creates an event listener for markers drawn
		marker.addListener('click', function() {
			infoWindow.setContent(infowincontent);
			infoWindow.open(map, marker);
			drawDirections();
		});
		});
	});

	// Create the search box and link it to the UI element.
	var input = document.getElementById('pac-input');
	var searchBox = new google.maps.places.SearchBox(input);

	// Bias the SearchBox results towards current map's viewport.
	map.addListener('bounds_changed', function() {
	  searchBox.setBounds(map.getBounds());
	});

	var markers = [];
	
	// Listen for the event fired when the user selects a prediction and retrieve
	// more details for that place.
	searchBox.addListener('places_changed', function() {
	  var places = searchBox.getPlaces();

	  if (places.length == 0) {
		return;
	  }

	  // Clear out the old markers.
	  markers.forEach(function(marker) {
		marker.setMap(null);
	  });
	  markers = [];

	  // For each place, get the icon, name and location.
	  var bounds = new google.maps.LatLngBounds();
	  places.forEach(function(place) {
		if (!place.geometry) {
		  console.log("Returned place contains no geometry");
		  return;
		}
		var icon = {
		  url: place.icon,
		  size: new google.maps.Size(71, 71),
		  origin: new google.maps.Point(0, 0),
		  anchor: new google.maps.Point(17, 34),
		  scaledSize: new google.maps.Size(25, 25)
		};

		// Create a marker for each place.
		markers.push(new google.maps.Marker({
		  map: map,
		  icon: icon,
		  position: place.geometry.location
		}));

		if (place.geometry.viewport) {
		  // Only geocodes have viewport.
		  bounds.union(place.geometry.viewport);
		} else {
		  bounds.extend(place.geometry.location);
		}
	  });
	  map.fitBounds(bounds);
	});
}




//Settings for the XML Request
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

/*
function bookNow(parkID){
	$.ajax({
		type: "GET",
		url: 'dummydb.xml',
		dataType: "xml",
		success: function (xml) {
			test =	$(xml).find("marker[id="+parkID+])
			alert(test);
		 }
});
}

*/