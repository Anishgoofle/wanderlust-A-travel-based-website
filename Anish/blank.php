<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<link href="blank.css" rel="stylesheet">
<body>
<div class="back">
<img class="mySlides" src="blank1.jpg" height="700 px" width="1300px">
<p id="upper" align="center" >
For my part, I travel not to go anywhere, but to go. I travel for travel’s sake.<br/> The great affair is to move.” – Robert Louis Stevenson
</p>
</div>
<div class="back">
<img class="mySlides" src="blank2.jpg"height="700 px" width="1300px">
<img class="mySlides" src="blank3.jpg"height="700 px" width="1300px">
<img class="mySlides" src="blank4.jpg"height="700 px" width="1300px">
<img class="mySlides" src="blank5.jpg"height="700 px" width="1300px">
<img class="mySlides" src="blank6.jpg"height="700 px" width="1300px">
</div>
<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block";
	setTimeout(carousel, 3000);
	 
}
</script>
</body>
</html>