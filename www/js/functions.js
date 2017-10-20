/* Hides login page & Loads the registration form */
function loadRegistration(){
    document.getElementById("login-container").style.display = "none";
    document.getElementById("registration-container").style.display = "block";
}

/* Hides registration form & loads a thank you.  Redirects after 3seconds. */
function loadThanks(){
    document.getElementById("registration-container").style.display = "none";
    document.getElementById("thanks-container").style.display = "block";
    setTimeout(loadOptions, 3000);
}

/* Hides login page & Loads the registration form */
function loadOptions(){
    document.getElementById("login-container").style.display = "none";
    document.getElementById("thanks-container").style.display = "none";
    document.getElementById("choice-container").style.display = "block";
}

/* Redirects the user to the google maps page */
function mapRedirect(){
    window.location.href = "rent.php";
}

/* Toggles between hiding and showing the options menu on the maps page */
function toggleMenu(){
    var x = document.getElementById("options-menu");

    if (x.style.display === "none") {
        x.style.display = "block";
        
        /* Resizes the map to fit */
        document.getElementById("map").className = "col-xs-6";
;
    } else {
        x.style.display = "none";
      
        /* Resize the map to take full space again */
        document.getElementById("map").className = "col-xs-12";
    }
}

/* Toggles between hiding and showing the searchbar on the maps page */
function toggleSearch(){
    var x = document.getElementById("searchbar");

    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("search-icon").classList.remove("col-xs-offset-7");
        document.getElementById("pac-input").focus();
;
    } else {
        x.style.display = "none";
        document.getElementById("search-icon").classList.add("col-xs-offset-7");
    }
}


/* Hides the main menu divs */
function hideMainDivs(){
    document.getElementById("nav").style.display = "none";
    document.getElementById("main-container").style.display = "none";
}

/* Hides all of the sub menu divs so it does not have to be done each function */
function hideMenuDivs(){
    document.getElementById("favourites").style.display = "none";
    document.getElementById("history").style.display = "none";
    document.getElementById("your-cars").style.display = "none";
    document.getElementById("your-parks").style.display = "none";
    document.getElementById("credit-details").style.display = "none";
    document.getElementById("payment-details").style.display = "none";
    document.getElementById("lease-summary").style.display = "none";
    document.getElementById("add-car").style.display = "none";
}

/* Loads the favourites 'page' */
function loadFavourites(){
        /* Hides the other content */
        hideMainDivs();
        hideMenuDivs();
        /* Displays the correct content */
        document.getElementById("sub-menu").style.display = "block";
        document.getElementById("sub-menu-title").innerHTML = "Your Favourites";
        document.getElementById("favourites").style.display = "block";
}

function loadHistory(){
    /* Hides the other content */
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Parking History";
    document.getElementById("history").style.display = "block";
}

function loadCars(){
    /* Hides the other content */
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Your Cars";
    document.getElementById("your-cars").style.display = "block";
}

function addCars(){
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Add Car";
    document.getElementById("add-car").style.display = "block";
}

function loadParks(){
    /* Hides the other content */
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Your Parks";
    document.getElementById("your-parks").style.display = "block";
}

function loadCredit(){
    /* Hides the other content */
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Credit Card Details";
    document.getElementById("credit-details").style.display = "block";
}

function loadPayment(){
    /* Hides the other content */
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Payment Details";
    document.getElementById("payment-details").style.display = "block";
}

function loadLease(){
    /* Hides the other content */
    hideMainDivs();
    hideMenuDivs();
    document.getElementById("sub-menu").style.display = "block";
    document.getElementById("sub-menu-title").innerHTML = "Lease Summary";
    document.getElementById("lease-summary").style.display = "block";
}