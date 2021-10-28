<?php

//print_r($_POST);

include '../../conexionbd/conexionlivestocksecundario.php';

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $rol=$_POST['rol'];
    $finca=$_POST['finca'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    $consulta = $pdo-> prepare ("UPDATE usuarios SET  nombres=?,apellidos=?, correo=?,telefono=?, direccion=?,rol_id_rol=?,finca_id_finca=? WHERE usuario = ? AND contrasena = ?;");
    $resultado = $consulta->execute([$nombres, $apellidos, $correo, $telefono, $direccion, $rol, $finca, $usuario, $contrasena]);
    if ($resultado === TRUE){
        echo "<script> alert('Datos Guardados.');
    window.location.href='edit_usuarios.php';
    </script>";
    }else{
        echo "<script> alert('Datos Guardados.');
        window.location.href='edit_usuarios_second.php';
        </script>";
    }


 ?> 