<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php

        require_once('Voiture.php');
        $voiture1 = new Voiture($_GET['marque'], $_GET['couleur'], $_GET['immatriculation']);
        $voiture1->save(); 
        echo "<br>";
        echo $voiture1->afficher();
        
        ?>
    </body>
</html> 