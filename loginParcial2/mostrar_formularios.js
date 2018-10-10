function mostrar_recup_pass(){
    $('.form_login').hide();
    $('.mostrar_contrasenia').show();
    $(".mostrar_contrasenia").css("margin-top", "120px");//integracion de estilo css
}

function registrarme_Datos(){
    $('.form_registrarme').show();
    $('.form_login').hide();
    $('.mostrar_contrasenia').hide()
;}

function tengo_cuenta(){
    $('.form_registrarme').hide();
    $('.form_login').show();
}

function mostrar_login(){
    $('.form_login').show();
    $('.mostrar_contrasenia').hide();
}