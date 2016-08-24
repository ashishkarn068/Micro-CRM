<?php

	$username = "root";
	$password = "";
	$database = "webapp";
	$server = "127.0.0.1";

	$conn = mysql_connect($server, $username, $password);
	$db_found = mysql_select_db($database, $conn) or die("Could Not Connect");

	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}


?>