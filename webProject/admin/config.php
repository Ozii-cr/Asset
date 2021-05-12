<?php 
//connection to database
$conn = mysqli_connect("localhost","user", "pass", "account","3308");

if (!$conn) {
	echo 'CONNECTION ERROR '.mysqli_connect_error();
	
}


 ?>