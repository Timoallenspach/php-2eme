<?php
$login = $_POST['login'];
$passeword = $_POST['motpasse'];
$majeur = $_POST['age'];
$type = $_POST['type'];
$option = $_POST['option'];
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire2</title>
  </head>
  <body>
    <h1>Voici les valeures transmises par l'utilisateur</h1>
    
    <p>
        login : <?php echo $login; ?> <br>
        Mot de passe : <?php echo $passeword; ?> <br>
        Majeur : <?php echo $majeur; ?> <br>
        Sexe : <?php echo $type; ?> <br>
        Option : <?php echo $option; ?> <br>
    
    </p>
  </body>
</html>
