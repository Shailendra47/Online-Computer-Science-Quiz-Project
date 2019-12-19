<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Quiz -> Test your Skills </title>
	<style>
		*{	
			font-family: 'Josefin Sans', sans-serif;
		}
	</style>
</head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://kit.fontawesome.com/5da368dd82.js"></script>

<meta charset="utf-8">

<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">-->

<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<body style="background-image: url(images/keyboard.jpg);">
	<div class="container-fluid" style="
			padding-left: 0!important;
			padding-right: 0!important;
			">
			<!-- NAVBAR -->
			<header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<a class="navbar-brand" href="#"> Online Computer Science Quiz Portal <i class="fas fa-user-graduate"></i></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item active" >
								<a class="nav-link bg-dark" href="" onclick="valid();">Find a Quiz</a>
							</li>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<li class="nav-item active">
								<a class="nav-link bg-dark" href="login.php">Join a Game</a>
							</li>
						</ul>
						
						<script>
							function valid() {
								alert("This page is under construction.");
							}
						</script>
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="dashboard.php">Home <i class="fas fa-home"></i></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="about.php">About Us</a>
							</li>
							<!-- SIGNIN Button -->
							<button class="btn btn-outline-success" data-toggle="modal" data-target="#Modal">Registration <i class="fas fa-sign-in-alt"></i></button>
							<!-- The Modal -->
							<div class="modal fade" id="Modal">
						    	<div class="modal-dialog modal-dialog-centered">
						    		<div class="modal-content">
						            <!-- Modal Header -->
						        		<div class="modal-header">
						        			<h4 class="modal-title">Registration <i class="fas fa-user-tie"></i></h4>
						        			<button type="button" class="close" data-dismiss="modal">&times;</button>
						        		</div>
						       	        <!-- Modal body -->
						        		<div class="modal-body">
						        			<form name="frmModal" action="registration.php" method="POST">
									  			<div class="form-group">
									    			<label for="text">Username</label>
									    				<input type="text" class="form-control" id="email" name="user">
									 			</div>
									  			<div class="form-group">
									    			<label for="pwd">Password</label>
									    			<input type="password" class="form-control" id="pwd" name="password">
									  			</div>
									  			<div class="form-group">
									    			<label for="pwd">E-mail</label>
									    			<input type="email" class="form-control" id="pwd"
									    			 name="email">
									  			</div>
									  			<div class="form-group">
									    			<label for="pwd">Address</label>
									    			<input type="text" class="form-control" id="pwd" name="address">
									  			</div>
									  			<button type="submit" class="btn btn-primary">SignUp <i class="fas fa-sign-in-alt"></i></button>
											</form>
						        		</div>
						       	        <!-- Modal footer -->
						       			<div class="modal-footer">
						          			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						        		</div>
						            </div>
						    	</div>
							</div>
						</ul>
					</div>	
				</nav>
			</header>
			<!-- Main Content Of This WebPage -->
			<div class="container pt-5 mt-5">
				<div class="row">
					<div class="col-lg-6 pt-4">
						<h1 class="text-white ml-auto">Motivate students and reclaim your time.</h1>
						<h3 class="text-muted ml-auto">
							Free self-paced quizzes to review, assess, and engage—in class and at home.
						</h3>
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#help" style="font-size: 20px;border-radius: 20px;">Help <i class="far fa-question-circle"></i></button>
						
						<!-- Modal -->
						<div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">How to Use...</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <p>
						        	*. First Register yourself then login after that you will automatically going to a quiz
						        </p>
						        <p>
						        	*. if you want to play a quiz game you've to login again in quiz game portal
						        </p>
						        <p>
						        	*. Mouse is compulsary
						        </p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-danger" data-dismiss="modal">Continue to Quiz</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>	
					<div class="col-lg-6 card">
						<h2 class="text-center card-header text-dark">Login <i class="fas fa-user-tie"></i></h2>
						<form class="card-body" action="validation.php" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="user">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button type="submit" class="btn btn-success">Login <i class="fas fa-key"></i></button>
						</form>
					</div>
				</div>
				<style>
					label{
						font-size: 18px;
					}
				</style>
			</div>	
		</div>
		<div>
			<script>
				$(document).ready(function(){
					$("#auto").modal('show');
				});
			</script>
			<div class="modal fade" id="auto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<h5 class="modal-title" id="autoLabel">Welcome</h5>
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true">&times;</span>
			        	</button>
			     	</div>
			      	<div class="modal-body">
			      		<h2 class="text-center">Welcome to Online Computer Science Quiz Portal <i class="far fa-smile-beam" style="font-size: 30px;"></i></h2>
			      	</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" data-dismiss="modal">Continue</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</body>
</html>