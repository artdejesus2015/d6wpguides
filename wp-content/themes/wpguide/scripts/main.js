(function(window, document, $) {
    'use strict';
    var D = $(document),
        W = $(window);

    D.ready(function() {
        var sidebar = $('.wp-guides-sidebar');
        var nav = $('.navbar-home');
        var body = $('body');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 62) {
                body.addClass("body-fixed-nav");
                nav.addClass("navbar-fixed-top");
            } else {
                body.removeClass("body-fixed-nav");
                nav.removeClass("navbar-fixed-top");
            }
        });

        $(window).scroll(function () {
            if ($(this).scrollTop() > 62) {
                sidebar.addClass("affix");
            } else {
                sidebar.removeClass("affix");
            }
        });

        $(".navbar-menu-toggle").click(function() {
            $(this).toggleClass("active");
            $('body').toggleClass("cbp-spmenu-push-toleft");
            $('.mobile-nav').toggleClass("cbp-spmenu-open");
        });

        $(".close-menu").click(function() {
            $('.navbar-menu-toggle').removeClass("active");
            $('body').removeClass("cbp-spmenu-push-toleft");
            $('.mobile-nav').removeClass("cbp-spmenu-open");
        });

        $('.sidebar-menu li a').on('click', function(){
            $(this).parent().addClass('active').siblings().removeClass('active');
        });

        $('.sidebar-menu li ul li a').on('click', function(){
            $(this).parent().addClass('active').siblings().removeClass('active');
        });
    });


    W.load(function() { // makes sure the whole site is loaded
        $('body').addClass('is__in');
    });


})(window, document, jQuery);
