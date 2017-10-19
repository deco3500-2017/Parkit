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

        <div class="col-xs-6 col-xs-offset-3" id="searchbar">
            <input class="vertical-center" id="pac-input" class="controls" type="text" placeholder="Search Box">
        </div>               
    </div>


    <!-- Main Container -->
    <div class="row" id="main-container">

        <!-- Options container -->
        <div class="col-xs-6" id="options-menu">

            <div class="col-xs-12" id="user-profile">
                <img src="images/profile.png" alt="profile picture placeholder">
                <div class="col-xs-8 col-xs-offset-2" id="user-id">
                    <p>Test User</p>
                    <p>email@address.com</p>
                </div>
            </div>

            <div class="col-xs-12" id="options">
                <ul>
                    <a onclick="loadFavourites()"><li>Favourites</li></a>
                    <a onclick="loadHistory()"><li>History</li></a>
                    <a onclick="loadCars()"><li>Your Cars</li></a>
                    <a onclick="loadParks()"><li>Your Parks</li></a>
                    <a onclick="loadCredit()"><li>Credit Card Details</li></a>
                    <a onclick="loadPayment()"><li>Payment Details</li></a>
                    <a onclick="loadLease()"><li>Lease Summary</li></a>
                    <a onclick=""><li>Log Out</li></a>
                </ul>
            </div>
        </div>

        <!-- Map container -->
        <div class="col-xs-12" id="map">
        </div>
    </div>

    <div class="row" id="sub-menu">

        <!-- Submenu Header-->
        <div class="navbar navbar-default" id="sub-menu-header">
            <img id="logo" src="images/logo.png" alt="Parkit Logo">           
            <h1 id="sub-menu-title">Parkit</h1>
        </div>
        <!-- Favourites -->
        <div class="row" id="favourites">
            <div class="col-xs-10 col-xs-offset-2">
                <p>You have no favourites</p>
            </div>
        </div>

        <!-- History -->
        <div class="row" id="history">
            <p>You have no history</p>
        </div>

        <!-- Your Cars -->
        <div class="row" id="your-cars">
            <p>You have no cars</p>
        </div>

        <!-- Your Parks -->
        <div class="row" id="your-parks">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <!-- Each Park -->
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-owner">Test User</p>
                        <p class="park-description">Cheap parking super close to the city</p>
                        <p class="park-price">$20</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                    <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>
                <!-- Each Park -->
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-owner">Test User</p>
                        <p class="park-description">Cheap parking super close to the city</p>
                        <p class="park-price">$20</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                    <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>
                <!-- Each Park -->
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-owner">Test User</p>
                        <p class="park-description">Cheap parking super close to the city</p>
                        <p class="park-price">$20</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                    <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>                              
            </div>
        </div>

        <!-- Credit Card Details -->
        <div class="row" id="credit-details">
            <p>You have no details</p>
        </div>

        <!-- Payment Details -->
        <div class="row" id="payment-details">
            <p>You have no details still</p>
        </div>

        <!-- Lease Summary-->
        <div class="row" id="lease-summary">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">

            <!-- Each lease Item -->
            <div class="row list-item">
                <div class="col-xs-3 image-div">
                    <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                </div>
                <div class="col-xs-9 list-text">
                    <p class="park-owner">Jo Smith</p>
                    <p class="park-description">Cheap parking super close to the city</p>
                    <p class="park-price">$20</p>
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                </div>
                <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
            </div>
            <!-- Each lease Item -->
            <div class="row list-item">
                <div class="col-xs-3 image-div">
                    <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                </div>
                <div class="col-xs-9 list-text">
                    <p class="park-owner">Jo Smith</p>
                    <p class="park-description">Cheap parking super close to the city</p>
                    <p class="park-price">$20</p>
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                </div>
                <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
            </div>
                 <!-- Each lease Item -->
            <div class="row list-item">
                <div class="col-xs-3 image-div">
                     <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                </div>
                <div class="col-xs-9 list-text">
                    <p class="park-owner">Jo Smith</p>
                    <p class="park-description">Cheap parking super close to the city</p>
                    <p class="park-price">$20</p>
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                </div>
                 <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
            </div>
            <!-- Each lease Item -->
            <div class="row list-item">
                <div class="col-xs-3 image-div">
                    <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                </div>
                <div class="col-xs-9 list-text">
                    <p class="park-owner">Jo Smith</p>
                    <p class="park-description">Cheap parking super close to the city</p>
                    <p class="park-price">$20</p>
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-filled" alt="Star" src="images/star-filled.png">
                    <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                </div>
                    <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>
            </div>
        </div>

        <!-- Bottom Bar-->
        <div class="nav navbar-fixed-bottom" id="sub-menu-footer">
            <a href="rent.php">Temp Link to go back</a>
        </div>
    </div>
    
    <!-- Creates the Map Object -->
    <script src="js/maps.js"></script>
    <!-- Google API Key -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhfQaHai0ydMXiqkKdszmOUSA9qZdsEx0&callback=initMap&libraries=places&callback=initAutocomplete">
    </script>    
</body>

</html>