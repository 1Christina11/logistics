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
      <div clas="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> 
  
  <!-- start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="divider parallax fullscreen layer-overlay overlay-white-9" data-bg-img="<?php echo base_url()?>assets/images/bg/bg1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="<?php echo base_url()?>assets/images/logo-wide.png"></a></div>
                <h4 class="text-theme-colored mt-0 pt-5">  set new password</h4>
                <form name="login-form" class="form-transparent clearfix" action="<?php echo site_url('Users/update_pass')?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $user->users_id?>"/>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password"> new Password</label>
                      <input id="form_password" name="form_password" class="form-control" type="text">
                    </div>
                  </div>
		   	   <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password"> confirm your Password</label>
                      <input id="form_password" name="form_password" class="form-control" type="text">
                    </div>
                  </div>

                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">save </button>
                  </div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content --> 

<!-- Footer -->
  <footer id="footer" class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright ©2016 KodeSolution. All Rights Reserved</p>
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