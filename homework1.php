<meta charset="ISO-8859-4">

<!DOCTYPE html>
<html>

  <head>
  
  <h2> Tuleb midagi GIS teemal varsti </h2>
<h1> 1.Homework </h1>

<form method="get">

	<input type="button" onclick="alert('See on väga algeline lehekülg.')" value="Vihje">
	<br><br>
	
	Veebikaardid:
	<br>
	<input type="button" onclick="location.href='http://landsatlook.usgs.gov/viewer.html';" value="Landsat" />
	<br>
	<input type="button" onclick="location.href='http://xgis.maaamet.ee/xGIS/XGis';" value="Maa-amet" />

	
</form>
  

    <style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 59.439, lng: 24.771},
          zoom: 17
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
  </body>
</html>

