    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Course List</h2>
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

    <!-- Section: Course list -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
		  <?php foreach($courses as $row){ ?>
            <div class="row mb-15">
              <div class="col-sm-6 col-md-4">
                <div class="thumb"> <img alt="featured course" src="<?php echo 'http://academyactrl.michaelmagdy.com/assets/images/courses/' . $row->c_poster?>" class="img-fullwidth"></div>
              </div>
              <div class="col-sm-6 col-md-8">
                <h4 class="line-bottom mt-0 mt-sm-20"> <?php echo $row->c_name ?></h4>
                <ul class="review_text list-inline">
                  <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> <?php echo $row->c_price ?> </h4></li>
<!--
                  <li>
                    <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                  </li>
-->
                </ul>
                <p><?php echo $row->c_description ?></p>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="<?php echo site_url('Courses/get_course_details/'. $msg = NULL .'/'. $row->courses_id )?>" >view details</a>
              </div>
            </div>
            <hr>
		  <?php };?>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom"><span class="text-theme-color-2">Categories</span></h5>
                <div class="categories">
				<?php foreach($categories as $row){;?>
                  <ul class="list list-border angle-double-right">
                    <li><a href="<?php echo site_url('Courses/one_category/' . $row->courses_categories_id)?>"><?php echo $row->category_name?><span>(19)</span></a></li>
                  </ul>
				<?php };?>	
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Latest <span class="text-theme-color-2">Course</span></h5>
                <div class="latest-posts">
				<?php foreach($latest_course as $row){?>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="<?php echo 'http://academyactrl.michaelmagdy.com/assets/images/courses/' . $row->c_poster?>" alt="featured course" width="25px" height="30px"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="<?php echo site_url('Courses/get_course_details/'.$row->courses_id )?>"><?php echo $row->c_name?></a></h5>
                      <p><?php echo $row->c_description ?></p>
                    </div>
                  </article>
				  <?php }; ?>
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
