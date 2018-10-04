<?php
   
   $serverName = 'localhost';
   $connectionInfo = array('Database'=>'avionera','UID'=>'sa','PWD'=>'dba', 'CharacterSet'=>'UTF-8');
   $con = sqlsrv_connect($serverName, $connectionInfo);


    $tipo_Avion =       $_POST["tipo_avion"];    
    $capacidad_avion =  $_POST["capcidad_avion"];
    $destino_avion  =   $_POST["destino_avion"];

    //SELECCION
    
    $query1 = sqlsrv_query ($con,"SELECT *FROM avion where tipo='$tipo_Avion' ");    
    //VALIDACION DE EXISTENCIA DE ALUMNO
    if($row = sqlsrv_fetch_array($query1)){
        echo "<script>
        alert('ya existe');
            window.location='../index.php';
        </script>"; 

    }else{
        //INSERCION 
        $query  = "INSERT into avion (tipo,capacidad,destino) VALUES('$tipo_Avion','$capacidad_avion','$destino_avion')";
        $stmt = sqlsrv_query($con, $query);
        $rows_affected = sqlsrv_rows_affected( $stmt);

        if( $rows_affected === false) {
            die( print_r( sqlsrv_errors(), true));
       } elseif( $rows_affected == -1) {
             echo "No information available.<br />";
       } else {             
             echo "<script>
                alert('GUARDADO NEW AVION');
                    window.location='../index.php';
                    $('#cuerpo_nuevo_avion').show();
                </script>"; 
       }
       echo 'no exite';
    }
    

?>

