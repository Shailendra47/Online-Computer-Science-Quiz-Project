<?php
	session_start();
	
	/*if(!isset($_SESSION['username'])){
   		header('location:index.php');
   	}*/
   	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quizdbase');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Quizz Test </title>
	<style>
		* {	
			font-family: 'Josefin Sans', sans-serif;
		}
		#timer {
			font-size: 30px;
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
						<p id="timer" class="navbar-nav ml-auto mt-lg-0 text-white"></p>
							<script>
								var timer = 10; // minutes
								var sec = 60; // seconds
								
								timedout();
								function timedout(){
									if(timer > 0){
										document.getElementById("timer").innerHTML = timer + 'm ' +	sec + 's';
											
										if(sec > 0){
											sec = sec - 1;
											t = setTimeout("timedout()", 1000);
										}else{
											sec = 60;
											timer = timer - 1;
											t = setTimeout("timedout()", 1000);
										}
									}else{
										document.getElementById("timer").innerHTML = "00:00";
									}
								}
							</script>
						</div>	
					</nav>
				</header>
				<h3 class="text-center card-header bg-light">Welcome <?php echo $_SESSION['username']; ?> you've select only 1 out of 4. Best Of Luck <i class="far fa-smile-beam"></i></h3>
				<div class="container">
					<div class="col-lg-8 mx-auto d-block">
						<form method="post" action="QuizResult.php">
							<?php
								for ($i=1; $i < 21; $i++) {

								//QUESTIONS
								$q = "select * from questions where qid = $i";
								$query = mysqli_query($con,$q);

								while ($rows = mysqli_fetch_array($query)) {
							?>	
							<div class="card">
								<h4 class="card-header">Q.<?php echo $rows['questions'] ?></h4>		<?php
									//ANSWERS
									$q = "select * from answers where ans_id = $i";
									$query = mysqli_query($con,$q);

									while ($rows = mysqli_fetch_array($query)) {
								?>			
								<div class="card-body">
									<input type="radio" name="quizcheck[<?php echo $rows['ans_id'] ?>]" value="<?php echo $rows['aid'] ?>">
									<?php echo $rows['answers']; ?>
								</div>
									
								<?php
										}
									}
								}	
								?>
							</div>
							<button class="btn btn-success m-auto d-block" name="submit" type="submit">Submit</button>
						</form>
					</div>
					<br>
					<button class="btn btn-primary d-block m-auto" type="button"><a class="text-white" href="index.php"> Logout </a></button>
				</div>
 			<div>
 			<br>	
 			<footer class="text-center bg-dark">
				<p class="text-white" style="font-size: 20px;">&copy; 2019 CodeFighter Academy</p>
			</footer>	
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