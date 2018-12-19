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
    
    var splashVid = document.getElementById('splashvid');
    splashVid.addEventListener('ended', function() {
        $('#splash-img-cont').fadeIn('slow');
        $('#splash-vid-cont').hide();
    });
   twttr.ready( function(twttr){
       twttr.events.bind('rendered',function (event) { 

    var tgt = event.target;

    $(tgt).contents().find(".timeline-Widget").css({  
        "border":"none",
        "border-radius":"0px",
        "max-width":"100%"
    });

  });

});    

});

