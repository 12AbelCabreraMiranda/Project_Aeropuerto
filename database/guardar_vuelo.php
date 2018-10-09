<?php
   
   include("conexion.php");

    $avion =       $_POST["avion"];    
    $pais =         $_POST["pais"];
    $fecha_viaje =       $_POST["fecha_viaje"];    
    $hora_viaje =  $_POST["hora_viaje"];

        //SELECCION
        $idavion;$idpais;$fecha;
        $query1 = "select avion_id,pais_id,Fecha_de_vuelo from vuelo 
                where avion_id='$avion' and pais_id='$pais' and Fecha_de_vuelo='$fecha_viaje' ";    

        $result = $conexion->query($query1);
        if($row =  $result->fetch_assoc()){
            $idavion =$row['avion_id'];
            $idpais =$row['pais_id'];
            $fecha =$row['Fecha_de_vuelo'];
            
            if($idavion=$avion && $idpais=$pais && $fecha=$fecha_viaje  || $idavion=$avion && $idpais!=$pais && $fecha=$fecha_viaje){                                
                    echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Ya Existe!  </strong>  Ingrese otro .
                    </div>';             
            }//pendiente no guardar siendo diferente pais en la misma fecha y mismo avion
             
           
        }
        
        
        
        else {
            echo '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Guardado!  </strong>  Se ha registrado 
            </div>';
        }
            
            