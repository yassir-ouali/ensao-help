<?php 
$article=new Article($dConfig['dns']);
$tmp=$article->allArticle();

for($i=0;$i<count($tmp);$i++){
	$dReponse['articles'][$i]=$article->afficher($tmp[$i]);
}

$dSession['etat']['principale']='e-basic';
$dReponse['vueBasic']='articleMiniature';

?>