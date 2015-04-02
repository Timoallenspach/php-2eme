<?php

	// Exercice 1 chapitre 3
  // Bastien Nicoud
  // 28.04.2015 - CPNV Média

  $pv = filter_input(INPUT_POST,'pv',FILTER_SANITIZE_NUMBER_FLOAT);
  $fp = filter_input(INPUT_POST,'fp',FILTER_SANITIZE_NUMBER_FLOAT);
  $taux1 = filter_input(INPUT_POST,'taux1',FILTER_SANITIZE_NUMBER_FLOAT);
  $taux2 = filter_input(INPUT_POST,'taux2',FILTER_SANITIZE_NUMBER_FLOAT);
  $rang1 = 0;
  $rang2 = 0;
  $emprunt = 0;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coucouuuuu</title>
    <style>
      * {
        font-family: Ubuntu;
        font-size: 14pt;
      }
    </style>
  </head>
  <body>
    <?php

      if ($fp < ($pv/100)*20) {

        echo "Attention, vos fonds propres ne sont pas suffisants.";

      } else {

        if ($fp >= ($pv/100)*50) {

          $rang1 = 0;
          $rang2 = ($pv-$fp);

        } else {

          $emprunt = ($pv-$fp);
          $rang1 = (($emprunt/100)*20);
          $rang2 = ($emprunt-$rang1);

        }
      }

      if ($fp >= ($pv/100)*20) {

        echo "Prix de vente : " . $pv . " CHF <br>";
        echo "Fonds propres : " . $fp . " CHF <br>";
        echo "20% de l'emprunt au taux de :" . $taux1 . " : ". $rang1 . "<br>";
        echo "80% de l'emprunt au taux de :" . $taux2 . " : ". $rang2 . "<br>";

      }
    ?>
  </body>
</html>