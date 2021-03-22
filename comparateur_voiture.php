
<html>
<head>

<link rel="stylesheet" type="text/css" href="sheet.css">
<title>Comparateur de voitures</title>
</head>
<body>
	<p> comparateur des voitures  </p>
	<?php
		$bdd = new PDO('mysql:host=localhost;dbname=voitureelectrique;charset=utf8','root', '');
		$rep = $bdd->query("SELECT * FROM `table 1`  WHERE marque LIKE '".$_POST['marque']."'");
		
		if ($rep) 
		{
<<<<<<< HEAD
			$bdd = new PDO('mysql:host=localhost;dbname=voitureelectrique;charset=utf8','root', '');
			$rep = $bdd->query('SELECT * FROM voitureselectriques Where marque ="'.$_POST['marque'].'"');
			while ($ligne = $rep ->fetch())
=======
			$nbrep = $rep ->rowCount();  
		
			if ($nbrep > 0)  
>>>>>>> f3ac34953adb80ea932b241a6db02bdb6d1a21ae
			{
				echo "<p><h3>Voici les resultats de votre recherche :</h3></p>";
				
					echo "<table border='1'>\n";
					echo "<tr>\n";	
					echo "<td><strong>Marque</strong></td>\n";				
					echo "<td><strong>Modèle</strong></td>\n";
					echo "<td><strong>Prix</strong></td>\n";
					echo "<td><strong>Autonomie</strong></td>\n";
					echo "<td><strong>Puissance</strong></td>\n";
					echo "<td><strong>Recharge</strong></td>\n";
					echo "<td><strong>Consommation</strong></td>\n";
					echo "<tr>\n";
				
				while($rech =$rep ->fetch()) 
				{
					echo "<tr>\n";
					echo "<td>".$rech['marque']."</td>\n";
					echo "<td>".$rech['modele']."</td>\n";
					echo "<td>".$rech['prix']."</td>\n";
					echo "<td>".$rech['autonomie']."</td>\n";
					echo "<td>".$rech['puissance']."</td>\n";
					echo "<td>".$rech['recharge']."</td>\n";
					echo "<td>".$rech['consommation']."</td\n>";
					echo "<tr>\n";
				}
				
				$rep ->closeCursor ();
				echo "</table>\n";		
			}
		
			else 
			{
				echo "<p><h3>Aucun resultat trouvé</h3></p>";
			}	
		}
?>

	<div style="width : 100%; margin-top: 50px;">
		<form method="POST" action="comparateur_voiture.php" style="margin-left: auto;margin-right: auto;width: 200px;" >
			<span >Marque de la voiture : </span><br>
			<input style="width: 100%;" type="text" name="marque" placeholder="Ex :"><br><br>
			<span >Modèle : </span><br>
			<input style="width: 100%;" type="text" name="modele" placeholder="Ex : "><br><br>
		
			<input style="width: 100%;" type="submit" value="Rechercher" name="search">
			
			
		</form>
	</div>
</body>
</html>
