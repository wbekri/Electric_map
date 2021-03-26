<html>
 <head>
 </head>
		<?php
			
			
			echo "Ville de depart: ";
			echo $_POST['vd'];
			echo '<br/>';
			echo "Ville d'arrivee: ";
			echo $_POST['va'];
			echo '<br/>';
			
			
			echo "Ville :";
			echo $_POST['v'];
			echo '<br/>';
			
			echo "Critere 1 :";
			echo $_POST['c1'];
			echo '<br/>';
			
			echo "Critere 2 :";
			echo $_POST['c2'];
			echo '<br/>';
			
			echo "Rayon :";
			echo $_POST['r'];
			echo '<br/>';
			
		?>
	<body>
		
		
		
		<a href="map.php?vd=<?php echo $_POST['vd'] ?>&va=<?php echo $_POST['va'] ?>">Afficher la carte </a>
	</body>
</html>





































	
