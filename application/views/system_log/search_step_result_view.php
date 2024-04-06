			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">System log</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Log/log_view') ?>">System log</a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Log/log_result_view')?>">Log searched result</a></li>
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
											<th>Name</th>
											<th>Account type</th>
											<th>Function name</th>
											<th>Step value</th>											
											<th>Date</th>
								
										</tr>
									</thead>
									<tbody>
											<tr>
										        <td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
										    </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- [ notification ] end -->
			</div>
			<!-- [ Main Content ] end -->
