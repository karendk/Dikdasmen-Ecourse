//PRELOADER
(function ($) {
    $(window).on('load', function () {
        $('#preloader').fadeOut('slow', function () { //slow bisa diganti dengan angka misal 2000 
            $(this).hide();
        });
    });
})(jQuery);
//PRELOADER END