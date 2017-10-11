<?php

require_once 'connect.php';

$currentlyBooked = "0";

try{
	$query = $connection-> prepare("SELECT * FROM parkingspaces WHERE currentlyBooked = '$currentlyBooked'");
	$query -> execute (array(":currentlyBooked" => $currentlyBooked));
	$result = $query -> fetch(PDO :: FETCH_ASSOC);
}

catch(PDOException $e){
echo $e->getMessage();
}

?>