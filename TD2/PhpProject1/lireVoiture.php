<?php

require_once 'Voiture.php';

$tab = Voiture::getAllVoitures();

foreach ($tab as $obj) {
    echo $obj->afficher();
    }