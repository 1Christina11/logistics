	<!-- top header wrapper start -->
	<div class="page_title_section">
		<div class="page_title_overlay"></div>
		<div class="page_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12 col-sm-12">
						<h1> our gallery</h1>
					</div>
					<div class="col-lg-12 col-md-12 col-12 col-sm-12">
						<div class="sub_title_section">
							<ul class="sub_title">
								<li> <a href="/#!"> Home  &nbsp; / &nbsp;</a> </li>
								<li>gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- top header wrapper end -->
	<!-- gallery wrapper start-->
    <div class="gallery_wrapper portfolio_grid dm_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="<?php echo base_url()?>/assets/images/head4.png" alt="img">
                        <h2>our gallery</h2>
                        <div class="bars bars2">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                            <br> bibendum auctor, nisi elit consequat.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="row portfoli_inner pi_3">

                        <!-- Items -->
						<?php //foreach($pictures as $row){?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 gallery_2 dribbble ux_ui">
                            <div class="portfolio_item">
                                <img src="<?php echo base_url()?>/assets/images/<?php //echo $row->gallery_picture?>pic1.png" alt="">
                                <div class="portfolio_hover">

                                    <div class="zoom_popup">
                                        <a class="img-link" href="<?php echo base_url()?>/assets/images/pic1.png"> <i class="flaticon-add-button"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php //}?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery wrapper end-->
	<!-- newsletter wrapper start-->
	<?php $this->load->view('section_news_letters')?>
	<!-- newsletter wrapper end-->
