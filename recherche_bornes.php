<!doctype html>
<html lang="en">
   <head>
   	<meta charset="utf-8">
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