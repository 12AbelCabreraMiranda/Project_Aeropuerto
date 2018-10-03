$(function(){
    var header = document.getElementById('header');
    var headroom = new Headroom(header);
    headroom.init();

    // Menu responsive
    // Calculamos el ancho de la pagina
    var ancho = $(window).width(),
        enlaces = $('#enlaces'),
        btnMenu = $('#btn-menu'),
        icono = $('#btn-menu .icono');

        if(ancho < 700){
            enlaces.hide();
            icono.addClass('fa-bars');
        }
        btnMenu.on('click', function(e){
            enlaces.slideToggle();
            icono.toggleClass('fa-bars');/*si ya tiene la de bars, se la va a quitar y va a poner la de times */
            icono.toggleClass('fa-times');
        });
        //COnfiguracion para tablet
        $(window).on('resize', function(){
            if($(this).width() > 700){
                enlaces.show();
                icono.addClass('fa-times');/*aparece*/
                icono.removeClass('fa-bars');/*desaparece */
            } else{
                enlaces.hide();
                icono.addClass('fa-bars'); /*aparece*/
                icono.removeClass('fa-timers');/*desaparece */
            }
        });

});