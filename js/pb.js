/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function contains(obj,a) {
    for (var i = 0; i < a.length; i++) {
        if (a[i] === obj) {
            return true;
        }
    }
    return false;
}
function uploadFile(id){

	var k=document.getElementById("key_words"+id);
	var p=document.getElementById("nom_prof"+id);
	// alert(file.name+" | "+file.size+" | "+file.type);

	 if(p.value!="" && k.value!=""){
	 
			 if(_("file"+id).value!=""){
					var file = _("file"+id).files[0];
					 //alert(file.name+" | "+file.size+" | "+file.type);
					 var formdata = new FormData();
					formdata.append("file1", file);
					
					var ajax = new XMLHttpRequest();
					ajax.filename=file.name;
					// alert(ajax.filename);
					//traitement du fichier :
					var ex = file.name.substr(file.name.lastIndexOf('.') + 1);
					var array =['pdf','doc','docx','png','jpg','jpeg','zip','rar','pptx','ppt','PDF','DOC','DOCX','PNG','JPG','JPEG','ZIP','RAR','PPTX','PPT'];
					
				 if(contains(ex,array)){
					  
					$('#submit'+id).html("<center><img src=\"Images/load2.gif\" id=\"load\" /></center>");
					ajax.id=id;
					
					
					ajax.upload.id=id;
					ajax.upload.addEventListener("progress", progressHandler, false);
					ajax.addEventListener("load", completeHandler, false);
					ajax.addEventListener("error", errorHandler, false);
					ajax.addEventListener("abort", abortHandler, false);
					ajax.open("POST", "C/file_upload_parser.php"+location.search+"&annee="+id);
					ajax.send(formdata);
					// alert("aaaa");
					}else{
					$('#submit'+id).html("<center><p class=\"erreur\">Type de fichier invalide !</p></center><input type=\"button\" onclick=\"uploadFile("+id+")\" value=\"Uploader\"  class=\"btn btn-default btn-file\" name=\"submit"+id+"\"/>");
					}
			}else{
					$('#submit'+id).html("<center><p class=\"erreur\">Veuiller choisir un fichier !</p></center><input type=\"button\" onclick=\"uploadFile("+id+")\" value=\"Uploader\"  class=\"btn btn-default btn-file\" name=\"submit"+id+"\"/>");
					}
		}else{
			$('#submit'+id).html("<center><p class=\"erreur\">Veuiller saisir tous les champs!</p></center><input type=\"button\" onclick=\"uploadFile("+id+")\" value=\"Uploader\"  class=\"btn btn-default btn-file\" name=\"submit"+id+"\"/>");
		}
}


function progressHandler(event){
	// _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar"+event.target.id).style.width=Math.round(percent)+"%";
	document.getElementsByClassName("progress-value")[event.target.id-1].innerHTML=Math.round(percent)+"%";
	// _("progressBar"+event.target.id).value = Math.round(percent);
	//_("status"+event.target.id).innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
$('#submit'+event.target.id).html("<center><input type='hidden' value=\""+event.target.filename+"\" name='file' /><input type=\"submit\" value=\"COMPLET\"  class=\"btn btn-default btn-file\" name=\"submit"+event.target.id+"\"/></center>");
/*
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;*/
}
function errorHandler(event){
	_("status"+event.target.id).innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status"+event.target.id).innerHTML = "Upload Aborted";
}
function dump(obj) {
    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }
    alert(out);
}