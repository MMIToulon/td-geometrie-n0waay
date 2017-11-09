<?php

	//Affiche les erreurs
	ini_set('display_errors','1');

//On créé la classe mère abstraite
abstract class Produit {

	//On définit les variables nbVendu, poid ainsi que la variable statique compteur
	//qui va permettre de compter combien de produit sont créés.
	protected $nbVendu;
	protected $poid;
   	public static $compteur = 0;

	//Constructeur afin d'assigner les valeurs directement lors de l'instanciation
	//Et permet d'incrémenter le compteur à chaque création de produit.
   	public function __Construct($nbVendu, $poid) {
   		echo "<br/>Création d'un produit";
   		$this->nbVendu = $nbVendu;
   		$this->poid = $poid;
      	self::$compteur++;
   	}


 	//ACCESSEURS pour récupérer/modifier les valeurs protégés depuis
 	//une autre classe.
	public function getNbVendu(){
		return $this->nbVendu;
	}

	public function setNbVendu($nbVendu){
		return $this->nbVendu = $nbVendu;
	}

	public function getPoid() {
		return $this->poid;
	}

	public function setPoid($poid) {
		return $this->poid = $poid;
	} 

	//Permet de prevenir que la fonction est attendue mais ne peut pas
	//encore être utilisé ici.
	public abstract function calculPrix();

}

?>