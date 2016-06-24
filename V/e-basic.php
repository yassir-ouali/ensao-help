<?php 

$type=$dSession['etat']['secondaire'];
if($type=='connect'){
	$dReponse['header']=$dConfig['vues']['headerConnect']['url'];
	$dReponse['membre']=$dSession['membre'];
}else{
	$dReponse['header']=$dConfig['vues']['headerInit']['url'];
}

$dReponse['connect']=$dSession['etat']['secondaire'];
$dReponse['modelvues']="basic";
$dReponse['content']=$dConfig['vues'][$dReponse['vueBasic']]['url'];
$dReponse['footer']=$dConfig['vues']['footer']['url'];
if($dReponse['vueBasic']=='faq'){
$dReponse['assets']=$dConfig['assets']['url2'];
}else{
$dReponse['assets']=$dConfig['assets']['url'];
}
	
foreach ($dConfig['styles'] as $k=>$v){
$dExt[]=$k;	
}
if(in_array($dReponse['vueBasic'],$dExt)){
	$dReponse['style']=$dConfig['styles'][$dReponse['vueBasic']];
}
finSession($dConfig,$dReponse,$dSession);
?>