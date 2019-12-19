<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Select Your Quizz </title>
	<style>
		*{	
			font-family: 'Josefin Sans', sans-serif;
		}
		html{
			scroll-behavior: smooth;
		}
		#dscroll{
			scroll-behavior: smooth;
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
<body>
	<div class="container-fluid" id="division" style="
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
							<li class="nav-item active">
								<a class="nav-link bg-dark" href="#Gscroll">Join a Game</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
							</li>
						</ul>
						<!-- LOGIN Button --> 
						<button class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">Login <i class="fas fa-key"></i></button>
						<!-- The Modal -->
						<div class="modal fade" id="myModal">
					    	<div class="modal-dialog modal-dialog-centered">
					    		<div class="modal-content">
					            <!-- Modal Header -->
					        		<div class="modal-header">
					        			<h4 class="modal-title">Login <i class="fas fa-user-tie"></i></h4>
					        			<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		</div>
					       	        <!-- Modal body -->
					        		<div class="modal-body">
					        			<form action="validation.php">
								  			<div class="form-group">
								    			<label for="email">username</label>
								    				<input type="text" class="form-control" id="email" autocomplete="off">
								 			</div>
								  			<div class="form-group">
								    			<label for="pwd">Password</label>
								    			<input type="password" class="form-control" id="pwd">
								  			</div>
								  			<button type="submit" class="btn btn-primary">Login</button>
										</form>
					        		</div>
					       	        <!-- Modal footer -->
					       			<div class="modal-footer">
					          			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        		</div>
					            </div>
					    	</div>
						</div>

						&nbsp;
								
						<!-- SIGNIN Button -->
						<button class="btn btn-outline-success" data-toggle="modal" data-target="#Modal">SignUp <i class="fas fa-sign-in-alt"></i></button>
						<!-- The Modal -->
						<div class="modal fade" id="Modal">
					    	<div class="modal-dialog modal-dialog-centered">
					    		<div class="modal-content">
					            <!-- Modal Header -->
					        		<div class="modal-header">
					        			<h4 class="modal-title">SignUp <i class="fas fa-user-tie"></i></h4>
					        			<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		</div>
					       	        <!-- Modal body -->
					        		<div class="modal-body">
					        			<form action="registration.php">
								  			<div class="form-group">
								    			<label for="text">username</label>
								    				<input type="text" class="form-control" id="email" autocomplete="off">
								 			</div>
								  			<div class="form-group">
								    			<label for="pwd">Password</label>
								    			<input type="password" class="form-control" id="pwd">
								  			</div>
								  			<button type="submit" class="btn btn-primary">SignUp</button>
										</form>
					        		</div>
					       	        <!-- Modal footer -->
					       			<div class="modal-footer">
					          			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        		</div>
					            </div>
					    	</div>
						</div>
					</div>	
				</nav>
			</header>
		<!-- CHOOSING LANGUAGE -->
		<section class="mt-2">
			<h1 class="text-center text-capitalize mt-4 mb-3"><ins>Choose Your Quiz</ins> <i class="fas fa-book"></i>
			</h1>
			<!--<hr class="w-25 mx-auto mb-5">-->
			<div class="card-columns row mx-auto">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
		  				<a href="instruction.php"><img class="card-img-top" src="images/data.jpg" alt="Card image" style="height: 240px !important;"></a>
		  				<div class="bottom-left">
		  					<h4 class="text-white">Networking</h4>
		  				</div>
		  				<style>
		  					.bottom-left {
								position: absolute;
								bottom: 8px;
								left: 16px;
							}
		  				</style>
		  			</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
		  				<a href="instruction.php"><img class="card-img-top" src="images/linux.jpg" alt="Card image" style="height: 240px !important;"></a>
		  				<div class="bottom-left">
		  					<h4 class="text-white">Linux</h4>
		  				</div>
		  				<style>
		  					.bottom-left {
								position: absolute;
								bottom: 8px;
								left: 16px;
							}
		  				</style>
		  			</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
		  				<a href="instruction.php"><img class="card-img-top" src="images/ai.jpg" alt="Card image" style="height: 240px !important;"></a>
		  				<div class="bottom-left">
		  					<h4 class="text-white">A.I.</h4>
		  				</div>
		  				<style>
		  					.bottom-left {
								position: absolute;
								bottom: 8px;
								left: 16px;
							}
		  				</style>
		  			</div>
				</div>
			</div>
			<div class="card-columns row mx-auto">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
		  				<a href="instruction.php"><img class="card-img-top" src="images/cs.jpg" alt="Card image" style="height: 240px !important;"></a>
		  				<div class="bottom-left">
		  					<h4 class="text-white">Computer Fundamentals</h4>
		  				</div>
		  				<style>
		  					.bottom-left {
								position: absolute;
								bottom: 8px;
								left: 16px;
							}
		  				</style>
		  			</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
		  				<a href="instruction.php"><img class="card-img-top" src="images/os1.jpg" alt="Card image" style="height: 240px !important;"></a>
		  				<div class="bottom-left">
		  					<h4 class="text-white">Operating System</h4>
		  				</div>
		  				<style>
		  					.bottom-left {
								position: absolute;
								bottom: 8px;
								left: 16px;
							}
		  				</style>
		  			</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
		  				<a href="instruction.php"><img class="card-img-top" src="images/dbms4.jpg" alt="Card image" style="height: 240px !important;"></a>
		  				<div class="bottom-left">
		  					<h4 class="text-white">Database</h4>
		  				</div>
		  				<style>
		  					.bottom-left {
								position: absolute;
								bottom: 8px;
								left: 16px;
							}
		  				</style>
		  			</div>
				</div>
			</div>	
		</section>
	</div>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</body>
</html>
