	<!-- top header wrapper start -->
	<div class="page_title_section">
		<div class="page_title_overlay"></div>
		<div class="page_header">
			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12 col-12 col-sm-12">

						<h1>Domex “X” Events</h1>
					</div>
					<div class="col-lg-12 col-md-12 col-12 col-sm-12">
						<div class="sub_title_section">
							<ul class="sub_title">
								<li> <a href="#"> Home  &nbsp; / &nbsp;</a> </li>
								<li>events </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- events wrapper start-->
    <div class="our_events_wrapper dm_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="<?php echo base_url()?>/assets/images/head3.png" alt="img">
                        <h2>upcoming events</h2>
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
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="category_content_wrapper event_box_wrapper">
                        <div class="category_wrapper_overlay">
                            <h3 class="party_prcie"> $ 350 </h3>
                            <figure>
                                <img src="<?php echo base_url()?>/assets/images/categ1.png" alt="img">
                            </figure>
                            <div class="category_btm_wrap">
                                <p> 29 Nov 2022 </p>
                                <h4><a href="#">Girls Birthday Party</a></h4>
                                <p>Mumbai, India</p>

                            </div>
                            <div class="category_hover_box">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
				<?php foreach($events as $row){?>
					<?php if($row->event_status == 'active'){?>
						<div class="col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="category_content_wrapper event_box_wrapper">
								<div class="category_wrapper_overlay">
									<h3 class="party_prcie"> <?php echo $row->event_price?> </h3>
									<figure>
										<img src="<?php echo base_url()?>/assets/images/<?php echo $row->event_photo?>categ2.png" alt="img">
									</figure>
									<div class="category_btm_wrap">
										<p> <?php echo $row->event_date?> </p>
										<h4><a href="#"><?php echo $row->hoster_name?></a></h4>
<!--                                <p>Mumbai, India</p>-->
									</div>
									<div class="category_hover_box">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php }
				}?>
                <div class="col-lg-12 col-md-12">
                    <div class="blog_pagination_section dm_cover">
                        <ul>
                            <li>
                                <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li class="third_pagger"><a href="#">2</a>
                            </li>
                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">9</a>
                            </li>

                            <li>
                                <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events wrapper end-->
    <!-- events wrapper start-->
    <div class="upcoming_wrapper dm_cover">
        <div class="club_video_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="<?php echo base_url()?>/assets/images/head3.png" alt="img">
                        <h2>past EVENTS</h2>
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
				<?php foreach($events as $row){?>
					<?php if($row->event_status == 'inactive'){?>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
							<div class="category_content_wrapper upcoming_event_content_box past_event_wrappr">
								<div class="category_wrapper_overlay">
									<h3 class="party_prcie"> <?php echo $row->event_price?> </h3>
									<figure>
										<img src="<?php echo base_url()?>/assets/images/<?php echo $row->event_photo?>event1.png" alt="img">
									</figure>
									<div class="category_btm_wrap">
										<p> <?php echo $row->event_date?> </p>
										<h4><a href="#"><?php echo $row->hoster_name?></a></h4>
<!--										<p>Mumbai, India</p>-->
									</div>
									<div class="category_hover_box">
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php }
				}?>
                <div class="col-lg-12 col-md-12">
                    <div class="blog_pagination_section dm_cover">
                        <ul>
                            <li>
                                <a href="#" class="prev"> <i class="flaticon-left-arrow"></i> </a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li class="third_pagger"><a href="#">2</a>
                            </li>
                            <li class="d-block d-sm-block d-md-block d-lg-block"><a href="#">3</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block d-md-block d-lg-block"><a href="#">9</a>
                            </li>

                            <li>
                                <a href="#" class="next"> <i class="flaticon-right-arrow"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events wrapper end-->