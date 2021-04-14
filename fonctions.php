<?php
	function comparateur($requete)
	{
		if ($requete -> rowCount() > 0)  
			{
	?>	
			  
               <br><br><br><br><br>

                 <body>
			   
				
				<table border='1'>
					  <thead>
					  	<tr>	
					<th>Marque</th>				
					<th>Modele</th>
					<th>Prix</th>
					<th>Autonomie</th>
					<th>Puissance</th>
					<th>Recharge</th>
					<th>Consommation</th>
					<th>Motorisation</th>
					  </tr>
					</thead>
				<?php
				
				while($rech = $requete ->fetch()) 
				{
				?>
				  <tdoby>
				  <tr><td><?php echo"".$rech['marque'];?></td>
					<td><?php echo"".$rech['modele'];?></td>
					<td><?php echo"".$rech['prix'];?></td>
                    <td><?php echo"".$rech['autonomie'];?></td>
					<td><?php echo"".$rech['puissance'];?></td>
					<td><?php echo"".$rech['recharge'];?></td>
					<td><?php echo"".$rech['consommation'];?></td>
					<td><?php echo"".$rech['moteur'];?></td></tr>
					</tdoby>	
				 <?php
				}
				
				$requete ->closeCursor (); ?>
				</table>
			</body>
			 <?php	
			}
			else 
			{
				echo "<p><h3>Aucun resultat trouvé</h3></p>";
			}	
	}
	
	function getBD()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=electric_map;charset=utf8', 'root', 'root');
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

<style>

 th {
 	background: #39ba92;
 	color: white;
 	text-transform: uppercase;
 	font-family: 'Roboto', sans-serif;

 }
 tr: nth-child(odd){
 	color: #eeeeee;
 }
 td{
 	font-family: 'Open Sans', sans-serif;
 }
  th, td{
  padding: 12px 15px;
 }
 table{
 	position: absolute;
 	z-index: 2;
 	left: 50%;
 	top:50%;
 	transform: translate(-50%,-50%);
 	width: 60%;
    border-collapse: collapse;
    border-spacing: 0;
    border-radius: 12px 12px 0 0;
    overflow: hidden;
    text-align: center;
    background: #fafafa;
 }
</style>