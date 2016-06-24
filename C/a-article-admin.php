<?php
$dSession['etat']['principale']='e-basic';

if($dSession['admin']){
	$dReponse['vueBasic']='articleAdmin';
	$admin=new Admin($dConfig['dns']);
	$dReponse['article']=$admin->articleInit();
}else{
	$dReponse['vueBasic']='404';
}
?>