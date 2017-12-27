/*
	Корзина
	использованные библиотеки:
	------------------------------------------------------------------------------ */
(function() {

	var $form = $('.form--rycle').find('form');

	if (!$form.length) return false;

	var $inps = $form.find('input[type="text"], input[type="tel"], input[type="hidden"]');
	var $btn = $form.find('.btn--submit');


	//маски
	$inps.filter('[data-mask]').each(function() {
		var $inp = $(this);
		var mask = $inp.attr('data-mask');
		$inp.inputmask({
			mask: mask,
			showMaskOnHover: false
		});
	});


	//проверка доступности кнопки Сабмита
	var check_submit = function() {
		var enable = true;
		$inps.filter('[required]').each(function() {
			var value = $(this).val();
			if (!value||value.indexOf('_')>0) enable = false;
		});
		$btn.attr('disabled', !enable);
	};


	check_submit();

	$inps.filter('[required]').on('keyup change blur focus change', function() {
		check_submit();
	});


	//калькуляция товаров
	var calc = function() {
		var result = 0;
		var items_count = 0;

		$form.find('.item').each(function() {

			var $item = $(this);
			var price = parseFloat($item.attr('data-price'), 10);
			var $inp = $item.find('.inp--calc');
			var count = parseInt($inp.val(), 10);
			var amount = count*price;

			result += amount;
			items_count += count;

			$item
				.find('[data-output="price"]').text( number_format( amount, 2, '.', ' ' ) );
		});

		$form
			.find('[data-output="amount"]').text( number_format( result, 2, '.', ' ' ) ).end()
			.find('[data-output="count"]').text( number_format( items_count, 2, '.', ' ' ) + ' ' + getNumEnding( items_count,[' товар',' товара',' товаров'] ) );

	};

	calc();


	$form.find('.item').each(function() {

		var $item = $(this);
		var $inp = $item.find('.inp--calc');
		var $btns = $item.find('.btn--calc');
		var count = parseInt($inp.val(), 10);
		var min = parseInt($inp.attr('data-min'), 10);
		var max = parseInt($inp.attr('data-max'), 10);

		//проверка доступности кнопок Плюс/Минус
		var check = function() {
			$btns
				.filter('.btn--minus').attr('disabled', count<=min ).end()
				.filter('.btn--plus').attr('disabled', count>=max);
		};

		//нажатия на кнопки Плюс/Минус
		$btns.on('click', function() {

			if ($(this).hasClass('btn--minus')) {
				count--;
				if (count<=min) count = min;
			} else {
				count++;
				if (count>=max) count = max;
			}

			$inp.val( count );
			calc();
			check();

		});

		//удаление товара, наверное нужен будет id
		$item
			.find('.btn--remove').on('click', function() {
				//здесь запрос POST или GET на удаление товара
				$item.slideUp(300, function() {
					$(this).remove();
					calc();
				});
			});

		check();

	});





})();
// -----------------------------------------------------------------------------


