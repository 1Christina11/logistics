<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>StudyPress | Education & Courses HTML Template</title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo base_url()?>assets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo base_url()?>assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo base_url()?>assets/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo base_url()?>assets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo base_url()?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="<?php echo base_url()?>assets/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo base_url()?>assets/js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="<?php echo base_url()?>assets/images/bg/bg1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="<?php echo base_url()?>assets/images/logo-wide.png"></a>
                </div>
                <div class="bg-lightest border-1px p-30 mb-0">
                  <h3 class="text-theme-colored mt-0 pt-5"> Apply Now</h3>
                  <hr>
                  <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                  <form id="job_apply_form" name="job_apply_form" action="includes/job.php.html" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Name <small>*</small></label>
                          <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Email <small>*</small></label>
                          <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                        </div>
                      </div>
                    </div>
                    <div class="row">               
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Sex <small>*</small></label>
                          <select name="form_sex" class="form-control required">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Job Post <small>*</small></label>
                          <select name="form_post" class="form-control required">
                            <option value="Finance Manager">Finance Manager</option>
                            <option value="Area Manager">Area Manager</option>
                            <option value="Country Manager">Country Manager</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Message <small>*</small></label>
                      <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                    </div>
                    <div class="form-group">
                      <label>C/V Upload</label>
                      <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                      <small>Maximum upload file size: 12 MB</small>
                    </div>
                    <div class="form-group">
                      <input name="form_botcheck" class="form-control" type="hidden" value="" />
                      <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                    </div>
                  </form>
                  <!-- Job Form Validation-->
                  <script type="text/javascript">
                    $("#job_apply_form").validate({
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
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222">
    <div class="container p-20">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">Copyright &copy;2016 ThemeMascot. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

</body>
</html>