<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/functions.js"></script>	
	
	<!-- Bootstrap + bootstrap dependancies -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Search Bar -->
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <!-- Google Maps Container -->
    <div id="map"></div>
    
    <!-- Creates the Map Object -->
    <script src="js/maps.js"></script>
    <!-- Google API Key -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhfQaHai0ydMXiqkKdszmOUSA9qZdsEx0&callback=initMap&libraries=places&callback=initAutocomplete">
    </script>    
</body>

</html>