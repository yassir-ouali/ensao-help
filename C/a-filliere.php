<?php
$choice=isset($_GET['choice']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['choice'])))) : "";
if(!empty($choice)){
	$valide=array('cp','ge','gi','gc','gtr','gseir','gindus');
	if(in_array(strtolower($choice),$valide)){
		$file=new File($dConfig['dns']);
		$dReponse['filliere']=$choice;
		$dReponse['files']=$file->filliere($choice,$dConfig['nbLignes']);
		for($i=0;$i<3;$i++){
			$dReponse['chargerPlusAnnee'][$i]=$file->remaineMoreForFilliere($choice,$i+1,$dConfig['nbLignes']);
			}
			// var_dump($dReponse['chargerPlusAnnee']);
		$dSession['etat']['principale']='e-filliere';
	}else{
		$dSession['etat']['principale']='e-basic';
		$dReponse['vueBasic']='404';
	}
}else{
	$dSession['etat']['principale']='e-basic';
	$dReponse['vueBasic']='404';
}
?>