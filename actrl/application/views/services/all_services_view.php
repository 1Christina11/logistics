	<!-- [ breadcrumb ] start -->
	<div class="page-header">
	  <div class="page-block">
	    <div class="row align-items-center">
	      <div class="col-md-12">
	        <div class="page-header-title">
	          <h5 class="m-b-10">Service</h5>
	        </div>
	        <ul class="breadcrumb">
	          <li class="breadcrumb-item">
	            <a href="../services/all_services_view.php">
	              <i class="feather icon-home"></i>
	            </a>
	          </li>
	          <li class="breadcrumb-item">
	            <a href="#!">About us</a>
	          </li>
	          <li class="breadcrumb-item">
	            <a href="#!">Contact us</a>
	          </li>
	        </ul>
	      </div>
	    </div> 
	  </div>
	</div>
	<!-- [ breadcrumb ] end -->
	<!-- [ Main Content ] start -->
	<div class="row">
	  <!-- customar project  start -->
	  <div class="col-sm-6 text-right">
	    <button class="btn btn-success btn-sm btn-round has-ripple my-font" data-toggle="modal" data-target="#modal-report">
	      <i class="feather icon-plus"></i>Add Service </button>
	  </div>
	  <!-- customar project  end -->
	  <!-- [ Main Content ] end -->
	</div>
	<div class="row">
	  <div class="col-xl-12">
	    <div class="card">
	      <div class="card-body">
	        <h class="modal-title">All Services</h3>
	          <table class="table-responsive">
	            <thead>
	              <tr>
	                <th scope="col">#</th>
	                <th scope="col">Service Head</th>
	                <th scope="col">Service Description</th>
	                <th scope="col">Service Photo</th>
<!--	                <th scope="col">Service Status</th>-->
	                <th scope="col">Action for Service</th>
	              </tr>
	            </thead>
	            <tbody> <?php $x =1;
						  if(isset($services)){
						  
						  
                           foreach ($services as $row){?> <tr>
	                <th scope="row"> <?php echo $x?> </th>
				   <td> <?php echo $row->service_head?> </td>
	                <td> <?php echo $row->service_description?> </td>
	                <td>
	                  <img src="
									<?php echo base_url()?>/assets/images/services/
									<?php echo $row->service_pic?>" width="100px" height="100px" />
	                </td>
					<td>
	                  <a href="
										<?php echo site_url()?>/Services/edit_service/
										<?php echo $row->service_id?>">
	                    <button type="button" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
	                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
	                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
	                    </svg>Edit</button>
	                  </a> <?php if($row->service_status == 1){?> <a href="
										<?php echo site_url()?>/Services/disable_service/
										<?php echo $row->service_id?>">
	                    <button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
	                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
	                    </svg>Hide</button>
	                  </a> <?php }else{?> </a>
	                  <a href="
									<?php echo site_url()?>/Services/enable_service/
									<?php echo $row->service_id?>">
	                    <button type="button" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
	                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
	                    </svg>Show</button>
	                  </a> <?php }?>
	                </td>

	              
	              </tr> <?php $x++;}} ?> </tbody>
	          </table>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title">Add Service</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="
					<?php echo site_url()?>/Services/insert_service" method="post" enctype="multipart/form-data">
	          <div class="row">
	            <div class="col-sm-6">
	              <div class="form-group">
	                <label class="floating-label my-font" for="Name">Service Head</label>
	                <input required min="12" max="30" type="text" class="form-control" Name="service_head" placeholder="">
	              </div>
	            </div>
	            <div class="col-sm-6">
	              <div class="form-group">
	                <label class="floating-label my-font" for="service_description">Service Description</label>
	                <textarea type="text" class="form-control" name="service_description" placeholder=""></textarea> 
	              </div>
	            </div>
	            <div class="col-sm-6">
	              <div class="form-group fill">
	                <label class="my-font" for="service_pic">Service Photo (500px*500px)</label>
	                <input type="file" class="form-control" name="userfile" placeholder="sdf" width= '500px' hight='500px'>
	              </div>
	            </div>
				  <br>
				  <br>
				  <br>
				  <br>
				  <br>
	            <div class="col-sm-6">
	              <div class="custom-control custom-switch">
	                <input name="service_status" type="checkbox" value="1" class="custom-control-input" id="customSwitch4" checked="">
	                <label class="custom-control-label my-font" for="customSwitch4">Active</label>
	              </div>
	            </div>
	            <div class="col-sm-12">
	              <button class="btn btn-primary my-font">Add</button>
	            </div>
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>





