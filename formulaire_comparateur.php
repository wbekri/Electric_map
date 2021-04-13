
<html>

	<head>
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
      <link rel="stylesheet" type="text/css" href="css/sheet.css">
      <script src="js/bootstrap.min.js"></script>
		<title>Comparateur de voitures</title>
	</head>
	
	<body>
		
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
          <a class="nav-link" href="index.html">Home</a>
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
</nav>
<br><br><br>

		<div style="width : 100%; margin-top: 50px;">
			<form method="post" action="recherche_comparateur.php" style="margin-left: auto;margin-right: auto;width: 200px;">
			
				<p> Marque : <input type="text" name="marque" value=""/> </p>
				<p> 
         <input type="radio" name="moteur" value="moteur"> Electrique     
          <input type="radio" name="moteur" value="moteur"> Hybride </p>
              
				<input type="submit" value="recherche">
				
			</form>
		</div>
  <div class="voitures">
		<div id="voiture1" >
      <img src="https://ev.saabre.com/storage/app/uploads/public/5f2/d56/cc4/thumb_1139_300_200_0_0_auto.jpg">
      <h3> Renault Zoe </h3>
      <p>32500 €</p>
    </div>
    <div id="voiture2">
      <img src="https://ev.saabre.com/storage/app/uploads/public/5e1/729/ee4/thumb_950_300_200_0_0_auto.png">
      <h3> Tesla </h3>
      <p class="indent">43800 € </p>
    </div>
     <div id="voiture3">
      <img src="https://ev.saabre.com/storage/app/uploads/public/5cd/3ef/780/thumb_710_300_200_0_0_auto.png">
      <h3> Audi e-Tron </h3>
      <p>71900 € </p>
    </div>
     <div id="voiture4">
      <img src="https://ev.saabre.com/storage/app/uploads/public/5d0/787/0aa/thumb_819_300_200_0_0_auto.jpg">
      <h3> Peugeot e-208 </h3>
      <p> 32700 € </p>
    </div>
     <div id="voiture5">
      <img src="https://ev.saabre.com/storage/app/uploads/public/5ea/14c/f9a/thumb_1117_300_200_0_0_auto.png">
      <h3> Land Rover </h3>
      <p> 52500 € </p>
    </div>
     <div id="voiture6">
      <img src="https://ev.saabre.com/storage/app/uploads/public/5e1/4a7/8a1/thumb_934_300_200_0_0_auto.jpg">
      <h3> Mercedes Classe A </h3>
      <p> 41150 € </p>
    </div>
  </div>

</script>

  <style>
    .voitures{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 10px;
  padding: 10px;
}

  </style>
	</body>
</html>

