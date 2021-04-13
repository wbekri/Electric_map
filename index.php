<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head> 
<meta charset="utf-8">
<title> Projet </title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/sheet.css">
<script src="js/bootstrap.min.js"></script>

</head>
<body >

	<h1>Electric Map Bonjour <?php$_SESSION['email']?> </h1>
<!---<div id="main">
<ul>
	<li><a href="#Acceuil">Acceuil</a></li>
	<li><a href="nouvelles.html">Nouvelles</a></li>
	<li><a href="Comparateur/formulaire_comparateur.php">Comparateur</a></li>
	<li><a href="recherche_bornes.html">Map</a></li>
	<li><a href="pageContact.html">Contacts</a></li>
	<li><a href="Formulaire_Clients/connexion.php">Connexion</a></li>
<<<<<<< HEAD
	<li><a href="Formulaire_Clients/nouveauClient.php">S'inscrire</a></li> !--->


	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">ELECTRIC MAP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
     
		
		
		<?php if (!isset($_SESSION['autoriser'])) { ?>
					<ul class="navbar-nav ml-auto">	
						<li class="nav-item">
						<a class="nav-link" href="recherche_bornes.php">Bornes de recharge</a>
						</li>
					
						<li class="nav-item">
						<a class="nav-link" href="Formulaire_Clients/connexion.php">Connexion</a>
						</li> 
					</ul>
		
		<?php } else { ?>
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
						<a class="nav-link" href="pageContact.html">Contact</a>
						</li>
					
						<li class="nav-item">
						<a class="nav-link" href="Formulaire_Clients/deconnexion.php">Deconnexion</a>
						</li> 
					</ul>		
			 <?php } ?>
			 
    </div>
  </div>
</nav>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/carnature.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Trouver une borne de recharge</h2>
          <p class="lead">Bornes de recharges pour voitures électriques</p>
        </div>
      </div>
    
   
    </div>
    
  </div>
</header>
<div class="content">
<p>
Electric Map <?php$_SESSION['autoriser']?> est une application web pour repérer les bornes de recharge  pour véhicules électriques à proximité, 
Elle propose la cartographie de référence pour trouver les bornes de recharge en France. 
</p>
</div>

</body>

<header class="bg-secondary text-center py-3 mb-2">
  <div class="container">
    <h1 class="text-light">Meet the Team</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="images/wiam2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Wiam Bekri</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="images/nathalie2.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Nathalie Keilhaeur</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="images/diaw.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Ibrahima Diaw</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="images/diarra.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Ibrahim Diarassouba</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 5 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="images/oliver.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Oliver Fundu</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>


<a href="https://github.com/wbekri/Electric_map/tree/master"> Github </a>


</html>