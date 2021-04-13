<?php
	function comparateur($requete)
	{
		if ($requete -> rowCount() > 0)  
			{
					echo "<p><h3>Voici les resultats de votre recherche :</h3></p>";
				
					echo "<table border='4'>\n";
					echo "<tr>\n";	
					echo "<td><strong>Marque</strong></td>\n";				
					echo "<td><strong>Modele</strong></td>\n";
					echo "<td><strong>Prix</strong></td>\n";
					echo "<td><strong>Autonomie</strong></td>\n";
					echo "<td><strong>Puissance</strong></td>\n";
					echo "<td><strong>Recharge</strong></td>\n";
					echo "<td><strong>Consommation</strong></td>\n";
					echo "<td><strong>Motorisation</strong></td>\n";
					//echo "<td><strong>Image</strong></td>\n";
					echo "<tr>\n";
				
				while($rech = $requete ->fetch()) 
				{
					//echo $rech;
				
					echo "<tr>\n";
					echo "<td>".$rech['marque']."</td>\n";
					echo "<td>".$rech['modele']."</td>\n";
					echo "<td>".$rech['prix']."</td>\n";
					echo "<td>".$rech['autonomie']."</td>\n";
					echo "<td>".$rech['puissance']."</td>\n";
					echo "<td>".$rech['recharge']."</td>\n";
					echo "<td>".$rech['consommation']."</td\n>";
					echo "<td>".$rech['moteur']."</td\n>";
					//echo "<td><img src='".$rech['url']."'/></td>"; 	
					echo "<tr>\n";
				}
				
				$requete ->closeCursor ();
				echo "</table>\n";	
			}
			else 
			{
				echo "<p><h3>Aucun resultat trouvé</h3></p>";
			}	
	}
	
	function getBD()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=electric_map;charset=utf8', 'root', '');
		return $bdd;
	}
	
	function enregistrer($n, $p, $mv, $modv, $num, $email, $mdp)
	{
		$bdd = getBD();
		$requete = "INSERT INTO utilisateur (nom, prenom, marque, modele, numero, email ,mdp) VALUES('$n', '$p', '$mv', '$modv', '$num', '$email', '$mdp')";
		$resultat = $bdd -> query($requete);
		
		if ($resultat)
			echo "<h3>Inscription réussie</h3>";
		else
			echo "<h3>Erreur</h3>";
		
	}
	
	function bornes ($rep) {
		
			$vd = $_POST['vd'];
			$va = $_POST['va'];
			
			if($vd == ""){$vd ="xxx";}
			if($va == ""){$va ="xxx";}
		
		if($vd !="xxx" or $va !="xxx"){
				
			$bornes ="[";
			while ($ligne = $rep ->fetch()){
				echo "<script> console.log('"."[".$ligne['latitude'].  ", ".$ligne['ville']   ."],". " ')</script>";
				$bornes = $bornes ."[".$ligne['latitude'].  ", ".$ligne['longitude']   ."],";
			}
		
			$bornes = $bornes. " ]";
			echo "<script> console.log('".  $bornes ."')</script>";
		
		}
		else {echo "veuillez mettre le nom d'une ville ";}
		
	}
	
	

?>

