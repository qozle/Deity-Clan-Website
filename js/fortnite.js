$(document).ready(function() {
    
   
    
    $(".player-link").hover(function() {
        $(".player-p", this).animate({'right':'-=5%'});
        $(this).parent().css('background-color','rgba(0,51,145,.65)');
        
       
    }, function () {
        $(".player-p", this).animate({'right':'+=5%'}); 
        $(this).parent().css('background-color','transparent');
       
       
    }); 
    });
