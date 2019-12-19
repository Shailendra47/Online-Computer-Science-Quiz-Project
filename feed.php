<?php
//User Feedback
session_start();
header('location:QuizResult.php');

$conn = mysqli_connect('localhost','root');

mysqli_select_db($con,'userfeed');

$name = $_POST['user'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$doubt = $_POST['doubt'];


$q = " select * from feed where name = '$name' && email = '$mail' && password = '$pass' && doubt = '$doubt'";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "duplicate data";
}else{
	$qy = "insert into feed (name, email, password, doubt) values ('$name','$mail', '$pass', $doubt)";
	mysqli_query($con, $qy); 
}
?>