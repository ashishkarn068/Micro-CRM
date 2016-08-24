<?php

	$username = "root";
	$password = "";
	$database = "login";
	$server = "127.0.0.1";

	$db_handle = mysql_connect($server, $username, $password);
	$db_found = mysql_select_db($database, $db_handle);


?>