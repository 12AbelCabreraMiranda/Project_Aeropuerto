$(document).ready(function(){
    $("#form_new_vuelo").submit(nuevo_vuelo)
    function nuevo_vuelo(evento){
        evento.preventDefault()

        var datos = new FormData($("#form_new_vuelo")[0])
        //$("#respuesta_nuevo_vueloR").html("<img src='img/cargando.gif' style='height:80px'> ")
        $.ajax({
            url: 'database/guardar_vuelo.php',
            type: 'POST',
            data: datos,
            contentType: false,
            processData: false,
            success: function(datos){
                $("#respuesta_nuevo_vueloR").html(datos)
            }
        })
    }
})