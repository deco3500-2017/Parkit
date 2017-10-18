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


/* Hides all of the sub menu divs so it does not have to be done each function */
function hideMenuDivs(){
    document.getElementById("favourites").style.display = "none";
    document.getElementById("history").style.display = "none";
    document.getElementById("your-cars").style.display = "none";
    document.getElementById("your-parks").style.display = "none";
    document.getElementById("credit-details").style.display = "none";
    document.getElementById("payment-details").style.display = "none";
    document.getElementById("lease-summary").style.display = "none";
}

/* Loads the favourites 'page' */
function loadFavourites(){
        /* Hides the other content */
        document.getElementById("nav").style.display = "none";
        document.getElementById("main-container").style.display = "none";
        hideMenuDivs();
        /* Displays the correct content */
        document.getElementById("sub-menu").style.display = "block";
        document.getElementById("sub-menu-title").innerHTML = "Your Favourites";
        document.getElementById("favourites").style.display = "block";
}
