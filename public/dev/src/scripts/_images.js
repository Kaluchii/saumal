/*
	Загрузка изображений
	использованные библиотеки
	- http://imagesloaded.desandro.com/
*/
(function() {
	
	var init = function() {

		$('[data-img-loader]').filter(':not(.ready)').each(function() {
			var $layer = $(this);
			$layer
				.addClass('ready')
				.imagesLoaded(function() {
	      	$layer.addClass('loaded');
	    	});
		});
		
	};
	
	init();

	$(document).bind('itemsLoaded', function() {
		init();
	});

	$(document).bind('pagerEvent', function() {
		init();
	});
	
})();
//---------------------------------------------------------------------------------------------

