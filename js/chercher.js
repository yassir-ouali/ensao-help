function chercher(){
	$.ajax({
		'url':'C/chercher-fichier.php',
		'type':'POST',
		'data':'filliere='+$("select[name='filliere']").val()+'&annee='+$("select[name='annee']").val()
				+'&key_words='+encodeURIComponent($("input[name='key_words']").val())+'&nom_prof='+$("input[name='nom_prof']").val()
				+'&categorie='+$("select[name='categorie']").val(),
		'beforeSend': function ( xhr ) {
			$('#tableau').html("<img src='Images/load2.gif' style='width:10%;margin-left:40%;' />");
		            },
		'success':function(r){
			// $('#tableau').html(unescape(decodeURIComponent(r)));
			document.getElementById("tableau").innerHTML=r;
			}
		
	});
}