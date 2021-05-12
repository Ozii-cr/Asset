<?php 
 require('config.php');

	if (isset($_POST['submit'])){
		if (empty($_POST['username'])) {

		}else{
			$username= $_POST['username'];
		
		}
		if (empty(($_POST['password']))) {

		}else {
			$password= $_POST['password'];
		}

		$sql = "SELECT * FROM employee WHERE  username ='$username' && password ='$password' " ;

		$result = mysqli_query($conn ,$sql);

		$num = mysqli_num_rows($result);

		if ($num == 1){
			echo '<script type="text/javascript"> alert("Login Succesful"); </script>';
 			header('Refresh:1 ; url=employee/employee_home.php');
	
		}else{



			echo '<script type="text/javascript"> alert("Login Error"); </script>';
			header('Refresh:1 ; url=index.php');
		}
	}


	if (isset($_POST['submit_ad'])){
		if (empty($_POST['username_ad'])) {

		}else{
			$username= $_POST['username_ad'];
		
		}
		if (empty(($_POST['password_ad']))) {

		}else {
			$password= $_POST['password_ad'];
		}

		$sql = "SELECT * FROM admin WHERE  username_ad ='$username' && password_ad ='$password' " ;

		$result = mysqli_query($conn ,$sql);

		$num = mysqli_num_rows($result);

		if ($num == 1){
			echo '<script type="text/javascript"> alert("Login Succesful"); </script>';
 			header('Refresh:1 ; url=admin/admin_home.php');
	
		}else{



			echo '<script type="text/javascript"> alert("Login Error"); </script>';
			header('Refresh:1 ; url=index.php');
		}
	}










 ?>