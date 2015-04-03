<?php
/**********************************************************************
*   Test PHP                           
*   Timo Allenspach
*   Date: Mai 2015
*   Document: Resultat
* **********************************************************************
*/


/*****  Déclaration variable  *****/
	$nombre = (int)$_POST['nombre'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tables de multiplications</title>
    </head>
    <body>
    	<table border>
       		<?php

/*****  Anti-hackers  *****/
       			foreach ($_REQUEST as $key => $val) {

  					$val = preg_replace("/[^_A-Za-z0-9-\.&=]/i",'', $val);
  					$_REQUEST[$key] = $val;
				}  
				 

/*****  table multiplication  *****/ 

				/*****  Titre  *****/
        		echo "<h3>Table de multiplications en base $nombre</h3>";


				/*****  case X  *****/
				echo "<tr><th>X</th>"; 


				/*****  tête de tableau  *****/
				for ($i=0;$i<$nombre;$i++) { 
					echo "<th>".$i."</th>";
				}
					
				for ($j=0;$j<$nombre;$j++) { 
					echo "<tr><th>".$j."</th>";


					/*****  données du tableau  *****/
					for ($i=0;$i<$nombre;$i++) { 

						/*****  Convertion  *****/
						$convert = base_convert(($j*$i), 10, $nombre); 
						echo "<td>".$convert."</td>";
					}
				}
        	?> 
        </table>
        <table border>
        	<?php

/*****  table addition  *****/ 

				/*****  Titre  *****/
        		echo "<h3>Table d'additions en base $nombre</h3>";

        		/*****  case +  *****/
				echo "<tr><th>+</th>"; 

				/*****  tête de tableau  *****/
				for ($i=0;$i<$nombre;$i++) { 
					echo "<th>".$i."</th>";
				}

				for ($j=0;$j<$nombre;$j++) { 
					echo "<tr><th>".$j."</th>";
				

					/*****  données du tableau  *****/
					for ($i=0;$i<$nombre;$i++) { 

						/*****  Convertion  *****/
						$convert = base_convert(($j+$i), 10, $nombre); 
						echo "<td>".$convert."</td>";
					}	
				}
        	?>
        </table>
    </body>
</html>

