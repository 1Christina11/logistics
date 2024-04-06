<!DOCTYPE html>

<html lang="en"><head>
    <title>Logestics</title>
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
<!--    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.jpg" type="image/x-icon">-->

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<!--    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/layout-rtl.css">-->
    <!-- Multiple-select -->
	
<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>

	

<!--
<style>
a!richTextDisplayField(
  value: {
    a!richTextItem(
      text: {
        a!richTextIcon(
          icon: "copyright"
        ),
        " Copyright"
      },
      link: a!dynamicLink(),
      linkStyle: "STANDALONE"
    ),
    char(10),
    a!richTextItem(
      text: {
        a!richTextIcon(
          icon: "check-square-o"
        ),
        " My Open Requests"
      },
      link: a!dynamicLink(),
      linkStyle: "STANDALONE"
    ),
    char(10),
    a!richTextItem(
      text: {
        a!richTextIcon(
          icon: "file-text-o"
        ),
        " My Documents"
      },
      link: a!dynamicLink(),
      linkStyle: "STANDALONE"
    )
  }
)
</style>
-->

	
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
    
    
    
	<!-- [ navigation menu ] start -->
    <?php $this->load->view('menu')?>
	<!-- [ navigation menu ] end -->
    
    
    
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->

						
					</a>
<!--
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
-->
				</div>
				<div class="collapse navbar-collapse">

							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">