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
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#branding" class="" data-filter=".branding">Branding</a>
                <a href="#design" class="" data-filter=".design">Design</a>
                <a href="#photography" class="" data-filter=".photography">Photography</a>
              </div>
              <!-- End Portfolio Filter -->
              <!-- Portfolio Gallery Grid -->
              <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
			<?php foreach ($photo_gallery_photos as $row){?>
				  
                <div class="gallery-item design">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo 'http://academyactrl.michaelmagdy.com/assets/images/photo_gallery/' . $row->photo_name?>">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center"><?php echo $row->ph_title?></div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">	
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo 'http://academyactrl.michaelmagdy.com/assets/images/photo_gallery/' . $row->photo_name?>" data-lightbox-gallery="gallery" title="<?php echo $row->ph_title?>"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      <?php }?>  
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>