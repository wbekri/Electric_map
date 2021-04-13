<?php include ('.\fonctions.php'); ?>

<html>

    <head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Enregistrement</title> 
	</head>
	
	<body> 
	
	<?php
		if($_POST['mdp1'] != $_POST['mdp2'] ) 
		{
			echo '<h3>les mots de passes ne sont pas identiques vous allez etre rediriger vers la page inscription</h3>';
			echo "<meta http-equiv='Refresh' content='3;URL=nouveau.html'>";
		}	
		else
		{
			enregistrer($_POST['n'], $_POST['p'], $_POST['mv'], $_POST['modv'], $_POST['num'], $_POST['email'], $_POST['mdp1']);  
			echo "<meta http-equiv='Refresh' content='3;URL=/Electric_map/index.php'>";
		}
    ?>  
        <a href="../index.php"> Retour </a>
    </body>
</html>



