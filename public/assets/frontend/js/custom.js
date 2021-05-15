/**********************************************
 * CUSTOM JS FILE
 **********************************************/

// navbar scroll js
$(function() {
    var navbar = $('.navbar');
    $(window).scroll(function() {
        if ($(window).scrollTop() <= 100) {
            navbar.removeClass('navbar_scroll');
        } else {
            navbar.addClass('navbar_scroll');
        }
    });
});