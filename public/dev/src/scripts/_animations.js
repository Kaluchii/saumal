/*
  Анимация элементов
  использованные библиотеки:
  - http://imakewebthings.com/waypoints/
  ------------------------------------------------------------------------------ */
(function() {
	
	$('[data-animate]').each(function() {
    var $el = $(this);
    var effect = $el.attr('data-animate');
    
    var animateIn = function() {
      $el.addClass(effect).addClass('animated');
    };
    
    var animateOut = function() {
      // $el.removeClass(effect).removeClass('animated');
    };
    
    var inview = new Waypoint.Inview({
      element: $el[0],
      enter: function(direction) {
        animateIn();
      },
      // entered: function(direction) {},
      // exit: function(direction) {},
      exited: function(direction) {
        animateOut();
      }
    });
  });
  
})();
// -----------------------------------------------------------------------------


