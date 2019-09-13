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
          $voiture1['marque']='Renault';
          $voiture1['couleur']='Bleu';
          $voiture1['immatriculation']='123456KO';
          $voiture2['marque']='Citroen';
          $voiture2['couleur']='Violet';
          $voiture2['immatriculation']='456852UY';

        
          $voitures[0]=$voiture;
          $voitures[1]=$voiture1;
          $voitures[2]=$voiture2;

          
          if (empty($voitures)) {
            echo "Il n'y a aucune voiture";
          } else {
            echo "Liste des voitures : <br>";

            for ($i=0; $i < count($voitures); $i++) {
              echo "<ul>";
                $voitureA = $voitures[$i];
                $voitureAc = "Voiture {$voitureA['immatriculation']} de marque {$voitureA['marque']} (couleur {$voitureA['couleur']} )";
                echo "$voitureAc <br>";
              
            }
            echo "</ul>";
          }

        ?>
    </body>
</html> 