<?php

$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'crudoperation');

if ($conn) {
	echo "Connected";
}
else{
	echo "Not Connected";
}

?>