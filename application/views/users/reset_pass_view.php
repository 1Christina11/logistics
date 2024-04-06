<!DOCTYPE html>
<html lang="en">

<head>

	<title></title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	
	


</head>
<body>
    
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form action="<?php echo site_url('Users/update_pass');?>" method="post">
                        
						<img src="<?php echo base_url()?>assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Enter your new password</h4>
                        <input type="hidden" name="id" value="<?php echo $user->id?>"/>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password" name="password" placeholder="" required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Confirm Password</label>
							<input type="password" class="form-control" id="Password" name="confirm_password" placeholder="" required>
						</div>
						<button class="btn btn-block btn-primary mb-4">Update</button>
						<p class="mb-0 text-muted">
                            <a href="<?php echo site_url()?>/Users/login" class="f-w-400">Login?</a>
                            <a href="<?php echo site_url()?>/Users/signup" class="f-w-400">Signup</a>
                        </p>
                            
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo base_url()?>assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/ripple.js"></script>
<script src="<?php echo base_url()?>assets/js/pcoded.min.js"></script>

</body>
</html>