<?php 
//php ini config
ini_set("display_errors","on");

//les modules à inclure
$dConfig['includes']=array("M/c-file.php","M/c-article.php",
"M/c-membre.php","M/c-admin.php");

//config des vues :
$dConfig['modelVues']['basic']=array("url"=>"V/mv-basic.php");
$dConfig['modelVues']['chercherFichier']=array("url"=>"V/mv-chercherfichier.php");
$dConfig['modelVues']['filliere']=array("url"=>"V/mv-filliere.php");
$dConfig['modelVues']['index']=array("url"=>"V/mv-index.php");
$dConfig['modelVues']['profile']=array("url"=>"V/mv-profile.php");

$dConfig['vues']['formulaireAjouterArticle']=array("url"=>"v-form-ajouterarticle.php");
$dConfig['vues']['formulaireAjouterFichier']=array("url"=>"v-form-ajouterfichier.php");
$dConfig['vues']['formulaireChercherFichier']=array("url"=>"v-form-chercherfichier.php");
$dConfig['vues']['formulaireInscription']=array("url"=>"v-form-inscription.php");
$dConfig['vues']['headerInit']=array("url"=>"v-header-init.php");
$dConfig['vues']['headerInitErrorConnect']=array("url"=>"v-header-init-error-connect.php");
$dConfig['vues']['headerConnect']=array("url"=>"v-header-connect.php");
$dConfig['vues']['footer']=array("url"=>"v-footer.php");
$dConfig['vues']['onglets']=array("url"=>"v-onglets.php");
$dConfig['vues']['profileInformations']=array("url"=>"v-profileinformation.php");
$dConfig['vues']['slideShow']=array("url"=>"v-slideshow.php");
$dConfig['vues']['tableau']=array("url"=>"v-tableau.php");
$dConfig['vues']['tableauDelete']=array("url"=>"v-tableau-delete.php");
$dConfig['vues']['tableauSearch']=array("url"=>"v-tableau-search.php");
$dConfig['vues']['article']=array("url"=>"v-article.php");
$dConfig['vues']['articleMiniature']=array("url"=>"v-article-miniature.php");
$dConfig['vues']['articleSuccess']=array("url"=>"v-articlesuccess.php");
$dConfig['vues']['articleError']=array("url"=>"v-articleerror.php");
$dConfig['vues']['inscriptionSuccess']=array("url"=>"v-inscription-success.php");
$dConfig['vues']['inscriptionError']=array("url"=>"v-inscription-error.php");
$dConfig['vues']['404']=array("url"=>"v-404.php");
$dConfig['vues']['articleAdmin']=array("url"=>"v-article-admin.php");
$dConfig['vues']['listError']=array("url"=>"v-error.php");
$dConfig['vues']['become']=array("url"=>"v-become.php");
$dConfig['vues']['howtohelp']=array("url"=>"v-howtohelp.php");
$dConfig['vues']['comment']=array("url"=>"v-comment.php");
$dConfig['vues']['faq']=array("url"=>"v-faq.php");
$dConfig['vues']['contactus']=array("url"=>"v-contactus.php");
$dConfig['vues']['contactusSuccess']=array("url"=>"v-contactus-success.php");

//config actions
$dConfig['actions']['get:init']=array("url"=>"C/a-init.php");
$dConfig['actions']['get:accepterarticle']=array("url"=>"C/a-accepterarticle.php");
$dConfig['actions']['get:bannirmembre']=array("url"=>"C/a-bannirmembre.php");
$dConfig['actions']['get:inscription']=array("url"=>"C/a-inscription.php");
$dConfig['actions']['post:inscription']=array("url"=>"C/a-inscription-post.php");
$dConfig['actions']['get:ecrirearticle']=array("url"=>"C/a-ecrirearticle.php");
$dConfig['actions']['post:ecrirearticle']=array("url"=>"C/a-ecrirearticle-post.php");
$dConfig['actions']['get:lirearticle']=array("url"=>"C/a-lirearticle.php");
$dConfig['actions']['post:login']=array("url"=>"C/a-login.php");
$dConfig['actions']['get:logout']=array("url"=>"C/a-logout.php");
$dConfig['actions']['get:archiverarticle']=array("url"=>"C/a-archiver-article.php");
$dConfig['actions']['get:telechargerfichier']=array("url"=>"C/a-telechargerfichier.php");
$dConfig['actions']['post:uploaderfichier']=array("url"=>"C/a-uploaderfichier.php");
$dConfig['actions']['actioninvalide']=array("url"=>"C/a-actioninvalide.php");
$dConfig['actions']['get:allarticles']=array("url"=>"C/a-all-articles.php");
$dConfig['actions']['get:profile']=array("url"=>"C/a-profile.php");
$dConfig['actions']['get:articleadmin']=array("url"=>"C/a-article-admin.php");
$dConfig['actions']['get:filliere']=array("url"=>"C/a-filliere.php");
$dConfig['actions']['get:files']=array("url"=>"C/a-files.php");
$dConfig['actions']['get:faq']=array("url"=>"C/a-faq.php");
$dConfig['actions']['get:contactus']=array("url"=>"C/a-contactus.php");
$dConfig['actions']['post:contactus']=array("url"=>"C/a-contactus-post.php");
$dConfig['actions']['get:deletefile']=array("url"=>"C/a-delete-file.php");


//config des etats de models de vues
$dConfig['etats']['e-chercherFichier']=array(
	//"actionautorisees"=>array(""),
	"vue"=>"V/e-chercherfichier.php"
);
$dConfig['etats']['e-filliere']=array(
		//"actionautorisees"=>array(""),
		"vue"=>"V/e-filliere.php"
);
$dConfig['etats']['e-init']=array(
		//"actionautorisees"=>array(""),
		"vue"=>"V/e-init.php"
);
$dConfig['etats']['e-profile']=array(
		//"actionautorisees"=>array(""),
		"vue"=>"V/e-profile.php"
);
$dConfig['etats']['sansetat']=array(
		//"actionautorisees"=>array(""),
);
$dConfig['etats']['e-basic']=array(
		//"actionautorisees"=>array(""),
		"vue"=>"V/e-basic.php"
);
$dConfig['etats']['e-files']=array(
		//"actionautorisees"=>array(""),
		"vue"=>"V/e-files.php"
);
//config de db connection
/*
$dConfig['dns']=array(
	'host'=>'localhost',
		'dbname'=>'ensao_help',
		'user'=>'yassir',
		'password'=>'Y@ssirP@ssw0rd'
);

*/
$dConfig['dns']=array(
		'host'=>'localhost',
		'dbname'=>'ensao_help',
		'user'=>'root',
		'password'=>''
);

//config assets
$dConfig['assets']=array(
	"url"=>"V/include-assets.php",
	"url2"=>"V/include-assets-utf8.php");
$dConfig['styles']=array(
	"article"=>"css/articles.css",
	"articleMiniature"=>"css/all_articles.css",
	"formulaireAjouterArticle"=>"css/add_article.css",
	"articleError"=>"css/add_article.css",
	"chercherForm"=>"css/chercher.css"
);
$dConfig['scripts']=array(
	"onglets"=>"js/pb.js",
	"chercher"=>"js/chercher.js"
);
$dConfig['email']=array("yassir.oua@gmail.com");
$dConfig['nbLignes']=10;
?>