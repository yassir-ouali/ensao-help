<?php
$key_words= isset($_POST['key_words']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['key_words'])))) : "";
$nom_prof= isset($_POST['nom_prof']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['nom_prof'])))) : "";
$file=utf8_decode(htmlspecialchars(utf8_encode($_POST['file'])));
$categorie= isset($_POST['categorie']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['categorie'])))) : "";
$choice=isset($_GET['choice']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_GET['choice'])))) : "";
// echo $file;
// echo htmlspecialchars('ייsיי',ENT_QUOTES);

	if(isset($_POST['submit1'])){
		$annee='1';
	}else if(isset($_POST['submit2'])){
		$annee='2';
	}else if(isset($_POST['submit3'])){
		$annee='3';
	}else{
		$annee="";
	}
	
	if(empty($key_words)||empty($nom_prof)||empty($file)||empty($categorie)||empty($choice)||
	empty($annee)){
		$err[]="Les donnיes sont erroner !";		
	}
	$dFile=array(
			"id_membre"=>$dSession['membre']['id'],
			"filliere"=>$choice,
			"annee"=>$annee,
			"key_word"=>$key_words,
			"nom_prof"=>$nom_prof,
			"categorie"=>$categorie,
			"file"=>$file
	);
	//var_dump($dFile);
	if(empty($err)){
		$f=new File($dConfig['dns']);
		$f->uploader($dFile);
		//rester sur le mm etat
		header("location:?action=filliere&choice=".$choice);
	}else{
		$dReponse['listError']=$dConfig['vues']['listError']['url'];
		$dReponse['error']=$err;
	}
	
?>