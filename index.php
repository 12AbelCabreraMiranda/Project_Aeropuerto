<?php 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aeropuerto</title>
    <link rel="icon" href="img/avion.png">
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menuEstilos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <header id="header">
        <nav class="menu">
            <div class="logo">
                <a href=""> <img src="img/icono.png" alt=""></a>
                <a href=""> <img src="img/lema.png" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"> <i class="icono fa fa-bars" aria-hidden="true"></i> </a>
            </div>

            <div class="enlaces" id="enlaces">
                <a href="#" onclick="inicio()"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                <a href="#"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Acerca de</a>
                <a href="#" onclick="nuevo_pasajero()"> <i class="fa fa-users" aria-hidden="true"></i> Pasajeros</a>
                <a href="#" onclick="nuevo_avion()"> <i class="fa fa-plane" aria-hidden="true" ></i>Avión</a>
                <a href="#"> <i class="fa fa-ticket" aria-hidden="true"></i> Vuelos Registrados</a>
                <a href="#"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Contacto</a>
            </div>

        </nav>
    </header>


    <div class="container-fluid"> 
        <!--GUARDAR NUEVO AVION -->
        <div class="col-lg-12" id="cuerpo_nuevo_avion">
            <div class="row ">
                <div class="col-lg-4" id="fondo_datos_registros">
                    <div id="boton_cerrar" onclick="cerrar_new_avion()" >
                        <div class="input-group-addon" style="cursor:pointer">
                            <b> X </b> 
                        </div>
                    </div>
                    
                    <center><h3 id="titulo_avion_nuevo">Registrar Nuevo Avion </h3></center> <br>
                    
                    <form action="index.php" class="form-horizontal nombres_labels" method="POST" id="form_new_avion" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
                        <div class="form-group"><!--Agrupacion -->
                            <label class="control-label ">TIPO DE AVIÓN:</label>
                            <div class="input-group tam_inp">                       
                                <div class="input-group-addon"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></div>             
                                <input REQUIRED class="form-control" name="tipo_avion" id="tipo_avion" type="text" placeholder="A, B, C, D, E ...">                               
                            </div><br>

                            <label class="control-label ">CAPACIDAD DE PASAJEROS:</label>
                            <div class="input-group tam_inp">                       
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>             
                                <input REQUIRED class="form-control" min="1" name="capcidad_avion" id="capcidad_avion" type="number" placeholder="0000">                                
                            </div><br>

                            <label class="control-label ">DESTINO DE VIAJES</label>
                            <div class="input-group">                       
                                <div class="input-group-addon"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></div>             
                                <input REQUIRED class="form-control" name="destino_avion" id="destino_avion" type="text" placeholder="Ingresar Pais destino">                                
                            </div>

                            <div id="respuesta_regisrado_nuevo" ></div> <br>                            

                            <div id="botones_guardar">
                                <div class="input-group-addon" style="cursor:pointer">   
                                    <input type="image" value="Save"  id="botonGuardarAvion" onclick="GuardarAvion()" >                     
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                </div>
                            </div>                        
                        </div>
                    </form>

                    <a href="#"> <img src="img/ciudad.png"  class="img-responsive"> </a>
                </div>

                <div class="col-lg-8" id="img_avion">
                    <a href="#"> <img class="img-responsive img-rounded" src="img/nuevo_avion.jpg" alt=""> </a>
                </div>
            </div>

        </div>      
        
        <!--GUARDAR NUEVO PASAJEROS -->
        <div class="col-lg-12" id="cuerpo_nuevo_pasajero">
            <div class="row ">
                <div class="col-lg-4" id="fondo_datos_registros">
                    <div id="boton_cerrar" onclick="cerrar_new_pasajero()" >
                        <div class="input-group-addon" style="cursor:pointer">
                            <b> X </b> 
                        </div>
                    </div>
                    
                    <center><h3 id="titulo_avion_nuevo">Registrar Nuevo PASAJERO </h3></center> 
                    
                    <form action="index.php" class="form-horizontal nombres_labels" method="POST" id="form_new_avion" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
                        <div class="form-group"><!--Agrupacion -->
                            <div class="col-lg-6">
                                <label class="control-label ">NOMBRE</label>
                                <div class="input-group tam_inp" >                       
                                    <div class="input-group-addon" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" name="nombre"  id="nombre" type="text" placeholder="Ingresar Nombre">                               
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label "  >APELLIDO</label>
                                <div class="input-group tam_inp" >                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" name="apellido" id="apellido"  type="text" placeholder="Ingresar Apellido">                               
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <label class="control-label ">DOCUMENTO</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" name="pasaporte" id="pasaporte" type="text" value="Pasaporte" disabled >                               
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label class="control-label ">CÓDIGO PASAPORTE</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" min="1" name="num_pasaporte" id="num_pasaporte" type="number" placeholder="0000">                                
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label class="control-label ">TELÉFONO</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" name="telefono" id="telefono" type="text" placeholder="0000-0000">                                
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <label class="control-label ">FECHA NACIMIENTO</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>             
                                    <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Ingresar fecha" >
                                </div>
                            </div>
                               
                            <div class="col-lg-6">
                                <label class="control-label ">DIRECCIÓN</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-road" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control"  name="direccion" id="direccion" type="text" placeholder="Dirección">                                
                                </div>
                            </div>
                            <div>
                               ___________________________________________________
                            </div>
                            
                            <div class="col-md-6">
                                <label class="control-label">SELECCIONAR PAÍS</label>
                                <select name="elegir" class="form-control" >                                        
                                    <option>USA</option>
                                    <option>BRASIL</option>    
                                    <option>ALAZKA</option>      
                                    <option>JAPÓN</option>                                 
                                </select> 
                            </div>

                            
                            <div class="col-md-6">
                                <label class="control-label">CLASE</label>
                                <select name="elegir" class="form-control" >                                        
                                    <option>A ($.1,200)</option>
                                    <option>B ($.1,000)</option>  
                                    <option>C ($   800)</option>
                                </select> 
                            </div>

                            <div class="col-md-6" > 
                                <label class="control-label">FECHA DE VIAJE</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>             
                                    <input type="date" name="fecha_viaje" class="form-control" id="fecha_viaje" placeholder="Ingresar fecha" >
                                </div>
                            </div> 

                            <div class="col-lg-6">
                                <label class="control-label ">HORA DE VIAJE</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" name="hora_viaje" id="hora_viaje" type="text" placeholder=00:00">                                
                                </div><br>
                            </div> 
                            

                            <div style="margin-left:15px" id="respuesta_regisrado_nuevo" >respuesta_regisrado_nuevo</div>                          

                            <div id="botones_guardar">
                                <div class="input-group-addon" style="cursor:pointer">   
                                    <input type="image" value="Save"  id="botonGuardarAvion" onclick="GuardarAvion()" >                     
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                </div>
                            </div>                        
                        </div>
                    </form>

                    
                </div>

                <div class="col-lg-8 porta">
                    <a href="#"> <img class="img-responsive img-rounded portada" src="img/registrando.jpeg" > </a>
                </div>
            </div>

        </div> 



    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/headroom.min.js"> </script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/mostrar_ocultar.js"></script>
    
</body>
</html>