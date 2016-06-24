<?php 

class Admin{
	
	var $bdd;
	
	function Admin($dConnect){
		try{
			$this->bdd = new PDO('mysql:host='.$dConnect['host'].';dbname='.$dConnect['dbname'],$dConnect['user'],$dConnect['password']);
			$this->bdd->exec("SET CHARACTER SET utf8");
		}catch(exception $e){
			die($e->getMessage());
		}
	}
	
	function isAdmin($id){
		$req=$this->bdd->prepare("SELECT * FROM admins WHERE id_membre=:id");
		$req->execute(array('id'=>$id));
		return $req->fetch();
	}
	
	function publier($id){
		$req=$this->bdd->prepare("UPDATE article set etat='oui' WHERE id=:id ");
		$req->execute(array('id'=>$id));
	}
	
	function refuser($id){
		$req=$this->bdd->prepare("UPDATE article set etat='non' WHERE id=:id ");
		$req->execute(array('id'=>$id));
	}
	
	function articleInit(){
		$req=$this->bdd->prepare("SELECT * FROM article WHERE etat=''");
		$req->execute();
		while($v=$req->fetch()){
			$article[]=$v;
		}
		return $article;
	}
}
?>