
<!-- [ breadcrumb ] start -->
<div class="page-header">
	<div class="page-block">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="page-header-title">
					<h5 class="m-b-10">Edit Event</h5>
				</div>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
					<li class="breadcrumb-item"><a href="">Events</a></li>
					<li class="breadcrumb-item"><a href="">Add Events</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- [ breadcrumb ] end -->
<!-- [ Main Content ] start -->
<div class="row btn-page">
	<!-- [ edit ] start -->
	<div class="col-sm-12">
		
		<form action="<?php echo site_url('Events/insert_event')?>" method="post" enctype="multipart/form-data">
			<div class="card">
				
				<div class="card-header">
					
					<h5 >Event Data</h5>
				</div>
				<div class="card-body">
					<div class="row align-items-center m-l-0">
						<div class="col-sm-6">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group fill">
								<label class="floating-label" for="event_name">Event Name</label>
								<input value="" class="form-control" id="event_name" name="event_name" rows="2"></input>
							</div>
						</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="event_date" class="floating-label">Event Date</label>
							<input value="" id="event_date" name="event_date" type="date" class="form-control date" data-mask="31/12/9999">
						</div>
				    </div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="event_time" class="floating-label">Event time</label>
							<input value="" id="event_time" name="event_time" type="time" class="form-control date">
						</div>
				    </div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="floating-label" for="event_description">Event Description</label>
								<input value="" class="form-control" id="event_description" name="event_description"></input>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="floating-label" for="event_price">Event Price</label>
								<input value="" class="form-control" id="event_price" name="event_price"></input>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="hoster_name" class="floating-label">Hoster Name</label>
								<input value=""id="hoster_name"name="hoster_name" type="text"class="form-control"></input>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="video" class="floating-label">Video Link</label>
								<input value="" id="video" name="video" type="url"class="form-control"></input>
							</div>
						</div>
				      <div class="col-sm-6">
						<div class="form-group">
							<label class="floating-label" for="event_status">Event Status</label>
							<select class="form-control" id="event_status" name="event_status">
								<option value=""></option>
								<option value="pending">Pending</option>
								<option value="active">Active</option>
								<option value="full">Full Booked</option>
							</select>
						</div>
	                  </div>
					<div class="col-sm-6">
							<label style="color: dodgerblue" >Photo</label>
							<input name="userfile" type="file" class="form-control">
						 </div>
				  </div>
				
					<br>
						<div class="row align-items-center m-l-6">
							<div class="col-sm-12 text-right">
								<button  type="submit" class="btn btn-outline-primary btn-round has-ripple animation-toggle animated" data-animate="tada" ><i class="feather icon-upload"></i> Add Event</button>
								<button type="reset" class="btn btn-danger btn-round has-ripple animation-toggle animated" data-animate="wobble"  ><i class="feather icon-delete"></i>  Clear</button>
							</div>
						</div>
					
			</div>
		</form>	
	</div>
	<!-- [ notification ] end -->
</div>
<!-- [ Main Content ] end -->
