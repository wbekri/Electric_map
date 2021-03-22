<?php
	function getBD(){

	$bdd = new PDO('mysql:host=localhost;dbname=electric_map;charset=utf8',
    'root', 'root');
    return $bdd;
    
	}

?>
