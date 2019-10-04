<?php

require_once 'Voiture.php';

$tab = ModelVoiture::getAllVoitures();

foreach ($tab as $obj) {
    echo $obj->afficher();
    }