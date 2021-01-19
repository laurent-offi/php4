<?php

    function compareNumber($n1, $n2)
    {
        if ($n1 > $n2) {
            echo "Le premier nombre est plus grand. ($n1/$n2)";
        } else if ($n1 < $n2) {
            echo "Le premier nombre est plus petit. ($n1/$n2)";
        } else {
            echo "Les deux nombres sont identiques.";
        }
    }

    $numb1 = rand(0,15);
    $numb2 = rand(0,15);
    compareNumber($numb1,$numb2);

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 4 (4) PHP</title>
	</head>

</html>