<?php

$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

foreach ($nbPassagers as $passager) {
    $passagerArrondi = ceil($passager / 10) * 10;
    
    echo $passagerArrondi . " passagers\n";
}

?>

