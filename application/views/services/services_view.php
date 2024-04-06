<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Services</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="<?php echo site_url()?>/home/get_home">Home</a></li>
						<li>Services</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of Service page section
	============================================= -->
	<section id="ft-service-page" class="ft-service-page-section page-padding">
		<div class="container">
			<div class="ft-section-title-2 headline pera-content text-center">
				<span class="sub-title">Featured</span>
				<h2>Our Services</h2>
			</div>
				<div class="ft-service-page-items">
			<div class="row">
			
				<?php $x=1;
						foreach ($services as $row){;?>
		
							<div class="col-lg-3 col-md-6">
								<div class="ft-service-innerbox-2 position-relative">
									<div class="ft-service-img text-center">
										<img class="servicephoto" src="<?php echo base_url()?>/actrl/assets/images/services/<?php echo $row->service_pic?>">
									</div>
									<div class="ft-service-text position-relative headline">
<!--
										<div class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
											<i class="flaticon-train"></i>
										</div>
-->
										<h3><a href="#"><?php echo $row->service_head?></a></h3>
										<div class="ft-btn-2">
											<a href="<?php echo site_url('Services/get_one/') . $row->service_id?>">
												<i class="icon-first flaticon-right-arrow"></i>
												<span>Read More</span>
											</a>
										</div>
									</div>
							<div class="ft-service-serial position-absolute">
								<?php echo $x ?>
							</div>
						</div>
					</div>
					<?php $x++; }?>
				</div>
			</div>	
		</div>
	</section>
<!-- End of Service page section
	============================================= -->			

