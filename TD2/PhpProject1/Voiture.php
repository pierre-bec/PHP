<?php

require_once 'Model.php';

class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
  
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }

  public function getImm() {
       return $this->immatriculation;  
  }

  public function getCouleur() {
       return $this->couleur;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function setImm($imm2) {
      if (strlen($imm2)<=8) {
       $this->immatriculation = $imm2;
      } else echo "erreur";
  }

  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }
      
  // un constructeur
public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
}
  
  
           
  // une methode d'affichage.
  public function afficher() {
    return "Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur) </br>";
  }
  
  public static function getAllVoitures() {
    $rep = Model::$pdo->query("SELECT * FROM voiture");
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();
    return $tab_voit;
  }
}
?>

