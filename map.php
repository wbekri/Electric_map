<<<<<<< HEAD
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<style>
    #map {position: absolute; top:0; bottom: 0; left:0; right:0;} 
  </style>
  </head>
  <body>
  
   
   <?php 
		$bdd = new PDO('mysql:host=localhost;dbname=electric_map;charset=utf8','root', 'root');
=======
<?php include ('fonctions.php'); ?>
>>>>>>> 4533554e14cd87044166365ae82590bd07c1ea81

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

			// ajout des points à la carte
			function addPointsToMap(map, points){
			// points ressemble à : [ [yLat, xLon], [43.288849,5.57308], ...  ]
				
				for (var i = 0; i < points.length; i++) {
					L.marker(points[i]).addTo(map);
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