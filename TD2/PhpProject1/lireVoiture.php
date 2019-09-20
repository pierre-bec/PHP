<?php

require_once 'Voiture.php';

$v1 = new Voiture();
$tab = $v1->getAllVoitures();

foreach ($tab as $obj) {
    echo $obj->afficher();
    }