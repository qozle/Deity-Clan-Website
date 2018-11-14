$(document).ready(function() {
    $(".player-link").hover(function() {
       $(".player-arrow", this).animate({'margin-left':'15px'});
    }, function () {
        $(".player-arrow", this).animate({'margin-left':'0'}); 
    }); 
    });
