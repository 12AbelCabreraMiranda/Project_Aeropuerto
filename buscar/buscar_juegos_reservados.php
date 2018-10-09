<?php
//session_start();

$mysqli = new mysqli("localhost","root","","aeropuerto"); 
$salida ="";
$query = "select avion.tipo,avion.capacidad_pasajero, pais_destino.nombre_pais,pais_destino.valor,  vuelo.Fecha_de_vuelo,vuelo.hora_de_vuelo
    
            from vuelo
            inner join avion on avion.idavion = vuelo.avion_id
            inner join pais_destino on pais_destino.idpais_destino = vuelo.pais_id  
            
            order by pais_destino.nombre_pais asc ";

if(isset($_POST['consulta'])){
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query ="select avion.tipo,avion.capacidad_pasajero, pais_destino.nombre_pais,pais_destino.valor,  vuelo.Fecha_de_vuelo,vuelo.hora_de_vuelo

            from vuelo
            inner join avion on avion.idavion = vuelo.avion_id
            inner join pais_destino on pais_destino.idpais_destino = vuelo.pais_id  

    where nombre_pais like '%".$q."%' ";
}
$resultado = $mysqli->query($query);
if($resultado->num_rows > 0){
    $salida.="<center> <div class='table-responsive'> <table class='tabla_datos table table-striped table-bordered table-hover table-condensed' style='margin-top:30px'>
                <thead>
                    <tr>
                        <td style='height:40px; background:gray; text-align:center; color:white'>TIPO AVION</td>
                        <td style='height:40px; background:gray; text-align:center; color:white'>CAPACIDAD</td>
                        <td style='height:40px; background:gray; text-align:center; color:white'>DESTINO VUELO</td>
                        <td style='height:40px; background:gray; text-align:center; color:white'>VALOR</td>
                        <td style='height:40px; background:gray; text-align:center; color:white'>FECHA VUELO</td>
                        <td style='height:40px; background:gray; text-align:center; color:white'>HORA VUELO</td>
                    
                    <tr>
                <thead>
                <tbody>";
    while($fila = $resultado->fetch_assoc()){
        $salida.="<tr class='warning'>
                    <td style='padding-top:10px; text-align:center'>".$fila['tipo']." </td>
                    <td style='padding-top:10px'>de  ".$fila['capacidad_pasajero']." Pasajero</td>
                    <td style='padding-top:10px'>".$fila['nombre_pais']." </td>
                    <td style='padding-top:10px; text-align:center'>$ ".$fila['valor']." </td>
                    <td style='padding-top:10px; text-align:center'>".$fila['Fecha_de_vuelo']." </td>
                    <td style='padding-top:10px; text-align:center'>".$fila['hora_de_vuelo']." </td>
                   
                </tr>";
    }
    $salida.="</tbody></table> </div> </center>";

}else{
    $salida.='
            <div class="alert alert-warning alert-dismissible" role="alert" style="margin-top:10px">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>PAIS No encontrados!</strong>  De momento no hay VUELOS disponibles para tu destino.
            </div>';
}
echo $salida;
$mysqli->close();
?>