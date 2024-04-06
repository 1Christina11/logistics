        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Task Masonry</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url()?>/task/get_task/">*Task*</a></li>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
	
		
	<section class="pcoded-main-container">
		
		
		<form action="<?php echo site_url('Task/update_task')?>" method="post" enctype="multipart/form-data" >
				

			<div class="pcoded-content">

				
				<input type="hidden" name="id" value="<?php echo  $task->id?>"/>
                

                
                <div class="form-group">
                   <label class="floating-label" >Photo name</label><br><br>
                   <img src="<?php echo base_url()?>/assets/images/photo_gallery/<?php echo $task->file?>" width="200" height="200"/>
                    <input name="userfiles" type="file" class="form-control">
                </div>     
             
			    <div class="form-group">
                 <label class="floating-label" > description</label>
                 <input name="description" value="<?php echo $task->description?>" type="text" class="form-control"  placeholder="">
                                </div>


			
			 <button type="submit" class="btn btn-primary">Update</button>

			</div>

		</form>

		
		
		


		
		
		
