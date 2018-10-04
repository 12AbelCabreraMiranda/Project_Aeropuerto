

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
                <a href="#" onclick="nuevo_pasajero()"> <i class="fa fa-users" aria-hidden="true"></i> Pasajeros</a>
                <!--<a href="#" onclick="nuevo_avion()"> <i class="fa fa-plane" aria-hidden="true" ></i>Avión</a>-->
                <a href="#" onclick="vuelos_registrados()"> <i class="fa fa-ticket" aria-hidden="true"></i> Vuelos Registrados</a>                
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
                    
                    <form action="bd/guardar_avion.php" class="form-horizontal nombres_labels" method="POST" id="form_new_avion" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
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

                            <div id="respuesta_regisrado_nuevo_avion"></div> <br>      

                            


                            <div id="botones_guardar" >
                                <div class="input-group-addon" style="cursor:pointer">   
                                    <input type="image" value="Save"  id="botonGuardarAvion"  onclick="guardar_aviones()">                                              
                                                         
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
                    
                    <form action="database/guardar_pasajero.php" class="form-horizontal nombres_labels" method="POST" id="form_new_Pasajero" enctype="multipart/form-data" ><!--Permite dar saltos de espacios entre filas -->
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

        </div> 

        <!--VUELOS REGISTRADOS -->
        <div class="col-lg-12" id="cuerpo_vuelos_registrados">
            <div class="row ">
                 
                  <!-- DATOS DE PASAJEROS REGISTRADOS EN EL AVION-->
                  <br>
                <div class="col-lg-12" id="img_avion">
                    <div class="table-responsive scrollable " style="border-radius:5px" id="tabla_vocal">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            
                            <tr class="success">                                
                                <th style="text-align:center">NOMBRE</th>
                                <th style="text-align:center">APELLIDO</th>                            
                                <th style="text-align:center">DOCUMENTO</th>
                                <th style="text-align:center">No. DOCUMENTO</th>
                                <th style="text-align:center">TELEFONO</th>
                                <th style="text-align:center">FECHA NACIMIENTO</th>
                                <th style="text-align:center">DIRECCION</th>
                                <th style="text-align:center">VIAJAR A</th>
                                <th style="text-align:center">VALOR</th>
                                <th style="text-align:center">CLASE</th>
                                <th style="text-align:center">FECHA DE VIAJE</th>
                                <th style="text-align:center">HORA DE VIAJE</th>

                            </tr>
                            <!-- CODIGO PHP-->
                            <?php
   
                            include("database/conexion.php");
                                
                            $consulta = "SELECT pasajero.nombre,pasajero.apellido,pasajero.tipo_documento,pasajero.num_documento,
                                                                    pasajero.telefono,pasajero.fecha_nacimiento,pasajero.direccion,
                                                                    pago.destino,pago.monto,pago.clase,pago.fecha_reserva,pago.hora_reserva
                                                            FROM pago
                                                            inner join pasajero on pasajero.idpasajero = pago.idpasajero_p
                                                            order by pago.clase asc  ";  
                            
                            $resultado = $conexion->query($consulta);
                            while($row =  $resultado->fetch_assoc()){
                            ?>  
                                <tr style="background: #ffffff">
                                    <td> <?php echo $row['nombre']; ?> </td>
                                    <td> <?php echo $row['apellido']; ?> </td>
                                    <td> <?php echo $row['tipo_documento']; ?> </td>                                
                                    <td> <?php echo $row['num_documento']; ?> </td>
                                    <td> <?php echo $row['telefono']; ?> </td>
                                    <td> <?php echo $row['fecha_nacimiento']; ?> </td>
                                    <td> <?php echo $row['direccion']; ?> </td>  
                                    <td> <?php echo $row['destino']; ?> </td>
                                    <td> <?php echo $row['monto']; ?> </td>
                                    <td> <?php echo $row['clase']; ?> </td>
                                    <td> <?php echo $row['fecha_reserva']; ?> </td> 
                                    <td> <?php echo $row['hora_reserva']; ?> </td>                               
                                    
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
    
</body>
</html>