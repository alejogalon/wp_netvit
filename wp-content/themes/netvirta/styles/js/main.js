(function(window, document, $) {
    'use strict';
    var D = $(document),
        W = $(window);

    D.ready(function() {

        // Verifyt Platform First Icon Not Clickable
        $('#verifyt-platform .verifyt-platform-icon ul li:first-child a').removeAttr('href');

        var nav = $('.navbar-home');
        var body = $('body');
        var mobile_nav = $('.mobile-nav');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 62) {
                body.addClass("body-fixed-nav");
                nav.addClass("navbar-fixed-top");
            } else {
                body.removeClass("body-fixed-nav");
                nav.removeClass("navbar-fixed-top");
            }
        });

        $(".navbar-toggle").click(function() {
            $(this).toggleClass("active");
            $('body').toggleClass("cbp-spmenu-right");
            mobile_nav.toggleClass("cbp-spmenu-open");
        });

        $(".close-menu").click(function() {
            $('.navbar-toggle').removeClass("active");
            $('body').removeClass("cbp-spmenu-right");
            mobile_nav.removeClass("cbp-spmenu-open");
        });

        /* Opens the other input container in contact us */
        $('.wpcf7 .wpcf7-form .wpcf7-list-item.has-free-text input[type=checkbox]').click(function(){
            if($(this).prop('checked')) {
                $('.wpcf7-free-text').css({'display':'block'});

            } else {
                $('.wpcf7-free-text').css('display', 'none');
            }
        });
    });

    W.load(function() { // makes sure the whole site is loaded
        $('body').addClass('is__in');
    });

    // Dropdown toggle
    $('#menu-mobile .menu-toggle').on('click', function(){
        $(this).closest('li').find('.dropdown-menu').toggle();
    });

    $(document).click(function(e) {
        var target = e.target;
        if (!$(target).is('.menu-toggle') && !$(target).parents().is('.menu-toggle')) {
            $('.dropdown-menu').hide();
        }
    });



})(window, document, jQuery);