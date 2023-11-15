<?php

do {
    echo "Confirmez-vous la modification (oui/non) ? :\n";
    $rpd = rtrim(fgets(STDIN));

    switch ($rpd) {
        case 'oui':
        echo "Modification en cours ... \n" ;
            break;
        case 'non':
        echo "Modification en cours ... \n";
            break;
        default:
			echo "Réponse incorrecte ! \n";
            continue 2;
    }
} while ($rpd !== 'oui' && $rpd !== 'non');

?>
