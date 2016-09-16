console.log('Hola Mundo');

$('.videos-section').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1
});

$('.section-container').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: false,
    variableWidth: true,
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
    console.log('Kill Me');
    $( '#menu-container' ).slideToggle();
    $( '#live-signal-container' ).slideUp();
});

$( "#live-signal-trigger" ).click(function() {
    $( '#live-signal-container' ).slideToggle();
    $( '#menu-container' ).slideUp();
});

