<?php

	$username = "root";
	$password = "";
	$database = "webapp";
	$server = "127.0.0.1";

	$conn = mysqli_connect($server, $username, $password, $database);
	//$db_found = mysqli_select_db($database, $conn) or die("Could Not Connect");

	if(! $conn )
	{
	  die('Could not connect: ' . mysqli_error());
	}


?>