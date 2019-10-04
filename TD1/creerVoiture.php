<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php

        require_once('Voiture.php');
        $voiture1 = new ModelVoiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']);
        echo $voiture1->afficher();

        ?>
    </body>
</html> 