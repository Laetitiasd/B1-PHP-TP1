<?php
	
	$nbPassagers = array(35,10,22,52,15,58,8,73);
	
	$nb = 0;
	
for($i = 0; $i< count($nbPassagers); $i++) {
		$nb += $nbPassagers[$i] ;
}	
	echo $nb ." passager transportés le 22/09/2022 \n";

?>
