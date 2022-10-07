$(document).ready(function(){

    // Máscara nos Inputs
    $('.maskPercentual').mask('#.##0,00', {reverse: true});

});

$(window).on('load', function() {
    
    // Fecha o Loading
    $(".loading-geral").fadeOut();

});