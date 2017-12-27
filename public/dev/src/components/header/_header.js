/*
	Фиксация шапки при скролле
	------------------------------------------------------------------------------ */
(function() {

	var $header = $('.header');

	if (!$header.length) return false;

	var $btn_nav = $('.btn--nav');
	var $btn_call = $('.btn--call');
	var $btn_close = $('.btn--close');
	var showed_nav = $('body').hasClass('show--nav');
	var showed_contacts = $('body').hasClass('show--contacts');
	var $overlay = $('.overlay');
	var $phone = $('[data-flag="phone"]');
	var $tablet = $('[data-flag="tablet"]');
	var $nav = $header.find('.column--nav');
	var $contacts = $header.find('.column--contacts');


	var show_nav = function() {
		$('body').addClass('show--nav');
		showed_nav = true;
		if (showed_contacts) {
			hide_contacts(true);
			$overlay.show();
			$nav.show();
		} else {
			$overlay.fadeIn();
			$nav.slideDown(300);
		}
	};

	var hide_nav = function(silent) {
		$('body').removeClass('show--nav');
		showed_nav = false;
		if (silent) {
			$overlay.hide();
			$nav.hide().removeAttr('style');
		} else {
			$overlay.fadeOut();
			$nav.slideUp(200, function() {
				$(this).removeAttr('style');
			});
		}
	};

	var show_contacts = function() {
		$('body').addClass('show--contacts');
		showed_contacts = true;
		if (showed_nav) {
			hide_nav(true);
			$overlay.show();
			$contacts.show();
		} else {
			$overlay.fadeIn();
			$contacts.slideDown(300);
		}
	};

	var hide_contacts = function(silent) {
		$('body').removeClass('show--contacts');
		showed_contacts = false;
		if (silent) {
			$overlay.hide();
			$contacts.hide().removeAttr('style');
		} else {
			$overlay.fadeOut();
			$contacts.slideUp(200, function() {
				$(this).removeAttr('style');
			});
		}
	};

	var scroll = function() {
		var y = $(window).scrollTop();
		if (y>=1) {
			$header.addClass('header--fixed');
		} else {
			$header.removeClass('header--fixed');
		}
	};


	var resize = function() {
		if (!$phone.is(':visible')&&(showed_nav||showed_contacts)) {
			hide_nav(true);
			hide_contacts(true);
		}
	};


	$btn_nav.on('click', function() {
		if (showed_nav) hide_nav(); else show_nav();
	});

	$btn_call.on('click', function() {
		if (showed_contacts) hide_contacts(); else show_contacts();
	});

	$btn_close.on('click', function() {
		if (showed_nav) hide_nav(); else show_nav();
	});

	$overlay.on('click', function() {
		if ($tablet.is(':visible')&&showed_nav) hide_nav();
	});

	scroll();
	resize();

	$(window)
		.on('load', function() {
			scroll();
			resize();
		})
		.on('scroll', function() {
			scroll();
		})
		.on('resize', function() {
			resize();
		});

})();
// -----------------------------------------------------------------------------


