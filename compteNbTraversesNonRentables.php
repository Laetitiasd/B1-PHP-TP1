<?php
	
	$nbPassagers = array(35,10,22,52,15,58,8,73);
	
	$nbTotal = 0;
	
for($i = 0; $i< count($nbPassagers); $i++) {
	if($nbPassagers[$i] < 20){
		$nbTotal = $nbTotal + 1;
}
}
	echo $nbTotal . " traversée non rentable le 22/09/2022. \n";
?>
