<div class="overlay" onclick="hideLightbox()"></div>
<!--debut lightbox---->
<div class="content_lightbox">
	<form action="?action=uploaderfichier&choice=<?php echo $dReponse['filliere']; ?>" method="post">
		
		<div class="inline_input"><label>Key words*</label><br/><input type="text" name="key_words" class="form-control" id="key_words<?php echo $dReponse['numform'];?>"/><br/></div>
		<div class="inline_input"><label>Nom du Prof*</label><br/><input type="text" name="nom_prof" class="form-control" id="nom_prof<?php echo $dReponse['numform'];?>"/><br/></div><br/>
		
		<div class="inline_input"><label>Uploader*</label><br/><span class="btn btn-default btn-file verify">
		Browse <input type="file" name="file1" id="file<?php echo $dReponse['numform'];?>"/>
		</span><br/></div>
		<div class="inline_input"><label>Categorie</label><br/>
		<select name="categorie" class="form-control">
			<option><a>Cour</a></option>	
			<option><a>TD</a></option>
			<option><a>TP</a></option>
			<option><a>DS</a></option>
			<option><a>Autres..</a></option>
		</select></div>
		<br/>
		<br/>
		<br/>
		<div class="progress">
			<div id="progressBar<?php echo $dReponse['numform'];?>" class="progress-bar" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width:0%;">
				<span class="progress-value">0% </span>
			</div>
		</div>
		<h3 id="status<?php echo $dReponse['numform'];?>"></h3>
		<!--
	<progress value="0" max="100" style="width:300px;"></progress>
	  
	  <p id="loaded_n_total<?php echo $dReponse['numform'];?>"></p>-->
		<!--<div class="g-recaptcha" data-sitekey="6Lc20f4SAAAAAEXMOM5hQXLRXY_eSsm16vBWsEFF" name="captcha"></div>-->
		<center><div id="submit<?php echo $dReponse['numform'];?>"><input type="button" onclick="uploadFile(<?php echo $dReponse['numform'];?>)" value="Uploader"  class="btn btn-default btn-file" name="submit1<?php // echo $dReponse['numform'];?>"/></div></center>
	</form>
</div>
<!--fin lightbox-->