<?php 

class File {
	var $bdd;
	var $r="";
	function File($dConnect){
		try{
			$this->bdd = new PDO('mysql:host='.$dConnect['host'].';dbname='.$dConnect['dbname'],$dConnect['user'],$dConnect['password']);
			$this->bdd->exec("SET CHARACTER SET utf8");
			$this->bdd->exec("SET NAMES utf8");
		}catch(exception $e){
			die($e->getMessage());
		}
	} 
	
	function trouver($dFinder,$offset,$qt){
	$req="SELECT * FROM files ";
	$first=true;
	foreach($dFinder as $k=>$v){
		if($first && !empty($v)){
			$first=false;
			$req.="WHERE ".$k."=:".$k;
		}else if(!empty($v)){
			$req.=" AND ".$k."=:".$k;
		}
	}
	
			
		$req=$this->bdd->prepare($req);
		foreach($dFinder as $k=>&$v){
			if(!empty($v)){
				$req->bindParam(":$k",$v);
			}
		}
		$req->execute();
		while($z=$req->fetch()){
			$res[]=$z;
		}
		return $res;
	}
	
	function uploader($dFichier){
		$req=$this->bdd->prepare("INSERT INTO files VALUES (null,:id_membre,:filliere,:annee,
:key_word,:nom_prof,:categorie,:file,NOW())");
		$req->execute(array(
			"id_membre"=>$dFichier['id_membre'],
			"filliere"=>$dFichier['filliere'],
			"annee"=>$dFichier['annee'],
			"key_word"=>$dFichier['key_word'],
			"nom_prof"=>$dFichier['nom_prof'],
			"categorie"=>$dFichier['categorie'],
			"file"=>$dFichier['file']
		));
		$req->closeCursor();
	}
	function download($id){
		$req=$this->bdd->prepare("SELECT * FROM files WHERE id=?");
		$req->execute(array($id));
		return $req->fetch();
	}
	function supprimer($id){
		$req=$this->bdd->prepare("DELETE FROM files WHERE id=?");
		$req->execute(array($id));
	}
	
	function filliere($choice,$nb){
		//1ere annee
		$req1=$this->bdd->prepare("SELECT * FROM files WHERE filliere=? AND annee=1 ORDER BY id DESC LIMIT $nb");
		$req1->execute(array($choice));
		while($v=$req1->fetch()){
			$res1[]=$v;
		}
		
		//2eme annees
		$req2=$this->bdd->prepare("SELECT * FROM files WHERE filliere=:filliere AND annee=2 ORDER BY id DESC LIMIT $nb");
		$req2->execute(array(
		'filliere'=>$choice
		));
		while($v=$req2->fetch()){
			$res2[]=$v;
		}
		
		//3eme annees
		$req3=$this->bdd->prepare("SELECT * FROM files WHERE filliere=:filliere AND annee=3 ORDER BY id DESC LIMIT $nb");
		$req3->execute(array(
		'filliere'=>$choice
		));
		while($v=$req3->fetch()){
			$res3[]=$v;
		}
		
		$files=array($res1,$res2,$res3);
		return $files;
	}
	
	//recuperer le username d'un fichier :
	function username($id){
		$r=$this->bdd->prepare('SELECT username FROM utilisateurs WHERE id=?');
		$r->execute(array($id));
		$resultat=$r->fetch();
		return $resultat['username'];
	}
	function profile($id,$limit){
		$req=$this->bdd->prepare("SELECT * FROM files WHERE id_membre=? ORDER BY id DESC LIMIT $limit");
		$req->execute(array($id));
		while($v=$req->fetch()){
			$file[]=$v;
		}
		return $file;
	}
	function file_name($file){
		if(strlen($file)<16){
			return $file;
		}else{
			$d=substr($file,0,10);
			$f=substr($file,strlen($file)-6,strlen($file));
			return $d."...".$f;
		}
	}
	function remaineMoreForProfile($id,$nb){
		$req=$this->bdd->prepare("SELECT COUNT(*) FROM files WHERE id_membre=?");
		$req->execute(array($id));
		
		$total=$req->fetch()[0];

		if($nb<$total){
			return true;
		}else{
			return false;
		}
	}
	//aadapter pour chaque annee
	function remaineMoreForFilliere($choice,$annee,$nb){
		$req=$this->bdd->prepare("SELECT COUNT(*) FROM files WHERE filliere=? AND annee=?");
		$req->execute(array($choice,$annee));
		$total=$req->fetch()[0];
		if($nb<$total){
			return true;
		}else{
			return false;
		}
	}
	function afficherPlusProfile($id,$limit,$offset){
		$req=$this->bdd->prepare("SELECT * FROM files WHERE id_membre=? ORDER BY id DESC LIMIT $limit OFFSET $offset");
		$req->execute(array($id));
		while($v=$req->fetch()){
			$file[]=$v;
		}
		return $file;
	}
	function afficherPlusFilliere($choice,$annee,$limit,$offset){
		$req=$this->bdd->prepare("SELECT * FROM files WHERE filliere=? AND annee=? ORDER BY id DESC LIMIT $limit OFFSET $offset");
		$req->execute(array($choice,$annee));
		while($v=$req->fetch()){
			$file[]=$v;
		}
		return $file;
	}
	
	function isOwner($id_file,$id_user){
		$req=$this->bdd->prepare("SELECT * FROM files WHERE id=? AND id_membre=?");
		$req->execute(array($id_file,$id_user));
		while($v=$req->fetch()){
			$file[]=$v;
			// echo "zzzzz";
		}
		
		if(empty($file)){
			return false;
		}else{
			return true;
		}
	}
	
	function getFilliere($id){
		$req=$this->bdd->prepare("SELECT * FROM files WHERE id=? ");
		$req->execute(array($id));
		$res=$req->fetch()['filliere'];
		return $res;
	}
}
?>