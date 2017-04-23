<?php

$con = mysqli_connect("localhost","root","","db_wanderlust");

if(mysqli_connect_errno())
{
	echo "Connection not established: " . mysqli_connect_error();
}

session_start();
if(isset($_POST['email'])){
	
$email = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
//$fname = mysqli_real_escape_string($con,$_POST['fname']);

$sel_user ="SELECT * FROM `user_login` WHERE Email='$email' AND Password='$pass'";

$run_user =mysqli_query($con,$sel_user);
$check_user =mysqli_num_rows($run_user);

if($check_user==1)
{
	session_start();
	$row =mysqli_fetch_row($run_user);
      
	if (isset($_POST["remember"]))
		{
			setcookie("email",$_POST["email"], time() + (60*60*24));
			setcookie("pass",$_POST["pass"], time() + (60*60*24));
		}
		else
		{
			setcookie("email",$_POST["email"], 1);
			setcookie("pass",$_POST["pass"], 1);
		}
		$_SESSION['username'] = $row[1];
		header("location:home.php");
	}

else {
	
	$message ="Not registered ...Redirecting to Sign up!";
	echo "<script type ='text/javascript'>
	alert('$message');
	window.location = ('online.html');
	</script>";
}
}

?>