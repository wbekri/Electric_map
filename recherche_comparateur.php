
<?php
		
		$bdd = new PDO('mysql:host=localhost;dbname=voitureelectrique;charset=utf8','root', 'root');
		$rep = $bdd->query("SELECT * FROM voitureselectriques  WHERE marque LIKE '".$_POST['marque']."'");
		
		if ($rep) 
		{
			$nbrep = $rep ->rowCount();  
		
			if ($nbrep > 0)  
			{
				echo "<p><h3>Voici les resultats de votre recherche :</h3></p>";
				
					echo "<table border='1'>\n";
					echo "<tr>\n";	
					echo "<td><strong>Marque</strong></td>\n";				
					echo "<td><strong>Modele</strong></td>\n";
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
					echo "<td>".$rech['montant']."</td>\n";
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