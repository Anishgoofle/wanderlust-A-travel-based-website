<?php
session_start();
if(!isset($_SESSION["username"])){
header("location:login.php");
exit();
}
$username = $_SESSION['username'];
if($username == "")
{
	header("location:login.php");
}
?> 