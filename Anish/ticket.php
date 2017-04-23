<?php
include("auth.php");
extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','db_wanderlust');
		$con = mysqli_connect("localhost","root","","db_wanderlust");

		if(mysqli_connect_errno())
		{
    		echo "Unable to connect to database; " . mysqli_connect_error();
		}
		
		$sqlget = "SELECT * FROM `Booking` WHERE Name='$username'";
		
		$sqldata = mysqli_query($con,$sqlget);
		if (!$sqldata) {
           printf("Error: %s\n", mysqli_error($con));
            exit();
		}
		
		?>
		
		
<html>
	<title>Report</title>
	<head>
		

	</head>
	<body>
		<div>
			<h1>Wanderlust<h1>
			<br>
			<input style="float:right;width:4%;" id="printpagebutton" type="button" value="Print" onclick="printpage()"/>
			<br><br>
			
			<script type="text/javascript">
				function printpage() 
				{
						//Get the print button and put it into a variable
					var printButton = document.getElementById("printpagebutton");
						//Set the print button visibility to 'hidden' 
					printButton.style.visibility = 'hidden';
						//Print the page content
					window.print()
						//Set the print button to 'visible' again 
						//[Delete this line if you want it to stay hidden after printing]
					printButton.style.visibility = 'visible';
				}
			</script>
		</div>
			
		
		<div class="table">
			<table class="summary">
					<thead class="summary" style="height:2%">
				
						<td class="summary" style="width: 10%;">
							<?php date_default_timezone_set('Asia/Kolkata');
                               echo date('d-m-Y');
							   ?>
						</td>
						<td align="center"class="summary" style="font-size:25px;"> 
							Travel TICKET
						</td>
					</thead>
					
			</table>
			<table border=1 class="summary">
<?php  
         while($row = mysqli_fetch_array($sqldata))
		         {			
			    echo "<tr><td class='summary' style='width:6%'>Name:</td>";
			    echo "<td class='summary' style='width:4%'>";
				echo $row['Name'];
				echo "</td>";
				echo "</tr>";
				echo "<tr><td class='summary' style='width:6%'>Email</td>";
			    echo "<td class='summary' style='width:4%'>";
				echo $row['Email'];
				echo "</td>";
			    echo "</tr>";
                echo "<tr><td class='summary' style='width:6%'>Number:</td>";
			    echo "<td class='summary' style='width:4%'>";
				echo $row['Number'];
				echo "</td>";
				echo "</tr>";
                echo "<tr><td class='summary' style='width:6%'>City:</td>";
			    echo "<td class='summary' style='width:4%'>";
			    echo $row['City'];
			    echo "</td>";
			    echo "</tr>";
                echo "<tr><td class='summary' style='width:6%'>Place of Stay:</td>";
			echo "<td class='summary' style='width:4%'>";
			echo  $row['P_stay'];
			echo "</td>";
			echo "</tr>";
           echo "<tr><td class='summary'style='width:6%'>People</td>";
			echo "<td class='summary' style='width:4%'>";
			echo $row['People'];
			echo "</td>";
			echo "</tr>";
            echo "<tr><td class='summary' style='width:6%'>From:</td>";
			echo "<td class='summary' style='width:4%'>";
			echo $row['F_date'];
			echo "</td>";
			echo"</tr>";
            echo "<tr><td class='summary' style='width:6%'>To:</td>";
			echo "<td class='summary' style='width:4%'>";
			echo $row['T_date'];
			echo "</td>";
			echo "</tr>";
				 }
				
	?>
	
	 
			</table>
		</div>
		
</body>
</html>
	