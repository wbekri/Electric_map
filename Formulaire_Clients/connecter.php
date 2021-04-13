<?php include ('..\fonctions.php'); ?>
<?php session_start(); ?>

<html>

   <head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Connecter</title>
   </head>
   
   <body>
   
	   <?php

			if ($_POST['email'] != "" && $_POST['mdp1'] != "")
			{
				$email = $_POST['email'];
				$mdp = $_POST['mdp1'];
				
				$bdd = getBD(); 	
				$check = $bdd->prepare("SELECT nom, prenom, email, mdp FROM utilisateur WHERE email='$email' AND mdp='$mdp'");
				$check->execute();
				
				if($check->rowCount() > 0) 
				{
					$_SESSION['autoriser'] = "oui";
					$_SESSION['email'] = $email;
					
		?>	
					<script> alert('Connexion réussi'); </script>
		<?php		
					echo "<meta http-equiv='Refresh' content='0;URL=/Electric_map/index.php'>";					
				} 
				else 
				{
		?>			
					<script> alert("L'adresse e-mail ou le mot de passe est incorrect"); </script>
		<?php
					echo "<meta http-equiv='Refresh' content='0;URL=connexion.php'>";
				}	
			}
			else 
			{
				header('Location: connexion.php');
			}
			
		?>
		
   </body>
</html>




