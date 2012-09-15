(function ($) {
    $(document).ready(function () {
    
        // Contact form
        $('.contact a').click(function () {
            $('#info').fadeOut(function () {
                $('#contact form').attr('action', FORM_ACTION);
                $('#contact').fadeIn();
            });
            return false;
        });

        $('a.back').click(function () {
            $('#contact').fadeOut(function () {
                $('#info').fadeIn();
            });
            return false;
        });

        $('a.success').click(function () {
            $('.cssn_messages').slideUp();
            return false;
        });

    });
})(jQuery);
