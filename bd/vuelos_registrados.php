<?php
   
   $serverName = 'localhost';
   $connectionInfo = array('Database'=>'avionera','UID'=>'sa','PWD'=>'dba', 'CharacterSet'=>'UTF-8');
   $con = sqlsrv_connect($serverName, $connectionInfo);
