<?php
	session_start();
	# init.php contains database details
	require_once('init.php');


# Function for logging out

	function logout()
	{
			# Destroying Session and Loggin Out
			session_destroy();

			# Redirecting to same page
			header('Location: http://localhost/webapp'); 
	}


# Checking is submit button is clicked or login form is submitted
if(isset($_POST['submit']))
	{

		# Using mysqli_real_escape_string escape sql injection attacks

	    $email=mysqli_real_escape_string($conn,stripslashes($_POST['email']));
		$password=mysqli_real_escape_string($conn,stripslashes($_POST['password']));

		$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
		$result=mysqli_query($conn,$sql);
		$row  = mysqli_fetch_array($result);

		$count=mysqli_num_rows($result);
		if($count == 1)
		{
		  	$_SESSION["email"] = $row['email'];

		  	# Redirecting to the same page after successful login
		  	header('Location: ');
			
		}
		else
		{
			echo "wrong credentials";
		}
	}

# Checking if there is an existing session or not if yes then redirecting to same page with different content
elseif (isset($_SESSION["email"]))
	{
		echo $_SESSION["email"];
		

		# adding component for adding client name and mail
		include 'content.php';

		if(isset($_POST['logout']))
		{
			
			# Calling logout() to do logout

			logout();
			
		}

		
	}
else
{ 
	# This is the HTML page that contains Login Form and it is only loaded when there is not any session
    
    echo'<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	  

	    <title>CRM | Sign In</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">


	    <!-- Custom styles for this template -->
	    <link href="css/signin.css" rel="stylesheet">

	   
	  </head>

	  <body>

	    <div class="container">
	    <br />
	      <form class="form-signin" method="post" action="">
	        <h2 class="form-signin-heading">Please sign in</h2>
	        <label for="inputEmail" class="sr-only">Email address</label>
	        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus><br />
	        <label for="inputPassword" class="sr-only">Password</label>
	        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
	        <div class="checkbox">
	          <label>
	            <input type="checkbox" value="remember-me" name="remember_me"> Remember me
	          </label>
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
	      </form>

	    </div> <!-- /container -->


	    
	  </body>
	</html>';
}


?>



