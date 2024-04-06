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
			<div class="row align-items-center m-l-0">
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6 text-right">
					<button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i>Send Notification</button>
				</div>
			</div>
			<br>
			<h6 style="text-align: center"><span><?php if(isset($msg)) echo str_replace("%20"," ",$msg);?></span></h6>
			<br>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<div class="col-md-1">
				</div>
				<!-- [ Date-from & Date-to] start -->
				<div class="col-md-10">
					<div class="card">
						<div class="card-body">
						<div class="card-header" align="center">
							<h5>Date</h5>
						</div>
							<form action="<?php echo site_url('Notifications/notification_search_result')?>" method="post">
								<div class="row form-group">
									<div class="col-sm-2">
										<span class="text-danger">*<code>Required</code></span>
										<label for="date_from" class="col-form-label">Date from</label>
									</div>
									<div class="col-sm-4">
										<input required id="date_from" name="date_from" type="date" class="form-control date" data-mask="99/99/9999">
									</div>
									<div class="col-sm-2">
										<label for="date_to" class="col-form-label">Date to</label>
									</div>
									<div class="col-sm-4">
										<input id="date_to" name="date_to" type="date" class="form-control date2" data-mask="99/99/9999">
									</div>
								</div>
								<!-- [ Date-from & Date-to ] end -->
						<!-- [ Sender & Receiver ] start -->
						<div class="card-header" align="center">
							<h5>Sender & Receiver</h5>
						</div>
								<br>
								<div class="row form-group">
									<div class="col-sm-3">
										<span class="text-danger">*<code>Required</code></span>	
										<label for="sender_type" class="col-form-label">Sender type</label>
									</div>
									<div class="col-sm-3">
										<select required class="form-control" id="sender_type" name="sender_type">
											<option value=""></option>
											<?php
												$sender_type= array('Admin','Instructor');
												foreach($sender_type as $row){?>
														<option value="<?php echo $row?>"><?php echo $row?></option>
											<?php }?>
										</select>
									</div>
									<div class="col-sm-3">
										<label for="receiver_type" class="col-form-label">Receiver type</label>
									</div>
									<div class="col-sm-3">
										<select class="form-control" id="receiver_type" name="receiver_type">
											<option value=""></option>
											<?php
												$receiver_type= array('Admin','Instructor','Student');
												foreach($receiver_type as $row){?>
														<option value="<?php echo $row?>"><?php echo $row?></option>
											<?php }?>
										</select>
									</div>
								</div>
								<!-- [ Sender & Receiver ] end -->
						<!-- [ Importnace ] start -->
						<div class="card-header" align="center">
							<h5>Impotance</h5>
							<span class="d-block m-t-5"><code>Optional</code></span>
						</div>
								<br>
								<div class="row form-group">
									<div class="col-sm-4">
										<label class="col-form-label" for="importance">Importance</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" id="importance" name="importance">
											<option value=""></option>
											<?php
												$importance= array('Imporatnt','Very important','Urgent');
												foreach($importance as $row){?>
														<option value="<?php echo $row?>"><?php echo $row?></option>
											<?php }?>
										</select>
									</div>
								</div>
								<!-- [ Impotancem ] end -->
								<div class="row">
									<div class="col-sm-12 text-right">
										<button type="submit" style=" right: auto" class="btn btn-success btn-sm btn-round has-ripple" ><i class="feather"></i>Search</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- [ Main Content ] end -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Notifications/notification_send')?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="title">Title</label>
                                <input required type="text" class="form-control" id="title" name="title" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="description">description</label>
                                <textarea required class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="importance">Importance</label>
                                <select class="form-control" id="importance" name="importance">
                                    <option value=""></option>
                                    <option value="Important" style="color: aqua">Important</option>
                                    <option value="Very important" style="color: blue">Very important</option>
                                    <option value="Urgent" style="color: crimson">Urgent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="sender_type">Sender type</label>
                                <select required class="form-control" id="sender_type" name="sender_type">
                                    <option value=""></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Instructor">Instructor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="receiver_type">Receiver type</label>
                                <select required class="form-control" id="receiver_type" name="receiver_type">
                                    <option value=""></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Instructor">Instructor</option>
                                    <option value="Student">Student</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary" type="submit">Send</button>
                            <button class="btn btn-danger" type="reset" onclick="return confirm('Are you sure you want to clear data?');">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
