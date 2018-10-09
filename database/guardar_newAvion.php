<?php
    
    include("conexion.php");
    
    $tipo_Avion =       $_POST["tipo_avion"];    
    $capacidad_avion =  $_POST["capcidad_avion"];

     //SELECCION
    
     $query1 = "SELECT *FROM avion where tipo='$tipo_Avion' ";    
     //VALIDACION DE EXISTENCIA DE ALUMNO
     $resultado1 = $conexion->query($query1);
     if($row =  $resultado1->fetch_assoc()){
         echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Ya Existe!  </strong>  Ingrese otro tipo de Avion.
                </div>';
 
     }else{
             //INSERCION 
             $query2  = "INSERT into avion (tipo,capacidad_pasajero) VALUES('$tipo_Avion','$capacidad_avion')";

             $resultado2= $conexion->query($query2);    
                     
             echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Guardado!  </strong>  Se ha registrado un nuevo Avión.
                    </div>';
         

    }