;(function ($) {
	var forms = $('.fielder form');

	var parsley = forms.parsley({
        trigger: 'change focusout',
        focus: 'none'
    });

    window.Parsley.on('field:error', function() {
        return $(this.$element)
            .closest('.box')
            .removeClass('is-valid')
            .addClass('is-invalid');
      });

    window.Parsley.on('field:success', function() {
        return $(this.$element)
            .closest('.box')
            .removeClass('is-invalid')
            .addClass('is-valid');
    });
})(jQuery);
//# sourceMappingURL=home.js.map
