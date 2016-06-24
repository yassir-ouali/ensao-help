<?php 

$type=$dSession['etat']['secondaire'];
if($type=='connect'){
	$dReponse['header']=$dConfig['vues']['headerConnect']['url'];
	$dReponse['membre']=$dSession['membre'];
}else if($type=='error') {
	$dReponse['header']=$dConfig['vues']['headerInitErrorConnect']['url'];
}else{
	$dReponse['header']=$dConfig['vues']['headerInit']['url'];
}

$dReponse['modelvues']='index';
$dReponse['slide']=$dConfig['vues']['slideShow']['url'];
$dReponse['footer']=$dConfig['vues']['footer']['url'];
$dReponse['assets']=$dConfig['assets']['url'];
$dReponse['become']=$dConfig['vues']['become']['url'];
$dReponse['howtohelp']=$dConfig['vues']['howtohelp']['url'];
$dReponse['comment']=$dConfig['vues']['comment']['url'];

finSession($dConfig,$dReponse,$dSession);
?>