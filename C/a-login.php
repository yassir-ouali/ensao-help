<?php
if(isset($_POST['submit'])){
	
	$email= isset($_POST['email']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['email'])))) : "";
	$password= isset($_POST['password']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['password'])))) : "";
	
	if(empty($email)){
	$erreurs[]="Veuiller saisir un email !";
	}
	if(empty($password)){
	$erreurs[]="Veuiller saisir un password !";
	}
	$password=md5($password);
	$dLogin=array('email'=>$email,'password'=>$password);
	$membre=new Membre($dConfig['dns']);
	$res=$membre->login($dLogin);
	
	if(!$res){
	$erreurs[]="Vos données ne sont pas correct !";
	}
	if(!empty($erreurs)){
		$dReponse['error']=$erreurs;
		$dReponse['connect']='error';
		//$dSession['etat']['secondaire']='error';

	}else{
		$res=$membre->session($email);
		$dSession['membre']=$res;
		$dReponse['connect']='connect';
		//verifier is Admin ?
		$admin=new Admin($dConfig['dns']);
		if($admin->isAdmin($dSession['membre']['id'])){
			$dSession['admin']=true;
		}else{
			$dSession['admin']=false;
		}
		header("location:./");
	}

}

include $dConfig['actions']['get:init']['url'];
?>