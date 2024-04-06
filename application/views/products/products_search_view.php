<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
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
    <link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/layout-rtl.css">
    
    

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
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo base_url();?>/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
							<li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
						<ul class="pcoded-submenu">
							<li><a href="index.html">Default</a></li>
							<li><a href="dashboard-sale.html">Sales</a></li>
							<li><a href="dashboard-crm.html">CRM</a></li>
							<li><a href="dashboard-analytics.html">Analytics</a></li>
							<li><a href="dashboard-project.html">Project</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
						<ul class="pcoded-submenu">
							<li class="pcoded-hasmenu"><a href="#!">Vertical</a>
								<ul class="pcoded-submenu">
									<li><a href="layout-static.html" target="_blank">Static</a></li>
									<li><a href="layout-fixed.html" target="_blank">Fixed</a></li>
									<li><a href="layout-menu-fixed.html" target="_blank">Navbar fixed</a></li>
									<li><a href="layout-mini-menu.html" target="_blank">Collapse menu</a></li>
									<li><a href="layout-rtl.html" target="_blank">Vertical RTL</a></li>
								</ul>
							</li>
							<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
							<li><a href="layout-horizontal-2.html" target="_blank">Horizontal v2</a></li>
							<li><a href="layout-horizontal-rtl.html" target="_blank">Horizontal RTL</a></li>
							<li><a href="layout-box.html" target="_blank">Box layout</a></li>
							<li><a href="layout-light.html" target="_blank">Navbar dark</a></li>
							<li><a href="layout-dark.html" target="_blank">Dark layout <span class="pcoded-badge badge badge-danger">Hot</span></a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge badge badge-success">100+</span></a>
						<ul class="pcoded-submenu">
							<li><a href="widget-statistic.html">Statistic</a></li>
							<li><a href="widget-data.html">Data</a></li>
							<li><a href="widget-chart.html">Chart</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">User</span></a>
						<ul class="pcoded-submenu">
							<li><a href="user-profile.html">Profile</a></li>
							<li><a href="user-card.html">User Card</a></li>
							<li><a href="user-list.html">User List</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Admin Panel <span class="pcoded-badge badge badge-danger">NEW</span><span class="pcoded-badge badge badge-warning">HOT</span></label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-activity"></i></span><span class="pcoded-mtext">Hospital</span></a>
						<ul class="pcoded-submenu">
							<li><a href="hospital-dashboard.html">Dashboard</a></li>
							<li><a href="hospital-department.html">Department</a></li>
							<li><a href="hospital-doctor.html">Doctor</a></li>
							<li><a href="hospital-patient.html">Patient</a></li>
							<li><a href="hospital-nurse.html">Nurse</a></li>
							<li><a href="hospital-pharmacist.html">Pharmacist</a></li>
							<li><a href="hospital-laboratorie.html">Laboratorie</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span class="pcoded-mtext">Membership</span></a>
						<ul class="pcoded-submenu">
							<li><a href="member-dashboard.html">Dashboard</a></li>
							<li><a href="member-mail-template.html">Email templates</a></li>
							<li><a href="member-countries.html">Country</a></li>
							<li><a href="member-coupons.html">Coupons</a></li>
							<li><a href="member-newsletter.html">Newsletter</a></li>
							<li><a href="member-user.html">User</a></li>
							<li><a href="member-membership.html">Membership</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-life-buoy"></i></span><span class="pcoded-mtext">Helpdesk</span></a>
						<ul class="pcoded-submenu">
							<li><a href="help-dashboard.html">Helpdesk dashboard</a></li>
							<li><a href="help-create-ticket.html">Create ticket</a></li>
							<li><a href="help-ticket.html">ticket list</a></li>
							<li><a href="help-ticket-details.html">ticket Details</a></li>
							<li><a href="help-customer.html">Customer</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">School</span></a>
						<ul class="pcoded-submenu">
							<li><a href="school-dashboard.html">Dashboard</a></li>
							<li><a href="school-student.html">Student</a></li>
							<li><a href="school-parents.html">Parents</a></li>
							<li><a href="school-teacher.html">Teacher</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link" data-toggle="tooltip" title="Student Information System"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">SIS</span></a>
						<ul class="pcoded-submenu">
							<li><a href="sis-dashboard.html">Dashboard</a></li>
							<li><a href="sis-leave.html">Leave</a></li>
							<li><a href="sis-evaluation.html">Evaluation</a></li>
							<li><a href="sis-event.html">Event</a></li>
							<li><a href="sis-circular.html">Circular</a></li>
							<li><a href="sis-course.html">Course</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-target"></i></span><span class="pcoded-mtext">Crypto</span></a>
						<ul class="pcoded-submenu">
							<li><a href="crypto-dashboard.html">Dashboard</a></li>
							<li><a href="crypto-exchange.html">Exchange</a></li>
							<li><a href="crypto-wallet.html">Wallet</a></li>
							<li><a href="crypto-transactions.html">Transactions</a></li>
							<li><a href="crypto-history.html">History</a></li>
							<li><a href="crypto-trading.html">Trading</a></li>
							<li><a href="crypto-initial-coin.html">Initial coin</a></li>
							<li><a href="crypto-ico-listing.html">Ico listing</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span><span class="pcoded-mtext">E-Commerce</span></a>
						<ul class="pcoded-submenu">
							<li><a href="ecom-product.html">Product</a></li>
							<li><a href="ecom-product-details.html">Product details</a></li>
							<li><a href="ecom-order.html">Order</a></li>
							<li><a href="ecom-checkout.html">Checkout</a></li>
							<li><a href="ecom-cart.html">Shopping Cart</a></li>
							<li><a href="ecom-customers.html">Customers</a></li>
							<li><a href="ecom-sellers.html">Sellers</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
						<ul class="pcoded-submenu">
							<li><a href="bc_alert.html">Alert</a></li>
							<li><a href="bc_button.html">Button</a></li>
							<li><a href="bc_badges.html">Badges</a></li>
							<li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
							<li><a href="bc_card.html">Cards</a></li>
							<li><a href="bc_collapse.html">Collapse</a></li>
							<li><a href="bc_carousel.html">Carousel</a></li>
							<li><a href="bc_grid.html">Grid system</a></li>
							<li><a href="bc_progress.html">Progress</a></li>
							<li><a href="bc_modal.html">Modal</a></li>
							<li><a href="bc_spinner.html">Spinner</a></li>
							<li><a href="bc_tabs.html">Tabs & pills</a></li>
							<li><a href="bc_typography.html">Typography</a></li>
							<li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
							<li><a href="bc_toasts.html">Toasts</a></li>
							<li><a href="bc_extra.html">Other</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span class="pcoded-mtext">Advance</span></a>
						<ul class="pcoded-submenu">
							<li><a href="ac_alert.html">Sweet alert</a></li>
							<li><a href="ac-datepicker-componant.html">Datepicker</a></li>
							<li><a href="ac_lightbox.html">Lightbox</a></li>
							<li><a href="ac_notification.html">Notification</a></li>
							<li><a href="ac_pnotify.html">Pnotify</a></li>
							<li><a href="ac_rating.html">Rating</a></li>
							<li><a href="ac_rangeslider.html">Rangeslider</a></li>
							<li><a href="ac_syntax_highlighter.html">Syntax highlighter</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="animation.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">Animations</span></a></li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-feather"></i></span><span class="pcoded-mtext">Icons</span></a>
						<ul class="pcoded-submenu">
							<li><a href="icon-feather.html">Feather<span class="pcoded-badge badge badge-danger">NEW</span></a></li>
							<li><a href="icon-fontawsome.html">Font Awesome 5<span class="pcoded-badge badge badge-primary">1000+</span></a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Forms</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
						<ul class="pcoded-submenu">
							<li><a href="form_elements.html">Form elements</a></li>
							<li><a href="form-elements-advance.html">Form advance</a></li>
							<li><a href="form-validation.html">Form validation</a></li>
							<li><a href="form-masking.html">Form masking</a></li>
							<li><a href="form-wizard.html">Form wizard</a></li>
							<li><a href="form-picker.html">Form picker</a></li>
							<li><a href="form-select.html">Form select</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>table</label>
					 	</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
						<ul class="pcoded-submenu">
							<li><a href="tbl_bootstrap.html">Basic table</a></li>
							<li><a href="tbl_sizing.html">Sizing table</a></li>
							<li><a href="tbl_border.html">Border table</a></li>
							<li><a href="tbl_styling.html">Styling table</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Data table</span></a>
						<ul class="pcoded-submenu">
							<li><a href="dt_basic.html">Basic initialization</a></li>
							<li><a href="dt_advance.html">Advance initialization</a></li>
							<li><a href="dt_styling.html">Styling</a></li>
							<li><a href="dt_api.html">API</a></li>
							<li><a href="dt_plugin.html">Plug-in</a></li>
							<li><a href="dt_sources.html">Data sources</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">DT extensions</span></a>
						<ul class="pcoded-submenu">
							<li><a href="dt_ext_autofill.html">Autofill</a></li>
							<li class="nav-item pcoded-hasmenu">
								<a href="#!" class="nav-link "><span class="pcoded-mtext">Button</span></a>
								<ul class="pcoded-submenu">
									<li><a href="dt_ext_basic_buttons.html">Basic button</a></li>
									<li><a href="dt_ext_export_buttons.html">Data export</a></li>
								</ul>
							</li>
							<li><a href="dt_ext_col_reorder.html">Col reorder</a></li>
							<li><a href="dt_ext_fixed_columns.html">Fixed columns</a></li>
							<li><a href="dt_ext_fixed_header.html">Fixed header</a></li>
							<li><a href="dt_ext_key_table.html">Key table</a></li>
							<li><a href="dt_ext_responsive.html">Responsive</a></li>
							<li><a href="dt_ext_row_reorder.html">Row reorder</a></li>
							<li><a href="dt_ext_scroller.html">Scroller</a></li>
							<li><a href="dt_ext_select.html">Select table</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Chart & Maps</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
						<ul class="pcoded-submenu">
							<li><a href="chart-apex.html">Apex Chart</a></li>
							<li><a href="chart-chartjs.html">Chart js</a></li>
							<li><a href="chart-highchart.html">Highchart</a></li>
							<li><a href="chart-knob.html">Knob</a></li>
							<li><a href="chart-peity.html">Peity</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
						<ul class="pcoded-submenu">
							<li><a href="map-google.html">Google</a></li>
							<li><a href="map-api.html">Gmap search API</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
						<ul class="pcoded-submenu">
							<li><a href="auth-signup.html" target="_blank">Sign up</a></li>
							<li><a href="auth-signup-img-side.html" target="_blank">Sign up v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
							<li><a href="auth-signin.html" target="_blank">Sign in</a></li>
							<li><a href="auth-signin-img-side.html" target="_blank">Sign in v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
							<li><a href="auth-reset-password.html" target="_blank">Reset password</a></li>
							<li><a href="auth-reset-password-img-side.html" target="_blank">Reset password v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
							<li><a href="auth-change-password.html" target="_blank">Change password</a></li>
							<li><a href="auth-change-password-img-side.html" target="_blank">Change password v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
							<li><a href="auth-profile-settings.html" target="_blank">Profile settings</a></li>
							<li><a href="auth-tabs.html" target="_blank">Tabs Authentication</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sliders"></i></span><span class="pcoded-mtext">Maintenance</span></a>
						<ul class="pcoded-submenu">
							<li><a href="maint-error.html">Error</a></li>
							<li><a href="maint-offline-ui.html" target="_blank">Offline UI</a></li>
							<li><a href="maint-maintance.html" target="_blank">Maintenance</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>App</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Email</span></a>
						<ul class="pcoded-submenu">
							<li><a href="email_inbox.html">Inbox</a></li>
							<li><a href="email_read.html">Read mail</a></li>
							<li><a href="email_compose.html">Compose mail</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Task</span></a>
						<ul class="pcoded-submenu">
							<li><a href="task-list.html">List</a></li>
							<li><a href="task-board.html">Board</a></li>
							<li><a href="task-detail.html">Detail</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="todo.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check-square"></i></span><span class="pcoded-mtext">To-Do</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-image"></i></span><span class="pcoded-mtext">Gallery</span></a>
						<ul class="pcoded-submenu">
							<li><a href="gallery-grid.html">Grid</a></li>
							<li><a href="gallery-masonry.html">Masonry</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Extension</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Editor</span></a>
						<ul class="pcoded-submenu">
							<li><a href="editor-classic.html">CK editor</a></li>
							<li><a href="editor-trumbowyg.html">Trumbowyg editor</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-minus"></i></span><span class="pcoded-mtext">Invoice</span></a>
						<ul class="pcoded-submenu">
							<li><a href="invoice.html">Invoice</a></li>
							<li><a href="invoice-summary.html">Invoice summary</a></li>
							<li><a href="invoice-list.html">Invoice list</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="full-calendar.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Full calendar</span></a></li>
					<li class="nav-item"><a href="file-upload.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span><span class="pcoded-mtext">File upload</span></a></li>
					<li class="nav-item"><a href="image_crop.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-scissors"></i></span><span class="pcoded-mtext">Image cropper</span></a></li>
					<li class="nav-item pcoded-menu-caption">
						<label>Other</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-menu"></i></span><span class="pcoded-mtext">Menu levels</span></a>
						<ul class="pcoded-submenu">
							<li><a href="#!">Menu Level 2.1</a></li>
							<li class="pcoded-hasmenu">
								<a href="#!">Menu level 2.2</a>
								<ul class="pcoded-submenu">
									<li><a href="#!">Menu level 3.1</a></li>
									<li class="pcoded-hasmenu">
										<a href="#!">Menu level 3.2</a>
										<ul class="pcoded-submenu">
											<li><a href="#!">Menu level 4.1</a></li>
											<li><a href="#!">Menu level 4.2</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item disabled"><a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

				</ul>
				
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Help?</h6>
						<p>Please contact us on our email for need any support</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support</a>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="<?php echo base_url();?>/assets/images/logo.png" alt="" class="logo">
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">

						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url();?>/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url();?>/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url();?>/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url();?>/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="<?php echo base_url();?>/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>

	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Product</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">E-Commerce</a></li>
                            <li class="breadcrumb-item"><a href="#!">Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Product</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Added Date</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-1.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Amazing Rolling Chair</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Office Chairs
                                        </td>
                                        <td class="align-middle">
                                            16/12/2019
                                        </td>
                                        <td class="align-middle">
                                            $597.66
                                        </td>
                                        <td class="align-middle">
                                            654
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>

                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-2.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Minicap Dining Chair</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Wooden Chairs
                                        </td>
                                        <td class="align-middle">
                                            28/01/2019
                                        </td>
                                        <td class="align-middle">
                                            $63.56
                                        </td>
                                        <td class="align-middle">
                                            236
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-3.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Marvel T-shirts</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man cloths
                                        </td>
                                        <td class="align-middle">
                                            08/23/2018
                                        </td>
                                        <td class="align-middle">
                                            $12.00
                                        </td>

                                        <td class="align-middle">
                                            234
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-4.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Lonaval jacket</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man cloths
                                        </td>
                                        <td class="align-middle">
                                            08/02/2018
                                        </td>
                                        <td class="align-middle">
                                            $49.54
                                        </td>
                                        <td class="align-middle">
                                            124
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-5.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Goldyrose Kurta</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloths
                                        </td>
                                        <td class="align-middle">
                                            01/12/2018
                                        </td>
                                        <td class="align-middle">
                                            $58.57
                                        </td>

                                        <td class="align-middle">
                                            243
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-6.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Zigzag shirts</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man cloths
                                        </td>
                                        <td class="align-middle">
                                            12/04/2019
                                        </td>
                                        <td class="align-middle">
                                            $45.26
                                        </td>
                                        <td class="align-middle">
                                            350
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-7.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Foxy Bag</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloths
                                        </td>
                                        <td class="align-middle">
                                            06/30/2018
                                        </td>
                                        <td class="align-middle">
                                            $76
                                        </td>

                                        <td class="align-middle">
                                            560
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-8.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Bluffly bag</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Kids cloths
                                        </td>
                                        <td class="align-middle">
                                            06/13/2019
                                        </td>
                                        <td class="align-middle">
                                            $23
                                        </td>
                                        <td class="align-middle">
                                            758
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-9.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Sonaminya Suits</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloths
                                        </td>
                                        <td class="align-middle">
                                            05/02/2019
                                        </td>
                                        <td class="align-middle">
                                            $54
                                        </td>
                                        <td class="align-middle">
                                            12
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-10.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Offradys bag</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Travel bag
                                        </td>
                                        <td class="align-middle">
                                            04/09/2019
                                        </td>
                                        <td class="align-middle">
                                            $78.66
                                        </td>
                                        <td class="align-middle">
                                            12
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-11.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Fostroad watch</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man watch
                                        </td>
                                        <td class="align-middle">
                                            03/24/2019
                                        </td>
                                        <td class="align-middle">
                                            $5
                                        </td>
                                        <td class="align-middle">
                                            204
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-danger">Deactive</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-12.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Chamiu lipstick</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Woman cloath
                                        </td>
                                        <td class="align-middle">
                                            09/05/2019
                                        </td>
                                        <td class="align-middle">
                                            $2.24
                                        </td>
                                        <td class="align-middle">
                                            541
                                        </td>
                                        <td class="align-middle">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Category">Category</label>
                                <select class="form-control" id="Category">
                                    <option value=""></option>
                                    <option value="1">Kids cloths</option>
                                    <option value="2">Man cloths</option>
                                    <option value="3">Man watch</option>
                                    <option value="3">Office Chairs</option>
                                    <option value="3">Travel bag</option>
                                    <option value="3">Woman cloath</option>
                                    <option value="3">Wooden Chairs</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Price">Price</label>
                                <input type="text" class="form-control" id="Price" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Quantity">Quantity</label>
                                <input type="text" class="form-control" id="Quantity" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Profie Image</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                                <label class="custom-control-label" for="customSwitch4">Active</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="<?php echo base_url();?>/assets/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/ripple.js"></script>
    <script src="<?php echo base_url();?>/assets/js/pcoded.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/menu-setting.min.js"></script>

<script src="<?php echo base_url();?>/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="<?php echo base_url();?>/assets/js/plugins/apexcharts.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ]
    });
    // DataTable end
</script>


</body>

</html>