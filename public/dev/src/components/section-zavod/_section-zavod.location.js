/*
	Карта на странице О компании
	использованные библиотеки:
	- https://tech.yandex.ru/maps/jsbox/2.1
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--zavod-location');

	if (!$section.length) return false;

	var $map = $section.find('.map');
	var latitude = $map.attr('data-latitude');
	var longitude = $map.attr('data-longitude');
	var zoom = parseInt($map.attr('data-zoom'), 10);
	var color = $map.attr('data-color');


	var render = function() {

		ymaps.ready(function() {

			var map = new ymaps.Map($map[0], {
				center: [latitude, longitude],
				zoom: zoom,
				controls: ['zoomControl', 'fullscreenControl']
			},{
				autoFitToViewport: 'always'
			});

			var placemark = new ymaps.Placemark([latitude, longitude], {
			}, {
				preset: "islands#dotCircleIcon",
		    iconColor: color
			});

			map.geoObjects.add(placemark);

			// map.behaviors.disable('scrollZoom');
			// map.behaviors.disable('drag');

			$map.addClass('map--loaded');

		});
	};


	$(window).on('load', function() {

		$.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU', function() {
			render();
		});

	});

})();
// -----------------------------------------------------------------------------


