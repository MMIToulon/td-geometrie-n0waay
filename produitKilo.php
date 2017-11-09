<?php
	
	//Affiche les erreurs
	ini_set('display_errors','1');

	//On importe la classe mère
	require_once('produit.php');

class produitKilo extends Produit {

	//On définit la variable du prix, protected pour que la portée de la variable
	//reste entre les classes filles/mère
	protected $prix;

	//Constructeur afin d'assigner les valeurs directement lors de l'instanciation
	//Et permet d'importer le constructeur de la classe mère Produit
	public function __Construct($nbVendu, $poid, $prix) {
		$this->prix = $prix;
		parent::__construct($nbVendu,$poid);
	}

	//On ajoute la fonction __toString pour utiliser la fonction echo sur notre classe
 	public function __toString(){
 		$show = "<hr> Produit: ".
 				"<br> Nombre vendu :".$this->nbVendu.
 				"<br> Poid: ".$this->poid.
 				"<br> Prix: ".$this->prix."<hr>";
 		return $show;
 	}

 	//ACCESSEURS pour récupérer/modifier les valeurs protégés depuis
 	//une autre classe.
	public function getPrixKilo() {
		return $this->prix;
	}

	public function setPrixKilo($prix) {
		return $this->prix = $prix;
	}

	//Fonction de calcul du prix total (Vendu au kilo)
	public function calculPrix() {
		return "<br/>Prix total: ".$this->poid * $this->prix;
	}

}


?>