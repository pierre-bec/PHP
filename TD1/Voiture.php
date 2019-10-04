<?php
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
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    return "ModelVoiture $this->immatriculation de marque $this->marque (couleur $this->couleur)";
  }
}
?>

