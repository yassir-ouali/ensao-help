<?php 
$type=$dSession['etat']['secondaire'];
if($type=='connect'){
	$dSession['etat']['principale']='e-basic';
	$dReponse['vueBasic']='formulaireAjouterArticle';
}else{
	$dSession['etat']['principale']='e-init';
	$dSession['etat']['secondaire']='error';
	$dReponse['error'][]="Vous devez �tres inscrit !";
	$dReponse['connect']='error';
	include $dConfig['actions']['get:init']['url'];
}
?>