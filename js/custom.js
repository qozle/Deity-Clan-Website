$(document).ready(function() {
    setTimeout(function() {
        $('.preloader').fadeOut('slow');
        $('.the-entire-page').css('display','block');
        $('.the-entire-page').fadeIn('slow');
        }, 800);
    
    $('.modal-list-link').hover(function() {
        $(this).parent().css('background-color','#000A1B');
    }, function() {
        $(this).parent().css('background-color', 'transparent');
    });
    });

