<?php 
require('config.php');

	$query = "SELECT * FROM asset ";
	$result = mysqli_query($conn, $query);
    



 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
	<link rel="stylesheet" type="text/css" href="../design.css">
</head>
<body>
	<!--Homme page after admin has logged in-->
	<h2>Welcome</h2>
	<div>
		<ul >
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="employee.php">Manage Employee</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>

	</div>
	<div></div>

		<table>
		<tr>
			<th><h2>Current Assets</h2></th>
		</tr>
		<tr>
			<th>Asset 	</th>
			<th>Quantity 	</th>					
		</tr>
		<?php 
             while ($rows =mysqli_fetch_assoc($result)){

		 ?>
		 <tr>
		 	 <td><?php echo $rows['asset_name']; ?></td>
		 	 <td><?php echo $rows['quantity']; ?></td>
		 </tr>

		 <?php 
		   }

		  ?>


	    </table>


	<div></div>
	<h3>Add Asset</h3>
	<form action="../asset.php" method="POST">
		<label>Asset Name</label>
		<input type="text" name="asset_name" placeholder="Asset">
		<div></div>
    	<label>Quantity</label>
		<input type="text" name="quantity" placeholder="Quantity">
		<div></div>
		<input type="submit" name="add" value="Add">
    </form>
    <div></div>
    <div></div>

    <h3>Delete Asset</h3>
    <form action="../asset.php" method="POST">
		<label>Asset Name</label>
		<input type="text" name="asset_name_del" placeholder="Asset">
		<div></div>
    	<label>Quantity</label>
		<input type="text" name="quantity_del" placeholder="Quantity">
		<div></div>
		<input type="submit" name="del" value="Delete">
    </form>


</body>
</html>