<?php 
$id=isset($_GET['id'])?htmlspecialchars(trim($_GET['id'])):"";
$membre=new Membre($dConfig['dns']);
$dReponse['isProprieter']=false;
if(empty($id) || !$membre->existId($id)){
	$dSession['etat']['principale']='e-basic';
	$dReponse['vueBasic']='404';
}else{
	$dSession['etat']['principale']='e-profile';
	$dReponse['profile']=$membre->profile($id);
	if($dSession['membre']['id']==$id){
		$dReponse['isProprieter']=true;
	}
	$file=new File($dConfig['dns']);
	$dReponse['files']=$file->profile($id,$dConfig['nbLignes']);
	$dReponse['chargerPlus']=$file->remaineMoreForProfile($id,$dConfig['nbLignes']);
}
// var_dump();
?>