<?php
 // contrôleur générique
 // lecture config
 include 'C/conf.php';

 // inclusion de bibliothèques
 for($i=0;$i<count($dConfig['includes']);$i++){
 include($dConfig['includes'][$i]);
 }//for

 // on démarre ou reprend la session
 session_start();
 $dSession=$_SESSION["session"];
 if($dSession) $dSession=unserialize($dSession);

 // on récupère l'action à entreprendre
 $sAction=$_GET['action'] ? strtolower($_GET['action']) : 'init';
 $sAction=strtolower($_SERVER['REQUEST_METHOD']).":$sAction";

 //enregistrer l'action dans la session
 $dSession['actions'][]=$sAction;
 
 // l'enchaînement des actions est-il normal ?
 if( ! enchainementOK($dConfig,$dSession,$sAction)){
 // enchaînement anormal
 $sAction='enchainementinvalide';
 }//if

 // traitement de l'action
 $scriptAction=$dConfig['actions'][$sAction] ?
 $dConfig['actions'][$sAction]['url'] :
 $dConfig['actions']['actioninvalide']['url'];
 include $scriptAction;

 // envoi de la réponse(vue) au client
 $sEtat=$dSession['etat']['principale'];
 $scriptVue=$dConfig['etats'][$sEtat]['vue'];
 include $scriptVue;


 // fin du script - on ne devrait pas arriver là sauf bogue
 trace ("Erreur de configuration.");
 trace("Action=[$sAction]");
 trace("scriptAction=[$scriptAction]");
 trace("Etat=[$sEtat]");
 trace("scriptVue=[$scriptVue]");
 trace ("Vérifiez que les script existent et que le script [$scriptVue] se termine par
l'appel à finSession.");
 exit(0);

 // ---------------------------------------------------------------
 function finSession(&$dConfig,&$dReponse,&$dSession){
 // $dConfig : dictionnaire de configuration
 // $dSession : dictionnaire contenant les infos de session
 // $dReponse : le dictionnaire des arguments de la page de réponse

 // enregistrement de la session
 if(isset($dSession)){
 // on met les paramètres de la requête dans la session
 $dSession['requete']=strtolower($_SERVER['REQUEST_METHOD'])=='get' ? $_GET :
 strtolower($_SERVER['REQUEST_METHOD'])=='post' ? $_POST : array();
 $_SESSION['session']=serialize($dSession);
 session_write_close();
 }else{
 // pas de session
 session_destroy();
 }

 // on présente la réponse
 include $dConfig['modelVues'][$dReponse['modelvues']]['url'];

 // fin du script
 exit(0);
 }//finsession

 //--------------------------------------------------------------------
 function enchainementOK(&$dConfig,&$dSession,$sAction){
 // vérifie si l'action courante est autorisée vis à vis de l'état précédent
 $etat=$dSession['etat']['principale'];
 if(! isset($etat)) $etat='sansetat';

 // vérification action
 $actionsautorisees=$dConfig['etats'][$etat]['actionsautorisees'];
 $autorise= ! isset($actionsautorisees) || in_array($sAction,$actionsautorisees);
 return $autorise;
 }

 //--------------------------------------------------------------------
 function dump($dInfos){
 // affiche un dictionnaire d'informations
 while(list($clé,$valeur)=each($dInfos)){
 echo "[$clé,$valeur]<br>\n";
 }//while
 }//suivi

 //--------------------------------------------------------------------
 function trace($msg){
 echo $msg."<br>\n";
 }//suivi
 ?>