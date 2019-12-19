<?php

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'sessionpractical');

	$id = $_GET['id'];

	$q = "DELETE FROM `signin` WHERE id = $id";

	mysqli_query($con,$q);

	header('location: userlog.php');

?>