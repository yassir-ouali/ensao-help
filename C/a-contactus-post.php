<?php 
$dSession['etat']['principale']='e-basic';

if(isset($_POST['submit'])){
	$name= isset($_POST['name']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['name'])))) : "";
	$email= isset($_POST['email']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['email'])))) : "";
	$subject= isset($_POST['subject']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['subject'])))) : "";
	$msg= isset($_POST['msg']) ? utf8_decode(htmlspecialchars(utf8_encode(trim($_POST['msg'])))) : "";
	
	if(empty($name) || empty($email) || empty($subject) ){
		$es="Veuiller sasir tous les champs";
	}
	
	if(empty($es)){
		$passage_ligne = "\n";
		$header = "From: \"ENSAO HELP\"<contact@ensaohelp.com>".$passage_ligne;
		$header .= "Reply-to: \"ENSAO HELP\"<contact@ensaohelp.com>".$passage_ligne;
		$header .= "MIME-Version: 1.0".$passage_ligne;
		$header .= "Content-Type: text/html;".$passage_ligne;
		$to="yassir.oua@gmail.com";
		$sujet=$subject."/".$email;		
		for($i=0;$i<count($dConfig['email']);$i++){
			$to=$dConfig['email'][$i];
			mail($to,$sujet,$msg,$header);
		}
		$dReponse['vueBasic']='contactusSuccess';
	}else{
		$dReponse['error']=$es;
		$dReponse['vueBasic']='contactus';
	}
	
}else{
	$dReponse['vueBasic']='404';
}
?>