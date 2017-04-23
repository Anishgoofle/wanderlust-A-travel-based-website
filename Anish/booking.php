<?php

include("auth.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Wanderlust,User Booking</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="NewUser2.css">
</head>
<body>
<center>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="container">

  <div id="container_body">
    <div style="padding-left:50px;">
      <h1 class="form_title"><b style="color:#ffff00"><u style="color:#ffff00">User Booking</u></b></h1>
    </div>
    <!--Form  start-->
	 <div id="form_name">
	
      <div class="firstnameorlastname">
      
       <div id="errorBox"></div>
	   <form action="SaveNewUser2.php" method='POST'>
	   <table >
	   <tr><td><b style="color:#ffff00">Name:</b></td><td><input type="text" class="input_name" name="name" placeholder="Name" required autocomplete="off" ></td></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
			

	   <tr><td><b style="color:#ffff00">Email:</b></td><td><input type="text" name="email" class="input_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="E-mail" required autocomplete="off"></td></tr>
        
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
		
			</div>
      <div id="email_form">
	  <tr><td><b style="color:#ffff00">Number:</b></td><td><input type="tel" name="tel" class="input_number" placeholder="Number" required autocomplete="off"></td></tr> 
        </div>
		                <tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>

      <div id="radio_button">
	  <tr>
	  <td>
	  <b style="color:#ffff00">City:</b></td></tr>
	  <tr><td> <b style="color:#ffff00">(Click GO)</b></td></tr>
      <tr><td><input type="radio" name="place" value="Delhi"id="Delhi">
        <b>Delhi</b>
		</td>
       </tr>
	   <tr><td>
        <input type="radio" name="place" value="Chennai" id="Chennai">
        <b>Chennai</b>
		</td></tr>
		<tr>
		<td><input type="radio" name="place" value="Mumbai" id="Mumbai">
        <b>Mumbai</b>
		</td>
        </tr>
		<tr><td>
        <input type="radio" name="place" value="Kolkata" id="Kolkata">
        <b>Kolkata</b>
		</td>
		</tr>
		<tr>
		<td><input type="radio" name="place" value="Bangalore" id="Bangalore">
        <b>Bangalore</b>
		</td>
		</tr>
		<tr>
		
	   </tr>
		</div>
		</table>
		<div id="multipleTicket1" style="display:none" >
		<table style="margin-left:59px">
						<tr class="select">
							<td style="color:#ffff00">
								<b style="margin-left:-66px;">Place of stay:</b>
							</td>
							<td class="select">
								<select class="input_select" name ="select1" style="width:208px">
								    <option value="">--Select--</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
								</select>
							</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
				
			
					</table>
      </div>
	  <div id="multipleTicket2" style="display:none" >
	  <table style="margin-left:59px">
						<tr class="select">
							<td style="color:#ffff00">
								<b style="margin-left:-66px;">Place of stay:</b>
							</td>
							<td class="select">
								<select class="input_select" name ="select2" style="width:208px">
								    <option value="">--Select--</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
								</select>
							</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
			
					
					</table>
      </div>
	  <div id="multipleTicket3" style="display:none" >
	  <table style="margin-left:59px">
						<tr class="select">
							<td style="color:#ffff00">
								<b style="margin-left:-66px;">Place of stay:</b>
							</td>
							<td class="select">
								<select class="input_select" name ="select3"style="width:208px">
								    <option value="">--Select--</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
								</select>
							</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
					
						
					</table>
      </div>
	  <div id="multipleTicket4" style="display:none" >
	  <table style="margin-left:59px" >
						<tr class="select">
							<td style="color:#ffff00">
								<b style="margin-left:-66px;">Place of stay:</b>
							</td>
							<td class="select">
								<select class="input_select" name ="select4"style="width:208px">
								    <option value="">--Select--</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
								</select>
							</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
			
				
					</table>
      </div>
	  <div id="multipleTicket5" style="display:none">
	  <table style="margin-left:59px">
						<tr class="select">
							<td style="color:#ffff00">
								<b style="margin-left:-66px;">Place of stay:</b>
							</td>
							<td class="select">
								<select class="input_select" name ="select5" style="width:208px">
								    <option value="">--Select--</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
									<option value="Hotel2">Hotel2</option>
									<option value="Hotel1">Hotel1</option>
								</select>
							</td>
							</tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>

							
							</table>
							</div>
			<div style="margin-left:40px">
			<table>
					<tr>
					<td style="color:#ffff00"><b style="margin-left:-66px;">No.of People:</b></td>
					<td><input type="number" name="people" class="input_people" placeholder="People"></td>
					</tr>
					<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
					</table>
					
      </div>
	  <div style="margin-left:143px";>
	  <table>
	  <td style="color:#ffff00">
							<b>From:</b></td>
							<td><input style="width:200px;padding:3px;font-size:15px;box-shadow:2px 2px 5px grey" id="fromDate1" name="date1" type="text"></input></td>
				    <td style="color:#ffff00">
					        <b>To:</b></td>
							<td><input style="width:200px;padding:3px;font-size:15px;box-shadow:2px 2px 5px grey;" id="toDate1" name="date2" type="text"></input></td>
							</tr>   
							</table>
							</div> 
		<div>
        
	  <button type="submit" name="submit"  onclick="dateValidation()" id="sign_user">Submit!</button>
	  </div>
	  </form>
	  <br />
	  <div>
	   	
			<button  value="show" onclick="show()" id="go">Go</button>					
	   </div>
    <!--form ends-->
  </div>
</div>
<script>
function show() 
					{
						document.getElementById('go').style.display = "none";
						var Delhi = document.getElementById("Delhi");
						var Mumbai = document.getElementById("Mumbai");
						var Kolkata = document.getElementById("Kolkata");
						var Chennai = document.getElementById("Chennai");
						var Bangalore = document.getElementById("Bangalore");
						var multipleTicket1 = document.getElementById("multipleTicket1");
						var multipleTicket2 = document.getElementById("multipleTicket2");
						var multipleTicket3 = document.getElementById("multipleTicket3");
						var multipleTicket4 = document.getElementById("multipleTicket4");
						var multipleTicket5 = document.getElementById("multipleTicket5");
						if(Delhi.checked==true)
						{
							multipleTicket1.style.display="block";
							multipleTicket2.style.display="none";
							multipleTicket3.style.display="none";
							multipleTicket4.style.display="none";
							multipleTicket5.style.display="none";
							
						}
						else if(Chennai.checked==true)
						{
							multipleTicket2.style.display="block";
							multipleTicket1.style.display="none";
							multipleTicket3.style.display="none";
							multipleTicket4.style.display="none";
							multipleTicket5.style.display="none";
						}
						else if(Mumbai.checked==true)
						{
							multipleTicket3.style.display="block";
							multipleTicket1.style.display="none";
							multipleTicket2.style.display="none";
							multipleTicket4.style.display="none";
							multipleTicket5.style.display="none";
						}
						else if(Kolkata.checked==true)
						{
							multipleTicket4.style.display="block";
							multipleTicket1.style.display="none";
							multipleTicket2.style.display="none";
							multipleTicket3.style.display="none";
							multipleTicket5.style.display="none";
						}
						else if(Bangalore.checked==true)
						{
							multipleTicket5.style.display="block";
							multipleTicket1.style.display="none";
							multipleTicket2.style.display="none";
							multipleTicket4.style.display="none";
							multipleTicket3.style.display="none";
						}
					}
</script>
<script>
                          $( function() {
                            $( "#fromDate1" ).datepicker({ dateFormat: 'yy-mm-dd' });
                          } );
                          </script>

                           <script>
                          $( function() {
                            $( "#toDate1" ).datepicker({ dateFormat: 'yy-mm-dd' });
                          } );
                </script>
			  
<script>  
function dateValidation()
{
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	var fromDate = document.getElementById("fromDate1").value;
	var toDate = document.getElementById("toDate1").value;
	
	if(dd<10) {
		dd='0'+dd;
	} 

	if(mm<10) {
		mm='0'+mm;
	} 

	today = yyyy+'-'+mm+'-'+dd;
	
	console.log(today);
	console.log(fromDate);
	console.log(toDate);
	
		if(today <= fromDate && today<=toDate)
		{
			if(fromDate < toDate)
			{
			    
			}	
			else if(fromDate == "" || toDate == "")
			{
				document.getElementById("sign_user").disabled = true;
				alert("Please enter a particular date range");
				location.reload();
			}
			else
			{
				document.getElementById("sign_user").disabled = true;
				alert("Please enter correct Date");
				location.reload();
			}
		}
		else
		{
			document.getElementById("sign_user").disabled = true;
			alert("Please enter correct Date");
			location.reload();
		}
}
</script>

			  
</body>
</html>