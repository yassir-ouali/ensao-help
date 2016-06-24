<!-- Help Us Section Start Here-->
<section class="help-us">
	<center>
		<h2>ENSAO <strong class="border-none">a besoin de toi !</strong></h2>
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
			<input type="text" class="form-control" onblur="verifUser()" id="username" name="username"  />
			<p id="res_username"></p>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<label for="email">Email<span>*</span></label>
			<input type="email" class="form-control" onblur="verifEmail()" id="email" name="email"  />
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
				<select name="categorie" id="categorie" class="form-control" onchange="verif_annee()">
					<option>Cycle Preparatoire</option>	
					<option>Genie Informatique</option>
					<option>Genie Industriel</option>
					<option>Genie Civil</option>
					<option>Genie Electrique</option>
					<option>GTR</option>
					<option>GESEIR</option>
				</select>
		</div>
		<div class="form-group col-xs-12 col-sm-6">
			<label for="zip-code-join">Ann&eacute;e<span>*</span></label>
				<select name="annee" id="annee" class="form-control" onchange="verif_annee()">
					<option value="1&eacute;re ann&eacute;e">1&eacute;re ann&eacute;e</option>	
					<option value="2&eacute;me ann&eacute;es">2&eacute;me ann&eacute;es</option>
					<option value="3&eacute;me ann&eacute;es" id="third">3&eacute;me ann&eacute;es</option>
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