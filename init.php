<?php

	# Database details 
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

	# Setting up PHP SDK for mailgun and defining few constants
	require_once 'vendor/autoload.php';

	define('MAILGUN_KEY', 'key-9072bd52a084bd5f6254e4f4cc1f75f4');
	define('MAILGUN_PUBKEY', 'pubkey-c41c35d8720f3f60959119e7a561749c');
	define('MAILGUN_DOMAIN', 'sandboxb676bd5381e6447d9493afe671a8d24c.mailgun.org');
	define('MAILGUN_LIST', 'news@sandboxb676bd5381e6447d9493afe671a8d24c.mailgun.org');
	define('MAILGUN_SECRET', 'It\'s not who I am underneath but what I do that defines me');

	$client = new \Http\Adapter\Guzzle6\Client();

	# Now going to create two mailgun instances, one with MAILGUN_KEY and othe with MAILGUN_PUBKEY

	# This gives all functionalities to add users, send emails and et cetera
	$mailgun = new Mailgun\Mailgun(MAILGUN_KEY, $client);

	# Instantiate the client.
	$mgClient = new Mailgun\Mailgun('key-9072bd52a084bd5f6254e4f4cc1f75f4');

	# Issue the call to the client.
	$result = $mgClient->get("lists", array());
	
	
	# $dlist stores all the details of the mailing lists

	$dlist = $result->http_response_body->items;

	
	# This validates the email


	$mailgunValidate = new Mailgun\Mailgun(MAILGUN_PUBKEY, $client);

	# This helps in adding users to lists

	$mailgunOptIn = $mailgun->OptInHandler();

?>