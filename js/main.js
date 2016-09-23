$('.section-container').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: false,
    variableWidth: true,
    arrows: true,
    center: false
});


$(window).scroll(function(){
    var scrollUnits = $(document).scrollTop();

    if(scrollUnits >= 100){

        $( '#live-signal-container' ).slideUp();
        $( '#menu-container' ).slideUp();

        $('header').addClass('fixed');
        $('body').addClass('fixed');
        $('#subfooter').addClass('bottomFixed');

        var footerOffset = $( '#footer' ).offset().top;
        var screenHeight = $(window).innerHeight();

        var bottomScreenOffset = scrollUnits + screenHeight;

        if (bottomScreenOffset >= footerOffset){
            $('#subfooter').removeClass('bottomFixed');
        }
    } else {
        $('header').removeClass('fixed');
        $('body').removeClass('fixed');
        $('#subfooter').removeClass('bottomFixed');
    }
});

$( ".menu-principal" ).click(function() {
    $( '#menu-container' ).slideToggle();
    $( '#live-signal-container' ).slideUp();
});

$( "#live-signal-trigger" ).click(function() {
    $( '#live-signal-container' ).slideToggle();
    $( '#menu-container' ).slideUp();
});

$( "#show-sections" ).click(function() {
    $( '#video-sections-list').slideToggle();
});

$.simpleWeather({
    location: 'Caracas, VE',
    woeid: '',
    unit: 'c',
    success: function(weather) {
        html = '<i class="icon-'+weather.code+'"></i>'+weather.city+', '+weather.temp+'&deg;'+weather.units.temp;
        // html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
        // html += '<li class="currently">'+weather.currently+'</li>';
        // html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';

        $("#weather").html(html);
    },
    error: function(error) {
        $("#weather").html('<p>'+error+'</p>');
    }
});

function openComments(){
    console.log("Epalo");
    $( '.vea-domain .comments').slideToggle();
}