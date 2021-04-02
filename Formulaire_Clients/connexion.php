

<html>
    <head>
       <meta charset="utf-8">
        
        
		<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="connecter.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Adresse e-mail</b></label>
                <input type="text" placeholder="Entrer le nom l'adresse e-mail" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp1" required>

                <input type="submit" id='submit' value='Connexion' >
				
				<a id="adresse" href="nouveau.html"> Je veux creer un compte </a>
               
            </form>
        </div>
    </body>
</html>









<?php
/*
<html>

   <head>
   
    <title>Connexion</title>
   </head>
   <body>


<form action="connecter.php" method="post" autocomplete="off">
<p id="adresse">
	Adresse e-mail:
	<input type="text" name="email" value="" required /> </p>
    <p id="adresse">
    Mot de passe :
	<input type="password" name="mdp1" value="" required /> </p>
	<p id="adresse">
	<input type="submit" value="Envoyer">
	</br>
	</p> 
	<a id="adresse" href="nouveauClient.php"> Je veux creer un compte </a>
      </br>
      
         </body>
</html>
*/
?>