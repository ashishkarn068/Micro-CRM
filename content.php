<?php
	ob_start();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title>Dashboard | CRM</title>
		
					<meta charset="utf-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
							<meta name="viewport" content="width=device-width, initial-scale=1">
								<meta name="description" content="">
									<meta name="author" content="">
										
										<!-- Bootstrap core CSS -->
										<link href="css/bootstrap.min.css" rel="stylesheet"/>
										<!-- Custom styles for this template -->
										<link href="css/signin.css" rel="stylesheet">
											<script src="js/jquery.min.js"></script>
											<script src="js/custom.js"></script>
											<script src="js/bootstrap.min.js"></script>
										</head>
										<body>
											<nav class="navbar navbar-inverse navbar-fixed-top">
												<div class="container">
													<div class="navbar-header">
														<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
															<span class="sr-only">Toggle navigation</span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
														<a class="navbar-brand" href="#" style="color:#fff;font-family:Verdana;line-height:10px">CauseCode CRM</a>
													</div>
													<div id="navbar" class="navbar-collapse collapse">
														<form class="navbar-form navbar-right" method="post" action="">
															<button type="submit" class="btn btn-success" name="logout">Logout</button>
														</form>
													</div>
													<!--/.navbar-collapse -->
												</div>
											</nav>
											<div class="container-fluid">
												<div class="row cols-wrapper">
													<div class="col-md-4" style="padding-top:50px;">
														<div class="panel panel-primary">
															<div class="panel-heading">
																<h3 class="panel-title">Add Client</h3>
															</div>
															<div class="panel-body">
																<form role="form" action="" method="post" cla>
																	<div class="col-md-9">
																		<div class="form-group">
																			<div class="input-group">
																				<label for="inputName" >Client Name</label>
																				<input type="text" id="inputName" name="client_name" class="form-control" placeholder="Client Name" required autofocus>
																				</div>
																			</div>
																			<div class="form-group">
																				<div class="input-group">
																					<label for="inputEmail" >Client Email</label>
																					<input type="text" id="inputEmail" name="client_email" class="form-control" placeholder="Client Email" required >
																					</div>
																				</div>

																	      	<div class="form-group">
																	    		<div class="input-group">
																	    	
																	    			<label for="exampleSelect1">Select Mailing List</label>
																			    	<select class="form-control" name="mail_list_option" id="exampleSelect1">
																			      		<option value="-1">Select Mailing List</option>
																					      
																				    </select>
    	</div>
																				</div>
																				<button class="btn btn-primary" type="submit" name="submit_client">Add Client</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
															
																</div>
															</div>
														</body>
													</html>
												