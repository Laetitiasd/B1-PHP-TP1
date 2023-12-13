<?php

$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

$passagersTraversee = 0; 

for ($i = 0; $i < count($nbPassagers); $i++) {
    if ($nbPassagers[$i] == 52) {
        $emplacement = $i + 1; 
        $passagersTraversee = $nbPassagers[$i];
        echo "La traversée ", $emplacement, " a transporté ", $passagersTraversee, " passagers. \n";
    }
}

?>
