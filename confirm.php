<?php

require_once 'init.php';

if(isset($_GET['hash']))
{
	# Generating a hash value and validating it with the  hash value sent to client's email
	$hash = $mailgunOptIn->validateHash(MAILGUN_SECRET, $_GET['hash']);
	//print_r($hash);

	# If both hash matches then
	if($hash)
	{

		# Getting mailingList to which client was registered and client's email address to send a thank you mail.
		$list = $hash['mailingList'];
		$email = $hash['recipientAddress'];

		$mailgun->put('lists/'.$list.'/members/'.$email, [

			'subscribed' => 'yes'

		]);

		echo'<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<meta name="description" content="">
						<meta name="author" content="">
							<title>Confirm</title>
							<!-- Bootstrap core CSS -->
							<link href="css/bootstrap.css" rel="stylesheet">
								<!-- Custom styles for this template -->
								<link href="css/signin.css" rel="stylesheet">
								</head>
								<body>
									<div class="container-fluid">
										<br />
										
											<h2 class="form-signin-heading" style="text-align:center">Thank you for confirming!</h2>
											
												</div>
												<!-- /container -->
											</body>
										</html>';


		# Sending Thank you mail 
		$mailgun->sendMessage(MAILGUN_DOMAIN,  [

			'from'			=> 'Test <test@samples.mailgun.org>',
			'to'			=> $email,
			'subject'		=> 'Successfully Subscribed',
			'html'			=> 'Thank you for confirmation!'

			]);
	}
	else
	{
		echo'<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<meta name="description" content="">
						<meta name="author" content="">
							<title>Confirm</title>
							<!-- Bootstrap core CSS -->
							<link href="css/bootstrap.css" rel="stylesheet">
								<!-- Custom styles for this template -->
								<link href="css/signin.css" rel="stylesheet">
								</head>
								<body>
									<div class="container-fluid">
										<br />
										
											<h2 class="form-signin-heading" style="text-align:center">Error Confirming<br /> :(</h2>
											
												</div>
												<!-- /container -->
											</body>
										</html>';
	}
}

?>