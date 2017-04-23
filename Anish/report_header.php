
<html>
	<title>Report</title>
	<head>
		<link rel="stylesheet" type="text/css" href="report_header_footer.css"></link>
				<link rel="stylesheet" type="text/css" href="reportsummary.css"></link>

	</head>
	<body>
		<div>
			<span>Wanderlust<span>
			<a style="float:right;width:4%"href="logout.php">Logout</a>
			<br>
			<input style="float:right;width:4%;" id="printpagebutton" type="button" value="Print" onclick="printpage()"/>
			<br><br>
			
			<hr>
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

