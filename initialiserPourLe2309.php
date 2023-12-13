<?php

$nbPassagers = array(0,0,0,0,0,0,0,0,0,0);

for ($i = 0; $i < count($nbPassagers); $i++) {
	
        $emplacement = $i + 1; 
        $passagersTraversee = $nbPassagers[$i];
        echo "Traversée ", $emplacement, " : ", $passagersTraversee, " passager. \n";
    }


?>




