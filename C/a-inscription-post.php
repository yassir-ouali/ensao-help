<?php 
//traitement du formulaire :
if(isset($_POST['submit'])){
	$username= isset($_POST['username']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['username'])))) : "";
	$email= isset($_POST['email']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['email'])))) : "";
	$password= isset($_POST['password']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['password'])))) : "";
	$cpassword= isset($_POST['cpassword']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['cpassword'])))) : "";
	$filliere= isset($_POST['categorie']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['categorie'])))) : "";
	$annee= isset($_POST['annee']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['annee'])))) : "";
	
	if(empty($username)){
		$erreurs[]="Veuiller saisir un nom d'utilisateur !";
	}elseif(!preg_match('#^[a-zA-Z]+[a-zA-Z0-9 ._-]{4,}$#',$username)){
		$erreurs[]="Le nom d'utilisateur n'est pas valide";
	}
		
		
	if(empty($email)){
		$erreurs[]="Veuiller saisir un Email !";
	}elseif(!preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$email)){
		$erreurs[]="Votre Email n'est pas valide";
	}
	//verification si l'email existe deja dans la base de donnée
	$membre=new Membre($dConfig['dns']);
	$tmp=$membre->membreExist($email);
	if($tmp){
		$erreurs[]="l'email existe deja !";
	}

	if(empty($password)){
		$erreurs[]="Veuiller saisir un mot de passe !";
	}elseif(strlen($password)<=5){
		$erreurs[]="Votre mot de passes est tres court !";
	}elseif($cpassword!=$password){
		$erreurs[]="Les deux mots de passe doivent etre identique";
	}elseif(!preg_match("#^\S*(?=\S{6,})(?=\S*[a-zA-Z])(?=\S*[\d])\S*$#",$password)){
		$erreurs[]="Le mot de passe n'est pas valide !<br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*au moins une lettre est un nombre <br/> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp* le mot de passe ne dois pas contenir un espaces !";
	}
	
	$dSession['etat']['principale']='e-basic';
	
	if(!empty($erreurs)){	
		$dReponse['vueBasic']='inscriptionError';
		$dReponse['error']=$erreurs;
		$dReponse['username']=$username;
		$dReponse['email']=$email;
		$dReponse['filliere']=$filliere;
		$dReponse['annee']=$annee;
		
	}else{
		
		$password=md5($password);
		$newMembre=array('email'=>$email,'password'=>$password,'username'=>$username,
			'filliere'=>$filliere,'annee'=>$annee);
		$membre->ajouterMembre($newMembre);
		$dReponse['vueBasic']='inscriptionSuccess';
		$dSession['etat']['secondaire']='connect';
		$dSession['connect']='connect';
		$res=$membre->session($email);
		$dSession['membre']=$res;
			
	}
				
}
?>