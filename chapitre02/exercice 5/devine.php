<?php
$nombre = 3;
const NBR_MAX = '5';
const NBR_MIN = '1';
$nombre = rand(NBR_MIN, NBR_MAX);
?>
    
<!DOCTYPE html>

<html>
	<head>
		
		<meta charset="utf-8">
        
    <title>Jeu</title>
    
    </head>
    
	<body>
	
    <h1>Jeu de devinette</h1>
    <form name="form1" method="post" action="resutat.php">
        <input type="text" name="nbr" />
        <input type="submit" value="tester" />
        <input type="hidden" name="valeurADeviner" value="<?=$nombre ?>" /> 
    </form>

  	</body>
</html>
