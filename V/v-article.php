<!-- Site Content -->
			
<section id="article">
<center>
	<h1><?php echo $dReponse['article']['titre']; ?></h1>
	<img src="images_articles/<?php echo $dReponse['article']['img']; ?>" /><br/>
</center>
	<h6 id="auteur"><?php echo $dReponse['article']['auteur']; ?></h6>
	<em><?php echo $dReponse['article']['date']; ?></em>
	<p><?php echo nl2br($dReponse['article']['article']); ?></p>
	<br/><br/><br/>
	<center>
	<?php
	if($dReponse['article']['video']!=""){
	?>
<iframe  src="https://www.youtube.com/embed/<?php echo $dReponse['article']['video'];?>" frameborder="0" allowfullscreen width="700" height="500"></iframe>"
	<?php } ?>
	</center>
</section>
<!--Content End Here -->