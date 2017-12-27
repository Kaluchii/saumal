/*
	секция Завод
	использованные библиотеки:
	- https://packery.metafizzy.co/
  - http://fancybox.net/
  - http://imakewebthings.com/waypoints/
	------------------------------------------------------------------------------ */
(function() {

	var $section = $('.section--zavod-info');

	if (!$section.length) return false;

	var $items = $section.find('.item');
	var $grid = $section.find('[data-grid]');


	//инициализация компоновки masonry
	var grid = $grid.imagesLoaded(function() {
	  $grid.packery({
			itemSelector: '.item',
		  containerStyle: null,
		  transitionDuration: 0,
		  percentPosition: true,
		  gutter: 0
	  });
	});


	//инициализаиця fancybox
	$section.find('[rel="gallery"]').fancybox({
		padding: 0,
		margin: 50,
		easingIn: 'easeOutBack',
		easingOut: 'easeInBack',
		openEffect: 'elastic',
		closeEffect: 'elastic'
	});


	$section.find('[data-counter]').filter(':not(.ready)').each(function() {
    var $counter = $(this);
    var text = $counter.text().split(' ');
    var count = '';
    var limit = '';
    var string = '';

    $.each(text, function(i, simbol) {
      if (!isNaN(parseInt(simbol, 10))) limit += ' ' + simbol; else string += ' ' + simbol;
    });

    limit = $.trim(limit).split(' ');

    for (var i=0; i<limit.length; i++) {
      count += limit[i];
    }

    limit = parseFloat(count, 10);

    $counter
      .addClass('ready')
      .text(0 + string);

    var waypoint = new Waypoint({
      element: $counter,
      handler: function(direction) {

        var $el = this.element;
        var timeout = null;
        var step = 1;

        if ($el.hasClass('done')) return false;

        $el.addClass('done');

        timeout = setInterval(function() {
        	if (step==25) {
        		if ((limit ^ 0) === limit) {
	        		$el.text( number_format(limit.toString(), 0, ',', ' ') + string);
        		} else {
	        		$el.text( limit );
        		}
        		clearInterval(timeout);
        	} else {
        		if ((limit ^ 0) === limit) {
	        		$el.text( number_format(Math.floor(limit*step/25).toString(), 0, ',', ' ') + string);
	        	} else {
	        		$el.text( Math.floor(limit*step/25).toString() + string);
	        	}
        		step++;
        	}

        }, 30);
      },
      offset: '100%'
    });
  });	

})();
// -----------------------------------------------------------------------------


