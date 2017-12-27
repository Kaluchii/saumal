/*
	секция Новости
	использованные библиотеки:
	- https://getbootstrap.com/docs/3.3/javascript/#tabs
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--profit');

	if (!$section.length) return false;

	var $imgs = $section.find('[data-img]');
	var $tabs = $section.find('[data-toggle="tab"]');

	var show = function() {
		var tab = $tabs.parent('li').filter('.active').children('a').attr('aria-controls');
		$imgs.removeClass('active').filter('[data-img="'+ tab +'"]').addClass('active');
	};

	$tabs.on('shown.bs.tab', function() {
		show();
	});

})();
// -----------------------------------------------------------------------------


