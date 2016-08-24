<?php
	session_start();
	require_once('init.php');



if(isset($_POST['submit']))
	{

	    $email=mysql_real_escape_string(stripslashes($_POST['email']));
		$password=mysql_real_escape_string(stripslashes($_POST['password']));

		$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
		$result=mysql_query($sql);
		$row  = mysql_fetch_array($result);

		$count=mysql_num_rows($result);
		if($count == 1)
		{
		  	$_SESSION["email"] = $row['email'];
		  	header('Location: ');
			
		}
		else
		{
			echo "wrong credentials";
		}
	}
elseif (isset($_SESSION["email"]))
	{
		echo $_SESSION["email"];
		
		echo '
				<form method="POST">
				  <input type="submit" name="logout" value="Logout"/>
				</form>
		';

		if(isset($_POST['logout']))
		{
			session_destroy();
			header('Location: '); //Dont forget to redirect
			
		}

		
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



