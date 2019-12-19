<?php
	session_start();

	$con = mysqli_connect('localhost','root');
	
	mysqli_select_db($con,'quizdbase');

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Login </title>
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
<body style="background-image: url(images/keyboard.jpg);">
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
							<li class="nav-item active" >
								<a class="nav-link bg-dark" href="" onclick="valid();">Find a Quiz</a>
							</li>
							<script>
								function valid() {
									alert("This page is under construction.");
								}
							</script>
						</ul>	
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
							</li>
							<li class="nav-item active">
							<a class="nav-link" href="about.php">About Us</a>
							</li>
						</ul>
						
					</div>	
				</nav>
			</header>
			<div class="container pt-5 mt-5">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6 card">
					<h2 class="text-center card-header text-dark">Game Login <i class="fas fa-gamepad"></i></h2>
					<form class="card-body" action="gamevalidation.php" method="post">
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
				<div class="col-lg-3"></div>
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