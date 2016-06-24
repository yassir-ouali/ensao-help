<?php 

$dReponse['modelvues']='profile';

$type=$dSession['etat']['secondaire'];
if($type=='connect'){
	$dReponse['header']=$dConfig['vues']['headerConnect']['url'];
	$dReponse['membre']=$dSession['membre'];
}else if($type=='error') {
	$dReponse['header']=$dConfig['vues']['headerInitErrorConnect']['url'];
}else{
	$dReponse['header']=$dConfig['vues']['headerInit']['url'];
}

$dReponse['footer']=$dConfig['vues']['footer']['url'];
$dReponse['assets']=$dConfig['assets']['url'];
$dReponse['info']=$dConfig['vues']['profileInformations']['url'];
if($dReponse['isProprieter']){
	$dReponse['tableau']=$dConfig['vues']['tableauDelete']['url'];
}else{
	$dReponse['tableau']=$dConfig['vues']['tableau']['url'];
}
$dReponse['chargerPlusFunction']='goProfile()';
finSession($dConfig,$dReponse,$dSession);
?>