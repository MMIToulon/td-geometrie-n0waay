<?php

	//Affiche les erreurs
	ini_set('display_errors','1');

	//Importe le fichier contenant la classe testé
	require_once('src/produitKilo.php');

	//Instanciation de la classe
	$pk = new ProduitKilo(10, 50, 3);

	//Affiche les caractéristiques de la classe
	var_dump($pk);

	//Utilise la fonction toString
	echo $pk;

?>