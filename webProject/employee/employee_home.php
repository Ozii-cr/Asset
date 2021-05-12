<?php 
    require('../config.php');



    if (isset($_POST['request'])){
		if (empty($_POST['asset_req'])) {

		}else{
			$asset_req= $_POST['asset_req'];
		
		}
		if (empty(($_POST['quantity_req']))) {

		}else {
			$quantity_req= $_POST['quantity_req'];
		}

		$sql = "SELECT * FROM asset WHERE  asset_name ='$asset_req' && (quantity > '$quantity_req')" ;

		$result = mysqli_query($conn ,$sql);

		$num = mysqli_num_rows($result);

		if ($num == 1){
			$sql = "UPDATE asset SET quantity = ( quantity - '$quantity_req')  WHERE asset_name= '$asset_req' " ;
			echo '<script type="text/javascript"> alert("Request Succesful"); </script>';
 			}


    }
    



 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../poeject.css">
</head>
<body>
	<!--Homme page after admin has logged in-->
	<h2>Welcome</h2>
	<div>
		<ul>
			<li><a href="employee_home.php">Home</a></li>
			<li><a href="employee.php">Request </a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</div>
	<div></div>
	<h3>Request Asset</h3>
	<form action="employee_home" method="POST">
		<label>Asset</label>
		<input type="text" name="asset_req">
		<div></div>
		<label>Quantity</label>
		<input type="text" name="quantity_req">
		<div></div>
		<input type="submit" name="request" value="Request">
		
	</form>


</body>
</html>