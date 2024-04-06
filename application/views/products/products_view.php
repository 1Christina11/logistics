<body class="">
	<!-- [ navigation menu ] start -->
	<!-- [ navigation menu ] end -->
	
	

<!-- [ Main Content ] start -->
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
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i><h5>اضافة منتج</h5> </button>
                            </div>
                        </div>
                        <div class="table table-hover ">
                            <table id="report-table" class="table mb-0-12">
						<thead class="thead-light">
                                    <tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product: activate to sort column descending" style="width: 175.484px;">رقم</th>
										<th class="sorting_asc" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product: activate to sort column descending" style="width: 175.484px;">اسم المنتج</th>
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 83.4219px;">تصنيف المنتج</th>
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Added Date: activate to sort column ascending" style="width: 89.6875px;">تصنيف فرعي للمنتج</th>
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 43.25px;">المادة</th>
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 71.1094px;">عمر المستخدم</th>
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 54.0312px;">الوصف</th>
										<th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 132.016px;">الاجراء</th>
							</tr>
										<?php $x = 1; 
											foreach($products as $row){?>
											<tr>
												<td><?php echo $x ?></td>
												<td><?php echo $row->pr_name?></td>
												<td><?php echo $row->pr_main_category_id?></td>
												<td><?php echo $row->pr_sub_category_id?></td>
												<td><?php echo $row->material?></td>
												<td><?php echo $row->age_level_id?></td>
												<td><?php echo $row->description?></td>
												<td>
													<a href="<?php echo site_url('Products/edit_product/' . $row->id);?>"><div class="btn btn-icon btn-outline-success" class="feather icon-edit" data-clipboard-text="fas fa-edit" data-filter="fa-edit" data-toggle="tooltip"  title="Edit" data-original-title="Edit"><i class="fas fa-edit"></i></div></a> - <a href="#!" class="btn btn-icon btn-outline-danger has-ripple"><i class="feather icon-trash-2"></i><span class="ripple ripple-animate" style="height: 45px; width: 45px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 82, 82); opacity: 0.4; top: -5.95312px; left: 5.125px;" title="Delet" data-original-title="Delet"></span></a>
												</td>
											</tr>
										<?php $x++;}?>
								 </table> 
								<tbody>

									
									<tr>
                                        <td class="align-middle">
                                            <img src="<?php echo base_url();?>/assets/images/product/prod-11.jpg" alt="contact-img" title="contact-img" class="rounded mr-3" height="48" />
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="#!" class="text-body">Fostroad watch</a>
                                                <br />
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star-on"></span>
                                                <span class="text-warning feather icon-star"></span>
                                            </p>
                                        </td>
                                        <td class="align-middle">
                                            Man watch
                                        </td>
                                        <td class="align-middle">
                                            03/24/2019
                                        </td>
                                        <td class="align-middle">
                                            $5
                                        </td>
                                        <td class="align-middle">
                                            204
                                        </td>
                                        <td class="align-middle">
                                            <span class="pcoded-badge badge badge-warning">Pending</span>
                                        </td>
                                        <td class="table-action">
                                            <a href="#!" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>
                                            <a href="#!" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">أضافة منتج</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('Products/insert_products');?>" method="post";>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  class="floating-label" for="pr_name">اسم المنتج</label>
                                <input name="pr_name" type="text" class="form-control" id="pr_name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  class="floating-label" >تصنيف المنتج</label>
                                <input name="pr_main_category_id" for="pr_main_category_id" type="text" class="form-control" id="pr_main_category_id" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >التصنيف الفرعي للمنتج</label>
                                <input name="pr_sub_category_id" for="pr_sub_category_id" type="text" class="form-control" id="pr_sub_category_id" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >المادة</label>
                                <input name="material" for="material" type="text" class="form-control" id="material" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >يسمح بالاستخدام لعمر</label>
                                <input name="age_level_id" for="age_level_id" type="text" class="form-control" id="age_level_id" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" >الوصف</label>
                                <input name="description" for="description" type="text" class="form-control" id="description" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-primary">حفظ</button>
                            <button class="btn btn-danger">الغاء</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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