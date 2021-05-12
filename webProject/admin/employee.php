<?php 
    require('../config.php');

	if (isset($_POST['submit'])){
		if (empty($_POST['username'])) {

		}else{
			$username= $_POST['username'];
		
		}
		if (empty(($_POST['password']))) {

		}else {
			$password= $_POST['password'];
		}
		if (empty($_POST['fname'])) {

		}else{
			$fname= $_POST['fname'];
		}
		if (empty($_POST['lname'])) {

		}else{
			$lname= $_POST['lname'];
		}
		if (empty($_POST['department'])) {

		}else{
			$department= $_POST['department'];
		}
		if (empty($_POST['number'])) {

		}else{
			$number= $_POST['number'];
		}
		

		$sql = "SELECT * FROM employee WHERE  username ='$username' " ;

		$result = mysqli_query($conn ,$sql);

		$num =mysqli_num_rows($result);

		if ($num == 1){
			echo '<script type="text/javascript"> alert("Username is already registered"); </script>';
 			header('Refresh:1 ; url=employee.php');
		}else{

			$sql = "INSERT INTO employee(username,password,fname,lname,department,pnumber) VALUES ( '$username', '$password','$fname', '$lname','$department','$number' )" ;

			if (mysqli_query($conn, $sql)){
			echo '<script type="text/javascript"> alert("Registration Successful"); </script>';
 			header('Refresh:1 ; url=employee.php');
			}else {
			echo '<script type="text/javascript"> alert("Registration Error"); </script>';
 			header('Refresh:1 ; url=employee.php');
			}
		}	
	}


	if (isset($_POST['submit_del'])){
		if (empty($_POST['username_del'])) {

		}else{
			$username= $_POST['username_del'];
		
		}

		$sql = "SELECT * FROM employee WHERE  username ='$username' " ;

		$result = mysqli_query($conn ,$sql);

		$num =mysqli_num_rows($result);

		if ($num == 1){
		$sql ="DELETE FROM employee WHERE username='$username' ";
		$result = mysqli_query($conn ,$sql);

		echo '<script type="text/javascript"> alert("deleted user"); </script>';
		}else{
		echo '<script type="text/javascript"> alert("User not found"); </script>';	
		}
	}	

	$query = "SELECT * FROM employee ";
	$result = mysqli_query($conn, $query);
    


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="../design.css">
 </head>
 <body>
 			<ul >
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="employee.php">Manage Employee</a></li>
			<li><a href="../logout.php">Logout</a></li>
		    </ul>

	<table>
		<tr>
			<th><h2>Current Employees</h2></th>
		</tr>
		<tr>
			<th>Username 	</th>
			<th>First name 	</th>
			<th>Last Name 	</th>	
			<th>Department 	</th>					
		</tr>
		<?php 
             while ($rows =mysqli_fetch_assoc($result)){

		 ?>
		 <tr>
		 	 <td><?php echo $rows['username']; ?></td>
		 	 <td><?php echo $rows['fname']; ?></td>
		 	 <td><?php echo $rows['lname']; ?></td>
		 	 <td><?php echo $rows['department']; ?></td>
		 </tr>

		 <?php 
		   }

		  ?>


	</table>

    <div></div>

 	<!--registration form for employee-->
 	<h2>Employee Register</h2>
	<form action="employee.php" method="POST">
		<label>Username:</label>
		<input type="email" name="username" placeholder='example@gmail.com' required>
		<div></div>
		<label>Password:</label>
		<input type="password" name="password" placeholder='Password' required>
		<div></div>
		<label>Firstname:</label>
		<input type="text" name="fname" placeholder='First name'required>
		<div></div>
		<label>Lastname:</label>
		<input type="text" name="lname" placeholder='Last name'required>
		<div></div>
		<label>Department:</label>
		<input type="text" name="department" placeholder='Department' required>
		<div></div>
		<label>Phone number:</label>
		<input type="text" name="number" placeholder='number'required>
		<div></div>
		<input type="submit" name="submit" value="Register">	
	</form>
	<div></div>
	<h2>Delete Employee</h2>

	<form action="employee.php" method="POST">
		<label>Username</label>
		<input type="text" name="username_del" placeholder="Enter username">
		<div></div>
		<input type="submit" name="submit_del" value="Delete">
	</form>
 
 </body>
 </html>