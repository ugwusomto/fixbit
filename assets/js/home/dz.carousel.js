/* JavaScript Document */
jQuery(document).ready(function() {
    'use strict';

	/* Widget Carousel function by = owl.carousel.js */
	jQuery('.widget-carousel').owlCarousel({
		loop:true,
		center:false,
		margin:0,
		nav:true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		dots: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			1024:{
				items:1
			},
			1200:{
				items:1
			},
			1400:{
				items:1
			}
		}
	})
	
	/* Widget Carousel function by = owl.carousel.js */
	jQuery('.category-owl').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			},
			1400:{
				items:4
			}
		}
	})
	
	/* Widget Carousel function by = owl.carousel.js */
	jQuery('.category-owl-2').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:2
			},
			1200:{
				items:3
			},
			1400:{
				items:3
			}
		}
	})
	/*Custom Navigation work*/
	jQuery('#next-slide').on('click', function(){
	   $('.category-owl-2').trigger('next.owl.carousel');
	});

	jQuery('#prev-slide').on('click', function(){
	   $('.category-owl-2').trigger('prev.owl.carousel');
	});
	/*Custom Navigation work*/
	
	/* Widget Carousel function by = owl.carousel.js */
	jQuery('.post-carousel').owlCarousel({
		loop:true,
		center:false,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-long-arrow-left"></i> Prev', 'Next <i class="fa fa-long-arrow-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			767:{
				items:2
			},
			1200:{
				items:3
			},
			1650:{
				items:4
			}
		}
	})
	
	/* Widget Carousel function by = owl.carousel.js */
	jQuery('.top-post-carousel').owlCarousel({
		loop:true,
		center:false,
		margin:20,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			},
			1400:{
				items:4
			}
		}
	})
	
	/* Widget Carousel function by = owl.carousel.js */
	jQuery('.insta-post-carousel').owlCarousel({
		loop:true,
		center:false,
		margin:12,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:2,
				center:true
			},
			480:{
				items:4
			},			
			1024:{
				items:5
			},
			1200:{
				items:6
			},
			1400:{
				items:7
			}
		}
	})
	
	/* Trending Post Box function by = owl.carousel.js */
	jQuery('.trending-post-carousel').owlCarousel({
		loop:true,
		margin:20,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		stagePadding: 100,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
				stagePadding: 0
			},
			480:{
				items:1.2,
			},			
			1024:{
				items:2
			},
			1200:{
				items:3
			},
			1500:{
				items:4
			},
			1650:{
				items:5
			}
		}
	})
	
	/* Trending Post Box function by = owl.carousel.js */
	jQuery('.trending-post-bx1').owlCarousel({
		loop:true,
		center:true,
		margin:0,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:2,
			},			
			1024:{
				items:3
			},
			1200:{
				items:5
			},
			1400:{
				items:5
			}
		}
	})
	
	/* blog Card Carousel function by = owl.carousel.js */
	jQuery('.blog-card-carousel').owlCarousel({
		loop:true,
		margin:0,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:2,
			},
			480:{
				items:3,
			},			
			1024:{
				items:5
			},
			1200:{
				items:6
			},
			1400:{
				items:6
			}
		}
	})
	
	/* Blog Slider function by = owl.carousel.js */
	jQuery('.blog-slider-full').owlCarousel({
		loop:true,
		margin:0,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1,
			},			
			1024:{
				items:1
			},
			1200:{
				items:1
			},
			1400:{
				items:1
			}
		}
	})
	
	/* Blog Slider function by = owl.carousel.js */
	jQuery('.blog-slider').owlCarousel({
		loop:true,
		margin:0,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1,
			},			
			1024:{
				items:1
			},
			1200:{
				items:1
			},
			1400:{
				items:1
			}
		}
	})
	
	/* Blog Slider function by = owl.carousel.js */
	jQuery('.product-slide').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:2,
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			},
			1400:{
				items:4
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.post-slide').owlCarousel({
		loop:true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		margin:0,
		nav:false,
		dots:true,
		navText: ['<i class="la la-angle-up"></i>', '<i class="la la-angle-down"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			991:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.post-slide1').owlCarousel({
		loop:true,
		margin:40,
		center:true,
		nav:true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		dots: false,
		navText: ['<i class="la la-long-arrow-left"></i>', '<i class="la la-long-arrow-right"></i>'],
		responsive:{
			0:{
				items:3,
			},
			480:{
				items:4,
			},			
			991:{
				items:5
			},
			1000:{
				items:6,
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.post-slide2').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="la la-long-arrow-left"></i>', '<i class="la la-long-arrow-right"></i>'],
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1
			},
			768:{
				items:2
			},			
			1000:{
				items:3
			},
			1400:{
				items:3
			}
		}
	})
	
	/* Blog Slider function by = owl.carousel.js */
	jQuery('.banner-slide').owlCarousel({
		loop:true,
		margin:0,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-angle-up"></i>', '<i class="fa fa-angle-down"></i>'],
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1,
			},			
			1024:{
				items:1
			},
			1200:{
				items:1
			},
			1400:{
				items:1
			}
		}
	})
	/* image-carousel function by = owl.carousel.js */
	jQuery('.header-blog-carousel').owlCarousel({
		loop:true,
		margin:20,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1,
				margin:10,
				center: true,
				stagePadding: 30
			},
			480:{
				items:1,
				margin:10,
				center: true,
				stagePadding: 30
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			},
			1400:{
				items:4
			}
		}
	})
	
});
/* Document .ready END */