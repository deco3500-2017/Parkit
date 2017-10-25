function initAutocomplete() {

	//Google Map and Directions objects
	directionsService = new google.maps.DirectionsService();
	directionsDisplay = new google.maps.DirectionsRenderer();
	map = new google.maps.Map(document.getElementById('map'), {
		
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
	directionsDisplay.setPanel(document.getElementById('panel'));

	 /*var request = {
        origin: 'Jocks Rd, St Lucia', 
        destination: '3 Carr St, St Lucia QLD 4067',
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
    	    directionsDisplay.setDirections(response);
        }
    });*/

	var infoWindow = new google.maps.InfoWindow;

	//Reads the XML File and gathers column data for each parking space entry
	downloadUrl('dummydb.xml', function(data) {
		xml = data.responseXML;
		var markers = xml.documentElement.getElementsByTagName('marker');
		Array.prototype.forEach.call(markers, function(markerElem) {
		var id = markerElem.getAttribute('id');
		var address = markerElem.getAttribute('address');
		var availabilty = markerElem.getAttribute('available');
		var rate = markerElem.getAttribute('rate');
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
		var text1 = document.createElement('text');
		text1.textContent = address
		infowincontent.appendChild(text1);

		//Writes the Availabilty to a text element for each marker
		var text2 = document.createElement('text');
		text2.textContent = availabilty
		infowincontent.appendChild(document.createElement('br'));
		infowincontent.appendChild(text2);

		//Writes the rate to a text element for each marker
		var text3 = document.createElement('text');
		text3.textContent = rate
		infowincontent.appendChild(document.createElement('br'));
		infowincontent.appendChild(text3);

		//Creates the button for each marker
		var bookButton = document.createElement('button');
		var buttonText = document.createTextNode('Book Now');
		bookButton.setAttribute('onclick','bookNow('+id+');'); 
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
			//drawDirections();
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


function bookNow(id){
	console.log("help");
	var marker = xml.documentElement.getElementsByTagName('marker')[id - 1];
	address = marker.getAttribute("address");
	var request = {
        origin: 'Jocks Rd, St Lucia', 
        destination: address,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
    	    directionsDisplay.setDirections(response);
        }
    });
}
