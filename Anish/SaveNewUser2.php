<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','db_wanderlust');

		if($mysqli->connect_errno > 0){
    		echo "Unable to connect to database; " . mysqli_connect_error();
		}
		
		$city= $_POST['place'];
		$select="";
		if(isset($_POST['place']))
		{
			if($_POST['place']=="Delhi")
			{
			$select =$_POST['select1'];
		}
		else if($_POST['place']=="Chennai"){
			
			$select =$_POST['select2'];
		}
		else if($_POST['place']=="Mumbai"){
			
			$select =$_POST['select3'];
		}
		else if($_POST['place']=="Kolkata"){
			
			$select =$_POST['select4'];
		}
		else{
			
			$select =$_POST['select5'];
		}
		}
		$query = "INSERT INTO `Booking`(`Name`, `Email`, `Number`, `City`, `P_stay`, `People`, `F_date`, `T_date`) VALUES ('$name','$email','$tel','$place','$select','$people','$date1','$date2')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
	        $message = "Data Submitted Successfully.Click OK to view!";
			echo "<script type='text/javascript'>
			alert('$message');
			window.location = ('ticket.php');
			</script>";
			exit;
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
