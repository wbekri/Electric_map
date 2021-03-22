<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="css/sheet.css" type="text/css" media="screen" />
	<meta charset="UTF-8">
	<title>Article</title>
</head>
<body>
<?php
		if( isset($_POST['search']) )
		{
			$bdd = new PDO('mysql:host=localhost;dbname=voitureelectrique;charset=utf8','root', '');
			$rep = $bdd->query('SELECT * FROM voiture WHERE marque = "'.$_POST['marque'].'" ');
			echo "<table>
				<tr>
					<th> Marque </th>
					<th> Model </th>
					<th> Prix </th>
					<th> autonomie </th>
					<th> puissance </th>
				</tr>";
				while ($ligne = $rep ->fetch())
				{
					echo "<tr>
						<td>".$ligne['marque']."</td>
						<td>".$ligne['modele']."</td>
						<td>".$ligne['prix']."</td>
						<td>".$ligne['autonomie']."</td>
						<td>".$ligne['puissance']."</td>
					</tr>";
				}
			echo "</table>";
			$rep ->closeCursor();
		}
	?>
	<div style="width : 100%; margin-top: 50px;">
		<form method="POST" action="" style="margin-left: auto;margin-right: auto;width: 200px;" >
			<span >Marque de la voiture : </span><br>
			<input style="width: 100%;" type="text" name="marque" placeholder="Ex : Ford"><br><br>
			<span >Modèle : </span><br>
			<input style="width: 100%;" type="text" name="modele" placeholder="Ex : Focus"><br><br>
			<span >prix : </span><br>
			<input style="width: 100%;" type="text" name="prix" placeholder="Ex : 5000"><br><br>
			<input style="width: 100%;" type="submit" value="Rechercher" name="search">
		</form>
	</div>


<p><a href="../index.php" > index</a></p
</body>
</html>


