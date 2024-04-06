    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Gallery</h2>
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

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Works Filter start -->
		<?php foreach ($photo_gallery_albums as $colum) { ?>

            <div class="portfolio-filter font-alt align-center">
              <a href=""<?php echo $colum->album_name ?>></a>
            </div>
			  			<?php  }?>					

            <!-- End Works Filter -->
            
            <!-- Portfolio Gallery Grid -->
            <div id="grid" class="gallery-isotope grid-3 gutter clearfix">

              <!-- Portfolio Item Start -->
              <div class="gallery-item select1">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/1.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/1.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/1.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select1">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/2.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/2.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/2.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select2">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/3.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/3.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/3.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select3">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/4.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/4.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/4.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select1">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/5.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/5.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/5.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select3">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/6.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/6.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/6.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select2">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/7.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/7.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/7.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select3">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/8.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/8.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/8.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->

              <!-- Portfolio Item Start -->
              <div class="gallery-item select1">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>/assets/images/gallery/9.jpg" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="images/gallery/9.jpg"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="images/gallery/9.jpg">View more</a>
                </div>
              </div>
              <!-- Portfolio Item End -->
              
            </div>
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
      </div>
    </section>