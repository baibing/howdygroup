$(document).ready(function() {
    $('.title_show').click(function() {
        if ( !$(this).next('p').is(':visible') ) {
            $(".sublist_hide").slideUp();
            $(this).next('p').slideToggle();
        } else {
            $(this).next('p').slideToggle();
        }
    });
});
