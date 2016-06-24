<?php 

$dSession['etat']['principale']="e-basic";
if($dSession['etat']['secondaire']=='connect'){
	$dReponse['vueBasic']='404';
}else{
	$dReponse['vueBasic']='formulaireInscription';
}
?>