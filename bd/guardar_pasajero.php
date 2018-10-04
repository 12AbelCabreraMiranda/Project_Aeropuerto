<?php
   
   $serverName = 'localhost';
   $connectionInfo = array('Database'=>'avionera','UID'=>'sa','PWD'=>'dba', 'CharacterSet'=>'UTF-8');
   $con = sqlsrv_connect($serverName, $connectionInfo);


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
    
        $query1 = sqlsrv_query ($con,"SELECT *FROM pasajero where numero_doc='$codigo' ");    
        //VALIDACION DE EXISTENCIA DE ALUMNO
        if($row = sqlsrv_fetch_array($query1)){
            echo "<script>
            alert('ya existe del pasaporte');
                window.location='../index.php';
            </script>"; 
    
        }else{
                //INSERCION 
                $query  = "INSERT into pasajero (nombre,apellido,tipo_doc,numero_doc,telefono,fecha_nac,direccion) 
                            VALUES('$nombre','$apellido','$doc','$codigo','$telefono','$fecha_nac','$direccion')";

                $stmt = sqlsrv_query($con, $query);
                $rows_affected = sqlsrv_rows_affected($stmt);
        
                if( $rows_affected === false) {
                    die( print_r( sqlsrv_errors(), true));
                } elseif( $rows_affected == -1) {
                        echo "No information available.<br />";
                } else {             
                    echo "<script>
                        alert('GUARDADO NEW PASAJERO');
                            window.location='../index.php';
                            $('#cuerpo_nuevo_avion').show();
                        </script>"; 
                }
 
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
                $query2 = sqlsrv_query ($con,"SELECT idpasajero FROM pasajero where nombre='$nombre' ");    


                if($row = sqlsrv_fetch_array($query2)){
                    $idPasajero =$row['idpasajero'];
                    echo $idPasajero;
                }
                

                //insert pago
                $query3  = "INSERT into pago (fecha_reserva,hora_reserva,id_pasajero,monto, destino,clase) 
                            VALUES('$fecha_viaje','$hora_viaje','$idPasajero','$valor','$pais','$clase')";

                $stmt3 = sqlsrv_query($con, $query3);
                $rows_affected3 = sqlsrv_rows_affected( $stmt3);

                if( $rows_affected3 === false) {
                    die( print_r( sqlsrv_errors(), true));
               } elseif( $rows_affected3 == -1) {
                     echo "No information available.<br />";
               } else {             
                     echo "<script>
                        alert('GUARDADO NEW PAGOS');
                            window.location='../index.php';
                        </script>"; 
               }
            

//https://sqlchoice.azurewebsites.net/en-us/sql-server/developer-get-started/php/windows/step/2.html
    }