/*
	Фиксация блока при скролле
	использованные библиотеки:
	http://leafo.net/sticky-kit
	------------------------------------------------------------------------------ */
(function() {

	var $nav = $('.nav-category[data-sticky]');

	if (!$nav.length) return false;

	var $header = $('.header');
	var offset = $header.height() + 30;

	$nav.stick_in_parent({
		parent: $('[data-sticky-parent]'),
		offset_top: offset,
		spacer: false
	});

})();
// -----------------------------------------------------------------------------



/*
	sckroll-spy
	использованные библиотеки:
	------------------------------------------------------------------------------ */
(function() {

	var $nav = $('.nav-category[data-sticky]');
	var $section = $('.section--default');

	if (!$nav.length||!$section.length) return false;

	var $header = $('.header');

	var lastId;
	var menuItems = $nav.find('a');

	var scrollItems = menuItems.map(function() {
    var item = $($(this).attr('href'));
    if (item.length) return item;
  });

  menuItems.on('click', function(e) {

    var href = $(this).attr('href');
    var offsetTop = href === '#' ? 0 : $(href).offset().top - $header.outerHeight() - 30 + 1;
    
    $('html, body').stop().animate({ 
      scrollTop: offsetTop
    }, 800);

    e.preventDefault();

  });

  $(window).on('scroll', function() {
  	window.location.hash = '/';

    var y = $(this).scrollTop() + $header.outerHeight() + 30;

    var cur = scrollItems.map(function() {
      if ($(this).offset().top<y) return this;
    });

    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : '';

    if (lastId!==id) {
      lastId = id;
      menuItems
        .parent().removeClass('active')
        .end().filter('[href=#'+ id +']').parent().addClass('active');
     }

  });

})();
// -----------------------------------------------------------------------------


/*
	------------------------------------------------------------------------------ */
(function() {

	var $tabs = $('[data-toggle="tab-mobile"]');

	if (!$tabs.length) return false;

	var timeout = false;

	$tabs.on('click', function(e) {
		var $link = $(this).parent('li');
		var $section = $link.parents('.section');

		$section.addClass('toggled');
		$link.addClass('active');

		$section.siblings('.section--default').removeClass('toggled').find('.nav-category li').removeClass('active');

		$section.addClass('toggled');

		$('html, body').scrollTop($section.offset().top);

		e.preventDefault();
	});

})();
// -----------------------------------------------------------------------------



