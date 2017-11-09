<?php

	//Affiche les erreurs
	ini_set('display_errors','1');

	//Importe le fichier contenant la classe testée
	require_once('src/produitUnite.php');

	//Instanciation de la classe
	$pu = new ProduitUnite(10, 50, 3);

	//Affiche les caractéristiques de la classe
	var_dump($pu);

	//Utilise la fonction toString
	echo $pu;

?>