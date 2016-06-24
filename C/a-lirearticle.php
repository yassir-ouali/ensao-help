<?php 

$dSession['etat']['principale']='e-basic';

$id=isset($_GET['id']) ? htmlspecialchars(trim($_GET['id'])) : "";
$article=new Article($dConfig['dns']);
if(!empty($id)){
	$tmp=$article->afficher($id);
	if(isset($tmp['titre'])){
		$dReponse['article']=$tmp;
		$dReponse['vueBasic']='article';
	}else{
		$dReponse['vueBasic']='404';
	}
}else{
	$dReponse['vueBasic']='404';
}

?>