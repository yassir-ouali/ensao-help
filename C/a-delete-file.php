<?php 
$id_file=isset($_GET['id'])?htmlspecialchars(trim($_GET['id'])):"";

$type=$dSession['etat']['secondaire'];
if($type=='connect'){
$id_membre=$dSession['membre']['id'];
$file=new File($dConfig['dns']);
if($file->isOwner($id_file,$id_membre)){
	//delete the file
	$file->supprimer($id_file);
	header("location:?action=profile&id=".$id_membre);
}else{
	$dSession['etat']['principale']="e-basic";
	$dReponse['vueBasic']='404';
}
}else{
	$dSession['etat']['principale']="e-basic";
	$dReponse['vueBasic']='404';
}

?>