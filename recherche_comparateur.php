<?php include ('fonctions.php'); ?>

<?php
		
		$bdd = getBD(); 	
		
		
		if(!empty ($_POST['marque']) && !empty($_POST['moteur']))
		{
			
			$rep_mm = $bdd->query("SELECT * FROM voitures  WHERE marque LIKE '".$_POST['marque']."' AND moteur LIKE '".$_POST['moteur']."'");
			comparateur($rep_mm);
		}
		
		elseif(!empty ($_POST['marque']) && empty($_POST['moteur']))
		{
			$rep_mm = $bdd->query("SELECT * FROM voitures WHERE marque LIKE '".$_POST['marque']."'");
			comparateur($rep_mm);
		}
		elseif(empty ($_POST['marque']) && !empty($_POST['moteur']))
		{
			$rep_mm = $bdd->query("SELECT * FROM voitures  WHERE moteur LIKE '".$_POST['moteur']."'");
			comparateur($rep_mm);
		}

?>

