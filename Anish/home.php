<?php
include("auth.php");
 date_default_timezone_set('Asia/Kolkata');
$date= date("j F, Y");
$time= date("g:i a");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link href="home.css" rel="stylesheet">
    <title>Home</title>
    
</head>
<body>
<div class="container">
<div class="nag">
<ul class="topnav" id="myTopnav">
<strong>
<div class="imf">
<li><img src="w.jpg" style="height:20%; width:15%;margin-top:-10px"></li>
</div>
<div class="hfushfj" style="position: relative; width: 35px; height: 20px;"> 
&nbsp;&nbsp;&nbsp;Wanderlust
</div>
<div class="head-container">
				
				<header class="title">
					
				</header>
</div>
<div class="border1"style="margin-top:-12px"></div>
<li class ="active"><a href="blank.php" target="about">Home</a></li>
<li><a href="map.php" target="about">Map</a></li>
<li><a href="about.php"   target="about">About</a></li>
<li><a href="contact.php" target="about">Contact</a></li>
<li><a href="career.php"  target="about">Careers</a></li>
<li style="float:right"><a href="logout.php">Logout</a></li>
<div class ="border"></div>
 </strong>
 <h3><u>Welcome&nbsp;to&nbsp;Wanderlust&nbsp;,<span style="color:blue"><b><?php echo $username ;?></u></b></span>!!</h3>
<h4>Date:<span style="color:blue"><?php echo $date ;?></span><br />Time:<span style="color:blue"><?php echo $time ;?></h4></span>
 </div>
<iframe width="95%" height="720px"  border="0px" style="border:none;margin-left:53px" name="about"> </iframe>

<p id="link" style="vertical-align:middle;margin-left:595px;font-size:24px"><a href="booking.php" onclick="invisible()" target="about"><span>Skip to booking</a></span></p>

<br />
<div class="footer">
<p> &copy; <b>2017 WanderLust</b></p>
</div>
</div>
<script>
function invisible()
{
	document.getElementById('link').style.display = "none";
}
</script>
</body>
</html>
