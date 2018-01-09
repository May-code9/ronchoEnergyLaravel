/*
	Project Name : Manufactor

	## Document Scroll

	## Document Ready

		-- Scrolling Navigation

		-- Find all anchors

		-- Add Easing Effect

		-- Responsive Caret

		-- Remove p empty tag for Shortcode

		-- Expand Panel

		-- Portfolio Section

		-- Client Section

		-- Testimonial Section

		-- Accordion

		-- Latestblog Section

		-- Subscribe Section

		-- WeAre Section

		-- WhyChoose Us Section

		-- Testimonial 2 Section

		-- Latest News Section

		-- Team Section

		-- AboutUs Section

		-- Service Single Details

		-- Project Single

		-- ContactUs Section

		-- Expanding Search

		-- Blog Post Social Share

		-- Portflio Post Social Share

	## Window Load
		-- Site Loader
*/

(function($) {

	"use strict"

	/* -- iPad touch hover effect:: Home 1 Latest Blog */
	$('.post-img').on('click touchend', function(e) {
		var el = $(this);
	});

	/* -- iPad touch hover effect:: Blog Page Entry Ccver */
	$('.entry-cover').on('click touchend', function(e) {
		var el = $(this);
	});

	/* ## Document Scroll - Window Scroll */
	$( document ).scroll(function()
	{

		var scroll	=	$(window).scrollTop();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height )
		{
			$(".menu-block").addClass("navbar-fixed-top animated fadeInDown").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".menu-block").removeClass("navbar-fixed-top animated fadeInDown");
		}
		else
		{
			$(".menu-block").removeClass("navbar-fixed-top animated fadeInDown");
		}
	});

	/* ## Document Ready - Handler for .ready() called */
	$(document).ready(function($) {

		/* -- Scrolling Navigation */

		var scroll	=	$(window).scrollTop();
		var width	=	$(window).width();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height -500 )
		{
			$(".menu-block").addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".menu-block").removeClass("navbar-fixed-top");
		}
		else
		{
			$(".menu-block").removeClass("navbar-fixed-top");
		}
		/* set sticky menu - end */

		/* Testimonials Add class To ACtive Slide  layout 1*/
		$(".testimonial2-section .carousel-inner .item:first").addClass("active");

		/* Service Single ccordion */
		$(".accordion-section .panel-collapse.collapse:first").addClass("in");

		$(".accordion-section .panel-title a").addClass("collapsed");

		if( $(".accordion-section .panel-collapse.collapse.in").length == 1 ) {
			$(".accordion-section .panel-title a:first").removeClass("collapsed");
		}

		/* -- Responsive Caret */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}

			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});

		/* -- Expand Panel */
		$("#slideit").on ("click", function() {
			$("#slidepanel").slideDown(1000);
			$("html").animate({ scrollTop: 0 }, 1000);
		});

		/* Collapse Panel */

		$("#closeit").on ("click", function() {
			$("#slidepanel").slideUp("slow");
			$("html").animate({ scrollTop: 0 }, 1000);
		});

		/* Switch buttons from "Log In | Register" to "Close Panel" on click */
		$("#toggle a").on ("click", function () {
			$("#toggle a").toggle();
		});

		/* -- Portfolio Section */
		if( $(".portfolio-section").length){
			setTimeout(function() {
				var $container = $('.portfolio-list');
				$container.isotope({
				  itemSelector: '.portfolio-list > li',
				  gutter: 0,
				  transitionDuration: "0.5s"

				});

				$('#filters a').on('click',function(){
					$('#filters a').removeClass('active');
					$(this).addClass('active');
					var selector = $(this).attr('data-filter');
					$container.isotope({ filter: selector });
					return false;
				});
			}, 4000);

			var url;
			$(".portfolio-section").magnificPopup({
				delegate: ".zoom",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1]
				},
				image: {
					tError: "<a href="%url%">The image #%curr%</a> could not be loaded.",
				}
			});
		}

		/* -- Client Section */
		if( $(".client-section").length ) {
			$(".client-logo-block").owlCarousel({
				loop: true,
				nav: false,
				dots: false,
				margin: 20,
				smartSpeed: 200,
				autoplay: true,
				responsive:{

					0:{
						items: 2
					},
					480:{
						items: 3
					},
					640:{
						items: 3
					},
					992:{
						items: 5
					}
				}
			})
		}

		/* -- Testimonial Section */
		if( $(".testimonial-section").length ) {
			$(".testimonial-carousel").owlCarousel({
				loop: true,
				nav: false,
				dots: false,
				margin: 20,
				smartSpeed: 200,
				autoplay: true,
				responsive:{
					0:{
						items: 1
					},
					639:{
						items: 2
					},
					768:{
						items: 2
					},
					992:{
						items: 3
					}
				}
			})
		}

		/* -- Testimonial 2 Section */
		if( $(".testimonial2-section").length ) {
			$( "#testimonial2 .total_index" ).html( $("#testimonial2 .item").length );
			if( $("#testimonial2 .item").length > 1 ){
				if( $("#testimonial2 .item.active").index() == 0 ){
					$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item").length );
					$( "#testimonial2 .index_next" ).html( $("#testimonial2 .item.active").index() + 2 );

				} else if( $("#testimonial2 .item.active").index() == $("#testimonial2 .item").length - 1 ) {
					$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item.active").index() )
					$( "#testimonial2 .index_next" ).html( 1 );

				} else {
					$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item.active").index() );
					$( "#testimonial2 .index_next" ).html( $("#testimonial2 .item.active").index() + 2 );
				}
			} else {
				$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item").length );
				$( "#testimonial2 .index_next" ).html( $("#testimonial2 .item").length );
			}

			$("#testimonial2").on("slide.bs.carousel", function () {
				if( $("#testimonial2 .item").length > 1 ){
					if( $("#testimonial2 .item.active").index() == 0 ){
						$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item").length );
						$( "#testimonial2 .index_next" ).html( $("#testimonial2 .item.active").index() + 2 );
					} else if( $("#testimonial2 .item.active").index() == $("#testimonial2 .item").length - 1 ) {
						$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item.active").index() );
						$( "#testimonial2 .index_next" ).html( 1 );

					} else {
						$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item.active").index() );
						$( "#testimonial2 .index_next" ).html( $("#testimonial2 .item.active").index() + 2 );
					}

				} else {
					$( "#testimonial2 .index_prev" ).html( $("#testimonial2 .item").length );
					$( "#testimonial2 .index_next" ).html( $("#testimonial2 .item").length );
				}
			});
		}

		/* -- Expanding Search */
		new UISearch( document.getElementById( "sb-search" ) );
	});

	/* -- Document Ready /- */

	/* ## Window Load - Handler for .load() called */
	$(window).load(function() {

		/* -- Site Loader */
		if ( !$("html").is(".ie6, .ie7, .ie8") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
	});

	/* -- Blog Post Social Share */
	if( $('.social-icon-share').length ) {

		$('.social-icon-share ul > li > a', this).bind('click', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var data_action = $(this).attr('data-action');
			var data_title = $(this).attr('data-title');
			var data_url = $(this).attr('data-url');

			if( data_action == 'twitter' ) {
				window.open('http://twitter.com/intent/tweet?status='+encodeURIComponent(data_url)+'+'+encodeURIComponent(data_title),'sharer','toolbar=0,status=0,width=580,height=325');
			}
			else if( data_action == 'facebook' ) {
				window.open('http://www.facebook.com/share.php?u='+encodeURIComponent(data_url)+'&title='+encodeURIComponent(data_title),'sharer','toolbar=0,status=0,width=580,height=325');
			}
			else if( data_action == 'linkedin' ) {
				window.open('http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(data_url)+'&title='+encodeURIComponent(data_title)+'&source='+encodeURIComponent(data_url),'sharer','toolbar=0,status=0,width=580,height=325');
			}

		});
	}

	/* -- Portflio Post Social Share */
	if( $('.portfolio-socail-share').length ) {

		$('.portfolio-socail-share ul > li > a', this).bind('click', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var data_action = $(this).attr('data-action');
			var data_title = $(this).attr('data-title');
			var data_url = $(this).attr('data-url');

			if( data_action == 'twitter' ) {
				window.open('http://twitter.com/intent/tweet?status='+encodeURIComponent(data_url)+'+'+encodeURIComponent(data_title),'sharer','toolbar=0,status=0,width=580,height=325');
			}
			else if( data_action == 'facebook' ) {
				window.open('http://www.facebook.com/share.php?u='+encodeURIComponent(data_url)+'&title='+encodeURIComponent(data_title),'sharer','toolbar=0,status=0,width=580,height=325');
			}
			else if( data_action == 'linkedin' ) {
				window.open('http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(data_url)+'&title='+encodeURIComponent(data_title)+'&source='+encodeURIComponent(data_url),'sharer','toolbar=0,status=0,width=580,height=325');
			}
			else if( data_action == 'dribbble' ) {
				window.open('https://dribbble.com/share?url='+encodeURIComponent(data_url),'sharer','toolbar=0,status=0,width=580,height=325');
			}

		});
	}
})(jQuery);
