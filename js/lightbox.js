function lightbox(element){
var overlay = document.getElementsByClassName('overlay');
var x = overlay[0];
var content = document.getElementsByClassName('content_lightbox');
var y = content[element];
var bodyElems = document . getElementsByTagName( "body" ) ; 
var b = bodyElems[ 0 ] ;
  
  $(x).fadeIn("fast");
  $(y).fadeIn("slow");
  /*x.style.display="block";
  y.style.display="block";*/
  b.style.overflowY="hidden";
  }

function hideLightbox(){
var overlay = document.getElementsByClassName('overlay');
var x = overlay[0];
$(x).fadeOut();

var content = document.getElementsByClassName('content_lightbox');
for(var i=0;i<content.length;i++){
		
		$(content[i]).fadeOut();
  }
  
var bodyElems = document.getElementsByTagName( "body" ) ; 
var b = bodyElems[ 0 ] ;
b.style.overflowY="scroll";

  
}

function lightboxDelete(e){
var overlay = document.getElementsByClassName('overlay');
var x = overlay[0];
$(x).fadeIn("fast");

var content = document.getElementsByClassName('content_lightbox');
var y = content[0];
y.innerHTML="<h4 style=\"text-align:center;\">Vous voulez vraiment suprrimer ce fichier ?</h4>	<button onclick=\"hideLightbox()\" style=\"float:left !important;\" class=\"btn btn-default btn-volunteer charger_plus\" >Annuler</button><a href=\"?action=deletefile&id="+e+"\"><button style=\"float:right !important;\" class=\"btn btn-default btn-volunteer charger_plus\" >Supprimer</button></a>";
//alert("aaaaa");
var bodyElems = document.getElementsByTagName( "body" ) ; 
var b = bodyElems[0] ;
b.style.overflowY="hidden";
 
  $(y).fadeIn("slow");
}

function verifyForm(){
var files = document.getElementsByName('file');
var file = files[0].value;
var verify = document.getElementsByClassName('verify');
var u = verify[0];

if(!file){
alert("saaat");
}else{
u.style.backgroundColor="#ecc731";
u.style.color="white";
u.style.border="0px";
}
}