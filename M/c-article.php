<?php 
class Article{
	
	/*var $id;
	var $titre;
	var $img;
	var $article;
	var $auteur;
	var $video;
	var $date;
	var $etat;*/
	var $bdd;
	
	function Article($dConnect){
	try{
		$this->bdd = new PDO('mysql:host='.$dConnect['host'].';dbname='.$dConnect['dbname'],$dConnect['user'],$dConnect['password']);
		$this->bdd->exec("SET CHARACTER SET utf8");
		}catch(exception $e){
		die($e->getMessage());
		}
	}
	
	function suggerer($dArticle){
		$req=$this->bdd->prepare("INSERT INTO article VALUES (null,:titre,:etat,:article,:auteur,:img,
:video,NOW())");
		$req->execute(array(
			'titre'=>$dArticle['titre'],
			'img'=>$dArticle['img'],
			'article'=>$dArticle['article'],
			'auteur'=>$dArticle['auteur'],
			'video'=>$dArticle['ytb'],
			'etat'=>"",
		));
		$req->closeCursor();
	}
	
	function afficher($id){
		$req=$this->bdd->prepare("SELECT * FROM article WHERE id=:id");
		$req->execute(array('id'=>$id));
		$req=$req->fetch();
		$article=array(
			"id"=>$req['id'],
			"titre"=>$req['titre'],
			"img"=>$req['img'],
			"article"=>$req['article'],
			"auteur"=>$req['auteur'],
			"video"=>$req['video'],
			"date"=>$req['date']
		);
		return $article;
	}
	
	function slide(){
		$req=$this->bdd->query("SELECT id FROM article WHERE etat='oui' ORDER BY id DESC LIMIT 0,5");
		
		$article=array();
		$i=0;
		while($v=$req->fetch()){
			$article[$i]=$v['id'];
			$i++;
		}
		$req->closeCursor();
		return $article;
	}
	
	function allArticle(){
		$req=$this->bdd->query("SELECT id FROM article WHERE etat='oui' ORDER BY id DESC ");
		$i=0;
		$tmp=array();
		while($v=$req->fetch()){
			$tmp[$i]=$v['id'];
			$i++;
		}
		$req->closeCursor();
		return $tmp;
	}

}
?>