<?php

	 function sortNumbers($number1, $number2)
	    {
	        $numbers = array($number1, $number2);
	        rsort($numbers);
	        return $numbers[0];
	    }

	    $numbToSort1 = 174;
	    $numbToSort2 = 1488;
	    echo "Le plus grand nombre est le : <b>" . sortNumbers($numbToSort1, $numbToSort2) . "</b>";

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 9 (4) PHP</title>
	</head>

</html>