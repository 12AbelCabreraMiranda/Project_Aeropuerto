<?php

$serverName = 'localhost';
$connectionInfo = array('Database'=>'avionera','UID'=>'sa','PWD'=>'dba', 'CharacterSet'=>'UTF-8');
$con = sqlsrv_connect($serverName, $connectionInfo);



$idPasajero;
$query2 = sqlsrv_query ($con,"SELECT idpasajero FROM pasajero where nombre='Ottoniel' ");    


if($row = sqlsrv_fetch_array($query2)){
    $idPasajero =$row['idpasajero'];
    echo $idPasajero;
}