
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="img/usuario.png">
    <script src="js/jquery-3.2.1.js"></script>    
    <link rel="stylesheet" href="css/bootstrap.min.css">     
    <link rel="stylesheet" href="fondo.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
<br>  
    <div class="container-fluid">
            
        <div class="row">   
           

        <!-- INICIAR SESION-->
        <div class="col-lg-3 col-xs-8 col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-2 col-lg-offset-4 fondo_form_Login form_login">   
                                    
            <center>
            <h3 id="tituloregistrarme">Bienvenido</h3> <br>
            </center> 
            <form action="autenticar_usu.php" method="post" id="iniciosesion" enctype="multipart/form-data">
                
                <div class="input-group" style="margin-left:14%">
                    <label class="colorT">USUARIO</label>                        
                    <div class="input-group tam_inp" >                       
                        <div class="input-group-addon" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>                                     
                        <input REQUIRED name="usuario" type="text" id="usu" class="form-control"  placeholder="Ingresar usuario">
                    </div>
                </div>

                <div class="input-group" style="margin-left:14%"> <br>
                    <label class="colorT">CONTRASEÑA</label>                                             
                    <div class="input-group tam_inp" >
                        <div class="input-group-addon"><i class="fa fa-key fa-lg" aria-hidden="true"></i> </div>                 
                        <input REQUIRED name="contrasenia" type="password" id="pass" class="form-control" placeholder="*******"> 
                    </div>    
                            
                </div>

                    
                
                <center>
                    <input onclick="autenticar_us()" name="login" id="boton" type="submit" class="btn btn-block initSesion" value="Iniciar Sesion">                       
                </center> 
            </form>
            <center>
                <a href="../buscar/vuelos.php"> <p class="colorT" id="olvidado"> Iniciar Sesión como invitado</p> </a> <br>
            </center>
        </div>

        </div>
    </div>
        
    <script src="/js/bootstrap.min.js" ></script>
    <script src="guardarAlumnos.js" ></script>
    <script src="mostrar_formularios.js" ></script>   
    <script src="recuperar_pass.js" ></script>  
     
    
    <!-- pendiente autenticacion con ajax-->
</body>
</html>