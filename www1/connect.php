<?php

//Checks if user session is started, creates the session if it does not exist
if(!isset($_SESSION)){
    session_start();
	ob_start();
}

include_once "functions.php";

//Credentials
$mysql_user = "Parkit";
$mysql_pass = "parkitdb";
 
//Connect to DB
try{
	$connection = new PDO('mysql:host=localhost; dbname=library', $mysql_user, $mysql_pass);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}

catch(PDOException $e){
	echo $e->getMessage();
 }
?>