        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gallery Masonry</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Gallery</a></li>
                            <li class="breadcrumb-item"><a href="#!">Gallery Masonry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
	
		
	<section class="pcoded-main-container">
		
		
		<form action="<?php echo site_url('Photo_gallery/update_photo')?>" method="post" enctype="multipart/form-data" >
				

			<div class="pcoded-content">

				
				<input type="hidden" name="id" value="<?php echo $one_photo->id?>"/>
                
                <input name="album_id" type="hidden" value="<?php echo $one_photo->album_id?>">
                
                
                
			  <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Albume id</label>
				
			  </div>

			  <div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Photo name</label>
				<input name= "photo_name" type="text" class="form-control" id="photo_name" aria-describedby="emailHelp"value="<?php echo $one_photo->photo_name?>">
			  </div>
				<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Create On</label>
				<input name= "created_at" type="text" class="form-control" id="created_at" aria-describedby="emailHelp"value="<?php echo $one_photo->created_at?>" >
			  </div>


				<div class="mb-3">
				  <label for="formFile" class="form-label">Upload Image</label>
				  <input name= "userfiles" class="form-control" type="file" id="album_image"value="<?php echo $one_photo->photo?>">
				</div>
			 <button type="submit" class="btn btn-primary">Update</button>

			</div>

		</form>

		
		
		


		
		
		
