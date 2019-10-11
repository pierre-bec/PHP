<?php
require_once File::build_path(["model","ModelVoiture.php"]); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require File::build_path(["view","voiture","list.php"]);  //"redirige" vers la vue
    }

    public static function read() {
        $imm = $_GET['immat'];
        $v = ModelVoiture::getVoitureByImmat($imm);     //appel au modèle pour gerer la BD
        require File::build_path(["view","voiture","detail.php"]);  //"redirige" vers la vue
    }
}
?>
