<!-- Site Content -->
				
<section>
<?php if($dReponse['connect']=='connect'){?>
<a href="?action=ecrirearticle" class="add"><button class="btn btn-default btn-volunteer">Ajouter un article</button></a>
<?php }?>
	<?php
	 for($i=0;$i<count($dReponse['articles']);$i++){
	?>
	<div class="article">
		<img src="images_articles/<?php echo $dReponse['articles'][$i]['img']; ?>" />
		<div>
			<h3><?php echo $dReponse['articles'][$i]['titre']; ?></h3>
			<em><?php echo substr($dReponse['articles'][$i]['article'],0,200)."..."; ?></em>
			<a href="?action=lirearticle&id=<?php echo $dReponse['articles'][$i]['id']; ?>"><button class="btn btn-default btn-volunteer">lire la suite</button></a>
		</div>
		
	</div>
	<?php } ?>
</section>
<!-- Section End Here -->