 		var req=1;//offset profile
 		var req1=1;//offset annee 1
 		var req2=1;//offset annee 2
 		var req3=1;//offset annee 3
		
		function getXhr(){
                                var xhr = null; 
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest(); 
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
                                return xhr
			}
 
			/**
			* Méthode qui sera appelée sur le click du bouton
			*/
			function goProfile(){
				var xhr = getXhr()
				
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						var res=xhr.responseText;
						var a=document.getElementsByClassName('main_table_body')[0];
						// var dd=res+"</tbody>"
						a.innerHTML+=res;
						$('.more').fadeIn('slow');
						if(res!=""){
							// alert("aaa");
							document.getElementsByClassName('charger_plus')[0].style.display='block';
						}
						document.getElementsByClassName('load_plus')[0].style.display='none';
						req++;
						// alert(req);
					}
				}
				// alert(location.search);
				document.getElementsByClassName('charger_plus')[0].style.display='none';
				document.getElementsByClassName('load_plus')[0].style.display='block';
				xhr.open("GET","C/afficher_plus.php"+location.search+"&offset="+req,true);
				xhr.send(null);
			}
			function goFilliere(e){
				var xhr = getXhr()
				var offset;
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						var res=xhr.responseText;
						var a=document.getElementsByClassName('main_table_body')[e];
						// var dd=res+"</tbody>"
						a.innerHTML+=res;
						$('.more').fadeIn('slow');
						if(res!=""){
							// alert("aaa");
							document.getElementsByClassName('charger_plus')[e].style.display='block';
						}
						document.getElementsByClassName('load_plus')[e].style.display='none';
					}
				}
				switch(e){
					case 0:offset=req1;req1++;break;
					case 1:offset=req2;req2++;break;
					case 2:offset=req3;req3++;break;
				}
				document.getElementsByClassName('charger_plus')[e].style.display='none';
				document.getElementsByClassName('load_plus')[e].style.display='block';
				// alert("afficher_plus.php"+location.search+"&offset="+offset+"&annee="+(e+1));
				xhr.open("GET","C/afficher_plus.php"+location.search+"&offset="+offset+"&annee="+(e+1),true);
				xhr.send(null);
			}