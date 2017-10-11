<?php



//Credentials
$mysql_user = "Parkit";
$mysql_pass = "parkitdb";
 
//Connect to DB
try{
	$connection = new PDO('mysql:host=localhost; dbname=Parkit', $mysql_user, $mysql_pass);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}

catch(PDOException $e){
	echo $e->getMessage();
 }
?>