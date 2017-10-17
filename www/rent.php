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
    <!-- Navbar -->
    <div class="row" id="nav">
        <div class="col-xs-2 col-xs-offset-1" id="hamburger">
            <a onclick="toggleMenu()"><img class="vertical-center" id="hamburger-icon" src="images/hamburger.png" alt="hamburger menu"></a>
        </div>

        <div class="col-xs-8" id="searchbar">
            <input class="vertical-center" id="pac-input" class="controls" type="text" placeholder="Search Box">
        </div>               
    </div>


    <!-- Options + Map container -->
    <div class="row" id="main-container">

        <!-- Options -->
        <div class="col-xs-6" id="options-menu">
        </div>
        <!-- Map -->
        <div class="col-xs-12" id="map"
        ></div>
    </div>

    
    <!-- Creates the Map Object -->
    <script src="js/maps.js"></script>
    <!-- Google API Key -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhfQaHai0ydMXiqkKdszmOUSA9qZdsEx0&callback=initMap&libraries=places&callback=initAutocomplete">
    </script>    
</body>

</html>