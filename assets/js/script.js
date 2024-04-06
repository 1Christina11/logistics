/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function() {

	"use strict";

	var FasTrans = {
		init: function() {
			this.Basic.init();  
		},

		Basic: {
			init: function() {

				this.preloader();
				this.BackgroundImage();
				this.Animation();
				this.StickyHeader();
				this.MobileMenu();
				this.scrollTop();
				this.MainSlider();
				this.searchPopUp();
				this.counterUp();
				this.PopUp();
				this.CarouselSliderJs();
				this.CircleProgress();
				this.countDown();
				this.HoverParallax();
				this.MilesRange();

				
				
			},
			preloader: function (){
				jQuery(window).on('load', function(){
					jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
				})
			},
			BackgroundImage: function (){
				$('[data-background]').each(function() {
					$(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
				});
			},
			Animation: function (){
				if($('.wow').length){
					var wow = new WOW(
					{
						boxClass:     'wow',
						animateClass: 'animated',
						offset:       0,
						mobile:       true,
						live:         true
					}
					);
					wow.init();
				}
			},
			StickyHeader: function (){
				jQuery(window).on('scroll', function() {
					if (jQuery(window).scrollTop() > 250) {
						jQuery('.ft-header-section, .pr-mark-main-header').addClass('sticky-on')
					} else {
						jQuery('.ft-header-section, .pr-mark-main-header').removeClass('sticky-on')
					}
				})
			},
			MobileMenu: function (){
				$('.open_mobile_menu').on("click", function() {
					$('.mobile_menu_wrap').toggleClass("mobile_menu_on");
				});
				$('.open_mobile_menu').on('click', function () {
					$('body').toggleClass('mobile_menu_overlay_on');
				});
				if($('.mobile_menu li.dropdown ul').length){
					$('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>');
					$('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
						$(this).prev('ul').slideToggle(500);
					});
				}
				$(".dropdown-btn").on("click", function () {
					$(this).toggleClass("toggle-open");
				});
			},
			searchPopUp: function (){
				if($('.search-box-outer').length) {
					$('.search-box-outer').on('click', function() {
						$('body').addClass('search-active');
					});
					$('.close-search').on('click', function() {
						$('body').removeClass('search-active');
					});
				}
			},
			scrollTop: function (){
				$(window).on("scroll", function() {
					if ($(this).scrollTop() > 200) {
						$('.scrollup').fadeIn();
					} else {
						$('.scrollup').fadeOut();
					}
				});

				$('.scrollup').on("click", function()  {
					$("html, body").animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			},
			HoverParallax: function(){
				if ($('.scene').length > 0 ) {
					$('.scene').parallax({
						scalarX: 10.0,
						scalarY: 10.0,
					}); 
				}
			},
			MainSlider: function (){
				var	tpj = jQuery;
				if(window.RS_MODULES === undefined) window.RS_MODULES = {};
				if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
				RS_MODULES.modules["revslider271"] = {once: RS_MODULES.modules["revslider271"]!==undefined ? RS_MODULES.modules["revslider271"].once : undefined, init:function() {
					window.revapi27 = window.revapi27===undefined || window.revapi27===null || window.revapi27.length===0  ? document.getElementById("rev_slider_27_1") : window.revapi27;
					if(window.revapi27 === null || window.revapi27 === undefined || window.revapi27.length==0) { window.revapi27initTry = window.revapi27initTry ===undefined ? 0 : window.revapi27initTry+1; if (window.revapi27initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider271"].init()}); return;}
					window.revapi27 = jQuery(window.revapi27);
					if(window.revapi27.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_27_1"); return;}
					revapi27.revolutionInit({
						revapi:"revapi27",
						DPR:"dpr",
						sliderLayout:"fullwidth",
						visibilityLevels:"1240,1024,778,480",
						gridwidth:"1240,1024,778,480",
						gridheight:"930,768,500,450",
						perspective:600,
						perspectiveType:"global",
						editorheight:"930,768,500,450",
						responsiveLevels:"1240,1024,778,480",
						progressBar:{disableProgressBar:true},
						navigation: {
							wheelCallDelay:1000,
							onHoverStop:false,
							thumbnails: {
								enable:true,
								tmp:"<span class=\"tp-thumb-img-wrap\">  <span class=\"tp-thumb-image\"></span></span>",
								style:"gyges",
								h_align:"right",
								v_offset:0,
								space:5,
								width:70,
								height:70,
								wrapper_padding:5,
								wrapper_color:"transparent"
							}
						},
						parallax: {
							levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
							type:"scroll",
							origo:"slidercenter",
							speed:0
						},
						viewPort: {
							global:false,
							globalDist:"-200px",
							enable:false
						},
						fallbacks: {
							allowHTML5AutoPlayOnAndroid:true
						},
					});

				}} 
				if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
				var	tpj = jQuery;
				if(window.RS_MODULES === undefined) window.RS_MODULES = {};
				if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
				RS_MODULES.modules["revslider291"] = {once: RS_MODULES.modules["revslider291"]!==undefined ? RS_MODULES.modules["revslider291"].once : undefined, init:function() {
					window.revapi29 = window.revapi29===undefined || window.revapi29===null || window.revapi29.length===0  ? document.getElementById("rev_slider_29_1") : window.revapi29;
					if(window.revapi29 === null || window.revapi29 === undefined || window.revapi29.length==0) { window.revapi29initTry = window.revapi29initTry ===undefined ? 0 : window.revapi29initTry+1; if (window.revapi29initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider291"].init()}); return;}
					window.revapi29 = jQuery(window.revapi29);
					if(window.revapi29.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_29_1"); return;}
					revapi29.revolutionInit({
						revapi:"revapi29",
						DPR:"dpr",
						sliderLayout:"fullwidth",
						visibilityLevels:"1240,1024,778,480",
						gridwidth:"1240,1024,778,480",
						gridheight:"930,768,650,450",
						perspective:600,
						perspectiveType:"global",
						editorheight:"930,768,650,450",
						responsiveLevels:"1240,1024,778,480",
						progressBar:{disableProgressBar:true},
						navigation: {
							wheelCallDelay:1000,
							onHoverStop:false,
							arrows: {
								enable:true,
								style:"hesperiden",
								hide_onmobile:true,
								hide_under:778,
								left: {
									h_offset:30
								},
								right: {
									h_align:"left",
									h_offset:29,
									v_offset:-53
								}
							}
						},
						viewPort: {
							global:false,
							globalDist:"-200px",
							enable:false
						},
						fallbacks: {
							allowHTML5AutoPlayOnAndroid:true
						},
					});

					}} // End of RevInitScript
					if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
					if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
					var	tpj = jQuery;
					if(window.RS_MODULES === undefined) window.RS_MODULES = {};
					if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
					RS_MODULES.modules["revslider301"] = {once: RS_MODULES.modules["revslider301"]!==undefined ? RS_MODULES.modules["revslider301"].once : undefined, init:function() {
						window.revapi30 = window.revapi30===undefined || window.revapi30===null || window.revapi30.length===0  ? document.getElementById("rev_slider_30_1") : window.revapi30;
						if(window.revapi30 === null || window.revapi30 === undefined || window.revapi30.length==0) { window.revapi30initTry = window.revapi30initTry ===undefined ? 0 : window.revapi30initTry+1; if (window.revapi30initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider301"].init()}); return;}
						window.revapi30 = jQuery(window.revapi30);
						if(window.revapi30.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_30_1"); return;}
						revapi30.revolutionInit({
							revapi:"revapi30",
							DPR:"dpr",
							sliderLayout:"fullwidth",
							visibilityLevels:"1240,1024,778,480",
							gridwidth:"1240,1024,778,480",
							gridheight:"1040,768,600,470",
							perspective:600,
							perspectiveType:"global",
							editorheight:"1040,768,600,470",
							responsiveLevels:"1240,1024,778,480",
							progressBar:{disableProgressBar:true},
							navigation: {
								wheelCallDelay:1000,
								onHoverStop:false,
								thumbnails: {
									enable:true,
									tmp:"<span class=\"tp-thumb-img-wrap\">  <span class=\"tp-thumb-image\"></span></span>",
									style:"gyges",
									h_align:"left",
									v_offset:0,
									space:5,
									width:80,
									height:80,
									min_width:30,
									wrapper_padding:5,
									wrapper_color:"transparent"
								}
							},
							viewPort: {
								global:false,
								globalDist:"-200px",
								enable:false
							},
							fallbacks: {
								allowHTML5AutoPlayOnAndroid:true
							},
						});

					}} 

				},
				counterUp: function (){
					if($('.counter').length){
						jQuery('.counter').counterUp({
							delay: 50,
							time: 2000,
						});
					};
				},
				PopUp: function (){
					$('.zoom-gallery').magnificPopup({
						delegate: 'a',
						type: 'image',
						closeOnContentClick: false,
						closeBtnInside: false,
						mainClass: 'mfp-with-zoom mfp-img-mobile',
						gallery: {
							enabled: true
						},
						zoom: {
							enabled: true,
							duration: 300, 
							opener: function(element) {
								return element.find('img');
							}
						}
					});
					jQuery(window).on('load', function(){
						$('.filtr-container').imagesLoaded ( function(){});
						var filterizd = $('.filtr-container');

						if(filterizd.length) {
							filterizd.filterizr({

							});
							$('.filtr-button').on('click', function() {

								$('.filtr-button.filtr-active').removeClass('filtr-active');
								$(this).addClass('filtr-active');
							});
						}
					});
				},
				CarouselSliderJs: function (){
					$('.ft-service-slider-wrapper').slick({
						arrow: false,
						dots: true,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}

						]
					});
					$('.ft-project-slider-area').slick({
						arrow: false,
						dots: true,
						infinite: true,
						slidesToShow: 2,
						slidesToScroll: 1,
						centerMode: true,
						variableWidth: true,
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}

						]
					});
					$('.ft-testimonial-slider-area').slick({
						arrow: false,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						dots: true,
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 799,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 599,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
						]
					});
					$('.ft-service-slider-2').slick({
						arrow: false,
						infinite: false,
						slidesToShow: 4,
						slidesToScroll: 1,
						dots: true,
						responsive: [
						{
							breakpoint: 1100,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 799,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 599,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
						]
					});
					$('.ft-portfolio-slider-2').slick({
						arrow: false,
						infinite: false,
						slidesToShow: 4,
						slidesToScroll: 1,
						dots: true,
						responsive: [
						{
							breakpoint: 1200,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 799,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 599,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
						]
					});
					$('.ft-blog-slider-2').slick({
						arrow: true,
						dots: false,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						prevArrow: ".blg-left_arrow",
						nextArrow: ".blg-right_arrow",
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
								infinite: true,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}

						]
					});
					$("#mySlider1").AnimatedSlider( { prevButton: "#btn_prev1", 
						nextButton: "#btn_next1",
						visibleItems: 3,
						infiniteScroll: true,
						willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
						changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
					});
					$(".ft-testimonial-slider-3").slick({
						autoplay: false,
						dots: true,
						customPaging : function(slider, i) {
							var thumb = $(slider.$slides[i]).data();
							return '<a>'+(i+1)+'</a>';
						},
					});
					$('.blog-slider-3').slick({
						dots: true,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						customPaging : function(slider, i) {
							var thumb = $(slider.$slides[i]).data();
							return '<a>'+(i+1)+'</a>';
						},
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
								infinite: true,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}

						]
					});
					$('.ft-thx-project-slider').slick({
						arrow: true,
						dots: false,
						infinite: true,
						slidesToShow: 4,
						slidesToScroll: 1,
						prevArrow: ".port_left_arrow",
						nextArrow: ".port_right_arrow",
						responsive: [
						{
							breakpoint: 1300,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3,
								infinite: true,
							}
						},
						{
							breakpoint: 1025,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2,
								infinite: true,
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 500,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}

						]
					});
					$('.pr-sv-testimonial-slider').slick({
						infinite: true,
						slidesToShow: 1,
						slidesToScroll: 1,
						dots: true,
						nav: false,
					});
					$('.pr-cor-blog-slider').slick({
						arrow: false,
						dots: true,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 400,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						]
					});
					$('.ft-thx-testimonial-slider-2').slick({
						arrow: false,
						dots: true,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 400,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						]
					});
					$('.ft-thx-sponsor-slider').slick({
						arrow: false,
						dots: false,
						infinite: false,
						slidesToShow: 4,
						autoplay: true,
						slidesToScroll: 1,
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
								dots: false
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 400,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						]
					});
					$('.ft-thx-project-slider-3').slick({
						arrow: true,
						dots: true,
						centerMode: true,
						slidesToShow: 3,
						slidesToScroll: 1,
						responsive: true,
						prevArrow: ".port_left_arrow3",
						nextArrow: ".port_right_arrow3",
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 1000,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 400,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						},
						]
					});
					$('.pr-sx-team-slider-for').slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						fade: true,
						asNavFor: '.pr-sx-team-img-nav'
					});
					$('.pr-sx-team-img-nav').slick({
						slidesToShow: 3,
						slidesToScroll: 1,
						centerMode: false,
						arrows: true,
						centerMode: true,
						asNavFor: '.pr-sx-team-slider-for',
						dots: false,
						focusOnSelect: true,
					});
					$("#mySlider2").AnimatedSlider( { prevButton: "#btn_prev2", 
						nextButton: "#btn_next2",
						visibleItems: 3,
						infiniteScroll: true,
						willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
						changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
					});
					$('.pr-an-blog-slider').slick({
						arrow: true,
						infinite: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						prevArrow: ".blg-an-left_arrow",
						nextArrow: ".blg-an-right_arrow",
						responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1,
								infinite: true,
								dots: true
							}
						},
						{
							breakpoint: 800,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
						]
					});
				},
				CircleProgress: function (){
					if($('.count-box').length){
						$('.count-box').appear_c(function(){
							var $t = $(this),
							n = $t.find(".count-text").attr("data-stop"),
							r = parseInt($t.find(".count-text").attr("data-speed"), 10);
							if (!$t.hasClass("counted")) {
								$t.addClass("counted");
								$({
									countNum: $t.find(".count-text").text()
								}).animate({
									countNum: n
								}, {
									duration: r,
									easing: "linear",
									step: function() {
										$t.find(".count-text").text(Math.floor(this.countNum));
									},
									complete: function() {
										$t.find(".count-text").text(this.countNum);
									}
								});
							}
						},{accY: 0});
					};
					if($('.dial').length){
						$('.dial').appear_c(function(){
							var elm = $(this);
							var color = elm.attr('data-fgColor');  
							var perc = elm.attr('value'); 
							var thickness = elm.attr('thickness');  
							elm.knob({ 
								'value': 0, 
								'min':0,
								'max':100,
								'skin':'tron',
								'readOnly':true,
								'thickness':.1,
								'dynamicDraw': true,
								'displayInput':false
							});
							$({value: 0}).animate({ value: perc }, {
								duration: 3500,
								easing: 'swing',
								progress: function () { elm.val(Math.ceil(this.value)).trigger('change');
							}
						});
						},{accY: 0});
					}
				},
				countDown:  function (){
					if ($('.coming-soon-countdown').length > 0) {
						var deadlineDate = new Date('sep 26, 2023 23:59:59').getTime();
						var countdownDays = document.querySelector('.days .ft-count-down-number');
						var countdownHours = document.querySelector('.hours .ft-count-down-number');
						var countdownMinutes = document.querySelector('.minutes .ft-count-down-number');
						var countdownSeconds = document.querySelector('.seconds .ft-count-down-number');
						setInterval(function () {
							var currentDate = new Date().getTime();
							var distance = deadlineDate - currentDate;
							var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							var seconds = Math.floor((distance % (1000 * 60)) / 1000);
							countdownDays.innerHTML = days;
							countdownHours.innerHTML = hours;
							countdownMinutes.innerHTML = minutes;
							countdownSeconds.innerHTML = seconds;
						}, 1000);

					};
					jQuery('.video_box').magnificPopup({
						disableOn: 200,
						type: 'iframe',
						mainClass: 'mfp-fade',
						removalDelay: 160,
						preloader: false,
						fixedContentPos: false,
					});
				},
				MilesRange: function (){
					if ($("#slider-range").length) {
						$( "#slider-range" ).slider({
							range: true,
							min: 0,
							max: 3000,
							values: [ 0, 1500 ],
							slide: function( event, ui ) {
								$( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
							}
						});
					};
					if ($("#amount").length) {
						$( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) +
							" - " + $( "#slider-range" ).slider( "values", 1 ) );
					};
					$('.count').prop('disabled', true);
					$(document).on('click','.plus',function(){
						$('.count').val(parseInt($('.count').val()) + 1 );
					});
					$(document).on('click','.minus',function(){
						$('.count').val(parseInt($('.count').val()) - 1 );
						if ($('.count').val() == 0) {
							$('.count').val(1);
						}
					});
				},


			}
		}
		jQuery(document).ready(function (){
			FasTrans.init();
		});

	})();