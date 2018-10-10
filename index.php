<?php
    include("database/conexion.php");
    $query = "select idavion, tipo from avion";
    $resultado = $conexion->query($query);

    $query2 = "select idpais_destino, nombre_pais from pais_destino order by nombre_pais asc";
    $resultado2 = $conexion->query($query2);
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
    <link rel="stylesheet" href="RelojEstilos.css">
</head>
<body>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->
    <?php // AGREGARLO EN LAS DEMAS PAGINAS PARA QUE LOS QUE ESTEN CON SESION INICIADO PUEDAN ACCEDER ELSE NOT ACCESS
      session_start();
        if(isset($_SESSION['u_usuario'])){
        }else{
            header("Location: loginParcial2/Login.php");
        }
    ?>
    <!--PERMITE REDIRECCIONARLO AL LOGIN SI NO HAY SESION INICIADA -->

    <header id="header">
        <nav class="menu">
            <div class="logo">
                <a href=""> <img src="img/icono.png" alt=""></a>
                <a href=""> <img src="img/lema.png" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"> <i class="icono fa fa-bars" aria-hidden="true"></i> </a>
            </div>

            <div class="enlaces" id="enlaces">
                <a href="#" onclick="inicio()"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                <a href="#" onclick="acerca_de()"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Acerca de</a>
                <a href="#" onclick="registrar_vuelos()"> <i class="fa fa-plane" aria-hidden="true"></i> Registrar Vuelos</a>
                <!--<a href="#" onclick="nuevo_pasajero()"> <i class="fa fa-users" aria-hidden="true"></i> Pasajeros</a> -->
                <a href="#" onclick="nuevo_avion()"> <i class="fa fa-plane" aria-hidden="true" ></i>Avión</a>
                <a href="#" onclick="vuelos_registrados()"> <i class="fa fa-ticket" aria-hidden="true"></i> Vuelos Registrados</a> 
                <a href="loginParcial2/cerrar_sesion.php"> <i class="fa fa-close" aria-hidden="true"></i> Salir</a>                
            </div>

        </nav>
    </header>

    <!-- RELOJ -->
    <div class="wrap" style="margin-top:80px;margin-left:-10px"> <!--Sirve para centrar el reloj Horizontalmente-->
        <div class="widget">

            <div class="fecha">
                <p id="diaSemana" class="diaSemana"></p>
                <p id="dia" class="dia"></p>
                <p>de</p>
                <p id="mes" class="mes"></p>
                <p>del</p>
                <p id="year" class="year"></p>
            </div>
                   
            <div class="reloj">
                <p id="horas" class="horas"></p>
                    <p>:</p>
                    <p id="minutos" class="minutos"></p>
                    <p>:</p>
                    <div class="caja-segundos">
                        <p id="ampm" class="ampm"></p>
                        <p id="segundos" class="segundos"></p>
                    </div>
            </div>
        </div>
    </div>
    <!-- RELOJ -->

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
                    
                    <form  class="form-horizontal nombres_labels" method="POST" id="form_new_avion" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
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

                            <div id="respuesta_regisrado_nuevo_avion"></div> <br>                                  

                            <div id="botones_guardar" >
                                <div class="input-group-addon" style="cursor:pointer">   
                                    <input type="image" value="Save"  id="botonGuardarAvion"   onclick="guardar_aviones()">                                              
                                                         
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
        <!--
        <div class="col-lg-12" id="cuerpo_nuevo_pasajero">
            <div class="row ">
                <div class="col-lg-4" id="fondo_datos_registros">
                    <div id="boton_cerrar" onclick="cerrar_new_pasajero()" >
                        <div class="input-group-addon" style="cursor:pointer">
                            <b> X </b> 
                        </div>
                    </div>
                    
                    <center><h3 id="titulo_avion_nuevo">Registrar Nuevo PASAJERO </h3></center> 
                    
                    <form action="database/guardar_pasajero.php" class="form-horizontal nombres_labels" method="POST" id="form_new_Pasajero" enctype="multipart/form-data" >
                        <div class="form-group">
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
                                <select name="pais" class="form-control" >                                        
                                    <option>USA</option>
                                    <option>ALASKA</option>  
                                    <option>MEXICO</option>                          
                                    <option>BRASIL</option> 
                                    <option>ARGENTINA</option> 
                                    <option>JAPÓN</option> 
                                </select> 
                            </div>

                            
                            <div class="col-md-6">
                                <label class="control-label">CLASE</label>
                                <select name="precio" class="form-control" >                                        
                                    <option>A </option>
                                    <option>B </option>  
                                    <option>C </option>
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
                                    <input REQUIRED class="form-control" name="hora_viaje" id="hora_viaje" type="time" placeholder=00:00">                                
                                </div><br>
                            </div> 
                            

                            <div style="margin-left:15px" id="respuesta_regisrado_nuevo" ></div>                          

                            <div id="botones_guardar">
                                <div class="input-group-addon" style="cursor:pointer">   
                                    <input type="image" value="Save"  id="botonGuardarAvion" >                     
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

        </div> -->

        <!--GUARDAR NUEVO VUELO DE AVION -->
        <div class="col-lg-12" id="cuerpo_nuevo_vuelo">
            <div class="row ">
                <div class="col-lg-4" id="fondo_datos_registros">
                    <div id="boton_cerrar" onclick="cerrar_new_avion()" >
                        <div class="input-group-addon" style="cursor:pointer">
                            <b> X </b> 
                        </div>
                    </div>
                    
                    <center><h3 id="titulo_avion_nuevo">Registrar Nuevo VUELO DE AVION </h3></center> 
                    
                    <form action="index.php" class="form-horizontal nombres_labels" method="POST" id="form_new_vuelo" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
                        <div class="form-group"><!--Agrupacion -->    

                                
                            <div class="col-lg-6" style="color:black"> <br>
                                <label class="control-label " style="color:white">SELECCIONAR AVIÓN</label>
                                <select name="avion" class="form-control"  id="id_avion">
                                    <?php while($row = $resultado->fetch_assoc()){  ?>
                                        <option value="<?php echo $row['idavion']; ?> ">
                                            <?php  echo $row['tipo']; ?>                                             
                                        </option>
                                    <?php }?>
                                </select> 
                            </div>   
                        
                            <div class="col-lg-6" style="color:black">     <br>                                    
                                <label class="control-label " style="color:white">SELECCIONAR PAIS</label>
                                <select name="pais" class="form-control"  id="id_pais">
                                    <?php while($row = $resultado2->fetch_assoc()){  ?>
                                        <option value="<?php echo $row['idpais_destino']; ?> ">
                                            <?php  echo $row['nombre_pais']; ?>                                             
                                        </option>
                                    <?php }?>
                                </select> 
                            </div>  

                            <div class="col-md-6" > <br>
                                <label class="control-label">FECHA DE VIAJE</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>             
                                    <input type="date" name="fecha_viaje" class="form-control" id="fecha_viaje" placeholder="Ingresar fecha" >
                                </div>
                            </div> 

                            <div class="col-lg-6"> <br>
                                <label class="control-label ">HORA DE VIAJE</label>
                                <div class="input-group tam_inp">                       
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>             
                                    <input REQUIRED class="form-control" name="hora_viaje" id="hora_viaje" type="time" placeholder=00:00">                                
                                </div><br>
                            </div>                             
                                                     
                            <div id="botones_guardar_vuelo">
                                <div class="input-group-addon" style="cursor:pointer">   
                                    <input type="image" value="Save"  id="botonGuardarAvion" onclick="nuevo_vuelo()">                     
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                </div>
                            </div> 

                        </div>
                    </form>
                    <div style="margin-left:15px" id="respuesta_nuevo_vueloR" ></div>                            
                    
                </div>

                <div class="col-lg-8 col-xs-12 porta">
                    <a href="#"> <img class="img-responsive img-rounded portada" src="img/registrando.jpeg" > </a>
                </div>
            </div>

        </div> 

        <!--VUELOS REGISTRADOS -->
        <div class="col-lg-12" id="cuerpo_vuelos_registrados">
            <div class="row ">
                 
                  <!-- DATOS DE PASAJEROS REGISTRADOS EN EL AVION-->
                  
                <div class="col-lg-12" id="img_avion">
                    <div id="boton_cerrar_registrados" onclick="cerrar_new_avion()" >
                        <div class="input-group-addon" style="cursor:pointer">
                            <b> X </b> 
                        </div>
                    </div>
                    <div class="table-responsive scrollable " style="border-radius:5px" id="tabla_vocal">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            
                            <tr class="success">                                
                                <th style="text-align:center">tipo</th>
                                <th style="text-align:center">capacidad_pasajero</th>                            
                                <th style="text-align:center">nombre_pais</th>
                                <th style="text-align:center">valor</th>
                                <th style="text-align:center">Fecha_de_vuelo</th>
                                <th style="text-align:center">hora_de_vuelo</th>                      

                            </tr>
                            <!-- CODIGO PHP-->
                            <?php
   
                            include("database/conexion.php");
                                
                            $consulta = "select avion.tipo,avion.capacidad_pasajero, pais_destino.nombre_pais,pais_destino.valor,  
                                        vuelo.Fecha_de_vuelo,vuelo.hora_de_vuelo
    
                                            from vuelo
                                            inner join avion on avion.idavion = vuelo.avion_id
                                            inner join pais_destino on pais_destino.idpais_destino = vuelo.pais_id  
                                            
                                            order by pais_destino.nombre_pais asc ";  
                            
                            $resultado = $conexion->query($consulta);
                            while($row =  $resultado->fetch_assoc()){
                            ?>  
                                <tr style="background: #ffffff">
                                    <td> <?php echo $row['tipo']; ?> </td>
                                    <td> <?php echo $row['capacidad_pasajero']; ?> </td>                                                                  
                                    <td> <?php echo $row['nombre_pais']; ?> </td>
                                    <td> <?php echo $row['valor']; ?> </td>
                                    <td> <?php echo $row['Fecha_de_vuelo']; ?> </td>
                                    <td> <?php echo $row['hora_de_vuelo']; ?> </td>                                                                   
                                </tr>
                            <?php      
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>

        </div> 

        <!--MISION VISION Y VALORES -->
        <div class="col-lg-12" id="acerca_de">
            <div class="row ">
            <div id="boton_cerrar_mision" onclick="cerrar_new_avion()" >
                <div class="input-group-addon" style="cursor:pointer">
                    <b> X </b> 
                </div>
            </div>

                <h2 id="espacio_vision" style="text-align:center; color:white">MISIÓN, VISIÓN Y VALORES</h2>
                <hr>

                <div style="text-align:center; color:white;text-align:justify" class="col-lg-4" id="fondo_datos_registros">                
                    <table>
                        <tr>
                            <td>Aeropuerto "Viaje Seguro"</td>
                        </tr>
                        <tr><td>6ª calle Entrada Villas El Kiosko </td></tr>
                        <tr><td>Tel. (502) 7571 3646</td></tr>
                        <tr><td>Tel. (502) 7751 9846</td></tr>
                        <tr><td>viajeseguro95@gmail.com</td></tr>
                    </table> <br><br>

                    <h4 style="text-align:center">MISIÓN</h4> <br>
                    Aeropuerto "Viaje Seguro" Internacional comparte la visión de su matriz: ser una empresa líder y un referente en el sector de la gestión de infraestructuras aeroportuarias en el ámbito mundial.

                    Participar y tener una fuerte presencia en el mercado internacional de prestación de servicios en operaciones aeroportuarias es la contribución de Vuelos Internacional al grupo.
                </div>                    
                
                <div style="text-align:center; color:white;text-align:justify" class="col-lg-4" id="">
                    <h4 style="text-align:center">VISIÓN</h4> <br>
                    <p>La misión de "Viaje Seguro" Internacional se orienta hacia dos objetivos principales:</p>
                    <p>Incrementar la presencia internacional de "Viaje Seguro" como operador global de infraestructuras aeronáuticas, proporcionando servicios de gestión de aeropuertos con seguridad, eficacia, eficiencia y respeto al medio ambiente, buscando siempre la rentabilidad en cada una de las operaciones.</p>                
                    <p>Favorecer la presencia empresarial e institucional española en el ámbito internacional.</p>
                    <p>Con estos objetivos "Viaje Seguro"  Internacional concurre a licitaciones para gestionar y operar infraestructuras aeroportuarias en diferentes lugares del mundo, con una especial vocación hacia aquéllas que se desarrollan en América Latina y Europa pero sin perder de vista los mercados emergentes como Oriente Medio o Asia.</p>
                </div>

                <div style="text-align:center; color:white;text-align:justify" class="col-lg-4" id="">
                    <h4 style="text-align:center">VALORES</h4>  <br>
                    <p>"Viaje Seguro" Internacional desarrolla sus proyectos basándose en sus valores de experiencia y conocimiento en el sector aeronáutico, su compromiso en la optimización de servicios de calidad y consiguiendo la confianza de sus socios, clientes e instituciones de su área de influencia.</p>               
                </div>

            </div>

        </div> 
    </div>

    <script src="RelojEventos.js"></script>    
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/headroom.min.js"> </script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/mostrar_ocultar.js"></script>
    <script src="guardar_avion.js"></script>
    <script src="database/guardar_vuelo.js"></script>
    
</body>
</html>