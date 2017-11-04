$(window).on('load', function () {
    $('.dropdown-toggle').on('click', function(){
        $(this).closest('.dropdown').toggleClass('open');
    });

    var pathItems = document.location.pathname;
    var level1 = pathItems.split('/')[1];
    $('.js-menu-item').each(function () {
        var href = $(this).attr('href').split('/')[1];
        if ( href === level1 ) {
            $(this).parent().addClass('active');
            if ( $(this).hasClass('js-menu-item--top') ) {
                $(this).closest('li.li-dropdown').addClass('active');
            }
        }
    })
});