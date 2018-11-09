$(document).ready(function() {
    setTimeout(function() {
        $('.preloader').fadeOut('slow');
        $('.the-entire-page').css('display','block');
        $('.the-entire-page').fadeIn('slow');
        }, 1500);
    });

