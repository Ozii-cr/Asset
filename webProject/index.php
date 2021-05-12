<?php 
require ('config.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="poeject.css">
</head>
<body>


    <h2>Employee Login</h2>
	<form action="validation.php" method="POST">
		<label>Username:</label>
		<input type="email" name="username" required>
		<div></div>
		<label>Password:</label>
		<input type="password" name="password" required>
		<div></div>
		<input type="submit" name="submit" value="Login">	
	</form>
    <div></div>
    <div></div>
     <h2>Admin Login</h2>
	<form action="validation.php" method="POST">
		<label>Username:</label>
		<input type="email" name="username_ad" required>
		<div></div>
		<label>Password:</label>
		<input type="password" name="password_ad" required>
		<div></div>
		<input type="submit" name="submit_ad" value="Login">	
	</form>

</body>
</html>