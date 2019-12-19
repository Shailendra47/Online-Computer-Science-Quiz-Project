<?php
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'sessionpractical');
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Users Detail Panel </title>
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
						<a class="navbar-brand" href="#">User Detail Panel <i class="fas fa-user-graduate"></i></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="add.php">Add Q/A</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="dashboard.php">Home <i class="fas fa-home"></i></a>
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
					<h1 class="text-dark text-center"> Logged Users Details <i class="fas fa-users"></i></h1>
					<br/>
					<table class="table table-striped table-hover table-bordered text-center">
						<tr class="bg-dark text-white">
							<td> Id </td>
							<td> Username </td>
							<td> Password </td>
							<td> Update</td>
							<td> Delete </td>
						</tr>

						<?php

							$q = "select * from signin";
							$query = mysqli_query($con,$q);
							
							while ($res = mysqli_fetch_array($query)) {	

						?>

						<tr class="text-center">
							<td> <?php echo $res['id']; ?> </td>
							<td> <?php echo $res['name']; ?> </td>
							<td> <?php echo $res['password']; ?> </td>
							<td><button class="btn btn-danger"> <a href="delete.php?id= <?php echo $res['id']; ?>" class="text-white" >Delete</a></button></td>
							<td><button class="btn btn-primary"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"  >Update</a></button></td>
						</tr>

						<?php
							}
						?>	

					</table>

				</div>
			</div>
	</body>
</html>