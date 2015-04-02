<?php

  // Exercice 2 chapitre 3
  // Bastien Nicoud
  // 28.04.2015 - CPNV Média

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

      for($i = 0; $i <= 10; $i++) {

        echo $i*2 . "<br>";

      }

      $y = 0;
      while($y <= 10) {

        echo $y*2 . "<br>";

        $y++;
      }

    ?>
  </body>
</html>