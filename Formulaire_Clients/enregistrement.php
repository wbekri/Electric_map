<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/sheet.css">
    <head>
<title>New user</title> </head>
<body> <?php
            echo 'Votre nom:'; 
            echo $_POST['n'];
            echo '<BR>';
            echo 'Votre prenom: '; 
            echo $_POST['p'];
            echo '<BR>';
            echo 'Marque de votre voiture: ' ;
            echo $_POST['mv'];
            echo '<BR>';
            echo 'Modele de votre voiture: '; 
            echo $_POST['modv'];
            echo '<BR>';
            echo 'Votre adresse: '; 
            echo $_POST['adr'];
            echo '<BR>';
            echo 'Numero de telephone: ' ;
            echo $_POST['num'];
            echo '<BR>';
            echo 'Votre email: ' ;
            echo $_POST['email'];
            echo '</br>';
            
    
        
        
    $bdd = new PDO('mysql:host=localhost;dbname=electric_map','root', 'root');
	echo 'connection electric_map ok ok </br>';
	
	$sql = "INSERT INTO persons (nom, prenom, mv, modv, adr, num, email, mdp1)
	 VALUES(:nom, :prenom, :mv, :modv, :adr, :num, :email, :mdp1)";
    $stmt = $bdd->prepare($sql);
    
    
    // Bind parameters to statement
    $stmt->bindParam(':nom', $_POST['n'], PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $_POST['p'], PDO::PARAM_STR);
    $stmt->bindParam(':mv', $_POST['mv'], PDO::PARAM_STR);
    $stmt->bindParam(':modv', $_POST['modv'], PDO::PARAM_STR);
    $stmt->bindParam(':adr', $_POST['adr'], PDO::PARAM_STR);
    $stmt->bindParam(':num', $_POST['num'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':mdp1', $_POST['mdp1'], PDO::PARAM_STR);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
    ?>
    
        <a href="../index.html">Retour
		</a>
    </body>
</html>