<?php
	echo "Saisir la vitesse :\n";
	$vitesse = rtrim( fgets(STDIN ));
	
	if ( $vitesse == 0 ){
	echo " Vitesse :", $vitesse , " noeuds. \n";
}	
elseif( $vitesse < 0){
	echo " Vitesse :", $vitesse = 0 , " noeud. \n";
}
else {
	echo " Vitesse : " , $vitesse , " noeud. \n";	
}
	
?>	

	
	
