<?php

$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

for ($i = 0; $i < count($nbPassagers); $i++) {
    if ($nbPassagers[$i] > 20) {
        $position = $i + 1;  
        echo "Traversée rentable le 22/09/2022 à l'emplacement : " . $position . "\n";
    }
}
?>
