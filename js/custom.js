$(document).ready(function() {
    window.onload = function() {
    $('.preloader').fadeOut('slow');
    $('.the-entire-page').css('display','block');
    $('.the-entire-page').fadeIn('slow');
    }
    
    
    $('.modal-list-link').hover(function() {
        $(this).parent().css('background-color','#000A1B');
    }, function() {
        $(this).parent().css('background-color', 'transparent');
    });
    
    $('.modal-list-link').click(function() {
        $('.menu-modal').modal('toggle');
    })
    });
