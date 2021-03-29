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
			
			
		?>
	<body>
		
		
		
		<a href="map.php?vd=<?php echo $_POST['vd'] ?>&va=<?php echo $_POST['va'] ?>">Afficher la carte </a>
	</body>
</html>





































	
