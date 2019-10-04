<?php

require_once 'Voiture.php';

$v1 = new ModelVoiture("lexus","blouge",12568978);

$tab = ModelVoiture::getAllVoitures();

for ($i=0;$i<sizeof($tab);$i++) {
    $tab[$i]->afficher();
}
