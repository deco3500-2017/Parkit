<?php 

require 'connect.php';

//Checks if user is logged in, returns true if they are, false if they are not
function loggedin(){
	if(isset($_SESSION['userSession'])){
		return true;
	}
	
	else{
		return false;
	}
}

//Takes a string and outputs a sanitized version for SQL use
function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>