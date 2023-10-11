<?php

echo "Saisir le nom du port :\n";
$nomPort = rtrim(fgets(STDIN));
$nomPort = strtolower($nomPort); 

$nomDept = "";

if (
    $nomPort == "quiberon" || 
    $nomPort == "sauzon" || 
    $nomPort == "le palais"
) {
    $nomDept = "Morbihan";
} elseif (
    $nomPort == "concarneau" || 
    $nomPort == "douarnenez"
) {
    $nomDept = "Finistère";
} elseif (
    $nomPort == "piriac-sur-mer" || 
    $nomPort == "pornic"
) {
    $nomDept = "Loire-Atlantique";
} elseif ($nomPort == "ile-yeu") {
    $nomDept = "Vendée";
}

if ($nomDept != "") {
    echo "Département : $nomDept.\n";
} else {
    echo "Port non recensé.\n";
}

?>
