
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="css/sheet.css">
         <script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<style>
    #map {position: absolute; top:0; bottom: 0; left:0; right:0;} 
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">
    <button type="button" class="xs-buttons pull-left btn btn-clear" data-toggle="collapse" data-target="#nav-right">
	<img id="logo" src="images/logo.png" />
	
	<style>
	  #logo {width : 80px;}
	</style>
    
    <a class="navbar-brand" href="#">ELECTRIC MAP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <style>
        #navbarResponsive{
          margin-left : 20%;
        }
      </style>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nouvelles.html">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="formulaire_comparateur.php">Comparateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recherche_bornes.php">Bornes de recharge</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="gps.html">Itinéraire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="infoCovid.html">Covid</a>
        </li>
      </ul>
         <div class="nav navbar-nav" id="member_header" role="presentation">

<a href="Formulaire_Clients/deconnexion.php" class="btn btn-success" data-operation="deconnexion">
<span>Deconnexion</span>
</a>
</div>
         
    </div>
  </div>
</nav>
   
   <?php 
		$bdd = new PDO('mysql:host=localhost;dbname=electric_map;charset=utf8','root', 'root');

    include ('fonctions.php'); ?>


<html>
 
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
		<style> #map {width: 800px; margin-left: auto; margin-right: auto; height: 70vh; } </style>
	</head>
	
	<body>
		<?php 
			
			$bdd = getBD();
			
			if(!empty ($_POST['cp']) && !empty ($_POST['vd']) && !empty ($_POST['va']))
			{
				echo "<script> alert('Merci de rechercher soit par villes soit par code postal'); </script>";
				echo "<meta http-equiv='Refresh' content='0;URL=recherche_bornes.php'>";
			}
				
			elseif(!empty ($_POST['cp']))
			{
				 
				$rep = $bdd->query("SELECT distinct latitude, longitude, ad_station FROM `bornes` WHERE (ad_station LIKE '%".$_POST['cp']."%') 
				and (latitude not LIKE '%*%' or longitude not LIKE '%*%') ");
				
				if(TRUE){
				
					$bornes ="[";
					while ($ligne = $rep ->fetch()){
						echo "<script> console.log('"."[".$ligne['latitude'].  ", ".$ligne['ad_station']   ."],". " ')</script>";
						$bornes = $bornes ."[".$ligne['latitude'].  ", ".$ligne['longitude']   ."],";
					}
				
					$bornes = $bornes. " ]";
					echo "<script> console.log('".  $bornes ."')</script>";
				
				}
			}	
			else
			{
				$vd = $_POST['vd'];
				$va = $_POST['va'];
				$c ="%";
			
				if($vd == ""){$vd ="xxx";}
				if($va == ""){$va ="xxx";}
				
				$rep = $bdd->query("SELECT distinct latitude, longitude, ville FROM `bornes` WHERE (ville LIKE '%".$vd. "%' or ville LIKE '%".$va. "%') 
				and (latitude not LIKE '%*%' or longitude not LIKE '%*%') ");
			
				if($vd !="xxx" or $va !="xxx"){
				
					$bornes ="[";
					while ($ligne = $rep ->fetch()){
						echo "<script> console.log('"."[".$ligne['latitude'].  ", ".$ligne['ville']   ."],". " ')</script>";
						$bornes = $bornes ."[".$ligne['latitude'].  ", ".$ligne['longitude']   ."],";
					}
			
					$bornes = $bornes. " ]";
					echo "<script> console.log('".  $bornes ."')</script>";
			
				}
			}
				
	
		?>
   
		<div id="map"></div> 
  
		<script>

			var bornes = <?php echo $bornes;  ?>;

			// creation d'une carte centrée sur un point
			function mapViewSetter(yLat, xLon, zoomLevel){
				return L.map('map').setView([yLat,xLon],12);
			};

			//ajout des tuiles (carreaux de font d'ecran) de googleMap à la carte
			function addTileLayerToMap(map, maxZoom){
				L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=3oa3J7TEkNh2fVNl36qz' , {
					attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
					minZoom: 1,
					maxZoom: 20
			}).addTo(map);

				return map;
			};
              var greenIcon = L.icon({
                   iconUrl: 'images/carr.png',
                    iconSize:     [45, 45], // size of the icon
                     iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                       shadowAnchor: [4, 62],  // the same for the shadow
                       popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
                     });
			// ajout des points à la carte
			function addPointsToMap(map, points){
			// points ressemble à : [ [yLat, xLon], [43.288849,5.57308], ...  ]
				
				for (var i = 0; i < points.length; i++) {
					L.marker(points[i], {icon: greenIcon}).addTo(map);
				}
			/*let marker = L.marker([agence[0].lat, agence[1].lon]).addTo(map)

			// On met le popup
			marker.bindPopup(agence[1].map)*/
				
				return map;
			}

			// calcul des points moyennes entre deux villes 

			function pointMoyCalculator(points){
				var yLatMoy =0;
				var xLonMoy =0;
				for(var i = 0; i < points.length; i++){
					yLatMoy = yLatMoy + points[i][0];
					xLonMoy = xLonMoy + points[i][1];
				
				}
				
				yLatMoy = yLatMoy/points.length;
				xLonMoy = xLonMoy/points.length;
				return [yLatMoy, xLonMoy];
			};

			console.log(pointMoyen = pointMoyCalculator(bornes));

			var pointMoyen = pointMoyCalculator(bornes);
			var map = mapViewSetter(pointMoyen[0],pointMoyen[1], 6);
			var map = addTileLayerToMap(map, 50);
			var map = addPointsToMap(map, bornes);
	
	
		</script>
	</body>
</html>