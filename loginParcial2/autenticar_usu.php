<?php
session_start();
    include("bd/conexion.php");
    $usuario=$_POST['usuario'];
    $clave = $_POST['contrasenia'];

    $proceso= ("select *from usuario WHERE usuario='$usuario' and contrasenia='$clave' ");
    $result = $conexion->query($proceso);
    if($row =  $result->fetch_assoc()){
        $_SESSION['u_usuario'] = $usuario;
        header("Location: ../index.php");
    }else{
        echo "<script>
        alert('NO EXISTE EL USUARIO');
            window.location='Login.php';
        </script>"; 
    }
        
?>