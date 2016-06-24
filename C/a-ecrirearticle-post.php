<?php 

if(isset($_POST['submit2'])){
	$titre= isset($_POST['titre']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['titre'])))) : "";
	$desc= isset($_POST['desc']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['desc'])))) : "";
	$ytb= isset($_POST['ytb']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['ytb'])))) : "";
	
	$auteur=isset($_POST['auteur']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['auteur'])))) : "";
	$es=array();
	//Recuperer l'image :
	if($_FILES['img']['tmp_name']!=""){
		$img_name=$_FILES['img']['name'];
		$img_tmp_name=$_FILES['img']['tmp_name'];
		$img_extension=strrchr($img_name,".");
		$extension_autoriser=array('.jpg','.png','.jpeg','.JPG','.PNG','.JPEG');
		$img_destination='images_articles/'.$img_name;
		if(in_array($img_extension,$extension_autoriser)){
			if(move_uploaded_file($img_tmp_name,$img_destination)){
					
			}else{
				$es[]="une erreur est survenu lors de l'envoie du fichier !";
			}
		}else{
			$es[]="seulement les images sont autoriser ! ";
		}
	}else{
		$es[]="choisir une image !";
	}
	
	if(empty($titre)){
		$es[]="Veuiller ajouter un titre";
	}
	if(empty($desc)){
		$es[]="Veuiller saisir votre article";
	}
	if(empty($auteur)){
		$es[]="Veuiller mentionner l'auteur";
	}
	/*if(!empty($ytb) && !preg_match("#\?v=\.{10}$#",$ytb)){
		$es[]="le lien du video doit etre un lien de youtube ";
	}*/


	$dSession['etat']['principale']='e-basic';
	
	if(empty($es)){
		$dReponse['vueBasic']='articleSuccess';
		$article=new Article($dConfig['dns']);
		$dArticle['titre']=$titre;
		$dArticle['auteur']=$auteur;
		$dArticle['article']=$desc;
		$ytb=substr(strrchr($ytb,"?v="),3,11);
		$dArticle['ytb']=$ytb;
		$dArticle['img']=$img_name;
		$article->suggerer($dArticle);
	
	}else{
		$dReponse['vueBasic']='articleError';
		$dReponse['titre']=$titre;
		$dReponse['auteur']=$auteur;
		$dReponse['article']=$desc;
		$dReponse['ytb']=$ytb;
		$dReponse['error']=$es;
	}
	
}

?>