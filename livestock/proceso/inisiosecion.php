<?php

include "../conexionbd/conexionlivestocksecundario.php";
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$_SESSION['usuario']=$usuario;



$sentencia = $pdo->prepare("SELECT * FROM usuarios where usuario = ? and contrasena = ?;");

$sentencia->execute([$usuario, $contrasena]);

if ($sentencia->rowCount() == 1){
session_start();
    $datos = $sentencia->fetch();
    $_SESSION['id_usuarios']=$datos['id_usuarios'];
    $_SESSION['nombres']=$datos['nombres'];
    $_SESSION['apellidos']=$datos['apellidos'];
    $_SESSION['correo']=$datos['correo'];
    $_SESSION['telefono']=$datos['telefono'];
    $_SESSION['direccion']=$datos['direccion'];
    $_SESSION['rol_id_rol']=$datos['rol_id_rol'];
    $_SESSION['finca_id_finca']=$datos['finca_id_finca'];

    header('Location: ../html/finca.php');
    

}else{
    echo "<script> alert('No existe el usuario y/o contraseña.');
    window.location.href='../index.php#iniciosesion';
    </script>";
}

?>