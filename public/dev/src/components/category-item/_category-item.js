/*
	Страница Кому полезен
	использованные библиотеки:
	------------------------------------------------------------------------------ */
(function() {

	var url = location.href;
	var a =  document.createElement('a');
	a.href = url;
	var hash = a.hash.replace('#/', '');

	if (typeof hash!=undefined&&hash!='') {
		var $target = $(hash);
		if ($target.length) {
			var $header = $('.header');
			var offset = $target.offset().top - $header.height() - 20;

			if ($target.find('.nav-category').length) {
				$target.find('.nav-category li').addClass('active');
				$target.addClass('toggled');
			}

			$('html, body').stop().animate({
				scrollTop: offset
			}, 800);

		}
	}

})();
// -----------------------------------------------------------------------------


