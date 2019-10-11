<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php
    echo '<p> Voiture d\'immatriculation ' . $v->getImm() . '.</p>';
    echo '<p> Voiture d\'immatriculation ' . $v->getMarque() . '.</p>';
    echo '<p> Voiture d\'immatriculation ' . $v->getCouleur() . '.</p>';
?>
</body>
</html>
