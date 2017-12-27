/*
	секция Каталог
	использованные библиотеки:
	- https://packery.metafizzy.co/
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--catalog');

	if (!$section.length) return false;

	var $items = $section.find('.item');
	var $grid = $section.find('[data-grid]');
	var $informer = $('.rycle-informer');
	var $counter = $informer.find('[data-count]');


	//masonry layout
	var grid = $grid.packery({
		itemSelector: '.item',
		gutter: 0,
		percentPosition: true,
		containerStyle: null,
		transitionDuration: 0
	});


	//add item to Rycle
	$items.each(function() {
		var $item = $(this);
		var $btn = $item.find('.btn--add');
		var id = parseInt($btn.attr('data-id'), 10); //id товара, наверное необходим для добавления в корзину

		$btn.on('click', function() {

			$btn
				.attr('disabled', true)
				.addClass('loading');

			setTimeout(function() {//вместо этого будет какой-нибудь POST или GET запрос
				var count = parseInt($counter.text(), 10);
				count++;
				$counter.text(count);
				$informer.removeClass( (count>0?'rycle--empty':'') );
				
				$btn
					.removeAttr('disabled')
					.removeClass('loading');

				$item.addClass('item--added');


			}, 500);

		});

	});


})();
// -----------------------------------------------------------------------------


