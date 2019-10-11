<?php

require_once File::build_path(["model","Model.php"]);

class ModelVoiture {
   
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
  
  
           
  /* une methode d'affichage.
  public function afficher() {
    return "ModelVoiture $this->immatriculation de marque $this->marque (couleur $this->couleur) </br>";
  }*/
  
  public static function getAllVoitures() {
    $rep = Model::$pdo->query("SELECT * FROM voiture");
    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $rep->fetchAll();
    return $tab_voit;
  }
  
  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
        //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête	 
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
        return false;
    return $tab_voit[0];
}

public function save(){
    $sql = "INSERT INTO voiture (immatriculation, marque, couleur) VALUES (:immatriculation, :marque, :couleur)";
    $req_prep = Model::$pdo->prepare($sql);
    
    try {
        $req_prep = Model::$pdo->prepare($sql);
        } catch (Exception $ex) {
            echo $e->getMessage(); // affiche un message d'erreur
            die();

        }
    
    $values = array(
        "immatriculation" => $this->immatriculation,
        "marque" => $this->marque,
        "couleur" => $this->couleur,
    );
    
    if ($req_prep->execute($values)== true) {
        echo "Insertion complete";
} else {
    echo "Insertion Failed";
}

}
}


?>

