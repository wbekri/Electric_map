<html>

	<head> 
		<meta charset="utf-8">
		<title> Utilisateur </title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body>
		<div id="container">
			<form action="enregistrement.php" method="post" >
				<h1>Inscription</h1>
				
				<label><b> Nom </b></label>
				<input type="text" name="n" value="<?php if(!empty($_GET['nom'])) { echo $_GET['nom'];} ?>" placeholder="Entrer votre Nom" required /> 
				
				<label><b> Prenom </b></label>
				<input type="text" name="p" value="<?php if(!empty($_GET['prenom'])) { echo $_GET['prenom'];} ?>" placeholder="Entrer votre Prenom" required /> 
				
				<label><b> Marque de voiture </b></label>
				<input type="text" name="mv" value="<?php if(!empty($_GET['marque'])) { echo $_GET['marque'];} ?>" placeholder="Entrer votre marque de voiture" required /> 
				
				<label><b> Modèle de voiture </b></label>
				<input type="text" name="modv" value="<?php if(!empty($_GET['modele'])) { echo $_GET['modele'];} ?>" placeholder="Entrer votre modèle de voiture" required /> 
					
				<label><b> Numéro de téléphone </b></label>
				<input type="text"  name="num"  value="<?php if(!empty($_GET['numero'])) { echo $_GET['numero'];} ?>" placeholder="06xxxxxxxx" pattern="[0-9]{10}" /> 
				
				<label><b> Adresse e-mail </b></label>
				<input type="text" name="email" value="<?php if(!empty($_GET['mail'])) { echo $_GET['mail'];} ?>" placeholder="exemple@exemple.fr" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$" /> 
				
				<label><b> Mot de passe </b></label>	
				<input type="password" name="mdp1"  value="" placeholder="Entrer votre mot de passe" required /> 
				
				<label><b> Confirmer mot de passe </b></label>				
				<input type="password" name="mdp2" value="" placeholder="Confirmer mot de passe" required> 
				
				<input type="submit" value="Envoyer">
				
				<p><a href="connexion.php">J'ai deja un compte</a></p>
				<a href="../index.php"> Retour </a>
				
			</form>
		</div>
		
	
			
		
		
	</body>
</html>