<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read($imm) {
        $v = ModelVoiture::getVoitureByImmat($imm);     //appel au modèle pour gerer la BD
        require ('../view/voiture/detail.php');  //"redirige" vers la vue
    }
}
?>
