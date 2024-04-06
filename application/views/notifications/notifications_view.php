    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo base_url()?>assets/images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Notifications</h3>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/#!">Home</a></li>
                <li class="active text-gray-silver">Notifications</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
	<?php if(isset($msg)){?>
			 <div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="text-center">
							<h4 class="title">Notification</h4>
							<h6 class="sub-title"><?php echo $msg?></h6>
						</div>
					</div>
				</div>
			 </div>
    <?php }?>
    <!-- Section: Schedule -->
    <section id="schedule" class="divider parallax layer-overlay overlay-white-8" data-bg-img="<?php echo base_url()?>assets/images/bg/bg1.jpg">
      <div class="container pt-80 pb-60">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-schedule">
                <thead>
                  <tr class="bg-theme-colored">
                    <th>Sender</th>
                    <th>Title</th>
                    <th>Importance</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
				<?php
					$x=0;
					foreach($notifications as $row){?>
                  <tr>
					<td hidden=""></td>  
                    <td>
					  <img class="img-radius" src="<?php echo base_url()?>academyactrl/assets/images/users_pics/<?php echo $row->image?>" alt="User-Profile-Image"><?php echo $row->first_name . ' ' . $row->last_name?>
					</td>
                    <td>
					  <strong><?php echo $row->title?></strong>
					</td>
                    <td><?php echo $row->importance?></td>
                    <td><?php echo $row->description?></td>
					<a href="<?php echo site_url('Notifications/delete_notifications/') . $row->notifications_id?>" class="btn btn-dark btn-sm mt-10" onClick="return confirm('You are about to delete this notification, are you sure?')">Delete</a>
				  </tr>
				<?php $x++;}?>
				</tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
