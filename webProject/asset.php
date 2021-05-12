<?php 
	require('config.php');

	if (isset($_POST['add'])){
		if (empty($_POST['asset_name'])) {

		}else{
			$asset = $_POST['asset_name'];
		
		}
		if (empty(($_POST['quantity']))) {

		}else {
			$quantity= $_POST['quantity'];
		}

		$sql = "SELECT * FROM asset WHERE  asset_name ='$asset' " ;
		$result = mysqli_query($conn ,$sql);
        $num =mysqli_num_rows($result);


		if ($num == 1){

			$sql = "UPDATE asset SET quantity = ('$quantity' + quantity)  WHERE asset_name= '$asset' " ;
			$result = mysqli_query($conn ,$sql) ;

			echo '<script type="text/javascript"> alert("Successfully Updated Asset"); </script>' ;
 			header('Refresh:1 ; url=admin/admin_home.php');


        }else{
        	$sql = "INSERT INTO asset(asset_name, quantity) VALUES ( '$asset', '$quantity')" ;
        	$result = mysqli_query($conn ,$sql) ;


        	if ($result){

        		echo '<script type="text/javascript"> alert("Successfully Added Asset"); </script>' ;
 				header('Refresh:1 ; url=admin/admin_home.php');
        	}else{

        		echo '<script type="text/javascript"> alert("Failed To Add Asset"); </script>';
				header('Refresh:1 ; url=admin/admin_home.php');

        	}

			
		}	
	}


	if (isset($_POST['del'])){
		if (empty($_POST['asset_name_del'])) {

		}else{
			$asset = $_POST['asset_name_del'];
		
		}
		if (empty(($_POST['quantity_del']))) {

		}else {
			$quantity= $_POST['quantity'];
		}

		$sql = "SELECT * FROM asset WHERE  asset_name ='$asset_name_del' " ;
		$result = mysqli_query($conn ,$sql);
        $num =mysqli_num_rows($result);

        if ($num == 1){

			$sql = "UPDATE asset SET quantity = (quantity - '$quantity_del')  WHERE asset_name= '$asset' " ;
			$result = mysqli_query($conn ,$sql) ;

			echo '<script type="text/javascript"> alert("Successfully Updated Asset"); </script>' ;
 			header('Refresh:1 ; url=admin/admin_home.php');


        }else{
        	$sql = "DELETE FROM asset WHERE asset_name ='$asset_name_del" ;
        	$result = mysqli_query($conn ,$sql) ;


        	if ($result){

        		echo '<script type="text/javascript"> alert("Successfully Deleted Asset"); </script>' ;
 				header('Refresh:1 ; url=admin/admin_home.php');
        	}else{

        		echo '<script type="text/javascript"> alert("Failed To Add Asset"); </script>';
				header('Refresh:1 ; url=admin/admin_home.php');

        	}


	} 

 ?>

