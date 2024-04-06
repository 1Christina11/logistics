    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php if(isset($msg))echo $msg?>
    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img height="200px" src="<?php echo base_url()?>/academyactrl/assets/images/courses/<?php echo $courses->c_poster?>" alt="course image">
              <h3 class="text-theme-colored line-bottom text-theme-colored"><?php echo $courses->c_name?></h3>
              <h4 class="mt-0"><span class="text-theme-color-2">Price :</span><?php echo $courses->c_price?></h4>
                <ul class="review_text list-inline">
                  <li>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                  </li>
                </ul>
              <h5><em><?php echo $courses->c_description ?></em></h5>
			  <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 mt-0 p-25 pr-15 pl-15" href="<?php echo site_url('Courses/subscribe/' . $courses->c_category_id . '/' . $msg = NULL)?>">Subscribe</a>
			  <h4 class="line-bottom mt-20 mb-20 text-theme-colored">Course Time</h4>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="small">
                  <table class="table table-bordered"> 
                    <tr>
                      <td class="text-center font-16 font-weight-600 bg-theme-color-2 text-white" colspan="4">Course <?php echo $courses->c_name ?> </td>
                    </tr>
                    <tr> <th>Class time</th> <th>Course Duration</th> </tr>
                    <tbody> 
                      <tr> <td>45 minutes</td> <td><?php echo $courses->c_duration ?></td></tr>
                    </tbody> 
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses <span class="text-theme-color-2">List</span></h4>
                <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li class="active"><a href="page-courses-accounting-technologies.html">Accounting Technologies</a></li>
                    <li><a href="page-courses-chemical-engineering.html">Chemical Engineering</a></li>
                    <li><a href="page-courses-computer-technologies.html">Computer Technologies</a></li>
                    <li><a href="page-courses-development-studies.html">Development Studies</a></li>
                    <li><a href="page-courses-electrical-electronic.html">Electrical & Electronic</a></li>
                    <li><a href="page-courses-modern-languages.html">Modern Languages</a></li>
                    <li><a href="page-courses-modern-technologies.html">Modern Technologies</a></li>
                    <li><a href="page-courses-software-engineering.html">Software Engineering</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Opening <span class="text-theme-color-2">Hours</span></h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> Mon - Tues :  </span>
                      <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Wednes - Thurs :</span>
                      <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Fri : </span>
                      <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right"> Colosed </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Quick <span class="text-theme-color-2">Contact</span></h4>
                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php.html" method="post">
                  <div class="form-group">
                    <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-theme-colored btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

                <!-- Quick Contact Form Validation-->
                <script type="text/javascript">
                  $("#quick_contact_form_sidebar").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
              </div>
            </div>
          </div>
		  <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg2.jpg" data-parallax-ratio="0.7" style="background-image: url(&quot;images/bg/bg2.jpg&quot;); background-position: 50% -156px;">
  		  <div class="container">
			  <div class="row">
	  		  <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
				  <div class="funfact text-center">
		  		  <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
		  		  <h2 data-animation-duration="2000" data-value="5248" class="animate-number text-white mt-0 font-38 font-weight-500 appeared">5,248</h2>
		  		  <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
				  </div>
	  		  </div>
	  		  <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
				  <div class="funfact text-center">
		  		  <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
		  		  <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white mt-0 font-38 font-weight-500 appeared">675</h2>
		  		  <h5 class="text-white text-uppercase mb-0">Our Courses</h5>
				  </div>
	  		  </div>
	  		  <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
				  <div class="funfact text-center">
		  		  <i class="pe-7s-users mt-5 text-theme-color-2"></i>
		  		  <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white mt-0 font-38 font-weight-500 appeared">248</h2>
		  		  <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
				  </div>
	  		  </div>
	  		  <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
				  <div class="funfact text-center">
		  		  <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
		  		  <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white mt-0 font-38 font-weight-500 appeared">24</h2>
		  		  <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
				  </div>
	  		  </div>
			  </div>
  		  </div>
		  </section>
		  <div class="container pb-50">
           <div class="section-title">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Testimonials<span class="font-30 text-theme-color-2">.</span></h2>
              </div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-12 mb-10">
              <div class="owl-carousel-2col boxed owl-carousel owl-theme owl-loaded" data-dots="true">
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1102.5px, 0px, 0px); transition: all 0.25s ease 0s; width: 2940px;"><div class="owl-item cloned" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/3.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item active" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/3.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div><div class="owl-item cloned" style="width: 352.5px; margin-right: 15px;"><div class="item">
                  <div class="testimonial pt-10">
                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                      <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                    </div>
                    <div class="ml-100 ">
                      <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                      <p class="author mt-20">- <span class="text-theme-color-2">Catherine Grace,</span> <small><em class="text-gray-lightgray">CEO apple.inc</em></small></p>
                    </div>
                  </div>
                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div> 
            </div>
           </div>
          </div>
	   </div>
      </div>
    </section>