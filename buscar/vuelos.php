

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aeropuerto</title>
    <link rel="icon" href="../img/avion.png">
    <link rel="stylesheet" href="../css/estilo_index.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/menuEstilos.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../RelojEstilos.css">
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
                <a href="#" onclick="vuelos_disponibles()"> <i class="fa fa-plane" aria-hidden="true"></i> Vuelos Disponibles</a>                              
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

        <!--MISION VISION Y VALORES -->
        <div class="col-lg-12" id="vuelos_dispo">
            <div class="row ">
            <div id="boton_cerrar_mision" onclick="cerrar_new_avion()" >
                <div class="input-group-addon" style="cursor:pointer">
                    <b> X </b> 
                </div>
            </div>
            
            <!--BUSCADOR -->
            <?php
            include 'index.php'
            ?>
        
            </div>

        </div> 
    </div>

    <script src="../RelojEventos.js"></script>    
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/headroom.min.js"> </script>
    <script src="../js/menu.js"></script>
    <script src="../js/bootstrap.min.js" ></script>
    <script src="../js/mostrar_ocultar.js"></script>

    
</body>
</html>