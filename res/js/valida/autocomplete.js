$(function(){
    
    var apresenta = $('.resultados');

    apresenta.hide().html('<li> Aguarde, carregando... </li>');
    $('.j_autocomplete').autocomplete({
        source: '/autocomplete'
    });

});