<?php
   
   include("conexion.php");

    $nombre =       $_POST["nombre"];    
    $apellido =  $_POST["apellido"];
    $doc  =   "pasaporte";
    $codigo =       $_POST["num_pasaporte"];    
    $telefono =  $_POST["telefono"];
    $fecha_nac  =   $_POST["fecha"];
    $direccion =       $_POST["direccion"];    
    $pais =  $_POST["pais"];
    $clase  =   $_POST["precio"];
    $fecha_viaje =       $_POST["fecha_viaje"];    
    $hora_viaje =  $_POST["hora_viaje"];


        //SELECCION
    
        $query1 = "SELECT *FROM pasajero where num_documento='$codigo' ";    
        //VALIDACION DE EXISTENCIA DE ALUMNO
        $result = $conexion->query($query1);
        if($row =  $result->fetch_assoc()){
            echo "<script>
                alert('ya existe del pasaporte');
                    window.location='../index.php';
                </script>"; 
    
        }else{
                //INSERCION 
                $query  = "INSERT into pasajero (nombre,apellido,tipo_documento,num_documento,telefono,fecha_nacimiento,direccion) 
                            VALUES('$nombre','$apellido','$doc','$codigo','$telefono','$fecha_nac','$direccion')";

                $resultado= $conexion->query($query);    
                
 
                //insertar pago
                $valor;
                if($clase=='A'){
                    $valor=2000;
                }
                if($clase=='B'){
                    $valor=1500;
                }
                if($clase=='C'){
                    $valor=1000;
                }

            
                $idPasajero;
                $query2 = "SELECT idpasajero FROM pasajero where nombre='$nombre' ";    
                $result2 = $conexion->query($query2);

                //VALIDACION DE EXISTENCIA DE ALUMNO
                if($row = $result2->fetch_assoc()){
                    $idPasajero =$row['idpasajero'];
                    echo $idPasajero;
                }
                

                //insert pago
                $query3  = "INSERT into pago (fecha_reserva,hora_reserva,idpasajero_p,monto, destino,clase) 
                            VALUES('$fecha_viaje','$hora_viaje','$idPasajero','$valor','$pais','$clase')";

                $resultad3= $conexion->query($query3);    
                

                echo "<script>
                alert('Registrado Pasajero');
                    window.location='../index.php';
                </script>"; 
            

//https://sqlchoice.azurewebsites.net/en-us/sql-server/developer-get-started/php/windows/step/2.html
    }