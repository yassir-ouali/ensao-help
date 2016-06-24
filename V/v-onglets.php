
<section class="content-wrapper container" id="page-info">
	<div class="row shortcode-page">					
	<!--Tab Section Start Here-->
		<div class="col-xs-12 col-md-9" id="table_files">
			<div class="bs-example-tabs">
				<!-- Tab Section -->
				<div class="tab-wrap">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#first_title" role="tab" data-toggle="tab">1ere Ann&eacutee</a></li>
						<li><a href="#second_title" role="tab" data-toggle="tab">2eme Ann&eacutee</a></li>
						<?php if($_GET['choice']!='cp'){ ?>
						<li><a href="#third_title" role="tab" data-toggle="tab">3eme Ann&eacutee</a></li>
						<?php } ?>
					</ul>
					
					<!-- Tab panes -->
					<div class="tab-content" >
						<div class="tab-pane active" id="first_title">
							<?php if($dSession['etat']['secondaire']=='connect'){?>
							<button class="btn btn-default btn-volunteer" id="button_add" onclick="lightbox(0)"><i class="fa fa-plus-circle"></i><span>Ajouter un fichier</span></button>
							<?php }
							$dReponse['annee']=0;
							$dReponse['chargerPlus']=$dReponse['chargerPlusAnnee'][0];
							$dReponse['chargerPlusFunction']='goFilliere(0)';
							?>
							<?php include $dReponse['tableau']; ?>
						</div>
						<div class="tab-pane" id="second_title">
							<?php if($dSession['etat']['secondaire']=='connect'){?>
							<button class="btn btn-default btn-volunteer" id="button_add" onclick="lightbox(1)"><i class="fa fa-plus-circle"></i><span>Ajouter un fichier</span></button>
							<?php }
							$dReponse['annee']=1;
							$dReponse['chargerPlus']=$dReponse['chargerPlusAnnee'][1];
							$dReponse['chargerPlusFunction']='goFilliere(1)';
							?>
							<?php include $dReponse['tableau']; ?>
						</div>
						<?php if($_GET['choice']!='cp'){ ?>
						<div class="tab-pane" id="third_title">
							<?php if($dSession['etat']['secondaire']=='connect'){?>
							<button class="btn btn-default btn-volunteer" id="button_add" onclick="lightbox(2)"><i class="fa fa-plus-circle"></i><span>Ajouter un fichier</span></button>
							<?php }
							$dReponse['annee']=2;
							$dReponse['chargerPlus']=$dReponse['chargerPlusAnnee'][2];
							$dReponse['chargerPlusFunction']='goFilliere(2)';
							?>
							<?php include $dReponse['tableau']; ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Tab Section End Here-->
</section>