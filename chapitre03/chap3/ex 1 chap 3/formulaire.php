<?php

	// Exercice 1 chapitre 3
  // Bastien Nicoud
  // 28.04.2015 - CPNV Média

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
    <style>
      * {
        font-family: Ubuntu;
        font-size: 14pt;
      }
    </style>
  </head>
  <body>
  	<form name="formulaire" method="post" action="traitement_formulaire.php">
      <p>Prix de vente de votre maison :</p>
      <input name="pv" type="number" size="30">
      <br>
      <p>Vos fonds propres :</p>
      <input name="fp" type="number" size="30">
      <br>
      <p>Taux 1er rang :</p>
      <input name="taux1" type="number" size="30" value="3.5">
      <br>
      <p>Taux 2ème rand :</p>
      <input name="taux2" type="number" size="30" value="2.5">
      <br>
      <br>
      <input type="submit" value="Envoyer"/>
    </form>
  </body>
</html>