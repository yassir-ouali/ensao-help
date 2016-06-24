<!-- site content -->
			<div id="main">
				<!--Breadcrumb Section End Here-->
				
				<div class="content-wrapper container" id="page-info">
					<div class="row">
					<?php if(!empty($dReponse['error'])){?>
					<li class="erreur"><?php echo $dReponse['error']; ?></li>
					<?php } ?>
						<div class="col-xs-12 col-sm-6 contact-form">
							<div class="col-xs-12" id="success"></div>
							<h2>Envoyer un Message</h2>
							<form  action="?action=contactus" method="post">
								<div class="row">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Name<span>*</span></label>
										<input type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="email">Email<span>*</span></label>
										<input type="email" class="form-control" id="email" name="email">
									</div>
								</div>
								<div class="form-group">
									<label for="sub">Subject<span>*</span></label>
									<input type="text" class="form-control" id="sub" name="subject" >
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<textarea class="form-control" id="message" name="msg"></textarea>
								</div>

								<input type="submit" name="submit" class="btn btn-default"  />
							</form>
						</div>
						<div class="col-xs-12 col-sm-5 col-sm-offset-1 contact-address">
							<h2>Restez proche </h2>
							<address>
								<span> <strong>E-Mail :</strong> <span><a href="">ensaohelp@gmail.com</a></span> </span>
								<span> <strong>Tel :</strong> <span><a href="tel:+212607031162">+212607031162</a></span> </span>
							</address>
						</div>
					</div>
				</div>
			</div>
			<!-- site content ends -->