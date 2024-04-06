    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Gallery (Only Image)</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-gray-silver">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Filter -->
              <div class="portfolio-filter">

<!--                <a href="<?php echo site_url('Video_library/get_albums')?>" class="active" data-filter="*">All</a>-->
	   <?php
					  if (is_array($album) || is_object($album))

          foreach ($album as $row){?>
				  
                <a href="<?php echo site_url('Video_library/get_album_videos/' .  $row->video_library_albums_id  ) ?>" class="" data-filter=".branding"><?php echo $row->album_name ?></a>
				  
		<?php } ?>
              </div>
              <!-- End Portfolio Filter -->
              <!-- Portfolio Gallery Grid -->
              <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
	   <?php 
				  if (is_array($videos) || is_object($videos))

          foreach ($videos as $row){?>
				  
                    <div class="entry-header">
                      <div class="post-thumb">
                        <iframe src="https://www.youtube.com/embed/<?php echo  $row->video_link?>" width="400" height="600" title="youtube video" allowfullscreen>
                        </iframe>
                      </div>
                    </div>
				  
		<?php } ?>					
                <!-- Portfolio Item End -->              

              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>