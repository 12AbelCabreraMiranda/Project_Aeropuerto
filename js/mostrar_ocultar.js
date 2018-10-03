function inicio(){
    $('#cuerpo_nuevo_avion').hide();
    $('#cuerpo_nuevo_pasajero').hide();
    $('#acerca_de').hide();
    $('#cuerpo_vuelos_registrados').hide();
    $('.wrap').show();
}

function cerrar_new_avion(){
    $('#cuerpo_nuevo_avion').hide();
    $('#cuerpo_vuelos_registrados').hide();
    $('#acerca_de').hide();
    $('.wrap').show();
}

function nuevo_avion(){
    $('#cuerpo_nuevo_avion').show();
    $('#cuerpo_nuevo_pasajero').hide();
    $('#cuerpo_vuelos_registrados').hide();
    $('#acerca_de').hide();
    $('.wrap').hide();
}

function cerrar_new_pasajero(){
    $('#cuerpo_nuevo_pasajero').hide();
    $('.wrap').show();
    
}

function nuevo_pasajero(){
    $('#cuerpo_nuevo_pasajero').show();
    $('#cuerpo_nuevo_avion').hide();
    $('#cuerpo_vuelos_registrados').hide();
    $('#acerca_de').hide();
    $('.wrap').hide();
}

function vuelos_registrados(){
    $('#cuerpo_vuelos_registrados').show();
    $('#cuerpo_nuevo_pasajero').hide();
    $('#cuerpo_nuevo_avion').hide();
    $('#acerca_de').hide();
    $('.wrap').hide();
}

function acerca_de(){
    $('#cuerpo_vuelos_registrados').hide();
    $('#cuerpo_nuevo_pasajero').hide();
    $('#cuerpo_nuevo_avion').hide();
    $('#acerca_de').show();
    $('.wrap').hide();
}