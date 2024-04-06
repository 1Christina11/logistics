			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">users searsh result</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Users/users_search') ?>">User Searsh</a></li>
								<li class="breadcrumb-item"><a href="<?php echo site_url('Users/users_search_result') ?>">Users Search Result</a></li>
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
											<th>Photo</th>
											<th>first_name</th>
											<th>last_name</th>
											<th>mobile_no</th>
											<th>e_mail</th>
											<th>status</th>
											<th>account_type</th>
											<th>gender</th>
											<th>address</th>
											<th>birthdate</th>
											<th>created_at</th>
											<th>Action</th>
										</tr>
									</thead>
						<tbody>
						  <?php 
                             $x = 1;
                                 foreach ($user as $row){?>
                                <tr role="row">
                                    <td scope="row"><?php echo $x?></td>
									<td><img src="<?php echo base_url()?>/assets/images/users_pics/<?php echo $row->image?>" width="200" height="200"/></td>

                                    <td><?php echo $row->first_name?></td>           
                                    <td><?php echo $row->last_name?></td>
                                    <td><?php echo $row->mobile_no?></td>
                                    <td><?php echo $row->e_mail?></td>           
                                    <td><?php echo $row->status?></td>
                                    <td><?php echo $row->account_type?></td>
                                    <td><?php echo $row->gender?></td>           
                                    <td><?php echo $row->address?></td>
                                    <td><?php echo $row->birthdate?></td>   
									<td><?php echo $row->created_at?></td> 
                                    <td class="table-action">
                                     <?php
                                        if($row->status == 'hold' || $row->status == 'pending'){?>
                                            <a href="<?php echo site_url('User/activate_user/'. $row->id );?>" class="btn btn-primary">Activate</a>
                                            
                                        
                                    <?php }else{?>
                                        
                                        <a href="<?php echo site_url('User/hold_user/'. $row->id );?>" class="btn btn-primary">Hold</a>
                                    <?php }?>                                          
                                        <a href="<?php echo site_url('users/edit_user/'. $row->id );?>" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
										
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
