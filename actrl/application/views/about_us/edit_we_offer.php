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
					<li class="breadcrumb-item"><a href="<?php echo site_url('About_us/get_we_offer/')?>">offers</a></li>
					<li class="breadcrumb-item"><a href="">Add Offer</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- [ breadcrumb ] end -->
<!-- [ Main Content ] start -->
<div class="row btn-page">
	<!-- [ edit ] start -->
	<div class="col-sm-12">
		
		<form action="<?php echo site_url('About_us/update_we_offer')?>" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">
					
					<h5 style="background-color: #D1E8FF" >Offer Data</h5>
				</div>
				<div class="card-body">
					<input value="<?php echo $offer->what_we_offer_id ?>" type="hidden" id="what_we_offer_id" name="what_we_offer_id" >
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group fill">
								<label class="floating-label" for="title"> Offer Title </label>
								<input value="<?php echo $offer->title ?>" class="form-control" id="title" name="title"></input>
							</div>
						</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="description" class="floating-label">Offer Description</label>
							<input value="<?php echo $offer->description ?>" id="description" name="description" type="text" class="form-control date">
						</div>
				    </div>
						
					<div class="col-sm-6">
						<label style="color: dodgerblue" > Offer Photo </label>
						<img src="<?php echo base_url().'/assets/images/bar/'?><?php echo $offer->photo?>" width="200" height="200"/>
						<input name="userfile" type="file" class="form-control">
				    </div>
				  </div>
				<div class="row btn-page">
					<div class="col-sm-12">
						<div class="row align-items-center m-l-6">
							<div class="col-sm-12 text-right">
								<button data-type="horizontal" type="submit" class="btn btn-outline-success btn-round has-ripple animation-toggle animated " data-animate="tada"><i class="feather icon-paperclip"></i> Update Offer</button>
								<button type="reset" class="btn btn-danger btn-round has-ripple animation-toggle animated" data-animate="wobble"><i class="feather icon-delete"></i>  Clear</button>
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
