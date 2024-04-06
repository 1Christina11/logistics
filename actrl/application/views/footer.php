    </div>
</div>
<!-- Button trigger modal -->

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

    <script src="<?php echo base_url()?>/assets/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/ripple.js"></script>
    <script src="<?php echo base_url()?>/assets/js/pcoded.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/plugins/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/plugins/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/plugins/dataTables.select.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/pages/data-select-custom.js"></script>

<!-- range slider Js -->
	<script src="<?php echo base_url()?>assets/js/plugins/bootstrap-slider.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/pages/ac-rangeslider.js"></script>
<!-- Apex Chart -->
	<script>
		// DataTable start
		$('#report-table').DataTable();
		// DataTable end
	</script>
	<script src="<?php echo base_url()?>/assets/js/plugins/apexcharts.min.js"></script>

	<!-- custom-chart js -->
	<script src="<?php echo base_url()?>/assets/js/pages/dashboard-main.js"></script>
<script>
	$(document).ready(function() {
		$('.animation-toggle').hover(function() {
			var anim = $(this).attr('data-animate');
			$(this).addClass('animated');
			$(this).addClass(anim);
			setTimeout(function() {
				$('.animation-toggle').removeClass(anim);
			}, 3000);
		});
	});
</script>
<script>
	$(".bd-toggle-animated-progress").on("click", function() {
		$(this).siblings(".progress").find(".progress-bar-striped").toggleClass("progress-bar-animated")
	})
</script>
<script>
	
	var px = new PerfectScrollbar('.cust-scroll', {
		wheelSpeed: .5,
		swipeEasing: 0,
		wheelPropagation: 1,
		minScrollbarLength: 40,
	});
	
    $(document).ready(function() {
        checkCookie();
    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var ticks = getCookie("modelopen");
        if (ticks != "") {
            ticks++ ;
            setCookie("modelopen", ticks, 1);
            if (ticks == "2" || ticks == "1" || ticks == "0") {
                $('#exampleModalCenter').modal();
            }
        } else {
            // user = prompt("Please enter your name:", "");
            $('#exampleModalCenter').modal();
            ticks = 1;
            setCookie("modelopen", ticks, 1);
        }
    }
	
	
</script>

</body>
</html>