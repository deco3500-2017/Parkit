<!DOCTYPE html>

<html lang="en">
<head>
	<!-- Bootstrap + bootstrap dependancies -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Title, JS, CSS -->
    <title>Parkit.</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/functions.js"></script>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar" id="nav">
        <div class="row" id="nav-row">
            <div class="col-xs-2" id="hamburger">
                <a onclick="toggleMenu()"><img class="vertical-center" id="hamburger-icon" src="images/hamburger.png" alt="hamburger menu"></a>
            </div>

            <div class="col-xs-7" id="searchbar">
                <input class="vertical-center" id="pac-input" class="controls" type="text" placeholder="Search Box">
            </div>

            <div class="col-xs-2 col-xs-offset-7" id="search-icon">
                <span onclick="toggleSearch()" class="glyphicon glyphicon-search"></span>
            </div> 
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
                    <a href="index.php"><li>Log Out</li></a>
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
            <a href="rent.php"><img id="logo" src="images/logo.png" alt="Parkit Logo"></a>       
            <h1 id="sub-menu-title">Parkit</h1>
        </div>
        <!-- Favourites -->
        <div class="row" id="favourites">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                            <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                        </div>
                        <div class="col-xs-9 list-text">
                            <p class="park-owner">Mark Travois</p>
                            <p class="park-description">covered park, 15m walk away from the University of Queensland</p>
                            <p class="park-price">$5 per hour</p>
                            <img class="star-filled" alt="Star" src="images/star-filled.png">
                            <img class="star-filled" alt="Star" src="images/star-filled.png">
                            <img class="star-filled" alt="Star" src="images/star-filled.png">
                            <img class="star-filled" alt="Star" src="images/star-filled.png">
                            <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                        </div>
                        <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-owner">Sarah Goodchild</p>
                        <p class="park-description">Cheap parking on Ann Street</p>
                        <p class="park-price">$10 per hour</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star Unfilled" src="images/star-unfilled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                    <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-owner">Dominic Wachowski</p>
                        <p class="park-description">Street parking near the Milton CBD</p>
                        <p class="park-price">$3 per hour</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star" src="images/star-filled.png">
                    </div>
                    <img class="favourite" src="images/favourite.png" alt="Favourite Icon">
                </div>
            </div>
        </div>

        <!-- History -->
        <div class="row" id="history">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <p>You have no history</p>
            </div>
        </div>

        <!-- Your Cars -->
        <div class="row" id="your-cars">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Registration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Toyota</td>
                            <td>Corolla</td>
                            <td>142 ZZP</td>                        
                        </tr>
                        <tr>
                            <td>Holden</td>
                            <td>Astra</td>
                            <td>642 TTK</td>
                        </tr>
                    </tbody>
                </table>

                <button onclick="addCars()" class="btn btn-default">Add New Car</button>
            </div>
        </div>

        <!-- Adding New Car -->
        <div class="row" id="add-car">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <form id="add-car">
                    <div class="form-group">
                        <label class="sr-only" for="car-make">Car Make:</label>
                        <input type="text" class="form-control" id="car-make" placeholder="Car Make:  (e.g Toyota)">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="car-model">Car Model:</label>
                        <input type="text" class="form-control" id="car-model" placeholder="Car Model: (e.g Camry">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="registration">Registration</label>
                        <input type="text" class="form-control" id="registration" placeholder="Registration:">
                    </div>
                    <button onclick="loadCars()" type="button" class="btn btn-default text-center">Submit</button>
                </form>
            </div>
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
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <p>You have no details</p>
            </div>
        </div>

        <!-- Payment Details -->
        <div class="row" id="payment-details">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <p>You have no details still</p>
            </div>
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
            <div class="row">
                <div class="col-xs-offset-1"></div>
                <div class="col-xs-4">
                    <a href="rent.php"><img src="images/back.png" alt="Back Arrow"></a>
                </div>
                <div class="col-xs-4">
                    <a href="#"><img src="images/circle.png" alt="Home"></a>
                </div>
                <div class="col-xs-4">
                    <a href="#"><img src="images/square.png" alt="Square"></a>
                </div>
            </div>
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