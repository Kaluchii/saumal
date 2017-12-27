/*
	Карта на странице Контактов - Дистрибьюторы
	использованные библиотеки:
	- https://tech.yandex.ru/maps/jsbox/2.1
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--distributors');

	if (!$section.length) return false;

	var $map = $section.find('.map');
	var map;
	var data = [];

	var $btns = $section.find('.btn--map');


	var render = function() {
		var $selected = $btns.filter('.active');
		var latitude = $selected.attr('data-latitude');
		var longitude = $selected.attr('data-longitude');
		var zoom = parseInt($selected.attr('data-zoom'), 10);
		var pin = $selected.attr('data-pin');
		var width, height;

		$('body').append('<img src="'+ pin +'" style="position: fixed; left: 0; top: 0; visivility: hidden; z-index: -99999; opacity: 0;" id="temp" />');

		$('#temp').on('load', function() {
			width = $(this).width();
			height = $(this).height();
			$(this).remove();

			var placemark = new ymaps.Placemark([latitude, longitude], {
			}, {
				iconLayout: 'default#image',
	      iconImageHref: pin,
	      iconImageSize: [width, height],
	      iconImageOffset: [-width/2, -height]
			});

			map.geoObjects.add(placemark);
			map.panTo([[latitude, longitude]], {
				flying: true,
				callback: function() {
					map.setZoom(zoom, {
						smooth: true
					});
				}
			});

		});

	};


	var load = function() {
		$.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU', function() {
			yandexAPI_loaded = true;

			ymaps.ready(function() {

				map = new ymaps.Map($map[0], {
					center: [43.238949, 76.961628],
					zoom: 16,
					controls: ['zoomControl', 'fullscreenControl']
				},{
					autoFitToViewport: 'always'
				});

				// map.behaviors.disable('scrollZoom');
				// map.behaviors.disable('drag');

				render();

				$map.addClass('map--loaded');

			});

		});
	};


	$btns.on('click', function() {
		$(this).addClass('active').siblings('a').removeClass('active');
		render();
		return false;
	});

	if ($map.is(':visible')) {
		if (yandexAPI_loaded) render(); else load();
	}

	$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
		if (yandexAPI_loaded) render(); else load();
	});

})();
// -----------------------------------------------------------------------------


