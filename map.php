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
		$bdd = new PDO('mysql:host=localhost;dbname=borne;charset=utf8','root', '');
		//$rep = $bdd->query(" SELECT * FROM `bornes`  WHERE ad_station LIKE '".$_POST['marque']."'");//
		$vd = $_GET['vd'];
		$va = $_GET['va'];
		
		if($vd== ""){
			$vd ="xxx";
			
		}
		if($va== ""){
			$va ="xxx";
			
		}
			
		$rep = $bdd->query("
		SELECT distinct Ylatitude, Xlongitude, ad_station FROM `bornes` 
		WHERE (ad_station LIKE '%".$vd. "%'   or ad_station LIKE '%".$va. "%') 
		and ( Ylatitude not LIKE '%*%' or Xlongitude not LIKE '%*%') ");
		
		//$bornes ="[[43.286242,5.370056], [43.288849,5.57308], [48.77024580, 1.19938130]]";
		
		if($vd !="xxx" or $va !="xxx"){
			
		$bornes ="[";
		while ($ligne = $rep ->fetch()){
			echo 
			"<script> console.log('".
			
			"[".$ligne['Ylatitude'].  ", ".$ligne['ad_station']   ."],". 
			" ')</script>";
			
			$bornes = $bornes ."[".$ligne['Ylatitude'].  ", ".$ligne['Xlongitude']   ."],";
			
			
		}
		$bornes = $bornes. " ]";
		
		echo 
			"<script> console.log('".  $bornes ."')</script>";
		
		}else{
			$bornes ="[[43.286242,5.370056], [43.288849,5.57308]]";
		}
		
			
		
		
		
   
		
   ?>
   
   <div id="map"></div>
   <!--<p><a href="https://www.maptiler.com/license/maps/" 
   target="_blank"&copy; 
    Maptiler</a> 
    <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a></p>-->
   <script>
   
	//exemple de fonction en javascript
	function somme(a, b){
		return a+b;
	};	
	console.log(somme(3, 4));
	
    var borne1= [43.286242,5.370056];
	var borne2= [43.288849,5.57308];
	//var bornes = [ [43.286242,5.370056], [43.288849,5.57308], [48.77024580, 1.19938130], ];
	var bornes = <?php echo $bornes;  ?>;
	
	
	// etape 1 : creation d'une carte centrée sur un point
	function mapViewSetter(yLat, xLon, zoomLevel){
		return L.map('map').setView([yLat,xLon],zoomLevel);
	};
	
	//etape 2 : ajout des tuiles (carreaux de font d'ecran) de googleMap à la carte
	function addTileLayerToMap(map, maxZoom){
		L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=3oa3J7TEkNh2fVNl36qz' , {
			//attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
		maxZoom: maxZoom
	}).addTo(map);
	
		return map;
	};
	
	// etape 3 : ajout des points à la carte
	function addPointsToMap(map, points){
	// points ressemble à : [ [yLat, xLon], [43.288849,5.57308], ...  ]
		
		for (var i = 0; i < points.length; i++) {
			L.marker(points[i]).addTo(map);
		}
		
		return map;
	}
	

	
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
	
	
	
	
	//var map = L.map('map').setView([54.286242,5.370056],6);
   	
	/*
	L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=3oa3J7TEkNh2fVNl36qz' , {
   		//attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
     maxZoom: 50
   }).addTo(map);
   
   */
   // ajout d'un markeur
    /*
	var marker = L.marker(borne1).addTo(map);
	var marker = L.marker(borne2).addTo(map);
    var marker = L.marker([51.5, -0.09]).addTo(map);
    */
	var circle = L.circle([43.286242,5.361972], {
      color:'red',
      fillOpacity: 0.2,
      radius: 5000
    }).addTo(map);
	
   </script>
</body>


  </html>