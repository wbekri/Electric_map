<html>
 <head>
 </head>
		<?php
			
			
			echo "Ville de depart: ";
			echo $_POST['vd'];
			echo '<br/>';
			echo "Ville d'arrivee: ";
			echo $_POST['va'];
			echo '<br/>';
			echo $_POST['cd'];
			echo '<br/>';
			
			
		?>
	<body>
		
		
		
		<a href="map.php?vd=<?php echo $_POST['vd'] ?>&va=<?php echo $_POST['va'] ?>&cd=<?php echo $_POST['cd'] ?>">Afficher la carte </a>
	</body>
</html>




<!doctype html>
<html lang="en">
   <head>
   	<meta charset="utf-8">
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="css/sheet.css">
		<title>Recheche</title>
   </head>
   
   <body>
   <h1>Electric Map</h1>
		<p>Trouvez des bornes de recharge pour votre voiture électrique dans tout le territoire français !</p>
	
	
		<form action="database_bornes.php" method="post" autocomplete="off">
		<title>Recherche Simple</title>
				<p>
				Ville de depart:
				<input type="text" name="vd" value=""placeholder="facultatif"/> </p>
				<p>
				Ville d'arrivee:
				<input type="text" name="va" value="" placeholder="facultatif"/> </p>
				Code postal:
				<input type="int" name="cd" value="" placeholder="facultatif"/> </p>
				<p><input type="submit" value="Recherche"></p>	
	
   </body>
   
</html>
































	
