$('html').css('display', 'none');

(function($) {

	/**
	 * Copyright 2012, Digital Fusion
	 * Licensed under the MIT license.
	 * http://teamdf.com/jquery-plugins/license/
	 *
	 * @author Sam Sehnert
	 * @desc A small plugin that checks whether elements are within
	 *     the user visible viewport of a web browser.
	 *     only accounts for vertical position, not horizontal.
	 */

	$.fn.visible = function(partial) {

			var $t            = $(this),
					$w            = $(window),
					viewTop       = $w.scrollTop(),
					viewBottom    = viewTop + $w.height(),
					_top          = $t.offset().top,
					_bottom       = _top + $t.height(),
					compareTop    = partial === true ? _bottom : _top,
					compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

	};

})(jQuery);

$(function() {

// Parallax Backgrounds
// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641

	$('section[data-type="background"]').each(function(){
		var bgobj = $(this);

		$(window).scroll(function() {

			var yPos = -($(window).scrollTop() / bgobj.data('speed'));
			var coords = '60% '+ yPos + 'px';

			bgobj.css({ backgroundPosition: coords });

		});

	});

});

$(document).ready(function() {
	$("html").fadeIn(2000);

	$('#menu').click(function(e) {
		$('#navigation').width(260);
	});

	$('#closeMenu').click(function(e) {
		$('#navigation').width(0);
	});

	var page = $(window);
	var modules = $(".skills-module");

	modules.each(function(i, module) {
		var module = $(module);
		if (module.visible(true)) {
			module.addClass("visible");
		}
	});

	page.scroll(function(event) {

		modules.each(function(i, module) {
			var module = $(module);
			if (module.visible(true)) {
			module.addClass("slideUp");
			}
		});

	});

	if (Modernizr.touch) {
		$(".close-overlay").removeClass("hidden");
		$(".project-piece").click(function(e){
				if (!$(this).hasClass("hover")) {
						$(this).addClass("hover");
				}
		});
		$(".close-overlay").click(function(e){
				e.preventDefault();
				e.stopPropagation();
				if ($(this).closest(".project-piece").hasClass("hover")) {
						$(this).closest(".project-piece").removeClass("hover");
				}
		});
	} else {
		$(".project-piece").mouseenter(function(){
				$(this).addClass("hover");
		}).mouseleave(function(){
				$(this).removeClass("hover");
		});
	}

});
