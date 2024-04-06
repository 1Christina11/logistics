<!-- Start of Footer section
	============================================= -->
	<footer id="ft-footer" class="ft-footer-section">
		<div class="container">
			<div class="ft-footer-widget-wrapper">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<div class="logo-widget">
								<div class="site-logo">
									<a href="#"><img src="<?php echo base_url()?>assets/img/logo/logo2.png" alt=""></a>
								</div>
								<p>Are you looking for labeling, packing and repacking services? You are in the right hand! Logistics are ready to help you quickly and with high quality.
While we are doing the work, you have time to consider the possibilities of developing your business </p>
								<div class="ft-btn">
									<a class="d-flex justify-content-center align-items-center" href="<?php echo site_url()?>/Contact_us/get_contact_us">Get In Touch</a>
								</div>
							</div>
						</div>
					</div>			
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<h3 class="widget-title">Our Service</h3>
							
						
								<?php
	                   foreach($services as $row){;?>
		
							<div class="menu-widget">
								<ul>
									<li><a href="<?php echo site_url()?>/Services/get_one/<?php echo $row->service_id?>"><?php echo $row->service_head?></a></li>
								</ul>
							</div>
		 				<?php }?>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="ft-footer-widget ul-li-block headline pera-content">
							<div class="menu-widget">
								<h3 class="widget-title">Quick Links</h3>
								<ul>
									<li><a href="<?php echo site_url()?>/Home/get_home">Home</a></li>
									<li><a href="<?php echo site_url()?>/About_us">About Us</a></li>
									<li><a href="<?php echo site_url()?>/Services/index">Service</a></li>
									<li><a href="<?php echo site_url()?>/Contact_us/get_contact_us">Contact Us</a></li>
									<li><a href="<?php echo site_url()?>/Carriers_drivers/index">Carriers</a></li>
									<li><a href="<?php echo site_url()?>/Quote/get_quote">Get A Quote</a>
								</ul>
							</div>
						</div>
					</div>

					 	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css">

					<div class="ft-footer-social ul-li">
										<ul>
											<li style="margin-right:10px; font-size:20px; "><a href="<?php echo $contact_us->facebook_link?>"><i class="fab fa-facebook-f"></i></a></li>
											<li style="margin-right:10px; font-size:20px;"><a href="<?php echo $contact_us->twitter_link?>"><i class="fab fa-twitter"></i></a></li>
											<li style="margin-right:10px; font-size:20px;"><a href="<?php echo $contact_us->instagram_link?>"><i class="fab fa-instagram"></i></a></li>
											<li style="margin-right:10px; font-size:20px;"><a href="<?php echo $contact_us->linkedin_link?>"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div>
					
					
		</div>
			</div>
			<div class="ft-footer-copywrite-1 text-center">
				<span>Copyright @ 2023 THT.All Rights Reserved</span>
			</div>
		</div>
	</footer>
<!-- End of Footer section
	============================================= -->						

	<!-- For Js Library -->
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/popper.min.js.html"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/appear.js"></script>
	<script src="<?php echo base_url()?>assets/js/slick.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.filterizr.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.cssslider.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/rbtools.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/rs6.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/script.js"></script>
</body>
</html>		