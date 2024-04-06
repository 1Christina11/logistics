    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Course Gird</h2>
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

    <!-- Section: Course gird -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
             <div class="row">
			    <?php foreach($categories as $row){?>
                 <div class="col-sm-6 col-md-4">
                   <div class="service-block bg-white">
                     <div class="thumb"> <img alt="featured project" src="<?php echo base_url()?>academyactrl/assets/images/courses_categories/<?php echo $row->category_photo?>"width="200" height="200" class="img-fullwidth">
                     </div>
                     <div class="content text-left flip p-25 pt-0">
                       <h4><?php echo $row->category_name ?></h4>
                      <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="<?php echo site_url('Courses/get_category_courses/' . $row->courses_categories_id)?>">view details</a>
                    </div>
                   </div>
			     </div>
				<?php }?>
             </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search <span class="text-theme-color-2">Courses</span></h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Course <span class="text-theme-color-2">Categories</span></h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                    <li><a href="#">Creative<span>(19)</span></a></li>
                    <li><a href="#">Portfolio<span>(21)</span></a></li>
                    <li><a href="#">Fitness<span>(15)</span></a></li>
                    <li><a href="#">Gym<span>(35)</span></a></li>
                    <li><a href="#">Personal<span>(16)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest <span class="text-theme-color-2">Course</span></h5>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="images/services/s1.jpg" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="images/services/s3.jpg" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="images/services/s2.jpg" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Photos <span class="text-theme-color-2">from Flickr</span></h5>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav>
              <ul class="pagination theme-colored xs-pull-center m-0">
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
