<?php

	$servername = "localhost";
	$username = "id17619023_root";
	$password = "123@Sampath9";
	$dbname = "id17619023_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		echo "error";
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());

	}

?>