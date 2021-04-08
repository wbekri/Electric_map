<!doctype html>
<html lang="en">
   <head>
   	<meta charset="utf-8">
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="css/sheet.css">
		<title>Recheche</title>
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
<br><br>
<div style="width : 100%; margin-top: 50px;">

		<form action="database_bornes.php" method="post" autocomplete="off" style="margin-left: auto;margin-right: auto;width: 200px;">
		<title>Recherche Simple</title>
		
				<p>
				Ville de depart:
				<input type="text" name="vd" value=""placeholder="facultatif"/> </p>
				<p>
				Ville d'arrivee:
				<input type="text" name="va" value="" placeholder="facultatif"/> </p>
				Code postal:
				<input type="int" name="cd" value="" placeholder="facultatif"/> </p>
				<p><input type="submit" value="Recherche"></p>	
	</div>
   </body>
   
</html>