//////////// copy to clipboard by javascript ////////////
<script>
function copy_to_clipboard() {
  // Get the text field
  var copyText = document.getElementById("emails");

  // Select the text field
  copyText.select();
//  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Email list copied to your clipboard: " + copyText.value);
}
</script>


<!-- [ Main Content ] start -->
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Subscribtions</h5>
                        </div>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="<?php echo site_url()?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('About_us/get_subscribtions/')?>">Subscribtions</a></li>
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
                                <button class="btn btn-success btn-sm btn-round has-ripple animation-toggle animated" data-animate="flash" onclick="copy_to_clipboard()"><i class="feather icon-copy"></i> Copy Emails</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Emails</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php $x=1;
										  $e_mail='';
									    foreach($subscribtions as $row){;?>
                                    <tr>
										<td><?php echo $x?></td>
                                        <td><?php echo $row->e_mail?></td>
                                        <td>
                                            <a href="<?php echo site_url('About_us/delete_subscribtions/') . $row->subscribtions_id ;?>" class="btn btn-danger btn-sm animation-toggle animated" data-animate="wobble"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                        </td>
                                    </tr>
								<?php 
											if ($x==1){
												$e_mail= $row->e_mail;
											}else{
												$e_mail= $e_mail .' ,'. $row->e_mail;
											}?>
									<?php $x++;}?>
                                </tbody>
                            </table>
								
							<input type="hidden" id="emails" value="<?php echo $e_mail?>">
							
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
