<!-- slides-->
	<section class="rev_slider_wrapper banner-section">
		<div class="rev_slider banner-slider">
			<ul>
				<!-- SLIDE  -->
				<?php 
					for($i=0;$i<count($dReponse['articles']);$i++){
				?>
				<li data-transition="random" data-slotamount="7" data-masterspeed="500" class="slide-1" >
					<!-- MAIN IMAGE -->
					<img src="images_articles/<?php echo $dReponse['articles'][$i]['img']; ?>" alt="banner" data-bgfit="cover" data-bgposition="center 36%" data-bgrepeat="no-repeat">
					<div
					data-endspeed="500"
					data-easing="easeOutCirc"
					data-start="500"
					data-speed="700"
					data-y="103"
					data-x="152"
					class="tp-caption sft">
						<span class="btn btn-bg"><?php echo $dReponse['articles'][$i]['auteur']; ?></span>
					</div>
					
					<div
					data-endspeed="800"
					data-easing="easeOutCirc"
					data-start="800"
					data-speed="700"
					data-y="150"
					data-x="152"
					class="tp-caption sft banner-heading ">
						
						<h2><strong class="titre"><a href="?action=lirearticle&id=<?php echo $dReponse['articles'][$i]['id']; ?>" style="color:black;"><?php echo $dReponse['articles'][$i]['titre']; ?></a></strong></h2>
						
					</div>
					
					<!--<div
					data-endspeed="1000"
					data-easing="easeOutCirc"
					data-start="1000"
					data-speed="700"
					data-y="304"
					data-x="152"
					class="tp-caption sft banner-summary top_bug short">
						<p>
							<?php echo substr($dReponse['articles'][$i]['article'],0,200); ?>
						</p>
					</div>-->
	
					<!--<div
					data-endspeed="1200"
					data-easing="easeOutCirc"
					data-start="1200"
					data-speed="700"
					data-y="416"
					data-x="152"
					class="tp-caption sft" style="background-color:white;">
						<a href="?action=lirearticle&id=<?php echo $dReponse['articles'][$i]['id']; ?>" class="btn btn-default">Lire la suite</a>
					</div>-->
				</li><?php } ?>
			</ul>
		</div>
	</section>
				
	<!-- Our Causes Section End Here-->