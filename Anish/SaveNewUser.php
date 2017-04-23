	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','db_wanderlust');

		if($mysqli->connect_errno > 0){
    		echo "Unable to connect to database; " . mysqli_connect_error();
		}
		
		$Password =$_POST['pwd'];
		$Cpassword=$_POST['cpwd'];
		
		$dob=$mm.'/'.$dd.'/'.$yy;
		
		if($Password != $Cpassword)
		{
			$message = "Password does not match";
			echo "<script type='text/javascript'>
			alert('$message');
			window.location = ('online.html');
			</script>";
			exit;
		}
			
		$query = "INSERT INTO `user_login`(`FName`, `LName`, `Email`, `Password`, `Cpassword`, `D.O.B`, `Gender`) VALUES ('$fname','$lname','$email','$pwd','$cpwd','$dob','$gender')";
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
