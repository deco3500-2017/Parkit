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