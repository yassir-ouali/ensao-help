<!-- Site Content -->
	<center><h1>Ajouter un article</h1></center>
	<form action="?action=ecrirearticle" method="post" enctype="multipart/form-data">
		<ul>
		<?php for($i=0;$i<count($dReponse['error']);$i++){?>
			<li class="error"><?php echo $dReponse['error'][$i];?></li>
		<?php }	?>
		</ul>
		<label for="titre">Titre de l'article<span>*</span></label>
		<input type="text" class="form-control" id="titre" name="titre" value="<?php echo $dReponse['titre']; ?>" />
		<br/>
		<label for="img">Image*</label>
		<input type="file"  id="img" name="img" />
		<br/>
		<label for="desc">Article<span>*</span></label>
		<textarea class="form-control" id="desc" name="desc" /><?php echo $dReponse['article'];?></textarea>
		<br/>
		<label for="auteur">Auteur<span>*</span></label>
		<input type="text" class="form-control" id="auteurForm" name="auteur" value="<?php echo $dReponse['auteur'];?>"/>
		<br/>
		<label for="ytb">Video link</label>
		<input type="text" class="form-control" id="ytb" name="ytb" value="<?php  echo $dReponse['ytb']; ?>" />
		<br/>
		<input type="submit" name="submit2" value="Envoyer" class="btn btn-default"/>
	</form>
	<br/>
	<br/>
<!--Content End Here -->