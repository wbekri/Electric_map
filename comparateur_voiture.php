<! DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="sheet.css">
<title>Comparateur de voitures</title>
</head>
<body>
	<?php
		if( isset($_POST['search']) )
		{
			$bdd = new PDO('mysql:host=localhost;dbname=voitureelectrique;charset=utf8','root', '')
			s
			
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