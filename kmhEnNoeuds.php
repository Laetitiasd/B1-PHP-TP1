<?php
	echo "Saisir la vitesse en km/h :\n";
	$vitesse = fgets(STDIN);
	$vitesse_en_noeuds = $vitesse / 1.852;
	echo "Résultat de la conversion : " . $vitesse_en_noeuds . " noeuds\n";
?>
