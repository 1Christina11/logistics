		<!-- events wrapper start-->
		<div class="upcoming_wrapper dm_cover">
			<div class="club_video_overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
						<div class="dmx_heading_wraper">
							<img src="<?php echo base_url()?>/assets/images/head3.png" alt="img">
							<h2>Special EVENTS</h2>
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
		<!-- top header wrapper start -->
        <div class="page_title_section">
            <div class="page_title_overlay"></div>
            <div class="page_header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                            <h1>reservation</h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="sub_title_section">
                                <ul class="sub_title">
                                    <li> <a href="#"> Home  &nbsp; / &nbsp;</a> </li>
                                    <li> reservation </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- top header wrapper end -->
    <!-- navi wrapper End -->
    <!-- reservation wrapper start -->
    <div class="reservation_wrapper dm_cover">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb1.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw1.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb2.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw2.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb3.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw3.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb4.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw4.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb5.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw5.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb6.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw6.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb7.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw7.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="lr_tb_box1_wrapper">
                        <img src="<?php echo base_url()?>assets/images/tb8.png" alt="table_img">
                        <img src="<?php echo base_url()?>assets/images/tbw8.png" class="img-top" alt="table_img">
                        <div class="lr_tb_img_box_overlay"></div>
                        <div class="lr_tb_overlay_btn_wrapper">
                            <ul>
                                <li><a href="#">Book Table</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reservation wrapper end -->
    <!-- pricing  wrapper start-->
    <div class="pricing_wrapper dm_cover">
        <div class="club_video_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="<?php echo base_url()?>assets/images/head10.png" alt="img">
                        <h2> night club prices</h2>
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
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">

                    <div class="pricing_wrapper_box dm_cover">
                        <div class="pricing_wrapper_images dm_cover">
                            <img src="<?php echo base_url()?>assets/images/price1.png" alt="img" class="img-responsive">
                            <div class="price_tag">
                                <p>$ 9</p>
                            </div>
                        </div>
                        <div class="pricing_tab_content dm_cover">
                            <h1>Single Person Entry Pass</h1>
                            <p>Drinks Available
                                <br> Dance Floor For Dance
                                <br> Selfie Zone
                                <br> lounge Area
                                <br>
                            </p>
                        </div>
                        <div class="hs_btn_wrapper pricing_btn dm_cover">
                            <ul>

                                <li> <a href="<?php echo site_url('Booking/book_now')?>">book now</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">

                    <div class="pricing_wrapper_box dm_cover">
                        <div class="pricing_wrapper_images dm_cover">
                            <img src="<?php echo base_url()?>assets/images/price2.png" alt="img" class="img-responsive">
                            <div class="price_tag">
                                <p>$ 19</p>
                            </div>
                        </div>
                        <div class="pricing_tab_content dm_cover">
                            <h1>couple Entry Pass</h1>
                            <p>Drinks Available
                                <br> Dance Floor For Dance
                                <br> Selfie Zone
                                <br> lounge Area
                                <br>
                            </p>
                        </div>
                        <div class="hs_btn_wrapper pricing_btn dm_cover">
                            <ul>

                                <li> <a href="<?php echo site_url('Booking/book_now')?>">book now</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">

                    <div class="pricing_wrapper_box dm_cover">
                        <div class="pricing_wrapper_images dm_cover">
                            <img src="<?php echo base_url()?>assets/images/price3.png" alt="img" class="img-responsive">
                            <div class="price_tag">
                                <p>$ 29</p>
                            </div>
                        </div>
                        <div class="pricing_tab_content dm_cover">
                            <h1>group Entry Pass</h1>
                            <p>Drinks Available
                                <br> Dance Floor For Dance
                                <br> Selfie Zone
                                <br> lounge Area
                                <br>
                            </p>
                        </div>
                        <div class="hs_btn_wrapper pricing_btn dm_cover">
                            <ul>

                                <li> <a href="<?php echo site_url('Booking/book_now')?>">book now</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- pricing  wrapper end-->
    <!-- booking table wrapper start-->
    <div class="booking_table_wrapper dm_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="<?php echo base_url()?>assets/images/head7.png" alt="img">
                        <h2>booking your table</h2>
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
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="booking_form_field">
                        <form action="<?php echo site_url('Booking/book_now')?>" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-pos form_field">
                                        <div class="form-group i-name">

                                            <input required type="text" class="form-control require" name="your_name"  placeholder="Your Name*">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-e form_field">
                                        <div class="form-group i-email">
                                            <label class="sr-only">Email </label>
                                            <input required type="email" class="form-control require" name="email"  placeholder="Your Email *" data-valid="email" data-error="Email should be valid.">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="form-s form_field">
                                        <div class="form-group i-subject">

                                            <input required type="date" class="form-control" name="date" placeholder="date">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="form-s form_field">
                                        <div class="form-group i-subject">

                                            <input required type="time" class="form-control" name="time" placeholder="time">
                                            <i class="far fa-clock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-m form_field">
                                        <div class="form-group i-name">

                                            <input required type="text" class="form-control" name="contact_no" placeholder="Number Of People">
                                            <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="tb_es_btn_div">
                                        <div class="response"></div>
                                        <div class="tb_es_btn_wrapper">
                                            <button type="submit" class="submitForm">book now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map_wrapper">
        <div id="map"></div>
    </div>
    <!-- booking table wrapper end-->
    <!-- newsletter wrapper start-->
	<?php $this->load->view('section_news_letters')?>
    <!-- newsletter wrapper end-->