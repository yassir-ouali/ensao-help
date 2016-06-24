<?php
 // contr�leur g�n�rique
 // lecture config
 include 'C/conf.php';

 // inclusion de biblioth�ques
 for($i=0;$i<count($dConfig['includes']);$i++){
 include($dConfig['includes'][$i]);
 }//for

 // on d�marre ou reprend la session
 session_start();
 $dSession=$_SESSION["session"];
 if($dSession) $dSession=unserialize($dSession);

 // on r�cup�re l'action � entreprendre
 $sAction=$_GET['action'] ? strtolower($_GET['action']) : 'init';
 $sAction=strtolower($_SERVER['REQUEST_METHOD']).":$sAction";

 //enregistrer l'action dans la session
 $dSession['actions'][]=$sAction;
 
 // l'encha�nement des actions est-il normal ?
 if( ! enchainementOK($dConfig,$dSession,$sAction)){
 // encha�nement anormal
 $sAction='enchainementinvalide';
 }//if

 // traitement de l'action
 $scriptAction=$dConfig['actions'][$sAction] ?
 $dConfig['actions'][$sAction]['url'] :
 $dConfig['actions']['actioninvalide']['url'];
 include $scriptAction;

 // envoi de la r�ponse(vue) au client
 $sEtat=$dSession['etat']['principale'];
 $scriptVue=$dConfig['etats'][$sEtat]['vue'];
 include $scriptVue;


 // fin du script - on ne devrait pas arriver l� sauf bogue
 trace ("Erreur de configuration.");
 trace("Action=[$sAction]");
 trace("scriptAction=[$scriptAction]");
 trace("Etat=[$sEtat]");
 trace("scriptVue=[$scriptVue]");
 trace ("V�rifiez que les script existent et que le script [$scriptVue] se termine par
l'appel � finSession.");
 exit(0);

 // ---------------------------------------------------------------
 function finSession(&$dConfig,&$dReponse,&$dSession){
 // $dConfig : dictionnaire de configuration
 // $dSession : dictionnaire contenant les infos de session
 // $dReponse : le dictionnaire des arguments de la page de r�ponse

 // enregistrement de la session
 if(isset($dSession)){
 // on met les param�tres de la requ�te dans la session
 $dSession['requete']=strtolower($_SERVER['REQUEST_METHOD'])=='get' ? $_GET :
 strtolower($_SERVER['REQUEST_METHOD'])=='post' ? $_POST : array();
 $_SESSION['session']=serialize($dSession);
 session_write_close();
 }else{
 // pas de session
 session_destroy();
 }

 // on pr�sente la r�ponse
 include $dConfig['modelVues'][$dReponse['modelvues']]['url'];

 // fin du script
 exit(0);
 }//finsession

 //--------------------------------------------------------------------
 function enchainementOK(&$dConfig,&$dSession,$sAction){
 // v�rifie si l'action courante est autoris�e vis � vis de l'�tat pr�c�dent
 $etat=$dSession['etat']['principale'];
 if(! isset($etat)) $etat='sansetat';

 // v�rification action
 $actionsautorisees=$dConfig['etats'][$etat]['actionsautorisees'];
 $autorise= ! isset($actionsautorisees) || in_array($sAction,$actionsautorisees);
 return $autorise;
 }

 //--------------------------------------------------------------------
 function dump($dInfos){
 // affiche un dictionnaire d'informations
 while(list($cl�,$valeur)=each($dInfos)){
 echo "[$cl�,$valeur]<br>\n";
 }//while
 }//suivi

 //--------------------------------------------------------------------
 function trace($msg){
 echo $msg."<br>\n";
 }//suivi
 ?>