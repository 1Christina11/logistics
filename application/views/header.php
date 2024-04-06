<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ; ?> </title>
	<meta name="description" content="Logistics & Delivery Company">
	<meta name="keywords" content="cargo, clean, contractor, corporate, freight, industry, localization, logistics, page builder, shipment, transport, transportation, truck, trucking">
	<meta name="author" content="Themexriver">
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/imgs/logo/ficon.png.html" type="image/x-icon">
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
	<style type="text/css">
		.servicephoto{
			
			width: 370px !important;
			height: 290px !important;
		}
	</style>
</head>
<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>


<!-- Start of header section
	============================================= -->
	<header id="ft-header" class="ft-header-section header-style-new-two">
		<div class="ft-header-top">
			<div class="container">
				<div class="ft-header-top-content d-flex justify-content-between align-items-center">
					<div class="ft-header-top-cta ul-li">
						<ul>
							<li>
								<i  class="fal fa-envelope"></i><a href="mailto:<?php echo $contact_us->e_mail?>"><?php echo $contact_us->e_mail?></a></li>
							<li><i class="fal fa-map-marker-alt"></i><?php echo $contact_us->address?></li>
						</ul>
					</div>
					
					<div class="ft-footer-social ul-li">
										<ul>
											<li><a href="<?php echo $contact_us->facebook_link?>"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="<?php echo $contact_us->twitter_link?>"><i class="fab fa-twitter"></i></a></li>
											<li><a href="<?php echo $contact_us->instagram_link?>"><i class="fab fa-instagram"></i></a></li>
											<li><a href="<?php echo $contact_us->linkedin_link?>"><i class="fab fa-linkedin"></i></a></li>
										</ul>
									</div>
					<div class="ft-header-cta-info d-flex">
						<div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
							<i class="flaticon-call"></i>
						</div>
						<div class="ft-header-cta-text headline pera-content">
							<p>Get In Touch</p>
							<h3><a href="tel:<?php echo $contact_us->tele_num?>"><?php echo $contact_us->tele_num?></a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ft-header-main-menu-wrapper">
			<div class="container">
				<div class="ft-header-main-menu-area position-relative">
					<div class="ft-header-main-menu d-flex align-items-center justify-content-between position-relative">
						<div class="ft-site-logo-area">
							<div class="ft-site-logo position-relative">
								<a href="<?php echo site_url()?>/Home/get_home"><img src="<?php echo base_url()?>assets/logos/3.png" alt=""></a>
							</div>
						</div>
						<div class="ft-main-navigation-area">
							<nav class="ft-main-navigation clearfix ul-li">
								<ul id="ft-main-nav" class="nav navbar-nav clearfix">
									<li><a href="<?php echo site_url()?>/Home/get_home">Home</a></li>
									<li><a href="<?php echo site_url()?>/Services/index">ٍShippers</a>
									<li class="dropdown">
										<a>Drive with us</a>
										<ul class="dropdown-menu clearfix">
											<li><a href="<?php echo site_url('Carriers_drivers/test')?>">Owner Operator</a></li>
											<li><a href="<?php echo site_url()?>/Carriers_drivers/thetest">CDL driver</a></li>
										</ul>
									</li>
									<li><a href="<?php echo site_url()?>/Services/index">Service</a></li>
									<li><a href="<?php echo site_url()?>/Contact_us/get_contact_us">Contact Us</a></li>
								</ul>
							</nav>
						</div>
						<div class="ft-header-cta-btn">
							<a class="d-flex justify-content-center align-items-center" href="<?php echo site_url()?>/Quote/get_quote">Get A Quote</a>
						</div>
					</div>
					<div class="mobile_menu position-relative">
						<div class="mobile_menu_button open_mobile_menu">
							<i class="fal fa-bars"></i>
						</div>
						<div class="mobile_menu_wrap">
						  <div class="mobile_menu_overlay open_mobile_menu">
							<div class="mobile_menu_content">
								<div class="mobile_menu_close open_mobile_menu">
									<i class="fal fa-times"></i>
								</div>
								<div class="m-brand-logo">
									<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/imgs/logo/logo4.png.html" alt=""></a>
								</div>
								<nav class="mobile-main-navigation  clearfix ul-li">
									<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
										<li><a href="<?php echo site_url()?>/Home/get_home">Home</a></li>
										<li><a href="<?php echo site_url()?>/Services/index">ٍShippers</a></li>
										<li class="dropdown">
										<a>Drive with us</a>
                                               <ul class="dropdown-menu clearfix">
											<li><a href="<?php echo site_url('Carriers_drivers/test')?>">Owner Operator</a></li>
											<li><a href="<?php echo site_url()?>/Carriers_drivers/thetest">CDL driver</a></li>
									           </ul>
									    </li>
									<li><a href="<?php echo site_url()?>/Services/index">Service</a></li>
									<li><a href="<?php echo site_url()?>/Contact_us/get_contact_us">Contact Us</a></li>


											
										<li><a class="d-flex justify-content-center align-items-center" href="<?php echo site_url()?>/Quote/get_quote">Get A Quote</a></li>
									</ul>
								</nav>
							</div>
						  </div>
						</div>
						<!-- /Mobile-Menu -->
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- End of header section
	============================================= -->