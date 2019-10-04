<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php

          $voiture['marque']='Peugeot';
          $voiture['couleur']='Rouge';
          $voiture['immatriculation']='054651BB';

          

          echo "ModelVoiture {$voiture['immatriculation']} de marque {$voiture['marque']} (couleur {$voiture['couleur']} )";
        ?>
    </body>
</html> 