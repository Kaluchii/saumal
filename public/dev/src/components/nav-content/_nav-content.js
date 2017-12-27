/*
	Контетная навигация в мобильной версии
	использованные библиотеки:
	------------------------------------------------------------------------------ */
(function() {

	var $nav = $('.nav-content').find('ul');

	if (!$nav.length) return false;

    var $flag = $('[data-flag="phone"]');
    var $active = $nav.find('li.active');

    var scroll = function() {
    
        if ($active.length&&$flag.is(':visible')&&$active.index()>=2) {
            var offset = $active.offset().left;
            $nav.animate({
                scrollLeft: offset
            }, 100);
        }

    };

    scroll();

})();
// -----------------------------------------------------------------------------


