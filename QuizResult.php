<?php
	session_start();
	/*if (!isset($_SESSION['username'])) {
		header('location:index.php');
	}*/
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con, 'quizdbase');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Results </title>
</head>
<meta charset="utf-8">
<style>
	*{	
		font-family: 'Josefin Sans', sans-serif;
	}
</style>

<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://kit.fontawesome.com/5da368dd82.js"></script>


<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

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
			<br/><br/><br/>
			<div class="container text-center col-lg-8 col-sm-8 col-12 col-xl-10">
				<table class="table table-boredered table-striped table-hover">
					<tr class="">
						<td colspan="2" class="bg-dark"><h2 class="text-white text-center">Results</h2></td>
					</tr>
					<tr class="bg-light">
						<td> Question Attempted </td>
						<?php
							$result = 0;
							if (isset($_POST['submit'])) {
								if (!empty($_POST['quizcheck'])) {
									$check_count = count($_POST['quizcheck']);
						?>
						<td colspan="2">
							<?php echo "Out of 20, you've selected ".$check_count." options"; ?>				
						</td>
						<?php
							$selected = $_POST['quizcheck'];
							$q = "select ans_id from questions";
							$query = mysqli_query($con, $q);
							$i = 1;
							while ($rows = mysqli_fetch_array($query)) {
								$checked = $rows['ans_id'] == $selected[$i];
								if ($checked) {
									$result++;
								}
								$i++;
							}
						?>
					</tr>
					<tr class="bg-light">
						<td> Total score </td>
						<td colspan="2">
							<?php
									echo "Your total score is: ".$result;
									}
									else{
										echo "<b>Please select any option</b>";
									}
								}
							?>	
						</td>
						<?php
							$name = $_SESSION['username'];
							$fresult = "insert into userdata (username,totalques,answerscorrect) values ('$name', 20 ,'$result')";
							$q1 = mysqli_query($con, $fresult);
						?>
					</tr>
				</table>
				<button type="submit" class="btn btn-danger m-auto d-block"><a href="logout.php" class="text-white"> LOGOUT </a></button>
			</div>
			<br/><br/>
			<section class="">
				<article class="py-5">
					<div class="text-center">
						<p class="bg-dark text-white" style="font-size: 25px;">If you feel doubtful about the answer to any question then call here.</p>
						<button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Write here</button>
					</div>
					<!-- The Modal -->
					<div class="modal fade" id="myModal">
					    <div class="modal-dialog modal-dialog-centered">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div class="modal-header">
					          <h4 class="modal-title">Feedback<i class="fas fa-user"></i></h4>
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					        </div>
					        <?php

								$conn = mysqli_connect('localhost','root');
								mysqli_select_db($con, 'userfeed');

								if (isset($_POST["done"])) {
									$name = $_POST["user"];
									$email = $_POST['email'];
									$password = $_POST["password"];
									$doubt = $_POST['doubt'];
									$q = "INSERT INTO `feed`(`name`, `email`, `password`, `doubt`) VALUES ( '$name', '$email', '$password', '$doubt')";
									$query = mysqli_query($conn,$q);
								}

							?>
					        <!-- Modal body -->
					        <div class="modal-body">
						        <form action="feed.php" method="post" name="feedbackform">
						          	<div class="form-group">
									    <label for="pwd">username</label>
									    <input type="text" name="user" class="form-control">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
									    <input type="email" name="email" class="form-control" required>
									</div>
									<div class="form-group">
									    <label for="pwd">Password</label>
									    <input type="password" class="form-control" name="password">
									</div>
									<div class="form-group">
									    <label for="pwd">Your Doubt</label>
									    <textarea class="form-control" name="doubt" id="pwd" rows="3" cols="8"></textarea>
									</div>
									<button type="submit" class="btn btn-primary" name="done">Submit</button>
								</form>
					        </div>
					        
					        <!-- Modal footer -->
					        <div class="modal-footer">
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        </div>
					        
					      </div>
					    </div>
					</div>
				</article>
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

<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">
</body>
</html>