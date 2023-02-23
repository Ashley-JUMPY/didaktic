<?php 
	function chargeur($cl){
		include($cl . ".class.php");
	}
	//chargeur("compteur");
	// Permet de charger automatiquement 
	// plusieurs classes
	spl_autoload_register("chargeur");
	session_start();
	$cpt = new compteur();
	echo "Nombre de visiteurs: " . $cpt->afficher();
?>