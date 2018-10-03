<?php

    $serverName = 'localhost';
    $connectionInfo = array('Database'=>'RegistrosPersonas','UID'=>'sa','PWD'=>'dba', 'CharacterSet'=>'UTF-8');
    $con = sqlsrv_connect($serverName, $connectionInfo);

    if($con){
        echo 'conexion successfully';
    }else{
        echo 'falló la conexion bd';
    }