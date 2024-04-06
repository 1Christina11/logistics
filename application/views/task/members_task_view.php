    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-1" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">Event Details 2</h3>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section class="inner-header divider parallax">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="mt-0" style="text-align: center">Event Description</h3>
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Registration Form -->
    <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="<?php echo base_url()?>assets/images/bg/bg1.jpg">
      <div class="container-fluid">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h3 class="title text-theme-colored">Registration Form</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form id="booking-form" name="booking-form" action="includes/event-register.php.html" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Name" name="register_name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Email" name="register_email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Phone" name="register_phone" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Ticket types</label>
                    <select name="ticket_type" class="form-control">
                      <option>One Person</option>
                      <option>Two Person</option>
                      <option>Family Pack</option>
                      <option>Premium</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Event types</label>
                    <select name="event_type" class="form-control">
                      <option>Event 1</option>
                      <option>Event 2</option>
                      <option>Event 3</option>
                      <option>All package</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group text-center">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button data-loading-text="Please wait..." class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10" type="submit">Register now</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Job Form Validation-->
            <script type="text/javascript">
              $("#booking-form").validate({
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
    </section>