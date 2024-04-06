        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">المنتجات</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">المنتاجات</a></li>
                            <li class="breadcrumb-item"><a href="#!">منتج</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        
                <form action="<?php echo site_url('Products/update_products');?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  class="floating-label" for="pr_name">اسم المنتج</label>
                                <input name="pr_name" type="text" class="form-control" id="pr_name" placeholder="" value="<?php echo $one_product->pr_name;?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  class="floating-label" >تصنيف المنتج</label>
                                <input name="pr_main_category_id" for="pr_main_category_id" type="text" class="form-control" id="pr_main_category_id" placeholder="" value="<?php echo $one_product->pr_main_category_id?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >التصنيف الفرعي للمنتج</label>
                                <input name="pr_sub_category_id" for="pr_sub_category_id" type="text" class="form-control" id="pr_sub_category_id" placeholder="" value="<?php echo $one_product->pr_main_category_id?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >المادة</label>
                                <input name="material" for="material" type="text" class="form-control" id="material" placeholder="" value="<?php echo $one_product->material?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >يسمح بالاستخدام لعمر</label>
                                <input name="age_level_id" for="age_level_id" type="text" class="form-control" id="age_level_id" placeholder="" value="<?php echo $one_product->age_level_id?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >الوصف</label>
                                <input name="description" for="description" type="text" class="form-control" id="description" placeholder="" value="<?php echo $one_product->description?>">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">تحديث</button>
                            <button class="btn btn-danger">الغاء</button>
                        </div>
                    </div>
                </form>
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>


<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="<?php echo base_url();?>/assets/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/ripple.js"></script>
    <script src="<?php echo base_url();?>/assets/js/pcoded.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/menu-setting.min.js"></script>

<script src="<?php echo base_url();?>/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="<?php echo base_url();?>/assets/js/plugins/apexcharts.min.js"></script>
<script>
    // DataTable start
    $('#report-table').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ]
    });
    // DataTable end
</script>
</body>