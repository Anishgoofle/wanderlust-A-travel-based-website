	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','db_wanderlust');

		if($mysqli->connect_errno > 0){
    		echo "Unable to connect to database; " . mysqli_connect_error();
		}
		
		if (isset (
			
		$query = "INSERT INTO `Booking`(`Name`, `Email`, `Number`, `P_stay`, `People`, `F_date`, `T_date`) VALUES ('$name','$email','$number','$','$people','$date1','$date2')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
	        $message = "You are registered successfully.Click OK to login!";
			echo "<script type='text/javascript'>
			alert('$message');
			window.location = ('login.php');
			</script>";
			exit;
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
