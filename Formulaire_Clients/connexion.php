<html>

   <head>
   
    <title>Connexion</title>
   </head>
   <body>

 <style>
  *{
  background-color: darkseagreen
  }
  #adresse{ text-align: center;
      color: white;
      padding-top: 50px;

  }
 </style>


<form action="connecter.php" method="post" autocomplete="off">
<p id="adresse">
	Adresse e-mail:
	<input type="text" name="mail" value=""/> </p>
    <p id="adresse">
    Mot de passe :
	<input type="password" name="mdp1" value=""/> </p>
	<p id="adresse">
	<input type="submit" value="Envoyer">
	</br>
	</p> 
	<a id="adresse" href="nouveauClient.php">Je veux creer un compte
      </a>
      </br>
      
         </body>
</html>