<?php
define("MontantPleinTarif", 18);
define("MontantTarifReduit", 15);

echo "Combien êtes-vous ? : ";
$somme = intval(fgets(STDIN));

if ($somme >= 0) {
    if ($somme >= 7) {
        $montant_total = $somme * MontantTarifReduit;
        echo "Le montant total à payer pour le groupe de " . $somme . " adultes est de " . $montant_total . " euros (tarif réduit).\n";
    } else {
        $montant_total = $somme * MontantPleinTarif;
        echo "Le montant total à payer pour le groupe de " . $somme . " adultes est de " . $montant_total . " euros (plein tarif).\n";
    }
} 
?>
