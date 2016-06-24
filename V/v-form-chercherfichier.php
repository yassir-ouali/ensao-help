<section>
<div class="row faq">
	<div class="cols-xs-12 col-sm-6 anim-section" style="width:100%;">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-1"> Filtre de fichiers <i class="fa fa-plus collape-plus"></i></a>
					</h4>
					</div>
					<div id="collapse-1" class="panel-collapse collapse in">
						<div class="panel-body" style="padding:0px 150px;">
							<p>
											<div class=""><label>Key words*</label><br/><input class="form-control" type="text" name="key_words" placeholder=""/><br/></div>
											<div class="inline_input2"><label>Filliere</label><br/>
												<select name="filliere" class="form-control">
													<option value=""><a></a></option>	
													<option value="cp"><a>Cycle Preparatoire</a></option>	
													<option value="gi"><a>Genie Informatique</a></option>
													<option value="gindus"><a>Genie Industriel</a></option>
													<option value="gc"><a>Genie Civil</a></option>
													<option value="ge"><a>Genie Electrique</a></option>
													<option value="gtr"><a>GTR</a></option>
													<option value="gseir"><a>GSEIR</a></option>
												</select></div>
												<div class="inline_input2"><label>Ann&eacute;e</label><br/>
												<select name="annee" class="form-control">
													<option value=""><a></a></option>	
													<option value="1"><a>1&eacute;re ann&eacute;e</a></option>	
													<option value="2"><a>2&eacute;me ann&eacute;es</a></option>
													<option value="3"><a>3&eacute;me ann&eacute;es</a></option>
												</select></div>
												<!--<div class="inline_input2"><label>Nom du Prof*</label><br/><input class="form-control" type="text" name="nom_prof" id="nom_prof<?php echo $dReponse['numform'];?>"/><br/></div>-->
												<div class="inline_input2"><label>Nom du Prof*</label><br/>
													<input class="form-control" type="text" name="nom_prof" />
												</div>
												<div class="inline_input2"><label>Categorie</label><br/>
												<select name="categorie" class="form-control">
													<option value=""><a></a></option>	
													<option><a>Cour</a></option>	
													<option><a>TD</a></option>
													<option><a>TP</a></option>
													<option><a>DS</a></option>
													<option><a>Autres..</a></option>
												</select>
												</div>
												
												<center><input type="button" onclick="chercher()" value="submit" class="btn btn-default" name="submitForm"/></center>
												
							</p>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
											

	
</section><br/>