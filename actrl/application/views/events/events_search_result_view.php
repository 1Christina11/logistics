			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Event Searsh Result</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Events/events_search') ?>">Event Searsh</a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Events/events_search_result') ?>">Event Search Result</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
  <div class="row">
				<!-- [ notification ] start -->
	<div class="col-xl-12">
	  <div class="card">
		<div class="card-body">
			<div class="row align-items-center m-l-0">
				<div class="col-sm-6">
				</div>
			</div>
		<div class="table-responsive">
		   <table id="report-table" class="table table-bordered table-striped mb-0">
			 <thead>
				<tr>
					<th>#</th>
					<th>Event Photo</th>
					<th>Event Name</th>
					<th>Event Status</th>
					<th>Hoster Name</th>
					<th>Events Date</th>
					<th>Events description</th>
					<th>Action</th>
				</tr>
			 </thead>
			<tbody>
			 <?php $x=1;
				 foreach ($event as $row)
				{;?>
			  <tr role="row">
				 <td scope="row"><?php echo $x?></td>
			     <td><img src="<?php echo base_url()?>assets/images/bar/<?php echo $row->event_photo?>" width="200" height="200"/></td>
			  	 <td><?php echo $row->event_name?></td>
				 <td><?php echo $row->event_status?></td>
				 <td><?php echo $row->hoster_name ?></td>
				 <td><?php echo $row->event_date?> <?php echo $row->event_time?></td>
				 <td><?php echo $row->event_description?></td>
				 <td class="table-action"> 
					<a href="<?php echo site_url('Events/edit_event/') . $row->events_id ;?>" class="btn btn-icon btn-outline-primary mb-4"><i class="feather icon-edit"></i></a>
					<a href="<?php echo site_url('Events/delete_event/' . $row->events_id); ?>" class="btn btn-icon btn-outline-danger sweet-error mb-4" onclick="return confirm('Are you sure you want to delete this item?');">
					<i class="feather icon-trash-2" ></i></a>
					</a>
				 </td>
			   </tr>
			  <?php $x++;}?>
			 </tbody>
			</table>
		  </div>
	  	 </div>
	  </div>
    </div>	
  </div>
