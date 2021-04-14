<?php include ('fonctions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head> 
<meta charset="utf-8">
<title> Projet </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/sheet.css">
<script src="js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
      <button type="button" class="xs-buttons pull-left btn btn-clear" data-toggle="collapse" data-target="#nav-right">
 <img id="logo" src="images/logo.png" />
<style>
  #logo {
    width : 80px;
  }
</style>
</a>
    
    <a class="navbar-brand" href="#">ELECTRIC MAP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <style>
        #navbarResponsive{
          margin-left : 20%;
        }
      </style>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nouvelles.html">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="formulaire_comparateur.php">Comparateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recherche_bornes.php">Bornes de recharge</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="gps.html">Itinéraire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="infoCovid.html">Covid</a>
        </li>
      </ul>
         <div class="nav navbar-nav" id="member_header" role="presentation">
<a href="Formulaire_Clients/connexion.php" class="btn btn-info" data-operation="connexion">
<span class="cmp-icon icon-cm-login"></span>
<span>Connexion</span>
</a>
<a href="" class="btn btn-success" data-operation="deconnexion">
<span>Deconnexion</span>
</a>
</div>
         
    </div>
  </div>
</nav>

<?php
<<<<<<< HEAD
	 $bdd = new PDO('mysql:host=localhost;dbname=electric_map;charset=utf8',
    'root', 'root');
=======
		
		$bdd = getBD(); 	
>>>>>>> 4533554e14cd87044166365ae82590bd07c1ea81
		
		
		if(!empty ($_POST['marque']) && !empty($_POST['moteur']))
		{
			
			$rep_mm = $bdd->query("SELECT * FROM voitures  WHERE marque LIKE '".$_POST['marque']."' AND moteur LIKE '".$_POST['moteur']."'");
			comparateur($rep_mm);
		}
		
		elseif(!empty ($_POST['marque']) && empty($_POST['moteur']))
		{
			$rep_mm = $bdd->query("SELECT * FROM voitures WHERE marque LIKE '".$_POST['marque']."'");
			comparateur($rep_mm);
		}
		elseif(empty ($_POST['marque']) && !empty($_POST['moteur']))
		{
			$rep_mm = $bdd->query("SELECT * FROM voitures  WHERE moteur LIKE '".$_POST['moteur']."'");
			comparateur($rep_mm);
		}
<<<<<<< HEAD
			
		
 
    
		
?>
</body>
</html>
=======

?>

>>>>>>> 4533554e14cd87044166365ae82590bd07c1ea81
