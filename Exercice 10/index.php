<?php

	 function factorial($number)
	    {
	        if ($number === 0)
	            return 1;
	        else {
	            return $number * factorial($number - 1);
	        }
	    }

	    echo "Le nombre factoriel est : <b>" . factorial(7) . "</b>";

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 10 (4) PHP</title>
	</head>

</html>