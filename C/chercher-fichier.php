<?php 
include '../M/c-file.php';
include 'conf.php';
$filliere= isset($_POST['filliere']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['filliere'])))) : "";
$annee= isset($_POST['annee']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['annee'])))) : "";
$key_words= isset($_POST['key_words']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['key_words'])))) : "";
urldecode($key_words);
$nom_prof= isset($_POST['nom_prof']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['nom_prof'])))) : "";
$categorie= isset($_POST['categorie']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['categorie'])))) : "";

$dFiltre=array(
		'filliere'=>$filliere,
		'annee'=>$annee,
		'key_words'=>$key_words,
		'prof'=>$nom_prof,
		'categorie'=>$categorie
);

$dFinder=array(
	'filliere'=>$filliere,
	'annee'=>$annee,
	'nom_prof'=>$nom_prof,
	'categorie'=>$categorie
);
$file=new File($dConfig['dns']);
$res=$file->trouver($dFinder,0,2);
//une => tableau de mots
function decoupe($key_words){
	$substrKw=$key_words." ";
	while(!empty($substrKw)){
		$tmp=strchr($substrKw," ",true);//$tmp=java
		$len=strlen($substrKw);//total
		$substrKw=substr($substrKw,strlen($tmp)+1,$len);
		$dKeyWords[]=$tmp;
	}
	return $dKeyWords;	
}

if(!empty($key_words)){
	$dKeyWords=decoupe($key_words);
	//var_dump($dKeyWords);
	
	for($i=0;$i<count($res);$i++){
		$dTmp=decoupe($res[$i]['key_words']);
		for($f=0;$f<count($dTmp);$f++){
			for($j=0;$j<count($dKeyWords);$j++){
				if(strtolower($dTmp[$f])==strtolower($dKeyWords[$j])){
					$res[$i]['score']+=1;
				}
			}
		}
		
		//echo $i." : ".$res[$i]['key_words'].":".$res[$i]['score']."<br>";
	}
	
	//delet the useless rows
	for($i=count($res)-1;$i>=0;$i--){
		
		if(!isset($res[$i]['score']) || empty($res[$i]['score'])){
			unset($res[$i]);
		}
	}
	
	//sort the result
	function cmp($a, $b)
	{
	    if ($a["score"] == $b["score"]) 
	    {
	       return 0;
	    }
	    return ($a["score"] < $b["score"]) ? 1 : -1;
	}
	
	usort($res, "cmp");
}
$dReponse['files']=$res;
include "../V/".$dConfig['vues']['tableauSearch']['url'];

?>