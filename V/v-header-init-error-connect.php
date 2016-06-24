<div class="overlay" onclick="hideLightbox()"></div>
<div class="content_lightbox">
	<?php for($i=0;$i<count($dReponse['error']);$i++){?>
	<li class='erreur'><?php echo $dReponse['error'][$i];?></li>
	<?php }?>
	<form action="?action=login" method="post">
		<div class="block_input"><label>Email</label><br/><input type="email" name="email" /></div><br/>
		<div class="block_input"><label>Password</label><br/><input type="password" name="password" /></div><br/>
		<input type="submit" value="Connection" class="btn btn-default" id="submit_log" name="submit"/>
	</form>
<br/>	
<p>Vous n'étes pas encore membre ,<a href=\"?action=inscription\">créer un compte ici !</a></p>
</div>
<script> window.onload=lightbox(0);</script>
<!--Header Section Start Here -->
			<header id="header">
				<div class="container">
					<div class="row primary-header">
						<a href="./" class="col-xs-12 col-sm-2 brand" title="Welcome to Ensao Help"><img src="assets/img/logo.png" id="logo" alt="Ensao Help"></a>
						<div class="social-links col-xs-12 col-sm-10" style="margin-top:1%;">
							<a class="btn btn-default btn-volunteer" href="?action=inscription">Sing up</a>
							<a class="btn btn-default btn-volunteer" onclick="lightbox(0)">log in</a>
						</div>
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav>
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="./"   class="submenu-icon">Home <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
								</li>
								<li>
									<a href="?action=allarticles" class="submenu-icon">articles<span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
								</li>
								<li>
									<a href="?action=files" class="submenu-icon">files<span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
								</li>
								<li>
									<a href="?action=faq" class="submenu-icon">FAQ <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
								</li>
								<li>
									<a href="?action=contactus" class="submenu-icon">Contact us<span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
								</li>
							</ul>
							</nav>
							
							<!--<form class="navbar-form navbar-right search-form" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search Here">
								</div>
								<button type="submit">
									<i class="icon-search"></i>
								</button>
							</form>-->
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</div>
					<!--second nav bar-->
				<div id="filiere">
					<ul id="filiere_ul">
						<a href="?action=filliere&choice=cp" ><li class="list_filliere">Cycle Préparatoire</li></a>
						<a href="?action=filliere&choice=gi" ><li class="list_filliere">Génie Informatique</li></a>
						<a href="?action=filliere&choice=gindus" ><li class="list_filliere">Génie Industriel</li></a>
						<a href="?action=filliere&choice=gc" ><li class="list_filliere">Génie Civil</li></a>
						<a href="?action=filliere&choice=ge" ><li class="list_filliere">Génie Electrique</li></a>
						<a href="?action=filliere&choice=gtr" ><li class="list_filliere">GTR</li></a>
						<a href="?action=filliere&choice=gseir" ><li class="list_filliere">GSEIR</li></a>
					<ul>
				</div>
				
				<!-- fin second nav bar-->
			</header>
			<!-- Header Section End Here -->