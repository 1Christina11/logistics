	<!-- Start of Breadcrumb section
	============================================= -->

	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Our Service</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="<?php echo site_url()?>/Home/get_home">Home</a></li>
						<li>Our Service</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Service details section
	============================================= -->
	<section id="ft-service-details" class="ft-service-details-section page-padding">
		<div class="container">
			<div class="ft-service-details-content">
				<div class="row">
					<div class="col-lg-4">
						<div class="ft-service-sidebar">
							<div class="ft-service-sidebar-widget headline ul-li-block">
								<div class="service-category-widget">
									<h3 class="widget-title">All Service</h3>
									<ul>
										<?php foreach($services as $row) {?>
										<li><a href="<?php echo site_url()?>/Services/get_one/<?php echo $row->service_id?>"><?php echo $row->service_head?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
												<div class="ft-service-details-content-wrapper headline pera-content">
							<div class="ft-service-details-img-wrapper">
								<div class="row">
									<div class="col-md-6">
										<div class="ft-service-details-img">
											<img Width= "500px" height="500px"src="<?php echo base_url()?>/actrl/assets/images/services/<?php echo $one_service->service_pic?>">
										</div>
									</div>
								</div>
							</div>
							<div class="ft-service-details-text-wrapper">
								<h3><?php echo $one_service->service_head?></h3> 
								<p><?php echo $one_service->service_description?></p> 
<!--
								<h3>How It Works</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
								<div class="ft-video-content position-relative">
									<div class="ft-video-img-play-btn">
										<div class="ft-video-img">
											<img src="assets/img/bg/v-bg.jpg" alt="">
										</div>
										<div class="ft-video-play">
											<a class="d-flex justify-content-center align-items-center position-relative video_box" href="https://www.youtube.com/watch?v=C4jjFanHZo8">
												<i class="fas fa-play"></i>
												<span class="video_btn_border border_wrap-1"></span>
												<span class="video_btn_border border_wrap-2"></span>
											</a>
										</div>
									</div>
								</div>    	
-->
							</div>
													
													
													
						</div>
                         <div class="ft-service-more-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					 <a class="text-uppercase align-items-center justify-content-center d-flex" href="<?php echo site_url()?>/Quote/get_quote" target="_blank">Get a Quote</a>
				</div>    
					</div>
							
						</div>
				
				
							 
								
						 
					
					<div class="col-lg-4">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Contact Us</h3>
								<form action="<?php echo site_url('Contact_us/e_mail_send_code')?>" method="post" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="sname" placeholder="Your Name">
									</div>
									<div class="col-lg-6">
										<input type="email" name="e_mail" placeholder="Your Email">
									</div>
									<div class="col-lg-12">
										<input type="text" name="subject" placeholder="Subject">
									</div>
									
									<div class="col-lg-12">
										<input type="text" name="phone" placeholder="Your Phone">
									</div>
									
									<div class="col-lg-12">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<div class="col-lg-12">
										<button>Submit </button>
									</div>
								</div>

							</form>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Service details section
	============================================= -->	

