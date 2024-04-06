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
             <a href="../services/index.html">
               <i class="feather icon-home"></i>
             </a>
           </li>
           <li class="breadcrumb-item">
             <a href="#!">About Us</a>
           </li>
           <li class="breadcrumb-item">
             <a href="#!">Contact Us</a>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <!--         [ breadcrumb ] end -->
 <!-- [ Main Content ]

start -->
 <div class="row">
   <!-- customar project  start -->
   <div class="col-xl-12">
     <div class="card">
       <div class="card-body">
         <form action="<?php echo site_url()?>/Services/update_service/<?php echo $services->service_id?>" method="post" enctype="multipart/form-data">
           <div class="row">
               
             <div class="col-sm-6">
               <div class="form-group">
                 <label class="floating-label my-font" for="service_head">Service Head</label>
                 <input value="<?php echo $services->service_head;?>" style= "text-align: left" type="text"class="form-control" name="service_head" id="service_head" placeholder=""><br>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="custom-control custom-switch">
                 <input value="1" name="service_status" style="vertical-align: middle;text-align: center" type="checkbox" class="custom-control-input" id="customSwitch4" <?php if($services->service_status==1)echo 'checked'?>>
                 <label class="custom-control-label my-font" for="customSwitch4">Show on the website</label>
               </div>
             </div>
               
             <div class="col-sm-12">
               <div class="form-group">
                 <label class="floating-label my-font" for="service_description">Service Description</label>
                 <textarea type="textarea" class="form-control" name="service_description" id="service_description" placeholder=""><?php echo $services->service_description;?></textarea><br>
               </div>
             </div>
             <div class="col-sm-6">
               <div class="form-group fill">
                 <label class="my-font" for="service_pic">Current Photo (500px*500px)</label>
                 <img src="<?php echo base_url()?>/assets/images/services/<?php echo $services->service_pic;?>" width="150px" type="file"  name="userfile" id="service_pic" placeholder="sdf">
				   <input type="file" name="userfile" class="form-control"/>
               </div>
             </div>

             <div class="col-sm-12">
               <button type="submit" class="btn btn-primary my-font">Update</button>
             </div>
           </div>
         </form>
       </div>
     </div>
     <!-- customar project  end -->
   </div>
   <!-- [ Main Content ] end -->
 </div>