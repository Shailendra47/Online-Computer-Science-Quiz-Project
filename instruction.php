<?php
	session_start();
	
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quizdbase');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Quiz Instructions </title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: 'Josefin Sans', sans-serif;
		}
	</style>
</head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://kit.fontawesome.com/5da368dd82.js"></script>

<meta charset="utf-8">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="background-image: url(images/kai.jpg);">
	<!-- NAVBAR -->
	<div class="container-fluid" style="padding-left: 0!important;padding-right: 0!important;">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="index.php"> Online Computer Science Quiz Portal <i class="fas fa-user-graduate"></i></a>
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link bg-dark" href="game.php">Join a Game</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
						</li>
					</ul>
				</div>	
			</nav>
		</header>
		<br/>
		<div class="container text-white">
			<h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?> </h1>
			<h2 class="text-center"><ins>Read Instructions CareFully</ins>  <i class="fas fa-book-reader"></i></h2>
			<br/>
			<table class="table table-boredered table-striped table-hover">
				<h3 class="text-capitalize pt-5 text-left"><ins>Instruction</ins> <i class="fas fa-chalkboard-teacher"></i></h3>
				<ol type="circle" class="text-left"  style="float: left;font-size: 25px;">
					<li>This is a <ins>FREE</ins> online test. DO NOT pay money to anyone to attend this test.</li>
					<li>Total number of questions : <mark>20</mark>.</li>
					<li>Time alloted : 10 minutes.</li>
					<li>Each question carry 1 mark, <del>negative marks.</del></li>
					<li>DO NOT refresh the page.</li>
					<li><mark>It is mandatory to answer all the questions.</mark></li>
					<li>All the best :).</li>
				</ol>
			</table>
			<form class="form-group text-center" method="post" action="quiztest.php">
				<button class="btn btn-warning" style="font-size: 25px;">Start test <i class="fas fa-arrow-right"></i></button>
			</form>
		</div>
	</div>	
</body>
</html>