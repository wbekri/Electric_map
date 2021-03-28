<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/sheet.css">

   <head>
   <title>Connecter</title>
   </head>
   <body>

	<?php

     $bdd = new PDO('mysql:host=localhost;dbname=electric_map','root', 'root');

  
  $rep = $bdd->query("SELECT * FROM persons WHERE email LIKE '".$_POST['email']."' ");
   ?> 
   <from method="post">
  <table border=1>

   <?php
   if ($rep) 
    {
      $nbrep = $rep ->rowCount();  
    
      if ($nbrep > 0)  
      {
        echo "<p><h3>Votre profil</h3></p>";
       ?>
        <tr>
       <div>
        <th>Nom </th>
       <th>Prenom </th>
       <th>Adresse</th>
       <th>Modéle de Voiture</th>
        <th>Numéro de tél</th>
         <th>Email</th>
      </tr>
  <?php
     while($rech =$rep ->fetch()) 
        { ?>
        <tr ><td> <?php echo "".$rech['nom']; ?> </td>
         <td> <?php echo "".$rech['prenom']; ?> </td>
         <td> <?php echo "".$rech['adr']; ?> </td>
         <td> <?php echo "".$rech['mv']; ?> </td>
         <td> <?php echo "".$rech['num']; ?> </td>
         <td> <?php echo "".$rech['email']; ?> </td></tr>
        <?php
       }
        
        $rep ->closeCursor (); 
    }
        else 
      {
        echo "<p><h3>Vous n'etes pas inscrit</h3></p>";
      }
  } 
   ?>
   </table>
  </form>

    </body>
</html>