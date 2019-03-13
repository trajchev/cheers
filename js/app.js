jQuery(document).ready(function() {
    if (jQuery(window).width() < 380) {
        jQuery('#intro-item').attr('width', 280).attr('height', 60).attr('enable-background', 'new 0 0 320 60').attr('viewBox', '0 0 320 60');
    }
    jQuery(window).resize( function() {
        if (jQuery(window).width() < 380) {
            jQuery('#intro-item').attr('width', 280).attr('height', 60).attr('enable-background', 'new 0 0 320 60').attr('viewBox', '0 0 320 60');
        }
    });

    // Init the validator
    jQuery.validate({
        lang: 'en',
        modules : 'toggleDisabled',
        disabledFormFilter : 'form.toggle-disabled',
        showErrorDialogs : false
    });
});