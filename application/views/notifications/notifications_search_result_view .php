			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Notifications</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Notifications/notification_search') ?>">Notifications</a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Notifications/notification_search_result') ?>">Notifications searched result</a></li>
							</ul>
							<div class="row btn-page">
								<div class="col-sm-12">
									<div class="row align-items-center m-l-0">
										<div class="col-sm-6">
										</div>
<!--
										<div class="col-sm-6 text-right">
											<button style=" right: auto" class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report-1"><i class="feather icon-plus"></i>Send Notification</button>
										</div>
-->
									</div>
								</div>
							</div>
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
											<th>Title</th>
											<th>description</th>
											<th>Importance</th>
											<th>Notification type</th>
											<th>Notification sent at</th>
<!--											<th>Notification updated at</th>-->
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$x=1;
										foreach($search as $row){?>
											<tr>
	<!--
												<td>
													<img src="assets/images/user/avatar-2.jpg" class="img-fluid img-radius wid-40" alt="">
												</td>
	-->
												<td><?php echo $x?></td>
												<td><?php echo $row->title?></td>
												<td><?php echo $row->description?></td>
												<td><?php echo $row->importance?></td>
												<td><h6 style= 'color: burlywood'>From: <?php echo $row->sender_type?> <h6 style= 'color: darkgoldenrod'>To: <?php echo $row->receiver_type?></h6></h6></td>
												<td><?php echo $row->created_at?></td>
												<td>
													<a href="<?php echo site_url('Notifications/notification_edit/' . $row->id)?>" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
													<a href="<?php echo site_url('Notifications/notification_delete/' . $row->id)?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this notification?');"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
												</td>
											</tr>
									<?php $x++; }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- [ notification ] end -->
			</div>
			<!-- [ Main Content ] end -->
