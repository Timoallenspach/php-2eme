<?php
/**********************************************************************
*   Test PHP                           
*   Timo Allenspach
*   Date: Mai 2015
*   Document: Formulaire
***********************************************************************
*/
?>

<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
    </head>
    
<!-- Formulaire -->
    <body>
        <h1>Bienvenu dans mon test!</h1>
        <form action="resultat.php" method="post">
            <div>
                <label for="nombre">Tapez un nombre entre 2 et 16 :</label>
                <input type="number" name="nombre" id="nombre" min="2" max="16" />
            </div>
            
<!-- Bouton d'envoi -->
            <div class="button">
                <button type="submit">Tester</button>
            </div>
        </form>
    </body>

</html>
