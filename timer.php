<!DOCTYPE html>
<html lang="en-US">  
<head>
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
<style>
	p {
		text-align: center;
		font-size: 45px;
		margin-top: 0px;
	}
</style>
</head>
<body>

<p id="timer"></p>	

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

</body>
</html>
