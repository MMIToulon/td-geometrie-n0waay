<?php
	//Importe les fichiers dépendants
	require_once('src/produit.php');
	require_once('src/produitKilo.php');
	require_once('src/produitUnite.php');

	//Affiche les erreurs
	ini_set('display_errors','1');

	//Instanciation de la classe
	//Utilisation de la fonction calculPrix de la classe instanciée
	//Affichage du compteur de produit créé pour vérifier qu'il marche
	$c1 = new produitKilo(50,10,10);
	echo $c1->calculPrix();
	echo "<br/>".Produit::$compteur;

	//Instanciation de la classe
	//Utilisation de la fonction calculPrix de la classe instanciée
	//Affichage du compteur de produit créé pour vérifier qu'il marche
	$c2 = new produitUnite(60,2.5,10);
	echo $c2->calculPrix();
	echo "<br/>".Produit::$compteur;


?>