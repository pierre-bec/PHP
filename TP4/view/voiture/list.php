<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des voitures</title>
</head>
<body>
<?php
foreach ($tab_v as $v)

    echo '<a href="routeur.php?action=read&immat='. $v->getImm() .'"><p> Voiture d\'immatriculation ' . $v->getImm() . '.</p></a>';
?>
</body>
</html>
