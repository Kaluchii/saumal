/*
	секция Процесс производства
	использованные библиотеки:
	- https://owlcarousel2.github.io/OwlCarousel2/
	------------------------------------------------------------------------------ */
(function() {

	var $items = $('.step-item');

	$items.each(function() {

		var $item = $(this);
		var $slider = $item.find('.item-slider').find('.carousel');
		var $thumbs = $item.find('.item-desc').find('.carousel');
		var $slides = $item.find('.slide');
		var count = 0;
		var html = '';

		$slides.each(function(index) {
			var $slide = $(this);
			var $desc = $slide.find('[data-source="desc"]');

			html += '<div class="thumb" data-index="'+ index +'">'+ $desc.html() + '</div>';

			$desc.remove();

			$slide.attr('data-index', index);
			count++;
		});

		$thumbs.html( html );

		var setThumbs = function() {
			var index = parseInt($slider.find('.active').find('.slide').attr('data-index'), 10);
			thumbs.trigger('to.owl.carousel', [index, 400, true]);
		};

		var setSlides = function() {
			var index = parseInt($thumbs.find('.active').find('.thumb').attr('data-index'), 10);
			slider.trigger('to.owl.carousel', [index, 400, true]);
		};

		var slider = $slider.owlCarousel({
			css: true,
	    loop: true,
	    responsiveClass: false,
	    smartSpeed: 400,
	    nav: true,
	    dots: false,
	    margin: 0,
	    navText: ["", ""],
	    mouseDrag: true,
	    items: 1,
	    lazyLoad: true
		});

		var thumbs = $thumbs.owlCarousel({
			css: true,
	    loop: true,
	    responsiveClass: false,
	    smartSpeed: 400,
	    nav: false,
	    dots: true,
	    margin: 0,
	    navText: ["", ""],
	    mouseDrag: true,
	    items: 1,
	    animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
		});

		slider.on('changed.owl.carousel', function() {
			setTimeout(function() {
				setThumbs();
			}, 10);
		});

		thumbs.on('changed.owl.carousel', function() {
			setTimeout(function() {
				setSlides();
			}, 10);
		});

	});

})();
// -----------------------------------------------------------------------------


