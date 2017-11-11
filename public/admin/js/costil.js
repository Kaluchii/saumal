$(document).ready(function(){
    $('.js-slug-source').on('change', function () {
        $('.slug').val( $(this).val() + '-' + $(this).data('id') ).trigger('change');
    });
});
