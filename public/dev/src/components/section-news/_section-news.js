/*
	секция Новости
	использованные библиотеки:
	- https://owlcarousel2.github.io/OwlCarousel2/
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--news');

	if (!$section.length) return false;

	var $slider = $section.find('.carousel');
    var $flag = $('[data-flag="phone"]');
    var slider = false;

    var resize = function() {
        if ($flag.is(':visible')&&slider) {
            $slider.trigger('destroy.owl.carousel');
            $slider.removeClass('owl-carousel');
            slider = false;
        }
        if (!$flag.is(':visible')&&!slider) {
            $slider.addClass('owl-carousel');
            slider = $slider.owlCarousel({
                css: true,
                loop: false,
                responsiveClass: false,
                smartSpeed: 400,
                nav: true,
                dots: false,
                margin: 0,
                navText: ["", ""],
                mouseDrag: true,
                items: 4,
                lazyLoad: true,
                responsive: {
                    0: {

                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });

        }
    };

    $(window).on('load resize', function() {
        resize();
    });

})();
// -----------------------------------------------------------------------------


