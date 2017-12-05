<?php

$Longitude = 120.642485;
$Latitude = 24.179000;

?>
<!DOCTYPE HTML>
<html>
	<html style= "padding-top: 10% ; padding-left: 0% ; padding-right: 0% ; border-right-width: 20px; background-color: black;">
	<head>
		<title>GOOGLE MAP</title>
		<meta charset="utf-8" />
		<style>
	      /* Always set the map height explicitly to define the size of the div
	       * element that contains the map. */
	      #map {
	        height: 100%;
	      }
	      /* Optional: Makes the sample page fill the window. */
	      html, body {
	        height: 100%;
	        margin: 0;
	        padding: 0;
	      }
	    </style>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		
        <!--<link href="C:/Users/caps9/Desktop/html5up-helios/assets/css/bootstrap.css" rel="stylesheet">-->
		<!--link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Voltaire" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
        <!--link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker" rel="stylesheet"-->
        <!--  map  -->
      
    </head>

    <body>
	    <script>
	      var map;
	      function initMap() {
	        map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 16,
	          center: new google.maps.LatLng(<?php echo $Latitude; ?>,<?php echo $Longitude; ?>),
	          /*var myLatlng = new google.maps.LatLng(<?php echo $Latitude[0]; ?>,<?php echo $Longitude[0]; ?>);*/
	          /*center: new google.maps.LatLng(24.179568 , 120.644438),*/
	          mapTypeId: 'roadmap'
	        });
	      
	        var icons = {
	          charge: {
	            icon: 'images/garbage-truck.png'
	          },
	          info: {
	            /*icon: dot_center + 'red-dot.png'*/
	            icon: 'images/trash.png'
	          }
	        };
	        var features = [
	          {
	            position: new google.maps.LatLng(<?php echo $Latitude; ?>,<?php echo $Longitude; ?>),
	            type: 'info'
	          },
	          {
	            position: new google.maps.LatLng(24.171188, 120.6311989),
	            type: 'gas'
	          }, 
	          {
	            position: new google.maps.LatLng(24.1713234, 120.6417413),
	            type: 'gas'
	          }, 
	          {
	            position: new google.maps.LatLng(24.1635083, 120.6482792),
	            type: 'gas'
	          },
	          {
	            position: new google.maps.LatLng(24.171223, 120.6293373),
	            type: 'gas'
	          }, 
	          {
	            position: new google.maps.LatLng(24.166172, 120.6167743),
	            type: 'gas'
	          }, 
	          {
	            position: new google.maps.LatLng(24.1721424, 120.6432125),
	            type: 'gas'
	          },
	          {
	            position: new google.maps.LatLng(24.182369, 120.6314393),
	            type: 'gas'
	          },
	          {
	            position: new google.maps.LatLng(24.201513, 120.6526283),
	            type: 'gas'
	          }, 
	          {
	            position: new google.maps.LatLng(24.1782459, 120.6183106),
	            type: 'gas'
	          }, 
	          {
	            position: new google.maps.LatLng(24.1796619, 120.6169046),
	            type: 'gas'
	          },
	        ];
	        // Create markers.
	        features.forEach(function(feature) {
	          var marker = new google.maps.Marker({
	            position: feature.position,
	            icon: icons[feature.type].icon,
	            map: map
	          });
	        });
	      }
	    </script>
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQhNukU-sEshEijjJClTz6o-53RFLvSsM&callback=initMap"   type="text/javascript"></script>
    	
    	<div id="map"></div>
    
    	
			
	
	</body>	
			
</html>