$('.section-container').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
    variableWidth: true,
    arrows: true,
    center: false
});


$(window).scroll(function(){
    var scrollUnits = $(document).scrollTop();

    if(scrollUnits >= 100){
        $('#live-signal-video-container').empty();

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
    $('#live-signal-video-container').empty();
    $( '#menu-container' ).slideToggle();
    $( '#live-signal-container' ).slideUp();
});

$( "#live-signal-trigger" ).click(function() {
    $( '#live-signal-container' ).slideToggle();
    mainSignalHeaderOn();
    $( '#menu-container' ).slideUp();
});

$( "#show-sections" ).click(function() {
    $( '#video-sections-list').slideToggle();
});

function deactivateSelectorActive(){
    $( "#live-signal-selector li.active" ).removeClass( "active" );
}

function mainSignalHeaderOn(){
    deactivateSelectorActive();
    $( "#live-signal-selector li:nth-child(1)" ).addClass( "active" );
    $('#live-signal-video-container').html('<iframe width="100%" height="400px" align="middle" frameborder="0" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" id="envivoid" name="envivo" src="http://mblive.telesur.ultrabase.net"></iframe>');
}

function onlyAudioSignalHeaderOn(){
    deactivateSelectorActive();

    $( "#live-signal-selector li:nth-child(2)" ).addClass( "active" );
    $('#live-signal-video-container').html('<iframe width="100%" height="400px" align="middle" frameborder="0" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" id="envivoid" name="envivo" src="http://mblive.telesur.ultrabase.net/audioonly.php"></iframe>');
}

function englishSignalHeaderOn(){
    deactivateSelectorActive();

    $( "#live-signal-selector li:nth-child(3)" ).addClass( "active" );
    $('#live-signal-video-container').html('<iframe width="100%" height="400px" align="middle" frameborder="0" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" id="envivoid" name="envivo" src="http://mbliveocasional.telesur.ultrabase.net/"></iframe>');
}

function exclusivesSignalHeaderOn(){
    deactivateSelectorActive();

    $( "#live-signal-selector li:nth-child(4)" ).addClass( "active" );
    $('#live-signal-video-container').html('<iframe width="100%" height="400px" align="middle" frameborder="0" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" id="envivoid" name="envivo" src="http://mblivealterna.telesur.ultrabase.net/"></iframe>');
}

function specialSignalHeaderOn(){
    deactivateSelectorActive();

    $( "#live-signal-selector li:nth-child(5)" ).addClass( "active" );
    $('#live-signal-video-container').html('<iframe width="100%" height="400px" align="middle" frameborder="0" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen="" id="envivoid" name="envivo" src="http://mblivealterna.telesur.ultrabase.net/"></iframe>');
}

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
    $( '.vea-domain .comments').slideToggle();
}

$("#footerSuscriptionForm").validate({
    debug: true,
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    messages: {
      email: {
          required: "Este campo es requerido",
          email: "Formato de email incorrecto"
      }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass("has-error").removeClass("has-success");
    },
    unhighlight: function(element, errorClass) {
        $(element).parent().addClass("has-success").removeClass("has-error");
    },
    errorClass: "alert alert-danger",
    submitHandler: function(form) {
        var validEmail = form.email.value;
        var url = "/system/modules/com.tfsla.diario.telesur/templates/TS_DMDS.jsp"; // El script a dónde se realizará la petición.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#footerSuscriptionForm").serialize(), // datos serializados
            async: false,
            success: function (data){
                $("#Registrofooter").css("display", "block");
                $("#Registrofooter").addClass("alert alert-dismissible");

                var n = data.search("111");
                if(n==-1){
                    var y = data.search("0 relaciones nuevas");
                    if(y==-1){
                        $("#Registrofooter").html("Su correo ha sido registrado exitosamente");
                        $("#Registrofooter").addClass("alert-success");
                    }
                    else{
                        $("#Registrofooter").html("Esta dirección de correo ya se encuentra registrada");
                        $("#Registrofooter").addClass("alert-warning");
                    }
                }
                else if (n>-1){
                    $("#Registrofooter").html("El correo que ha ingesado es incorrecto");
                    $("#Registrofooter").addClass("alert-danger");
                }
            }
        });
    }
});

$("#headerSuscriptionForm").validate({
    debug: true,
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        email: {
            required: "Este campo es requerido",
            email: "Formato de email incorrecto"
        }
    },
    highlight: function(element, errorClass) {
        $(element).parent().addClass("has-error").removeClass("has-success");
    },
    unhighlight: function(element, errorClass) {
        $(element).parent().addClass("has-success").removeClass("has-error");
    },
    errorClass: "alert alert-danger",
    submitHandler: function(form) {
        var validEmail = form.email.value;
        var url = "/system/modules/com.tfsla.diario.telesur/templates/TS_DMDS.jsp"; // El script a dónde se realizará la petición.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#headerSuscriptionForm").serialize(), // datos serializados
            async: false,
            success: function (data){
                $("#Registroheader").css("display", "block");
                $("#Registroheader").addClass("alert alert-dismissible");

                var n = data.search("111");
                if(n==-1){
                    var y = data.search("0 relaciones nuevas");
                    if(y==-1){
                        $("#Registroheader").html("Su correo ha sido registrado exitosamente");
                        $("#Registroheader").addClass("alert-success");
                    }
                    else{
                        $("#Registroheader").html("Esta dirección de correo ya se encuentra registrada");
                        $("#Registroheader").addClass("alert-warning");
                    }
                }
                else if (n>-1){
                    $("#Registroheader").html("El correo que ha ingesado es incorrecto");
                    $("#Registroheader").addClass("alert-danger");
                }
            }
        });
    }
});

$("#nav-list>li").removeClass('col-xs-3');
$("#nav-list>li").addClass('col-xs-12');

$("#mobile-search-trigger").click(function() {
    $("#mobile-search-area").slideToggle();
});
$("#sections-button").click(function() {
    $("#nav-list").addClass("vertical");
    $("#nav-list").slideToggle();
});

if($("#live-signal-container").is(":visible")){
    console.log("Live signal visible");
}

$("#subfooter #categories-button").click(function() {
    console.log("epa");
    $("#subfooter #subfooter-list").addClass("vertical");
    $("#subfooter #subfooter-list .pull-right").removeClass("pull-right");
    $("#subfooter #subfooter-list").slideToggle();
});