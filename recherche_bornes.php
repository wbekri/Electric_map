<!doctype html>
<html lang="en">
   <head>
   	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="sheet.css">
		<title>Recheche</title>
   </head>
   
   <body>
   <h1>Electric Map</h1>
		<p>Trouvez des bornes de recharge pour votre voiture électrique dans tout le territoire français !</p>
		<p>---text---</p>
		<p>---text---</p>
		<p>---text---</p>
		
   
		
   
   
		<form action="database_bornes.php" method="post" autocomplete="off">
		
			<fieldset class="position">			
				<legend>Recherche Simple</legend>
				
				<label for="vd">Ville de depart</label>
				<input type="text" id="vd" name="Ville de depart" value=""/> </p>
				
				<label for="va">Ville d'arrivee</label>
				<input type="text" id="va" name="Ville d'arrivée" value="" placeholder="facultatif"/> </p>
				
				<p><input type="submit" value="Recherche"></p>	
			</fieldset> 
			
			<p></p> <!--saut de ligne (à modifier)-->
			
			<fieldset class="position">
			
				<legend>Recherche Avancée</legend>
				
				<label for="v">Ville</label>
				<input type="text" id="v" name="Ville" value=""/> </p>
				
				<label for="c1">Criteres 1</label>
				<input type="text" id="c1" name="Criteres 1" value=""/> </p>
				
				<label for="c2">Criteres 2</label>
				<input type="text" id="c2" name="Criteres 2" value=""/> </p>
				
				<label for="c3">Criteres 3</label>
				<input type="text" id="c3" name="Criteres 3" value=""/> </p>
			
				<label for="r">Rayon</label>
				<select id="r" name="Rayon"> 
					<option value="moins de 25 km"> moins de 25 km</option>
					<option value="25-50 km">25-50 km</option>
					<option value="50-100 km">50-100 km</option>
					<option value="plus de 100 km">plus de 100 km</option>
				</select>
				
				<p><input type="submit" value="Recherche"></p>
			</fieldset>
		
		
		
			
   </body>
   
</html>