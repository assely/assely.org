;(function ($) {
	var body = $('#body');
	var trigger = $('#offcanvasTrigger');
	var overlay = $('#offcanvasOverlay');

	trigger
		.add(overlay)
		.on('click', function (event) {
	        event.preventDefault();

	        body.toggleClass('is-open is-close');
	    });
})(jQuery);