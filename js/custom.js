$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '7377453932',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '7377453932.1677ed0.79eee8a6073b459b8709086a51cd952e',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});