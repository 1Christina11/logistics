<head>
	<meta charset="UTF-8">
	<title>Home Page 1</title>
	<meta name="description" content="FasTrans - Logistics & Delivery Company HTML template">
	<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo/logo4" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/video.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/rs6.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Contact</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of contact page section
	============================================= -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							<div class="ft-section-title-2 headline pera-content">
								<span class="sub-title">Contact Us</span>
									<h2>Get in Touch And We’ll  Help
										Your Business
								</h2>
							</div>
							<div class="ft-contact-page-contact-info">
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Office address</h3>
										<p><?php echo $contact->address?></p>
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Telephone number</h3>
										<p><?php echo $contact->tele_num?></p>

									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Mail address</h3>
										<p><?php echo $contact->e_mail?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Contact Us</h3>
<form action="<?php echo site_url('Contact_us/e_mail_send_code')?>" method="post" enctype="multipart/form-data" >

								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="name" placeholder="Your Name">
									</div>
									<div class="col-lg-6">
										<input type="email" name="email" placeholder="Your Email">
									</div>
									<div class="col-lg-12">
										<input type="text" name="subject" placeholder="Subject">
									</div>
									
									<div class="col-lg-12">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<div class="col-lg-12">
										<button type="submit">Book an apointment</a>
										</button>
										 
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of contact page section
	============================================= -->	
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/popper.min.js.html"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.ui.touch-punch.min.js"></script>
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

