<?php

$valeurADeviner = (int) $_POST['valeurADeviner'];
$valeurEntree = (int) $_POST['nbr'];

$gagne = $valeurADeviner == $valeurEntree;
?>

<?php
if ($gagne) {
    $titre = "you win";
} else {
    $titre = "you loose";
}
?>

<!DOCTYPE html>
<html>
    <head>
       <titre><?= $titre ?></titre>
       <meta content="">
    </head>
    <body>
<?php
        if ($gagne) {
            echo "<h1>Vous avez gagné</h1>";
        }else {
?>
    <h1>Vous avez perdu</h1>
    <a href="javascript:histoiry.back()">Réessayer
<?php
    }
?>
    </body>
</html>
