		<!-- [ breadcrumb ] start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="page-header-title">
						<h5 class="m-b-10">Events Search</h5>
					</div>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
						<li class="breadcrumb-item"><a href="<?php echo site_url('Events/events_search') ?>">Events Search</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
<div class="row">
	<!-- [ Date-from & Date-to] start -->
	<div class="col-md-12 ">
		<div class="card" align="center">
			<h5>Events Search</h5>
			<div class="card-body">
			<div class="card-header" align="left">
				<h5>Events Date</h5>
			</div>
				<form action="<?php echo site_url('Events/events_search_result')?>" method="post">
					<div class="row form-group">
						<div class="col-sm-2">
							<label for="date_from" class="col-form-label">Date from</label>
						</div>
						<div class="col-sm-4">
							<input id="date_from" name="date_from" type="date" class="form-control date" data-mask="99/99/9999">
						</div>
						<div class="col-sm-2">
							<label for="date_to" class="col-form-label">Date to</label>
						</div>
						<div class="col-sm-4">
							<input id="date_to" name="date_to" type="date" class="form-control date2" data-mask="99/99/9999">
						</div>
					</div>
					<!-- [ Date-from & Date-to ] end -->
			<!-- [ Account Type ] start -->
			<div class="card-header" align="left">
				<h5>Event Status</h5>
			</div>
					<br>
					<div class="row form-group">
						<div class="col-sm-2">
							<label for="event_status" class="col-form-label">Event Status</label>
						</div>
						<div class="col-sm-3">
							<select class="form-control" id="event_status" name="event_status">
								<option value=""></option>
								<option value="pending">Pending</option>
								<option value="active">Active</option>
								<option value="full">Full Booked</option>
							</select>
						</div>
					</div>
					<!-- [ Account Type ] end -->
			<!-- [ User ] start -->
			<div class="card-header" align="left">
				<h5>Events Data</h5>
			</div>
				<br>
					<div class="row form-group">
						<div class="col-sm-4">
							<label class="col-form-label" for="event_name">Event Name</label>
							<input id="event_name" name="event_name" type="text" class="form-control date">
						</div>
						<div class="col-sm-8">
						<label class="col-form-label" for="hoster_name">Hoster Name</label>
							<input id="hoster_name" name="hoster_name" type="text" class="form-control date">
						</div>
					</div>
					<br>

					<!-- [ Impotancem ] end -->
					<div class="row">
						<div class="col-sm-12 text-right">
							<button type="submit" class="btn btn-outline-primary has-ripple animation-toggle animated" data-animate="tada" ><i class="feather icon-search"></i>  Search</button>
							<button type="reset" class="btn btn-danger btn-round has-ripple animation-toggle animated" data-animate="wobble"><i class="feather icon-delete"></i>  Clear</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
		<!-- [ Main Content ] end -->

          

