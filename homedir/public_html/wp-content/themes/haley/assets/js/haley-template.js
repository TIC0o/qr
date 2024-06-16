/*
 * jQuery Haley theme functions file
 * https://www.themeinprogress.com
 *
 * Copyright 2019, ThemeinProgress
 * Licensed under MIT license
 * https://opensource.org/licenses/mit-license.php
 */

jQuery.noConflict()(function($){

	"use strict";

/* ===============================================
   Header cart
   ============================================= */

	$('div.header-cart').hover(

		function () {
			$(this).children('div.header-cart-widget').stop(true, true).fadeIn(100);
		},
		function () {
			$(this).children('div.header-cart-widget').stop(true, true).fadeOut(400);
		}

	);

/* ===============================================
   Scroll sidebar
   =============================================== */

   $(window).load(function() {

	$("#scroll-sidebar").niceScroll(".wrap", {
		cursorwidth: "5px",
		cursorborder: "1px solid #333",
		railpadding: {
			top: 0,
			left: 0,
			bottom: 0,
			right: 0
		}
	});

	$('nav.custommenu a.parent-item').click(function(){
		setTimeout(function(){
			$("#scroll-sidebar").getNiceScroll().resize();
		}, 500);
	});

	var pw = $(window).width();

	$(".open-modal-sidebar").click(function() {

		$('#overlay-body').fadeIn(600).addClass('visible');
		$('body').addClass('overlay-active');
		$('#wrapper').addClass('open-sidebar');
		
		setTimeout(function(){
			$('#scroll-sidebar a.close-modal-sidebar').focus();
		}, 100);

	});

	if ( pw < 992 ) {

		$("#sidebar-wrapper .close-modal-sidebar, #overlay-body").click(function() {

			$('#overlay-body').fadeOut(600);
			$('body').removeClass('overlay-active');
			$('#wrapper').removeClass('open-sidebar');

		});

		$("#overlay-body").swipe({

			swipeRight:function(event, direction, distance, duration, fingerCount) {

				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active');
				$('#wrapper').removeClass('open-sidebar');

			},

			threshold:0

		});

	} else if ( pw > 992 ) {

		$("#sidebar-wrapper .close-modal-sidebar, #overlay-body").click(function() {

			$('#overlay-body').fadeOut(600);
			$('body').removeClass('overlay-active');
			$('#wrapper').removeClass('open-sidebar');

		});

	}
	
});

/* ===============================================
   Mobile menu
   =============================================== */

	 $('nav#mobilemenu ul > li').each(function(){

 		if( $('ul', this).length > 0 ) {

 			var element = $(this).children('a');
 			$( '<a class="sub-indicator" href="#"><span class="sf-sub-indicator"><i class="fa fa-caret-down"></i></span></a>' ).insertAfter(element);

 		}

 	});

	function haley_open_submenu_one(selector) {

		if(
			selector.closest('a').next('ul.sub-menu').css('display') === 'none' ||
			selector.closest('a').next('ul.children').css('display') === 'none' ||
			selector.next('ul.children').css('display') === 'none'
		) {
			selector.html('<i class="fa fa-caret-up"></i>');
		} else {
			selector.html('<i class="fa fa-caret-down"></i>');
		}

		selector
			.closest('a')
			.next('ul.sub-menu')
			.stop(true,false)
			.slideToggle(500);

		selector
			.closest('a')
			.next('ul.children')
			.stop(true,false)
			.slideToggle(500);

	}

	$('nav#mobilemenu ul > li .sub-indicator, nav#mobilemenu ul > li > ul > li .sub-indicator').click(function(e){

		e.preventDefault();
		var selector = $(this);
		haley_open_submenu_one(selector);

	});

	$('nav#mobilemenu ul > li .sub-indicator, nav#mobilemenu ul > li > ul > li .sub-indicator').keydown(function(e){

		var selector = $(this);
		if ( e.keyCode === 13 ) {
			e.preventDefault();
			haley_open_submenu_one(selector);
		}

	});

/* ===============================================
   Trap tab focus on modal sidebar
   ============================================= */

	var focusableElements = [
	  'button',
	  '[href]',
	  'input',
	  'select',
	  'textarea',
	  'textarea',
	  '[tabindex]:not([tabindex="-1"])',
	];

	$.each(focusableElements, function(index, value) {

		var elements = $('#scroll-sidebar').find(value);

		var firstEl = elements[0];
		var lastEl = elements[ elements.length - 1 ];

		$(document).on('keydown', function (event) {

			var tabKey = event.keyCode === 9;
			var shiftKey = event.shiftKey;
			var activeEl = document.activeElement;

			if ( ! shiftKey && tabKey && lastEl === activeEl ) {
				event.preventDefault();
				firstEl.focus();
			}

			if ( shiftKey && tabKey && firstEl === activeEl ) {
				event.preventDefault();
				lastEl.focus();
			}

		});

	});

/* ===============================================
   Footer fix
   =============================================== */

	function haley_footer() {

		var footerHeight = $('#footer').innerHeight();
		$('#wrapper').css({'padding-bottom':footerHeight});

	}

	$( document ).ready(haley_footer);
	$( window ).resize(haley_footer);

/* ===============================================
   Scroll to top Plugin
   =============================================== */

	$(window).scroll(function() {

		if( $(window).scrollTop() > 400 ) {
			$('#back-to-top').fadeIn(500);
		} else {
			$('#back-to-top').fadeOut(500);
		}

	});

	$('#back-to-top').click(function(){
		$("html, body").animate({scrollTop: 0}, 700);
		return false;
	});

/* ===============================================
   Masonry
   =============================================== */

	function haley_masonry() {

		$('.masonry').imagesLoaded(function () {

			$('.masonry').masonry({
				itemSelector: '.masonry-item',
				isAnimated: true
			});

		});

	}

	$(document).ready(function(){
		haley_masonry();
	});

	$(window).resize(function(){
		haley_masonry();
	});

/* ===============================================
   fitVids
   =============================================== */

	function haley_embed() {

		$('#wrapper').imagesLoaded(function () {
			$('.embed-container, .video-container, .maps-container').fitVids();
			haley_masonry();
		});

	}

	$(window).load(haley_embed);
	$(document).ready(haley_embed);

/* ===============================================
   Swipebox gallery
   =============================================== */

	$(document).ready(function(){

		var counter = 0;

		$('div.gallery').each(function(){

			counter++;

			$(this).find('.swipebox').attr('data-rel', 'gallery-' + counter );

		});

		$('.swipebox').swipebox();

	});

});
