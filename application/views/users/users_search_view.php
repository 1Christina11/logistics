		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">users search</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="<?php echo site_url('Users/users_search') ?>">users search</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row align-items-center m-l-0">
			<div class="col-sm-9 text-right">
			</div>
		</div>
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
						<form action="<?php echo site_url('Users/users_search_result')?>" method="post">
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
					<div class="card-header" align="center">
						<h5>Account type</h5>
					</div>
							<br>
							<div class="row form-group">
								<div class="col-sm-3">
									<label for="account_type" class="col-form-label">Account type</label>
								</div>
								<div class="col-sm-3">
									<select class="form-control" id="account_type" name="account_type">
										<option value=""></option>
										<option value="Admin">Admin</option>
										<option value="Instructor">Instructor</option>
										<option value="Student">Student</option>
									</select>
								</div>
							</div>
							<!-- [ Account Type ] end -->
					<!-- [ User ] start -->
					<div class="card-header" align="center">
						<h5>Member Data</h5>
					</div>
						<br>
							<div class="row form-group">
								<div class="col-sm-4">
									<label class="col-form-label" for="first_name">First Name</label>
									<input id="first_name" name="first_name" type="text" class="form-control date">
								</div>
								<div class="col-sm-8">
								<label class="col-form-label" for="last_name">Last Name</label>
									<input id="last_name" name="last_name" type="text" class="form-control date">
								</div>
								<div class="col-sm-8">
								<label class="col-form-label" for="mobile_no">Mobile Number</label>
									<input id="mobile_no" name="mobile_no" type="text" class="form-control date">
								</div>
								<div class="col-sm-8">
								<label class="col-form-label" for="e_mail">E_mail</label>
									<input id="e_mail" name="e_mail" type="e_mail" class="form-control date">
								</div>
								<div class="col-sm-8">
								<label class="col-form-label" for="user_id">Gender</label>
									<div class="form-check">
									  <label class="form-check-label" for="radio1"><input type="radio" class="form-check-input" id="radio1" name="gender" value="male">
									  Male</label>
									</div>
									<div class="form-check">
									  <label class="form-check-label" for="radio2"><input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
									  Female</label>
									</div>
								</div>
								<div class="col-sm-8">
								<label class="col-form-label" for="address">Address</label>
									<input id="address" name="address" type="text" class="form-control date">
								</div>
								</div>
							<br>
							<div class="row form-group">
							    <div class="col-sm-3">
									<label for="account_type" class="col-form-label">Status</label>
								</div>
								<div class="col-sm-3">
									<select class="form-control" id="account_type" name="account_type">
										<option value=""></option>
										<option value="Admin">Pending</option>
										<option value="Instructor">Active</option>
										<option value="Student">Block</option>
									</select>
								</div>
							</div>
							
							<!-- [ Impotancem ] end -->
							<div class="row">
								<div class="col-sm-12 text-right">
									<button type="submit" style=" right: auto" class="btn btn-success btn-sm btn-round has-ripple" ><i class="feather"></i>Search</button>
									<button type="reset" style=" right: auto" class="btn btn-danger btn-sm btn-round has-ripple" ><i class="feather"></i>Clear</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- [ Main Content ] end -->

          

