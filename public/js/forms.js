// getNumEnding( count,[' символ',' символа',' символов'] )
function getNumEnding(iNumber, aEndings){
    var sEnding, i;
    iNumber = iNumber % 100;
    if (iNumber>=11 && iNumber<=19) {
        sEnding=aEndings[2];
    }else{
        i = iNumber % 10;
        switch (i){
            case (1): sEnding = aEndings[0]; break;
            case (2):
            case (3):
            case (4): sEnding = aEndings[1]; break;
            default: sEnding = aEndings[2];
        }
    }
    return sEnding;
}

//# sourceMappingURL=_get-num-ending.js.map

// number_format( price - sale_amount, 2, '.', ' ' )
function number_format(number, decimals, dec_point, thousands_sep ) {
    var i, j, kw, kd, km;
    if( isNaN(decimals = Math.abs(decimals)) ){ decimals = 2; }
    if( dec_point == undefined ){ dec_point = ","; }
    if( thousands_sep == undefined ){ thousands_sep = "."; }
    i = parseInt(number = (+number || 0).toFixed(decimals)) + "";
    if( (j = i.length) > 3 ){ j = j % 3; } else{ j = 0; }
    km = (j ? i.substr(0, j) + thousands_sep : "");
    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
    kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");
    if (kd==".00")kd="";
    return km + kw + kd;
}


// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
/*
function goodsCount(id) {
    var prop = String(id),
        cookie = getCookie("goods");
    if (cookie === undefined){
        return 0;
    }
    var goods = JSON.parse(cookie);
    if (prop in goods) {
        return goods[prop];
    }
}*/

function totalGoods() {
    var cookie = getCookie("goods");
    if (cookie === undefined){
        return 0;
    }
    var goods = JSON.parse(cookie);
    var total = 0;
    for (var key in goods) {
        total += goods[key]
    }
    return total;
}

function inBasket(id) {
    var prop = String(id),
        cookie = getCookie("goods");

    if (cookie === undefined){
        return false;
    }
    var goods = JSON.parse(cookie);
    return (prop in goods);
}

function setGoodsCount(id, count) {
    var goods = {},
        prop = String(id),
        cookie = getCookie("goods");

    if (cookie !== undefined){
        goods = JSON.parse(cookie);
    }
    if (count === 0){
        delete goods[prop];
    } else {
        goods[prop] = count;
    }

    var value = JSON.stringify(goods);
    var date = new Date(new Date().getTime() + 72000000);
    document.cookie = "goods=" + value + "; path=/; expires=" + date.toUTCString();
}

//# sourceMappingURL=_number-format.js.map


//# sourceMappingURL=forms.js.map

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

    var startCount = totalGoods();
    $counter.text(startCount);
    $informer.removeClass( (startCount>0?'rycle--empty':'') );

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

        if ( inBasket(id) ) {
            $item.addClass('item--added');
        }

		$btn.on('click', function() {
            var id = parseInt($(this).attr('data-id'), 10);
			$btn
				.attr('disabled', true)
				.addClass('loading');

			setTimeout(function() {//вместо этого будет какой-нибудь POST или GET запрос
				var count = parseInt($counter.text(), 10);
                if ( !inBasket(id) ) {
                    setGoodsCount(id, 1);
                    count = totalGoods();
                }
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



/*
	Корзина
	использованные библиотеки:
	------------------------------------------------------------------------------ */
(function() {

	var $form = $('.form--rycle').find('form');

	if (!$form.length) return false;

	var $inps = $form.find('input[type="text"], input[type="tel"], input[type="hidden"]');
	var $btn = $form.find('.btn--submit');
    var $informer = $('.rycle-informer');
    var $counter = $informer.find('[data-count]');
    var total = totalGoods();

    $counter.text(total);
    $informer.removeClass( (total>0?'rycle--empty':'') );

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
		enable = ( totalGoods() > 0 ) && enable;
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
			.find('[data-output="count"]').text( number_format( items_count, 2, '.', ' ' ) + ' ' + getNumEnding( items_count, declension ) );

	};

	calc();


	$form.find('.item').each(function() {

		var $item = $(this);
		var $inp = $item.find('.inp--calc');
		var $btns = $item.find('.btn--calc');
		var count = parseInt($inp.val(), 10);
		var min = parseInt($inp.attr('data-min'), 10);
		var max = parseInt($inp.attr('data-max'), 10);
        var id = parseInt($item.attr('data-id'), 10);
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
            setGoodsCount(id, count);
            total = totalGoods();
            $counter.text(total);
            $informer.removeClass( (total>0?'rycle--empty':'') );
			$inp.val( count );
			calc();
			check();

		});

		//удаление товара, наверное нужен будет id
		$item
			.find('.btn--remove').on('click', function() {
                setGoodsCount(id, 0);
                total = totalGoods();
                $counter.text(total);
                $informer.addClass( (total==0?'rycle--empty':'') );
				//здесь запрос POST или GET на удаление товара
				check_submit();
				$item.slideUp(300, function() {
					$(this).remove();
					calc();
				});
			});

		check();

	});





})();
// -----------------------------------------------------------------------------


