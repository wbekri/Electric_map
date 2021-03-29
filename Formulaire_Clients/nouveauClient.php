<head> 
<meta charset="utf-8">
<title> Nouveau client </title>
<link rel="stylesheet" type="text/css" href="sheet.css">
</head>

<form action="enregistrement.php" method="post" autocomplete="off"> <p>
	Nom :
	<input type="text" name="n" value="" required /> </p>
	<p>
	Prénom :
	<input type="text" name="p" value="" required /> </p>
	<p>
	Marque de voiture :
	<input type="text" name="mv" value=""/> </p>
	<p>
	Modèle de voiture :
	<input type="text" name="modv" value=""/> </p>
	<p>
	Adresse :
	<input type="text" name="adr" value=""/> </p>
	<p>
	Numéro de téléphone :
	<input type="text" name="num" value=""/> </p>
	<p>
	Adresse e-mail:
	<input type="text" name="email" value="" required /> </p>
    <p>
    Mot de passe :
	<input type="password" name="mdp1" value="" required /> </p>
	<p>
	Confirmer mot de passe :
	<input type="password" name="mdp2" value="" required="retapez le mot de passe"/> </p>
	<p>
	<input type="submit" value="Envoyer">
	</br>
	</p> 
</form>

	<a href="connexion.php">J'ai deja un compte
		</a>
		</br>

    <a href="../index.html">Retour
