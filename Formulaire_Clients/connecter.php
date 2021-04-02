<?php include ('C:\wamp64\www\Electric_map\fonctions.php'); ?>
<?php session_start(); ?>

<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/sheet.css">

   <head>
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
				echo "Connexion réussi vous allez etre rediriger vers la page d'acceuil";
				echo "<meta http-equiv='Refresh' content='3;URL=/Electric_map/index.php'>";					
			} 
			else 
			{
				echo "L'adresse e-mail ou le mot de passe est incorrect";
				echo "<meta http-equiv='Refresh' content='3;URL=connexion.php'>";
			}	
		}
		else 
		{
			header('Location: connexion.php');
		}
		
	?>
   
   
   </body>
   
</html>





<?php /*
	
		$bdd = getBD();
     //$bdd = new PDO('mysql:host=localhost;dbname=electric_map','root', 'root');

  
  $rep = $bdd->query("SELECT * FROM utilisateur WHERE email LIKE '".$_POST['email']."' ");
   ?> 
   <from method="post">
  <table border=1>

   <?php
   if ($rep) 
    {
      $nbrep = $rep ->rowCount();  
    
      if ($nbrep > 0)  
      {
        echo "<p><h3>Votre profil</h3></p>";
       ?>
        <tr>
       <div>
        <th>Nom </th>
       <th>Prenom </th>
       <th>Adresse</th>
       <th>Modéle de Voiture</th>
        <th>Numéro de tél</th>
         <th>Email</th>
      </tr>
  <?php
     while($rech =$rep ->fetch()) 
        { ?>
        <tr ><td> <?php echo "".$rech['nom']; ?> </td>
         <td> <?php echo "".$rech['prenom']; ?> </td>
         <td> <?php echo "".$rech['adr']; ?> </td>
         <td> <?php echo "".$rech['mv']; ?> </td>
         <td> <?php echo "".$rech['num']; ?> </td>
         <td> <?php echo "".$rech['email']; ?> </td></tr>
        <?php
       }
        
        $rep ->closeCursor (); 
    }
        else 
      {
        echo "<p><h3>Vous n'etes pas inscrit</h3></p>";
      }
  } 
   
   </table>
  </form>
  */