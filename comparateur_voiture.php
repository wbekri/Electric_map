
<html>
<head>

<link rel="stylesheet" type="text/css" href="sheet.css">
<title>Comparateur de voitures</title>
</head>
<body>
	<p> comparateur des voitures  </p>
	<?php
		if( isset($_POST['search']) )
		{
			$bdd = new PDO('mysql:host=localhost;dbname=voitureelectrique;charset=utf8','root', '');
			$rep = $bdd->query('SELECT * FROM table 1 Where marque ="'.$_POST['marque'].'"');
			while ($ligne = $rep ->fetch())
			{
				echo"<td>".$ligne['Marque']."</td>";
				echo"<td>".$ligne['Modèle']."</td>";
				echo"<td>".$ligne['prix']."</td>";
				echo"<td>".$ligne['autonomie']."</td>";
				echo"<td>".$ligne['puissance']."</td>";
				echo"<td>".$ligne['recharge']."</td>";
				echo"<td>".$ligne['consommation']."</td>";
			}
			echo'modification';
		$rep ->closeCursor();
		}
	?>

	<div style="width : 100%; margin-top: 50px;">
		<form method="POST" action="" style="margin-left: auto;margin-right: auto;width: 200px;" >
			<span >Marque de la voiture : </span><br>
			<input style="width: 100%;" type="text" name="marque" placeholder="Ex :"><br><br>
			<span >Modèle : </span><br>
			<input style="width: 100%;" type="text" name="modele" placeholder="Ex : "><br><br>
			<span >prix : </span><br>
			<input style="width: 100%;" type="text" name="prix" placeholder="Ex :"><br><br>
			<span> autonomie: </span><br>
			<input style ="width:100%;" type= "text" name ="autonomie" placeholder="Ex:"><br><br>
			<span> puissance: </span><br>
			<input style ="width:100%;" type= "text" name ="puissance" placeholder="Ex:"><br><br>
			<span> recharge: </span><br>
			<input style ="width:100%;" type= "text" name ="recharge" placeholder="Ex:"><br><br>
			<span> consommation: </span><br>
			<input style ="width:100%;" type= "text" name ="consommation" placeholder="Ex:"><br><br>
			<input style="width: 100%;" type="submit" value="Rechercher" name="search">
			
			
		</form>
	</div>
</body>
</html>