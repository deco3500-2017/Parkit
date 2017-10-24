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
                    <a onclick="loadAbout()"><li>About Parkit</li></a>
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
                </div>
            </div>
        </div>

        <!-- History -->
        <div class="row" id="history">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Time</th>
                            <th>Rate</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>23/10/17</td>
                            <td>16 Vallely St</td>
                            <td>1hrs</td>  
                            <td>$2/hour</td>   
                            <td>$2</td>                     
                        </tr>
                         <tr>
                            <td>12/10/17</td>
                            <td>89 Harbour Rd</td>
                            <td>2hrs</td>  
                            <td>$3/hour</td>   
                            <td>$6</td>                     
                        </tr>
                         <tr>
                            <td>11/10/17</td>
                            <td>5 Orange Ave</td>
                            <td>4hrs</td>  
                            <td>$5/hour</td>   
                            <td>$20</td>                     
                        </tr>
                         <tr>
                            <td>30/9/17</td>
                            <td>123 Fake St</td>
                            <td>2hrs</td>  
                            <td>$2/hour</td>   
                            <td>$4</td>                     
                        </tr>
                    </tbody>
                </table>
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

                <button onclick="addCars()" class="btn btn-default center-block">Add New Car</button>
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
                    <button onclick="loadCars()" type="button" class="btn btn-default text-center center-block">Submit</button>
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
                        <p class="park-description">Undercover, secure parking on Queen Street</p>
                        <p class="park-price">$5 per hour</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                </div>
                <!-- Each Park -->
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-description">Undercover, secure parking on Queen Street</p>
                        <p class="park-price">$5 per hour</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                </div>
                <!-- Each Park -->
                <div class="row list-item">
                    <div class="col-xs-3 image-div">
                        <img src="images/carparks/empty-lot.jpg" alt="carpark image">
                    </div>
                    <div class="col-xs-9 list-text">
                        <p class="park-description">Undercover, secure parking on Queen Street</p>
                        <p class="park-price">$5 per hour</p>
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-filled" alt="Star" src="images/star-filled.png">
                        <img class="star-unfilled" alt="Star Unfilled" src="images/star-unfilled.png">
                    </div>
                </div>  

                <button onclick="loadNewParks()" class="btn btn-default center-block">Add New Park</button>                            
            </div>
        </div>

        <div class="row" id="add-park">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <form id="add-space">
                    <div class="form-group">
                        <label class="sr-only" for="Address">Address:</label>
                        <input type="text" class="form-control" id="park-address" placeholder="Address:">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="park-times">Times Available:</label>
                        <input type="text" class="form-control" id="park-times" placeholder="Times Available: (e.g 12-3pm Mon-Fri)">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="park-rate">Hourly Rate:</label>
                        <input type="text" class="form-control" id="park-rate" placeholder="Hourly Rate:">
                    </div>
                    <div class="form-group">
                        <label class="" for="park-pic">Upload Picture:</label>
                        <span class="btn btn-default btn-file"><input type="file"></span>
                    </div>
                    <button onclick="loadParks()" type="button" class="btn btn-default text-center">Submit</button>
                </form>
            </div>
        </div>

        <!-- Credit Card Details -->
        <div class="row" id="credit-details">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Card Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Visa</td>
                                <td>**** **** **** 7822</td>               
                            </tr>
                            <tr>
                                <td>Mastercard</td>
                                <td>**** **** **** 4580</td>                                 
                            </tr>
                        </tbody>
                    </tbody>
                </table>
                <button onclick="addCard()" type="button" class="btn btn-default text-center">Add Card</button>
            </div>
        </div>

        <!-- Adding a Credit Card -->
        <div class="row" id="add-credit-card">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <form id="add-car">
                        <div class="form-group">
                            <label class="sr-only" for="card-number">Card Number:</label>
                            <input type="text" class="form-control" id="card-number" placeholder="Card Number:">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="card-expiry">Card Expiry:</label>
                            <input type="text" class="form-control" id="card-expiry" placeholder="Expiry Date: (MM/YY)">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="card-cvc">Card CVC</label>
                            <input type="text" class="form-control" id="card-cvc" placeholder="CVC:">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="card-name">Name on Credit Card:</label>
                            <input type="text" class="form-control" id="card-name" placeholder="Name on Credit Card:">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="card-country">Country:</label>
                            <input type="text" class="form-control" id="card-country" placeholder="Country: (e.g Australia)">
                        </div>
                        <button onclick="loadCredit()" type="button" class="btn btn-default text-center center-block">Submit</button>
                </form>
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

        <!-- Payment Details -->
        <div class="row" id="about">
            <div class="col-xs-10 col-xs-offset-1 sub-menu-container">
                <p>Parkit aims to promote coordination in the community by providing a mechanism
                to manage and maximise on available vacant parking spaces.  By raising awareness of 
                available parking in and around desired destinations, traffic congestion can be minimised
                as travellers avoid the madness of driving around in circles to find a parking spot.  This
                awareness can create a synergy and sense of community - an Active Community</p>
                <p>Parkit provides communication and interaction between people on a mobile platform.  Users
                can access information on the move with content delivered based on location.  The mix between
                social and mobile is a great support for social interaction.</p>
                <p>Join us in our Parkit community to minimise the congestion, reduce the frustration and
                elevate the excitement in the air as we work together to create an Active Community</p>
                <button onclick="mapRedirect()" class="btn btn-default center-block">Back</button>
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