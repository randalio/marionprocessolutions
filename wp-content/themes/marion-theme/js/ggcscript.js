/*
*
*  AUTOMPS
*  Goldstein Group Communications - @2019 UID
*
*/

(function ($) {
	'use strict';

// GLOBAL VARIABLES


if (typeof MPS == 'undefined') {
  var MPS = {};
}

MPS.site = function() {
	return {

		init: function () {
			MPS.site.initEvents();
		},
		initEvents: function () {
			//MPS.site.animateReveal();
			MPS.site.stickyHeader();
			MPS.site.scaleBGVideo();
			MPS.site.gridItemText();
			MPS.site.mobileMenu();
			MPS.site.isoInit();
			MPS.site.gridItemText();
			MPS.site.headerSearch();
			MPS.site.smoothState();
			MPS.site.particles();
			MPS.site.heroAnimation();
			MPS.site.heroCarousel();


			$(window).resize( function() {
				//MPS.site.animateReveal();
				MPS.site.gridItemText();
				MPS.site.particles();
			});

			$(window).scroll(function() {
				//MPS.site.animateReveal();
				MPS.site.stickyHeader();
			});
		},
		windowWidth: function(){
			var windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
			return windowWidth;
		},
		windowHeight: function(){
			var windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
			return windowHeight;
		},
		setLargestHeight: function(element){
			var tallestHeight = 0;
			element.each(function(){
				var thisHeight = $(this).outerHeight();
				if(parseInt(thisHeight) > parseInt(tallestHeight) ){
					tallestHeight = thisHeight;
				}
			});
			element.height(tallestHeight);

			},
			setBiggestWidth: function(element){
				var biggestWidth = 0;
				element.each(function(){
					var thisWidth = $(this).outerWidth();
					if(parseInt(thisWidth) > parseInt(biggestWidth) ){
						biggestWidth = thisWidth;
					}
				});
				element.width(biggestWidth + 7);

			},
			scaleBGVideo: function(){
				var windowWidth = MPS.site.windowWidth();
				if($('.video-container').length){

					$('.video-container').find('video').css({ 'width': 'auto', 'height': 'auto', 'object-fit': 'cover'}).fadeIn(1000);

					if(768 < windowWidth){

						$('.video-container').each(function(){
							var containerHeight		= $(this).outerHeight();
							var containerWidth		= $(this).outerWidth();

							var videoWidth 			= $(this).find('video').width();
							var videoHeight 		= $(this).find('video').height();

							var videoRatio = (videoWidth / videoHeight).toFixed(2);

							var widthRatio = containerWidth / videoWidth
								, heightRatio = containerHeight / videoHeight;

							var newWidth = 0,
									newHeight = 0;

								if(widthRatio > heightRatio) {
						        newWidth = containerWidth;
						        newHeight = Math.ceil( containerWidth / videoRatio );
						    }else{
						        newHeight = containerHeight;
						        newWidth = Math.ceil( containerHeight * videoRatio );
						    }

							$(this).find('video').css({ 'width': newWidth, 'height': newHeight, 'object-fit': 'cover' });
						});
					}
				}
			},
			isIE: function() {
			    return !!window.navigator.userAgent.match(/MSIE|Trident/);
			},
			stickyHeader: function(){

				if( !$('.error404').length  ){

					var windowWidth = MPS.site.windowWidth();

					var head_height = $('.site-header').outerHeight();
					var	logo_height = $('.header-logo img').outerHeight();

					//if( windowWidth > 991){
						//alert('window widxth greater than 991');
						var scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)

						if (scrollTop > 0 ) {
							$('.site-header').addClass('sticky');
							$('.main-inner-wrap').css('padding-top', head_height + 'px');
							//$('.header-logo img').css('height', sticky_logo_height );
						} else {
							$('.site-header').removeClass('sticky');
							$('.main-inner-wrap').css('padding-top', 0 + 'px');
						}
					//}

				}

			},
			gridItemText: function(){


				setTimeout(function(){

					if($('.resource-grid').length){
						var windowWidth = MPS.site.windowWidth();
						if($('.tile').length){
							$('.tile').height('auto');
							if(768 < windowWidth){
								$('.resource-grid').each(function(){
									var _this = $(this);
									var item = _this.find('.tile');
									MPS.site.setLargestHeight(item);
								});
							}
						}
					}

					if($('.icon-grid').length){
						if($('.icon-label').length){
							$('.icon-label').height('auto');
								$('.icon-grid').each(function(){
									var _this = $(this);
									var item = _this.find('.icon-label');
									MPS.site.setLargestHeight(item);
								});
						}
					}

					if($('.image-gallery').length){
						var windowWidth = MPS.site.windowWidth();
						if($('.image_wrap.tile').length){
							$('.image_wrap.tile').height('auto');
							if(768 < windowWidth){
								$('.image-gallery').each(function(){
									var _this = $(this);
									var item = _this.find('.image_wrap.tile');
									MPS.site.setLargestHeight(item);
								});
							}
						}
					}

					if($('.config-gal').length){
						var windowWidth = MPS.site.windowWidth();
						if($('.item').length){
							$('.item').height('auto');
							//if(768 < windowWidth){
								$('.config-gal').each(function(){
									var _this = $(this);
									var item = _this.find('.item');
									MPS.site.setLargestHeight(item);
								});
							//}
						}
					}

				}, 1000);




			},
			mobileMenu: function(){
				setTimeout(function(){
					$('.navbar-toggler').removeClass('pe-none');
				}, 1000);

				$('.navbar-toggler').on('click', function(){
					$('.navbar-toggler .fa-times').toggleClass('d-none');
					$('.navbar-toggler .fa-bars').toggleClass('d-none');
					$('.top-right-menu-mobile').toggleClass('d-none');
				});
			},
			getArgs: function() {
				var args = new Object();
				var query = location.search.substring(1);  // Get query string.
				var pairs = query.split("&");              // Break at comma.
				for(var i = 0; i < pairs.length; i++) {
						var pos = pairs[i].indexOf('=');       // Look for "name=value".
						if (pos == -1) continue;               // If not found, skip.
						var argname = pairs[i].substring(0,pos);  // Extract the name.
						var value = pairs[i].substring(pos+1); // Extract the value.
						args[argname] = unescape(value);          // Store as a property.
				}
				return args;                               // Return the object.
			},
			isoInit: function(){

				if( $('.resource-filter-grid').length ){

					var args = MPS.site.getArgs();
					var filter = args.filter;
					if( filter == null || filter == "****"){
						history.pushState(null, '', '?filter=****');
					}

						//init Isotope
						var $grid = $('.resource-gallery').isotope({
							itemSelector: '.resource-tile ',
							layoutMode: 'masonry',
							masonry: {
						    horizontalOrder: true
						  }
						});

						// store filter for each group
						var filters = {};

						//flatten and concatenate values
						function concatValues( obj ) {
							var value = '';
							for ( var prop in obj ) {
								value += obj[ prop ];
							}
							return value;
						}

						$('select').on( 'change', function( event ) {
							var $select = $( event.target );
							// get group key
							var filterGroup = $select.attr('value-group');
							// set filter for group
							filters[ filterGroup ] = event.target.value;
							// combine filters
							var filterValue = concatValues( filters );
							// set filter for Isotope
							$grid.isotope({ filter: filterValue });

							history.pushState(null, '', '?filter='+filterValue);
							//console.log('?combo='+filterValue);
						});


						if( filter != "****" && filter != null ){
							//filter = filter.replace('*','');
							var filter_arrary = filter.split('.');

							$('option').each( function(){
								//console.log( $(this).val() );
								if( '.'+filter_arrary[0] == $(this).val() ){
									$(this).parent('select').val( '.'+filter_arrary[0] );
								}
								if( '.'+filter_arrary[1] == $(this).val() ){
									$(this).parent('select').val( '.'+filter_arrary[1] );
								}
								if( '.'+filter_arrary[2] == $(this).val() ){
									$(this).parent('select').val( '.'+filter_arrary[2] );
								}
								if( '.'+filter_arrary[3] == $(this).val() ){
									$(this).parent('select').val( '.'+filter_arrary[3] );
								}
								$( "select" ).trigger( "change" );

							});

						}



						$('#for_type').on('click', function(){
							$('#type_filter').click();
						});
						$('#for_process').on('click', function(){
							$('#process_filter').click();
						});
						$('#for_industry').on('click', function(){
							$('#industry_filter').click();
						});
						$('#for_product_type').on('click', function(){
							$('#product_type_filter').click();
						});




				}


				if( $('body.search-results').length ){

					if( $('.search-results-grid').length  ){
						//init Isotope
						setTimeout(function() {
							var $grid = $('.search-results-grid').isotope({
								itemSelector: '.tile ',
								layoutMode: 'masonry',
								masonry: {
									horizontalOrder: true
								}
							});
						}, 500);
					}

				}

			},
			headerSearch: function(){
				//console.log('headerSearch');
				$('#siteSearch').on('keyup', function(){
					var input_len = $('#siteSearch').val().length;
					console.log('input_len: '+input_len);
					if( input_len > 0 ){
							$('#searchsubmit').removeClass('pe-none');
					}else{
							$('#searchsubmit').addClass('pe-none');
					}
				});
			},
			smoothState: function(){

				//
				// var $page = $('#superMain'),
			  //     options = {
			  //       debug: true,
			  //       prefetch: true,
			  //       cacheLength: 4,
				// 			scroll: false,
			  //       onStart: {
			  //         duration: 0, // Duration of our animation
			  //         render: function ($container) {
			  //           // Add your CSS animation reversing class
			  //           //$container.addClass('is-exiting');
				// 					$('html').addClass('no-smooth');
			  //           // Restart your animation
			  //           smoothState.restartCSSAnimations();
			  //         }
			  //       },
			  //       onReady: {
			  //         duration: 0,
			  //         render: function ($container, $newContent) {
			  //           // Remove your CSS animation reversing class
			  //           //$container.removeClass('is-exiting');
				// 					document.body.scrollTop = document.documentElement.scrollTop = 0;
				// 					$('html').removeClass('no-smooth');
			  //           // Inject the new content
			  //           $container.html($newContent);
			  //         }
			  //       }
			  //     },
			  //     smoothState = $page.smoothState(options).data('smoothState');
				//

			},
			particles: function(){

					if( $('.hero-slider').length ){

						var windowWidth = MPS.site.windowWidth();
						var area,
								bg_speed,
								fg_speed,
								count,
								bg_size;

						if( windowWidth < 768){
							// Mobile Screen
							area = 200;
							bg_speed = 6.75;
							fg_speed = 10.75;
							bg_size = 2;
							count = 250;
						}else{
							// Large Screen
							area = 400;
							count = 150;
							bg_size = 3;
							bg_speed = 6.75;
							fg_speed = 19.75;
						}

						particlesJS("particles_background", {
					  "particles": {
					    "number": {
					      "value": 200,
					      "density": {
					        "enable": true,
					        "value_area": area
					      }
					    },
					    "color": {
					      "value": "#ea724d"
					    },
					    "shape": {
					      "type": "circle",
					      "stroke": {
					        "width": 0,
					        "color": "#000000"
					      },
					      "polygon": {
					        "nb_sides": 5
					      },
					      "image": {
					        "src": "img/github.svg",
					        "width": 100,
					        "height": 100
					      }
					    },
					    "opacity": {
					      "value": 1,
					      "random": true,
					      "anim": {
					        "enable": false,
					        "speed": 1,
					        "opacity_min": 0.1,
					        "sync": false
					      }
					    },
					    "size": {
					      "value": bg_size,
					      "random": true,
					      "anim": {
					        "enable": true,
					        "speed": 1,
					        "size_min": 0.1,
					        "sync": false
					      }
					    },
					    "line_linked": {
					      "enable": false,
					      "distance": 50,
					      "color": "#ffffff",
					      "opacity": 0.1,
					      "width": 4
					    },
					    "move": {
					      "enable": true,
					      "speed": bg_speed,
					      "direction": "right",
					      "random": true,
					      "straight": false,
					      "out_mode": "out",
					      "bounce": false,
					      "attract": {
					        "enable": true,
					        "rotateX": 30000,
					        "rotateY": 30000
					      }
					    }
					  },
					  "interactivity": {
					    "detect_on": "canvas",
					    "events": {
					      "onhover": {
					        "enable": false,
					        "mode": "repulse"
					      },
					      "onclick": {
					        "enable": false,
					        "mode": "push"
					      },
					      "resize": true
					    },
					    "modes": {
					      "grab": {
					        "distance": 400,
					        "line_linked": {
					          "opacity": 1
					        }
					      },
					      "bubble": {
					        "distance": 400,
					        "size": 40,
					        "duration": 2,
					        "opacity": 8,
					        "speed": 3
					      },
					      "repulse": {
					        "distance": 200,
					        "duration": 0.4
					      },
					      "push": {
					        "particles_nb": 4
					      },
					      "remove": {
					        "particles_nb": 2
					      }
					    }
					  },
					  "retina_detect": true
					  });

					  particlesJS("particles_foreground", {
					  "particles": {
					    "number": {
					      "value": 10,
					      "density": {
					        "enable": true,
					        "value_area": area
					      }
					    },
					    "color": {
					      "value": "#ea724d"
					    },
					    "shape": {
					      "type": "circle",
					      "stroke": {
					        "width": 0,
					        "color": "#000000"
					      },
					      "polygon": {
					        "nb_sides": 5
					      },
					      "image": {
					        "src": "img/github.svg",
					        "width": 100,
					        "height": 100
					      }
					    },
					    "opacity": {
					      "value": .33,
					      "random": true,
					      "anim": {
					        "enable": false,
					        "speed": 1,
					        "opacity_min": 0.1,
					        "sync": false
					      }
					    },
					    "size": {
					      "value": 35,
					      "random": true,
					      "anim": {
					        "enable": true,
					        "speed": 1,
					        "size_min": 15,
					        "sync": false
					      }
					    },
					    "line_linked": {
					      "enable": false,
					      "distance": 50,
					      "color": "#ffffff",
					      "opacity": 0.1,
					      "width": 4
					    },
					    "move": {
					      "enable": true,
					      "speed": fg_speed,
					      "direction": "left",
					      "random": true,
					      "straight": false,
					      "out_mode": "out",
					      "bounce": false,
					      "attract": {
					        "enable": false,
					        "rotateX": 10000,
					        "rotateY": 30000
					      }
					    }
					  },
					  "interactivity": {
					    "detect_on": "canvas",
					    "events": {
					      "onhover": {
					        "enable": false,
					        "mode": "repulse"
					      },
					      "onclick": {
					        "enable": false,
					        "mode": "push"
					      },
					      "resize": true
					    },
					    "modes": {
					      "grab": {
					        "distance": 400,
					        "line_linked": {
					          "opacity": 1
					        }
					      },
					      "bubble": {
					        "distance": 400,
					        "size": 40,
					        "duration": 2,
					        "opacity": 8,
					        "speed": 3
					      },
					      "repulse": {
					        "distance": 200,
					        "duration": 0.4
					      },
					      "push": {
					        "particles_nb": 4
					      },
					      "remove": {
					        "particles_nb": 2
					      }
					    }
					  },
					  "retina_detect": true
					  });

						var section_width = $('section.hero-slider').outerWidth();
						var section_height = $('section.hero-slider').outerHeight();

						$('canvas').attr('width', section_width);
						$('canvas').attr('height', section_height);

					}

			},
			heroAnimation: function(){

				var length = $('.anim-text').length - 1;
				var time = 1000;
				$('.anim-text:first-child').addClass('active');
				$('.anim-text').each(function (index, elem) {
					var id = setTimeout(function () {
						//console.log(id);

						$(elem).prev().addClass('complete');
				  	$(elem).addClass('active');
						if( index === 0){
							//setTimeout(function () {
								$('.triangle').addClass('visible');
							//}, 500 );
						}
				  }, time += 700);
				});


			},
			heroCarousel: function(){
				if( $('.hero-slider').length ){
					$('.carousel').carousel({
					  interval: 15000,
						touch: true
					});
					var currentIndex = $('div.active').index() + 1;
					$('#heroCarousel').on('slid.bs.carousel', function () {
						//clearTimeout('#heroCarousel');

						$('.triangle').removeClass('visible');
						$('.anim-text').removeClass('active');
						$('.anim-text').removeClass('complete');
						if( currentIndex == 1){
								$('.anim-text.span-0').addClass('active');
						}
						  MPS.site.heroAnimation();

					});

					$('#heroCarousel').on('slide.bs.carousel', function () {
						// SET NEW TIMEOUT TO FIND OUT WHAT THE HIGHEST TIMEOUT ID IS
						var highestTimeoutId = setTimeout(";");
						// LOOP THROUGH NUMBER OF TIMEOUT IDS AND CLEAR EACH ONE
						for (var i = 0 ; i < highestTimeoutId ; i++) {
						    clearTimeout(i);
						}


						if( currentIndex == 2){

							$('.triangle').removeClass('visible');
							setTimeout(function () {
								$('.anim-text').removeClass('active');
								$('.anim-text').removeClass('complete');
								$('.anim-text.span-0').addClass('active');
							}, 1000);
						}


					})

				}



			},

		};  //init
}(); // HEAD

// HELPER METHODS

$( document ).ready(function() {
  MPS.site.init();
});

})(jQuery);
