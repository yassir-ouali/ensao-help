function verifUser(){
								 
  var username = document.getElementById("username").value;
  var reg_user = new RegExp("^[a-zA-Z]+[a-zA-Z0-9 ._-]{4,}$");
 if(!reg_user.test(username)){
	$('#res_username').html("<span class=\"false\">Le nom d'utilisateur est invalide</span>");
	$("#username").css("border","1px solid red");
}else{
$('#res_username').html("<span class=\"true\">Parfait !</span>");
$("#username").css("border","1px solid green");
}
}

function verifEmail(){
  var email = document.getElementById("email").value;
   var reg_email = new RegExp("^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$");
   
if(!reg_email.test(email)){
$('#res_email').html("<span class=\"false\">L'email est invalide</span>"); 
$("#email").css("border","1px solid red");
 }else{
 $('#res_email').html("<span class=\"true\">Exellent !</span>");
 $("#email").css("border","1px solid green");
 }
 }
 
 
function verifPass(){
   var pass = document.getElementById("password").value;
    var reg_pass_num = new RegExp("[0-9]");
    var reg_pass_lettre = new RegExp("[a-zA-Z]");

	if(!reg_pass_num.test(pass) || !reg_pass_lettre.test(pass) || pass.length<5){
		$('#res_pass').html("<span class=\"false\">invalid !</span>");
		$('#res_pass2').html("<span class=\"\">Le mot de passe doit contenir au moins une lettre et un nombre !</span>");
		$("#password").css("border","1px solid red");
		}else{
		$('#res_pass').html("<span class=\"true\">Bien securiser !</span>");
		$('#res_pass2').html("");
		$("#password").css("border","1px solid green");
		}
	
 }
 
 function verifCpass(){
   var cpass = document.getElementById("cpassword");
   var pass2 = document.getElementById("password");
   
 if(cpass.value!=pass2.value){
   $('#res_cpass').html("<span class=\"false\">Les deux mots de passe doivent etre identique</span>");
   $("#cpassword").css("border","1px solid red");
 }else{
   $('#res_cpass').html("<span class=\"true\">Exact !</span>");
   $("#cpassword").css("border","1px solid green");
 }
 }
 
 //verifier si l'etudiant est en cycle prepa ou cycle d'ingenieur :
function verif_annee(){
var x = document.getElementById("categorie").selectedIndex;
var y = document.getElementById("annee");
var z = document.getElementById("third");
if(x!=0){
z.style.display="block";
}
else{
z.style.display="none";
}
}
