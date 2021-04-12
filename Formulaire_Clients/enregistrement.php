<?php include ('..\fonctions.php'); ?>

<html>

    <head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Enregistrement</title> 
	</head>
	
	<body> 
	
	
	
	<?php
		if($_POST['mdp1'] != $_POST['mdp2'] ) 
		{
	?>
			<script> alert('Les mots de passes ne sont pas identiques'); </script>
	<?php
			$nom=$_POST['n']; $prenom=$_POST['p']; $marque=$_POST['mv']; $modele=$_POST['modv']; $numero=$_POST['num'];$mail=$_POST['email'];
			echo "<meta http-equiv='Refresh' content='0;URL=nouveau.php?nom=$nom&amp;prenom=$prenom&amp;marque=$marque&amp;modele=$marque&amp;numero=$numero&amp;mail=$mail'>";

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



