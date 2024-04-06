			 <div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="text-center">
							<h4 class="sub-title"><?php if($msg!=NULL && isset($msg)) echo str_replace('%20', ' ', $msg)?></h4>
						</div>
					</div>
				</div>
			 </div>
    <!-- Section: home -->
    <section id="home" class="divider fullscreen layer-overlay" data-bg-img="<?php echo base_url() ?>academyactrl/assets/images/bg/bg5.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-40"><a href="#" class=""><img alt="" src="<?php echo base_url() ?>academyactrl/assets/images/logo-wide-white.png"></a></div>
                <div class="widget bg-lightest border-1px p-20">
                  <div class="widget border-1px p-20">
                    <h5 class="widget-title line-bottom">Write Your Review</h5>
                    <form id="quick_contact_form" name="quick_contact_form" class="quick-contact-form" action="<?php echo site_url('Courses/write_review/' . $this->session->userdata('member_id') )?>" method="post">
                      <div class="form-group">
                        <textarea name="review" class="form-control" required="" placeholder="Enter Review" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
						 <input name="courses_id" class="form-control" type="hidden" value="8" />
                        <button type="submit" class="btn btn-dark btn-theme-colored btn-sm mt-0" data-loading-text="Please wait...">Send Review</button>
                      </div>
                    </form>

                    <!-- Quick Contact Form Validation-->
<!--
                    <script type="text/javascript">
                      $("#quick_contact_form").validate({
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
-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

