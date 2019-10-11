<?php
require_once 'ControllerVoiture.php';
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
$var = $_GET['immat'];
// Appel de la méthode statique $action de ControllerVoiture
if (!is_null($var)) {
    ControllerVoiture::$action($var);
} else {
    ControllerVoiture::$action();
}


?>
