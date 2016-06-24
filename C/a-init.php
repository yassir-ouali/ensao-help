<?php

if($dReponse['connect']=='connect' || $dSession['etat']['secondaire']=='connect'){
	$dSession['etat']=array("principale"=>"e-init",
	"secondaire"=>'connect');
	$dReponse['username']=$dSession['username'];
}else if($dReponse['connect']=='error'){ 
	$dSession['etat']=array("principale"=>"e-init",
			"secondaire"=>'error');
}else{
	$dSession['etat']=array("principale"=>"e-init",
			"secondaire"=>'init');
}
$article=new Article($dConfig['dns']);
$tmp=$article->slide();
for($i=0;$i<count($tmp);$i++){
	$dReponse['articles'][$i]=$article->afficher($tmp[$i]);
}
?>