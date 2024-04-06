
<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
							<br>
							<br>
                            <h5 class="m-b-10">Contact Us</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Contact Us</h5>
                    </div>
                    <div class="card-body">
	<form action="<?php echo site_url('Contact_us/update_contact_us')?>" method="post">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										<input type="hidden" name="id" value="<?php echo $contact_us->contact_us_id?>"/>
										
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="The Address" value="<?php echo $contact->address?>"></input>
                                    </div>
                                </div>
								
								
								
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="e_mail" placeholder="Email" value="<?php echo $contact->e_mail?>"></input>
                                    </div>
                                </div>
								
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tele Number :</label>
                                        <input type="tel" class="form-control" name="tele_num" value="<?php echo $contact->tele_num?>"></input>
                                    </div>
                                </div>
								
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Facebook Link :</label>
                                        <input type="text" class="form-control" name="facebook_link" value="<?php echo $contact->facebook_link?>"></input>
                                    </div>
                                </div>
								
                               
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Twitter Link :</label>
                                        <input type="text" class="form-control" name="twitter_link" value="<?php echo $contact>twitter_link?>"></input>
                                    </div>
                                </div>
								
								
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Linkedin Link :</label>
                                        <input type="text" class="form-control" name="linkedin_link" value="<?php echo $contact->linkedin_link?>"></input>
                                    </div>
                                </div>
								
								
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Instagram Link :</label>
                                        <input type="text" class="form-control" name="instagram_link" value="<?php echo $contact->instagram_link?>">     </input>
                                    </div>
                                </div>
                               
                                
                            </div>
                            <button type="submit" class="btn  btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
<!--
    </div>
</section>
-->