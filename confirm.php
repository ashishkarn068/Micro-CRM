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

		echo 'subscribed';

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
		echo'error';
	}
}

?>