<?php
$dReponse['modelvues']='chercherFichier';
$type=$dSession['etat']['secondaire'];
if($type=='connect'){
	$dReponse['header']=$dConfig['vues']['headerConnect']['url'];
	$dReponse['membre']=$dSession['membre'];
}else{
	$dReponse['header']=$dConfig['vues']['headerInit']['url'];
}

$dReponse['form']=$dConfig['vues']['formulaireChercherFichier']['url'];
$dReponse['tableau']=$dConfig['vues']['tableau']['url'];
$dReponse['footer']=$dConfig['vues']['footer']['url'];
$dReponse['assets']=$dConfig['assets']['url'];
$dReponse['style']=$dConfig['styles']['chercherForm'];
$dReponse['script']=$dConfig['scripts']['chercher'];
finSession($dConfig,$dReponse,$dSession);
?>