<?php
	function getBD(){

	$bdd = new PDO('mysql:host=localhost;dbname=ElectricMaps;charset=utf8',
    'root', 'root');
    return $bdd;
    
	}

?>
