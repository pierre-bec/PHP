<?php

require_once 'Voiture.php';

$v1 = new Voiture("lexus","blouge",12568978);

$tab = Voiture::getAllVoitures();

for ($i=0;$i<sizeof($tab);$i++) {
    $tab[$i]->afficher();
}
