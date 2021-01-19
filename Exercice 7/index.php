<?php

      function WhoAreYou(bool $gender, $age)
        {
            if ($gender) {
                if ($age >= 18) {
                    echo "Vous êtes un homme et vous êtes majeur";
                } else {
                    echo "Vous êtes un homme et vous êtes mineur";
                }
            } else {
                if ($age >= 18) {
                    echo "Vous êtes une femme et vous êtes majeure";
                } else {
                    echo "Vous êtes une femme et vous êtes mineure";
                }
            }
        }

        $mygender = false;
        $myage = 29;
        WhoAreYou($mygender, $myage);

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 7 (4) PHP</title>
	</head>

</html>