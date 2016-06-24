<!-- Help Us Section Start Here-->
<section class="help-us">
	<center>
		<h2>ENSAO <strong class="border-none">a besoin de toi !</strong></h2>
		<?php
		foreach($dReponse['error'] as $e){
			echo "<p class='erreur'>".$e."</p>";
		}
		?>
	</center>
</section>
<!-- Help Us Section End Here-->
<!--Register-->
<section id="form_register">
<form action="" method="post" >
<div class="row">
	<div class="col-xs-12">
		<div class="form-group col-xs-12 col-sm-6">
			<label for="name-join">Username<span>*</span></label>
			<input type="text" class="form-control" onblur="verifUser()" id="username" name="username" value="<?php echo $dReponse['username']; ?>" />
			<p id="res_username"></p>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<label for="email">Email<span>*</span></label>
			<input type="email" class="form-control" onblur="verifEmail()" id="email" name="email" value="<?php echo $dReponse['email'];?>" />
			<p id="res_email"></p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="form-group col-xs-12 col-sm-6">
			<label for="password">Password<span>*</span></label>
			<input type="password" onblur="verifPass()" class="form-control" id="password" name="password"/>
			<p id="res_pass"></p>
			<p id="res_pass2"></p>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<label for="cpassword">Confirme Password<span>*</span></label>
			<input type="password" onblur="verifCpass()" class="form-control" id="cpassword" name="cpassword" />
			<p id="res_cpass"></p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="form-group col-xs-12 col-sm-6">
			<label for="categorie">Filiere<span>*</span></label>
				<select name="categorie" id="categorie" class="form-control" onchange="verif_annee()" >
					<option <?php if($dReponse['filliere']=="Cycle Preparatoire"){echo "selected";}?>>Cycle Preparatoire</option>	
					<option <?php if($dReponse['filliere']=="Genie Informatique"){echo "selected";}?>>Genie Informatique</option>
					<option <?php if($dReponse['filliere']=="Genie Industriel"){echo "selected";}?>>Genie Industriel</option>
					<option <?php if($dReponse['filliere']=="Genie Civil"){echo "selected";}?>>Genie Civil</option>
					<option <?php if($dReponse['filliere']=="Genie Electrique"){echo "selected";}?>>Genie Electrique</option>
					<option <?php if($dReponse['filliere']=="GTR"){echo "selected";}?>>GTR</option>
					<option <?php if($dReponse['filliere']=="GESEIR"){echo "selected";}?>>GESEIR</option>
				</select>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<label for="zip-code-join">Année<span>*</span></label>
				<select name="annee" id="annee" class="form-control" onchange="verif_annee()">
					<option value="1ere annee" <?php if($dReponse['annee']=="1ere annee"){echo "selected";}?>>1ere anneé</option>	
					<option value="2eme annees" <?php if($dReponse['annee']=="2eme annees"){echo "selected";}?>>2eme années</option>
					<option value="3eme annees" <?php if($dReponse['filliere']!="Cycle Preparatoire"){ echo "style='display:block';";}?>id="third" <?php  if($dReponse['annee']=="3eme annees"){echo "selected";}?>>3eme années</option>
				</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="form-group col-xs-12">
			<input type="submit" value="submit" class="btn btn-default pull-right" name="submit" />

		</div>
	</div>
</div>
</form>
</section>
	<!--fin register-->