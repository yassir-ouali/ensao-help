<?php 

class Membre{
	var $bdd;
	
	function Membre($dConnect){
		try{
		$this->bdd = new PDO('mysql:host='.$dConnect['host'].';dbname='.$dConnect['dbname'],$dConnect['user'],$dConnect['password']);
		$this->bdd->exec("SET CHARACTER SET utf8");
		}catch(exception $e){
		die($e->getMessage());
		}
	}
	
	function ajouterMembre($dMembre){
		$req=$this->bdd->prepare("INSERT INTO utilisateurs VALUES (null,:username,:email,
:password,:filliere,:annee,NOW())");
		
		$req->execute(array(
			"username"=>$dMembre['username'],
			"email"=>$dMembre['email'],
			"password"=>$dMembre['password'],
			"filliere"=>$dMembre['filliere'],
			"annee"=>$dMembre['annee']
		));
		$req->closeCursor();
	}
	
	function bannirMembre($id){
		$req=$this->bdd->prepare("UPDATE utilisateurs set etat='bannit' WHERE id=:id ");
		$req->execute(array('id'=>$id));
	}
	
	function login($dLogin){
		$req=$this->bdd->prepare("SELECT * FROM utilisateurs WHERE email=:email");
		$req->execute(array('email'=>$dLogin['email']));
		$req=$req->fetch();
		if($req['email']==$dLogin['email']){
			if($dLogin['password']==$req['password']){
				return true;
			}else{
				return false;
			}
			
		}else{
			return false;
		}	
	}
	
	function session($email){
		$req=$this->bdd->prepare("SELECT * FROM utilisateurs WHERE email=:email");
		$req->execute(array('email'=>$email));
		$req=$req->fetch();
		return $req;
	}
	function logout(){
		session_destroy();
	}
	
function membreExist($email){
		$req=$this->bdd->prepare("SELECT * FROM utilisateurs WHERE email=:email");
		$req->execute(array('email'=>$email));
		$tmp=$req->fetch();
		if($tmp['email']!=$email){
			return false;
		}else{
			return true;
		}
	}
	
	function existId($id){
		$req=$this->bdd->prepare("SELECT * FROM utilisateurs WHERE id=:id");
		$req->execute(array('id'=>$id));
		$tmp=$req->fetch();
		if($tmp['id']!=$id){
			return false;
		}else{
			return true;
		}
	}
	
	function profile($id){
		$req=$this->bdd->prepare("SELECT * FROM utilisateurs WHERE id=:id ");
		$req->execute(array('id'=>$id));
		return $req->fetch();
	}
}
?>