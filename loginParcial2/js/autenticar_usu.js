$(document).ready(function(){
    $("#iniciosesion").submit(autenticar_us)
    function autenticar_us(evento){
        evento.preventDefault()
        //alert("funciona registro");
        $('#no_existe_usu').show(); 

        var datos = new FormData($("#iniciosesion")[0])
        $("#no_existe_usu").html("<img src='img/cargando.gif' style='height:30px'> ")
          $.ajax({
              url: 'autenticar_usu.php',              
              type: 'POST',
              data: datos,
              contentType: false, //se anota porque se mandarán archivos
              processData: false,
              success: function(datos){
                  $("#no_existe_usu").html(datos)
              }
          })

        



    }
})
