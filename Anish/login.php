
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class= "container2">
<div class="imgcontainer">
    <img src="Wanderlust.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container">
 <form action="CheckUserLogin.php" method="post">
    <label><b>Email-Id</b>&nbsp;&nbsp;&nbsp;</label>
    <input type="text" placeholder="Enter Username" name="email" required value="<?php echo getUserFromCookie()?>"><br />

    <label><b>Password</b>&nbsp;&nbsp;&nbsp;</label>
    <input type="password" placeholder="Enter Password" name="pass" required><br /><br />

    <button type="submit" name="submit">Login</button><br /><br />
	
    <input type="checkbox" name="remember" class="check">&nbsp;&nbsp;&nbsp;Remember me
  </div>
</form>
  <div class="container" 

    <span class="psw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspNew to Wanderlust!<a href="online.html">Sign Up</a></span>
  </div>
  </div>
       <?php 
  function getUserFromCookie()
 {
	if(!isset($_COOKIE["email"])) 
		return "";
	else 
		return $_COOKIE["email"];
 }
 
?> 
  </body>
</html>