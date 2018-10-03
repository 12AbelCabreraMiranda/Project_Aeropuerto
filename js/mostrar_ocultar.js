function inicio(){
    $('#cuerpo_nuevo_avion').hide();
    $('#cuerpo_nuevo_pasajero').hide();
}

function cerrar_new_avion(){
    $('#cuerpo_nuevo_avion').hide();
}

function nuevo_avion(){
    $('#cuerpo_nuevo_avion').show();
    $('#cuerpo_nuevo_pasajero').hide();
}

function cerrar_new_pasajero(){
    $('#cuerpo_nuevo_pasajero').hide();
}

function nuevo_pasajero(){
    $('#cuerpo_nuevo_pasajero').show();
    $('#cuerpo_nuevo_avion').hide();
}