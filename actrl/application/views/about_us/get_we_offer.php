<!-- [ Main Content ] start -->
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Offers</h5>
                        </div>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('About_us/get_we_offer/')?>">Offers</a></li>
                            <li class="breadcrumb-item"><a href="#!"> Add Offer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Offer</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>description</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php $x=1;
									    foreach($offer as $row){;?>
                                    <tr>
										<td><?php echo $x?></td>
                                        <td>
											<img src="<?php echo base_url()?>assets/images/bar/<?php echo $row->photo?>" alt="" class="img-fluid img-radius wid-60">
                                        </td>
                                        <td><?php echo $row->title?></td>
                                        <td><?php echo $row->description?></td>
                                        <td>
                                            <a href="<?php echo site_url('About_us/edit_we_offer/') . $row->what_we_offer_id ;?>" class="btn btn-info btn-sm animation-toggle animated" data-animate="pulse"><i class="feather icon-edit"></i>&nbsp;Edit </a>
										
                                            <a href="<?php echo site_url('About_us/delete_we_offer/') . $row->what_we_offer_id ;?>" class="btn btn-danger btn-sm animation-toggle animated" data-animate="wobble"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
									<?php $x++;}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('About_us/insert_we_offer')?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        
						<div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="title">Offer Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Please enter offer title" required>
                            </div>
                        </div>
					   <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Please enter the offer description" required>
                            </div>
                        </div>
						<div class="col-sm-6">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Offer Image</label>
                                <input type="file" class="form-control" id="Icon" name="userfiles" placeholder="sdf">
                            </div>
						</div>
                       
                        <div class="col-sm-12 text-right" >
                            <button type="submit" class="btn btn-primary"> <i class="feather icon-save"></i> Add Offer</button>
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal"><i class="feather icon-slash"></i> Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>