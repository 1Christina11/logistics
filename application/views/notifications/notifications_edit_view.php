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
								<li class="breadcrumb-item"><a href="<?php echo site_url('Notifications/notification_edit/' . $edit->id)?>">Editor</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row btn-page">
				<!-- [ notification ] start -->
				<div class="col-sm-12">
					<form action="<?php echo site_url('Notifications/notificaton_update')?>" method="post">
						<div class="card">
							<div class="card-header">
								<h5 style="text-align: center">Notification <?php echo '#' . $edit->id ?></h5>
								<input value="<?php echo $edit->id?>" type="hidden" name="id">
							</div>
							<div class="card-body">
								<div class="row align-items-center m-l-0">
									<div class="col-sm-6">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group fill">
											<label class="floating-label" for="title">Title</label>
											<input value="<?php echo $edit->title?>" type="text" class="form-control" id="title" name="title">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group fill">
											<label class="floating-label" for="description">description</label>
											<textarea class="form-control" id="description" name="description" rows="2"><?php echo $edit->description?></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="floating-label" for="importance">Importance</label>
											<select class="form-control" id="importance" name="importance">
											<?php
												$importance= array('Imporatnt','Very important','Urgent');
												foreach($importance as $row){?>
														<option value="<?php echo $row?>"><?php echo $row?></option>
											<?php }?>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="floating-label" for="sender_type">Sender type</label>
											<select class="form-control" id="sender_type" name="sender_type">
												<?php
													$sender_type= array('Admin','Instructor');
													foreach($sender_type as $row){?>
															<option value="<?php echo $row?>"><?php echo $row?></option>
												<?php }?>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="floating-label" for="receiver_type">Receiver type</label>
											<select class="form-control" id="receiver_type" name="receiver_type">
												<?php
													$receiver_type= array('Admin','Instructor','Student');
													foreach($receiver_type as $row){?>
															<option value="<?php echo $row?>"><?php echo $row?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row btn-page">
								<div class="col-sm-12">
									<div class="row align-items-center m-l-0">
										<div class="col-sm-6">
										</div>
										<div class="col-sm-6 text-right">
											<button data-type="horizontal" type="submit" style=" right: auto" class="btn notifications btn-success btn-sm btn-round has-ripple" ><i class="feather icon-plus"></i>Update Notification</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>	
				</div>
				<!-- [ notification ] end -->
			</div>
			<!-- [ Main Content ] end -->
