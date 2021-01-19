<?php

	  function Numbers($numb1 = 5, $numb2 = 11, $numb3 = 6)
	    {
	        return $numb1 + $numb2 + $numb3;
	    }
	    echo "La somme des nombres par défaut est : <b>" . Numbers() . "</b><br>";

	    function VariableNumbers(...$numbers)
	    {
	        $tempNumb = 0;
	        foreach ($numbers as $toAdd) {
	            $tempNumb += $toAdd;
	        }
	        return $tempNumb;
	    }
	    echo "La somme des nombres variables est : <b>" . VariableNumbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) . "</b>";
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 8 (4) PHP</title>
	</head>

</html>