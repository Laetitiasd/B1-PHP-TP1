<?php
define("Montant", 17);

echo "Combien êtes-vous ? : ";
$somme = intval(fgets(STDIN));

if ($somme >= 0) {
    $montant_total = $somme * Montant;
    echo "Le montant total à payer pour le groupe de " . $somme . " adultes est de " . $montant_total . " euros.\n";
} 
?>
