<?php

include("auth.php");

?>
<!DOCTYPE html>
<html> 
<head> 
<link href="map.css" rel="stylesheet">
<style>
#default{

margin-left: 400px;
margin-top: 110px;
margin-bottom: 70px;
border-style: solid;
border: 1 px;

}
</style>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <title>Google Maps Multiple Markers</title> 
  <script type="text/javascript"
  src=
"http://maps.googleapis.com/maps/api/js?key=AIzaSyAFA9ZhuTJU0guKzwMhHo1d2NGIbwBdVKc&sensor=false">
</script>
<script type="text/javascript">
var infos = [];
 var locations=[
[ 'New Delhi', 28.6139, 77.2090,'New delhi','Delhi/delhi.html'],
[ 'Mumbai', 19.0760, 72.8777,'Mumbai','Mumbai/mumbai.html'],
[ 'Bangalore', 12.9716, 77.5946,'Bangalore','Bangalore/BAng.html'],
[ 'Kolkata', 22.5726, 88.3639,'Kolkata','Kolkata/kolkata.html'],
[ 'Chennai', 13.0827, 80.2707,'Chennai','Chennai/chennai.html'],
];
   
   function initialize() {

    var myOptions = {
      center: new google.maps.LatLng(28.6139, 77.2090),
      zoom: 4,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
	  panControl: false,
      zoomControl: false,
	  disableDefaultUI: true,
	  scrollwheel: false,
	  scaleControl: false,
	  disableDoubleClickZoom: true

    }
    var map = new google.maps.Map(document.getElementById("default"),
        myOptions);

    setMarkers(map,locations)

  }

var bounds = new google.maps.LatLngBounds()

  function setMarkers(map,locations){

      var marker, i

for (i = 0; i < locations.length; i++)
 {  

 var loc = locations[i][0]
 var lat = locations[i][1]
 var long = locations[i][2]
 var det =  locations[i][3]
 var url = ' '
  
  url += '<a href="' + locations[i][4] + '">Click to know more</a>';

 latlngset = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({  
          map: map, title: loc , position: latlngset, url: url,
		  animation:google.maps.Animation.BOUNCE
        });
        map.setCenter(marker.getPosition())


        var content = "Location: " + loc + " " + "<br />Details: " + det + " " + "<br />" + url

  bounds.extend(marker.position);
  var infowindow = new google.maps.InfoWindow()
        
       
google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
        return function() {
        
        
       closeInfos();
        
           infowindow.setContent(content);
           infowindow.open(map,marker); 
        
        
   infos[0]=infowindow;
        
        };
    })(marker,content,infowindow)); 

  }
  map.fitBounds(bounds);
  
  }

function closeInfos(){
 
   if(infos.length > 0){
 
      infos[0].set("marker", null);
 
      infos[0].close();
 
      infos.length = 0;
   }
}

  </script>
 </head>
 <body onload="initialize()">
 <h2>
  <div id="fixed" style="position:fixed; top:0">
  <div id ="default" style="width: 500px; height: 500px;"></div>
  </div>
 </body>
  </html>