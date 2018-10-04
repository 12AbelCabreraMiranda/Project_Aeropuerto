$(document).ready(function(){
    $("#form_new_avion").submit(guardar_aviones)
    function guardar_aviones(evento){
        evento.preventDefault()

        var datos = new FormData($("#form_new_avion")[0])
        //$("#respuesta_regisrado_nuevo_avion").html("<img src='img/cargando.gif' style='height:80px'> ")
        $.ajax({
            url: 'bd/guardar_avion.php',
            type: 'POST',
            data: datos,
            contentType: false,
            processData: false,
            success: function(datos){
                $("#respuesta_regisrado_nuevo_avion").html(datos)
            }
        })
    }
})