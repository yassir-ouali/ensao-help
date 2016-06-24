<?php 
$dSession['etat']['principale']='e-basic';
if($dSession['admin']) {
	$id=isset($_GET['id']) ? htmlspecialchars(trim($_GET['id'])) : "";
	if(!empty($id)){
		$admin=new Admin($dConfig['dns']);
		$admin->refuser($id);
		$dReponse['vueBasic']='articleAdmin';
		include $dConfig['actions']['get:articleadmin']['url'];
	}else{
		$dReponse['vueBasic']='404';
	}
}else{
	$dReponse['vueBasic']='404';
}
?>