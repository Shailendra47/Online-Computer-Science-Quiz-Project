<?php
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'sessionpractical');

	if (isset($_POST["done"])) {
		$question = $_POST["question"];
		$q = "INSERT INTO `questions`(`question`) VALUES ( '$question' )";
		$query = mysqli_query($con,$q);
		$opt1 = $_POST["opt1"];
		$opt2 = $_POST["opt2"];
		$opt3 = $_POST["opt3"];
		$opt4 = $_POST["opt4"];
		$correct_answer = $_POST["ans_id"];
		$a = "INSERT INTO `answers`(`opt1`,`opt2`,`opt3`,`opt4`, `ans_id`) VALUES ( '$opt1', '$opt2', '$opt3','$opt4','$ans_id')";
		$query = mysqli_query($con,$a);
	}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Add Q/A </title>
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

<body>
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
						<a class="navbar-brand" href="#">Adding Q / A Panel <i class="fas fa-user-graduate"></i></a>
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="admin.php">Home <i class="fas fa-home"></i></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="about.php">About Us</a>
							</li>
						</ul>
					</div>	
				</nav>
			</header>
			<!-- Main Content Of This WebPage -->
			<div class="container">
				<div class="col-lg-12">
					<br/>
					<h1 class="text-dark text-center"> Add Question / Answer <i class="fas fa-users"></i></h1>
					<form class="form-group" method="post" action="">
						<table class="table table-striped table-hover table-bordered">
							<tr class="">
								<td>Question</td>
								<td><input class="form-control" type="text" class="" name="ques"></td>
							</tr>
							<tr class="">
								<td>Option1</td>
								<td><input class="form-control" type="text" class="" name="opt1"></td>
							</tr>
							<tr class="">
								<td>Option2</td>
								<td><input class="form-control" type="text" class="" name="opt2"></td>
							</tr>
							<tr class="">
								<td>Option3</td>
								<td><input class="form-control" type="text" class="" name="opt3"></td>
							</tr>
							<tr class="">
								<td>Option4</td>
								<td><input class="form-control" type="text" class="" name="opt4"></td>
							</tr>
							<tr class="">
								<td>Correct answer</td>
								<td><input class="form-control" type="text" class="" name="ans_id"></td>
							</tr>
						</table>
						<button type="submit" name="done" class="btn btn-success mt-2 m-auto d-block">submit <i class="fas fa-sign-in-alt"></i></button>
					</form>
				</div>
			</div>
	</body>
</html>