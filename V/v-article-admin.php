<?php for($i=0;$i<count($dReponse['article']);$i++){?>
<center>
<div style="border:2px solid #ddd;width:50%;padding:10px;margin:10px;">
	<div>
		<h1><?php echo $dReponse['article'][$i]['titre'];?></h1>
		<img src="images_articles/<?php echo $dReponse['article'][$i]['img'];?>"   /><br>
		<p><?php echo $dReponse['article'][$i]['article'];?></p>
		<h6><em><?php echo $dReponse['article'][$i]['auteur'];?></em></h6><br/>
		<?php if(!empty($dReponse['article'][$i]['video'])){?>
		<iframe width="420" height="315" src="https://www.youtube.com/embed/<?php echo $dReponse['article'][$i]['video'];  ?>" frameborder="0" allowfullscreen></iframe>
		<?php }?>
		</div><br>
	<a href="?action=archiverarticle&id=<?php echo $dReponse['article'][$i]['id']; ?>"><button class="btn btn-default">Archiver</button></a>
	<a href="?action=accepterarticle&id=<?php echo $dReponse['article'][$i]['id']; ?>"><button class="btn btn-default">Valider</button></a>
</div>
</center>
<?php } ?>