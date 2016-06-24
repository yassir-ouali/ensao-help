<!--Header Section Start Here -->
			<header id="header">
				<div class="container">
					<div class="row primary-header">
						<a href="./" class="col-xs-12 col-sm-2 brand" title="Welcome to Ensao Help"><img src="assets/img/logo.png" id="logo" alt="Ensao Help"></a>
						<div class="social-links col-xs-12 col-sm-10" style="margin-top:1%;" >
							<a class="btn btn-default btn-volunteer" href="?action=logout">log out</a>
							<a class="btn btn-default btn-volunteer" href="?action=profile&id=<?php echo $dReponse['membre']['id'];  ?>">Profile</a><strong id="hello">Hello <?php echo $dReponse['membre']['username']; ?>..<?php if($dSession['admin']){ echo ". good luck our admin ;) ";}?> </strong>
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
								<?php if($dSession['admin']){?>
									<li>
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">Administration <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->

									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="?action=articleadmin">Gestion d'articles</a>
											</li>
											<li>
												<!-- <a href="">Gestion de membre</a>-->
											</li>

										</ul>
									</div>
								</li>
								<?php }?>
							</ul>
							</nav>
						</div>
				</div>
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