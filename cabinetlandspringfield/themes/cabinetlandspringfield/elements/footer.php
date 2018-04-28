<?php defined("C5_EXECUTE") or die(_("Access Denied")); ?>
				<div id="empty"></div>
			</div> <!-- .out -->
		</div> <!-- .container -->

	<!-- begin footer -->
	    <div id="footer">
	        <div class="top">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-3 col-sm-6 col-xs-12">
                      		<a href="#" class="logo"><img src="<?php echo $this->getThemePath(); ?>/assets/img/logo_white.png" alt="" /></a>
                      		<div class="text">
	                            <?php
	                            	$a = new GlobalArea('Footer About');
	                            	$a->display();
	                            ?>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-6 col-xs-12">
	                        <div class="text">
	                            <div class="header">QUICK LINK</div>
	                            <?php
			                          //hard-code nav rather than making it an area - we don't want this editable
			                          $navBlock = BlockType::getByHandle('autonav');
			                          $navBlock->controller->displayPages = 'top';
			                          $navBlock->controller->orderBy = 'display_asc';
			                          $navBlock->controller->displaySubPages = 'none';
			                          $navBlock->render('templates/bootstrap_footer_navbar');
			                      ?>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-6 col-xs-12">
	                        <div class="text">
	                            <div class="header">OUR OFFICE</div>
	                            <ul class="foot-address">
	                              <li>
		                                <i class="fa fa-globe"></i>
		                                <?php
			                            	$a = new GlobalArea('Foot Address');
			                            	$a->display();
			                            ?>
	                              </li>
	                              <li>
		                                <i class="fa fa-phone"></i>
		                                <?php
			                            	$a = new GlobalArea('FootBusiness Phone');
			                            	$a->display();
			                            ?>
	                              </li>
	                              <li>
		                                <i class="fa fa-mobile"></i>
		                                <?php
			                            	$a = new GlobalArea('Foot Mobile Phone');
			                            	$a->display();
			                            ?>
	                              </li>
	                              <li>
	                                <i class="fa fa-envelope"></i>
	                                <?php
		                            	$a = new GlobalArea('Foot Email');
		                            	$a->display();
		                            ?>
	                              </li>
	                              <li>
	                                <i class="fa fa-facebook"></i>
	                                <?php
		                            	$a = new GlobalArea('Foot Facebook');
		                            	$a->display();
		                            ?>
	                              </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col-md-3 col-sm-6 col-xs-12">
	                        <div class="text">
	                            <div class="header">BUSINESS HOURS</div>
	                            <?php
	                            	$a = new GlobalArea('Foot Business Hours');
	                            	$a->display();
	                            ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="bottom">
	            <div class="container">
	                <div class="row">
	                    <div class="copyrights">&copy; <?php echo date("Y"); ?> Cabinetland of Springfield</div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /end footer -->
	    
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	    <?php
		if (!$c->isEditMode()) { ?>
		    <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/jquery-1.8.3.min.js"></script>
		    <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        	<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        	<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/function.js"></script>
        	<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/bootstrap.js"></script>
		<?php } ?>
	    <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/jquery-ui.min.js"></script>

		<!-- scripting (at the bottom for faster loading) -->
        
        <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/jquery.carouFredSel-6.2.1.js"></script>
        <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/library.js"></script>
        
        <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/assets/js/jquery.royalslider.min.js"></script>


	    <?php Loader::element('footer_required'); ?>
	</body>
</html>