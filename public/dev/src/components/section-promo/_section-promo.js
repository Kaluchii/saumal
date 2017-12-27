/*
	секция Промо на Главной странице
	использованные библиотеки:
	- https://owlcarousel2.github.io/OwlCarousel2/
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--promo');

	if (!$section.length) return false;

	var $slider = $section.find('.carousel');
	var interval = parseInt($slider.attr('data-interval'), 10);

	var slider = $slider.owlCarousel({
		css: true,
    loop: true,
    responsiveClass: false,
    smartSpeed: 800,
    nav: true,
    dots: false,
    margin: 0,
    navText: ["", ""],
    mouseDrag: true,
    items: 1,
    autoplay: !isNaN(interval),
    autoplayTimeout: interval,
    autoplayHoverPause: true,
    lazyLoad: true
	});

})();
// -----------------------------------------------------------------------------


